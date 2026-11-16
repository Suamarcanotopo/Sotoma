# SOTOMA WEBSITE V5 — HANDOFF OPERACIONAL E GATES (16/11/2026)

## Missão ativa
Acesso rápido no repositório a todo código de instalação HTML + CSS + JavaScript, sem reconstruir o trabalho pronto, sem misturar header/footer com Home, sem regressão do Blog e sem publicação. O índice canônico por branch é [MEGA-INDEX.md](MEGA-INDEX.md). Diretrizes do projeto permanecem em [Mission Lock](../../docs/MISSION-LOCK.md) e [Handoff geral](../../docs/HANDOFF.md).

## Verdade operacional por PR
| Código | Fonte | Estado |
| --- | --- | --- |
| C01 Home V5 (sem Blog) | [PR #10](https://github.com/Suamarcanotopo/Sotoma/pull/10), `home-v5/SOTOMA_HOME_V5_ELEMENTOR_UNICO.html` | Presente em branch e código integrado; não é main/publicado |
| C02 Blog independente | [PR #10](https://github.com/Suamarcanotopo/Sotoma/pull/10), `blog-v1/SOTOMA_BLOG_V1_ELEMENTOR_UNICO.html` | Presente; 13 posts extraídos de WXR; links/mídias ao vivo exigem verificação |
| C03 Header global | [PR #13](https://github.com/Suamarcanotopo/Sotoma/pull/13), `templates-global/HEADER_GLOBAL_ELEMENTOR_UNICO.html` | Presente; em 16/11 navegação corrigida para seis itens e breakpoint responsivo em 1024px; sem homologação em WordPress |
| C04 Footer global | [PR #13](https://github.com/Suamarcanotopo/Sotoma/pull/13), `templates-global/FOOTER_GLOBAL_ELEMENTOR_UNICO.html` | Presente; privacidade sem URL de política validada |
| C05 Artigo Single Post | [PR #13](https://github.com/Suamarcanotopo/Sotoma/pull/13), `templates-global/ARTIGO_SINGLE_POST_ELEMENTOR_UNICO.html` | Presente; depende de widgets **Post Title (H1)** + **Post Content** do WordPress |

## Checagens estáticas de 16/11/2026
- C01: 958.564 caracteres; um `<style>`, um `<script>`; Hero + 8 seções por `<section>`; sem seção Blog; IDs de seções conferidos.
- C02: 242.880 caracteres; um `<style>`, um `<script>`; 13 cards com `data-article`.
- C03: seis destinos de navegação de conteúdo (Início; Quem cuida de você; Como cuidamos; Dúvidas; Blog; Contato); um `<style>`, um `<script>`. Links da interface em branch; não comprovados no site.
- C04/C05: arquivos existentes, CSS + HTML + script no mesmo código. C05 necessita widgets nativos.
- Links do índice por linha conferidos após mudança do Header. `README.md` raiz e website apontam ao índice.
- **Não repetir como testes realizados nesta data:** Chromium real, Elementor/Theme Builder, Lighthouse, métricas Core Web Vitals, QA clínica, SEO em produção, testes de direitos de imagem, cliques WhatsApp, envios de formulário ou rollback real. Resultados locais anteriores das PRs são evidências históricas, não revalidação neste checkpoint.

## Incompatibilidades/alertas que não devem ser ignorados
1. **Rota do Blog:** C02 veio com intenção `/blog/`, enquanto C03 aponta à rota observada `/artigos-sotoma/`. A instalação deve usar a página existente aprovada; não criar conteúdo duplicado nem trocar canonical/301 sem decisão.
2. **Privacidade:** C04 oferece canal de contato, não URL comprovada para política; tratar como entrega pendente e evitar link fictício.
3. **Imagem original e conteúdo:** aprovar fotografias, mensagens, contatos, títulos profissionais, copy clínica, serviços V.I.A./M.I.R.A. e modalidades antes de publicar.
4. **Performance:** C01 tem aproximadamente 0,96 milhão de caracteres, incluindo imagens incorporadas. É uma potencial limitação de editor e tamanho da página; medir no Elementor/staging antes de produção. Não alterar referências de mídia sem prova de acessibilidade, direitos e qualidade.
5. **Acessibilidade:** conferir destino `#conteudo` do skip-link do Header em cada template WordPress; não presumir que o tema oferece esta âncora.
6. **SEO:** Rank Math já administra metadados; evitar duplicar `title`, canonical, dados estruturados ou sistemas concorrentes de `llms.txt`.
7. **Expansão:** as páginas específicas Quem cuida, Como cuidamos, Dúvidas, Contato e páginas profissionais não possuem código Elementor individual **nestas duas PRs**. A existência da rota WordPress não é prova de fonte HTML versionada aqui.

## Ordem para retomar
1. Abrir [MEGA-INDEX](MEGA-INDEX.md), conferir PR #10 e PR #13 em Draft e o HEAD atual de cada branch.
2. Não alterar `main` nem a produção sem aprovação; consolidar alterações somente depois da revisão cruzada das PRs.
3. Validar as cinco fontes e rotas/links, criar staging isolado e backup; testar todos os templates e restauração.
4. Executar checklist ECP + Coliseum: navegação, HTML semântico, CSS isolado, JS sem erros, contraste, teclado/mobile, SEO, direitos de imagem e LGPD, conteúdo clínico e métricas sem dados sensíveis.
5. Solicitar aprovação das duas profissionais/direção nos itens clínicos e de imagem. Medir desempenho, comparar fidelidade visual e registrar evidências; fechar gates antes de merge/produção.
6. Atualizar índice/README/Handoff na mesma PR que mudar código. Não declarar `HOMOLOGADO`, `PUBLICADO` ou `MERGED` por inferência.

## Reversão
Cada PR pode ser revertida pelo histórico de commits; nenhuma destas mudanças instala nada no WordPress. Antes do deploy, exportar templates Elementor existentes e documentar restauração de temas, páginas, mídia, plugins e cache. Não confundir revert de commit com restore do site.
