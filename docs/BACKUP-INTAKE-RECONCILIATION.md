# SOTOMA — Protocolo de recebimento, inspeção e reconciliação dos 2 backups
Versão 1.0 | 2026-11-10 | Estado: AGUARDANDO OS DOIS ARQUIVOS
Nenhum backup foi recebido, extraído, restaurado ou verificado nesta missão. Não inventar data, formato, tamanho, versão, conteúdo ou checksum.

## Entrada de evidência imutável
Para cada BACKUP_A e BACKUP_B, registrar filename real, origem, tamanho, data indicada (não prova), tipo detectado/magic, SHA-256, integridade, estrutura, banco e wp-content, ferramentas de migração e logs. Detectar zip-slip/tar traversal, symlinks externos, zip bombs, webshells, malware, plugins/temas suspeitos, SQL malicioso e segredos. Nunca executar código de terceiros a partir do pacote antes de inspecionar.

## Inventário A/B independente
- WordPress core e versões de PHP/MySQL/MariaDB; tema/child-theme; plugins/versões/licenças SEM chaves; Elementor kits/templates, configurações de fonte e cor, CSS/JS e shortcodes.
- Banco: tabelas e suas relações, opções não sensíveis, menus, páginas, posts/revisões, autores sem detalhes pessoais, CPT, taxonomias, slugs, metacampos, URLs; identificar serialização WP, prefixo e incompatibilidade de snapshots.
- Mídia: wp-content/uploads e arquivos órfãos, hashes e vínculos com páginas; fotos/logos/anexos e direitos autorais sem expor conteúdo pessoal.
- SEO: titles, meta, redirects, canonicals, schema, sitemap, robots, indexabilidade, links internos; marcar elementos não verificados.
- Formulários/integrações: plugins, destinatários privados apenas como presença, consentimento, cookies, GA4/Meta e outros rastreadores; nenhum evento com dados de saúde.
- Segurança: usuários e perfis com contagem sanitizada, armazenamento privado, contas administrativas, SMTP, cron e chaves sem exportar segredos; risco de inclusão de dados de pacientes.

## Modelo de manifesto — preencher somente depois do anexo
Campo | Backup A | Backup B | Evidência
Recebido | NÃO | NÃO | Arquivo anexo
Hash SHA-256 | DESCONHECIDO | DESCONHECIDO | Calculado localmente
Integridade | NÃO TESTADA | NÃO TESTADA | Teste de leitura
Banco completo | DESCONHECIDO | DESCONHECIDO | Tabelas/dump
wp-content completo | DESCONHECIDO | DESCONHECIDO | Árvore/hashes
Riscos/PII | NÃO AVALIADO | NÃO AVALIADO | Varredura sanitizada
Restore isolado | NÃO EXECUTADO | NÃO EXECUTADO | Log e URL staging privada
Compatibilidade | DESCONHECIDA | DESCONHECIDA | PHP/WordPress/temas/plugins
Qualidade final | NÃO HOMOLOGADA | NÃO HOMOLOGADA | Gates QA

## Matriz comparativa por item
item_id | URL/objeto | BACKUP_A | BACKUP_B | LIVE somente leitura | GITHUB | NOVIDADE | DECISÃO | EVIDÊNCIA | TESTE | PR
Cada entrada usa um ID estável. Decisões permitidas: PRESERVAR_A; PRESERVAR_B; PRESERVAR_LIVE_VALIDADO; FUNDIR_COM_PROVA; ALTERAR_APROVADO; DESCARTAR_COM_ACEITE; BLOQUEADO_SIGILO; DESCONHECIDO.
Não tratar backup com timestamp maior no nome como mais completo. Não misturar banco de uma data com mídia de outra sem testar consistência. Uma URL visível no site atual mas ausente em ambos não pode sumir por omissão; documentar e preservar com origem.

## Restauração segura
Usar clones isolados, privados, não indexáveis e com autenticação; desligar SMTP de produção, crons externos, webhooks, pagamentos, pixels e integrações mutáveis. Testar migração de URLs respeitando campos serializados do WordPress. Jamais importar dados reais de pacientes a staging público. Usar conteúdo sintético/redigido quando necessário, mantendo backup bruto fora do repositório em local protegido.

## Migração e rollback futuro
Manter site antigo intacto até homologação. Testar restauração do novo backup imediatamente antes do corte, mapear janela delta, DNS/TLS, MX/SMTP e permissão de usuários, links e redirecionamentos. Após corte, definir como reconciliar alterações no novo servidor antes de qualquer rollback; DNS rollback sozinho não desfaz gravações de conteúdo.

## O que salvar no GitHub
PERMITIDO: hashes em manifesto sem bytes do backup, versões e inventários não sensíveis, mapa de URL, decisões, scripts aprovados, QA redigido, PR/issue e provas sem credenciais.
PROIBIDO: ZIPs originais, dumps SQL com dados, wp-config, .env, credenciais, tokens, logs com sessão/PII, arquivos clínicos ou dados de pacientes.
O exemplo docs/backups/INTAKE-MANIFEST.example.json não prova recebimento.
