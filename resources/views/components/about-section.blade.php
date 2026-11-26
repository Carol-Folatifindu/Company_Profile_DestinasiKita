<div>
    <section class="py-16 md:py-24 bg-white">
    <div class="max-w-screen-xl px-4 mx-auto lg:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Kolom Kiri: 4 Gambar (Grid Layout dengan sudut melengkung) -->
            <div class="lg:col-span-6 grid grid-cols-2 gap-4">
                <div class="space-y-4">
                    <img src="{{ asset('assets/about1.jpg') }}" alt="Destination 1" class="w-full h-64 object-cover rounded-3xl shadow-sm">
                    <img src="{{ asset('assets/about2.jpg') }}" alt="Destination 2" class="w-full h-48 object-cover rounded-3xl shadow-sm">
                </div>
                <div class="space-y-4 pt-8">
                    <img src="{{ asset('assets/about3.jpg') }}" alt="Destination 3" class="w-full h-48 object-cover rounded-3xl shadow-sm">
                    <img src="{{ asset('assets/about4.jpg') }}" alt="Destination 4" class="w-full h-64 object-cover rounded-3xl shadow-sm">
                </div>
            </div>

            <!-- Kolom Kanan: Teks, Visi Misi, & Tim -->
            <div class="lg:col-span-6">
                
                <!-- Badge Atas -->
                <div class="inline-flex items-center px-3.5 py-1.5 mb-4 text-xs md:text-sm font-medium text-emerald-600 bg-emerald-50 rounded-full border border-emerald-100">
                    <svg class="w-4 h-4 mr-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                    </svg>
                    About Destinasi Kita Travel
                </div>

                <!-- Judul Utama -->
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 md:text-4xl leading-tight">
                    Crafting Extraordinary Journeys Across Indonesia & Beyond
                </h2>

                <!-- Deskripsi -->
                <p class="mb-8 text-gray-500 text-base md:text-lg font-light leading-relaxed">
                    Founded in Jakarta with a passion for authentic exploration, Destinasi Kita Travel bridges the gap between breathtaking global destinations and curious travelers. With over 10 years of professional expertise, we pride ourselves on providing meticulous trip planning, luxury accommodations, and local insights that generic tours miss.
                </p>

                <!-- Visi & Misi (Kotak Putih dengan Border Halus) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                    <!-- Visi -->
                    <div class="p-6 bg-white rounded-3xl border border-gray-100 shadow-sm">
                        <div class="w-10 h-10 mb-3 flex items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </div>
                        <h3 class="text-base font-bold text-gray-900 mb-2">Our Vision</h3>
                        <p class="text-xs md:text-sm text-gray-500 font-light leading-relaxed">To be the most trusted and innovative travel agency empowering travelers to connect deeply with world cultures and nature.</p>
                    </div>

                    <!-- Misi -->
                    <div class="p-6 bg-white rounded-3xl border border-gray-100 shadow-sm">
                        <div class="w-10 h-10 mb-3 flex items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <h3 class="text-base font-bold text-gray-900 mb-2">Our Mission</h3>
                        <p class="text-xs md:text-sm text-gray-500 font-light leading-relaxed">Delivering seamless, memorable, and sustainable travel itineraries with exceptional customer care at every step.</p>
                    </div>
                </div>

                <!-- Certified Professional Team -->
                <div class="flex items-center space-x-4 pt-4 border-t border-gray-100">
                    <div class="flex -space-x-3 overflow-hidden">
                        <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white object-cover" src="{{  asset('assets/member1.jpeg')  }}" alt="Team member">
                        <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white object-cover" src="{{  asset('assets/member2.jpeg')  }}" alt="Team member">
                        <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white object-cover" src="{{  asset('assets/member3.jpeg')  }}" alt="Team member">
                        <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white object-cover" src="{{  asset('assets/member4.jpeg')  }}" alt="Team member">
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-gray-900">Certified Professional Team</h4>
                        <p class="text-xs text-gray-500 font-light">Multilingual tour guides & logistics experts</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>