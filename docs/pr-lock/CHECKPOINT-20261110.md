# Checkpoint SOTOMA — PR Lock e reconstrução | 2026-11-10
Checkpoint ID: SOT-CP-PR7-20261110-01 | Fonte: leitura LIVE API GitHub + docs em PR #7

## SHA e estados verificados
- main HEAD: 55de6b33f43c783fc9c15571f3708f803fc17b39 (revalidar sempre).
- PR #6: DRAFT, HEAD 1bd5cb9cc13e9dbcbc453bbcd75cb2f1dfdff315; não merged; 58 artigos candidatos, revisão científica, autoral, semântica e de fluência pendente.
- PR #7: DRAFT, HEAD observado antes deste checkpoint 70861503091f9f5c2b820494a3979b20b0202121; não merged; 20 commits e 18 arquivos alterados naquele instante. Este checkpoint cria commit novo, portanto não compare esse HEAD como se fosse final.
- Cinco eixos PR #7: GITHUB DRAFT, IMPLEMENTACAO CODE_READY (contratos/validador em branch), QUALIDADE PARTIAL (preflight estrutural PASS, Actions FAIL), APLICACAO BRANCH_ONLY, OPERACAO PLANNED. Merge/host não ocorreram.
- Último GitHub Actions analisado: https://github.com/Suamarcanotopo/Sotoma/actions/runs/42877806769 — conclusão FAILURE, sem etapas/logs úteis recuperados pela integração. **Causa ainda desconhecida.** Não marcar CI PASS.
- Verificador manual por API: PR #6 e #7 têm work ID, versão, origem, rollback, 12 campos no corpo; 2 registros com SHAs e status válidos; 11 documentos principais presentes. Isso não é teste de runtime nem substitui execução do workflow.
- Branch protection main: tentativa de leitura do endpoint retornou 403 para a integração. Não afirmar ruleset/required check ativado.

## Arquivos centrais da PR #7
- prompts/MASTER-PROMPT-SOTOMA-NOVO-SERVIDOR.md
- docs/HANDOFF-NEXT-CHAT.md
- docs/REBUILD-NEW-SERVER-MISSION-LOCK.md
- docs/BACKUP-INTAKE-RECONCILIATION.md
- docs/PROJECT-SNAPSHOT-20261110.md
- docs/PR-LOCK.md
- docs/pr-lock/REGISTRY.json
- docs/backups/INTAKE-MANIFEST.example.json
- docs/backups/RECONCILIATION-DECISIONS.example.json
- AGENTS.md e adendo original de PR Status
- .github/PULL_REQUEST_TEMPLATE.md
- scripts/pr_lock_check.py
- .github/workflows/pr-lock.yml
- README + Mission Lock + Handoff + backlog com links cruzados.

## Não realizado
- BACKUP A: não recebido, SHA desconhecido.
- BACKUP B: não recebido, SHA desconhecido.
- Website servidor novo: não configurado, não testado.
- Restore, comparação de conteúdos/Elementor e migração: não executados.
- DNS, SSL, WordPress antigo e dados clínicos: não alterados.
- PR #7: sem merge; documentação não ativa em main enquanto não integrada.
- CI e proteção de branch: não homologados.

## Regras de próxima conversa
Verifique main/PR #7/PR #6 via API LIVE. Se SHA ainda igual, comece lendo apenas REGISTRY, este checkpoint, novo estado de CI e arquivos específicos afetados. Se houver mudança, faça diff do último checkpoint em vez de reler todas as PRs.
Quando BACKUP A e B forem anexados, primeiro calcule SHA-256, teste arquivos e registre manifesto seguro; só depois inicie reconciliação. Nenhuma pergunta repetida sobre 60 pautas, autoras, V.I.A./M.I.R.A., não-marketplace ou portas de publicação.
