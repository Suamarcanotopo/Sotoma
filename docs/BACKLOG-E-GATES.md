# Backlog de execução por marcos — SOTOMA 2.0
Status geral: planejamento, nada instalado.
## Gate 0 — escopo, inventário, responsabilidades
- [x] Repositório privado identificado e missão registrada.
- [x] Mission Lock e Handoff.
- [x] Modelo arquitetural, editorial, dados e risco documental.
- [ ] Aceite da Cláudia e Márcio sobre fluxo e permissões.
- [ ] Inventário verificado do site e hospedagem: PHP/WP/plugins/backup, performance, ferramentas de agenda, WhatsApp, analytics existentes.
- [ ] Cadastro e contratos dos profissionais, licenças e papéis jurídicos; análise de dados e política de privacidade.
**DoD:** decisão arquitetural aprovada e sem dados de paciente; registro de riscos.
## Gate 1 — aquisição e agenda (MVP inicial recomendado)
- [ ] Protótipo de design system e navegação do painel.
- [ ] Plugin `sotoma-site-bridge` para eventos sanitizados, botões e formulário mínimo com consentimento/política apropriados.
- [ ] API de atribuição (ingestão com rate limit, deduplicação, validação).
- [ ] Processo de confirmação manual de contatos + estudo WhatsApp Business Platform oficial; sem scraping.
- [ ] Cadastro administrativo de profissionais e capacidade/slots, sem prontuário.
- [ ] Agendamentos, cancelamentos, comparecimento, logs administrativos.
- [ ] Dashboard Cláudia/Márcio: origem verificada e ocupação, com agregação.
- [ ] Testes automáticos, integração, acessibilidade e revisão de segurança.
**DoD:** cada KPI possui numerador/denominador e fonte de prova; caso de clique sem lead não conta como paciente.
## Gate 2 — autenticação e portais com dados de teste
- [ ] `painel.` e `cliente.` em STAGING sob DNS de teste, sem dados reais.
- [ ] Identidade, convites, MFA internos e recuperações seguras.
- [ ] RBAC/ABAC e isolamento profissional/paciente.
- [ ] Agenda paciente + consulta de documentos de teste; fluxo de upload com antivírus/quarentena.
- [ ] Auditoria de concessão, revogação, armazenamento e download.
- [ ] Pentest, validação de documentação, backup/restauração e teste de incidentes.
**DoD:** zero acesso cruzado; nenhum arquivo público; acessibilidade mobile; pareceres exigidos.
## Gate 3 — prontuário e receitas
- [ ] Verificar integração com sistema eletrônico clínico já utilizado, antes de construir novo.
- [ ] Política de guarda e registros clínicos por profissão.
- [ ] Documentos e assinaturas válidas; disponibilidade ao paciente com identidade conferida.
- [ ] Emissão de receitas somente via ferramenta certificada/integrada e profissional habilitado; avaliar SNCR e particularidades das categorias.
- [ ] Homologação clínica, regulatória, jurídica e de segurança.
**DoD:** fluxos clínicos respaldados por responsáveis técnicos, nunca 'receita em PDF gerado pelo plugin' sem assinatura/validade.
## Gate 4 — editorial e crescimento
- [ ] Pasta e planilha Drive criadas e verificadas, permissões e ID canônico.
- [ ] Piloto de pauta com autor verificado, fontes, aprovação e quatro roteiros opcionais.
- [ ] Publicação em WordPress apenas após revisão e retorno de URL pública.
- [ ] Relatórios por conteúdo/canal, sem dados de saúde.
- [ ] Evolução por resultados observados, sem otimizar métricas inventadas.
## Regras de PR
1. Issue com problema/evidência e risco; branch isolada.
2. PR com o que mudou, comparação antes/depois, testes, dados tratados, revisão ética e plano de rollback.
3. CI com lint, testes, segurança de dependência, análise de segredos, migração/rollback e simulação de acesso negado.
4. Validação em staging; produção somente com aprovação explícita da direção e backup verificado.
## Definições universais de pronto
Sem regressão, sem vazamento, com testes de autorizações, documentação atualizada, logs sem PII/PHI e métricas verificáveis. Diferenciar documentado de construído.

## Migração de hospedagem — gates independentes (adendo na PR #7)
- [ ] MIG0: receber 2 backups, provar hashes, integridade, proveniência e segurança, sem expor dados.
- [ ] MIG1: comparar A/B/live/README; construir inventário e decisão item a item, com rastreabilidade.
- [ ] MIG2: staging isolado, WordPress/Elementor e banco compatíveis, links/mídia/SEO, e-mail/webhooks desligados.
- [ ] MIG3: incorporar melhorias novas mediante PRs pequenas com teste/rollback.
- [ ] MIG4: COLISEUM + Red Team de restauração, proteção de dados, UX, segurança e originalidade.
- [ ] MIG5: aceites documentados e plano de corte com garantia de retorno ao servidor antigo.
- [ ] MIG6: go-live só após aprovação explícita, com prova de DNS/TLS, e-mail, delta de conteúdo e rollback.
A fundação G0–G4 permanece válida; MIG0–MIG6 é linha de migração, não autorização de prontuário ou produção.

**Issue de migração criada:** https://github.com/Suamarcanotopo/Sotoma/issues/8 — MIG0 a MIG6; o escopo está em PLANEJAMENTO e ambos backups ainda estão pendentes.
