# HANDOFF — Continuar SOTOMA em uma janela limpa
Versão 1.0, 2026-11-10 | Fonte principal para próxima conversa
Este documento registra o contexto e as ações sem exigir leitura de todas as conversas passadas.

## Comece aqui
1. Copiar o [MASTER PROMPT](../prompts/MASTER-PROMPT-SOTOMA-NOVO-SERVIDOR.md) para a próxima janela.
2. Anexar os DOIS backups. Hoje, nenhum anexo foi recebido ou testado nesta missão. Não tentar baixar, restaurar ou fazer hash antes de existir arquivo real.
3. Carregar no GitHub docs/MISSION-LOCK.md, AGENTS.md, MISSION-LOCK-PR-STATUS-ADDENDUM.md (na PR #7), docs/PR-LOCK.md, docs/pr-lock/REGISTRY.json e docs/REBUILD-NEW-SERVER-MISSION-LOCK.md.
4. Conferir de novo via API GitHub HEAD de main e PRs. Atualizar só o delta dos checkpoints; nunca declarar estados de PR antigos como atuais sem releitura de metadata.

## Estado documentado antes dos backups
- Site atual: https://sotomasaudepsicointegrada.com.br/ — não alterar/retirar do ar.
- Novo servidor: ainda não identificado nem configurado.
- Repositório privado: https://github.com/Suamarcanotopo/Sotoma, documentação de produto, editorial e segurança.
- PR #6: 58 rascunhos de artigos revisados, DRAFT, QA profissional e científico pendente. Não publicados.
- PR #7: Mission Lock de PR/estados, a ser ampliado com este handoff. Até merge, não confundir com main ativa.
- Issues #1–#5: fundação, leads/agenda, portais, documentos clínicos e editorial; nenhuma dessas fases foi comprovada em runtime.
- Google Sheets: https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit — documentos editoriais e fontes, NÃO dados de pacientes.
- Editorial: 60 pautas (30 de Cláudia, 30 de Yasmin), 50/40/10 Informação/Educação/Transformação; 76 fontes catalogadas com diferentes status, 16 estudos PubMed com metadados e resumos conferidos; sem aprovação universal.
- Visual observado: Poppins; #22524A, #2E2E2E, #54595F, #8BA146, #91AFA1. Confirmar contra o backup, sem invenção de logomarca.
- Produto: NÃO MARKETPLACE. Programas V.I.A. para múltiplos países e M.I.R.A. para brasileiros no Japão. Portais futuros com proteção clínica, jamais dados clínicos dentro do WordPress público sem aprovação rigorosa.

## Recebimento e decisão
Os backups não vão para o GitHub. O GitHub receberá somente hashes, metadados sanitizados, inventários, blueprint, testes e código revisado. Backup e restore ocorrerão em ambiente privado/isolado; site antigo como last-known-good. Planilha editorial não pode ser usada para registrar pacientes, formulários ou relatórios identificáveis.

Ao receber as novidades novas, adicionar em backlog e mapear o que é PRESERVAR do backup, CORRIGIR com prova, ADICIONAR, DESCARTAR com consentimento ou DEFERIR. Uma tarefa já completa não deve ser refeita por esquecimento. Ver PR Lock e os checkpoints.

## Gate de saída desta preparação
O README e a PR #7 devem apontar para o prompt, os protocolos e o registro PR. O estado real após este trabalho é: documentos versionados em branch, sem migração/restore/deploy. Não declarar CI ou branch protection aplicados sem verificar.
