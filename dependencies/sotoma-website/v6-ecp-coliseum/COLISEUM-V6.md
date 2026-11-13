# ECP + COLISEUM — SOTOMA V6: RED TEAM DE EXECUÇÃO

**ECP** = coordenação de escopo, fontes, código e decisão; **COLISEUM** = revisão por perspectivas de UX, ética clínica, SEO, acessibilidade, segurança, performance e rollback. Essa matriz é uma auditoria aplicada ao código, não uma afirmação de execução autônoma de agentes externos.

| Gate | Verificação | Prova/resultado | Estado |
|---|---|---|---|
| P0 — ofertas antigas | Home V5 possuía 3 cards e assinatura multidisciplinar | V6 possui somente Atendimento individual e Acompanhamento terapêutico | PASS estático |
| P0 — atendimento integrado | Apenas futuro após ampliação da equipe | Não aparece como oferta/card atual | PASS estático |
| P0 — preço | Cliente não quer expor valores | Zero menções `R$ <valor>` nos 7 corpos novos | PASS estático |
| P0 — links de perfis | Antigo `/sobre/claudia/` e `/sobre/yasmin/` não são URLs publicadas | Corrigidos para `/claudia-sotoma/` e `/yasmin-sotoma-muzilli/` | PASS estático |
| P0 — artigos | Permalinks antigos sem data causavam ligações inconsistentes | Blog V6 mapeia 13 posts para os permalinks datados do WP REST público | PASS estático; HTTP pós-upload pendente |
| P0 — correção artigo | Frase com 'cura e evolução' ainda publicada | Arquivo de correção exata aprovado criado, mas post fonte não editado | **PENDENTE edição no WordPress** |
| P0 — evitar perda de texto | Novas páginas foram derivadas do código V5, não snapshot byte a byte atual | 7 corpos completos para revisão com diff obrigatório; 10 blocos aditivos sem substituir conteúdo legado | PASS estratégia; revisão editorial manual pendente |
| P1 — fotos | URLs antigas de março 2026 estavam 404 | 19 assets de novembro já guardados, V6 usa imagens da biblioteca; Blog distribui 12 retratos diferentes nos 13 cards | PASS código / revalidar URL antes de publicar |
| P1 — roteamento | Páginas novas e legadas convivem | Índice mapeia 26 páginas; 9 não tocadas por duplicação ou conteúdo sensível | PASS inventário |
| P1 — acessibilidade | Elementor já pode renderizar main do tema | 6 main aninhados convertidos em regiões acessíveis | PASS estrutural; leitor de tela não testado |
| P1 — movimento | Transições e hover sobre cards, com redução de movimento | CSS `prefers-reduced-motion: reduce`, sem dependências externas | PASS estático |
| P1 — integração WordPress | Usuário proibiu plugins neste pedido | **Zero plugins instalados/ativados** e zero alterações na produção; arquivos só HTML/CSS/JS | PASS |
| P1 — segurança | Não capturar dados de saúde no HTML | Botões administrativos de WhatsApp; nenhum formulário clínico, nenhum analytics novo | PASS no código |
| P1 — responsividade | Breakpoints 700px/650px/620px e variação por componente | Regras CSS presentes; não prova renderização final em Elementor | PENDENTE staging |
| P1 — SEO | Não criar metadata duplicada | Rank Math e templates globais permanecem intocados; sem noindex/redirect novo | PASS escopo |
| P2 — produção | Apenas GitHub PR Draft | Nenhum deploy, nenhum merge, nenhum banco/site modificado | PASS |

## Exposição residual e próximos testes

- URLs antigas /blog/, /sobre/, /como-cuidamos/ etc. permanecem acessíveis até missão específica de canonicals e 301; não encobrir problema com CSS.
- Atendimentos antigos podem conter textos comerciais históricos; os 8 blocos de melhoria NÃO removem esses textos. Antes de promover a página antiga, a direção precisa aprovar o conteúdo original e eventuais alterações pontuais.
- A correção do post 2187 foi preparada, mas a frase antiga permanece na fonte WordPress até edição e revisão.
- As 7 páginas V6 completas vêm de um snapshot de código V5 do GitHub. Se o Elementor ao vivo recebeu intervenções posteriores, é obrigatório conferir e reconciliar os textos antes de qualquer substituição.
- Consentimento do uso de imagens e registros profissionais devem ser confirmados pela direção.
- Não usar os plugins armazenados historicamente no repositório para esta missão. Não montar menu duplicado dentro de um body Elementor.
