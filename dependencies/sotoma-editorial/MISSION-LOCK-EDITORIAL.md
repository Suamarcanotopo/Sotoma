# Mission Lock editorial — SOT-EDITORIAL-504010-20261107
Versão 1.0 • 2026-11-07 • Aditivo ao [Mission Lock geral](../../docs/MISSION-LOCK.md).

## Invariantes
1. **Não é marketplace**; conteúdo institucional com autoras reais credenciadas ou aprovadas pela SOTOMA.
2. Começar por Cláudia Fernanda Sotoma e Yasmin Sotoma Muzilli, com escopos publicados em https://sotomasaudepsicointegrada.com.br/sobre/. Nunca atribuir diploma/CRP/CRM não verificado; confirmar com cada autora antes da publicação.
3. **50% TOPO / 40% MEIO / 10% FUNDO** de forma verificável a cada lote de 10 ou 20 pautas e por janela móvel. O lote-piloto tem 20 IDs, 10/8/2; 10 por autora, 5/4/1. Se o lote for de 10, 5/4/1.
4. **Níveis de consciência**:
   - N0 não consciente: situações cotidianas ainda não reconhecidas como tema de reflexão; topo.
   - N1 consciente do problema: reconhece um incômodo, sem autodiagnóstico; topo.
   - N2 consciente de possibilidades: quer compreender formas de cuidado e limites; meio.
   - N3 consciente do serviço: entende abordagens e procura critérios de escolha; meio.
   - N4 pronto para contato: quer esclarecer agenda, formato e funcionamento; fundo.
5. **Mesmo núcleo temático, diferentes formatos:** artigo pesquisado → legenda de post → carrossel 10–20 com prompt por card → roteiro(s) de vídeo com fala e cena → aprovação → publicação verificada.
6. **Fontes:** claims de saúde exigem fontes confiáveis e pertinentes, data/URL, limite metodológico e revisão humana. Nada de números inventados, promessa de cura, diagnóstico em massa, testemunho clínico ou caso real identificável.
7. **Autoria:** revisar por autora e, quando aplicável, conselho profissional; comunicação ao público sem induzir vulneráveis e sem exploração do sofrimento; nos conteúdos infantojuvenis, não exibir menores identificáveis.
8. **Google Sheets:** planilha nativa vinculada é operação editorial, não sistema de prontuário. Nenhum paciente, receita, nome, telefone ou lead entra ali.
9. **Métricas:** apenas performance editorial agregada; eventos marketing clínicos ou pessoais jamais importados para a planilha.
10. **Fail closed:** `PUBLICADO` só após aprovação humana e URL real testada; ausência de fonte, título profissional ou permissão bloqueia. Nunca afirmar sincronização automática não comprovada.

## Regras de derivação por etapa
| Funil | Intenção | Nível | Tipo de artigo | CTA |
|---|---|---|---|---|
| TOPO (50%) | reconhecer experiências e conceitos | N0/N1 | explicador, reflexão com nuance | leitura, salvar, explorar |
| MEIO (40%) | compreender abordagens, opções e limites | N2/N3 | comparativo responsável e FAQ | conhecer páginas, tirar dúvidas |
| FUNDO (10%) | entender logística para possível contato | N4 | como funciona atendimento/agendamento | perguntar sobre agenda e formato |

## Saída e qualidade
- Artigo: título H1, resumo, introdução, H2/H3, exemplos hipotéticos identificados, FAQ quando relevante, fontes reais, SEO e atualização.
- Script de post: gancho editorial, uma ideia, nuance, pergunta, CTA apropriado, sem dados privados.
- Carrossel: mínimo 10, máximo 20, 12 por padrão; para **cada card**: número, papel na narrativa, copy exata, prompt visual completo 4:5, alt text após produção, revisão ortográfica.
- Vídeo: scripts base 30/60/90/120s ajustados por leitura humana, enquadramento, cena, fala, legenda e CTA; sem alegar que duração foi cronometrada.
- Sempre: ID `SOT-ED-NNN`, autoria, etapa de funil e consciência, status, fontes, autorização, URL pública após publicação.

## Critérios de aceite editorial
PAUTA_REGISTRADA ≠ ARTIGO_PRONTO ≠ APROVADO ≠ PUBLICADO. Fontes conferidas, autora e credenciais validadas, revisão técnica e ética, direitos de imagem, acessibilidade, ortografia, decisão de CTA e URL conferida antes da promoção. `PRODUÇÃO` não é sinônimo de publicação.
## Reversão
Atualizar a planilha com registro de correção e GitHub com novo commit; nunca sobrescrever silenciosamente materiais aprovados; corrigenda transparente no site.

## Adendo obrigatório — Evidência científica, IET e Brand (07/11/2026)
- Funil editorial e CTA: **INFORMAÇÃO 50% (TOPO)** / **EDUCAÇÃO 40% (MEIO)** / **TRANSFORMAÇÃO 10% (FUNDO)**. O último significa decisão de consultar atendimento ou obter informações, não promessa clínica.
- Fontes: cada afirmação material precisa de prova rastreável, hierarquia adequada, população, método e limites. Pesquisas estão em [ESTUDOS-PUBMED-10.json](dados/ESTUDOS-PUBMED-10.json) e na aba `ESTUDOS_CIENTIFICOS`; vínculos temáticos **não** provam efeito terapêutico.
- Visual: seguir [IDENTIDADE-VISUAL-MARCA.md](IDENTIDADE-VISUAL-MARCA.md), tokens observados no Elementor kit 411 e logomarca oficial; divergência com paleta anterior resolvida nas especificações ativas. Necessária validação formal da Cláudia.
- **P0:** fontes não verificadas usadas como prova, vínculo estrangeiro/regulatório extrapolado, estudo de método diferente apresentado como eficácia, CTA de cura, material visual fora da marca, autoras/credenciais não comprovadas e massa de textos repetitivos.
- Nenhum estado PUBLICADO sem verificações independentes, autoras, direção e URL pública real.
