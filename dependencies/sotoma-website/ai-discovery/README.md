# SOTOMA — AGENT DISCOVERY | HTML CANÔNICO + MARKDOWN LIMPO

**Estado:** código versionado para aprovação, sem instalação no WordPress em produção. Revisão realizada em 13/11/2026 com consulta pública read-only à API WordPress e endpoints existentes. Esta dependência NÃO instala conversor Markdown paralelo.

## 1. Diagnóstico comprovado (site ao vivo)
| Superfície | Resultado da verificação |
|---|---|
| Página `/quem-cuida.md` | 200 `text/markdown` |
| `/como-cuidamos-2.md` e `/artigos-sotoma.md` | 200 `text/markdown` |
| Posts em `/2026/AA/DD/slug.md` | 13 links efetivos verificados 200, `text/markdown` |
| **20 links MD no índice curado** | **20/20 OK** via HEAD HTTP |
| `/llms.txt` | **404** (lacuna de descoberta) |
| `/llms-full.txt` | **200 mas LEGADO NÃO CURADO**, ~114 KB, inclui Hello world, cadastro/novo lead, páginas antigas e testemunhos a revisar |
| HTML com `Accept: text/markdown` | retorna HTML; preferência não negociada |
| Exemplo `/claudia-sotoma.md` | `X-Robots-Tag: noindex`, `Link rel=canonical` para HTML, `Vary: Accept` |
| `/sitemap_index.xml` + `robots.txt` | 200 |
| Rank Math SEO | presente, produz canônicas e JSON-LD no HTML da Home |

### Material anexado pelo usuário
A representação Markdown de uma Home anterior contém links de `/2026/03/` agora 404, o artigo de teste `Hello world!`, e depoimentos com pessoas/nome de profissional não validados na missão. Isso demonstra a necessidade de **revisão do conteúdo na origem**; não se deve copiar o dump antigo como se fosse material novo.

## 2. Entregas
- [`llms.txt`](llms.txt) — índice curado com **7 páginas da arquitetura nova + 13 artigos publicados** (URLs MD reais verificadas).
- [Plugin instalável: `sotoma-ai-discovery.php`](wordpress-plugin/sotoma-ai-discovery/sotoma-ai-discovery.php) — plugin WordPress mínimo, criado para servir `/llms.txt` sem banco de dados, anunciar `rel=alternate type=text/markdown` em conteúdo explicitamente aprovado e permitir, **opcionalmente**, negociação via HTTP Accept com redirect 307 para `.md` preexistente.
- [Cópia do índice incluída no plugin](wordpress-plugin/sotoma-ai-discovery/llms.txt).
- [Matriz de decisões e rotas](ROTAS-SEO-AGENTES.md).
- [Coliseum / Red Team / critérios de aceite](COLISEUM-REDTEAM.md).

## 3. Instalação e arquitetura segura
**Preferência operacional:** usar um **único dono de `/llms.txt`**. O website já possui Rank Math e gerador `.md`; **não instalar outro conversor**.

**Caminho A (preferencial, zero plugin novo):** ativar o módulo **LLMS Txt** no Rank Math SEO, configurar somente páginas/posts públicos já revisados e preencher o campo de conteúdo adicional com este índice curado (ou definir política de inclusão equivalente). O módulo está descrito pela [documentação oficial Rank Math](https://rankmath.com/kb/llms-txt/). Testar a saída pois o gerador pode adicionar conteúdo automaticamente; eliminar duplicatas e posts técnicos. O `llms.txt` versionado é a fonte aprovada da curadoria.

**Caminho B (fallback controlado):** se não for possível configurar o Rank Math sem conteúdo espúrio, instalar o diretório `wordpress-plugin/sotoma-ai-discovery` como plugin WordPress, **mantendo o módulo LLMS Txt do Rank Math desabilitado**. O plugin serve este índice estático a partir de uma cópia versionada, sem converter HTML, sem armazenamento clínico e sem tocar `/llms-full.txt`. Atualizar o arquivo junto com a aprovação editorial de novas páginas.

O recurso opcional de negociação **fica desligado por padrão**. Após validar todos os `.md` e cache em staging, adicionar `define('SOTOMA_AI_ENABLE_NEGOTIATION', true);` ao `wp-config.php` do ambiente aprovado. Nesse caso, `Accept: text/markdown` em post/page da allowlist é encaminhado via **307** à própria versão `.md`. HTML convencional permanece HTML. Não ativar sem teste de cache/CDN/Vary e sem verificar que o plugin de Markdown existente continua respondendo 200.

**Atenção:** um arquivo físico `/llms.txt` no diretório público pode ter precedência sobre qualquer plugin; escolher um mecanismo, nunca dois. Usar somente links Markdown existentes, com HTML como canônico e `noindex` nos mirrors.

## 4. Limitações transparentes
- Excluir `cadastro-de-cliente` e `novo-lead` do índice **não protege seu conteúdo** se a URL ainda é pública. Aplicar no WordPress restrições reais de acesso e/ou noindex após auditoria.
- `/llms-full.txt` atual segue legado em produção; **não deve ser divulgado como fonte curada**. Revisar o plugin que o gera, retirar páginas técnicas e dados sem validação, regenerar/invalidar cache e verificar resposta antes de referenciá-lo em `/llms.txt`. Se não houver controle de exclusões, desabilitar este endpoint até a solução segura.
- A Home `/home.md` existe, mas seu dump anterior está desatualizado; mantivemos a Home HTML como canônica e não a promovemos entre os 20 MD.
- Sem promessa de ranking: Google afirma que `llms.txt` e outros arquivos específicos de IA **não são necessários nem utilizados** para classificar resultados de busca ou AI Overviews. Otimizar conteúdo, links internos, autor/revisor, canônicas e dados estruturados coerentes continua essencial.
- O plugin cria apenas um índice estático e discovery header, **não melhora automaticamente autoria científica, E-E-A-T, qualidade clínica, desempenho ou relevância sem revisão editorial**.

## 5. Gates antes de qualquer publicação
1. Conferir com a direção as apresentações de Cláudia e Yasmin, imagens/contatos, valores, escopo e critérios da área clínica.
2. Auditar a Home anterior e depoimentos sem proveniência antes de expor seu conteúdo por Markdown.
3. Corrigir o `Hello world!`, páginas técnicas em `llms-full` e divergências de URLs antes de incluir índice completo.
4. Escolher o **único** proprietário de `/llms.txt` (Rank Math **OU** plugin fallback).
5. Rodar staging: 20 URLs 200 Markdown, `/llms.txt` 200 `text/plain`, conteúdo sem itens excluídos; HTML humano normal; `X-Robots-Tag noindex` nos MD; canonicals corretos.
6. Revisar header/footer/Singe Post e URLs recém-publicadas; não duplicar H1, JSON-LD do Rank Math ou header/footer de Elementor.
7. Validar cache, CDN, 304/ETag, GET/HEAD, acesso a endpoints privados, regras WP, falha de arquivos ausentes e rollback.
8. Autorizar produção somente após QA e backup; GitHub Draft não equivale a deploy.

**Fontes prioritárias:** documentação do Rank Math, Google Search Central, resposta HTTP real no site SOTOMA, Mission Lock do repositório e exportação fornecida.
