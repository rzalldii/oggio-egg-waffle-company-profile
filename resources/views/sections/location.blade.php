@php
    $branches = [
        [
            'label' => 'Siwalankerto (Petra)',
            'address' => 'Jl. Siwalankerto No.128A, Siwalankerto, Kec. Wonocolo, Surabaya',
            'hours' => 'Selasa - Minggu, 11:00 - 23:00 WIB',
            'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.1247041516654!2d112.73293547477451!3d-7.339890092668717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf262c8f4eb%3A0x6d9e0f34ae05ca6c!2sOggio%20Egg%20Waffle%20Siwalankerto%20x%20Nyedot%20(Universitas%20Petra)!5e0!3m2!1sen!2ssg!4v1784275983149!5m2!1sen!2ssg',
        ],
        [
            'label' => 'Tenggilis (Ubaya)',
            'address' => 'Jl. Tenggilis Mejoyo AN No.25, Kali Rungkut, Kec. Rungkut, Surabaya',
            'hours' => 'Rabu - Senin, 12:00 - 22:00 WIB',
            'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.300297645553!2d112.76440387477435!3d-7.320125792687996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb1f8f5ee05d%3A0x46d90f9120eb1610!2sOggio%20Egg%20Waffle%20Tenggilis%20x%20Nyedot%20(UBAYA)!5e0!3m2!1sen!2ssg!4v1784276269638!5m2!1sen!2ssg',
        ],
    ];
@endphp

<section id="lokasi" class="section location">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">Kunjungi Kami</span>
            <h2 class="h-display-lg">Lokasi & Jam Buka</h2>
        </div>
        @foreach ($branches as $branch)
            <div class="location__branch">
                <h3 class="location__branch-title">
                    <i class="fa-solid fa-store" aria-hidden="true"></i> {{ $branch['label'] }}
                </h3>
                <div class="location__inner">
                    <div class="location__info">
                        <div class="location__item">
                            <div class="location__item-icon" aria-hidden="true">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <p class="location__item-title">Alamat</p>
                                <p class="location__item-desc">{{ $branch['address'] }}</p>
                            </div>
                        </div>
                        <div class="location__item">
                            <div class="location__item-icon" aria-hidden="true">
                                <i class="fa-regular fa-clock"></i>
                            </div>
                            <div>
                                <p class="location__item-title">Jam Operasional</p>
                                <p class="location__item-desc">
                                    {{ $branch['hours'] }}
                                </p>
                            </div>
                        </div>
                        <div class="location__item">
                            <div class="location__item-icon" aria-hidden="true">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <p class="location__item-title">Email</p>
                                <p class="location__item-desc">
                                    <a href="mailto:office@oggioeggwaffle.id">office@oggioeggwaffle.id</a>
                                </p>
                            </div>
                        </div>
                        <div class="location__item">
                            <div class="location__item-icon" aria-hidden="true">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <p class="location__item-title">Telepon</p>
                                <p class="location__item-desc">
                                    <a href="tel:+6287777235488">+62 877-7723-5488</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="location__map">
                        <iframe src="{{ $branch['map_src'] }}" allowfullscreen="" loading="lazy"
                            referrerpolicy="strict-origin-when-cross-origin"
                            title="Peta lokasi Oggio Egg Waffle {{ $branch['label'] }}"
                            aria-label="Google Maps lokasi Oggio Egg Waffle {{ $branch['label'] }}"></iframe>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>