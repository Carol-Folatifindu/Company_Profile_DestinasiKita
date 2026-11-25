@extends('layout.homepage')

@section('title', 'Galeri - DestinasiKita')

@section('content')

    @php
        $categories = ['Semua', 'Pantai', 'Gunung', 'Budaya', 'Kuliner'];

        $galleries = [
            ['title' => 'Pantai Kuta', 'category' => 'Pantai', 'image' => 'assets/pantaikuta.jpg'],
            ['title' => 'Raja Ampat', 'category' => 'Pantai', 'image' => 'assets/rajaampat.jpg'],
            ['title' => 'Gunung Bromo', 'category' => 'Gunung', 'image' => 'assets/gunungbromo.jpg'],
            ['title' => 'Gunung Rinjani', 'category' => 'Gunung', 'image' => 'assets/gunungrinjani.jpg'],
            ['title' => 'Candi Borobudur', 'category' => 'Budaya', 'image' => 'assets/candiborobudur.jpg'],
            ['title' => 'Tari Kecak', 'category' => 'Budaya', 'image' => 'assets/tarikecak.jpg'],
            ['title' => 'Gudeg Jogja', 'category' => 'Kuliner', 'image' => 'assets/gudeg.jpg'],
            ['title' => 'Rawon Surabaya', 'category' => 'Kuliner', 'image' => 'assets/rawon1.jpg'],
        ];

        $testimonials = [
            [
                'name' => 'Sarah Putri',
                'image' => 'assets/sarah.jpg',
                'rating' => 5,
                'quote' => 'The trip was amazing! Everything was well organized, and the destinations were beautiful.',
            ],
            [
                'name' => 'Andi Pratama',
                'image' => 'assets/andi.jpg',
                'rating' => 5,
                'quote' =>
                    'Great service and unforgettable experiences. I would definitely travel with DestinasiKita again!',
            ],
            [
                'name' => 'Nadia Putri',
                'image' => 'assets/nadia.jpg',
                'rating' => 5,
                'quote' => 'The tour guides were friendly, and the trip was comfortable from beginning to end.',
            ],
            [
                'name' => 'Rizky Maulana',
                'image' => 'assets/rizky.jpg',
                'rating' => 4,
                'quote' => 'Itinerary jelas dan harga sesuai. Semoga ada lebih banyak pilihan destinasi.',
            ],
        ];
    @endphp

    {{-- ===================== GALLERY ===================== --}}
    <section id="gallery" class="gl-section bg-white pt-24 pb-12 text-gray-900 sm:pt-28">
        <div class="gl-container mx-auto max-w-screen-xl px-4">
            <h2 class="gl-heading text-center text-3xl font-bold tracking-tight text-gray-900">Galeri Destinasi</h2>
            <p class="gl-subheading mt-2 text-center text-gray-500">Lihat keindahan destinasi wisata pilihan kami</p>

            <div class="gl-filters mt-6 flex flex-wrap justify-center gap-2">
                @foreach ($categories as $category)
                    <button type="button"
                        class="gl-filter-btn rounded-full border px-4 py-2 text-sm font-medium transition {{ $loop->first ? 'active border-emerald-500 bg-emerald-500 text-white hover:bg-emerald-600' : 'border-emerald-200 bg-emerald-50 text-emerald-700 hover:bg-emerald-100' }}"
                        data-filter="{{ $category }}">
                        {{ $category }}
                    </button>
                @endforeach
            </div>

            <div class="gl-grid mt-8 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($galleries as $item)
                    <figure
                        class="gl-item overflow-hidden rounded-lg border border-gray-200 bg-white shadow-sm transition hover:shadow-md"
                        data-category="{{ $item['category'] }}">
                        <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" loading="lazy"
                            onerror="this.style.visibility='hidden'" class="h-48 w-full object-cover">
                        <figcaption class="p-4">
                            <span
                                class="gl-cat inline-block rounded-full bg-emerald-100 px-2.5 py-0.5 text-xs font-medium text-emerald-800">
                                {{ $item['category'] }}
                            </span>
                            <strong class="mt-2 block text-base font-semibold text-gray-900">{{ $item['title'] }}</strong>
                        </figcaption>
                    </figure>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============= TESTIMONIALS ============= --}}
    <div class="bg-white">
        <section id="testimonials" class="gt-section mx-auto max-w-screen-xl px-4 py-12 text-gray-900">
            <div class="gt-heading text-center">
                <span
                    class="gt-badge inline-flex items-center rounded-full bg-emerald-100 px-3 py-1 text-xs font-medium text-emerald-800">
                    💬 Testimonials
                </span>
                <h2 class="gt-title mt-3 text-3xl font-bold tracking-tight text-gray-900">What Our Travelers Say</h2>
                <p class="gt-subtitle mt-2 text-gray-500">Hear from our happy travelers and their unforgettable journeys.
                </p>
            </div>

            <div class="gt-slider relative mt-8 flex items-center gap-3">
                <button type="button"
                    class="gt-arrow gt-arrow--prev inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-lg border border-emerald-200 bg-emerald-50 text-emerald-700 hover:bg-emerald-100 focus:outline-none focus:ring-4 focus:ring-emerald-200"
                    id="gtPrev" aria-label="Sebelumnya">&#10094;</button>

                <div class="gt-track grid w-full grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4" id="gtTrack">
                    @foreach ($testimonials as $testi)
                        <article
                            class="gt-card flex items-start gap-3.5 rounded-lg border border-gray-200 bg-white p-5 shadow-sm">
                            <img class="gt-avatar h-12 w-12 shrink-0 rounded-full border-2 border-emerald-200 object-cover"
                                src="{{ asset($testi['image']) }}" alt="{{ $testi['name'] }}">
                            <div>
                                <h3 class="gt-name text-base font-semibold text-gray-900">{{ $testi['name'] }}</h3>
                                <div class="gt-stars mt-0.5 text-sm text-emerald-500">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $testi['rating'])
                                            ★
                                        @else
                                            <span class="gt-off text-gray-300">★</span>
                                        @endif
                                    @endfor
                                </div>
                                <p class="gt-text mt-2 text-sm text-gray-600">"{{ $testi['quote'] }}"</p>
                            </div>
                        </article>
                    @endforeach
                </div>

                <button type="button"
                    class="gt-arrow gt-arrow--next inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-lg border border-emerald-200 bg-emerald-50 text-emerald-700 hover:bg-emerald-100 focus:outline-none focus:ring-4 focus:ring-emerald-200"
                    id="gtNext" aria-label="Berikutnya">&#10095;</button>
            </div>

            <div class="gt-dots mt-6 flex justify-center gap-2" id="gtDots"></div>
        </section>
    </div>

@endsection
