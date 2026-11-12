# SOTOMA WEBSITE — WIDGET ÚNICO POR PÁGINA

## Entregas em avaliação
- **[HOME V5 — um único HTML para Elementor, sem Blog/Pesquisa](home-v5/SOTOMA_HOME_V5_ELEMENTOR_UNICO.html)**
- **[BLOG V1 — um único HTML para Elementor, 13 posts reais](blog-v1/SOTOMA_BLOG_V1_ELEMENTOR_UNICO.html)**
- **[MEGA INDEX — mapa das duas páginas, IDs, CSS e JS](MEGA-INDEX.md)**
- [Fontes, limites e gates de aprovação](ASSETS-E-PENDENCIAS.md)

Regra fixa: **o arquivo de cada página contém todo HTML + CSS + JavaScript no mesmo bloco**; header e footer continuam **globais** nos templates do Theme Builder Elementor. Estas páginas **não incluem** html/head/body/header/footer nem arquivos de código externos.

## Fonte e ordenação dos artigos
O XML WordPress WXR de 10/11/2026 confirma 13 posts publicados e 2 categorias: Qualidade de vida (9) e Psicoterapia Positiva (4); não há tags WordPress cadastradas nos artigos. Os rótulos por assunto são **tags editoriais apenas de interface**, não representam alteração de taxonomias no WordPress. Não foram inventados artigos, URLs nem autores.

## Estado e segurança
Branch isolada, PR em Draft, sem merge e sem alteração no site em produção. Testes locais básicos de JS, responsividade e interações concluídos; teste real Elementor, contatos, imagens, dados clínicos, SEO, acessibilidade e links ainda pendentes de homologação.

Para aplicar: abrir a página WordPress correspondente com Elementor, colar o arquivo inteiro em **um widget HTML**, manter header/footer globais, revisar em staging, fazer backup e testar rollback.
