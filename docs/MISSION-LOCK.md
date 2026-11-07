# MISSION LOCK — SOTOMA-FOUNDATION-20261107
Versão: 1.0 | Data: 2026-11-07 | Estado: PLANEJAMENTO DOCUMENTAL | Responsáveis pela aprovação: direção SOTOMA (Cláudia) e direção técnica/produto (Márcio).
## Objetivo aprovado
Evoluir a SOTOMA Saúde Psicointegrada como operação clínica multiprofissional, SEM marketplace, agregando profissionais credenciados pela direção e criando (1) website institucional, (2) portal do paciente e (3) painel privado de profissionais/gestão.
## Escopo funcional canônico
- Website: páginas institucionais, serviços/programas V.I.A. e M.I.R.A., artigos com autoria/revisão, campanhas, botões de contato com eventos não clínicos, formulários mínimos.
- Painel interno: gestão de leads e origem, triagem administrativa, alocação de profissionais, agendas, vagas/capacidade, contatos, relatórios agregados, acesso administrativo restrito. Cláudia e Márcio terão visões de gestão em conformidade com necessidade e autorização, nunca acesso indiscriminado a prontuários.
- Painel do profissional: sua agenda, lista autorizada de pacientes, documentos clínicos autorizados, envio seguro, tarefas de acompanhamento, eventos de chegada atribuídos ao canal apenas quando necessários. Perfil clínico isolado.
- Portal paciente: ver/cancelar ou solicitar reagendamento, acessar documentos liberados pelo profissional, enviar documentos/fotos autorizados, histórico de disponibilização e notificações não sensíveis.
- Credenciamento interno de novos profissionais (psicólogos, psiquiatras e afins) sujeito a validação documental, conselho e responsabilidade profissional; SEM perfis abertos a cadastro público, notas ou ranking comercial.
- Operação editorial com Google Drive/Sheets para pautas, artigos, scripts, fontes, aprovações, calendário; GitHub guarda contratos, templates, código e trilha de decisões. NÃO guardar dados de pacientes nesses artefatos editoriais.
## Três endereços-alvo (propostos, não existentes/homologados)
- https://sotomasaudepsicointegrada.com.br — website público existente.
- https://cliente.sotomasaudepsicointegrada.com.br — portal paciente FUTURO.
- https://painel.sotomasaudepsicointegrada.com.br — painel interno FUTURO.
Não alterar DNS, hosting, WordPress, site ao vivo ou autenticação nesta missão.
## Decisões técnicas preliminares
- Preservar WordPress público; componente modular WordPress para eventos/atribuição SEM salvar prontuários no site público.
- Aplicação clínica/painéis em backend segregado, banco e armazenamento privados e criptografados, com autorização no servidor por paciente e profissional, auditoria, backups e recuperação testada. Implementação como plugin WordPress no painel só após estudo de risco e prova de isolamento suficiente; WordPress público não será repositório clínico.
- Google Analytics 4/Tag Manager (se adotados) só eventos não sensíveis, com política de privacidade e consentimento quando aplicável; jamais URL com informações clínicas, nomes, CPF ou motivos da consulta, e não enviar patient_id.
- Clique WhatsApp não prova conversa iniciada; conversa iniciada não prova lead qualificado; lead não prova agendamento; agendamento não prova atendimento. Cada transição exige evidência própria.
## Limites inegociáveis — Fail Closed
1. Nunca colocar dados reais de pacientes, receitas, prontuários, tokens, backups ou chaves no GitHub, Google Sheets editorial, logs de analytics ou exemplos.
2. Nenhum administrador de marketing pode ler documentos ou notas clínicas apenas por ser administrador.
3. Nenhum profissional pode acessar pacientes alheios sem concessão formal e justificativa clínica.
4. Upload não se torna público; toda recuperação deve exigir autenticação + autorização e registrar auditoria.
5. Receita médica só será exibida/enviada se emitida por profissional autorizado, com assinatura/validação exigida e integração regulatória apropriada; NÃO implementar motor de prescrição caseiro.
6. Não usar dados clínicos para publicidade ou segmentação; não comercializar encaminhamentos; vedada comissão por encaminhamento de serviços psicológicos.
7. Nunca atribuir 'agendado' ou 'paciente' a um mero clique no WhatsApp.
8. Nenhuma publicação (página/artigo/post) sem revisão de autoria, consentimento sobre imagem e conformidade de publicidade profissional.
9. Sem deploy/instalação em produção nem manipulação de dados reais nesta etapa.
## Requisitos de segurança antes de qualquer dado de paciente
- Mapeamento de controlador/operadores, bases legais, responsabilidades, contratos, aviso de privacidade e avaliação de impacto/risco conforme orientação especializada.
- Matriz RBAC/ABAC, bloqueio por objeto (IDOR), autenticação multifator para equipe, proteção contra login malicioso, sessões e dispositivos, logs sem informações clínicas, criptografia em trânsito e repouso, backups e restore comprovado, retenção e descarte fundamentados, política de incidentes.
- Testes de isolamento entre pacientes e profissionais, alteração de permissões, revogação, acesso a arquivos por URL, sessão expirada, ataques de reidentificação/atribuição.
- Para menores/responsáveis legais: modelagem de vínculo e autorização antes de habilitar.
## Métricas permitidas
Origem de contato; visitas/CTAs; leads validados; comparecimento; taxa de ocupação por agenda e especialidade; disponibilidade futura; cancelamentos/no-show; tempo até acolhimento; conversão por canal. Apresentar agregados à gestão por padrão, com supressão de grupos pequenos.
## Requisitos editoriais
IDs canônicos por pauta, autor, revisão científica/ética, referências, status, URL publicada comprovada, performance agregada. Google Drive somente editorial/administrativo não sensível.
## Critérios de aceite da fase de fundação
- docs/MISSION-LOCK.md e docs/HANDOFF.md publicadas no repositório privado e lidas de volta.
- Plano de produto, fontes, arquitetura, contrato de dados, eventos, papéis e backlog verificáveis.
- Nenhum dado clínico ou credencial armazenado; nenhum site/painel alterado.
- Handoff relata o que existe versus o que é futuro; riscos, decisões e próximos gates.
## ECP + COLISEUM
Revisão documental por perspectivas: produto, ética e privacidade, clínica, arquitetura, segurança, dados/medição, editorial/SEO, UX/acessibilidade, QA/Red Team. As perspectivas são critérios de auditoria, não prova de execução de agentes especializados.
## Próxima aprovação
Cláudia e Márcio confirmam escopo, perfis, atividades dos profissionais, política de atendimento e preferência de hospedagem; etapa posterior faz prova de conceito em staging com dados sintéticos.
## Rollback
Mudanças documentais por novos commits/revert; não reescrever histórico, não alterar visibilidade privada.