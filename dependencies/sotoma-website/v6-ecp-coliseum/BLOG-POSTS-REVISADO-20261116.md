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

## Hotfix de exibição e responsividade — 16/11/2026

**Sintoma observado:** /artigos-sotoma/ exibia 0 artigos, enquanto /blog/ e a API WordPress listavam 13 posts. A captura enviada mostra quebra indevida do termo 'Conhecimento' no hero.

**Causa comprovada no código:** sync().catch() executava items=[] e apagava até os 13 posts verificados que estavam no HTML. O gatilho HTTP/JavaScript que gerou o erro no navegador não foi isolado; a inspeção remota em navegador expirou. Não atribuir sem prova a cache, CORS ou WAF.

**Correção:**
- Preservar os 13 cards do HTML em qualquer falha temporária de sincronização (fallback não destrutivo).
- Leitura de categorias independente e opcional. Uma falha em categorias não derruba os artigos.
- Resposta vazia inesperada não substitui o snapshot; registros com inconsistências são filtrados.
- Hero com tamanhos menores e adequação a larguras menores por media e container queries; sem quebrar palavras.
- Preservados 13 URLs datadas, imagem do hero Clau-Ya-1.jpeg e links das profissionais.

**Provas na revisão do GitHub:**
- Endpoint público WP posts HTTP 200, com 13 posts publish.
- Comparação dos 13 IDs do HTML com os 13 IDs da API: 0 faltantes e 0 extras.
- JavaScript válido em teste de sintaxe V8.
- Sem chamada destrutiva items=[]; com consulta independente de categorias.

**Pendente:** homologação visual e interações no Elementor com larguras 320/390/768/1024/1440 px, verificação do console, do WP REST no navegador final e de backup/rollback. O hotfix não altera a produção automaticamente.

**Coliseum:** RETEST até evidência de navegador após implantação.
