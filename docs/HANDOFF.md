# HANDOFF — SOTOMA-FOUNDATION-20261107
Data: 2026-11-07 | Estado: FUNDACAO DOCUMENTAL | Leia primeiro [MISSION-LOCK](MISSION-LOCK.md).
## Decisão mais recente do responsável
SOTOMA NÃO é marketplace. Profissionais são convidados/credenciados internamente. A necessidade principal é (a) gestão privada de leads/pacientes e atribuição de origem, (b) ocupação e agendas dos profissionais, (c) portais seguros de profissional e paciente, (d) plataforma editorial sincronizável com Google Drive. A experiência pública permanece institucional.
## Domínios
- Público existente: https://sotomasaudepsicointegrada.com.br/
- Propostos, não implementados: https://cliente.sotomasaudepsicointegrada.com.br/ e https://painel.sotomasaudepsicointegrada.com.br/
## Papéis
- Direção/gestão: Cláudia e Márcio; dados administrativos e métricas agregadas, nunca acesso clínico irrestrito.
- Secretaria/captação: leads, agenda, contatos com permissões mínimas.
- Profissional clínico: seus pacientes, sua agenda, prontuário/documentos sob a responsabilidade apropriada.
- Paciente: somente suas informações e arquivos disponibilizados, salvo modelo legal de responsável autorizado.
- Revisora/editoria: somente conteúdo público.
## Estado factual
- Repositório Suamarcanotopo/Sotoma identificado como privado e inicialmente vazio; inicialização documental iniciada em 07/11/2026.
- Website público existente examinado; nenhuma alteração nele realizada.
- Não há comprovação de portais operacionais, plugin instalado, CRM, eventos de conversão, integração WhatsApp, Drive sincronizado ou documentos clínicos.
- As soluções de hospedagem, autenticação, assinatura e prescrição ainda precisam de prova e decisão arquitetural.
## Regras de retomada
1. Ler Mission Lock antes de qualquer tarefa.
2. Examinar READMEs e contrato de arquitetura, eventos, acessos, riscos, editorial e backlog.
3. Separar ESTUDADO, PROPOSTO, IMPLEMENTADO, TESTADO, HOMOLOGADO e PUBLICADO.
4. Não tocar produção por inferência. Não usar dados de pacientes em GitHub, planilhas ou sistemas de teste.
5. Abrir Issue/PR para cada mudança operacional com aceite e rollback documentados; não instalar em produção sem revisão humana.
6. Preservar main estável; validar staging com dados inteiramente sintéticos.
## Sequência de trabalho
Fase 0: documentação canônica e aprovação do escopo.
Fase 1: inventário do WordPress/host/privacidade e definição do modelo de dados, perfis e modelo de autorização.
Fase 2: plugin de atribuição pública sem dados clínicos, integração de contatos verificados, painel administrativo MVP e agenda de capacidade sem prontuários.
Fase 3: autenticação e portais com arquivos administrativos de teste, armazenamento seguro, auditoria e teste de autorização.
Fase 4: documentos clínicos com revisão profissional e jurídica, prova de conformidade e integrações de assinatura/prescrição aprovadas.
Fase 5: operações editoriais Drive, artigos e scripts, publicação com rastreabilidade; integrações de dados sempre desacopladas da clínica.
## Pontos de decisão pendentes
Responsável legal/controlador de dados; contratos com profissionais; custos de infraestrutura; volume de pacientes e agendas; calendário/CRM atual; origem real dos contatos; sistema de prontuário existente; necessidade de emissão versus simples disponibilização de receitas; política de retenção; menores de idade; permissões da secretaria; papéis de Cláudia e Márcio; autorização e tipo de acesso à hospedagem/WordPress; modelo de sincronismo Drive.
## Evidências esperadas
Link dos commits/PRs, hashes, revisão do conteúdo, evidência de testes, logs sanitizados, lista de versões, captura de funcionamento em staging e URL verificável de cada entrega. Links de portais futuros não são prova de disponibilidade.
## Reversão
Reverter commits documentais por novo commit; staging isolado. Produção permanece intocada nesta fase.

## Adendo editorial — SOT-EDITORIAL-504010-20261107
O responsável definiu 50% topo / 40% meio / 10% fundo, com cinco níveis de consciência, para Cláudia Fernanda Sotoma e Yasmin Sotoma Muzilli (novos autores só após credenciamento interno). 20 pautas iniciais criadas, com 10/8/2 e distribuição 10 por autora.
**Dependência:** [SOTOMA Editorial](../dependencies/sotoma-editorial/README.md).
**Planilha nativa real:** https://docs.google.com/spreadsheets/d/1skkm1DmEkTiRseVmgku2EVA7WSZa8nYS4iaWm5ZwASU/edit — 12 abas. Leitura de volta confirmou `PAINEL`, `PAUTAS_20` e `CARDS_240`; contém 20 pautas, 20 briefings estruturais de artigo, 20 legendas, 20 roteiros de ~60s, 80 roteiros por durações 30/60/90/120 e 240 prompts individuais de cards. Dados ainda **em rascunho** e não homologados. Planilha movida para pasta ChatGPT do Drive.
**IMPORTANTE:** Não há 20 artigos finais, imagens prontas, vídeos gravados, publicação nem sincronismo automático GitHub/Drive/WordPress; não fabricar provas. Para retomada, ler [Mission Lock editorial](../dependencies/sotoma-editorial/MISSION-LOCK-EDITORIAL.md), [Contrato Sheets](../dependencies/sotoma-editorial/CONTRATO-SHEETS.md), [prompts](../dependencies/sotoma-editorial/PROMPTS-MESTRES.md) e quadro de `APROVACOES`. Não enviar dados de paciente ou CRM ao Drive. Próximo trabalho: validar qualificações/escopo e uma pauta-piloto por autora com fontes, produzir artigos completos em Docs, solicitar autorização, então publicar.

## Continuidade editorial — pilotos completos criados em 07/11/2026
Além dos 20 briefings, foram produzidos **dois artigos completos em rascunho** com fontes oficiais citadas: [SOT-ED-001 Cláudia](../dependencies/sotoma-editorial/pilotos/SOT-ED-001-ARTIGO-RASCUNHO.md) e [SOT-ED-011 Yasmin](../dependencies/sotoma-editorial/pilotos/SOT-ED-011-ARTIGO-RASCUNHO.md). Cópias integrais também estão na aba [ARTIGOS_PILOTO](https://docs.google.com/spreadsheets/d/1skkm1DmEkTiRseVmgku2EVA7WSZa8nYS4iaWm5ZwASU/edit#gid=298731141). A planilha tem **13 abas**. Nenhum dos dois foi aprovado ou publicado. A prioridade é submeter à autora e direção, revisar fontes e comprovar títulos profissionais antes de qualquer publicação.

## Evidência operacional final — 07/11/2026
A planilha SOTOMA Editorial `1skkm1DmEkTiRseVmgku2EVA7WSZa8nYS4iaWm5ZwASU` tem 13 abas, com filtros, cabeçalhos, validações e 20 pautas. O painel retornou, após correção dos separadores de fórmulas na localidade pt_BR: 20 pautas, 10 topo, 8 meio, 2 fundo, 50%/40%/10%, 240 cards, 20 scripts-base, 80 scripts por duração, 2 artigos-piloto e **0 publicações**. Snapshots exatos foram salvos sob [dados](../dependencies/sotoma-editorial/README.md). Não confundir espelho manual com integração contínua. A próxima sessão deve fazer revisão de autores/qualificações, depois validar o primeiro artigo por autora, sem publicar antes da autorização.
