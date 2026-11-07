# Contrato de mensuração — contatos, agenda e capacidade
## O princípio
Distinguir **sinal de interesse**, **contato iniciado e confirmado**, **agendamento**, **comparecimento** e **paciente em atendimento**. Somente o responsável administrativo pode confirmar eventos cuja verificação não é automática. Não confundir cliques com pacientes adquiridos.
## Fluxo e eventos
| Evento | Origem de prova | Estado |
|---|---|---|
| `page_view` | navegação consentida/configuração de tag | medição técnica |
| `cta_whatsapp_click` | clique real em CTA | intenção de contato, **não lead** |
| `form_submission_accepted` | formulário validado | solicitação recebida, não consulta |
| `inbound_contact_confirmed` | plataforma oficial WhatsApp/API ou conferência humana auditada | lead verificado |
| `lead_qualified_administrative` | equipe/secretaria | elegível para discutir agenda, sem diagnóstico |
| `appointment_created` | agenda oficial | agendamento |
| `appointment_confirmed` | confirmação pela parte responsável | compromisso confirmado |
| `appointment_attended` | presença confirmada | atendimento ocorrido |
| `appointment_cancelled` | agenda | cancelamento |
| `appointment_no_show` | agenda | ausência |
| `availability_slot_opened` | agenda | oferta disponível |
A direção pode visualizar as transições com atribuição sanitizada; um evento sem fonte de prova é pendente, não convertido.
## Campos mínimos de atribuição não clínicos
`event_id` UUID opaco; `occurred_at` UTC; `session_id` pseudônimo de curta duração; `source`, `medium`, `campaign`, `content`, `landing_path` sanitizado, `cta_id`, `referrer_domain` se apropriado, `consent_status`, `event_type`, `verification_status`. Para contato confirmado, `lead_id` interno segregado em banco protegido. Não armazenar motivo clínico, nome, CPF, telefone, texto WhatsApp ou e-mail em analytics/UTM.
## Exemplo de CTA de página
Em `/programas/via/`: button `cta_via_primary`; campanha `utm_source=instagram&utm_medium=organic&utm_campaign=via_editorial`. Captura `cta_whatsapp_click`. Se pessoa mandar mensagem, a confirmação acontece via integração oficial/comprovação de secretaria. **Sem captura não autorizada do WhatsApp Web**. Não inserir identificadores de paciente nem temas de saúde em mensagem pré-preenchida ou URL.
## Atribuição
Primeiro toque elegível (`first_touch`), último toque elegível (`last_touch`) e origem do CTA da conversão. Prazos de janela a aprovar (exemplo de experimento: 30 dias, não dado real). Deduplicar `event_id`, vincular com consentimento/finalidade e não substituir prova por estimativa. Dados não identificados vão para `origem_desconhecida`. Exibir percentual de atribuição verificada.
## Visão do painel gerencial
- Visitas e cliques (indicadores de marketing)
- Contatos confirmados por página/campanha (aquisição)
- Agendamentos, atendimentos e faltas (operação)
- Primeiro atendimento por profissional/canal: **contagens restritas e agregadas** para análise de ocupação; sem ligação exportável entre identidade de paciente e campanha.
- `ocupacao` = slots de atendimento confirmados / slots ofertados válidos no período (descontar férias, bloqueios e slots indisponíveis)
- `taxa_comparecimento` = atendidos / consultas com desfecho ocorrido ou ausência
- `tempo_ate_atendimento` = mediana em dias entre contato confirmado e primeiro encontro
- `capacidade_residual` = slots ofertados futuros não ocupados
- `qualidade_dado` = contagens com fonte verificada / contagens totais relevantes
## Regras para confidencialidade nos relatórios
Sem dashboards de diagnósticos, temas clínicos ou conteúdo de mensagens. Pequenas contagens podem reidentificar pessoas; agrupar/suprimir quando necessário. Perfis profissionais podem consultar sua carga de trabalho; gestores veem capacidades e indicadores administrativos. Qualquer cruzamento entre aquisição e dados de saúde requer avaliação e autorização específica.
## Aceite funcional mínimo
Testar clique sem conversa, conversa sem agendamento, duplicado, paciente retorna após 60 dias, transferência entre profissionais, URL com query sensível, origem desconhecida, bloqueio de consentimento, status incorreto, cancelamento, fuso horário da agenda, no-show e discrepância entre GA4 e backend. KPIs rotulados honestamente.