# SOTOMA — Matriz de completude do website novo
Versão: 1.0 | 2026-11-10 | Estado inicial: AINDA NÃO INVENTARIADO
Usar com docs/BACKUP-INTAKE-RECONCILIATION.md; preencher depois de ler ambos backups. Não assumir que algo listado já existe na SOTOMA.
Regra de prova: cada item exige Origem (A/B/LIVE/GITHUB/NOVO_PEDIDO), evidência, versão, decisão, URL/arquivo, teste, PR e aprovação quando aplicável.

## Conteúdo e navegação
- Home: blocos, hero, formulários, SEO e CTAs.
- Institucional: sobre, equipe, formações/títulos verificáveis, contatos e políticas.
- Serviços/programas: V.I.A., M.I.R.A. e qualquer outro realmente presente em backups ou pedido posterior, com termos reais.
- Blog: posts existentes, autores, datas, slugs, categorias, tags, imagens destacadas, rascunhos e revisões, links internos/externos; NÃO publicar os 60 rascunhos como se fossem artigos live.
- Menus/footer/404/search/breadcrumbs: links, acessibilidade e responsividade.
- Traduções/idiomas: somente línguas presentes ou solicitadas; conteúdo não pode ser inventado.

## Identidade e assets
- Logo exato, versões e licenças; favicon; cores, tipografia, gradientes, ícones, fotografia, tratamento de imagens e proporções.
- Elementor: kit global, templates salvos, Theme Builder, páginas, containers, widgets, motion effects, CSS por página, custom JS e breakpoints.
- Compatibilidade mobile/desktop/touch/zoom, contraste e foco de teclado.
- Mídia vinculada e órfã: comparar wp-content/uploads com IDs de attachment e URLs; recuperar itens ausentes por outra fonte sem expor dados de pacientes.

## SEO e distribuição
- Tabela exata URL antiga -> URL staging -> decisão 200/301/410 ou bloqueio; não descartar slug de alto valor sem decisão.
- Page title, meta description, canonical, robots, sitemap, robots.txt, redirects históricos, breadcrumbs, Open Graph, Twitter Cards, JSON-LD/schema, hreflang se houver, paginação/arquivo e arquivo de imagem.
- Core Web Vitals e velocidade precisam de medição real, não previsão.
- Indexabilidade: bloquear staging para crawlers e acesso público; produção apenas após corte autorizado.

## WordPress e infraestrutura
- Core/PHP/SQL e compatibilidade; tema/child theme, plugins/versões/licenças, custom post types, banco, cron, cache/CDN, object cache, wp_options sem segredos.
- Segurança: papel de usuário, MFA, sessão, atualização, firewall, uploads, vulnerabilidades, backups e restore testados.
- Logs sanitizados; permissões de filesystem; TLS, DNS, e-mail SMTP, SPF/DKIM/DMARC quando houver e autorização de alteração.
- Migrations: staging privado, scripts de search-replace que preservem serialização, desligar integrações que enviariam dados reais.
- E-commerce/checkout somente se comprovado no backup/novo pedido; não adicionar por padrão.

## Formulários, canais e métricas
- Contato/WhatsApp, privacidade/consentimento, canal real e permissões, envio para destinos existentes; não enviar mensagens de teste a pacientes reais.
- Eventos: página, CTA, clique WhatsApp, contato confirmado, agendamento confirmado, comparecimento são eventos distintos; mensuração não contém dados de saúde.
- Gate por terceiro: analytics/pixel/CRM só após revisar dados, privacidade e prova de configuração; não assumir que GTM está habilitado.

## Portais futuros (não migração comprovada)
- Cliente e painel profissional/gestão: PRs e gates independentes, autenticação, papéis, isolamento e logs; não ativar por mera presença de protótipo documental.
- Documentos clínicos, receitas e anexos: somente via sistemas adequados com responsabilidade profissional e revisão jurídica/técnica. WordPress público não pode expor prontuários.

## Checklist por URL/ativo (tabela a gerar após receber backup)
id | item/url | origem A | origem B | atual | versão escolhida | decisão | autoria e direito | SEO | visual | teste | PR | aprovador
Status inicial de TODAS as linhas: NÃO INSPECIONADO. O conteúdo da tabela não deverá copiar dados sensíveis para o GitHub.

## Critério de saída
Homologação só após inventário reconciliado, diferenças justificadas, last-known-good preservado, QA independente por desktop/mobile e segurança, SEO, formulários, restauração e rollback testados. FALHA ou DESCONHECIDO importante bloqueia a publicação e gera opção de recuperação em vez de descartar silenciosamente.
