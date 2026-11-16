# SOTOMA — Guia de estilo para artigos e thumbnails

Referência visual inicial: [SOT-PROD-001](producoes/SOT-PROD-001.md), thumbnail M.I.R.A. 600 × 337 PNG. O guia diferencia **referência visual observada** de **normas editoriais a validar**.

## Padrão visual

- Cinematografia editorial: assunto em primeiro plano, contexto ambiental relevante, profundidade, iluminação contrastada, alta legibilidade.
- Combinar marca SOTOMA e paletas institucionais; destacar a mensagem central e siglas, sem poluição ou excesso de texto.
- A imagem de referência combina viagem, destino, documentos, protagonista e chamada do M.I.R.A. Outros temas pedem contexto próprio (não replicar cenário de aeroporto indiscriminadamente).
- Priorizar legibilidade do assunto no mobile, redução de texto promocional e alternativas descritivas sem repetir arte literalmente.
- **Não cortar imagens:** na capa, thumbnail, corpo e cards, usar dimensões originais, `width:100%; height:auto; max-width:100%; object-fit:contain`. Não aplicar `aspect-ratio:4/3`/crop a mídia de conteúdo. Arquivos verticais 9:16 e 4:5 podem ocupar mais altura.
- Imagem pública deve ser associada ao campo *Imagem destacada* do post no WordPress, não escrita como URL fixa dentro do template global.

## Padrão de escrita

1. Um H1 específico do tema, conforme conteúdo real. Introdução útil que responda à intenção de busca, sem jargão ou diagnóstico.
2. Seções H2/H3 semânticas, contexto humano e exemplos claramente hipotéticos quando usados.
3. Diferenciar informação factual, experiência narrativa e hipótese; usar fontes identificáveis e conferir paráfrases.
4. Texto exclusivo e revisado pela autora/profissional responsável; não reutilizar redação genérica dos 60 rascunhos sem revisão.
5. Explicar V.I.A./M.I.R.A. como propostas apresentadas pela direção; não prometer eficácia terapêutica, segurança absoluta, ausência de dor de cabeça ou resultados garantidos.
6. Interlinks reais, fontes, título/metadescrição, slug e tags somente quando cadastradas. Rank Math já gerencia schema/canonical; não duplicar.
7. Fechamento com orientação informativa; direcionar contato pela **categoria WordPress explícita da profissional**, separada de autoria.

## Estrutura automática do Single Post

A ordem é: hero (H1, resumo, categorias e imagem original) → conteúdo WordPress renderizado no servidor → **artigos relacionados por categorias** → **artigos mais recentes** → **seção de profissionais com imagens e WhatsApp**. O template conserva as três seções mesmo quando a API falha, sem posts artificiais.

Profissionais: criar categorias nativas `Claudia` (slug `claudia`) e `Yasmin` (slug `yasmin`) no WordPress quando autorizadas. Se forem atribuídas ambas, os dois cartões aparecem. Se nenhuma for atribuída, aparecem contatos genéricos sem identificação falsa. Não confundir categoria de responsável pelo contato com autor formal.

## Gate do Coliseum

- Image fit 16:9, 4:5, 9:16 e outros; sem distorção, clipping ou corte.
- HTML responsivo para 320/390/768/1024/1440 px; WCAG com foco e contraste; acessibilidade de links.
- H1 e Post Content em HTML nativo WordPress no Theme Builder; confirmar não haver duplicação.
- Apenas posts reais (status publish), sem vazamento de dados clínicos para WhatsApp ou analytics.
- Teste em staging antes de produção; aprovações editorial e profissional independentes do check técnico.
