# ECP + COLISEUM — RED TEAM DE DESCOBERTA POR AGENTES

Auditoria de perspectivas: conteúdo, UX, WordPress/Elementor, SEO canônico, agentes, privacidade/segurança, acessibilidade, sustentabilidade editorial e rollback. São critérios e testes efetuados, não execução de agentes externos.

| Gate | Evidência / ataque | Correção ou contenção | Estado |
|---|---|---|---|
| P0 — llms inexistente | `/llms.txt` respondeu 404 | índice curado versionado + duas opções de instalação (Rank Math preferencial, plugin fallback) | Código feito; publicação pendente |
| P0 — full legado | `/llms-full.txt` expõe `Hello world!`, cadastro, novo lead, nomes em depoimentos e conteúdo antigo | **NÃO** linkar o full; revisar origem e escopo antes de regenerá-lo | Bloqueio externo pendente |
| P0 — dados operacionais | `/novo-lead.md` e `/cadastro-de-cliente.md` retornaram 200 | excluir index e revisar autorização/noindex na origem | Acesso público continua, não resolvido |
| P1 — informação antiga | Anexo Home MD registra fotos de `/2026/03/` 404 e texto antigo | Home MD omitida; atualizar conteúdo real antes de promover | Aguardando revisão |
| P1 — URLs concorrentes | `/como-cuidamos/` vs `/como-cuidamos-2/`, `/blog/` vs `/artigos-sotoma/` | usar novas por enquanto; planejar URL canônica e redirects | Documentado |
| P1 — agendamento | Link WhatsApp no anexo direciona só para Cláudia, e clique não comprova sessão | manter botões de ambas profissionais, atribuição não clínica | Nos templates globais da branch |
| P1 — index Markdown | 7 páginas e 13 artigos | 20/20 HEAD HTTP 200, `text/markdown` | PASS |
| P1 — mirror noindex | `/claudia-sotoma.md` | noindex, canonical HTML, Vary Accept | PASS amostra |
| P1 — SEO duplicado | Rank Math já cria title/canonical/JSON-LD | template não injeta schema duplicado, footer sem metatags | PASS estático |
| P1 — tags e autoria | WordPress mostra 13 editoriais e post legado com tag; categoria ≠ autoria | mapeamento para contato por página ou tema, não autor presumido | Requer aprovação clínica |
| P2 — negociação Accept | HTML retornado quando se pediu Markdown | opção 307 para .md no plugin fallback, desligada por padrão | Requer teste staging |
| P2 — capacidade de expansão | mais profissionais | registry e aprovação no Header/Footer, sem open signup | Código versionado |
| P2 — Markdown melhora ranking? | Google desaconselha truques GEO/AI | priorizar conteúdo confiável, HTML indexável, links, Rank Math | Não prometer resultados |

## Check rápido de aprovação
- [x] Ler anexo Markdown do usuário e confrontar com WordPress novo.
- [x] Investigar WordPress Rank Math e endpoints reais, sem acesso a dados privados.
- [x] Gerar `llms.txt` apontando só aos permalinks Markdown aprovados.
- [x] Validar **20/20** URLs do índice com status 200 e MIME `text/markdown`.
- [x] Versionar plugin fallback com allowlist e nenhum SQL, telemetria, conversor ou capture de paciente.
- [ ] Validar plugin/Rank Math em staging e `/llms.txt` ao vivo.
- [ ] Retirar `Hello world` e conteúdo problemático do `/llms-full.txt` já instalado.
- [ ] Corrigir Home MD e depoimentos/fotos antes de prometer fidelidade.
- [ ] Homologar templates globais e plano de URLs antes de redirecionar.

**Downside protegido:** implementação separada, possível reversão removendo plugin/alterando Rank Math sem quebrar HTML. **Upside possível:** links Markdown curados e facilidade de consumo por agentes que suportam índices/versões textuais, sem garantia de adoção/ranking.
