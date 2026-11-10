# SOTOMA — Snapshot factual para retomada em outra conversa
2026-11-10 | Estado: DOCUMENTAÇÃO; NÃO HOUVE MIGRAÇÃO OU ANÁLISE DE BACKUPS
Repositório privado: https://github.com/Suamarcanotopo/Sotoma
Website existente: https://sotomasaudepsicointegrada.com.br/
Dois backups: serão fornecidos pelo usuário; ainda NÃO recebidos aqui. Servidor novo: ainda não descrito, não instalado.
HEAD main observado em 2026-11-10: 55de6b33f43c783fc9c15571f3708f803fc17b39 (revalidar antes de nova tarefa).

## O que já está documentado em main
Arquitetura e requisitos G0–G4, LGPD/RBAC, Mission Lock, Handoff, identidade e editorial. Árvore de main inspecionada com 116 itens: a maior parte é documentação/rascunho; NÃO há dump de website, nova plataforma clínica homologada, serviço de portal ativo ou restauração de WordPress comprovados.
Produto: site institucional; portal paciente e painel profissional/administrativo são PROPOSTAS futuras, sem marketplace. Profissionais adicionais passam por credenciamento interno.
Programas: V.I.A. — Vivência, Integração e Adaptação para brasileiros em vários países; M.I.R.A. — Movimento, Identidade, Recursos e Autonomia para brasileiros no Japão.
Autores: Cláudia e Yasmin, 30 pautas cada, formação e credenciais a comprovar.
Editorial: 60 pautas; 50% Informação (30), 40% Educação (24), 10% Transformação (6; decisão informada, não promessa de cura). Google Sheet privado https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit; FONTES = 76 distintas; ESTUDOS_CIENTIFICOS = 16 estudos indexados com resumo, claims ainda pendentes; 720 prompts de cards e 240 roteiros escritos, não gerados/publicados.
Identidade observada no CSS público: Poppins, #22524A, #2E2E2E, #54595F, #8BA146, #91AFA1. Manual da marca e logo precisam confronto com backup/aceite.

## PR e issues observadas em 2026-11-10
PR #6 (editorial/evidence-iet-brand-rewrite-58-20261107): DRAFT, 58 revisões candidatas em branch; sem merge, testes/validação clínica pendentes.
PR #7 (governance/mission-lock-pr-state-20261110): DRAFT, adendo Mission Lock para 5 eixos e checkpoints; esta missão amplia o conteúdo da #7. Até merge, alterações NÃO ESTÃO NA MAIN.
Issues #1 Fundação, #2 captação/agendamento, #3 portais, #4 documentos clínicos, #5 editorial: OPEN.
Produção: não foi alterada por esta missão.

## Necessário na próxima conversa
Ler AGENTS.md e docs/MISSION-LOCK.md, depois docs/PR-LOCK.md e docs/HANDOFF-NEXT-CHAT.md no branch da PR #7; verificar GitHub API HEAD/PR/CI e usar diff/checkpoints. Seguir docs/BACKUP-INTAKE-RECONCILIATION.md.
Ao receber backups: G0 hash/estrutura/segurança; comparar A/B/site; escolher estrutura de staging sem alterar produção. Projetar melhorias novas por PR, sem apagar evidências, não perguntar de novo pelos acordos arquivados.
Qualquer alteração em runtime exige nova prova independente; nenhuma promessa de site instalado, servidor configurado ou backup pronto.
