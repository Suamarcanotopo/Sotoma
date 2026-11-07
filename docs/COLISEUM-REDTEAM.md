# ECP + COLISEUM — revisão adversarial documental inicial
**Data:** 2026-11-07. **Natureza:** revisão de riscos em papéis especializados simulados; não equivale a pentest, teste real ou parecer profissional.
## Perspectivas e contribuições
- **ECP, gestão de missão:** impedir desvio para marketplace; travar publicação e clínica sem gates; manter Handoff/estado.
- **Produto/UX:** jornadas separadas visitante, paciente e equipe; priorizar agenda/captação antes de prontuário.
- **Clínica/ética:** credenciamento, títulos verificados, escolha informada, sigilo e não indução.
- **Legal/LGPD:** definição de controlador/operador, minimização, retenção e avaliação de transferência internacional.
- **Segurança/Red Team:** separar WP público do clínico; negar por padrão, testar autorização por objeto e link de arquivos.
- **Dados/analytics:** cliques diferentes de leads; agendamentos diferentes de atendimentos; ocupação com capacidade válida.
- **Editorial/SEO:** páginas e autoria confiáveis, revisão técnica, fontes, CTAs sem promessa clínica.
- **Infra/QA:** staging, backup/restore, logs sanitizados e rollback, sem saltos de produção.
- **Operação/financeiro:** evitar reimplementar prontuário e prescrição sem ROI/compliance; piloto e custos por fase.
## 20 falhas que o projeto deve impedir
| Nº | Risco / Red Team | Mitigação planejada |
|---|---|---|
| 1 | Transformar profissionais em marketplace | credenciamento interno e site institucional |
| 2 | Contar clique como lead | separar `cta_whatsapp_click` de contato confirmado |
| 3 | Contar agendamento como atendimento | status de comparecimento auditado |
| 4 | Ler diagnósticos para marketing | camada agregada sem dados clínicos |
| 5 | Admin WP acessando prontuários | backend clínico segregado + papéis |
| 6 | Profissional ver paciente de outro | ABAC e teste IDOR |
| 7 | Paciente ver arquivo alheio | checagem servidor a cada download |
| 8 | Upload malware ou URL pública | quarentena, scan, storage privado |
| 9 | Expor dados em Google Analytics | dados mínimos e rotas sanitizadas |
| 10 | Salvar prescrições em Drive editorial | storage clínico + ato profissional |
| 11 | Prometer receita PDF válida sem validação | integração regulamentada, feature OFF |
| 12 | Vazamento por e-mail/notificação | mensagens sem diagnósticos/arquivos sensíveis |
| 13 | Atribuição cruzada errada | fontes e confiança da atribuição documentadas |
| 14 | Agenda superestimada | slots válidos, férias/bloqueios, timezone |
| 15 | Métrica reidentifica paciente isolado | supressão de grupos pequenos |
| 16 | Perda de arquivo por falha de backup | restauração testada e política de guarda |
| 17 | Conta antiga mantém acesso | revogação automática e auditoria |
| 18 | Menor acessa sem modelo de responsável | gate específico antes de ativar |
| 19 | Conteúdo promocional antiético | revisão pelo conselho/regulamento aplicável |
| 20 | Deployment sem aprovação ou rollback | staging, aceite formal e versionamento |
## Contramedidas de valor
- Adotar prioridades P0/P1/P2 e critérios de aceite objetivos.
- Priorizar MVP de captação/agenda com dados administrativos mínimos; clínico somente após controles.
- Criar schemas estáveis e eventos deduplicados; dashboards que exibem lacunas.
- Evitar métricas de 'produtividade' que pressionem conduta clínica.
- Separar permissões de Cláudia/Márcio e dos profissionais por função, não titularidade.
- Reutilizar prestadores de prescrição/prontuário existentes mediante avaliação, ao invés de duplicar risco regulatório.
- Usar dados sintéticos e testes determinísticos antes de homologação.
- Preparar DPIA/RIPD quando apropriado, revisão especializada e plano de resposta a incidentes.
## Veredito
**GO:** definição documental e prototipagem sem dados reais. **NO-GO:** ativar clínica, receitas, upload real, analytics com saúde, migração de pacientes e qualquer deploy em produção antes de gates e validação independente.