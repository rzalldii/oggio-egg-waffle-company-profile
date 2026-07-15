@php
    $favorites = [
        ['name' => 'Kopi Gula Aren', 'price' => 16000, 'desc' => 'Espresso, susu, gula aren asli.', 'img' => 'kopi/kopi-gula-aren.jpg', 'badge' => 'bestseller'],
        ['name' => 'Matcha Latte', 'price' => 17000, 'desc' => 'Matcha premium dipadu susu creamy.', 'img' => 'matcha/matcha-latte.jpg', 'badge' => 'bestseller'],
        ['name' => 'Choco Hazelnut Waffle', 'price' => 13000, 'desc' => 'Egg waffle cokelat dengan hazelnut.', 'img' => 'egg-waffle/choco-hazelnut.jpg', 'badge' => null],
        ['name' => 'Nutella Waffle', 'price' => 22000, 'desc' => 'Egg waffle dengan lelehan Nutella.', 'img' => 'egg-waffle/nutella.jpg', 'badge' => 'bestseller'],
        ['name' => 'Lotus Waffle', 'price' => 24000, 'desc' => 'Egg waffle topping krim Lotus Biscoff.', 'img' => 'egg-waffle/lotus.jpg', 'badge' => 'new'],
        ['name' => 'Spanish Latte', 'price' => 18000, 'desc' => 'Espresso creamy dengan kombinasi susu manis.', 'img' => 'kopi/spanish-latte.jpg', 'badge' => 'bestseller'],
        ['name' => 'Lotus Waffle', 'price' => 24000, 'desc' => 'Egg waffle topping krim Lotus Biscoff.', 'img' => 'egg-waffle/lotus.jpg', 'badge' => 'new'],
        ['name' => 'Spanish Latte', 'price' => 18000, 'desc' => 'Espresso creamy dengan kombinasi susu manis.', 'img' => 'kopi/spanish-latte.jpg', 'badge' => 'bestseller'],
    ];
@endphp

<section id="menu-favorit" class="section menu-highlight">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">Paling Dicari</span>
            <h2 class="h-display-lg">Menu Favorit Pelanggan</h2>
        </div>

        <div class="menu-grid">
            @foreach ($favorites as $item)
                <article class="menu-card">
                    <div class="menu-card__media">
                        @if ($item['badge'])
                            <div class="menu-card__badges">
                                @if ($item['badge'] === 'bestseller')
                                    <span class="badge badge-bestseller">Best Seller</span>
                                @elseif ($item['badge'] === 'new')
                                    <span class="badge badge-new">New</span>
                                @endif
                            </div>
                        @endif
                        <img src="{{ asset('images/menu/' . $item['img']) }}" alt="{{ $item['name'] }} - Oggio Egg Waffle"
                            loading="lazy" width="320" height="240">
                    </div>
                    <div class="menu-card__body">
                        <h3 class="menu-card__name">{{ $item['name'] }}</h3>
                        <p class="menu-card__desc">{{ $item['desc'] }}</p>
                        <span class="menu-card__price">Rp{{ number_format($item['price'], 0, ',', '.') }}</span>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>