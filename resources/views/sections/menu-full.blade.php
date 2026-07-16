@php
    $drinkGroups = [
        'kopi' => [
            'label' => 'Kopi',
            'items' => [
                ['Light Americano', 10000],
                ['Bold Americano', 12000, 'bestseller'],
                ['Picollo', 14000],
                ['Coffee Latte', 15000, 'bestseller'],
                ['Kopi Gula Aren', 16000],
                ['Hazelnut Latte', 17000, 'bestseller'],
                ['Choco Coffee', 17000],
                ['Matcha Latte', 17000],
                ['Vanilla Latte', 17000],
                ['Caramel Latte', 17000],
                ['Spanish Latte', 18000, 'bestseller'],
                ['Coffee Ice Cream', 20000],
            ],
        ],
        'choco' => [
            'label' => 'Choco',
            'items' => [
                ['Chocolate', 13000],
                ['Choco Hazelnut', 13000, 'bestseller'],
                ['Choco Caramel', 13000],
                ['Super Dark Choco', 15000, 'bestseller'],
                ['Choco Ice Cream', 17000],
                ['Choco Cookies', 17000],
            ],
        ],
        'fresh' => [
            'label' => 'Fresh',
            'items' => [
                ['Jasmine Tea', 10000],
                ['Thai Tea', 13000],
                ['Lemon Tea', 13000, 'bestseller'],
                ['Strawberry Tea', 13000],
                ['Mango Tea', 13000],
                ['Lychee Tea', 13000],
            ],
        ],
        'matcha' => [
            'label' => 'Matcha',
            'items' => [
                ['Matcha', 13000, 'bestseller'],
                ['Hazelnut Matcha', 15000],
                ['Vanilla Matcha', 15000],
                ['Matcha Sundae', 17000, 'bestseller'],
            ],
        ],
    ];

    $waffleSingle = [
        ['Milk Waffle', 12000],
        ['Chocolate', 15000, 'bestseller'],
        ['Matcha Waffle', 17000],
        ['Choco Crunchy', 17000, 'bestseller'],
        ['Cheese', 17000],
        ['Keju Lumer', 17000],
        ['Strawberry', 17000],
        ['Blueberry', 17000],
        ['Keju Crunchy', 17000],
        ['Skippy Peanut', 20000, 'bestseller'],
        ['Nutella', 22000, 'bestseller'],
        ['Lotus', 24000, 'new'],
        ['Ovomaltine', 27000],
    ];

    $waffleDouble = [
        ['Milk Meses', 15000],
        ['Choco Oreo', 17000],
        ['Choco Cheese', 20000, 'bestseller'],
        ['Choco Peanut', 19000],
        ['Matcha Cheese Waffle', 19000],
        ['Choco Crunchy Cheese', 19000, 'bestseller'],
        ['Cheese Milk', 17000],
        ['Strawberry Cheese', 20000],
        ['Blueberry Cheese', 20000],
        ['Skippy Cheese', 24000],
        ['Nutella Cheese', 27000, 'bestseller'],
        ['Lotus Cheese', 29000, 'new'],
        ['Ovomaltine Cheese', 30000, 'bestseller'],
    ];

    $waffleNewMix = [
        ['Milk Meses Keju', 19000, 'bestseller'],
        ['Choco Oreo Keju', 22000],
        ['Choco Peanut Keju', 23000],
        ['Crunch Keju Meses', 23000],
        ['Matcha Cheese Susu', 23000],
        ['Choco Cheese Milk', 20000],
        ['Choco Cheese Meses', 20000, 'bestseller'],
        ['Skippy Cheese Milk', 27000, 'bestseller'],
        ['Skippy Cheese Meses', 27000],
        ['Nutella Cheese Oreo', 30000],
        ['Nutella Cheese Milk', 30000],
        ['Lotus Cheese Milk', 32000, 'new'],
        ['Ovomaltine Cheese Milk', 33000],
    ];

    $renderBadge = function ($item) {
        if (isset($item[2]) && $item[2] === 'bestseller') {
            return '<span class="badge badge-bestseller">Best Seller</span>';
        }
        if (isset($item[2]) && $item[2] === 'new') {
            return '<span class="badge badge-new">New</span>';
        }
        return '';
    };
@endphp

<section id="menu-lengkap" class="section menu-full">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">Semua Ada di Sini</span>
            <h2 class="h-display-lg">Menu Lengkap Oggio</h2>
        </div>
        <div class="tab-group" role="tablist" aria-label="Kategori menu">
            <button type="button" class="tab-pill is-active" data-tab-target="panel-drink" role="tab"
                aria-selected="true">
                <span aria-hidden="true"><i class="fa-solid fa-mug-hot"></i></span> Drink
            </button>
            <button type="button" class="tab-pill" data-tab-target="panel-egg-waffle" role="tab" aria-selected="false">
                <span aria-hidden="true"><i class="fa-solid fa-cookie"></i></span> Egg Waffle
            </button>
        </div>
        <div class="tab-panel is-active" id="panel-drink" role="tabpanel">
            <div class="menu-full__panel-grid">
                <div>
                    <h4 class="menu-full__col-title">{{ $drinkGroups['kopi']['label'] }}</h4>
                    @foreach ($drinkGroups['kopi']['items'] as $item)
                        <div class="menu-row">
                            <span class="menu-row__name">{{ $item[0] }} {!! $renderBadge($item) !!}</span>
                            <span class="menu-row__price text-data">Rp{{ number_format($item[1], 0, ',', '.') }}</span>
                        </div>
                    @endforeach

                    <h4 class="menu-full__col-title" style="margin-top:1.5rem;">{{ $drinkGroups['matcha']['label'] }}
                    </h4>
                    @foreach ($drinkGroups['matcha']['items'] as $item)
                        <div class="menu-row">
                            <span class="menu-row__name">{{ $item[0] }} {!! $renderBadge($item) !!}</span>
                            <span class="menu-row__price text-data">Rp{{ number_format($item[1], 0, ',', '.') }}</span>
                        </div>
                    @endforeach
                </div>
                <div>
                    <h4 class="menu-full__col-title">{{ $drinkGroups['choco']['label'] }}</h4>
                    @foreach ($drinkGroups['choco']['items'] as $item)
                        <div class="menu-row">
                            <span class="menu-row__name">{{ $item[0] }} {!! $renderBadge($item) !!}</span>
                            <span class="menu-row__price text-data">Rp{{ number_format($item[1], 0, ',', '.') }}</span>
                        </div>
                    @endforeach
                    <h4 class="menu-full__col-title" style="margin-top:1.5rem;">{{ $drinkGroups['fresh']['label'] }}
                    </h4>
                    @foreach ($drinkGroups['fresh']['items'] as $item)
                        <div class="menu-row">
                            <span class="menu-row__name">{{ $item[0] }} {!! $renderBadge($item) !!}</span>
                            <span class="menu-row__price text-data">Rp{{ number_format($item[1], 0, ',', '.') }}</span>
                        </div>
                    @endforeach
                    <h4 class="menu-full__col-title" style="margin-top:1.5rem;">Topping</h4>
                    <div class="menu-row">
                        <span class="menu-row__name">Topping Drink (Espresso / Ice Cream / Oreo Cookies / Keju Parut /
                            Meses Parut)</span>
                        <span class="menu-row__price text-data">+ Rp3.000</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-panel" id="panel-egg-waffle" role="tabpanel">
            <div class="menu-full__panel-grid">
                <div>
                    <h4 class="menu-full__col-title">Single Series</h4>
                    @foreach ($waffleSingle as $item)
                        <div class="menu-row">
                            <span class="menu-row__name">{{ $item[0] }} {!! $renderBadge($item) !!}</span>
                            <span class="menu-row__price text-data">Rp{{ number_format($item[1], 0, ',', '.') }}</span>
                        </div>
                    @endforeach
                </div>
                <div>
                    <h4 class="menu-full__col-title">Double Series</h4>
                    @foreach ($waffleDouble as $item)
                        <div class="menu-row">
                            <span class="menu-row__name">{{ $item[0] }} {!! $renderBadge($item) !!}</span>
                            <span class="menu-row__price text-data">Rp{{ number_format($item[1], 0, ',', '.') }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="menu-full__panel-grid" style="margin-top:1.5rem;">
                <div>
                    <h4 class="menu-full__col-title">New Mix Series</h4>
                    @foreach ($waffleNewMix as $item)
                        <div class="menu-row">
                            <span class="menu-row__name">{{ $item[0] }} {!! $renderBadge($item) !!}</span>
                            <span class="menu-row__price text-data">Rp{{ number_format($item[1], 0, ',', '.') }}</span>
                        </div>
                    @endforeach
                </div>
                <div>
                    <h4 class="menu-full__col-title">Topping</h4>
                    <div class="menu-row">
                        <span class="menu-row__name">Topping Waffle (Cheese / Oreo / Meses)</span>
                        <span class="menu-row__price text-data">+ Rp5.000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>