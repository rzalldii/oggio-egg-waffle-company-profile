@php
    $favorites = [
        [
            'name' => 'Choco Cheese',
            'category' => 'Double Series',
            'price' => 20000,
            'desc' => 'Egg waffle cokelat dipadu keju lumer, manis gurih dalam satu gigitan.',
            'img' => 'egg-waffle/double/choco-cheese.jpg',
            'badge' => 'bestseller',
        ],
        [
            'name' => 'Choco Crunchy',
            'category' => 'Single Series',
            'price' => 17000,
            'desc' => 'Egg waffle cokelat dengan taburan crunchy, renyah di setiap gigitan.',
            'img' => 'egg-waffle/single/choco-crunchy.jpg',
            'badge' => 'bestseller',
        ],
        [
            'name' => 'Matcha',
            'category' => 'Matcha Series',
            'price' => 13000,
            'desc' => 'Matcha premium diseduh creamy, seger dan tidak terlalu manis.',
            'img' => 'matcha/matcha.jpg',
            'badge' => 'bestseller',
        ],
        [
            'name' => 'Bold Americano',
            'category' => 'Freshly Brew',
            'price' => 12000,
            'desc' => 'Espresso Arabica dengan rasa lebih bold, pilihan pecinta kopi hitam.',
            'img' => 'arabica/bold-americano.jpg',
            'badge' => 'bestseller',
        ],
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
                        <span class="menu-card__category">{{ $item['category'] }}</span>
                        <h3 class="menu-card__name">{{ $item['name'] }}</h3>
                        <p class="menu-card__desc">{{ $item['desc'] }}</p>
                        <span class="menu-card__price">Rp{{ number_format($item['price'], 0, ',', '.') }}</span>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>