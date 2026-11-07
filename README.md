# SOTOMA 2.0 — Ecossistema privado de gestão e cuidado
Projeto da SOTOMA Saúde Psicointegrada. Estado: **planejamento e fundação documental**. Repositório **privado**.
## NÃO É MARKETPLACE
É um website institucional com profissionais credenciados internamente, um painel de gestão clínica/administrativa e uma área privada do paciente. Nenhum cadastro público de prestadores ou ranking comercial.
## Leitura obrigatória
1. [Mission Lock](docs/MISSION-LOCK.md) — contrato canônico, limites e gates.
2. [Handoff](docs/HANDOFF.md) — onde estamos e como continuar.
3. [Plano para a cliente](docs/PLANO-CLIENTE.md) — visão de negócio e cronograma por marcos.
4. [Arquitetura](docs/ARQUITETURA.md) — os 3 ambientes, modularização e limites do plugin.
5. [Métricas](docs/METRICAS-ATRIBUICAO.md) — funil com critérios verificáveis.
6. [Perfis e LGPD](docs/RBAC-LGPD.md) — permissões e segurança.
7. [Editorial e Drive](docs/EDITORIAL-DRIVE.md) — organização de pautas e scripts.
8. [Backlog e gates](docs/BACKLOG-E-GATES.md) — fases e critérios de aceite.
9. [Coliseum/Red Team](docs/COLISEUM-REDTEAM.md) — ameaças e correções.
10. [Fontes oficiais](docs/FONTES.md) — investigação e normas.

## ÍNDICE CANÔNICO — SOTOMA EDITORIAL 50/40/10
**Dependência:** [SOTOMA Editorial 50/40/10](dependencies/sotoma-editorial/README.md). Autoras atuais: Cláudia Fernanda Sotoma e Yasmin Sotoma Muzilli; expansão para outros profissionais credenciados sem marketplace. Diretriz editorial por lote: **50% topo (10), 40% meio (8), 10% fundo (2)**; níveis N0–N4. Rascunhos necessitam validação de qualificações, conteúdo e fontes.

**Google Planilhas, URL exata:** [SOTOMA | Editorial 50-40-10 | Cláudia e Yasmin](https://docs.google.com/spreadsheets/d/1skkm1DmEkTiRseVmgku2EVA7WSZa8nYS4iaWm5ZwASU/edit) — planilha na pasta [ChatGPT](https://drive.google.com/drive/folders/1YKZoWpUbAvnmN7Wg4TBiuQVd8ykvh0yN).

| Entrega | GitHub (documentação executável) | Google Sheets (dados operacionais) |
| --- | --- | --- |
| Missão, escopo, ética e 50/40/10 | [Mission Lock editorial](dependencies/sotoma-editorial/MISSION-LOCK-EDITORIAL.md) | [PAINEL](https://docs.google.com/spreadsheets/d/1skkm1DmEkTiRseVmgku2EVA7WSZa8nYS4iaWm5ZwASU/edit#gid=2008109360) |
| Catálogo de 20 pautas, autora e consciência | [CATALOGO-20.md](dependencies/sotoma-editorial/CATALOGO-20.md) | [PAUTAS_20](https://docs.google.com/spreadsheets/d/1skkm1DmEkTiRseVmgku2EVA7WSZa8nYS4iaWm5ZwASU/edit#gid=1761944534) |
| Artigos, SEO e fontes | [PLAYBOOK-360.md](dependencies/sotoma-editorial/PLAYBOOK-360.md) | [ARTIGOS_BRIEF](https://docs.google.com/spreadsheets/d/1skkm1DmEkTiRseVmgku2EVA7WSZa8nYS4iaWm5ZwASU/edit#gid=717275166) / [ARTIGOS_PILOTO](https://docs.google.com/spreadsheets/d/1skkm1DmEkTiRseVmgku2EVA7WSZa8nYS4iaWm5ZwASU/edit#gid=298731141) |
| Scripts de post e legendas | [PROMPTS-MESTRES.md](dependencies/sotoma-editorial/PROMPTS-MESTRES.md) | [POSTS_20](https://docs.google.com/spreadsheets/d/1skkm1DmEkTiRseVmgku2EVA7WSZa8nYS4iaWm5ZwASU/edit#gid=1151642656) |
| Carrosséis com **12 prompts completos por pauta** | [PROMPTS-MESTRES.md](dependencies/sotoma-editorial/PROMPTS-MESTRES.md) | [CARDS_240](https://docs.google.com/spreadsheets/d/1skkm1DmEkTiRseVmgku2EVA7WSZa8nYS4iaWm5ZwASU/edit#gid=1916538762) |
| Scripts de vídeo 30, 60, 90 e 120 s | [PLAYBOOK-360.md](dependencies/sotoma-editorial/PLAYBOOK-360.md) | [VIDEOS_80](https://docs.google.com/spreadsheets/d/1skkm1DmEkTiRseVmgku2EVA7WSZa8nYS4iaWm5ZwASU/edit#gid=1555500162) |
| Contrato, status e integração | [CONTRATO-SHEETS.md](dependencies/sotoma-editorial/CONTRATO-SHEETS.md) | [APROVACOES](https://docs.google.com/spreadsheets/d/1skkm1DmEkTiRseVmgku2EVA7WSZa8nYS4iaWm5ZwASU/edit#gid=1457553522) / [PUBLICACOES](https://docs.google.com/spreadsheets/d/1skkm1DmEkTiRseVmgku2EVA7WSZa8nYS4iaWm5ZwASU/edit#gid=358903051) |
| Roteiros-base e quadros de fala | [PROMPTS-MESTRES.md](dependencies/sotoma-editorial/PROMPTS-MESTRES.md) | [SCRIPTS_VIDEO](https://docs.google.com/spreadsheets/d/1skkm1DmEkTiRseVmgku2EVA7WSZa8nYS4iaWm5ZwASU/edit#gid=119742079) |
| Credenciamento editorial das autoras | [Mission Lock editorial](dependencies/sotoma-editorial/MISSION-LOCK-EDITORIAL.md) | [AUTORES](https://docs.google.com/spreadsheets/d/1skkm1DmEkTiRseVmgku2EVA7WSZa8nYS4iaWm5ZwASU/edit#gid=313952020) |
| Registro de fontes e referências | [FONTES.md](docs/FONTES.md) | [FONTES](https://docs.google.com/spreadsheets/d/1skkm1DmEkTiRseVmgku2EVA7WSZa8nYS4iaWm5ZwASU/edit#gid=498273490) |
| QA adversarial antes de publicar | [COLISEUM-EDITORIAL-QA.md](dependencies/sotoma-editorial/COLISEUM-EDITORIAL-QA.md) | [GUIA](https://docs.google.com/spreadsheets/d/1skkm1DmEkTiRseVmgku2EVA7WSZa8nYS4iaWm5ZwASU/edit#gid=2053797448) |


**Espelhos de dados editoriais no GitHub** (snapshot de 07/11/2026, sem sincronismo automático):
[20 pautas](dependencies/sotoma-editorial/dados/PAUTAS-20.json) ·
[20 briefings](dependencies/sotoma-editorial/dados/ARTIGOS-BRIEF-20.json) ·
[20 posts](dependencies/sotoma-editorial/dados/POSTS-20.json) ·
[80 roteiros de vídeo](dependencies/sotoma-editorial/dados/VIDEOS-80.ndjson) ·
[240 prompts individuais de cards](dependencies/sotoma-editorial/dados/CARDS-240.ndjson) ·
[artigo Cláudia 001](dependencies/sotoma-editorial/pilotos/SOT-ED-001-ARTIGO-RASCUNHO.md) ·
[artigo Yasmin 011](dependencies/sotoma-editorial/pilotos/SOT-ED-011-ARTIGO-RASCUNHO.md).

**Importante:** planilha e rascunhos existem; **existem dois artigos-piloto completos em rascunho, mas não existem ainda 20 artigos finais revisados, imagens/vídeos gerados, publicações verificadas ou automação de sincronização**. Nunca adicionar dados de pacientes ao editorial. A primeira publicação depende da autorização individual de cada autora e da direção.

## Ambientes
- **Website institucional existente:** https://sotomasaudepsicointegrada.com.br/
- **Portal paciente proposto:** https://cliente.sotomasaudepsicointegrada.com.br/
- **Painel profissional e gestão proposto:** https://painel.sotomasaudepsicointegrada.com.br/
## Status operacional
- Website existente: não modificado neste bootstrap.
- Plugin/painéis: **NÃO IMPLEMENTADOS**.
- Google Sheets editorial nativo: **CRIADO E CONFERIDO** (13 abas; 20 pautas, 20 legendas, 20 briefings, 2 artigos-piloto completos em rascunho, 80 roteiros de vídeo e 240 prompts individuais de cards). **Integração automática GitHub/WordPress NÃO IMPLEMENTADA**.
- Dados de pacientes: **NÃO presentes** e nunca permitidos no GitHub.
## Normas de trabalho
Não inventar disponibilidade, aprovações, publicação, coleta de eventos, pacientes nem indicadores reais. Toda feature deve produzir teste automatizado ou evidência verificável. Production freeze até gates de segurança e aceite formal. Mudanças em branch, revisão e PR sempre que afetarem runtime.