# SOTOMA — Single Post V2: instalação segura no Elementor

**Atualização de confiabilidade da capa:** incluir preferencialmente um widget nativo **Post Featured Image** no mesmo Single Post Elementor. O template reposiciona a imagem do servidor sem recriar/cortar; se o widget nativo não estiver instalado, tenta a imagem da API REST. Sem imagem destacada válida no WordPress, não existe capa automática. Não usar a thumbnail M.I.R.A. em outros posts.


## Arquivo único

[ARTIGO_SINGLE_POST_ELEMENTOR_UNICO.html](ARTIGO_SINGLE_POST_ELEMENTOR_UNICO.html) é **um único HTML com CSS e JavaScript incorporados**. Não é plugin. Código em PR Draft; não publicado pelo GitHub.

## Theme Builder > Single Post

1. Fazer backup do modelo Single Post e montar teste em staging.
2. Inserir um widget HTML com o arquivo inteiro na área principal.
3. Manter exatamente um widget nativo Elementor **Post Title** configurado como `H1` e um **Post Content** nativo, fora do widget HTML, no mesmo template. O JavaScript só reposiciona os widgets originais já renderizados pelo servidor (não recria o texto via API). A posição original dos widgets deve ser verificada também com JavaScript desabilitado.
4. Definir condição de exibição: **Posts** apenas, não todas as páginas WordPress.
5. Usar a imagem do artigo no campo WP **Imagem destacada**. A capa usa dimensões naturais (16:9, 9:16, 4:5 etc) e não aparece se inexistente; o template não injeta foto M.I.R.A. em todos os posts.
6. Para o CTA direcionado, atribuir a categoria já existente `Claudia Fernanda Sotoma` (slug `claudia-fernanda-sotoma`) e/ou `Yasmin Sotoma Muzilli` (slug `yasmin-sotoma-muzilli`) em Posts > Categorias. Não presumir associação com a categoria genérica `Qualidade de vida`. Confirmar direção e consentimento antes de inserir.
7. O código mostra **(a)** relacionados por categoria, **(b)** últimos posts reais, **(c)** perfil/foto/WhatsApp das profissionais categorizadas. Sem categoria de profissional, mostra links genéricos (evita erro de atribuição).
8. Em WhatsApp enviar apenas mensagem administrativa geral — não incluir diagnóstico, palavra-chave clínica ou o título do artigo na URL.
9. Validar no mínimo: imagens originais (600×337, 4:5, 9:16), 320/390/768/1024/1440px, foco de teclado, H1 único, Post Content nativo, busca da API WP, links relacionados/recentes, duas profissionais quando ambas categorias, CTA genérico sem categoria, visual sem JS, aprovação da direção.
10. Não adicionar Schema/JSON-LD duplicado com Rank Math. Em falha na API, o artigo nativo fica disponível, e nenhuma publicação falsa é inventada.

**Importante:** a thumbnail original da primeira produção está [preservada no GitHub](../../sotoma-editorial/producoes/assets/SOT-PROD-001-thumb-mira-original.png) e no [Drive privado](https://drive.google.com/file/d/1C6tjax16o5L50kx1ZDcsl_Jae2GKO5Pj/view) e [indexada no catálogo](../../sotoma-editorial/producoes/SOT-PROD-001.md). Sem upload dessa mídia ao WordPress e associação à imagem destacada do post correto, ela não aparecerá automaticamente na capa.

**Estado ECP/Coliseum:** aguardando teste em staging/Elementor; PR Draft, sem deploy ou alteração WP.
