# MEGA INDEX — SOTOMA 2.0 | PÁGINAS ELEMENTOR, CÓDIGO ÚNICO

**Regra de implementação:** uma página = um arquivo HTML único com STYLE + marcação do conteúdo (BODY) + SCRIPT. **Header e footer são globais** no Theme Builder do WordPress/Elementor. Nenhuma publicação, merge ou deploy nesta branch.

## CÓDIGOS CANÔNICOS — COPIAR E COLAR NO WIDGET HTML
| Página real | Arquivo integral e único | Conteúdo |
|---|---|---|
| **HOME** (`/`) | [SOTOMA_HOME_V5_ELEMENTOR_UNICO.html](home-v5/SOTOMA_HOME_V5_ELEMENTOR_UNICO.html) | Hero Cláudia/Yasmin, caminhos, valores, serviços/programas, jornada, planos, equipe, FAQ, contato; **sem a seção Blog/Pesquisa** |
| **BLOG** (`/blog/`) | [SOTOMA_BLOG_V1_ELEMENTOR_UNICO.html](blog-v1/SOTOMA_BLOG_V1_ELEMENTOR_UNICO.html) | Hero editorial, 3 roteiros de leitura, 13 artigos WXR, categorias WordPress, assuntos temáticos, busca, ordenação, filtros, mostrar mais e nota de pesquisa |

## HOME — localizar pelo Ctrl+F no código único
| Bloco | HTML âncora / marcador | CSS / JavaScript |
|---|---|---|
| Hero alternado Cláudia / Yasmin | `[data-hero-rotator]` | `heroConfig`; `.hero-carousel` |
| Áreas / Adultos / Crianças e adolescentes | `#caminhos` | `.pathway-card` |
| Acolhimento, conhecimento e responsabilidade | `#valores` | `.info-card` |
| Psicoterapia Positiva, Psicanálise, V.I.A., M.I.R.A. | `#servicos` | `.service-card` |
| Defina sua área / Escolha o plano / Primeira sessão | `#jornada` | `.step-card` |
| Consulta avulsa / Multidisciplinar / Profissional único | `#planos` | `.plan-card` |
| Cláudia e Yasmin | `#equipe` | `.team-card` |
| Dúvidas | `#faq` | `.faq-item` |
| Contato | `#agendamento` | `[data-whatsapp]` |
| **Blog/Pesquisa** | **REMOVIDO da Home** | O conteúdo permanece na página **/blog/** independente |

## BLOG — localizar pelo Ctrl+F no código único
| Bloco | HTML âncora / marcador | CSS / JavaScript |
|---|---|---|
| Hero editorial / 13 artigos | `#sb-title` | `.sb-hero` |
| 3 caminhos de leitura, links para posts existentes | `#sotoma-blog-trilhas` | `.sb-path-grid` |
| Biblioteca e resultados | `#sotoma-blog-artigos` | `[data-grid]` / `draw()` |
| **Categorias oficiais WordPress** | `[data-category-filter]` | `qualidade-de-vida` (9) / `psicoterapia-positiva` (4) |
| **Assuntos editoriais de navegação** | `[data-topic]`, `[data-choose-topic]` | `topic`, `chooseTopic()` |
| Busca por título, resumo e tema | `input[data-search]` | `norm()`, `draw()` |
| Ordenação | `select[data-sort]` | Curadoria, recentes, antigos, A–Z |
| Expandir / recolher 13 posts | `[data-more]` | `visibleLimit` |
| Mensagem de resultados e limpar | `[data-results]`, `[data-clear]` | `aria-live` |
| Imagem destacada original + prévia local | `[data-fallback-kind]` | `tryOfficialThumbnail()` |
| Limites científicos e leitura | `#sb-note-title` | `.sb-endpanel` |

### Prova dos dados do Blog
Inventário realizado no WXR WordPress exportado em **10/11/2026**: **13 posts com status publish, 2 categorias efetivamente cadastradas e 0 tags WordPress (post_tag)**. Os rótulos de assuntos no Blog são **etiquetas editoriais locais**, atribuídas com base em títulos e conteúdos; ainda não são tags persistidas na taxonomia do WordPress. Não inferir autoria clínica dos posts a partir do campo de criação do WXR.

### Regras de uso
1. Baixar o código completo **da página desejada** no link acima.
2. Na **Home** ou na página existente **Blog** do WordPress, criar um contêiner de largura total com **um único widget HTML**; colar o arquivo inteiro (não retirar CSS ou JS).
3. **Não** adicionar DOCTYPE, HTML, HEAD, BODY, HEADER ou FOOTER aos widgets. Manter header/footer nos templates globais.
4. Fazer backup antes de trocar widgets da página anterior; revisar CSS de tema/Elementor, ícones, media, tipografia, links e cache em staging.
5. Confirmar consentimento de imagem, dados profissionais, WhatsApp e ofertas; checar os 13 permalinks e imagens destacadas no servidor real.
6. Não publicar até aprovação e teste de rollback.

**Testes locais:** JavaScript analisado por Node.js sem erros; Chromium com visualizações 390, 768 e 1440 px, sem rolagem horizontal ou exceções JS; Hero alterna, Home tem 9 seções e não inclui Blog; Blog possui 13 artigos, inicia com 6, filtro categoria Psicoterapia Positiva retorna 4, assunto Infância retorna 2, busca ansiedade retorna 1, expansão mostra 13. **Não é homologação no WordPress real.**

[Mission Lock geral](../../docs/MISSION-LOCK.md) · [Proveniência e QA](ASSETS-E-PENDENCIAS.md) · [Editorial separado](../sotoma-editorial/ARTIGOS-60-INDEX.md)
