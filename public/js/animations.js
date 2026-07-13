/**
 * animations.js
 * - Hero honeycomb bubble-pop entrance (single meaningful motion moment)
 * - Lightweight scroll-reveal for section content
 * Respects prefers-reduced-motion.
 */
(function () {
  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---- Hero bubble honeycomb formation ---- */
  const bubbleContainer = document.querySelector('.hero__bubbles');
  if (bubbleContainer && !prefersReduced) {
    const cols = 6;
    const rows = 6;
    const size = 22;
    const gap = 6;
    const step = size + gap;
    let delayIndex = 0;

    for (let r = 0; r < rows; r++) {
      for (let c = 0; c < cols; c++) {
        if (Math.random() > 0.55) continue; // sparse honeycomb, not full grid
        const bubble = document.createElement('span');
        bubble.className = 'bubble';
        const offsetX = (r % 2 === 0) ? 0 : step / 2;
        bubble.style.width = size + 'px';
        bubble.style.height = size + 'px';
        bubble.style.left = (c * step + offsetX) + 'px';
        bubble.style.top = (r * step) + 'px';
        bubble.style.animationDelay = (delayIndex * 0.03) + 's';
        bubbleContainer.appendChild(bubble);
        delayIndex++;
      }
    }
  }

  /* ---- Scroll reveal for sections ---- */
  const revealTargets = document.querySelectorAll(
    '.menu-card, .trust-badge, .promo-card, .gallery-item, .testimonial-card'
  );

  if (revealTargets.length && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12 }
    );

    revealTargets.forEach((el, i) => {
      if (!prefersReduced) {
        el.style.opacity = '0';
        el.style.transform = 'translateY(16px)';
        el.style.transition = `opacity 0.5s ease ${Math.min(i % 8, 8) * 0.05}s, transform 0.5s ease ${Math.min(i % 8, 8) * 0.05}s`;
      }
      observer.observe(el);
    });
  }
})();
