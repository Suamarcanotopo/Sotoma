# BIBLIOTECA DE ASSETS — SOTOMA 2.0 | IMAGENS ORIGINAIS (2026-11)
Os **19 arquivos binários originais** foram obtidos diretamente das URLs já presentes no WordPress da SOTOMA e armazenados neste repositório (pasta `assets/2026-11/`). Não são imagens recriadas por IA; são cópias dos assets já divulgados pelo site, para controle de versão e proveniência.

- [Manifesto completo: nome, URL de origem, Git blob SHA-1, bytes, finalidade e consentimento](MANIFESTO-ASSETS-2026-11.json)
- `logo/` — logomarca original PNG.
- `yasmin/` — nove fotografias originais.
- `claudia/` — oito fotografias originais.
- `equipe/` — fotografia conjunta.

## Uso correto
1. **Website publicado:** preferir a URL de mídia real do WordPress, se responde 200, sem servir imagens raw do GitHub em produção.
2. **GitHub:** é fonte de proveniência/revisão/rollback, NÃO substitui CDN WordPress, álbum clínico ou banco de pacientes.
3. **Fisionomia e direitos:** a aprovação do uso da imagem em páginas, artigos e publicidade cabe à profissional e direção. Arquivamento não significa consentimento irrestrito.
4. **Microanimações:** só CSS leve (hover, foco, transição, prefers-reduced-motion). Nenhuma animação altera a fisionomia.
5. **Integridade:** consultar `gitBlobSha1` para validar cópia byte-a-byte; Git blob SHA-1 não é SHA-256. Se precisar de SHA-256, registrar adicionalmente sem alterar o original.
6. **Privacidade:** biblioteca contém fotografias publicamente disponibilizadas de duas profissionais, nunca pacientes/menores e nenhum documento clínico.
7. **Sem mágica de indexação:** images + alt descritivos + páginas canônicas coerentes; não publicar alt inventado que alegue profissão, diagnóstico, comprovação clínica ou resultados.
8. **Logo e redimensionamento:** o arquivo publicamente servido foi ~120KB no momento da leitura, menor que os 374KB informados inicialmente. O website pode ter recompressão; hash e bytes comprovam esta cópia.
