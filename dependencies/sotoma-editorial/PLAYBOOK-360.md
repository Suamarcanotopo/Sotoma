# Playbook editorial 360° — artigo → post → carrossel → vídeo
**Contrato:** [MISSION-LOCK-EDITORIAL.md](MISSION-LOCK-EDITORIAL.md). **Planilha operacional:** https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit

## 1. Público, autora e escopo
- **Cláudia Fernanda Sotoma:** adultos, autocobrança, transições, adaptação internacional, V.I.A., M.I.R.A. Não extrapolar qualificações declaradas; confirmar descrição e abordagem para cada publicação.
- **Yasmin Sotoma Muzilli:** infância, adolescência, escola e família; público de comunicação geralmente são adultos responsáveis, sem coleta de dados de menores ou publicidade dirigida à vulnerabilidade.
- **Futuros autores:** registrar identificador `AUT-NNN`, qualificação verificável, revisão e áreas, em AUTORES antes de designar pauta. Proporção editorial calculada no conjunto, não fixar porcentagem de cada pessoa quando a equipe crescer.

## 2. Roteiro por nível de consciência
| Nível | A pessoa pensa | Abordagem | Erro a evitar |
|---|---|---|---|
| N0 | "Isso faz parte da rotina; nunca pensei sobre o assunto" | reflexão e contexto reconhecíveis | sugerir que todos têm transtorno |
| N1 | "Essa situação me preocupa; não sei como compreendê-la" | nuances, acolhimento e perguntas | diagnosticar por carrossel |
| N2 | "Existem opções de apoio? Como funcionam?" | informação sobre possibilidades e limites | tratar abordagens como milagres |
| N3 | "Qual serviço/profissional pode ser adequado?" | clareza de processo, qualificação e sigilo | comparação desleal entre profissionais |
| N4 | "Como faço contato e organizo meu atendimento?" | FAQ prático de agenda, canal, documentos | pressão, escassez artificial ou promessa |

N0 e N1 no TOPO (50%); N2 e N3 no MEIO (40%); N4 no FUNDO (10%). Distribuição inicial: 20 pautas, **10/8/2**, cinco/quatro/uma de cada autora.

## 3. Pipeline end-to-end
`PAUTA` → `SOURCE LOCK` → `ARTIGO_RASCUNHO` → `SCRIPT_POST` → `CARROSSEL_10_A_20` → `SCRIPT_VIDEO` → `REVISÃO_AUTORA` → `REVISÃO_ÉTICA` → `APROVAÇÃO_DIREÇÃO` → `PUBLICAÇÃO_VERIFICADA` → `MEDIÇÃO_AGREGADA`.
Sem URL válida e leitura de volta, **publicação = não verificada**.

### SOURCE LOCK — pesquisa antes de escrever
Registrar fonte, autoridade, URL, data, afirmação que sustenta, qualificação dos achados, limitações, uso permitido, responsável pela checagem. Preferir OMS, UNICEF, órgãos profissionais, trabalhos científicos com metodologia. *Não confundir publicação de diretriz com evidência de eficácia de abordagem específica.* Em alegações técnicas, pesquisar e citar; se não confirmar, não alegar.
### ARTIGO
- H1 orientado à dúvida real, sem diagnóstico; resumo em 40–60 palavras; corpo recomendado 900–1.400 palavras **somente quando a pauta justificar**.
- Introdução com pergunta/contexto, H2 com nuance, exemplos claramente fictícios, limites do que sabe, caminhos informativos e perguntas responsáveis.
- SEO: intenção de busca, termo principal sem stuffing, título, metadescrição, slug, links internos relevantes, legibilidade, revisão de fontes e data de atualização.
- Chamada conforme estágio: educar / apresentar informação e caminhos / esclarecer agendamento. Evitar "Você sofre de..." ou inferência de condição de saúde.
- Nome/título profissional somente após verificação e aprovação. Atos privativos demandam revisão por pessoa habilitada.
### POST / LEGENDA
Entregar 1 gancho editorial (sem sensacionalismo), 1 insight com limite, 1 pergunta aberta, 1 CTA coerente, 2–4 hashtags opcionais; tamanho adaptável ao canal; descrição acessível de visual. Não reproduzir prontuário, caso real ou depoimentos.
### CARROSSEL — 10 a 20
Escolher quantidade por complexidade **antes** de produzir (padrão piloto: 12). **Todos** devem conter:
`card_index`, `função_narrativa`, `texto_capa_exato`, `legenda_curta`, `prompt_imagem_individual_completo`, `alt_text_depois_da_imagem`, `status_aprovacao`.
Arco de 12:
1. Capa/pergunta legítima
2. situação observável
3. contexto
4. nuance antirótulo
5. variedade de experiências
6. importância da escuta
7. ideia principal
8. possibilidades
9. limites e erros comuns
10. primeiro passo reflexivo
11. pergunta para o leitor
12. conclusão e CTA não coercitivo

Quando forem 10 cards, combinar 5+6 e 10+11; quando 14–20, distribuir mais exemplos fictícios, alternativas, fontes, FAQ e uma síntese. Nunca aumentar com repetição vazia.
**Identidade provisória** para prompts: 4:5 (1080×1350), marfim, verde-sálvia, grafite, terracota, imagens conceituais, contraste acessível e margens seguras; só virar identidade oficial após direção aprovar. Cada card deve ter PROMPT AUTOSSUFICIENTE, não "idem anterior". Revisar textos no editor de design — imagens com texto gerado podem conter erro tipográfico.
### VÍDEO
Produzir uma versão-base de 60s e roteiros opcionais 30/90/120s. Para cada: gancho, falas literais, decupagem com intervalos, enquadramento, legenda acessível, fontes pertinentes e CTA. Ler em voz alta para confirmar duração; os rascunhos na planilha são **alvos**, não gravações cronometradas.
Não simular sessão clínica, não filmar pacientes, não oferecer diagnóstico remoto via comentário.
### FINALIZAÇÃO
Aprovação autora + ética + direção; conteúdo publicado somente após URL pública testada. No Google Sheets preencher `PUBLICACOES` com post_id e data de publicação reais. Se houver erro, marcar BLOQUEADO, registrar razão, não avançar estado automaticamente.

## 4. KPIs editoriais permitidos
Impressões agregadas, leituras, tráfego para artigos por canal, engajamento não sensível, cliques em CTAs agregados e taxa de conclusão do conteúdo (quando medida respeitando privacidade). Não transportar dados de pacientes, público-alvo clínico inferido, motivo do contato nem eventos sensíveis para a planilha editorial. O painel de agenda/CRM é outro produto com controles próprios.

## 5. Definition of Done (DoD)
- [ ] assunto e nível de consciência corretos; 50/40/10 do lote válido
- [ ] autora e habilitação verificadas quando aplicável
- [ ] fonte primária / científica real para qualquer alegação técnica
- [ ] artigo completo revisado, sem conteúdo inventado
- [ ] legenda e carrossel com todos os cards e prompts autossuficientes
- [ ] script(s) de vídeo com fala, tempo-alvo e decupagem
- [ ] compliance profissional, direitos de imagem e acessibilidade
- [ ] CTA adequado ao nível
- [ ] diretora aprova publicação
- [ ] URL publicada verificável e relatório editorial agregado.
## Adendo obrigatório IET + Brand + Evidência (07/11/2026)
- **Informação/TOPO (50%)**, **Educação/MEIO (40%)**, **Transformação/FUNDO (10%)**, no sentido de decisão informada sem promessa de resultado de saúde. Ler [FUNIL-INFORMACAO-EDUCACAO-TRANSFORMACAO.md](FUNIL-INFORMACAO-EDUCACAO-TRANSFORMACAO.md).
- Materiais gráficos devem obedecer [IDENTIDADE-VISUAL-MARCA.md](IDENTIDADE-VISUAL-MARCA.md). Fonte global Poppins; cores observadas #22524A, #2E2E2E, #54595F, #8BA146, #91AFA1 e branco. **Nunca** importar paleta marfim/terracota de outro projeto nem pedir à IA que redesenhe logomarca.
- **Pesquisar antes de afirmar**: [PESQUISAS-ESTUDOS-GOVERNANCA.md](PESQUISAS-ESTUDOS-GOVERNANCA.md) e [ESTUDOS-PUBMED-10.json](dados/ESTUDOS-PUBMED-10.json). Estudo real não é autorização para conclusão mais forte que seus resultados.
- **Estado de arte**: 720 prompts específicos receberam tokens de marca no texto, mas as imagens ainda não foram geradas ou homologadas. 60 artigos seguem bloqueados para publicação enquanto houver QA editorial pendente.
