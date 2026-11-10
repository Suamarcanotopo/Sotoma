#!/usr/bin/env python3
"""SOTOMA PR Lock: structural/provenance gate, not a runtime or clinical audit."""
import argparse
import json
import os
import re
import sys
from pathlib import Path

REGISTRY = Path("docs/pr-lock/REGISTRY.json")
SHA = re.compile(r"^[0-9a-f]{40}$")
VERSION = re.compile(r"^\d+\.\d+\.\d+$")
WORK_ID = re.compile(r"^[A-Z0-9][A-Z0-9_-]{7,100}$")
ENUMS = {
    "github": {"NO_PR", "DRAFT", "OPEN_REVIEW", "MERGED", "CLOSED_UNMERGED"},
    "implementation": {"NOT_STARTED", "IMPLEMENTING", "CODE_READY", "WAITING_TEST", "BLOCKED", "DONE_WITH_EVIDENCE"},
    "quality": {"NOT_RUN", "FAIL", "PARTIAL", "RETEST", "PASS", "INDEPENDENT_ACCEPT"},
    "application": {"BRANCH_ONLY", "MERGED_MAIN", "HOST_INSTALLED_VERIFIED", "PRODUCTION_HOMOLOGATED"},
    "operation": {"PLANNED", "EXECUTED_VERIFIED", "ROLLED_BACK", "UNKNOWN"},
}
REQUIRED_BODY = [
    "WORK_ID", "WORK_REVISION", "ISSUE", "SOURCE_BASE_SHA", "SCOPE",
    "PROVENANCE", "TEST_EVIDENCE", "SECURITY", "ROLLBACK", "STATUS",
    "BLOCKERS", "NEXT_ACTION"
]
MARKER = "<!-- SOTOMA-PR-LOCK-V1 -->"

def validate_registry(data):
    errors = []
    if data.get("schema_version") != "1.0.0":
        errors.append("Unexpected registry schema version")
    if not SHA.fullmatch(str(data.get("baseline_main_sha", ""))):
        errors.append("baseline_main_sha must be a commit SHA")
    if not isinstance(data.get("records"), list) or not data["records"]:
        errors.append("Missing PR records")
        return errors
    seen_work = set()
    seen_pr = set()
    for index, record in enumerate(data["records"]):
        loc = "records[%d]" % index
        work = record.get("work_id", "")
        pr = record.get("pr_number")
        if not WORK_ID.fullmatch(str(work)):
            errors.append(loc + ": invalid work_id")
        if work in seen_work:
            errors.append(loc + ": duplicate work_id")
        seen_work.add(work)
        if not VERSION.fullmatch(str(record.get("work_revision", ""))):
            errors.append(loc + ": missing semver work_revision")
        if not isinstance(pr, int) or pr <= 0 or pr in seen_pr:
            errors.append(loc + ": invalid or duplicate PR number")
        seen_pr.add(pr)
        for field in ["last_reviewed_head_sha", "baseline_main_sha_at_intake"]:
            if not SHA.fullmatch(str(record.get(field, ""))):
                errors.append(loc + ": invalid " + field)
        if not record.get("pr_url", "").endswith("/pull/" + str(pr)):
            errors.append(loc + ": PR URL mismatch")
        if not record.get("branch") or not record.get("scope"):
            errors.append(loc + ": missing branch or scope")
        statuses = record.get("statuses", {})
        for axis, choices in ENUMS.items():
            if statuses.get(axis) not in choices:
                errors.append(loc + ": invalid status " + axis)
        if not record.get("evidence") or not isinstance(record["evidence"], list):
            errors.append(loc + ": missing evidence")
        if not record.get("rollback") or not record.get("next_action"):
            errors.append(loc + ": missing rollback or next action")
        if not isinstance(record.get("open_blockers"), list):
            errors.append(loc + ": missing blockers array")
        tests = record.get("tests") or {}
        if statuses.get("application") in {"HOST_INSTALLED_VERIFIED", "PRODUCTION_HOMOLOGATED"} and not tests.get("host_proof"):
            errors.append(loc + ": host verification requires proof")
        if statuses.get("operation") == "EXECUTED_VERIFIED" and not tests.get("host_proof"):
            errors.append(loc + ": executed operation requires proof")
        if statuses.get("github") == "MERGED" and statuses.get("application") == "BRANCH_ONLY":
            errors.append(loc + ": merged cannot be branch-only")
    return errors

def parse_body(body):
    errors = []
    if MARKER not in body:
        errors.append("PR body lacks PR Lock marker")
    extracted = {}
    for field in REQUIRED_BODY:
        pattern = r"(?im)^\s*-\s*" + re.escape(field) + r"\s*:\s*(.+?)\s*$"
        match = re.search(pattern, body)
        if not match or match.group(1).strip().upper() in {"", "TODO", "TBD", "TO_FILL", "PLACEHOLDER"}:
            errors.append("PR body missing " + field)
        else:
            extracted[field] = match.group(1).strip()
    return extracted, errors

def main():
    parser = argparse.ArgumentParser()
    parser.add_argument("--registry", default=str(REGISTRY))
    parser.add_argument("--event", default=os.environ.get("GITHUB_EVENT_PATH"))
    args = parser.parse_args()
    data = json.loads(Path(args.registry).read_text(encoding="utf-8"))
    errors = validate_registry(data)
    if args.event:
        event = json.loads(Path(args.event).read_text(encoding="utf-8"))
        pr = event.get("pull_request")
        if pr:
            body, issues = parse_body(pr.get("body") or "")
            errors += issues
            number = pr.get("number")
            record = next((r for r in data.get("records", []) if r.get("pr_number") == number), None)
            if record is None:
                errors.append("PR #%s has no registry record" % number)
            else:
                if body.get("WORK_ID") and body["WORK_ID"] != record.get("work_id"):
                    errors.append("PR work_id mismatch with ledger")
                if body.get("WORK_REVISION") and body["WORK_REVISION"] != record.get("work_revision"):
                    errors.append("PR version mismatch with ledger")
                if body.get("SOURCE_BASE_SHA") and not SHA.fullmatch(body["SOURCE_BASE_SHA"]):
                    errors.append("Invalid SOURCE_BASE_SHA")
                if pr.get("head", {}).get("ref") != record.get("branch"):
                    errors.append("PR branch mismatch with ledger")
                current = pr.get("head", {}).get("sha")
                checkpoint = record.get("last_reviewed_head_sha")
                if current != checkpoint:
                    print("INFO: PR head changed since recorded checkpoint; review delta only; no auto approval")
                if pr.get("merged") is True and record["statuses"]["github"] != "MERGED":
                    errors.append("Merged PR still marked unmerged in registry")
    if errors:
        print("PR LOCK: FAIL")
        for item in errors:
            print(" - " + item)
        return 1
    print("PR LOCK: STRUCTURAL PASS (NOT runtime, merge, clinical, or production approval)")
    return 0

if __name__ == "__main__":
    sys.exit(main())
