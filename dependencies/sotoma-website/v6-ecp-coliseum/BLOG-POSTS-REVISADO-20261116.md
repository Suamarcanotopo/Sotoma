# SOTOMA Blog — ECP + Coliseum, revisão em 16/11/2026

**Missão:** corrigir o código HTML Elementor fornecido pelo usuário e atualizar a versão V6 do Blog, sem alterações de produção.

## Implementação

- [Código pronto para copiar no Elementor](../v6-paginas-publicadas/artigos-sotoma/BODY_ELEMENTOR_UNICO_V6.html)
- Hero usa `https://sotomasaudepsicointegrada.com.br/wp-content/uploads/2026/11/Clau-Ya-1.jpeg`.
- Foram removidos avisos técnicos sobre WXR, tags de navegação editoriais e referências a data da exportação.
- 13 artigos, IDs e permalinks obtidos do endpoint público `/wp-json/wp/v2/posts?per_page=100&_embed=1` (HTTP 200 na auditoria).
- Cards de leitura não reutilizam imagens de posts em caminhos antigos que não puderam ser recuperados; usam ícone decorativo.
- O HTML estático contém 13 posts verificados para leitura sem JavaScript e rastreamento básico por crawlers.
- O JavaScript sincroniza com `wp/v2/posts` do mesmo WordPress, filtra `type=post`, `status=publish`, URLs oficiais, remove `hello-world` (se existir) e utiliza categorias nativas.
- Filtros: busca, categoria real e ordenação; não apresenta tags falsas.
- Links dos perfis: `/claudia-sotoma/` e `/yasmin-sotoma-muzilli/`.
- Mensagens de WhatsApp administrativas, sem dados clínicos ou rastreamento novo.

## Provas estáticas

- 13 IDs exclusivos e 13 URLs datadas do WordPress no snapshot.
- Um elemento `<style>` e um `<script>`; sintaxe JavaScript validada.
- Sem `<main>` aninhado no widget Elementor.
- Sem foto antiga `Sotoma-blog.jpg`, caminhos inexistentes `/sobre/claudia/` ou `/sobre/yasmin/` e sem blocos de etiquetas editoriais falsas.

## Limitações e gates

1. A API pública confirmou 13 posts, mas uma consulta à coleção de mídia usando IDs destacados não devolveu registros: não presumir que as capas originais estejam disponíveis.
2. Não há teste de navegação real no Elementor, verificação visual 390/768/1440, Web Vitals, acessibilidade manual nem homologação de cache.
3. A consulta REST do browser depende de API acessível, mesmo host e JavaScript habilitado. Erro de API oculta o catálogo em vez de continuar exibindo artigos possivelmente removidos.
4. Validação de autoria, redação clínica, imagens e política profissional permanece com a direção SOTOMA.
5. Antes da implantação, comparar página publicada com código novo, obter backup/restore e aprovação. Sem merge automático nem WordPress alterado.
6. O ZIP anterior das sete páginas V6 não contém este novo corpo do Blog; extrair/copy somente o arquivo canônico linkado.

**Coliseum:** `RETEST` até teste funcional e visual em staging.

**Rollback:** reverter o commit específico do Blog ou restaurar o widget Elementor de backup; PR Draft baseada na branch V6 e sem alteração da main.
