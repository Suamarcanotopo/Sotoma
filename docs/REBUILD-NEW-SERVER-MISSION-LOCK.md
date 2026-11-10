# SOTOMA — Mission Lock da reconstrução em NOVO SERVIDOR
ID: SOT-REBUILD-NEW-HOST-20261110 | Versão: 1.0 | 2026-11-10
Estado: PLANEJAMENTO E COLETA. NENHUM backup recebido, restaurado ou auditado nesta missão.
Ler em conjunto com docs/MISSION-LOCK.md, docs/RBAC-LGPD.md, docs/PR-LOCK.md e docs/BACKUP-INTAKE-RECONCILIATION.md.

## Objetivo
Reconstruir o website institucional SOTOMA em infraestrutura nova A PARTIR DOS DOIS BACKUPS A SEREM ANEXADOS, preservando o conteúdo comprovado e incorporando somente melhorias/novidades aprovadas. Não assumir que os arquivos sejam completos, idênticos, seguros ou contemporâneos. NÃO partir de um template genérico e descartar o material original.

## Ordem das fontes de verdade
1. Inspecionar separadamente BACKUP A e BACKUP B: hashes, formato, proveniência, WordPress, banco e arquivos, segurança e integridade.
2. Inventariar o website existente somente em leitura, quando acessível, sem modificar produção.
3. Ler GitHub main, PRs abertas e Google Sheet editorial privado. Separar EXISTENTE, PLANEJADO, EM PR, APROVADO, PUBLICADO, DESCONHECIDO.
4. Registrar novos pedidos em IDs/PRs independentes e suas decisões. Conflito entre backup, site atual e novidade precisa de justificativa, nunca substituição silenciosa.
5. Arquivos, datas e versões com prova prevalecem sobre nomes de backup, estimativas e texto promocional.

## Produto já acordado
- Site institucional WordPress/Elementor como hipótese a validar pelos backups: home, sobre/equipe, serviços, programas V.I.A. (Vivência, Integração e Adaptação para brasileiros em vários países), M.I.R.A. (Movimento, Identidade, Recursos e Autonomia para brasileiros no Japão), blog, contato, SEO e identidade visual.
- Portais cliente.sotomasaudepsicointegrada.com.br e painel.sotomasaudepsicointegrada.com.br são PROPOSTAS FUTURAS, não instaladas. A clínica precisa de backend segregado, com permissões por função e vínculo; gestores e marketing não herdam acesso a prontuários. NÃO MARKETPLACE.
- Equipe: Cláudia e Yasmin como autoras editoriais propostas; formação e títulos a verificar, sem invenção de registro profissional.
- Editorial: 60 pautas (30 Cláudia/30 Yasmin), Informação/TOPO 30, Educação/MEIO 24, Transformação/FUNDO 6 (decisão informada; sem promessa de cura). Os 58 textos revisados estão na PR #6 DRAFT; não publicados. Google Sheet canônico permanece privado.
- Visual: CSS público observado com Poppins, #22524A, #2E2E2E, #54595F, #8BA146, #91AFA1. O manual da marca e logo devem ser cotejados com os backups, nunca inventados.

## Limites inegociáveis
- NÃO alterar servidor atual, WordPress vivo, DNS, e-mail/MX, SSL, domínio, rotas públicas, licenças ou integrações antes de testes e autorização específica de corte.
- NÃO executar plugins/temas de backups antes de inspecionar integridade, malware, compatibilidade e segredos.
- NÃO subir ZIPs de backup originais, SQL com dados, wp-config.php, .env, senhas, tokens, dados pessoais/de pacientes, mídia clínica ou logs sensíveis ao GitHub, ainda que privado, ou ao Google Sheets editorial. Salvar SOMENTE documentação sanitizada, checksums, manifestos, especificações, código revisado e relatórios sem dados sensíveis.
- Não usar dados reais em staging; não habilitar e-mails, crons, webhooks ou pixels de produção ao restaurar uma cópia.
- Não afirmar restaurado, homologado, migrado, publicado ou instalado sem URL, hash, data e teste de ambiente verificáveis.
- Não confundir PR, merge, CI, instalação, homologação e produção.

## Gates de execução
G0 RECEBIMENTO/BASELINE: identificar ambos anexos, calcular SHA-256, testar integridade, inspecionar estrutura sem executar, inventariar site live somente leitura e HEAD/PR.
G1 RESTORE ISOLADO: clones de staging privados para A e B (ou metodologia equivalente), restauração controlada de banco/mídia e matriz BACKUP A x BACKUP B x LIVE x GitHub x NOVIDADES.
G2 BLUEPRINT: inventário URL-a-URL, SEO (canonical, redirects, robots, sitemap), Elementor/tema, identidade, formulários, mídia, mobile/acessibilidade, UX e decisão de diferenças.
G3 IMPLEMENTAÇÃO: PRs pequenas e reversíveis, com versão, evidência de teste, zero regressão e atenção a plugins/licenças.
G4 COLISEUM/RED TEAM: segurança, fontes, links, mídia, compatibilidade, consentimento, idioma, emails desativados no clone, WordPress/PHP, performance e testes de restore.
G5 ACEITE: reconciliação completa, autorização das diretorias, plano de corte/rollback, controle do delta de conteúdo.
G6 GO LIVE FUTURO: somente após ordem expressa, backup atual recente, restauração comprovada, DNS/TLS/SMTP validados, observação e plano de reversão.

## Critérios de aceite
Toda URL original e todo ativo relevante tem status PRESERVADO, MELHORADO_APROVADO, REDIRECIONADO_APROVADO, DESCARTADO_COM_ACEITE, AUSENTE ou DESCONHECIDO, com origem e teste. Componentes WordPress, temas, plugins, Elementor, uploads, imagens, CSS/JS, formulários, usuários (sem exportar PII ao repo), menus, taxonomias, SEO, custom fields, schema, integrações e licenças devem ter inventário. Se houver ausência material, registrar bloqueio + caminho de recuperação.

## Próxima conversa
Abrir prompts/MASTER-PROMPT-SOTOMA-NOVO-SERVIDOR.md; docs/HANDOFF-NEXT-CHAT.md; docs/pr-lock/REGISTRY.json; docs/BACKUP-INTAKE-RECONCILIATION.md. Após receber os anexos, iniciar G0 sem pedir novamente o escopo já documentado. Sem os anexos, G0 permanece pendente.
