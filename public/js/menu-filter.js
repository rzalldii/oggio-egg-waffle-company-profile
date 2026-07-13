/**
 * menu-filter.js
 * Tab/pill filter logic for the full menu section.
 * Categories represent real menu divisions: Kopi, Choco, Fresh, Matcha, Egg Waffle.
 */
(function () {
  const tabs = document.querySelectorAll('.tab-pill[data-tab-target]');
  const panels = document.querySelectorAll('.tab-panel');

  if (!tabs.length) return;

  function activate(targetId) {
    tabs.forEach((tab) => {
      const isActive = tab.dataset.tabTarget === targetId;
      tab.classList.toggle('is-active', isActive);
      tab.setAttribute('aria-selected', String(isActive));
    });
    panels.forEach((panel) => {
      panel.classList.toggle('is-active', panel.id === targetId);
    });
  }

  tabs.forEach((tab) => {
    tab.addEventListener('click', () => activate(tab.dataset.tabTarget));
  });

  const initiallyActive = document.querySelector('.tab-pill.is-active');
  if (initiallyActive) activate(initiallyActive.dataset.tabTarget);
})();
