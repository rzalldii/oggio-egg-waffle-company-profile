@php
    $pakmat = [
        ['Pakmat 1', 'Jasmine Tea + Egg Waffle Chocolate', 23000],
        ['Pakmat 2', 'Matcha + Egg Waffle Chocolate', 25000],
        ['Pakmat 3', 'Coffee Latte + Egg Waffle Chocolate', 27000],
    ];
    $bukmat = [
        ['Bukmat 1', 'Jasmine Tea + Egg Waffle Choco Cheese', 27000],
        ['Bukmat 2', 'Matcha + Egg Waffle Choco Cheese', 29000],
        ['Bukmat 3', 'Coffee Latte + Egg Waffle Choco Cheese', 32000],
    ];
@endphp

<section id="paket-hemat" class="section promo-paket">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">Hemat di Kantong</span>
            <h2 class="h-display-lg">Paket Anti Gamud</h2>
        </div>
        <div class="promo-group">
            <h3 class="promo-group-title"><span aria-hidden="true">🎒</span> Pakmat — Paket Hemat</h3>
            <div class="promo-grid">
                @foreach ($pakmat as $paket)
                    <div class="promo-card">
                        <span class="promo-card__tag">{{ $paket[0] }}</span>
                        <p class="promo-card__items">{{ $paket[1] }}</p>
                        <span class="promo-card__price text-data">Rp{{ number_format($paket[2], 0, ',', '.') }}</span>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="promo-group">
            <h3 class="promo-group-title"><span aria-hidden="true">🎁</span> Bukmat — Paket Hemat Cheese</h3>
            <div class="promo-grid">
                @foreach ($bukmat as $paket)
                    <div class="promo-card">
                        <span class="promo-card__tag">{{ $paket[0] }}</span>
                        <p class="promo-card__items">{{ $paket[1] }}</p>
                        <span class="promo-card__price text-data">Rp{{ number_format($paket[2], 0, ',', '.') }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>