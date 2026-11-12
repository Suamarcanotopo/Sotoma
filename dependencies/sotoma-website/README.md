# SOTOMA Website — Home V5 | Arquivo único Elementor

**Regra obrigatória:** uma página = um HTML único (STYLE + conteúdo + SCRIPT no mesmo arquivo). Header e footer pertencem aos templates globais WordPress/Elementor.

- [**HOME V5 — CÓDIGO ÚNICO, COPIAR COMPLETO**](home-v5/SOTOMA_HOME_V5_ELEMENTOR_UNICO.html)
- [**MEGA INDEX — seções, HTML, CSS e JS no mesmo arquivo**](MEGA-INDEX.md)
- [**Proveniência, riscos e testes**](ASSETS-E-PENDENCIAS.md)

O código preserva a composição visual da V5 autônoma enviada pelo usuário e integra os 13 posts publicados registrados na exportação WordPress de 10/11/2026, com filtros temáticos, busca, ordenação e expansão dos resultados.

### Uso
No Elementor, crie UM widget HTML no contêiner de largura total da Home e cole todo o arquivo. Não inserir HTML/HEAD/BODY ou HEADER/FOOTER: esses últimos continuam globais. Não colocar dados sensíveis de pacientes.

### Estado
Testado localmente com Node.js e Chromium, 390/768/1440 pixels; zero erros JavaScript ou rolagem horizontal. Sem deploy, sem merge e sem testes reais Elementor/WordPress, disponibilidade de links ao vivo ou aprovação clínica/comercial. Guardar backup, testar em staging e aguardar aprovação das profissionais.
