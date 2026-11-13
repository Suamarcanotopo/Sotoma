# SOTOMA — AUDITORIA AO VIVO VIA DESKTOP COMMANDER — 2026-11-12/13

## Método e escopo
Dispositivo remoto autorizado: Nabuco. Acesso **somente de leitura ao WordPress REST API público**, a partir de PowerShell/HTTP; **não houve login ao painel autenticado**, uso de cookies, escrita, WordPress deploy nem publicação.
URL consultada: `https://sotomasaudepsicointegrada.com.br/wp-json/wp/v2/pages?per_page=100`.
A resposta HTTP 200 anunciou **21 páginas com status publish** (X-WP-Total: 21), enquanto o WXR de 10/11 usado como baseline anterior registrava **17**.

## Novas URLs que mudam a arquitetura
- `/quem-cuida-de-voce/` — página publicada existente na consulta REST; alterada em 12/11/2026.
- `/v-i-a/` — página publicada existente na consulta REST.
- `/artigos-sotoma/` — página publicada existente na consulta REST.
- `/psicoterapia-online-para-intercambistas/` — página publicada existente, com os WhatsApps de **Cláudia** e **Yasmin** na marcação renderizada.
- `/sobre/` continua publicada, coexistindo com `/quem-cuida-de-voce/`; escolher URL canônica e política de redirect/links antes de qualquer menu novo.
- As páginas-filhas propostas `/sobre/claudia/`, `/sobre/yasmin/`, e o hub `/duvidas/` **não constavam** como páginas publish nessa listagem.

## Contatos em conteúdo ao vivo
A página pública `/psicoterapia-online-para-intercambistas/` contém os dois destinos `wa.me/556791847679` e `wa.me/5567991858129`.
Isso é **evidência de publicação dos dois números no website**, não prova independente de titularidade, consentimento ou existência de uma conversa/agendamento.

## Mídia: prova HEAD HTTP
As URLs antigas `/wp-content/uploads/2026/03/Clau-9.jpeg`, `Ya-11.jpeg`, `Clau-Ya-3.jpg`, `Ya-6.jpg`, `Psicoterapia-Positiva1.jpg`, bem como `/2026/05/V.I.A.jpg`, `M.I.R.A.jpg`, `/2026/01/atendimento.jpg` e a imagem antiga do Blog responderam **HTTP 404**.
A biblioteca pública WP REST retorna fotos da equipe em **/2026/11/**. Endereços abaixo foram testados com HEAD HTTP 200 e Content-Type image/jpeg:
- `2026/11/Clau-9.jpeg`
- `2026/11/Clau-5.jpeg`
- `2026/11/Clau-4.jpeg`
- `2026/11/Clau-3.jpeg`
- `2026/11/Ya-11.jpeg`
- `2026/11/Ya-6.jpeg`
- `2026/11/Ya-5.jpeg`
- `2026/11/Clau-Ya-1.jpeg`

Os novos códigos usam **somente fotos da biblioteca real** no lugar dos arquivos conceituais antigos que não estavam disponíveis. Sujeito a aprovação visual das profissionais. Não afirmar que uma foto é arte original de um programa quando se trata de retrato.

## Pendências para publicação segura
1. Verificar o conteúdo atual das quatro páginas publicadas após o WXR e decidir rotas/SEO antes de atualizar menus.
2. Fotos substituídas por retratos da biblioteca: validar composição e autorização editorial. As capas antigas de 13 artigos do Blog podem estar indisponíveis; restaurar mídia/capas reais ou criar placeholders editoriais aprovados, sem links quebrados.
3. Validar números e perfis diretamente com Cláudia e Yasmin; conferência pública não basta.
4. Realizar teste Elementor em staging e backup/rollback completo. Não houve login ao WordPress para testar a gravação dos widgets.

## Estado
**Auditoria pública remota concluída; nenhuma alteração na produção.** Mudanças de código, quando feitas, são somente na branch GitHub em Draft.
