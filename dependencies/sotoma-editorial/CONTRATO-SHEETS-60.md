### Comparação da versão candidata (não canônica)
[ARTIGOS_REVISAO_58](https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=2000012341): 58 links de artigo em [PR #6 DRAFT](https://github.com/Suamarcanotopo/Sotoma/pull/6) versus textos em main, status NÃO PUBLICAR. A planilha não é prova de aprovação; não há sincronismo automático de branch com artigo WordPress.

# Contrato operacional — SOTOMA Editorial 60 (v2)
Data: 2026-11-07 • Planilha **nativa privada**, URL verificada: https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit. Mantém abas anteriores intactas e cria abas v2. Nenhuma sincronização em tempo real GitHub↔Sheets↔WordPress foi implementada.

## Abas operacionais (GIDs reais de leitura de volta)
| Aba | GID | Conteúdo |
|---|---:|---|
| [PAINEL](https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=2008109360) | 2008109360 | fórmulas de 60 pautas, 30/24/6 e autoria 30/30 |
| [PAUTAS_60](https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=2091677304) | 2091677304 | 60 pautas IDs 001..060, autores, funil e URL |
| [ARTIGOS_60](https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=1012800136) | 1012800136 | 60 textos integrais em rascunho e links GitHub |
| [POSTS_60](https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=865361514) | 865361514 | 60 legendas e roteiros |
| [CARDS_720](https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=1425322895) | 1425322895 | 720 prompts completos, 12 por pauta |
| [VIDEOS_240](https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=883416735) | 883416735 | 240 scripts: 30/60/90/120 segundos por pauta |
| [APROVACOES_60](https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=289993293) | 289993293 | 60 bloqueios de publicação |
| [PUBLICACOES_60](https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=162875266) | 162875266 | 60 registros sem URL de publicação |
| [FONTES_60](https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=216595640) | 216595640 | nove fontes contextuais institucionais (não 60 revisões individuais) |
| [CALENDARIO_60](https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=935617208) | 935617208 | seis ciclos de 10, cada 5 TOPO/4 MEIO/1 FUNDO, cinco por autora |
| [QA_60](https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=364997826) | 364997826 | auditoria de repetição e prioridades de reescrita |

## Abas legadas preservadas
PAUTAS_20, ARTIGOS_BRIEF, ARTIGOS_PILOTO, SCRIPTS_VIDEO, CARDS_240, POSTS_20, VIDEOS_80, AUTORES, FONTES, APROVACOES, PUBLICACOES, GUIA. Não apagar nem fundir sem revisão de divergências.

## Registros de GitHub relacionados
- Catálogo canônico: [PAUTAS-60.json](dados/PAUTAS-60.json).
- Índice de textos: [ARTIGOS-60-INDEX.md](ARTIGOS-60-INDEX.md) + 60 arquivos individuais em `artigos/SOT-ED-###.md`.
- Legendas: [POSTS-60.json](dados/POSTS-60.json).
- Vídeos: [VIDEOS-240.ndjson](dados/VIDEOS-240.ndjson).
- Prompts completos: [CARDS-720-PARTE-1.ndjson](dados/CARDS-720-PARTE-1.ndjson) e [CARDS-720-PARTE-2.ndjson](dados/CARDS-720-PARTE-2.ndjson).
- Auditoria: [COLISEUM-ESCALA-60.md](COLISEUM-ESCALA-60.md).

## Identificador e conflitos
`SOT-ED-001..060` é chave obrigatória para todos os derivados. Mesmo assunto não recebe ID novo em novas revisões; usa `revision` separada. Para comparações técnicas de lotes, os dois pilotos legados 001 e 011 estão preservados. Não sincronizar de forma automática os arquivos `dados/` sem checagem de versão e autorizações.

## Segurança e publicação
Acesso à planilha permaneceu privado na última verificação, sem compartilhamento público. Não adicionar prontuários, dados de pacientes ou registros de CRM. Cada autora deve validar suas credenciais e os textos antes de atribuir autoria em página pública. O dado em Sheets não constitui autorização de publicar, e a ausência de URL pública indica `NÃO PUBLICADO`.
A elevada repetição nos 58 textos derivados de templates é **P0 de originalidade**, não falha a ser resolvida por simples sinônimos. Exigir valor de experiência, pesquisa específica e revisão contextual. Vídeos e carrosséis só devem ser finalizados após o artigo ser homologado.


## Extensão IET + Estudos + Identidade Visual — GIDs confirmados (07/11/2026)
| Aba | gid | Natureza e limites |
|---|---:|---|
| [ESTUDOS_CIENTIFICOS](https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=269586060) | 269586060 | 10 estudos PubMed com metadados/resumos, sem parecer de eficácia clínica |
| [ESTUDOS_X_ARTIGO](https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=639989803) | 639989803 | 90 vínculos/linhas; 32 artigos relacionados, 28 lacunas |
| [FUNIL_IET_60](https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=155889112) | 155889112 | CTAs de 60 artigos: Informação/Educação/Transformação |
| [IDENTIDADE_VISUAL](https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=960991046) | 960991046 | 15 regras/tokens observados, sujeitos à aprovação |
| [CLAIMS_EDITORIAL](https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=1461341244) | 1461341244 | registro-modelo de afirmações; exemplos não aprovados |
| [GATES_PUBLICACAO](https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=1160148978) | 1160148978 | 60 registros NÃO PUBLICAR aguardando revisões |
**Arquivo de marca:** [brand/tokens.json](brand/tokens.json) e [brand/sotoma-editorial.css](brand/sotoma-editorial.css). **Fontes:** [PESQUISAS-ESTUDOS-GOVERNANCA.md](PESQUISAS-ESTUDOS-GOVERNANCA.md). Nenhuma automação GitHub↔Sheets foi instalada. Registros anteriores `PAUTAS_20`/`CARDS_240` são legados, não guias de nova produção.
