<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Oggio Egg Waffle — Kopi X Waffle | Surabaya')</title>
    <meta name="description"
        content="@yield('meta_description', 'Oggio Egg Waffle — kedai kopi 100% Arabica dan Hong Kong egg waffle di Jl. Siwalankerto No. 128A, Surabaya. Kopi X Waffle mulai Rp10.000. Halal Indonesia. Order online sekarang!')">
    <meta name="keywords"
        content="egg waffle surabaya, kopi arabica surabaya, oggio egg waffle, kedai kopi siwalankerto, hong kong waffle surabaya">
    <meta name="author" content="Oggio Egg Waffle">
    <link rel="canonical" href="https://oggioeggwaffle.id/">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', 'Oggio Egg Waffle — Kopi X Waffle')">
    <meta property="og:description"
        content="@yield('og_description', 'Kedai kopi 100% Arabica & Hong Kong egg waffle di Surabaya. Halal Indonesia. Order online via oggioeggwaffle.id')">
    <meta property="og:image" content="{{ asset('images/logo/oggio-logo.png') }}">
    <meta property="og:url" content="https://oggioeggwaffle.id/">
    <meta property="og:site_name" content="Oggio Egg Waffle">
    <meta name="twitter:card" content="summary_large_image">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('images/logo/oggio-logo.png') }}">

    {{-- Fonts: Display (Baloo 2), Body (Plus Jakarta Sans), Data (Space Grotesk) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap"
        rel="stylesheet">

    {{-- Stylesheets --}}
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sections.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    @stack('styles')
</head>

<body>

    @include('partials.navbar')

    <main id="main-content">
        @yield('content')
    </main>

    @include('partials.footer')

    {{-- Floating Order / WhatsApp CTA --}}
    <a href="https://wa.me/6287777235488?text=Halo%20Oggio%2C%20saya%20mau%20order!" class="floating-cta"
        target="_blank" rel="noopener" aria-label="Order via WhatsApp">
        <span aria-hidden="true">💬</span>
        <span class="floating-cta__label">Order Sekarang</span>
    </a>

    {{-- Scripts --}}
    <script src="{{ asset('js/navbar.js') }}" defer></script>
    <script src="{{ asset('js/menu-filter.js') }}" defer></script>
    <script src="{{ asset('js/animations.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    @stack('scripts')
</body>

</html>