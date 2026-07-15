@php
    $categories = [
        'kopi' => [
            'label' => 'Kopi',
            'icon' => '☕',
            'items' => [
                ['Light Americano', 10000],
                ['Bold Americano', 12000],
                ['Picollo', 14000],
                ['Coffee Latte', 15000],
                ['Kopi Gula Aren', 16000, 'bestseller'],
                ['Hazelnut Latte', 17000],
                ['Choco Coffee', 17000],
                ['Matcha Latte', 17000, 'bestseller'],
                ['Vanilla Latte', 17000],
                ['Caramel Latte', 17000],
                ['Spanish Latte', 18000, 'bestseller'],
                ['Coffee Ice Cream', 20000],
            ],
        ],
        'choco' => [
            'label' => 'Choco',
            'icon' => '🍫',
            'items' => [
                ['Chocolate', 13000],
                ['Choco Hazelnut', 13000],
                ['Choco Caramel', 13000],
                ['Super Dark Choco', 15000],
                ['Choco Ice Cream', 17000],
                ['Choco Cookies', 17000],
            ],
        ],
        'fresh' => [
            'label' => 'Fresh',
            'icon' => '🍋',
            'items' => [
                ['Jasmine Tea', 10000],
                ['Thai Tea', 13000],
                ['Lemon Tea', 13000],
                ['Strawberry Tea', 13000],
                ['Mango Tea', 13000],
                ['Lychee Tea', 13000],
            ],
        ],
        'matcha' => [
            'label' => 'Matcha',
            'icon' => '🍵',
            'items' => [
                ['Matcha', 13000],
                ['Hazelnut Matcha', 15000],
                ['Vanilla Matcha', 15000],
                ['Matcha Sundae', 17000],
            ],
        ],
        'egg-waffle' => [
            'label' => 'Egg Waffle',
            'icon' => '🧇',
            'items' => [], // handled separately with sub-groups below
        ],
    ];

    $waffleSingle = [
        ['Milk Waffle', 12000],
        ['Chocolate', 15000],
        ['Matcha Waffle', 17000],
        ['Choco Crunchy', 17000],
        ['Cheese', 17000],
        ['Keju Lumer', 17000],
        ['Strawberry', 17000],
        ['Blueberry', 17000],
        ['Keju Crunchy', 17000],
        ['Skippy Peanut', 20000],
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
        ['Choco Crunchy Cheese', 19000],
        ['Cheese Milk', 17000],
        ['Strawberry Cheese', 20000],
        ['Blueberry Cheese', 20000],
        ['Skippy Cheese', 24000],
        ['Nutella Cheese', 27000],
        ['Lotus Cheese', 29000],
        ['Ovomaltine Cheese', 30000],
    ];

    $waffleNewMix = [
        ['Milk Meses Keju', 19000],
        ['Choco Oreo Keju', 22000],
        ['Choco Peanut Keju', 23000],
        ['Crunch Keju Meses', 23000],
        ['Matcha Cheese Susu', 23000],
        ['Choco Cheese Milk', 20000],
        ['Choco Cheese Meses', 20000],
        ['Skippy Cheese Milk', 27000],
        ['Skippy Cheese Meses', 27000],
        ['Nutella Cheese Oreo', 30000, 'new'],
        ['Nutella Cheese Milk', 30000],
        ['Lotus Cheese Milk', 32000, 'new'],
        ['Ovomaltine Cheese Milk', 33000, 'new'],
    ];
@endphp

<section id="menu-lengkap" class="section menu-full">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">Semua Ada di Sini</span>
            <h2 class="h-display-lg">Menu Lengkap Oggio</h2>
        </div>
        <div class="tab-group" role="tablist" aria-label="Kategori menu">
            @foreach ($categories as $key => $cat)
                <button type="button" class="tab-pill @if($loop->first) is-active @endif" data-tab-target="panel-{{ $key }}"
                    role="tab" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                    <span aria-hidden="true">{{ $cat['icon'] }}</span> {{ $cat['label'] }}
                </button>
            @endforeach
        </div>
        {{-- Kopi, Choco, Fresh, Matcha panels --}}
        @foreach (['kopi', 'choco', 'fresh', 'matcha'] as $key)
            <div class="tab-panel @if($key === 'kopi') is-active @endif" id="panel-{{ $key }}" role="tabpanel">
                <div class="menu-full__panel-grid">
                    <div>
                        @foreach ($categories[$key]['items'] as $item)
                            <div class="menu-row">
                                <span class="menu-row__name">
                                    {{ $item[0] }}
                                    @if (isset($item[2]) && $item[2] === 'bestseller')
                                        <span class="badge badge-bestseller">Best Seller</span>
                                    @elseif (isset($item[2]) && $item[2] === 'new')
                                        <span class="badge badge-new">New</span>
                                    @endif
                                </span>
                                <span class="menu-row__price text-data">Rp{{ number_format($item[1], 0, ',', '.') }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
        {{-- Egg Waffle panel with 3 sub-groups --}}
        <div class="tab-panel" id="panel-egg-waffle" role="tabpanel">
            <div class="menu-full__panel-grid">
                <div>
                    <h4 class="menu-full__col-title">Single Series</h4>
                    @foreach ($waffleSingle as $item)
                        <div class="menu-row">
                            <span class="menu-row__name">
                                {{ $item[0] }}
                                @if (isset($item[2]) && $item[2] === 'bestseller')
                                    <span class="badge badge-bestseller">Best Seller</span>
                                @elseif (isset($item[2]) && $item[2] === 'new')
                                    <span class="badge badge-new">New</span>
                                @endif
                            </span>
                            <span class="menu-row__price text-data">Rp{{ number_format($item[1], 0, ',', '.') }}</span>
                        </div>
                    @endforeach
                </div>
                <div>
                    <h4 class="menu-full__col-title">Double Series</h4>
                    @foreach ($waffleDouble as $item)
                        <div class="menu-row">
                            <span class="menu-row__name">
                                {{ $item[0] }}
                                @if (isset($item[2]) && $item[2] === 'bestseller')
                                    <span class="badge badge-bestseller">Best Seller</span>
                                @elseif (isset($item[2]) && $item[2] === 'new')
                                    <span class="badge badge-new">New</span>
                                @endif
                            </span>
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
                            <span class="menu-row__name">
                                {{ $item[0] }}
                                @if (isset($item[2]) && $item[2] === 'bestseller')
                                    <span class="badge badge-bestseller">Best Seller</span>
                                @elseif (isset($item[2]) && $item[2] === 'new')
                                    <span class="badge badge-new">New</span>
                                @endif
                            </span>
                            <span class="menu-row__price text-data">Rp{{ number_format($item[1], 0, ',', '.') }}</span>
                        </div>
                    @endforeach
                </div>
                <div>
                    <h4 class="menu-full__col-title">Topping</h4>
                    <div class="menu-row">
                        <span class="menu-row__name">Topping Waffle (Cheese / Oreo / Meses)</span>
                        <span class="menu-row__price text-data">Rp5.000</span>
                    </div>
                    <div class="menu-row">
                        <span class="menu-row__name">Espresso Shot (topping drink)</span>
                        <span class="menu-row__price text-data">+Rp3.000</span>
                    </div>
                    <div class="menu-row">
                        <span class="menu-row__name">Ice Cream / Oreo Cookies / Keju Parut / Meses Parut</span>
                        <span class="menu-row__price text-data">Cek di kasir</span>
                    </div>
                    <p class="menu-row__desc" style="font-size:0.82rem;color:var(--color-text-soft);margin-top:0.5rem;">
                        *Harga topping drink selain Espresso mengikuti info terbaru di gerai — mohon konfirmasi ke
                        kasir.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>