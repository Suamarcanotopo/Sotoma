# SOTOMA V6 — CÓDIGOS APROVADOS PARA REVISÃO (ECP + COLISEUM)

## SINGLE POST V2 — TEMPLATE GLOBAL CORRIGIDO (16/11/2026)

[**Código HTML+CSS+JS único para copiar no Elementor**](templates-global/ARTIGO_SINGLE_POST_ELEMENTOR_UNICO.html) · [Como instalar e testar](templates-global/ARTIGO-SINGLE-POST-V2-INSTALACAO.md) · [Primeira produção editorial registrada](../sotoma-editorial/producoes/SOT-PROD-001.md) · [Thumbnail PNG original](../sotoma-editorial/producoes/assets/SOT-PROD-001-thumb-mira-original.png).

**Três blocos independentes e automáticos em todos os Single Posts:** artigos da mesma categoria real, artigos publicados mais recentes, e CTA/foto/WhatsApp para Cláudia e/ou Yasmin conforme categorias explícitas `claudia-fernanda-sotoma`/`yasmin-sotoma-muzilli` no WP. Sem categoria de especialista: contatos gerais, nunca associação temática presumida. Hero e imagens internas conservam proporção nativa (16:9, 9:16, 4:5...). **HTML registrado para revisão; sem merge/deploy no WordPress.**

## BLOG REAL 16/11/2026 — LINK DIRETO PARA COPIAR NO ELEMENTOR

[**Abrir HTML único do Blog corrigido (13 posts WordPress publicados)**](v6-paginas-publicadas/artigos-sotoma/BODY_ELEMENTOR_UNICO_V6.html).

**Fonte exclusiva:** publicações do WordPress, com conferência via API REST em 16/11/2026. Retiradas notas técnicas e temas editoriais inventados. Hero alterada para Clau-Ya-1.jpeg, links de Cláudia/Yasmin atualizados. Listagem reflete posts ao vivo ao carregar pelo navegador. **Arquivo no GitHub, sem deploy.**

**Atenção:** ZIP consolidado V6 anterior não incorpora esta revisão; não utilizá-lo como origem do novo Blog.


[ZIP das 7 páginas completas](v6-ecp-coliseum/releases/SOTOMA-V6-7-PAGINAS-COMPLETAS.zip) · [ZIP dos 10 blocos aditivos, sem apagar textos](v6-ecp-coliseum/releases/SOTOMA-V6-10-BLOCOS-CONEXAO-SEM-APAGAR.zip)

**Comece pelo [MEGA INDEX V6 — 7 páginas completas e 10 conexões preservando textos antigos](v6-ecp-coliseum/INDEX-V6.md).**

Atualização da Cláudia: Atendimento individual (50 minutos, contratação por sessão) e Acompanhamento terapêutico (6 ou 12 sessões, condições especiais); nenhum preço no site. Atendimento integrado SOMENTE futuro.

[Correção aprovada do post 2187](v6-ecp-coliseum/CORRECAO-POST-2187.md) · [Mapa de imagens](v6-ecp-coliseum/ASSETS-MAPA-V6.json) · [Gates Coliseum](v6-ecp-coliseum/COLISEUM-V6.md).

**Atenção:** esta missão é exclusivamente de arquivos de código e documentação; nenhum plugin WordPress foi ativado. Não houve merge nem atualização das páginas em produção.

---

# SOTOMA 2.0 — MEGA INDEX CANÔNICO WEBSITE (13/11/2026)

**Contrato visual:** Header/Footer globais Elementor; um único HTML contendo STYLE, corpo visual e SCRIPT por template; edição dos artigos via widgets nativos **Post Title (H1) e Post Content** no Single Post para garantir HTML renderizado no servidor. `main` não modificada.

## 1. Três códigos globais, prontos para inspeção
| Componente | Código único | Local de aplicação |
|---|---|---|
| Header global | [HEADER_GLOBAL_ELEMENTOR_UNICO.html](templates-global/HEADER_GLOBAL_ELEMENTOR_UNICO.html) | Elementor Theme Builder → Header. Logo original, menus das **páginas novas publicadas** e botão **Falar com SOTOMA** que abre Cláudia/Yasmin e suporta novos profissionais aprovados |
| Footer global | [FOOTER_GLOBAL_ELEMENTOR_UNICO.html](templates-global/FOOTER_GLOBAL_ELEMENTOR_UNICO.html) | Theme Builder → Footer. Logo, semântica institucional, navegação, contatos, privacidade responsável, sem schema duplicado |
| Single Post | [ARTIGO_SINGLE_POST_ELEMENTOR_UNICO.html](templates-global/ARTIGO_SINGLE_POST_ELEMENTOR_UNICO.html) | Theme Builder → Single Post, **com Post Title e Post Content nativos**. Leitura estimada, categorias/tags reais, TOC, correlatos, WhatsApps por tema |

## 2. Biblioteca de assets
- [Biblioteca em pastas por profissional e logo](assets/README.md).
- [MANIFESTO-ASSETS-2026-11.json](assets/MANIFESTO-ASSETS-2026-11.json): URLs WordPress atuais, Git blob SHA, descrição, bytes, estado de consentimento.
- 19 arquivos binários originais — **1 logo, 9 Yasmin, 8 Cláudia, 1 dupla** — já salvos em Git, com proveniência. GitHub preserva histórico; WordPress continua servindo as fotos públicas.

## 3. AI Discovery — Markdown, Rank Math e indexação
- [llms.txt curado](ai-discovery/llms.txt): **7 páginas novas / 13 posts efetivamente publicados**, excluídos testes e páginas operacionais.
- [Estratégia e guias](ai-discovery/README.md): preferir Rank Math instalado ou plugin fallback, **nunca ambos para llms.txt**.
- [ZIP WordPress pronto para staging](ai-discovery/releases/sotoma-ai-discovery-v1.0.0.zip): plugin mínimo + cópia **exata** do índice.
- [Guard MU-plugin para Rank Math](ai-discovery/rankmath-guard/sotoma-rankmath-llms-allowlist.php): bloqueia páginas operacionais, posts legados e tags do gerador automático.
- [Código PHP do plugin](ai-discovery/wordpress-plugin/sotoma-ai-discovery/sotoma-ai-discovery.php).
- [Rotas, slugs e plano de 301](ai-discovery/ROTAS-SEO-AGENTES.md).
- [Coliseum / segurança / QA](ai-discovery/COLISEUM-REDTEAM.md).

## 4. Estado do website publicado (observação de 13/11/2026)
- **26 páginas WordPress publicadas**, com principais rotas novas `/quem-cuida/`, `/claudia-sotoma/`, `/yasmin-sotoma-muzilli/`, `/como-cuidamos-2/`, `/duvidas/`, `/artigos-sotoma/`, `/v-i-a/`.
- 13 artigos editoriais + 1 post `Hello world!` técnico; publicações devem ser filtradas por revisão editorial.
- `/llms-full.txt` atual **não está curado**; não apontar agentes para ele até corrigir o sistema legado.
- `/llms.txt` atual no site **404**, embora a fonte de código esteja pronta.
- **20/20** URLs Markdown do índice curado retornaram HTTP 200 `text/markdown` em testes remotos.
- Rank Math já insere metadados SEO; HTML humano segue canônico. Markdown alternativo retorna `noindex`.

## 5. Gates antes de implantar
1. Snapshot WordPress completo, Elementor Theme Builder, banco, mídia, cache e plano de rollback.
2. Confirmar menu e permissões das duas profissionais; a expansão requer registro interno aprovado (Mission Lock).
3. Testar header/footer com templates globais sem duplicação e verificar mobile/teclado/FOUC.
4. Instalar Single Post com widgets nativos e testar artigo completo no HTML sem depender de JS.
5. Escolher Rank Math **ou** plugin SOTOMA como proprietário de `/llms.txt`. Não instalar conversor de Markdown paralelo.
6. Excluir/corrigir material indevido `Hello world!`, `llms-full.txt`, rotas técnicas e Home Markdown anterior.
7. Aprovar conteúdo clínico e autoria, títulos/descrições, imagem, comportamento dos contatos, canonical e 301 em missão de URL posterior.
8. Nenhum deploy sem staging, aprovação e rollback comprovado.

[Mission Lock da SOTOMA](../../docs/MISSION-LOCK.md).
