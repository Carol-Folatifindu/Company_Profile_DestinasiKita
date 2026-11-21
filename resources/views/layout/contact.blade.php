<div>
@extends('layout.homepage')

@section('title', 'Hubungi Kami - DestinasiKita')

@section('content')
<div class="min-h-screen bg-slate-50 pb-20">
    
    <!-- Header Banner (Warna Solid / Tanpa Gradasi) -->
    <div class="bg-emerald-400 text-white pt-28 pb-20 px-4 sm:px-6 lg:px-8 text-center shadow-md">
        <div class="max-w-4xl mx-auto space-y-2">
            <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Hubungi Kami</h1>
            <p class="text-sm sm:text-base text-emerald-100">Di mana pun Anda berada, kami dapat terhubung hanya dengan satu klik!</p>
        </div>
    </div>

    <!-- Main Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10">
        
        <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-slate-200 mb-10 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="space-y-1 text-center md:text-left">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-400">Bantuan Cepat</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900">Halo, Bagaimanakah kami dapat membantumu?</h2>
            </div>
        </div>

        <!-- Split Layout: Info Kontak di Kiri & Form Inquiry di Kanan -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start mb-12">
            
            <!-- Kolom Kiri: Informasi Kantor & Kontak Langsung -->
            <div class="lg:col-span-5 space-y-6">
                <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-slate-200 space-y-6">
                    <h3 class="text-lg font-bold text-slate-900">Informasi & Kantor Kami</h3>
                    
                    <!-- Head Office -->
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-emerald-400 text-white rounded-xl flex items-center justify-center text-sm shrink-0 shadow-sm">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd"/>
</svg>

                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm">Head Office</h4>
                            <p class="text-xs text-slate-600 mt-0.5 leading-relaxed">Jl. Jend. Sudirman Kav. 52-53, SCBD, Jakarta Selatan 12190</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-emerald-400 text-white rounded-xl flex items-center justify-center text-sm shrink-0 shadow-sm">
                            <!-- Icons WhatsApp -->
                            <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                              <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                              <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm">Phone / WhatsApp</h4>
                            <p class="text-xs text-slate-600 mt-0.5">+62 21 5558 9900 / +62 838-6896-819</p>
                        </div>
                    </div>

                    <!-- Email Address -->
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-emerald-400 text-white rounded-xl flex items-center justify-center text-sm shrink-0 shadow-sm">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path d="M2.038 5.61A2.01 2.01 0 0 0 2 6v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-.12-.01-.238-.03-.352l-.866.65-7.89 6.032a2 2 0 0 1-2.429 0L2.884 6.288l-.846-.677Z"/>
  <path d="M20.677 4.117A1.996 1.996 0 0 0 20 4H4c-.225 0-.44.037-.642.105l.758.607L12 10.742 19.9 4.7l.777-.583Z"/>
</svg>

                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm">Email Kami</h4>
                            <p class="text-xs text-slate-600 mt-0.5">support@destinasikita.com</p>
                        </div>
                    </div>

                    <!-- Working Hours -->
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-emerald-400 text-white rounded-xl flex items-center justify-center text-sm shrink-0 shadow-sm">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
</svg>

                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm">Working Hours</h4>
                            <p class="text-xs text-slate-600 mt-0.5">Senin - Jumat: 08.00 - 18.00 WIB<br>Sabtu: 09.00 - 15.00 WIB</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Send Us an Inquiry Form -->
            <div class="lg:col-span-7">
                <div class="bg-white rounded-3xl p-8 sm:p-10 shadow-sm border border-slate-200">
                    <h3 class="text-xl font-bold text-slate-900 mb-6">Suggestions & Input</h3>
                    
                    <form action="#" method="POST" class="space-y-5">
                        @csrf
                        
                        <!-- Nama & Email -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Full Name</label>
                                <input type="text" required placeholder="Your Name" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 focus:outline-none focus:border-emerald-600 focus:bg-white transition">
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Email Address</label>
                                <input type="email" required placeholder="Name@email.com" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 focus:outline-none focus:border-emerald-600 focus:bg-white transition">
                            </div>
                        </div>

                        <!-- Destinasi & Traveler -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Destination / Package</label>
                                <select class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 focus:outline-none focus:border-emerald-600 focus:bg-white transition">
                                    <option>Bali Cultural & Beach Escape</option>
                                    <option>Raja Ampat Island Paradise</option>
                                    <option>Japan Cherry Blossom Tour</option>
                                    <option>Custom Tour Itinerary</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Estimated Travelers</label>
                                <input type="number" min="1" value="2" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 focus:outline-none focus:border-emerald-600 focus:bg-white transition">
                            </div>
                        </div>

                        <!-- Pesan -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Message & Special Requests</label>
                            <textarea rows="4" required placeholder="Ceritakan preferensi liburan, tanggal, atau permintaan khusus Anda..." class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 focus:outline-none focus:border-emerald-600 focus:bg-white transition"></textarea>
                        </div>

                        <!-- Tombol Submit -->
                        <button type="submit" class="w-full bg-emerald-400 hover:bg-emerald-400 text-white font-bold py-3.5 rounded-xl shadow-md transition text-sm flex items-center justify-center space-x-2">
                            <span>Send Inquiry Message</span>
                            <i class="fa-solid fa-paper-plane text-xs"></i>
                        </button>
                    </form>
                </div>
            </div>

        </div>

        <!-- Consumer Protection Footer Note -->
        <div class="text-center text-xs text-slate-500 space-y-1 pt-6 border-t border-slate-200">
            <p class="font-semibold text-slate-700">Customer Complaints</p>
            <p>Layanan Pengaduan Konsumen Kementerian Perdagangan</p>
            <p>WhatsApp No: +62 853-1111-1010</p>
        </div>

    </div>
</div>
@endsection
</div>
