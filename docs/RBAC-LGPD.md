# Perfis, privacidade e segurança — SOTOMA
**RBAC** (Role-Based Access Control: controle por papéis) + **ABAC** (Attribute-Based Access Control: autorização contextual por vínculo com paciente, profissional, finalidade). Autorização obrigatória no servidor.
## Matriz de acesso (padrão: negar)
| Recurso | Direção (Cláudia/Márcio) | Secretaria | Profissional clínico | Paciente |
|---|---|---|---|---|
| Relatórios de origem agregados | SIM | restrito | sua agenda, quando útil | NÃO |
| Leads e agendamento administrativo | conforme função | SIM | somente próprios | somente própria agenda |
| Slots por profissional | SIM | SIM | próprios | slots disponíveis liberados |
| Identificação de paciente | só necessidade operacional | só necessidade operacional | seus pacientes vinculados | própria |
| Documento clínico/conteúdo | NÃO por padrão | NÃO | paciente autorizado + finalidade | próprio, somente liberado |
| Receitas e laudos | NÃO por padrão | NÃO | emitir via sistema validado, liberar | visualizar suas versões liberadas |
| Documentos editoriais | aprovadores | não clínicos | autores autorizados | NÃO |
| Logs técnicos | somente auditor designado | NÃO | NÃO | NÃO |
**Importante:** uma pessoa não herda acesso clínico por ser proprietária do negócio, gestora, autora, administradora WordPress ou desenvolvedora. Possível assistência clínica formal precisa de autorização contextual e fundamento.
## Controles mínimos
- MFA obrigatório para perfis internos e operações sensíveis, revogação rápida de acessos, proteção contra sessão roubada, timeouts, logs e monitoramento.
- Cada paciente só vê seu arquivo e agenda, incluindo tentativas de mudar IDs/URLs.
- Cada profissional só vê pacientes associados através de concessões registradas; transferências liberam/revogam permissões sem vazar histórico.
- Storage criptografado em repouso e TLS; arquivos com scan, quarentena, tamanho/tipo permitidos, expiração de links e negação padrão. Sem storage público nem WP Media.
- Backups separados e testados em restauração; rotação de chaves, isolamento de staging, processo de incidentes, retenção definida segundo categoria documental.
- Exports e relatórios auditados e restritos; capacidade agregada não serve como avaliação clínica de qualidade.
- Direito de acesso/correção do titular tratado com validação da identidade e obrigações legais de guarda. Descarte só dentro da tabela de retenção aprovada.
- Menores e responsáveis legais exigem modelo jurídico/assistencial validado antes de cadastro.
- Pacientes no exterior: avaliar transferência internacional, lei local e exercício profissional; não assumir que atendimento remoto é irrestrito.
## Separação lógica e contratual
Determinar controlador, operador, prestadores e profissionais responsáveis; contrato com hospedagem e subprocessadores; registro de tratamento; bases legais para dados comuns e **especiais para dados sensíveis de saúde**. Não usar aceitação de cookies como substituto para base legal de processamento clínico. Consentimento de marketing quando necessário é independente do atendimento.
## Segurança e testes (bloqueantes)
IDOR/objeto; enumeração; elevação de privilégios; exportação indevida; upload/download malicioso; vazamento em logs, URL, analytics, e-mails, webhooks; CORS/CSRF, SQLi e XSS; MFA e sessão; backups; erro de autorização entre subdomínios; exclusão/encerramento do vínculo. Fazer revisão de código, dependências, DAST e pentest antes de dados reais.
## Gates para prontuário e receita
Conformidade clínica e jurídica aprovada; política de guarda; integrações de prescrição e assinatura adequadas; treinamento dos profissionais; plano de contingência para indisponibilidade; testes de auditoria. Sem demonstração com dados reais, nem emissão automática experimental de receita.