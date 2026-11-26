<div>
 <section class="relative min-h-screen flex items-center justify-center bg-center bg-cover" style="background-image: url('{{ asset('assets/background_pantai.jpg') }}');">
    <!-- Overlay Gelap agar teks mudah dibaca di atas gambar -->
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 max-w-screen-xl px-4 py-20 mx-auto text-center lg:px-6 w-full flex flex-col justify-between min-h-screen pt-28 pb-12">
        
        <!-- Bagian Atas: Badge -->
        <div class="flex justify-center">
            <div class="inline-flex items-center px-4 py-1.5 text-xs md:text-sm font-medium text-white bg-white/10 backdrop-blur-md border border-white/20 rounded-full shadow-sm">
                <svg class="w-4 h-4 mr-2 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Discover Indonesia & The World With Experts
            </div>
        </div>

        <!-- Bagian Tengah: Judul, Deskripsi, dan Tombol -->
        <div class="my-auto">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-tight text-white md:text-6xl xl:text-7xl">
                Explore The World With <br>
                <span class="text-emerald-400">Destinasi Kita</span>
            </h1>

            <p class="max-w-3xl mx-auto mb-8 text-base font-light text-gray-200 md:text-lg lg:text-xl">
                Curated travel experiences designed to transform your dream destinations into lifelong memories. Professional guides, seamless bookings, and unforgettable journeys.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="{{ route('package') }}" class="inline-flex items-center justify-center px-6 py-3.5 text-base font-medium text-center text-white rounded-xl bg-emerald-400 hover:bg-emerald-600 focus:ring-4 focus:ring-emerald-300 shadow-lg transition-all">
                    Explore Packages
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                <a href="#" class="inline-flex items-center justify-center px-6 py-3.5 text-base font-medium text-center text-white bg-white/10 backdrop-blur-md border border-white/30 rounded-xl hover:bg-white/20 focus:ring-4 focus:ring-gray-400 transition-all">
                    Plan Custom Trip
                </a> 
            </div>
        </div>

        <!-- Bagian Bawah: Kartu Statistik -->
        <div class="grid grid-cols-2 gap-4 md:grid-cols-4 max-w-4xl mx-auto w-full mt-8">
            <div class="p-4 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl text-center shadow-lg">
                <div class="text-2xl md:text-3xl font-bold text-emerald-400">10+</div>
                <div class="text-xs md:text-sm text-gray-300 mt-1">Years Experience</div>
            </div>
            <div class="p-4 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl text-center shadow-lg">
                <div class="text-2xl md:text-3xl font-bold text-emerald-400">500+</div>
                <div class="text-xs md:text-sm text-gray-300 mt-1">Destinations</div>
            </div>
            <div class="p-4 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl text-center shadow-lg">
                <div class="text-2xl md:text-3xl font-bold text-emerald-400">15,000+</div>
                <div class="text-xs md:text-sm text-gray-300 mt-1">Happy Travelers</div>
            </div>
            <div class="p-4 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl text-center shadow-lg">
                <div class="text-2xl md:text-3xl font-bold text-emerald-400">99%</div>
                <div class="text-xs md:text-sm text-gray-300 mt-1">Satisfaction Rate</div>
            </div>
        </div>
    </div>
</section>
</div>