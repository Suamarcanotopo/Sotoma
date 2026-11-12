/* SOTOMA HOME V5 — scripts isolados, sem dependências */
(() => {
  "use strict";
  const menuButton = document.querySelector("[data-menu-button]");
  const menu = document.querySelector("#menu-principal");
  if (menuButton && menu) {
    const closeMenu = () => { menu.classList.remove("is-open"); menuButton.setAttribute("aria-expanded","false"); };
    menuButton.addEventListener("click", () => {
      const open = menuButton.getAttribute("aria-expanded") !== "true";
      menu.classList.toggle("is-open", open);
      menuButton.setAttribute("aria-expanded", String(open));
    });
    menu.querySelectorAll("a").forEach(link => link.addEventListener("click", closeMenu));
    document.addEventListener("keydown", event => { if (event.key === "Escape") closeMenu(); });
  }
  const filters = [...document.querySelectorAll("[data-filter]")];
  const cards = [...document.querySelectorAll("[data-category]")];
  const status = document.querySelector("#filtro-status");
  filters.forEach(button => button.addEventListener("click", () => {
    const value = button.dataset.filter;
    filters.forEach(item => {
      const active = item === button;
      item.classList.toggle("active",active);
      item.setAttribute("aria-pressed", String(active));
    });
    let visible = 0;
    cards.forEach(card => {
      const show = value === "todos" || card.dataset.category === value;
      card.hidden = !show; if (show) visible++;
    });
    if (status) status.textContent = visible + (visible === 1 ? " conteúdo visível." : " conteúdos visíveis.");
  }));
})();