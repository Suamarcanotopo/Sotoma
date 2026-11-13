> **Atualização por verificação direta de 12/11/2026:** a consulta à API pública WordPress encontrou **21 páginas publicadas**, não 17 como no WXR usado na primeira auditoria. Existem `/quem-cuida-de-voce/`, `/v-i-a/`, `/artigos-sotoma/` e `/psicoterapia-online-para-intercambistas/`; a última contém os dois números de WhatsApp no HTML público. **As fotos da equipe foram recadastradas em `/wp-content/uploads/2026/11/`**; arquivos antigos de `/2026/03/` e algumas capas WXR retornaram 404. Foram corrigidas 50 referências de imagens nos candidatos da PR e criada a [auditoria ao vivo](AUDITORIA-LIVE-20261112.md). **Não houve acesso autenticado ao wp-admin nem alteração no WordPress.** Confirmação de titularidade e conteúdo pelos profissionais continua obrigatória.

# SOTOMA 2.0 — WEBSITE V5 · CONTRATO DE PUBLICAÇÃO SEGURA
**Data:** 2026-11-12 · **Status:** DRAFT / NÃO PUBLICADO · **Origem:** Mission Lock SOTOMA-FOUNDATION-20261107, exportação WXR 2026-11-10 e Home V5 fornecida.

## 1. Arquitetura principal
Menu global do Elementor Theme Builder — **não embutir no BODY de nenhuma página**.

| Rótulo do menu | Destino WordPress | Estado comprovado |
|---|---|---|
| Início | `/` | Publicada no WXR; body V5 atualizado no Git |
| Quem cuida | `/sobre/` | Publicada no WXR; body novo, mostra Cláudia **e** Yasmin |
|  ↳ Cláudia | `/sobre/claudia/` | **Nova página filha proposta; NÃO existe no WXR** |
|  ↳ Yasmin | `/sobre/yasmin/` | **Nova página filha proposta; NÃO existe no WXR** |
| Como cuidamos | `/como-cuidamos/` | Publicada no WXR; body novo com serviços segregados |
|  ↳ Psicoterapia Positiva | `/psicoterapia-positiva/` | Publicada no WXR; apresenta Cláudia |
|  ↳ Psicanálise | `/psicanalise/` | Publicada no WXR; apresenta Yasmin |
|  ↳ Crianças e adolescentes | `/criancas-e-adolescentes/` | Publicada no WXR; apresenta Yasmin |
|  ↳ Terapia Online | `/terapia-online/` | Publicada no WXR; distingue as duas |
|  ↳ Modalidades | `/atendimentos-em-psicoterapia/` | Publicada no WXR; distingue as duas |
|  ↳ Autoconhecimento | `/autoconhecimento/` | Publicada no WXR; origem de programas Cláudia, oferta a verificar |
| Dúvidas | `/duvidas/` | **Nova página proposta; NÃO existe no WXR** |
| Blog | `/blog/` | Publicada no WXR; biblioteca de 13 posts reais e ambas profissionais |
| Contato | `/contato/` | Publicada no WXR; canais segregados |
| Primeiro contato | `/agendar-atendimento/` | Publicada no WXR; inicia WhatsApp, nunca agenda automaticamente |

**Sem canibalização:** `/sobre/` será a página principal “Quem cuida”; NÃO criar `/quem-cuida/` como URL paralela por padrão. Proposta antiga `/duvidas-sobre-atendimento/` permanece não publicada; NÃO criar também `/duvidas/` e seu clone sem decisão de canonical/redirect.

## 2. Identidade visual — observada, não manual aprovado
- Paleta institucional: `#22524A`; escuro `#183E37`; verde secundário `#8BA146`, suave `#91AFA1`; base `#F7F8F3`.
- Cláudia: `#486D55` em bordas, CTAs e detalhes próprios **dentro da identidade SOTOMA**.
- Yasmin: `#176873` em bordas, CTAs e detalhes próprios **dentro da identidade SOTOMA**.
- Poppins (títulos), Mulish (corpo), conforme V5 enviada, observando a diferença do kit Elementor global.
- CSS isolado por widget; header e footer globais. Nenhum elemento de navegação duplicado no corpo.
- Fotografias prioritárias devem ser **URLs de mídia registradas no WXR**, com metadados auditáveis. A Home preserva o layout V5, mas substituiu os dados de imagem incorporados por referências WXR externas; se uma mídia não carregar, o contêiner mantém o fundo visual, sem inventar outra foto. As imagens do WXR não tiveram resposta verificada no host ao vivo, portanto aprovação visual e de mídia pendente.

## 3. Pessoas, contatos e prova
| Profissional | Origem/prova | WhatsApp | Situação |
|---|---|---|---|
| Cláudia Fernanda Sotoma | Conteúdo da página `/contato/` no WXR + V5 | `+55 67 99184-7679` | Confirmar com a profissional antes da publicação |
| Yasmin Sotoma Muzilli | Código V5 fornecido pelo usuário, `PHONE.yasmin='5567991858129'` | `+55 67 99185-8129` | **Não consta no WXR; validação expressa com Yasmin obrigatória** |

Os links diretos utilizam `https://wa.me/...` com texto **pré-preenchido e editável**. Exemplo estrutural: `Olá, <profissional>! Encontrei a SOTOMA pelo site. Origem: <página>. Seção: <bloco>. Gostaria de informações gerais sobre atendimento, horários e próximos passos.`

**Privacidade de atribuição:** nenhum diagnóstico, nome de paciente, CPF, motivo clínico ou contato de menor é incluído. **Clique ≠ conversa ≠ lead validado ≠ agendamento ≠ atendimento.** Nenhum pixel, GA ou chamada de rastreamento foi criado. Atribuição é **informação oferecida ao destinatário na mensagem**, não painel de analytics comprovado.

## 4. Assets verificáveis no backup WXR
| Papel | Media URL referenciada |
|---|---|
| Foto de Cláudia | `/wp-content/uploads/2026/03/Clau-9.jpeg` |
| Foto de Yasmin | `/wp-content/uploads/2026/03/Ya-11.jpeg` |
| Foto das duas | `/wp-content/uploads/2026/03/Clau-Ya-3.jpg` |
| Cláudia secundária | `/wp-content/uploads/2026/03/Clau-5.jpeg` |
| Yasmin secundária | `/wp-content/uploads/2026/03/Ya-6.jpg` |
| Psicoterapia Positiva | `/wp-content/uploads/2026/03/Psicoterapia-Positiva1.jpg` |
| Programa V.I.A. | `/wp-content/uploads/2026/05/V.I.A.jpg` |
| Programa M.I.R.A. | `/wp-content/uploads/2026/05/M.I.R.A.jpg` |
| Atendimento | `/wp-content/uploads/2026/01/atendimento.jpg` |
| Saúde integrativa | `/wp-content/uploads/2026/03/Saude-PsicoIntegrada1.jpg` |

Prefixo das URLs: `https://sotomasaudepsicointegrada.com.br`.
O WXR contém metadados históricos; a consulta live confirmou arquivos reimportados em /2026/11/ e 404 nas URLs antigas. A existência da URL da mídia não substitui aprovação visual e direito de imagem. **Não é prova de acessibilidade atual, direito de imagem nem integridade do arquivo.** No site em produção, fazer conferência da mídia antes da troca da Home.

## 5. Publicação segura — ordem obrigatória
1. **Backup completo e restauração:** exportar site/banco, Elementor templates/kit, mídia, configurações de menu e formulários. Testar rollback em staging com dados sintéticos.
2. **Conferir escopo e pessoas:** direção aprova perfis, fotos, registros/qualificações, público atendido, telefones, horários, disponibilidade, programas, preços e textos.
3. **Criar páginas filhas em staging:** WordPress > Página filha de `Sobre` com slug `claudia` e `yasmin`, publicar/testar apenas em staging. Criar `duvidas` isoladamente. Evitar conflito com páginas anteriormente propostas.
4. **Instalar BODY individual:** colar arquivo HTML único, incluindo STYLE + markup + SCRIPT, **um widget HTML por página**. Não copiar `<!doctype>`, `<html>`, `<head>`, `<body>`, `<header>`, `<footer>`.
5. **Conferir respostas HTTP reais:** URLs/301/404, mídia, números WhatsApp, links para artigos reais, cache/CDN, permissões e contraste; simular navegador 390/768/1440.
6. **Menu e SEO global:** mapear dropdown “Quem cuida”/“Como cuidamos”, configurar `/duvidas/`, título/H1 único, breadcrumbs, sitemap, canonicals, Robots e dados estruturados somente comprovados. Não criar páginas duplicadas.
7. **Segurança:** não migrar `/cadastro-de-cliente/` e `/novo-lead/` como captura pública; auditar plugins, destino dos formulários, LGPD, controle de acesso, logs e base legal. Não instalar scripts externos não aprovados.
8. **Homologação:** aprovação das profissionais/direção, Red Team de links trocados Cláudia↔Yasmin, roteiro de testes, backup e rollback validados. Somente depois selecionar janela de publicação.
9. **Publicação controlada por página:** páginas filhas/duvidas **primeiro**, depois Sobre/Como Cuidamos/Serviços, Blog/Contato e **Home por último**.
10. **Pós-publicação:** monitorar 404, WhatsApp com destino correto, queda de mídia, indexação, performance e rollback em caso de falha.

## 6. HOLD / FAIL CLOSED
- Falta confirmação do número direto da Yasmin em fonte primária atual.
- Não há homologação online/Elementor dos novos corpos; web pública indisponível na verificação desta missão.
- Não há confirmação de que novas páginas-filhas `/sobre/claudia/`, `/sobre/yasmin/`, `/duvidas/` estejam criadas. **Não divulgar esses links antes disso.**
- A página legada de Iridologia permanece bloqueada por alegações de saúde.
- Dados clínicos, formulários de cadastro, integração CRM/agenda e tratamento de dados de menores ficam fora destes widgets.
- Dados científicos do Blog (13 artigos) são publicação existente no WXR, NÃO validação clínica de cada alegação; categorias registradas = 2; tags oficiais do WXR = 0.
- Eventos: não criar datas, palestras ou programação sem documentação real.
- Nenhuma alteração na main, tema WordPress ao vivo, DNS, servidor, credenciais ou produção.

## 7. Evidência de teste
- Os 15 corpos principais (Home + Blog + 13 internos) foram recuperados da branch e avaliados quanto a **um STYLE e um SCRIPT por arquivo, sem header/footer, compilação sintática do JavaScript**.
- Home: **botões de perfil corrigidos e verificados 4/4**. As 12 imagens passaram a usar referências WXR, sem dados base64 embutidos, reduzindo o arquivo de ~966 KB para ~76 KB.
- Blog: 13 artigos preservados, categorias/filtros preservados, duas profissionais e contato individual acrescentados. Imagem institucional e thumbnails preferem o WXR; payload caiu de ~248 KB para ~54 KB (sem imagens inline).
- CSS e conteúdo não foram testados dentro do Elementor real nesta execução; testes visuais de WordPress/staging seguem pendentes.

## 8. Papéis e aceite
Direção SOTOMA (Cláudia) + direção técnica/produto autorizam conteúdo e implantação segundo `docs/MISSION-LOCK.md`. Yasmin confirma imagem, perfil e WhatsApp diretamente. Trilha de evidência por commit/PR. PR permanece **DRAFT**; isso **não** equivale à publicação.
