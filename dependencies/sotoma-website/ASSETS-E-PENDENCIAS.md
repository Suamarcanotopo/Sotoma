# SOTOMA Home + Blog — Proveniência e limites (12/11/2026)

## Fontes efetivamente utilizadas
- `Texto colado(20261112-211907).txt`: código Home V5 unificado enviado pelo usuário, com imagens WebP embutidas e seção Blog/Pesquisa.
- `SOTOMA_HOME_V5_CODIGO_UNICO_HTML_CSS_JS(1).html` e `SOTOMA_HOME_V5_PREVIA_AUTONOMA(1).html`: fontes visuais previamente fornecidas.
- `sotomasadepsicointegrada.WordPress.2026-11-10(1).xml`: exportação WXR (não é backup completo); prova de 13 posts `publish`, seus títulos, links, datas, categorias e mídias destacadas indicadas no arquivo.
- [Arquivo único da Home](home-v5/SOTOMA_HOME_V5_ELEMENTOR_UNICO.html): derivação do anexo, sem Blog/Pesquisa, preservando demais seções, Hero e WebP embutidos.
- [Arquivo único da página Blog](blog-v1/SOTOMA_BLOG_V1_ELEMENTOR_UNICO.html): nova experiência editorial e catálogo 13/13.

## Taxonomia comprovada
- **Qualidade de vida:** 9 posts.
- **Psicoterapia Positiva:** 4 posts.
- **Tags do WordPress (post_tag):** 0 no WXR.
- **Assuntos editoriais:** filtros locais de UI atribuídos a títulos/contexto (não escritos no banco WordPress). Não se apresentam como tags existentes.

## Imagens e URLs
Imagens ilustrativas da V5 fornecida foram otimizadas para uso como fallback **incorporado no mesmo código** do Blog. A página tenta carregar a imagem destacada WXR para cada post quando disponível. Não se inventaram URLs de publicações. A presença no XML **não garante** funcionamento atual do link ou da imagem no servidor. Cláudia/Yasmin e direção devem aprovar fisionomia, consentimento e direitos de uso.

## QA reproduzido
- Node.js `--check` dos dois scripts: PASS.
- Chromium local sem carregar WordPress, 390, 768 e 1440: sem `pageerror` e sem overflow horizontal.
- Home: 9 seções, Blog ausente, Hero alternado para Yasmin.
- Blog: 13 cards, 6 iniciais; categoria Psicoterapia Positiva = 4; tema Infância = 2; texto ansiedade = 1; expandir = 13.
- **Não avaliado:** Elementor real, performance em produção, tráfego real, mídia WordPress, CSS do tema, SEO, Core Web Vitals e aprovadores.

## Gates inegociáveis
- [ ] Revisão clínica, copy, qualificações e modalidades por Cláudia/direção.
- [ ] Conferir direitos de uso de imagens e telefones.
- [ ] Validar todos os 13 permalinks e thumbnails ao vivo.
- [ ] Comparar visualmente contra o site WordPress real; header/footer continuam globais, sem duplicação.
- [ ] Segurança, acessibilidade, mobile, SEO, cache, consentimento e desempenho em staging.
- [ ] Backup e rollback comprovados antes da publicação.

Nenhuma alteração foi feita no WordPress ao vivo.
