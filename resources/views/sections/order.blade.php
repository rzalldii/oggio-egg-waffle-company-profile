@php
    $orderPlatforms = [
        ['name' => 'GoFood', 'logo' => 'gofood.png', 'url' => 'https://gofood.link/a/GxN12UY'],
        ['name' => 'ShopeeFood', 'logo' => 'shopeefood.png', 'url' => 'https://shopee.co.id/universal-link/now-food/shop/1435206?deep_and_deferred=1&shareChannel=copy_link'],
        ['name' => 'GrabFood', 'logo' => 'grabfood.png', 'url' => 'https://r.grab.com/g/2-1-6-C2TDNBMFG623CN'],
        ['name' => 'Qpon', 'logo' => 'qpon.png', 'url' => 'https://qpon.id/platform/merchant?poiId=901604485129566000&channel_id=1'],
    ];
@endphp

<section id="order" class="section order-cta">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">Order Online</span>
            <h2 class="h-display-lg">Pesan Sekarang, Lebih Hemat</h2>
            <p class="text-lead order-cta__desc">Bingung mau pilih yang mana? Langsung chat kami aja, biar dibantu
                rekomendasiin menu favorit sesuai mood kamu hari ini.</p>
        </div>
        <div class="order-cta__actions">
            <a href="https://wa.me/6287777235488?text=Halo%20Oggio%2C%20saya%20mau%20order!" target="_blank"
                rel="noopener" class="btn btn-primary">
                <i class="fa-brands fa-whatsapp"></i> Chat & Order Sekarang
            </a>
        </div>
        <div class="order-cta__divider">
            <span>atau order langsung lewat</span>
        </div>
        <div class="order-grid">
            @foreach ($orderPlatforms as $platform)
                <a href="{{ $platform['url'] }}" target="_blank" rel="noopener" class="order-card"
                    aria-label="Order via {{ $platform['name'] }}">
                    <img src="{{ asset('images/order/' . $platform['logo']) }}" alt="{{ $platform['name'] }} logo"
                        width="56" height="56" loading="lazy">
                    <span class="order-card__label">{{ $platform['name'] }}</span>
                </a>
            @endforeach
        </div>
    </div>
</section>