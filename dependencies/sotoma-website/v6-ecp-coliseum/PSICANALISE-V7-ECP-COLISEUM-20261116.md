# SOTOMA — Psicanálise V7 | ECP + COLISEUM | 16/11/2026

## Estado factual
- **Proposto e registrado no GitHub:** código único `../v6-paginas-publicadas/psicanalise/BODY_ELEMENTOR_UNICO_V7.html`.
- **Origem editorial:** conteúdo publicado em https://sotomasaudepsicointegrada.com.br/psicanalise/ inspecionado em 16/11/2026. Seções preservadas: apresentação; comportamento/expressão; o que a Psicanálise busca compreender; infância; adolescência; família; profissional responsável; contato. Errata do título “Para quem a Psicoterapia Positiva é indicada” corrigida para Psicanálise.
- **Faixa ampliada por solicitação do responsável:** crianças, adolescentes e jovens adultos **até 24 anos**. Confirmar oficialmente com Yasmin e direção antes da publicação.
- **Imagem do usuário:** https://sotomasaudepsicointegrada.com.br/wp-content/uploads/2026/11/Ya-11.jpeg, recurso `image/jpeg` HTTP 200 em 16/11/2026. Imagem original, sem edição e sem recorte: `width:100%;height:auto;object-fit:contain`; sem `object-position` personalizado que corte rosto.
- **WhatsApp Yasmin:** `5567991858129`, conferido nos códigos das páginas V6 e na página do perfil. **NÃO** usar `556791847679` nesta página (número da Cláudia).
- **Não houve** deploy WordPress, alteração de DNS, instalação de plugin, merge ou teste real de navegação/Elementor.

## Auditoria de escopo e segurança
| Gate | Evidência estática ou requisito | Status |
| --- | --- | --- |
| Copy original e sua voz | Texto central de escuta, brincar, relações familiares, elaboração e respeito ao tempo preservado e didatizado; acréscimo de jovens adultos até 24 anos informado pelo responsável | PASS editorial de alinhamento; revisão pela Yasmin PENDENTE |
| Hero sem crop | Foto `Ya-11.jpeg`; `height:auto` + `object-fit:contain`, sem altura fixa e sem `object-fit:cover` no seletor de foto | PASS código, renderização navegador PENDENTE |
| CTA corretos | 10 CTAs com número Yasmin; texto diferente por origem da seção (apresentação, fundamentos, infância, adolescência, jovens adultos, família, profissional, dúvidas e final) | PASS estático, clique manual PENDENTE |
| Dados sensíveis | Nenhum formulário, captura de relatos clínicos ou analytics; mensagem WhatsApp só identifica seção e pergunta administrativa | PASS estático |
| Responsividade | CSS em 900px/760px/520px; grade reduz a uma coluna e imagem sempre íntegra | PASS estático, tela 390/768/1440 PENDENTE |
| Semântica | Um H1; seções com H2; FAQ nativa em `details/summary`; foco visível e reduced motion | PASS estático, leitor de tela PENDENTE |
| Widgets Elementor | Um STYLE e um SCRIPT encapsulados em `#sotoma-psy-v7`; sem `<main>` duplicada, header/footer ou JSON-LD concorrente com Rank Math | PASS estático, staging PENDENTE |
| Privacidade de menores | Não pedir nome, sintomas, idade, diagnóstico, escola nem história da criança via link ou tracking; explicitar participação cuidadosa de responsáveis | PASS estático; validação profissional PENDENTE |
| Provas clínicas | Sem prazos, cura ou eficácia garantidos; informação não substitui avaliação individual | PASS editorial |
| Produção | Não publicada e não testada ao vivo; requer aprovações formais e rollback | BLOQUEADO até homologação |

## Como instalar sem regressão (staging)
1. Salvar backup e cópia integral do conteúdo **atual** da página `/psicanalise/` no Elementor; registrar revisão/data.
2. Conferir conteúdo aprovado pela profissional e direção (incluindo faixa até 24 anos, título/qualificações, autorização de imagem e disponibilidade).
3. **Substituir** apenas o corpo antigo da página por **um** widget HTML com o conteúdo integral do arquivo V7; manter header/footer globais existentes e não instalar o bloco aditivo V6 junto.
4. No staging, verificar telas 390px, 768px, 1440px, navegadores móveis, imagem inteira sem cortes ou estiramento, links de WhatsApp de cada seção, foco por teclado, FAQ, fonte, margens, CLS e erros de console.
5. Conferir Rank Math, único H1, canonical `/psicanalise/`, título/metadescrição e evitar duplicação do H1 pelo tema; correções SEO ficam no plugin SEO/WordPress, não no widget.
6. Aprovar com Yasmin e direção; publicar somente após autorização e registrar URL pública e evidência de leitura de volta.
7. Em falha, restaurar revisão anterior do Elementor; GitHub pode reverter o commit isolado da V7. Não remover o código legado V6 até validação.

## Observações
- O bloco V6 em `v6-conexoes-sem-substituicao/legadas-preservadas/psicanalise/` é histórico **aditivo**. Não é a página final V7.
- O ZIP anterior de V6 (sete páginas) não contém V7. Para a página Psicanálise usar diretamente o HTML único versionado.
- Títulos e escopo profissional somente se confirmar com Yasmin; não declarar CRP ou diplomas sem prova.
