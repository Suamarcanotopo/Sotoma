# SOTOMA 2.0 — WEBSITE / HOME V5
**Estado:** implementação de protótipo modular na branch; sem deploy, sem migração da V4, sem aprovação clínica/comercial.
**Ponto de entrada:** [MEGA INDEX](MEGA-INDEX.md).

## Organização
```text
dependencies/sotoma-website/
├── README.md
├── MEGA-INDEX.md
├── ASSETS-E-PENDENCIAS.md
└── home-v5/
    ├── index.html        # marcação, âncoras e conteúdo candidato
    ├── home-v5.css       # identidade visual provisória, responsivo
    └── home-v5.js        # comportamento progressivo
```

## Executar localmente (sem instalar nada)
Baixe os três arquivos da pasta `home-v5` juntos; abra `index.html` no navegador. O HTML referencia o CSS e o JavaScript por caminhos relativos. **Não serve para produção** até fechar os gates.

## Separação para WordPress / Elementor
- **HTML:** integrar somente o conteúdo interno do `<main>` se o tema já controlar header/footer; evitar repetir a marcação do site.
- **CSS:** enfileirar com `wp_enqueue_style` em plugin/tema filho específico, com prefixos para evitar conflitos. Nesta primeira versão o CSS ainda é global e PRECISA de escopo antes da integração.
- **JavaScript:** enfileirar com `wp_enqueue_script` uma vez após a marcação, sem scripts duplicados; verificar conflito com menu existente.
- **Assets:** não importar fontes, imagens, ícones ou textos da V4 sem origem e consentimentos verificados.
- **SEO:** protótipo usa `noindex,nofollow` intencional; remover só após homologação, com auditoria de canonicals e páginas anteriores.
- **Contato:** endereço usado no protótipo ainda não foi confirmado. Validar o canal antes de qualquer uso real.
- **Privacidade:** não capturar ou trafegar dados clínicos, nem marcadores sensíveis em eventos.

## Critérios de aceite ainda NÃO satisfeitos
- Receber o HTML autônomo V4, manifesto e os WebP/SVG originais.
- Conferir fidelidade da Home V5 à V4 aprovada e montar comparação visual.
- Aprovar fotos, qualificações, V.I.A./M.I.R.A., modalidades e canais.
- Completar links de artigos reais, privacidade, navegação e integração.
- Testes automatizados e manuais de acessibilidade, responsividade, funcionalidade e WordPress staging.
- Aprovação de Cláudia e direção, staging com rollback, só então eventual deploy separado.
