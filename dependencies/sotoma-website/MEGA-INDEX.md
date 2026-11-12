# MEGA INDEX — SOTOMA HOME V5 / Elementor

**CÓDIGO CANÔNICO ÚNICO:** [Copiar Home V5 completa](home-v5/SOTOMA_HOME_V5_ELEMENTOR_UNICO.html).

Regra: uma página = um único HTML para um widget Elementor. O próprio arquivo contém STYLE + conteúdo do corpo + SCRIPT. O HEADER e o FOOTER são globais do Elementor/WordPress. Não copiar documento HTML completo nem criar arquivos CSS/JS separados para colar.

## Pesquisa rápida no arquivo (Ctrl+F)
| Grupo | Conteúdo | Identificador dentro do arquivo |
|---|---|---|
| Navegação | Início | #inicio / .hero-section / data-hero-rotator |
| Navegação | Quem cuida de você | #equipe / .team-card |
| Navegação | Como cuidamos | #servicos / .service-card |
| Navegação | Dúvidas | #faq / .faq-item |
| Navegação | Blog | #blog / .blog-card |
| Navegação | Contato | #agendamento / data-whatsapp |
| Jornada | Defina sua área | #caminhos / .pathway-card |
| Jornada | Escolha seu plano | #planos / .plan-card |
| Jornada | Primeira sessão | #jornada / .step-card |
| Modalidades | Consulta avulsa, Multidisciplinar, Profissional único | #planos / .plans-grid |
| Áreas | Adultos, Crianças/adolescentes | #caminhos |
| Programas | Psicoterapia Positiva, Psicanálise, V.I.A., M.I.R.A. | #servicos |
| Conhecimento | Pesquisas, artigos, leituras relacionadas, correlação | #blog / BLOG-01 até BLOG-13 |
| Conhecimento | Filtrar, procurar, ordenar | data-filter / data-blog-search / data-blog-sort / renderBlog |
| Utilitários | Mostrar todos os 13 artigos | data-blog-more |
| Utilitários | Voltar ao topo | data-to-top |
| Utilitários | Privacidade | Footer global (fora do widget) |

## HTML, CSS, JavaScript: tudo no mesmo arquivo
- [Arquivo inteiro — copiar e colar](home-v5/SOTOMA_HOME_V5_ELEMENTOR_UNICO.html)
- Para o CSS, busque STYLE e o prefixo #sotoma-home-v5.
- Para a estrutura, busque cada âncora da tabela.
- Para o JS, busque SCRIPT, heroConfig, renderBlog e data-whatsapp.
- Fotografias e WebP da prévia V5 permanecem embutidas. Imagens de capa dos posts vêm dos endereços WXR, com prévia da V5 quando indisponíveis.

## Blog integrado ao corpo da Home
Fonte: exportação WordPress WXR de 10/11/2026: 13 posts publicados, com URLs, títulos e datas. Curadoria por sequência de leitura (primeiros passos, infância/adolescência, vida adulta, abordagens e programas). Inicialmente 6 destaques; botão mostra todos 13. Filtro e busca local não inferem autoria profissional.

**Limite:** as URLs e imagens foram extraídas do XML, sem verificação de funcionamento do servidor ao vivo.

## Uso com Elementor, sem duplicação
1. Home > Editar com Elementor > contêiner largura total > UM widget HTML.
2. Cole todo o arquivo único; header e footer permanecem no Theme Builder global.
3. Faça backup do estado anterior; evite widgets antigos duplicados e título de página extra.
4. Confirme imagens, consentimentos, qualificações, WhatsApp, ofertas e links.
5. Valide em staging, desktop/tablet/mobile e rollback antes de qualquer publicação.

[Governança](../../docs/MISSION-LOCK.md) · [Proveniência e gates](ASSETS-E-PENDENCIAS.md) · [Artigos editoriais](../sotoma-editorial/ARTIGOS-60-INDEX.md)
