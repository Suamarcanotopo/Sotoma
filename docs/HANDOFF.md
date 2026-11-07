# HANDOFF — SOTOMA-FOUNDATION-20261107
Data: 2026-11-07 | Estado: FUNDACAO DOCUMENTAL | Leia primeiro [MISSION-LOCK](MISSION-LOCK.md).
## Decisão mais recente do responsável
SOTOMA NÃO é marketplace. Profissionais são convidados/credenciados internamente. A necessidade principal é (a) gestão privada de leads/pacientes e atribuição de origem, (b) ocupação e agendas dos profissionais, (c) portais seguros de profissional e paciente, (d) plataforma editorial sincronizável com Google Drive. A experiência pública permanece institucional.
## Domínios
- Público existente: https://sotomasaudepsicointegrada.com.br/
- Propostos, não implementados: https://cliente.sotomasaudepsicointegrada.com.br/ e https://painel.sotomasaudepsicointegrada.com.br/
## Papéis
- Direção/gestão: Cláudia e Márcio; dados administrativos e métricas agregadas, nunca acesso clínico irrestrito.
- Secretaria/captação: leads, agenda, contatos com permissões mínimas.
- Profissional clínico: seus pacientes, sua agenda, prontuário/documentos sob a responsabilidade apropriada.
- Paciente: somente suas informações e arquivos disponibilizados, salvo modelo legal de responsável autorizado.
- Revisora/editoria: somente conteúdo público.
## Estado factual
- Repositório Suamarcanotopo/Sotoma identificado como privado e inicialmente vazio; inicialização documental iniciada em 07/11/2026.
- Website público existente examinado; nenhuma alteração nele realizada.
- Não há comprovação de portais operacionais, plugin instalado, CRM, eventos de conversão, integração WhatsApp, Drive sincronizado ou documentos clínicos.
- As soluções de hospedagem, autenticação, assinatura e prescrição ainda precisam de prova e decisão arquitetural.
## Regras de retomada
1. Ler Mission Lock antes de qualquer tarefa.
2. Examinar READMEs e contrato de arquitetura, eventos, acessos, riscos, editorial e backlog.
3. Separar ESTUDADO, PROPOSTO, IMPLEMENTADO, TESTADO, HOMOLOGADO e PUBLICADO.
4. Não tocar produção por inferência. Não usar dados de pacientes em GitHub, planilhas ou sistemas de teste.
5. Abrir Issue/PR para cada mudança operacional com aceite e rollback documentados; não instalar em produção sem revisão humana.
6. Preservar main estável; validar staging com dados inteiramente sintéticos.
## Sequência de trabalho
Fase 0: documentação canônica e aprovação do escopo.
Fase 1: inventário do WordPress/host/privacidade e definição do modelo de dados, perfis e modelo de autorização.
Fase 2: plugin de atribuição pública sem dados clínicos, integração de contatos verificados, painel administrativo MVP e agenda de capacidade sem prontuários.
Fase 3: autenticação e portais com arquivos administrativos de teste, armazenamento seguro, auditoria e teste de autorização.
Fase 4: documentos clínicos com revisão profissional e jurídica, prova de conformidade e integrações de assinatura/prescrição aprovadas.
Fase 5: operações editoriais Drive, artigos e scripts, publicação com rastreabilidade; integrações de dados sempre desacopladas da clínica.
## Pontos de decisão pendentes
Responsável legal/controlador de dados; contratos com profissionais; custos de infraestrutura; volume de pacientes e agendas; calendário/CRM atual; origem real dos contatos; sistema de prontuário existente; necessidade de emissão versus simples disponibilização de receitas; política de retenção; menores de idade; permissões da secretaria; papéis de Cláudia e Márcio; autorização e tipo de acesso à hospedagem/WordPress; modelo de sincronismo Drive.
## Evidências esperadas
Link dos commits/PRs, hashes, revisão do conteúdo, evidência de testes, logs sanitizados, lista de versões, captura de funcionamento em staging e URL verificável de cada entrega. Links de portais futuros não são prova de disponibilidade.
## Reversão
Reverter commits documentais por novo commit; staging isolado. Produção permanece intocada nesta fase.
