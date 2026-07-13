@php
    $galleryImages = [
        ['file' => 'gerai-malam.jpg', 'alt' => 'Suasana gerai Oggio Egg Waffle di malam hari'],
        ['file' => 'proses-waffle-1.jpg', 'alt' => 'Proses pembuatan egg waffle fresh Oggio'],
        ['file' => 'produk-closeup-1.jpg', 'alt' => 'Close-up egg waffle Nutella Oggio'],
        ['file' => 'produk-closeup-2.jpg', 'alt' => 'Close-up kopi latte art Oggio'],
        ['file' => 'suasana-pelanggan-1.jpg', 'alt' => 'Pelanggan menikmati waffle di Oggio'],
        ['file' => 'produk-closeup-3.jpg', 'alt' => 'Egg waffle Lotus dengan topping krim'],
        ['file' => 'proses-waffle-2.jpg', 'alt' => 'Barista Oggio menuang adonan egg waffle'],
        ['file' => 'gerai-siang.jpg', 'alt' => 'Tampak depan gerai Oggio Egg Waffle'],
    ];
@endphp

<section id="galeri" class="section gallery">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">Cerita Visual</span>
            <h2 class="h-display-lg">Galeri Oggio</h2>
        </div>

        <div class="gallery-grid">
            @foreach ($galleryImages as $img)
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery/' . $img['file']) }}" alt="{{ $img['alt'] }}" loading="lazy"
                        width="280" height="280">
                </div>
            @endforeach
        </div>
    </div>
</section>