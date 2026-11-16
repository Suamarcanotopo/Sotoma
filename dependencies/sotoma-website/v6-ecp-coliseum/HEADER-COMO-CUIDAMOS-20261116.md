# SOTOMA — HEADER Global V1.1 / Como cuidamos
**Data:** 16/11/2026 · **Escopo:** header Elementor global · **Estado:** DRAFT em branch, sem publicação.

## Fontes da revisão
- Arquivo original: `dependencies/sotoma-website/templates-global/HEADER_GLOBAL_ELEMENTOR_UNICO.html`.
- Código anexado pelo responsável: mesmo header V5, sem dropdown em Como cuidamos.
- Padrões do website V6 (Quem cuida: `<details><summary>` + dropdown).
- Quatro URLs verificadas por busca HTTP com status 200 em 16/11/2026:
  - https://sotomasaudepsicointegrada.com.br/psicanalise/ — Yasmin.
  - https://sotomasaudepsicointegrada.com.br/psicoterapia-positiva/ — Cláudia.
  - https://sotomasaudepsicointegrada.com.br/v-i-a/ — Cláudia.
  - https://sotomasaudepsicointegrada.com.br/m-i-r-a/ — Cláudia (a URL estava 404 antes da criação pelo responsável; foi reconsultada e retornou 200).
- `https://sotomasaudepsicointegrada.com.br/como-cuidamos-2/` mantido como “Conheça todos os serviços” dentro do dropdown.

## Modificações
1. Transformação de `Como cuidamos` de link direto para menu suspenso nativo, compatível com o padrão existente de `Quem cuida`.
2. Inserção de quatro sublinks e rótulos discretos das profissionais; desenho com cores por profissional.
3. Preservação do link de visão geral e dos outros menus originais.
4. CSS isolado em `#sotoma-global-header`, sem plugin, sem alteração nos bodies do website.
5. Rotas das páginas de serviço no mapa local do header para realce visual `aria-current` no item correto e no summary do menu.
6. Ao abrir um submenu, os demais fecham. `Escape` fecha os dropdowns e devolve foco ao controle relevante.
7. Contatos de Cláudia (`556791847679`) e Yasmin (`5567991858129`) preservados no registro. Texto descritivo de Yasmin atualizado para crianças, adolescentes e jovens até 24 anos.
8. Sem inclusão de parâmetros clínicos, novos formulários ou analytics.

## Gates estáticos ECP / COLISEUM
| Gate | Prova | Estado |
|---|---|---|
| Código único | Um STYLE, um SCRIPT, um HEADER, um NAV | PASS estático |
| JavaScript | Parsing de todo o SCRIPT em runtime JS | PASS sintaxe |
| 4 destinos diretos | URLs presentes no HTML e status 200 HTTP externamente | PASS URL |
| Quem cuida | `<details><summary>Quem cuida</summary>` preservado | PASS estático |
| Como cuidamos | Segundo `<details>`, rótulos das profissionais e visão geral preservada | PASS estático |
| Rotas | `data-sotoma-nav` e mapa de origem para 4 serviços | PASS estático |
| WhatsApp | IDs oficiais no registro local; sem formulário clínico | PASS estático |
| Elementor | Renderização, teclado, foco, visibilidade sobre conteúdo e menu móvel | **RETEST / staging** |
| Publicação | Não houve modificação do WordPress em produção | **DRAFT** |

## Instalação em staging e rollback
1. Exportar/guardar HTML completo do header em produção (Elementor Theme Builder) e capturar telas desktop e mobile como baseline.
2. Substituir somente o código do widget HTML do Header global pelo arquivo canônico atualizado. Não criar outro header e não duplicar menus do tema.
3. Testar em 320, 390, 768, 1024 e 1440px: navegação, sobreposição/recorte do dropdown, teclado (Enter/Espaço/Escape/Tab), toque, giro de tela, abrir/fechar, estado ativo e contato via WhatsApp.
4. Abrir as quatro URLs, verificar página 200, título, profissional correta e redirecionamento quando houver.
5. Validar com Yasmin/Cláudia a descrição de escopo profissional. Validar visual no Elementor; testar cache e eventual interferência de CSS do tema.
6. Após aceite, publicar a revisão no WordPress pelo fluxo aprovado; se houver regressão, restaurar o widget original pelo histórico/revisão do Elementor. Reverter commit no GitHub somente se necessário.

## Dependências
Esta branch parte de `feat/sotoma-psicanalise-yasmin-v7-20261116` (PR #16); manter PR empilhada em Draft e não mesclar na main até harmonizar a sequência das PRs.
