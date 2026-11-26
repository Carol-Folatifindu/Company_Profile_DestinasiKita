<div>
    
 @extends('layout.homepage')

@section('title', 'Hubungi Kami - DestinasiKita')

@section('content')
<div>
    <section id="tour-packages" class="py-16 md:py-24 bg-white">
        <div class="max-w-screen-xl px-4 mx-auto lg:px-6">

            <!-- Header Section -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div>
                    <p class="text-xs font-semibold tracking-wider text-emerald-600 uppercase mb-2">
                        FEATURED DESTINATIONS
                    </p>
                    <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-gray-900 mb-2">
                        Popular Tour Packages
                    </h2>
                    <p class="text-sm md:text-base text-gray-500 font-light max-w-xl">
                        Handpicked journeys offering the best blend of culture, relaxation, adventure, and luxury.
                    </p>
                </div>
                <a href="#contact"
                    class="inline-flex items-center text-sm font-semibold text-emerald-600 hover:text-emerald-700 transition-colors">
                    Request Custom Tour
                    <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>

            <!-- Grid 4 Kartu Paket Wisata -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Card 1: Bali -->
                <div
                    class="bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow overflow-hidden flex flex-col justify-between">
                    <div>
                        <!-- Gambar & Badge -->
                        <div class="relative h-52 overflow-hidden">
                            <img src="{{ asset('assets/bali.jpg') }}" alt="Exotic Bali Cultural & Beach Escape"
                                class="w-full h-full object-cover">

                            <!-- Badge Rating (Kanan Atas) -->
                            <div
                                class="absolute top-3 right-3 inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-white/95 text-gray-900 shadow-sm">
                                <span class="text-amber-400 mr-1">★</span>
                                4.9 <span class="text-gray-400 font-normal ml-1">(120+ reviews)</span>
                            </div>

                            <!-- Badge Durasi (Kiri Bawah) -->
                            <div
                                class="absolute bottom-3 left-3 inline-flex items-center px-3 py-1 rounded-lg text-xs font-semibold bg-emerald-600 text-white shadow-sm">
                                5 Days / 4 Nights
                            </div>
                        </div>

                        <!-- Konten Card -->
                        <div class="p-5">
                            <div class="flex items-center text-xs font-medium text-emerald-600 mb-2">
                                <svg class="w-3.5 h-3.5 mr-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Bali, Indonesia
                            </div>

                            <h3 class="text-lg font-bold text-gray-900 leading-snug mb-2">
                                Exotic Bali Cultural & Beach Escape
                            </h3>

                            <p class="text-xs text-gray-500 font-light leading-relaxed mb-4 line-clamp-2">
                                Experience serene Ubud temples, traditional dances, and sunset dinners.
                            </p>

                            <!-- Fasilitas / Highlights -->
                            <ul class="space-y-1.5 text-xs text-gray-600 border-t border-gray-100 pt-3">
                                <li class="flex items-center">
                                    <span class="text-emerald-500 mr-2 font-bold">✓</span> Luxury Villa Stay
                                </li>
                                <li class="flex items-center">
                                    <span class="text-emerald-500 mr-2 font-bold">✓</span> Private Driver & Guide
                                </li>
                                <li class="flex items-center">
                                    <span class="text-emerald-500 mr-2 font-bold">✓</span> Spa Treatment included
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Harga & Tombol Book Now -->
                    <div class="px-5 py-4 border-t border-gray-100 flex items-center justify-between">
                        <div>
                            <span class="block text-[11px] text-gray-400">Starting from</span>
                            <span class="text-lg font-extrabold text-gray-900">$450</span>
                        </div>
                        <a href="https://wa.me/628815389272?text=Halo%20Destinasi%20Kita,%20saya%20ingin%20booking%20paket%20Exotic%20Bali%20Cultural%20%26%20Beach%20Escape"
                            target="_blank"
                            class="px-4 py-2 text-xs font-semibold text-white bg-emerald-600 hover:bg-emerald-700 rounded-xl transition-colors">
                            Book Now
                        </a>
                    </div>
                </div>

                <!-- Card 2: Raja Ampat -->
                <div
                    class="bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow overflow-hidden flex flex-col justify-between">
                    <div>
                        <div class="relative h-52 overflow-hidden">
                            <img src="{{ asset('assets/raja.jpg') }}"
                                alt="Raja Ampat Diving & Island Paradise" class="w-full h-full object-cover">
                            <div
                                class="absolute top-3 right-3 inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-white/95 text-gray-900 shadow-sm">
                                <span class="text-amber-400 mr-1">★</span>
                                5.0 <span class="text-gray-400 font-normal ml-1">(85+ reviews)</span>
                            </div>
                            <div
                                class="absolute bottom-3 left-3 inline-flex items-center px-3 py-1 rounded-lg text-xs font-semibold bg-emerald-600 text-white shadow-sm">
                                7 Days / 6 Nights
                            </div>
                        </div>

                        <div class="p-5">
                            <div class="flex items-center text-xs font-medium text-emerald-600 mb-2">
                                <svg class="w-3.5 h-3.5 mr-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Papua, Indonesia
                            </div>

                            <h3 class="text-lg font-bold text-gray-900 leading-snug mb-2">
                                Raja Ampat Diving & Island Paradise
                            </h3>

                            <p class="text-xs text-gray-500 font-light leading-relaxed mb-4 line-clamp-2">
                                Explore the world's richest marine biodiversity, pristine turquoise waters.
                            </p>

                            <ul class="space-y-1.5 text-xs text-gray-600 border-t border-gray-100 pt-3">
                                <li class="flex items-center">
                                    <span class="text-emerald-500 mr-2 font-bold">✓</span> Overwater Eco-Resort
                                </li>
                                <li class="flex items-center">
                                    <span class="text-emerald-500 mr-2 font-bold">✓</span> Guided Snorkeling & Diving
                                </li>
                                <li class="flex items-center">
                                    <span class="text-emerald-500 mr-2 font-bold">✓</span> Speedboat Island Hopping
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="px-5 py-4 border-t border-gray-100 flex items-center justify-between">
                        <div>
                            <span class="block text-[11px] text-gray-400">Starting from</span>
                            <span class="text-lg font-extrabold text-gray-900">$1,250</span>
                        </div>
                        <a href="https://wa.me/6285782336378?text=Halo%20Destinasi%20Kita,%20saya%20ingin%20booking%20paket%20Raja%20Ampat%20Diving%20%26%20Island%20Paradise"
                            target="_blank"
                            class="px-4 py-2 text-xs font-semibold text-white bg-emerald-600 hover:bg-emerald-700 rounded-xl transition-colors">
                            Book Now
                        </a>
                    </div>
                </div>

                <!-- Card 3: Japan -->
                <div
                    class="bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow overflow-hidden flex flex-col justify-between">
                    <div>
                        <div class="relative h-52 overflow-hidden">
                            <img src="{{ asset('assets/sakura.jpg') }}"
                                alt="Japan Cherry Blossom & Tradition Tour" class="w-full h-full object-cover">
                            <div
                                class="absolute top-3 right-3 inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-white/95 text-gray-900 shadow-sm">
                                <span class="text-amber-400 mr-1">★</span>
                                4.9 <span class="text-gray-400 font-normal ml-1">(210+ reviews)</span>
                            </div>
                            <div
                                class="absolute bottom-3 left-3 inline-flex items-center px-3 py-1 rounded-lg text-xs font-semibold bg-emerald-600 text-white shadow-sm">
                                8 Days / 7 Nights
                            </div>
                        </div>

                        <div class="p-5">
                            <div class="flex items-center text-xs font-medium text-emerald-600 mb-2">
                                <svg class="w-3.5 h-3.5 mr-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Tokyo & Kyoto, Japan
                            </div>

                            <h3 class="text-lg font-bold text-gray-900 leading-snug mb-2">
                                Japan Cherry Blossom & Tradition Tour
                            </h3>

                            <p class="text-xs text-gray-500 font-light leading-relaxed mb-4 line-clamp-2">
                                Witness stunning sakura blossoms, ancient temples in Kyoto, and modern.
                            </p>

                            <ul class="space-y-1.5 text-xs text-gray-600 border-t border-gray-100 pt-3">
                                <li class="flex items-center">
                                    <span class="text-emerald-500 mr-2 font-bold">✓</span> 4-Star Hotel Accommodation
                                </li>
                                <li class="flex items-center">
                                    <span class="text-emerald-500 mr-2 font-bold">✓</span> Bullet Train (Shinkansen)
                                    Passes
                                </li>
                                <li class="flex items-center">
                                    <span class="text-emerald-500 mr-2 font-bold">✓</span> English Speaking Expert
                                    Guide
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="px-5 py-4 border-t border-gray-100 flex items-center justify-between">
                        <div>
                            <span class="block text-[11px] text-gray-400">Starting from</span>
                            <span class="text-lg font-extrabold text-gray-900">$1,850</span>
                        </div>
                        <a href="https://wa.me/6282246488781?text=Halo%20Destinasi%20Kita,%20saya%20ingin%20booking%20paket%20Japan%20Cherry%20Blossom%20%26%20Tradition%20Tour"
                            target="_blank"
                            class="px-4 py-2 text-xs font-semibold text-white bg-emerald-600 hover:bg-emerald-700 rounded-xl transition-colors">
                            Book Now
                        </a>
                    </div>
                </div>

                <!-- Card 4: Europe -->
                <div
                    class="bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow overflow-hidden flex flex-col justify-between">
                    <div>
                        <div class="relative h-52 overflow-hidden">
                            <img src="{{ asset('assets/paris.jpg') }}" alt="Grand European Highlights Tour"
                                class="w-full h-full object-cover">
                            <div
                                class="absolute top-3 right-3 inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-white/95 text-gray-900 shadow-sm">
                                <span class="text-amber-400 mr-1">★</span>
                                4.8 <span class="text-gray-400 font-normal ml-1">(95+ reviews)</span>
                            </div>
                            <div
                                class="absolute bottom-3 left-3 inline-flex items-center px-3 py-1 rounded-lg text-xs font-semibold bg-emerald-600 text-white shadow-sm">
                                12 Days / 11 Nights
                            </div>
                        </div>

                        <div class="p-5">
                            <div class="flex items-center text-xs font-medium text-emerald-600 mb-2">
                                <svg class="w-3.5 h-3.5 mr-1 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                France, Switzerland, Italy
                            </div>

                            <h3 class="text-lg font-bold text-gray-900 leading-snug mb-2">
                                Grand European Highlights Tour
                            </h3>

                            <p class="text-xs text-gray-500 font-light leading-relaxed mb-4 line-clamp-2">
                                Discover romantic Paris, Swiss Alps majestic peaks, and historic Venice and.
                            </p>

                            <ul class="space-y-1.5 text-xs text-gray-600 border-t border-gray-100 pt-3">
                                <li class="flex items-center">
                                    <span class="text-emerald-500 mr-2 font-bold">✓</span> Premium Hotel Stays &
                                    Breakfast
                                </li>
                                <li class="flex items-center">
                                    <span class="text-emerald-500 mr-2 font-bold">✓</span> Intercity Transfers Included
                                </li>
                                <li class="flex items-center">
                                    <span class="text-emerald-500 mr-2 font-bold">✓</span> Skip-the-line Monument
                                    Passes
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="px-5 py-4 border-t border-gray-100 flex items-center justify-between">
                        <div>
                            <span class="block text-[11px] text-gray-400">Starting from</span>
                            <span class="text-lg font-extrabold text-gray-900">$2,450</span>
                        </div>
                        <a href="https://wa.me/628386896819?text=Halo%20Destinasi%20Kita,%20saya%20ingin%20booking%20paket%20Grand%20European%20Highlights%20Tour"
                            target="_blank"
                            class="px-4 py-2 text-xs font-semibold text-white bg-emerald-600 hover:bg-emerald-700 rounded-xl transition-colors">
                            Book Now
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>
</div>
@endsection
</div>
