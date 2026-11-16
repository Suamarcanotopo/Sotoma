# ROTAS SOTOMA — SEO, CANONICAL E AGENTES (snapshot 13/11/2026)

## Nova arquitetura publicada
| Área | URL real do WordPress (snapshot público) | Mirror MD |
|---|---|---|
| Início | `/` | `/home.md` **não promover até atualizar conteúdo** |
| Quem cuida | `/quem-cuida/` | `/quem-cuida.md` |
| Cláudia | `/claudia-sotoma/` | `/claudia-sotoma.md` |
| Yasmin | `/yasmin-sotoma-muzilli/` | `/yasmin-sotoma-muzilli.md` |
| Como cuidamos | `/como-cuidamos-2/` | `/como-cuidamos-2.md` |
| Dúvidas | `/duvidas/` | `/duvidas.md` |
| Artigos | `/artigos-sotoma/` | `/artigos-sotoma.md` |
| V.I.A. | `/v-i-a/` | `/v-i-a.md` |

## URLs concorrentes/legadas — GATE de redirecionamento
- Quem cuida: `/quem-cuida/` (novo), `/quem-cuida-de-voce/`, `/sobre/` (legadas).
- Como cuidamos: `/como-cuidamos-2/` (conteúdo novo) vs `/como-cuidamos/` (slug limpo antigo).
- Artigos: `/artigos-sotoma/` (conteúdo novo) vs `/blog/` (página antiga com conteúdo API vazio).
- Cláudia e Yasmin: usar `/claudia-sotoma/` e `/yasmin-sotoma-muzilli/`, não inventar filhas `/sobre/claudia/` ou `/sobre/yasmin/`.

**Próxima missão:** selecionar slug canônico ideal, migrar conteúdo primeiro, validar equivalência de conteúdo, medir links internos, testar 301 de antigos e MD equivalentes, sitemap/Rank Math, manter rollback. Não implementar redirects nesta PR.

## Artigos
Os 13 artigos editoriais vivem em permalinks datados `/2026/AA/DD/slug/`. Os espelhos corretos são `/2026/AA/DD/slug.md` (20/20 URLs listadas no índice foram verificadas). O artigo de teste `Hello world!` deve ser tratado separadamente; 1 tag `Ansiedade` encontrada no WordPress pertence a esse post de teste, não comprova tags atribuídas aos outros 13.

## Canonical / sitemap
- HTML principal com canonical gerenciado por Rank Math; não replicar JSON-LD no footer/template.
- `.md` retornou `X-Robots-Tag: noindex` e `Link: rel=canonical` para HTML no teste da página de Cláudia.
- `robots.txt` aponta para sitemap; não substituir regras por comandos que não protegem dados.
- Se houver melhoria de dados estruturados, fazê-la no Rank Math com propriedades e autor/revisor efetivamente verificadas, nunca inventar CRM, CNPJ, credenciais ou resultados clínicos.
