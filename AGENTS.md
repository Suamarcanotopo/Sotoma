# AGENTS — Contratos do repositório


<!-- SIN-PR-STATUS-ML-ADDENDUM-V1 -->
## Interlock — Mission Lock e PRs
Antes de pesquisar, planejar, alterar ou relatar progresso, carregar o Mission Lock canônico do projeto e o arquivo MISSION-LOCK-PR-STATUS-ADDENDUM.md da raiz. Reutilizar checkpoints; checar HEAD e estado de PR/CI, lendo só o delta material quando a fonte estiver acessível. Nunca confundir escrita de código, PR, merge, instalação e homologação. Registrar STATUS/PROVA/BLOQUEIOS/PRÓXIMA AÇÃO. Sem acesso confiável, reportar UNKNOWN; não repetir ou prometer trabalho não confirmado.


## Reconstrução SOTOMA com backups — protocolo para qualquer agente
Ler docs/HANDOFF-NEXT-CHAT.md e prompts/MASTER-PROMPT-SOTOMA-NOVO-SERVIDOR.md, mais docs/BACKUP-INTAKE-RECONCILIATION.md e docs/PR-LOCK.md. Antes de editar, ler docs/pr-lock/REGISTRY.json e conferir GitHub HEAD/PR/CI live; não duplicar trabalho, reaproveitar checkpoints. O usuário anexará 2 backups; até recebê-los, inventário, integridade e restore são DESCONHECIDOS. Não versionar backups brutos/SQL/PII/PHI/credenciais. Nunca alterar produção/DNS ou declarar servidor migrado sem teste e autorização. Todos os PRs devem ter work_id, work_revision, proveniência, rollback e cinco estados independentes.
