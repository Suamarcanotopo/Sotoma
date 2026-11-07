# SOTOMA EDITORIAL — GitHub, Drive e publicação
Estado: MODELO PLANEJADO, ainda não há planilha/pasta sincronizada criada por esta missão.
## Escopo
Autoridade institucional sem publicidade enganosa. Pautas sobre psicoterapia, psicanálise, adaptação emocional, imigrantes, V.I.A. e M.I.R.A.; novos temas somente com profissionais capacitados/revisores.
## Hierarquia proposta no Google Drive
```text
SOTOMA — EDITORIAL/
  00-GOVERNANCA/    politica editorial, calendario, responsabilidades
  01-PAUTAS/        backlog e briefs
  02-FONTES/        registros de pesquisas e documentos públicos
  03-ARTIGOS/       rascunhos por pauta e por autor
  04-REDES-SOCIAIS/ carrosseis e copys
  05-SCRIPTS/       roteiros 30,60,90,120 s e cenas
  06-REVISAO/       aprovacoes editoriais e cientificas
  07-PUBLICADOS/    links e provas de publicação (nunca dados de pacientes)
  08-RELATORIOS/    indicadores editoriais agregados
```
## Abas Google Sheets
`PAUTAS`, `CALENDARIO`, `ARTIGOS`, `ROTEIROS`, `CENAS`, `AUTORES`, `FONTES`, `PUBLICACOES`, `PERFORMANCE`, `APROVACOES`.
## Esquema de pauta
`SOT-ED-0001`; editoria; palavra-chave e intenção; autor e credenciais aprovadas; revisor técnico; fontes primárias; briefing; objetivo educacional; CTA adequado; formato; etapa; data; URL do documento Drive; post_id WordPress (após publicação); URL pública verificada; revisão seguinte.
## Etapas
IDEIA → PESQUISA COM FONTES → RASCUNHO → REVISÃO TÉCNICA → REVISÃO ÉTICA → APROVAÇÃO CLÁUDIA → PROGRAMADO → PUBLICADO COM URL → MEDIDO → ATUALIZAÇÃO.
Nenhum estado 'publicado' sem URL e leitura de volta verificáveis. Versionar mudanças importantes, autorizações e corrigendas.
## Autoria e atendimento
Todo artigo exibe autor real, nome/título compatíveis com o conselho, referência bibliográfica, atualização e revisão quando necessário. Não usar casos de pacientes ou imagens identificáveis sem avaliação ética/legal; preferir casos fictícios claramente identificados como tal. Vedadas promessas de cura ou resultados determinísticos.
## Fluxo de derivados
1 artigo aprovado → resumo informativo → carrossel (até 10 cards, se adequado) → post curto → 4 scripts opcionais (30/60/90/120 segundos) → CTA educacional ou pedido de contato adequado. Não tratar automaticamente todo artigo como campanha publicitária.
## Integração técnica
Drive é a interface de colaboração humana; repositório guarda contratos/schemas/automação e não versões contendo dados pessoais sensíveis. Integração de publicação WordPress usa credencial de serviço limitada e revisão explícita. Manter IDs canônicos idempotentes, URL real do documento e status de erro; conflito gera bloqueio e revisão manual, sem sobregravar silenciosamente.
## Critérios de aceitação
Autor verificado, referências checadas, todas as aprovações, ausência de dados clínicos, slug, título/metadescrição e imagens licenciadas, acessibilidade, revisão ortográfica, schema de autor apropriado, links funcionais, URL e data de publicação reais; métricas agregadas coletadas de forma lícita.
## Independência operacional
Falha da planilha ou integração não apaga artigo nem altera prontuário. Nada de contatos de pacientes ou imagens clínicas em Sheets.