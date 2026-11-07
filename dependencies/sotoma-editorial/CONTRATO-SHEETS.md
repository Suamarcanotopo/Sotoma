# Contrato de dados editoriais — Google Sheets SOTOMA
**Estado:** planilha nativa criada e lida de volta em 07/11/2026. **Não há sincronização automatizada com WordPress ou GitHub.**

## Fonte operacional
- Nome: SOTOMA | Editorial 50-40-10 | Cláudia e Yasmin | 2026-11
- URL exata retornada pela conexão: https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit
- Google spreadsheetId: `1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA`
- Destino: pasta [ChatGPT](https://drive.google.com/drive/folders/1YKZoWpUbAvnmN7Wg4TBiuQVd8ykvh0yN) no Drive, movimentação confirmada em 07/11/2026.
- Fonte canônica **do estado editorial operacional**: essa planilha. Fonte canônica **dos contratos de produto e regras**: este repositório; conflitos de conteúdo requerem revisão humana. Quando criado Google Doc para artigo, o Doc aprovado é fonte do texto do artigo.

## Abas, URLs com IDs realmente retornados
| Aba | gid | URL | Conteúdo |
| --- | --- | --- | --- |
| PAINEL | 2008109360 | https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=2008109360 | 20 pautas e fórmula de 50/40/10 |
| PAUTAS_20 | 1761944534 | https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=1761944534 | 20 IDs, 10/8/2, autora, público, nível, CTA e status |
| ARTIGOS_BRIEF | 717275166 | https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=717275166 | 20 artigos em briefing, **não artigos completos** |
| ARTIGOS_PILOTO | 298731141 | https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=298731141 | 2 artigos completos em rascunho — Cláudia 001 e Yasmin 011 |
| SCRIPTS_VIDEO | 119742079 | https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=119742079 | 20 roteiros-base de ~60s, duração alvo |
| CARDS_240 | 1916538762 | https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=1916538762 | 240 prompts completos, 12 por pauta |
| POSTS_20 | 1151642656 | https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=1151642656 | 20 legendas/scripts de post |
| VIDEOS_80 | 1555500162 | https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=1555500162 | 80 roteiros 30/60/90/120 (20×4) |
| AUTORES | 313952020 | https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=313952020 | 2 profissionais, credenciais pendentes |
| FONTES | 498273490 | https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=498273490 | Fontes institucionais/éticas e links |
| APROVACOES | 1457553522 | https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=1457553522 | 20 registros em revisão/sem autorização |
| PUBLICACOES | 358903051 | https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=358903051 | 20 registros NÃO PUBLICADO com URL vazia |
| GUIA | 2053797448 | https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit#gid=2053797448 | instruções e prevenção de dados clínicos |

## Contrato de ID
`SOT-ED-001`... `SOT-ED-020` é chave única e estável para pauta, artigo, scripts, cards, post, aprovação, publicação. Nunca gerar ID novo para reprocessar a mesma pauta. Card identificado por (`id_pauta`, `card_num`) e duração de vídeo por (`id_pauta`, `duracao_alvo`).

## Tratamento de conteúdo
1. PAUTAS_20: criar pauta e etapa/consciência, título e autora.
2. ARTIGOS_BRIEF: enunciar a tese e os itens a pesquisar; **texto completo somente após fonte e revisão**.
3. CARDS_240: um prompt independente por card, com texto exibido, cena específica e ética.
4. POSTS_20 e VIDEOS_80: rascunhos; não equivalem a publicação nem gravação.
5. APROVACOES: exigir revisão técnica, ética, autora e direção.
6. PUBLICACOES: escrever URL real, data e post_id depois de verificação pública. Proibido inventar URL.
7. PAINEL: fórmulas contam pautas e distribuição. Não importar dados clínicos nem de aquisição de pacientes.

## Futuro automatizador (não executado)
- Serviço com credencial restrita e escopos mínimos, job idempotente por `SOT-ED-NNN`, leitura de volta antes de marcar status e sem guardar tokens no repositório.
- Usar estado de revisão + versão do documento para bloquear sobrescrita conflitante; retries com backoff e log sanitizado.
- A publicação no WP depende de aprovação humana e acesso técnico apropriado; separada do site clínico. Fluxo reversível com histórico, não há deploy nesta missão.
- Consultas à API Google Sheets devem respeitar cotas; caso indisponível registrar BLOQUEADO e não simular sincronismo.

## Segurança
PROIBIDO pacientes, números de celular, diagnósticos, receituário, exames, imagens de sessões, prontuários, identificadores de CRM ou qualquer vínculo entre pessoa real e saúde. Não enviar planilha para público por engano; compartilhar apenas com pessoas autorizadas.

## Verificação (07/11/2026)
- `get_spreadsheet_metadata` retornou 12 abas nativas e seus IDs em 07/11/2026; posteriormente, a aba ARTIGOS_PILOTO foi criada, totalizando 13 abas.
- `PAUTAS_20!A2:E4` devolveu IDs 001–003 com estágio TOPO e autora.
- `CARDS_240!A238:H241` devolveu registros da pauta 020, cards 9–12.
- `PAINEL!A2:C10` devolveu 20 pautas, 10 TOPO, 8 MEIO, 2 FUNDO; a leitura de volta de dados não equivale a homologação editorial.
- Planilha movida para pasta ChatGPT, operação confirmada.

## Espelhos versionados no GitHub
Em 07/11/2026 foram lidos os dados pela conexão Google Sheets e salvos no repositório privado para recuperação sem depender da sessão:
- [PAUTAS-20.json](dados/PAUTAS-20.json), 20 linhas;
- [ARTIGOS-BRIEF-20.json](dados/ARTIGOS-BRIEF-20.json), 20 linhas;
- [POSTS-20.json](dados/POSTS-20.json), 20 linhas;
- [VIDEOS-80.ndjson](dados/VIDEOS-80.ndjson), 80 linhas;
- [CARDS-240.ndjson](dados/CARDS-240.ndjson), 240 linhas.
Estes arquivos são **snapshots**, não fonte sincronizada em tempo real. Não sobrescrever um lado a partir do outro sem comparar alterações, status e aprovações; não há webhook, job nem integração automática.

## Correção de privacidade e migração (07/11/2026)
A primeira planilha nativa foi criada com uma permissão ampla indesejada (`anyone: commenter`). A conexão não ofereceu revogação granular no mesmo arquivo. Foi criada uma **cópia com as 13 abas preservadas**, conferida em leitura de volta, com arquivo visível **somente à conta proprietária**. A versão anterior foi **excluída permanentemente** após a conferência. O spreadsheetId oficial e único atualmente válido é `1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA`, e todos os links deste documento apontam para a cópia privada. **Não compartilhar a planilha sem decisão explícita da direção**. Perfis de acesso de Cláudia e Yasmin precisam ser concedidos de maneira restrita e controlada quando autorizado.
