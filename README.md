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
## Ambientes
- **Website institucional existente:** https://sotomasaudepsicointegrada.com.br/
- **Portal paciente proposto:** https://cliente.sotomasaudepsicointegrada.com.br/
- **Painel profissional e gestão proposto:** https://painel.sotomasaudepsicointegrada.com.br/
## Status operacional
- Website existente: não modificado neste bootstrap.
- Plugin/painéis: **NÃO IMPLEMENTADOS**.
- Integração Google Drive: **PLANEJADA**, não conectada por este repositório.
- Dados de pacientes: **NÃO presentes** e nunca permitidos no GitHub.
## Normas de trabalho
Não inventar disponibilidade, aprovações, publicação, coleta de eventos, pacientes nem indicadores reais. Toda feature deve produzir teste automatizado ou evidência verificável. Production freeze até gates de segurança e aceite formal. Mudanças em branch, revisão e PR sempre que afetarem runtime.