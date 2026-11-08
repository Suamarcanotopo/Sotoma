# SOTOMA Editorial — Pesquisas, estudos e controle de afirmações
**Versão:** 1.0 | **Data:** 07/11/2026 | **Status:** Padrão para pesquisa e revisão. Não é parecer clínico.

## Missão
Cada artigo do lote de 60 deve produzir **conhecimento responsável**. A autoridade é demonstrada pelo vínculo exato **afirmação → evidência → população → método → limitação → revisão pela autora**. Citar uma instituição prestigiosa não prova toda frase do artigo.

## Fontes disponíveis e classificação
- [Registro internacional](dados/FONTES-INTERNACIONAIS-VERIFICADAS.json): dezenas de fontes institucionais e acadêmicas *cadastradas*. Revisar integridade de URL, versão e relevância; registro não equivale a leitura integral.
- [10 pesquisas com dados bibliográficos e resumos conferidos no PubMed](dados/ESTUDOS-PUBMED-10.json), incluindo DOI, PMID, ano, tipo, população, síntese cautelosa, limite de generalização e aplicabilidade.
- [Mapa preliminar de fontes para 60 artigos](dados/MATRIZ-FONTES-60.json): associação por relevância temática; NÃO comprova que todas as afirmações foram checadas.
- [OMS — manual de adaptação contextualizada de diretrizes](https://www.who.int/publications/i/item/9789289060028). Diretriz de outra jurisdição não se aplica automaticamente ao Brasil ou ao Japão.
- [Google — conteúdo genuinamente útil](https://developers.google.com/search/docs/fundamentals/creating-helpful-content). Produção em escala sem valor adicional não deve ser publicada.

## Seis classes de evidência (não são notas automáticas de certeza GRADE)
1. **NORMATIVA**: texto de conselho, lei, regulador, política. Demonstra obrigação dentro de sua jurisdição e vigência; não demonstra eficácia.
2. **DIRETRIZ**: diretriz baseada em evidências de instituição qualificada. Conferir como foi produzida, alvo e transferibilidade.
3. **REVISÃO SISTEMÁTICA / META-ANÁLISE**: síntese de estudos. Conferir heterogeneidade, viés, população, comparadores e desfechos; não é prova universal.
4. **ESTUDO PRIMÁRIO**: ensaio, coorte, transversal ou qualitativo. Respeitar diferenças entre associação, temporalidade, causalidade e generalização.
5. **INSTITUCIONAL EDUCATIVA**: OMS, UNICEF, MHLW/NCNP, OPAS, CDC, APA. Boa contextualização, mas não necessariamente estudo ou diretriz clínica.
6. **CONTEÚDO SOTOMA / DEPOIMENTO AUTORAL**: somente fatos verificados de serviço, formação ou proposta; **não transformar promessa institucional em evidência de eficácia**.

## Gate de admissão Researcher of Truth + COLISEUM
Para cada fonte:
- **Identidade/proveniência:** autor(es), instituição, periódico, DOI/PMID quando houver, URL legítima, ano, financiamento, retratação ou correção quando verificável.
- **Relevância:** pergunta clara e compatibilidade de população, intervenção/exposição, comparação e desfecho (PICO quando pertinente).
- **Método:** desenho, amostra, seleção, medidas, limitações, risco de viés, achados negativos e contraditórios.
- **Geografia:** em pesquisa Japão/Ásia/Europa/Américas, explicitar o que se pode ou não transportar a brasileiros atendidos pela SOTOMA.
- **Precisão verbal:** 'associado' não vira 'causa', 'pode' não vira 'garante', uma hipótese não vira diagnóstico ou tratamento validado.
- **Validade profissional:** título e escopo de quem assina o artigo devem estar verificados; normas brasileiras prevalecem para exercício profissional no Brasil, com avaliação de regras estrangeiras quando houver atendimento internacional.

## Status de cada estudo
`CANDIDATO` → `METADADOS_VERIFICADOS` → `RESUMO_ANALISADO` → `TEXTO_INTEGRAL_ANALISADO` → `VIÉS_E_TRANSFERIBILIDADE_REVISADOS` → `APROVADO_PARA_ALEGAÇÃO_ESPECÍFICA`.
Os dez estudos iniciais estão no nível **METADADOS E RESUMO ANALISADOS**, mas **não homologados para qualquer afirmação causal ou efeito de abordagem da SOTOMA**.

## Registro de alegações (Claim Ledger)
Para cada informação material: `CLAIM_ID`, `SOT-ED-ID`, trecho exato, tipo FACT/INFERENCE/HYPOTHESIS/OPINION, `ESTUDO_ID` ou `FONTE_ID`, localização no material, população, método, limitações, revisão, status `APROVADO/BLOQUEADO`. Sem base suficiente, remover ou reescrever de modo não factual.

## Red Team e correção dos 58 textos
A auditoria encontrou repetição extensa em 58/60 manuscritos. Reescrita não é trocar sinônimos; exige argumento original, contraponto, exemplos fictícios, evidência específica e contribuição da autora. **Não publicar até nova auditoria de semelhança e revisão humana.**
- Proibido gerar 60 páginas de aparência científica apenas inserindo as mesmas pesquisas como adorno.
- Se um artigo não comporta evidência específica relevante, pode ser reflexão autoral identificada como tal, sem falsa inferência científica; tema pode ser cancelado, fundido ou reformulado.
- Depois de validar artigo, regenerar legenda, cards e vídeo, pois copy não deve anteceder prova.

## Exemplo de uso correto
**Tema:** redes sociais na adolescência. Estudos de síntese [PMID 39242043](https://pubmed.ncbi.nlm.nih.gov/39242043/) e [PMID 41801211](https://pubmed.ncbi.nlm.nih.gov/41801211/) permitem explicar que pesquisas investigam associações entre formas de uso digital, sono e indicadores de saúde mental, com heterogeneidade. **Não permitem** afirmar 'telas sempre causam ansiedade' ou prescrever uma duração universal de uso.

**Tema:** pertencimento de migrantes. [PMID 36379127](https://pubmed.ncbi.nlm.nih.gov/36379127/) descreve associações em populações estudadas. **Não comprova** eficácia de V.I.A./M.I.R.A.

## Responsabilidades
**Pesquisa:** registrar e delimitar evidências. **Cláudia/Yasmin:** validar pertinência do discurso e qualificação. **Direção:** aprovar comunicação. **COLISEUM:** detectar lacunas e decidir ACCEPT/RETEST/REJECT/ESCALATE com provas. Quando não houver revisão de texto integral ou parecer profissional, estado é `RETEST` / `NÃO PUBLICAR`.

**Documentação operacional:** aba `ESTUDOS_CIENTIFICOS`, `ESTUDOS_X_ARTIGO` e `CLAIMS_EDITORIAL` na planilha oficial. Nenhuma delas deve conter dados de pacientes.

## Atualização 07/11/2026 — Fonte oficial, estudo e claim são objetos diferentes
Consulte [Playbook internacional de 74 fontes](FONTES-PLAYBOOK-EVIDENCIA-INTERNACIONAL-20261107.md), [dados canônicos](dados/FONTES-MESTRE-UNIFICADAS-20261107.json) e [15 estudos com resumos verificados](dados/ESTUDOS-PUBMED-15.json). Status dos registros: 38 páginas oficiais/editoriais conferidas, 16 estudos/resumos PubMed conferidos, 19 pendentes de verificação, 1 em quarentena. **Números são de cadastro e primeiro nível de verificação, não de homologação científica de claims.** A inclusão no PubMed não é endosso do NIH, nem a publicação em periódico revisado por pares elimina risco de viés. A checagem real ocorre por afirmação, desenho, população, contraevidência, jurisdição, direitos de reutilização e aceite profissional.
