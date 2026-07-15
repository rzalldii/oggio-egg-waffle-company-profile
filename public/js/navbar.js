/**
 * navbar.js
 * Sticky navbar background change on scroll + mobile menu toggle.
 */
(function () {
  const navbar = document.querySelector('.navbar');
  const toggle = document.querySelector('.navbar__toggle');
  const links = document.querySelector('.navbar__links');
  const overlay = document.querySelector('.navbar__overlay');

  if (!navbar) return;

  const onScroll = () => {
    navbar.classList.toggle('is-scrolled', window.scrollY > 24);
  };
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  function openMenu() {
    links.classList.add('is-open');
    overlay.classList.add('is-visible');
    toggle.classList.add('is-active');
    toggle.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden'; // kunci scroll body saat drawer terbuka
  }

  function closeMenu() {
    links.classList.remove('is-open');
    overlay.classList.remove('is-visible');
    toggle.classList.remove('is-active');
    toggle.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }

  if (toggle && links && overlay) {
    toggle.addEventListener('click', () => {
      const isOpen = links.classList.contains('is-open');
      isOpen ? closeMenu() : openMenu();
    });

    // Tutup saat overlay diklik (area luar drawer)
    overlay.addEventListener('click', closeMenu);

    // Tutup saat salah satu link diklik
    links.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', closeMenu);
    });

    // Tutup saat tombol Escape ditekan (accessibility)
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && links.classList.contains('is-open')) {
        closeMenu();
      }
    });
  }
})();
