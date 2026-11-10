# SOTOMA — PR LOCK | Versionamento, proveniência e leitura incremental
ID: SOT-PR-LOCK-20261110 | Versão do contrato: 1.0 | Situação: proposta na PR #7 até merge
Complementa MISSION-LOCK-PR-STATUS-ADDENDUM.md, docs/MISSION-LOCK.md, docs/HANDOFF.md e docs/pr-lock/REGISTRY.json.

## Problema resolvido
O usuário não quer reler PRs aplicadas nem repetir trabalho por perda de contexto. Cada mudança precisa ser vinculada a um ID, versão de trabalho, fonte, PR, SHA, testes, aprovação e ambiente. O registro de PR é um ÍNDICE, não substitui a consulta LIVE quando surge informação nova. HEAD igual autoriza inspeção incremental; HEAD alterado obriga diff afetado.

## Cinco eixos separados (do adendo canônico)
GITHUB: NO_PR, DRAFT, OPEN_REVIEW, MERGED, CLOSED_UNMERGED.
IMPLEMENTACAO: NOT_STARTED, IMPLEMENTING, CODE_READY, WAITING_TEST, BLOCKED, DONE_WITH_EVIDENCE.
QUALIDADE: NOT_RUN, FAIL, PARTIAL, RETEST, PASS, INDEPENDENT_ACCEPT.
APLICACAO: BRANCH_ONLY, MERGED_MAIN, HOST_INSTALLED_VERIFIED, PRODUCTION_HOMOLOGATED.
OPERACAO: PLANNED, EXECUTED_VERIFIED, ROLLED_BACK, UNKNOWN.
Invariantes: commit != PR != merge != instalação != homologação. MAIN MERGED não comprova HOST INSTALLED. Produção e clínica exigem consentimento adicional, mesmo após CI PASS.

## Fonte única para PRs
Arquivo docs/pr-lock/REGISTRY.json:
- Um registro por WORK_ID estável; referência única de PR quando existente. Não duplicar PR por janela de chat.
- Histórico de checkpoint e versão da missão (work_revision, não número de versão do site).
- Branch, PR URL, issue, últimos HEADs verificados, base de comparação e paths afetados; sem dados de pacientes.
- Evidências reais, bloqueios, decisão e próximo passo, retorno/rollback.
- Cada status declara origem da verificação (API GitHub, CI, ambiente, auditoria), data e grau de certeza.

Regra de leitura: consultar REGISTRY primeiro; sempre validar API GitHub main SHA, PR state/merged_at/head_sha e CI. Se o HEAD do alvo não mudou, NÃO reler o conteúdo completo de PR antiga; ler novos comentários, revisões, checks e destino aplicado. Se mudou, verificar diff da última SHA revisada contra nova SHA e dependências. Se checkpoint ausente, corrompido ou sem prova, reavaliar o escopo mínimo necessário. Uma mudança em servidor não está representada por commit; conferir evidência de host independentemente.

## Ciclo obrigatório de cada PR
1. PRE-VOO: localizar WORK_ID anterior no registro, Issue e PR existente; inspecionar main HEAD e último checkpoint.
2. SCOPE: classificar PRESERVAR, ALTERAR, ADICIONAR, FORA_ESCOPO; baseline exato e risco P0/P1/P2, dados sensíveis e efeitos em staging/produção.
3. BRANCH: usar uma branch por escopo, commits pequenos e reversíveis; nunca force push em branch crítica sem decisão e checkpoint.
4. PR_TEMPLATE: preencher work_id, work_revision, issue, baseline, origem/provenância, arquivos, critérios de aceite, provas, 5 estados, conflitos, rollback, responsável e próximo passo.
5. QA/COLISEUM: verificar diffs, testes automatizados, decisão independente quando necessária; para site reconstruído, testar backups, staging, segurança, SEO, identidade, autorizações e rollback.
6. REGISTRY: atualizar checkpoint do registro e Handoff; refletir status verificado sem simular CI PASS. Ao merge, registrar merge SHA e main HEAD; ao deploy, ambiente, versão instalada, URL e teste.
7. FINALIZAÇÃO: DONE exige evidência e gate humano quando clínica/produção. CLOSED_UNMERGED não é aplicado; manter aprendizado e evidências sem reabrir tudo.
8. CADA NOVA CONVERSA: começar por AGENTS + Mission Lock + REGISTRY + Handoff e então verificar delta; NÃO reler PR inteira apenas porque o usuário perguntou.

## Proteções e automação
- Template .github/PULL_REQUEST_TEMPLATE.md impõe campos de proveniência.
- Script scripts/pr_lock_check.py valida estrutura e metadados essenciais, separação dos estados e cabeçalho das PRs. Workflow .github/workflows/pr-lock.yml tentará executar essa validação em novas PRs.
- O workflow só terá efeito após ser integrado a main e os checks realmente executarem; ser exigência de merge depende de proteção de branch / ruleset configurada e verificada pelo administrador. NÃO afirmar que o branch já está protegido.
- CI controla integridade do registro e preenchimento de PR; NÃO substitui CI do produto, Code Review, teste de host, pentest, homologação clínica ou aprovação para go-live.
- Para PR com dado sensível, bloquear o commit e registrar apenas evidência sanitizada. Nunca incluir backups WP/SQL/PHI, credenciais, hashes de senha ou backups de pacientes.

## Status de base em 2026-11-10
PR #6: DRAFT, 58 reescritas editoriais candidatas, não merged, revisão científica/autoral/semântica pendente. Estado BRANCH_ONLY.
PR #7: DRAFT, rastreabilidade e handoff da reconstrução, não merged. Estado BRANCH_ONLY. Não existe prova de server migration/backup/restore.
A versão de estado está em docs/pr-lock/REGISTRY.json; SHA de base deve sempre ser reconfirmada LIVE.

## Rollback de governança
Reverter ou fechar PR documental se regra causar regressão; a operação do site antigo não muda. Caso a implementação de script/check falhe, documentação, registro e check manual continuam aplicáveis após aprovação. Falha do CI não autoriza ignorar bloqueios de segurança.

## Relatório mínimo para cada nova resposta
STATUS (5 eixos); PR e issue; HEAD antes/atual; commits nesta etapa; evidência/links; testes pass/fail/not run; o que entrou na main; o que foi aplicado ao host e onde; bloqueios; rollback; número de commits faltantes somente se plano e medição permitirem. Nunca inventar número de commits futuros.
