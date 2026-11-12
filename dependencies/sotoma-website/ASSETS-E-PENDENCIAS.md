# Proveniência, assets e pendências da Home V5
## Inventário de evidências
| Item descrito | Fonte declarada pelo briefing | Encontrado na main do GitHub em 12/11? | Decisão |
|---|---|---|---|
| `SOTOMA_HOME_V4_PREVIA_COMPLETA_AUTONOMA.html` | Home V4 | NÃO | Solicitar importação, preservar original |
| `SOTOMA_HOME_V4_CODIGO_HTML_CSS_JS_UNIDOS.html` | Home V4 | NÃO | Comparar e migrar com fidelidade |
| `SOTOMA_HOME_V4_URLS_IMAGENS.md` | Manifesto V4 | NÃO | Usar como fonte de caminhos e origem |
| 15 WebP | Pacote V4 (informação do briefing) | NÃO | Verificar arquivos, hashes, autorização |
| 26 SVGs | Pacote V4 (informação do briefing) | NÃO | Registrar individualmente e reutilizar |
| 13 artigos de backup V3 | Informação do briefing | NÃO verificados como pacote web V3 | Não inventar URLs ou importar automaticamente |
| 60 rascunhos editoriais | `../sotoma-editorial/artigos/` | SIM | Não publicar; revisão separada |
| Tokens visuais observados | `../sotoma-editorial/brand/tokens.json` | SIM | Reconciliar com manual aprovado |

## Registro obrigatório por asset
`asset_id | nome_arquivo | categoria | origem | autor/titular | tipo_original_ou_gerado | direito_de_uso | consentimento_imagem | hash_sha256 | uso_previsto | status_aprovacao | caminho_no_repo | url_final_verificada`

## Bloqueios em Fail Closed
- Não substituir rosto de Cláudia/Yasmin por fotografia gerada sem aprovação expressa.
- Não atribuir números de registro, especialidades, promessas terapêuticas ou preços não verificados.
- Não ativar contato clínico, rastreamento sensível ou links de publicação fictícios.
- Não declarar os testes da V4 como testes executados nesta V5.
- Não implementar envio automático ao WordPress nesta branch.
