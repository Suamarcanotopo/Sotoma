# ECP + COLISEUM — Quality Gate editorial SOTOMA
**Revisão crítica documental em papéis simulados.** Não substitui auditoria formal, conselho profissional, análise jurídica ou revisão da própria autora.

## Especialistas/ângulos e perguntas
1. **ECP / Mission Lock:** percentual permanece 50/40/10? Conteúdo saiu do escopo do autor? O status editorial não foi confundido com publicação?
2. **Pesquisa científica:** fonte primária sustenta cada afirmação? Qualidade de evidência condiz? Há estudos fabricados, causalidade indevida, tratamentos não fundamentados?
3. **Clínica e conselho:** o texto extrapola escopo da autora ou usa título profissional não comprovado? Induz diagnóstico ou expectativa de resultado?
4. **Proteção de dados:** há relato ou foto de paciente, comentário convidando informações clínicas, dado de criança ou linkage com CRM?
5. **Narrativa:** os cards têm progressão e nuance, sem apelo sensacionalista? O vídeo tem mensagem coesa e fala natural?
6. **SEO/Autoridade:** corresponde à intenção real da busca? O artigo tem conteúdo original, boa arquitetura e bibliografia pertinente, sem keyword stuffing?
7. **Design e acessibilidade:** 4:5, margens seguras, texto legível, contraste, card a card, alt text, legendas de vídeo?
8. **Funil e CTA:** N0/N1 não é pressionado a agendar? N2/N3 possui critérios? N4 pode esclarecer funcionamento sem manipulação?
9. **Infra/QA:** URL e IDs reais, deduplicação, estado fail closed, versões rastreáveis, no auto-publicação sem aprovação?
10. **Direção:** está alinhado aos valores da SOTOMA e linguagem de Cláudia ou Yasmin?

## TOP 20 bloqueios/risco a testar por pauta
| ID | Falha possível | Severidade | Correção |
| --- | --- | --- | --- |
| R01 | Nome e qualificação falsa/pendente | P0 | verificar credenciais antes de divulgar |
| R02 | Diagnóstico por frase em post | P0 | remover classificação e encaminhar para informação genérica |
| R03 | Promessa de cura ou prazo de resultado | P0 | remover promessa; contextualizar limites |
| R04 | Fonte inexistente ou URL inventada | P0 | bloquear claim, pesquisar e corrigir |
| R05 | Menor reconhecível ou dado de família real | P0 | substituir por imagem conceitual |
| R06 | Relato de paciente ou prontuário em planilha | P0 | não incluir; incidente se já houve vazamento |
| R07 | CTA invasivo com inferência clínica | P0 | CTA educativo/logístico |
| R08 | Artigo apresenta método como universal | P1 | explicitar público, limites e nuance |
| R09 | Contraste/legibilidade ruim | P1 | corrigir layout e texto final |
| R10 | Card com texto gerado errado | P1 | refazer camada tipográfica em editor |
| R11 | Atribuição de benefícios sem evidência | P0 | retirar ou citar estudo adequado |
| R12 | Títulos sensacionalistas | P1 | reformular gancho sem medo |
| R13 | Contar versão de 60s como cronometrada | P2 | testar leitura real e adaptar |
| R14 | Criar post com fonte desatualizada | P1 | revisar edição/data de referência |
| R15 | Nível de consciência incompatível | P1 | reclassificar, ajustar CTA |
| R16 | Mais que 10% de fundo por lote | P1 | reequilibrar calendário |
| R17 | Reaproveitar imagem repetida em todos cards | P2 | diferenciar composição por card |
| R18 | Aprovar por IA sem autora | P0 | exigir aprovação da profissional |
| R19 | Dizer publicado sem URL pública | P0 | estado NÃO PUBLICADO |
| R20 | Compartilhar planilha com público | P0 | restringir permissões do Drive |

## Gate de publicação
`PASS` exige: fontes validadas; qualificações válidas; nenhum P0 aberto; identidade visual validada; artigo, post, carrossel e vídeo revisados; CTA adequado; autorização da autora e Cláudia. Reprovação -> `BLOQUEADO` com razões e ações corretivas.
P0 é barreira, não apenas risco aceito. Dashboard de planilha pode continuar mostrando rascunhos, mas site e redes permanecem sem publicação.
