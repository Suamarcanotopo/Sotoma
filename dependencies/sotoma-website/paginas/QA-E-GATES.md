# QA DE CÓDIGO — SOTOMA 2.0 / PÁGINAS ADICIONAIS
Data de inventário: 2026-11-12. Fonte: exportação WordPress WXR de 2026-11-10 e referências de identidade visual da Home V5.

## Estado objetivamente verificado
- 17 páginas `publish` no WXR: Home + Blog (já tratados) + 15 páginas adicionais.
- 11 corpos públicos de atendimento produzidos; 4 corpos utilitários, incluindo dois com bloqueio explícito.
- 5 novas propostas geradas, segregadas da pasta de páginas existentes.
- **20/20 arquivos HTML recuperados diretamente da branch e testados estaticamente**: exatamente 1 STYLE, 1 SCRIPT, JS compilável por `new Function` (verificação sintática, sem executar efeitos), sem elementos HTML/BODY/HEADER/FOOTER globais.
- Nenhum código registra paciente real ou implementa endpoint de captura.
- Cabeçalho e rodapé são globais e não foram modificados.

## O que NÃO foi testado
- Renderização dentro do Elementor WordPress em staging, interação real de accordions, responsividade/overflow em navegador, comportamento após minificação/cache do WordPress, acessibilidade auditada, Lighthouse/Core Web Vitals.
- Permalinks e imagens do servidor ao vivo; a exportação comprova metadados de publicação naquele snapshot, **não uptime atual**.
- Habilitações profissionais, imagem, consentimento, serviços ativos, preços, SEO final e integrações de contato.

## Gates de publicação
- [ ] Validar alterações com direção SOTOMA, profissionais e responsável editorial.
- [ ] Verificar fonte/consentimento de imagens, habilitações e conteúdo.
- [ ] Revisar página legada de Iridologia: remover alegações diagnósticas sem evidência, fontes: PMID 42347992 e PMID 10213874.
- [ ] Auditar segurança de Cadastro de Cliente e Novo Lead; nenhum formulário foi implementado.
- [ ] Definir privacidade real com processos comprovados; minuta não é política oficial.
- [ ] Confirmar URLs, evitar canibalização e páginas fantasmas; páginas novas exigem cadastro e aprovação no WordPress.
- [ ] Aplicar backup, staging, testes mobile/desktop, acessibilidade e rollback.
- [ ] Só depois considerar merge/publicação com responsável designado.

## Rollback
Arquivos existentes preservados no Git; PR Draft não modifica WordPress; revisão/reversão por commit. Alterar produção apenas em missão com autorização específica.
