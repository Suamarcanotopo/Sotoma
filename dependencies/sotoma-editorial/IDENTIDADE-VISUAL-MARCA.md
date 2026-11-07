# SOTOMA — Identidade visual editorial vinculada à marca real
**Data da auditoria pública:** 07/11/2026 · **Estado:** tokens OBSERVADOS na versão pública. Não é manual de marca formalmente homologado por Cláudia.

## Fonte canônica observada
- Website: https://sotomasaudepsicointegrada.com.br/
- CSS Elementor global (kit 411): https://sotomasaudepsicointegrada.com.br/wp-content/cache/wpo-minify/1792181192/assets/wpo-minify-header-elementor-post-411.min.css
- Logo presente em Open Graph e schema oficial: https://sotomasaudepsicointegrada.com.br/wp-content/uploads/2025/06/Logo-claudia.png
- Algumas páginas usam CSS local com cores como **#4DB0BB** e fonte **Mulish**. Essas são **sobrescritas locais observadas**, não autorização para substituir o padrão global. Conferir o manual original e as configurações Elementor quando disponíveis.

## Tokens observados (não inventados)
| Token | Valor | Origem | Uso permitido na fase editorial |
|---|---|---|---|
| Verde institucional (accent) | `#22524A` | Elementor kit 411 | títulos, botões, linhas, contrastes, destaques |
| Grafite primário | `#2E2E2E` | Elementor kit 411 | texto principal |
| Cinza secundário | `#54595F` | Elementor kit 411 | textos secundários |
| Cinza texto legado | `#7A7A7A` | Elementor kit 411 | texto maior; não usar para corpo pequeno sobre branco sem ajuste de contraste |
| Verde complementar | `#8BA146` | Elementor kit 411 | elementos grandes e detalhes, sem texto branco pequeno |
| Verde suave | `#91AFA1` | Elementor kit 411 | fundos, ilustrações e divisões, sem texto branco pequeno |
| Preto/branco | `#000000 / #FFFFFF` | Elementor kit 411 | fundos, contraste e legibilidade |
| Tipografia global | **Poppins 600/400/500** | Elementor kit 411 | títulos semibold, corpo regular, CTAs medium |
| Exceção visual observada | **#4DB0BB + Mulish** | CSS local Elementor página 14 | somente se demonstrado como parte aprovada do design daquela página |

## Teste WCAG de contraste calculado
- `#22524A` sobre branco: **8,85:1** (adequado a texto normal).
- `#2E2E2E` sobre branco: **13,58:1** (adequado).
- `#54595F` sobre branco: **7,07:1** (adequado).
- `#7A7A7A` sobre branco: **4,29:1** (abaixo de 4,5:1 para texto normal).
- `#8BA146` sobre branco: **2,88:1**; `#91AFA1` sobre branco: **2,37:1**; `#4DB0BB` sobre branco: **2,55:1**. Evitar como texto normal sobre branco.
Esses valores são cálculo da paleta, não homologação global de acessibilidade do website.

## Sistema de produção editorial — separado do conteúdo clínico
- **Logo:** usar somente arquivo oficial e variações aprovadas. Preservar proporções e margem de respiro. Não pedir à IA para redesenhar o símbolo, fabricar logotipo ou trocar nome.
- **Formato de carrossel:** 1080×1350 (4:5), safe area mínima 100px; Poppins e paleta acima; escolher texto alto contraste; títulos curtos, corpo manualmente revisado.
- **Vídeo:** 1080×1920 (9:16), legendas legíveis e identidade coerente; imagem 16:9 somente quando a plataforma exigir, com respeito a safe zones.
- **Fonte científica em card:** apenas se o dado visualizado for real, com unidade, amostra e referência; casos de hipótese devem ser rotulados. Não criar gráfico sintético com números inventados.
- **Pessoas:** usar somente profissionais com uso de imagem autorizado; nunca pacientes ou menores reconhecíveis. Cenas conceituais sem fotos clínicas são preferíveis.
- **Informação/TOPO:** detalhes visuais discretos e títulos legíveis; perguntas abertas, não alarmes.
- **Educação/MEIO:** diagramas, percursos, comparações e referências; não criar elementos pseudo-científicos.
- **Transformação/FUNDO:** passos de esclarecimento/contato e privacidade, sem imagens “antes/depois” ou promessa de cura.

## Divergência descoberta e bloqueio
Os 720 prompts de cards antigos citavam “marfim, verde-sálvia, grafite, terracota” como **paleta provisória**. Esse vocabulário não corresponde diretamente aos tokens reais observados. Portanto, o **visual pass** dos materiais anteriores estava pendente. Atualizar o texto dos prompts para os tokens verificados, preservar suas cenas individualizadas e registrar mudança no histórico.
O mesmo vale para roteiros de vídeo derivados: especificação de acabamento visual precisa usar os tokens oficiais, nunca uma identidade criada para outro projeto.

## Quando confirmar com a direção
A observação técnica do CSS não garante que o kit atual seja o manual aprovado. **Cláudia deverá confirmar: logo autorizado, arquivos vetoriais, cores oficiais, fontes licenciadas, usos incorretos, fotografia, padrões de carrossel, vídeos e eventualmente sub-marcas de V.I.A./M.I.R.A.** O trabalho não inclui alterar o site ao vivo.

## Governança
Conteúdo: [FUNIL-INFORMACAO-EDUCACAO-TRANSFORMACAO.md](FUNIL-INFORMACAO-EDUCACAO-TRANSFORMACAO.md) · Pesquisa: [PESQUISAS-ESTUDOS-GOVERNANCA.md](PESQUISAS-ESTUDOS-GOVERNANCA.md).
Brand contract tem identidade própria e **não herda paletas do Sinergia Universal ou outros clientes**. Referência técnica e design system ficam no GitHub; versão operacional e aprovação de peças vão ao Google Sheets.
