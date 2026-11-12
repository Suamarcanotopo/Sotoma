# MEGA INDEX — SOTOMA WEBSITE / HOME V5
> Branch de revisão. **Não publicado; não homologado.** Última revisão: 12/11/2026.
> Fonte real da V4 e 15 WebP + 26 SVG **não encontrados na main** no momento do inventário. Não confundir este protótipo novo com migração fiel da V4.

## ENTRADA RÁPIDA — copiar e colar
| O que preciso? | Arquivo exato | Como utilizar |
|---|---|---|
| Visualizar estrutura navegável | [HTML](home-v5/index.html) | Abrir localmente após baixar a pasta com CSS e JS |
| Copiar o HTML inteiro | [index.html](home-v5/index.html) | Marcação das dez seções, ids e links |
| Copiar apenas estilos | [home-v5.css](home-v5/home-v5.css) | Tokens, componentes e responsividade |
| Copiar apenas interações | [home-v5.js](home-v5/home-v5.js) | Menu móvel, filtro de conteúdo e Escape |
| Saber o que está faltando | [ASSETS-E-PENDENCIAS.md](ASSETS-E-PENDENCIAS.md) | Bloqueios e proveniência |
| Entender contratos de integração | [README.md](README.md) | Uso no WordPress e gates |

## MAPA DE ÂNCORAS E CÓDIGO
> No GitHub use Ctrl+F pelo **ID SOT-HV5** no HTML. Estilos são identificados pelas classes abaixo. Scripts interativos têm seletores identificáveis.

| ID | Grupo | Seção / item | HTML — âncora ou marcador | CSS — seletor | JS — gatilho | Estado |
|---|---|---|---|---|---|---|
| SOT-HV5-00 | Navegação | Início, Equipe, Como cuidamos, Dúvidas, Blog, Contato | `#menu-principal` / `#inicio` | `.site-nav` / `.site-header` | `[data-menu-button]` | Protótipo |
| SOT-HV5-01 | Hero | Início / Encontrar atendimento / Explorar | `<!-- SOT-HV5-01 HERO -->` | `.hero`, `.hero-grid` | — | Imagem pendente |
| SOT-HV5-02 | Áreas | Adultos; Crianças e adolescentes | `#areas` | `.cards.two` | — | Texto candidato |
| SOT-HV5-03 | Valores | Acolhimento; Conhecimento; Responsabilidade | `#valores` | `.tinted`, `.panel` | — | Texto candidato |
| SOT-HV5-04 | Como cuidamos | Psicoterapia Positiva; Psicanálise; V.I.A.; M.I.R.A. | `#como-cuidamos`, `#via`, `#mira` | `.cards.four` | — | Revisão clínica |
| SOT-HV5-05 | Jornada | Defina sua área; Escolha seu plano; Primeira sessão | `#jornada` | `.steps` | — | Protótipo |
| SOT-HV5-06 | Modalidades | Avulsa; Multidisciplinar; Profissional único | `#modalidades` | `.cards.three` | — | Oferta não confirmada |
| SOT-HV5-07 | Equipe | Cláudia e Yasmin | `#equipe`, `#claudia`, `#yasmin` | `.profile`, `.portrait` | — | Fotos e credenciais pendentes |
| SOT-HV5-08 | Conhecimento | Pesquisas; Artigos; Correlação; Leituras relacionadas | `#blog`, `#resultados-blog` | `.filters`, `.filter` | `[data-filter]`, `[data-category]` | Exemplos, sem artigos publicados |
| SOT-HV5-09 | Dúvidas | 5 perguntas expansíveis | `#duvidas` | `.faq` | HTML `details` nativo | Revisão editorial |
| SOT-HV5-10 | Contato | Contato; Encontrar atendimento | `#contato` | `.contact` | — | Canal a confirmar |
| SOT-HV5-11 | Utilitários | Privacidade | Rodapé | `.footer` | — | URL oficial pendente |

## LOCALIZADOR POR TEMA
### Navegação
- **Início:** `#inicio`
- **Quem cuida de você:** `#equipe`
- **Como cuidamos:** `#como-cuidamos`
- **Dúvidas:** `#duvidas`
- **Blog:** `#blog`
- **Contato:** `#contato`
### Jornada
- **Defina sua área:** `#areas`
- **Escolha seu plano:** `#modalidades`
- **Primeira sessão:** `#jornada` terceiro passo
### Modalidades
- **Consulta avulsa, Multidisciplinar, Pacote profissional único:** `#modalidades`
### Áreas e programas
- **Adultos; Crianças e adolescentes:** `#areas`
- **Psicoterapia Positiva; Psicanálise; V.I.A.; M.I.R.A.:** `#como-cuidamos`
### Conhecimento
- **Pesquisas e estudos; Artigo; Leituras relacionadas; Correlação:** `#blog`; filtro disponível para pesquisa, artigo e correlação; leituras relacionadas dentro do card de correlação.
### Utilitários
- **Privacidade:** aviso no rodapé, link definitivo não configurado
- **Encontrar atendimento:** botões `#jornada`, `#contato`
- **Filtros do blog:** `[data-filter]`
- **Explorar:** áreas `#areas` e abordagens `#como-cuidamos`

## PROTOCOLO DE CÓPIA SEM REGRESSÃO
1. Localize o ID/âncora, copie o HTML da seção entre os comentários SOT-HV5.
2. Copie somente seletores CSS relacionados; preserve tokens `:root`, acessibilidade e breakpoints.
3. Copie o JS correspondente, se aplicável. Não replique listeners em plugins de injeção.
4. Adeque links, caminhos de arquivos e prefixos ao tema/Elementor; use escopo CSS de contêiner para evitar colisões.
5. Teste teclado, 390/768/1440, imagens reais, links e formulários no staging. NÃO publicar sem aprovação.

## REFERÊNCIAS CANÔNICAS NO REPOSITÓRIO
- [Missão / segurança](../../docs/MISSION-LOCK.md)
- [Handoff](../../docs/HANDOFF.md)
- [Identidade visual editorial](../sotoma-editorial/IDENTIDADE-VISUAL-MARCA.md)
- [Tokens editoriais observados](../sotoma-editorial/brand/tokens.json)
- [Índice de artigos editoriais](../sotoma-editorial/ARTIGOS-60-INDEX.md)
