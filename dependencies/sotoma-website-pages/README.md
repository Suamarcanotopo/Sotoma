# SOTOMA 2.0 — Home V5 (revisão estática, não publicada)

**WORK_ID:** SOT-UX-WEB-HOME-V5-20261112 · **Issue:** #8 · **Origem:** artefato da conversa, backups locais WordPress (13 posts/17 páginas) e mídia aprovada apenas onde especificada. **Baseline main:** `55de6b33f43c783fc9c15571f3708f803fc17b39`.

## Onde copiar o código

- **[home-v5-completa.html](./home-v5-completa.html)** — HTML, CSS e JavaScript juntos, arquivo-fonte editável (aprox. 78 KB).
- **[home-v5.css](./home-v5.css)** — CSS isolado.
- **[home-v5.js](./home-v5.js)** — JavaScript isolado.
- **[home-v5-corpo-para-editor.html](./home-v5-corpo-para-editor.html)** — corpo com estilo e script inline, apenas para revisão; requer adaptação e testes antes de colar em Elementor.
- **[previews/home-v5-autonoma.html](./previews/home-v5-autonoma.html)** — página autônoma com imagens embutidas. Use Raw/Download para visualização; não copiar para produção.
- **[MIDIAS-E-URLS.md](./MIDIAS-E-URLS.md)** — caminhos relativos e proveniência; **[manifesto-imagens.json](./manifesto-imagens.json)** — situação de cada asset.
- **[INDEX-DE-PAGINAS-E-ARTIGOS.md](./INDEX-DE-PAGINAS-E-ARTIGOS.md)** — índice completo, páginas e 13 artigos.

## Atenção sobre imagens

O HTML-fonte referencia `assets/images/*.webp`. Os binários estão no ZIP local entregue ao responsável. **Não são mídias já disponíveis na branch nem no novo servidor.** A prévia autônoma incorpora imagens somente para comparação, incluindo candidatos de IA **não aprovados**. Não fazer merge ou publicação antes de Cláudia aprovar todos os assets e o conteúdo.

## Sobre WordPress e SEO

Esta é uma prévia estática, **não** um plugin/tema/checkout/agenda. Não colar `<!doctype html>`, `<head>` ou `<body>` no widget Elementor. O meta `noindex,nofollow` é intencional neste protótipo e deve ser revisado ao migrar para produção. Confirmar slugs no host e restaurar links via staging.

## Proteções

Produção, DNS e main intactos; não houve instalação nem homologação. Hero alterna Cláudia/Yasmin com imagens originais, texto e CTA correspondentes. Contato WhatsApp **não confirma sessão**. PR #7 é apenas governança; a PR deste escopo é exclusivamente visual e permanecerá em Draft. Rollback: fechar a PR sem merge.
