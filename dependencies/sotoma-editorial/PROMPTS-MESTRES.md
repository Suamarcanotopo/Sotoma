# Prompts mestres — SOTOMA Editorial v0.1.0
Usar após ler [Mission Lock editorial](MISSION-LOCK-EDITORIAL.md), [Playbook](PLAYBOOK-360.md) e o registro `SOT-ED-NNN` no Google Sheets. São **instruções de produção**, não evidência de resultados ou publicação.

## PROMPT 0 — Pesquisa e Source Lock (obrigatório)
```text
Atue como pesquisador editorial e revisor de evidências em saúde emocional. Pauta: {ID} / {TITULO}. Autora: {AUTORA}; área VERIFICADA: {AREA}; público: {PUBLICO}; etapa: {FUNIL}; consciência: {NIVEL}; tese: {TESE}.
Investigue documentos primários e literatura científica pertinente, priorizando OMS, UNICEF, órgãos oficiais e estudos bem desenhados. Para cada afirmação factual, forneça URL acessível, instituição, título, data, força/limites da evidência e texto de síntese em palavras próprias. Separe consenso, hipótese e opinião/experiência autoral.
Proibido inventar fontes, números ou causalidade; não diagnosticar pessoas e não atribuir qualificações profissionais não verificadas.
Se faltar prova, marque [AFIRMAÇÃO BLOQUEADA] e sugira como reescrever sem inferência clínica. Entregue FONTE_ID, tabela de 5-8 fontes úteis e checklist de revisão.
```

## PROMPT 1 — Artigo editorial pesquisado e SEO
```text
Crie um artigo ORIGINAL para a SOTOMA com base EXCLUSIVAMENTE no Source Lock aprovado e nesta pauta:
{ID}; título {TITULO}; autora {AUTORA}; credenciais verificadas {CREDENCIAIS}; público {PUBLICO}; funil {FUNIL}; consciência {NIVEL}; problema {PROBLEMA}; nuance {TESE}; CTA {CTA}; fontes {FONTES}.
Escreva em português do Brasil, com tom acolhedor, preciso e sem dramatização. O objetivo é tornar uma questão compreensível, não transformar a leitura em diagnóstico.
Entregue: 1) H1 e ângulo exclusivo, 2) título SEO (até ~60 caracteres, sem forçar), 3) metadescrição (~140-155 caracteres, com linguagem natural), 4) slug sugerido, 5) resumo introdutório, 6) artigo completo (aprox. 900-1400 palavras somente se houver profundidade relevante), 7) H2/H3 bem hierarquizados, 8) exemplos explicitamente fictícios quando úteis, 9) perguntas frequentes sem prescrição, 10) fontes ligadas a afirmações, 11) sugestões de links internos existentes e verificáveis, 12) fechamento com CTA compatível com estágio, 13) lista do que precisa ser validado pela autora.
Nunca atribua resultados garantidos, confunda títulos profissionais, dramatize sofrimento ou use dados reais de pacientes. Caso fonte/qualificação insuficiente, interrompa a afirmação e sinalize pendência. Status final: RASCUNHO — PENDENTE DE APROVAÇÃO.
```

## PROMPT 2 — Script de post + legenda curta
```text
A partir do artigo SOT-ED-{ID} aprovado para derivação e do mesmo Source Lock, escreva um post para rede social com um único conceito central, 1 gancho não sensacionalista (até 12 palavras), 1 parágrafo de contextualização, 1 nuance contra simplificações, 1 pergunta para reflexão, 1 CTA de {TOPO|MEIO|FUNDO} e até quatro hashtags adequadas.
Inclua: texto principal, versão curta, legenda acessível de imagem, proibições de claims, sugestão de comentário fixado informativo. Sem transformar comentário em triagem clínica ou convocar relatos pessoais de saúde.
```

## PROMPT 3 — Carrossel de 10 a 20 cards, com PROMPT COMPLETO INDIVIDUAL
```text
Com base no artigo/Source Lock aprovado:
ID {ID}; autora {AUTORA}; título {TITULO}; público {PUBLICO}; consciência {NIVEL}; funil {FUNIL}; tese {TESE}; quantidade {N_CARDS} (10..20, padrão 12); CTA {CTA}.
Produza N_CARDS separados formando uma progressão coerente: abertura → contexto → nuance → múltiplas perspectivas → limites → reflexão → conclusão. Não invente conselhos terapêuticos ou dados científicos.
Para CADA CARD (não agrupe), devolva:
- card_number e função;
- mensagem única e texto literal a ser mostrado (curto, preciso e revisável);
- sugestão de descrição/alt text;
- PROMPT VISUAL 100% INDEPENDENTE em português: 'Produza SOMENTE o card {K} de {N}, PNG 1080×1350 4:5, composição editorial específica, objetos/cenas coerentes, clima e iluminação, paleta provisória marfim/verde-sálvia/grafite/terracota, tipografia legível, área segura 100px, texto exato entre aspas, limites éticos, sem pessoas identificáveis ou casos clínicos reais, sem números ou alegações inventadas, sem logos fictícios, revisão ortográfica, narrativa consistente com o ID'. 
Todos os prompts devem repetir contexto e especificação suficiente para funcionar isoladamente. Não usar 'mesmo estilo do anterior' como instrução única. Texto gerado por IA deve ser refeito por camada no editor se houver erro.
Após o último card, forneça legenda geral, ordem de narrativa e checklist de revisão por autora/direção. Não produzir imagens até autorização explícita.
```

## PROMPT 4 — Roteiros de vídeo por duração
```text
Transforme o mesmo artigo SOT-ED-{ID} aprovado em roteiros originais de 30, 60, 90 e 120 segundos para a autora {AUTORA}, considerando {FUNIL} e {NIVEL}. Use somente alegações do Source Lock aprovado.
PARA CADA DURAÇÃO, entregar: título, objetivo, frase de abertura, texto falado literal em português natural, blocos temporais, plano da câmera, composição e recursos de tela, legendas acessíveis, nota de validade profissional e CTA. Não inventar história de paciente, nem representar menores identificáveis; não dar diagnóstico nem prometer evolução.
Cronometria deve ser validada lendo em voz alta; a duração indicada é meta, nunca tempo aferido automaticamente. Priorize retenção por clareza e sequência, não por manipulação emocional. Publicação depende de aprovação.
```

## PROMPT 5 — ECP + COLISEUM: Red Team antes da publicação
```text
Audite pacote SOT-ED-{ID} sob perspectivas independentes de clínica/ética, segurança e privacidade, pesquisa de evidências, SEO e intenção, copywriting responsável, acessibilidade e design, narrativa, autoria/regulamentação, produção de vídeo e medição.
Liste primeiro as 15 falhas concretas, severidade P0/P1/P2, prova/campo afetado e correção. Depois aplique correções nos derivados, sem mudar citações sem prova. 
Gates P0: nome/título sem comprovação, dado de paciente ou menor, promessas clínicas, estudo fabricado, indução/diagnóstico, CTA coercitivo, falta de aprovação.
Se P0 falhar, deixe publicação BLOQUEADA. Diferencie planejamento, revisão por IA, aprovação da profissional e URL realmente publicada.
```

## Modo extensível e índice
- **20 pautas, 240 prompts prontos e roteiros no Sheets:** https://docs.google.com/spreadsheets/d/1AK9WaMtbCyis3gVOdxZm4RHbxCJplhZDgvNNbNidzBA/edit
- Novo profissional: registrar em `AUTORES` e decidir escopo autoral, sem criar marketplace.
- Qualquer nova entrega deve manter a mesma pauta-ID nos artigos, cards, scripts, aprovação e URL de publicação.