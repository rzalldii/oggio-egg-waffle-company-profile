<header class="navbar" role="banner">
    <div class="container navbar__inner">
        <a href="#home" class="navbar__brand" aria-label="Oggio Egg Waffle - Home">
            <img src="{{ asset('images/logo/oggio-logo.png') }}" alt="Logo Oggio Egg Waffle" width="42" height="42"
                loading="eager">
            <span>Oggio Egg Waffle</span>
        </a>
        <nav class="navbar__links" id="navbarLinks" aria-label="Menu navigasi utama">
            <a href="#home">Home</a>
            <a href="#about">Tentang</a>
            <a href="#menu-favorit">Menu</a>
            <a href="#lokasi">Lokasi</a>
        </nav>
        <div class="navbar__overlay" id="navbarOverlay" aria-hidden="true"></div>
        <div class="navbar__actions">
            <a href="#order" class="btn btn-primary btn-sm">
                <i class="fa-solid fa-bag-shopping"></i> Order Sekarang
            </a>
            <button class="navbar__toggle" id="navbarToggle" aria-label="Buka menu navigasi" aria-expanded="false"
                aria-controls="navbarLinks">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>