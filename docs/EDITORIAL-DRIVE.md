# SOTOMA Editorial — planejamento + Google Sheets nativo
Estado em 2026-11-07: **planilha Google Sheets criada, dados editoriais iniciais preenchidos e lidos de volta; sem automação/WordPress/publicação**.
## Documento canônico de funcionamento
Ler a dependência [SOTOMA Editorial 50/40/10](../dependencies/sotoma-editorial/README.md), seu [Mission Lock](../dependencies/sotoma-editorial/MISSION-LOCK-EDITORIAL.md), [Playbook](../dependencies/sotoma-editorial/PLAYBOOK-360.md), [Prompt mestres](../dependencies/sotoma-editorial/PROMPTS-MESTRES.md) e [Contrato Sheets](../dependencies/sotoma-editorial/CONTRATO-SHEETS.md).
## Planilha real
- [SOTOMA | Editorial 50-40-10 | Cláudia e Yasmin](https://docs.google.com/spreadsheets/d/1skkm1DmEkTiRseVmgku2EVA7WSZa8nYS4iaWm5ZwASU/edit)
- Google Sheet ID: `1skkm1DmEkTiRseVmgku2EVA7WSZa8nYS4iaWm5ZwASU`.
- Abas existentes: PAINEL; PAUTAS_20; ARTIGOS_BRIEF; ARTIGOS_PILOTO; SCRIPTS_VIDEO; CARDS_240; AUTORES; FONTES; APROVACOES; PUBLICACOES; GUIA; POSTS_20; VIDEOS_80.
- Distribuição **50% TOPO, 40% MEIO, 10% FUNDO**: 20 pautas (10/8/2), com 10 pautas para Cláudia e 10 para Yasmin; N0–N4.
- Dados disponíveis: 20 briefs de artigos (não artigos completos) + 2 artigos-piloto completos em rascunho, 20 legendas, 20 scripts-base, 80 versões de vídeo e 240 prompts específicos de cards (12 por pauta). Conteúdos **NÃO APROVADOS / NÃO PUBLICADOS**.
## Expansão do corpo profissional
A SOTOMA credencia profissionais internamente. Uma pessoa autora só é adicionada ao quadro editorial após confirmação de qualificação, escopo, permissão e revisão. Não existe inscrição pública, ranking, reviews ou comissões por encaminhamento.
## Organização sugerida no Drive, ainda não criada
```text
SOTOMA - EDITORIAL/
  00-GOVERNANCA/
  01-PAUTAS/
  02-FONTES/
  03-ARTIGOS/
  04-REDES-SOCIAIS/
  05-SCRIPTS/
  06-REVISAO/
  07-PUBLICADOS/
  08-RELATORIOS/
```
Esta árvore de pastas é **proposta futura**, não evidência de pastas criadas. A planilha real está na pasta ChatGPT do Drive.
## Regras de status
IDEIA → PESQUISA COM FONTES → RASCUNHO COMPLETO → REVISÃO TÉCNICA/ÉTICA → APROVAÇÃO AUTORA → APROVAÇÃO DIREÇÃO → PUBLICADO COM URL VERIFICADA → MEDIDO. Nunca transformar um briefing em 'artigo pronto' ou um roteiro em 'vídeo publicado'.
## Proteção de dados
Drive e GitHub editoriais NÃO recebem dados de pacientes, fotos clínicas, medicamentos, receitas, números de contato ou informação de identificação clínica. O painel administrativo de aquisição e prontuário são produtos separados.
## Integração técnica futura, não implementada
O Google Sheets opera como registro das pautas. IDs SOT-ED-001..020 serão chaves canônicas; conectores WordPress, Google Docs e automação com leitura de volta, versionamento e permissões restritas serão implementados apenas mediante PR, testes e aprovação. Falha de uma integração não deve alterar texto editorial homologado, prontuário ou site em produção.
