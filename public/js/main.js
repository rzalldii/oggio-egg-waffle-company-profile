/**
 * main.js
 * Entry point: smooth scroll polish + lazy-load fallback wiring.
 * navbar.js, menu-filter.js and animations.js are loaded alongside this file.
 */
(function () {
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener('click', (e) => {
        const targetId = anchor.getAttribute('href');
        if (targetId.length > 1) {
          const target = document.querySelector(targetId);
          if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
          }
        }
      });
    });

    if ('loading' in HTMLImageElement.prototype === false) {
      document.querySelectorAll('img[loading="lazy"]').forEach((img) => {
        img.src = img.dataset.src || img.src;
      });
    }
  });
})();
