# SOTOMA — Ledger dos pedidos novos para reconstrução
Versão 1.0 | 2026-11-10 | Status: requisitos recebidos; não implementados
Este arquivo impede que o backup apague melhorias solicitadas depois dele. Mudanças novas não podem inventar funcionalidades que o usuário ainda não pediu.

## Requisitos confirmados
| ID | Origem | Requisito | Compatibilidade/prova | Estado | PR |
|---|---|---|---|---|---|
| REQ-20261110-001 | Solicitação 2026-11-10 | Refazer o website SOTOMA em servidor novo, usando 2 backups futuros como baseline, preservando conteúdo e adicionando melhorias aprovadas | Dois backups ainda não recebidos | PLANNED | #7 (governança) |
| REQ-20261110-002 | Solicitação 2026-11-10 | Salvar contexto, histórico, requisitos, plano e fontes no GitHub de forma que nova janela retome sem perda | Prompt/Handoff/Mission Lock PR #7, não merged | BRANCH_ONLY | #7 |
| REQ-20261110-003 | Solicitação 2026-11-10 | PR Lock para versionar PRs, registrar proveniência, estados e evitar releituras repetitivas | Registry, checkpoint, template, verificador; CI automático precisa QA | BRANCH_ONLY | #7 |
| REQ-20261107-EDITORIAL | Histórico documentado no GitHub | Preservar editorial 60 pautas, estudos, CTA IET e identidade observada; não publicar sem aprovação | Google Sheets/README existentes; PR #6 rascunho | DOCUMENTED/NOT_PUBLISHED | #6 e #5 |
| REQ-20261107-PORTAIS | Fundação SOTOMA | Portal cliente/painel interno e trilha clínica segura, sem marketplace | Somente arquitetura/requisitos, não instalar como parte da restauração de WordPress | PROPOSED | Issues #1–#4 |

## Regras para próximos pedidos
Cada melhoria nova adicionada pelo usuário ganha ID REQ-AAAAMMDD-NNN, justificativa, requisito verificável, origem, impacto no backup A/B/live, prioridade P0/P1/P2, critérios de aceitação, PR correspondente, status por eixos e rollback. Nunca marcar APPLIED sem prova de main e host; não abrir PR duplicada se houver trabalho existente compatível. Qualquer pedido que conflite com segurança clínica fica BLOCKED com solução viável e revisão.

## Nenhuma solução inventada
Ainda não sabemos sistema operacional/servidor novo, versão do WordPress real, licenças, estrutura dos dois backups, fonte do banco, dependências de hosting ou janela de migração. Manter UNKNOWN até evidência.
