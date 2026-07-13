@php
    // Placeholder testimonials — ganti dengan data asli pelanggan saat sudah tersedia.
    $testimonials = [
        ['name' => 'Rina, Surabaya', 'quote' => 'Egg waffle-nya fresh banget, crispy di luar lembut di dalam. Kopi gula arennya juara!', 'stars' => 5],
        ['name' => 'Dimas, Surabaya', 'quote' => 'Harga ramah kantong buat mahasiswa, tapi rasanya nggak murahan. Pakmat favorit saya!', 'stars' => 5],
        ['name' => 'Sari, Surabaya', 'quote' => 'Tempatnya nyaman buat nongkrong malam, order online juga gampang lewat websitenya.', 'stars' => 4],
    ];
@endphp

<section id="testimoni" class="section testimonial">
    <div class="container">
        <div class="section-header">
            <span class="section-eyebrow">Kata Mereka</span>
            <h2 class="h-display-lg">Apa Kata Pelanggan</h2>
        </div>

        <div class="testimonial-grid">
            @foreach ($testimonials as $t)
                <div class="testimonial-card">
                    <div class="testimonial-card__stars" aria-label="{{ $t['stars'] }} dari 5 bintang">
                        {{ str_repeat('★', $t['stars']) }}{{ str_repeat('☆', 5 - $t['stars']) }}
                    </div>
                    <p class="testimonial-card__quote">"{{ $t['quote'] }}"</p>
                    <p class="testimonial-card__author">{{ $t['name'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>