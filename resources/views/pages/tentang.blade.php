@extends('layouts.app')

@section('content')
    <div class="bg-slate-900 text-slate-200 min-h-screen antialiased">

        {{-- Hero Section --}}
        <section class="relative bg-gradient-to-br from-slate-900 via-slate-800/50 to-slate-900 text-white py-24 md:py-36">
            <div class="absolute inset-0 opacity-[0.03]">
                {{-- Optional: background pattern or subtle image --}}
                {{-- <img src="https://placehold.co/1920x1080/0F172A/1E293B?text=Pola+Geometris+Halus" alt="Pola Latar Belakang Abstrak Slate" class="w-full h-full object-cover"> --}}
            </div>
            <div class="container mx-auto px-6 text-center relative z-10">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold mb-6 leading-tight tracking-tight">
                    Mengenal <span class="text-sky-400">BEN-CONNECT</span>
                </h1>
                <p class="text-lg md:text-xl mb-12 max-w-3xl mx-auto font-light text-slate-300">
                    Solusi digital terintegrasi untuk sinergi dan tata kelola data yang transformatif di Provinsi Bengkulu.
                </p>
                <a href="#apa-itu-ben-connect"
                    class="bg-sky-500 text-white font-semibold px-10 py-4 rounded-lg shadow-lg hover:bg-sky-600 focus:outline-none focus:ring-4 focus:ring-sky-300/70 transition duration-300 transform hover:scale-105 text-lg">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </section>

        {{-- Apa Itu BEN-CONNECT? --}}
        <section id="apa-itu-ben-connect" class="py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16 md:mb-24">
                    <span class="text-sm font-semibold text-sky-400 uppercase tracking-wider">Platform Digital
                        Terintegrasi</span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-100 mt-3 mb-5">Apa Itu BEN-CONNECT?
                    </h2>
                    <div class="w-28 h-1.5 bg-sky-400 mx-auto rounded-full"></div>
                    <p class="text-slate-400 md:text-lg max-w-3xl mx-auto mt-8 leading-relaxed">
                        BEN-CONNECT adalah platform digital revolusioner yang menyatukan data dari berbagai Organisasi
                        Perangkat Daerah (OPD) Provinsi Bengkulu ke dalam satu pusat kendali terpadu.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-12 md:gap-20 items-center">
                    <div class="order-2 md:order-1 group">
                        <img src="{{ asset('storage/images/gubernur.png') }}" alt="Ilustrasi Integrasi Data BEN-CONNECT"
                            class="rounded-xl shadow-2xl w-full h-auto object-cover aspect-video md:aspect-[4/3] transition-all duration-500 transform group-hover:scale-105">
                    </div>
                    <div class="order-1 md:order-2 space-y-8">
                        <p class="text-slate-300 leading-relaxed text-lg">
                            Kami hadir sebagai solusi inovatif untuk mempermudah akses, monitoring, dan pengelolaan data
                            lintas OPD, demi mewujudkan tata kelola pemerintahan yang lebih efektif, efisien, dan
                            transparan. Dengan BEN-CONNECT, Pemerintah Provinsi dapat:
                        </p>
                        <ul class="space-y-6">
                            <li class="flex items-start group">
                                <div
                                    class="flex-shrink-0 bg-slate-800 p-3.5 rounded-full mr-5 shadow-md transition-all duration-300 group-hover:bg-sky-500 group-hover:scale-110">
                                    <svg class="w-6 h-6 text-sky-400 transition-colors duration-300 group-hover:text-white"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 17.25l6-6m0 0l-6-6m6 6H3"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3
                                        class="font-semibold text-xl text-slate-100 group-hover:text-sky-400 transition-colors duration-300">
                                        Monitoring Kinerja Real-Time</h3>
                                    <p class="text-slate-400 mt-1.5">Memantau secara langsung kinerja berbagai instansi
                                        pemerintah.</p>
                                </div>
                            </li>
                            <li class="flex items-start group">
                                <div
                                    class="flex-shrink-0 bg-slate-800 p-3.5 rounded-full mr-5 shadow-md transition-all duration-300 group-hover:bg-sky-500 group-hover:scale-110">
                                    <svg class="w-6 h-6 text-sky-400 transition-colors duration-300 group-hover:text-white"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.75 5.25l7.5 7.5 7.5-7.5M4.75 13.25l7.5 7.5 7.5-7.5"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3
                                        class="font-semibold text-xl text-slate-100 group-hover:text-sky-400 transition-colors duration-300">
                                        Integrasi Data Komprehensif</h3>
                                    <p class="text-slate-400 mt-1.5">Menyatukan data dari sektor kesehatan, pendidikan,
                                        infrastruktur, dan lainnya.</p>
                                </div>
                            </li>
                            <li class="flex items-start group">
                                <div
                                    class="flex-shrink-0 bg-slate-800 p-3.5 rounded-full mr-5 shadow-md transition-all duration-300 group-hover:bg-sky-500 group-hover:scale-110">
                                    <svg class="w-6 h-6 text-sky-400 transition-colors duration-300 group-hover:text-white"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.5 6h9.75M10.5 12h9.75M10.5 18h9.75M3.75 6H6M3.75 12H6M3.75 18H6"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3
                                        class="font-semibold text-xl text-slate-100 group-hover:text-sky-400 transition-colors duration-300">
                                        Pengambilan Keputusan Cerdas</h3>
                                    <p class="text-slate-400 mt-1.5">Mendukung keputusan yang lebih cepat dan akurat
                                        berbasis data valid.</p>
                                </div>
                            </li>
                            <li class="flex items-start group">
                                <div
                                    class="flex-shrink-0 bg-slate-800 p-3.5 rounded-full mr-5 shadow-md transition-all duration-300 group-hover:bg-sky-500 group-hover:scale-110">
                                    <svg class="w-6 h-6 text-sky-400 transition-colors duration-300 group-hover:text-white"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7.5 8.25h9m-9 3.75h9m-9 3.75h9M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 17.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h3
                                        class="font-semibold text-xl text-slate-100 group-hover:text-sky-400 transition-colors duration-300">
                                        Pelaporan Publik Transparan</h3>
                                    <p class="text-slate-400 mt-1.5">Menyajikan informasi kinerja pemerintah secara terbuka
                                        kepada masyarakat.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- Visi & Misi Section --}}
        <section class="py-16 md:py-24 bg-gradient-to-br from-slate-900/70 via-slate-800/50 to-slate-900/70">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16 md:mb-24">
                    <span class="text-sm font-semibold text-sky-400 uppercase tracking-wider">Landasan & Tujuan</span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-100 mt-3 mb-5">Visi & Misi Kami</h2>
                    <div class="w-28 h-1.5 bg-sky-400 mx-auto rounded-full"></div>
                </div>
                <div
                    class="bg-slate-800/60 backdrop-blur-lg p-8 md:p-12 rounded-2xl shadow-2xl mb-16 ring-1 ring-slate-700/50">
                    <h3 class="text-center text-2xl md:text-3xl font-medium text-sky-300 italic mb-3">
                        "Bengkulu Maju, Religius, Sejahtera, dan Berkelanjutan."
                    </h3>
                    <p class="text-center text-slate-400">- Visi Provinsi Bengkulu -</p>
                </div>

                <h3 class="text-2xl md:text-3xl font-semibold text-slate-100 mb-12 text-center">Misi Utama BEN-CONNECT
                    Mendukung Visi Provinsi:</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    {{-- Misi Item --}}
                    <div
                        class="bg-slate-800/60 backdrop-blur-lg p-7 rounded-xl shadow-xl hover:shadow-sky-500/20 ring-1 ring-slate-700/50 hover:ring-sky-500/70 transition-all duration-300 transform hover:-translate-y-2 group">
                        <div class="flex items-center mb-5">
                            <span
                                class="bg-slate-700/80 text-sky-400 p-3.5 rounded-full mr-4 shadow-lg transition-all duration-300 group-hover:bg-sky-500 group-hover:text-white group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.25278C12 6.25278 6.73832 3.75417 3.75 8.25C0.761679 12.7458 8.25417 19.5083 12 21.75C15.7458 19.5083 23.2383 12.7458 20.25 8.25C17.2617 3.75417 12 6.25278 12 6.25278Z">
                                    </path>
                                </svg>
                            </span>
                            <h4
                                class="font-semibold text-xl text-slate-100 group-hover:text-sky-400 transition-colors duration-300">
                                Fondasi Religius & Kesejahteraan</h4>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed">Membangun Bengkulu berbasis religiusitas,
                            kesejahteraan sosial, dan keberlanjutan ekonomi.</p>
                    </div>
                    {{-- Misi Item --}}
                    <div
                        class="bg-slate-800/60 backdrop-blur-lg p-7 rounded-xl shadow-xl hover:shadow-sky-500/20 ring-1 ring-slate-700/50 hover:ring-sky-500/70 transition-all duration-300 transform hover:-translate-y-2 group">
                        <div class="flex items-center mb-5">
                            <span
                                class="bg-slate-700/80 text-sky-400 p-3.5 rounded-full mr-4 shadow-lg transition-all duration-300 group-hover:bg-sky-500 group-hover:text-white group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12.75L11.25 15L15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </span>
                            <h4
                                class="font-semibold text-xl text-slate-100 group-hover:text-sky-400 transition-colors duration-300">
                                Tata Kelola & SDM Unggul</h4>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed">Pemerintahan bersih, akuntabel, dan SDM
                            berlandaskan pengetahuan & teknologi.</p>
                    </div>
                    {{-- Misi Item --}}
                    <div
                        class="bg-slate-800/60 backdrop-blur-lg p-7 rounded-xl shadow-xl hover:shadow-sky-500/20 ring-1 ring-slate-700/50 hover:ring-sky-500/70 transition-all duration-300 transform hover:-translate-y-2 group">
                        <div class="flex items-center mb-5">
                            <span
                                class="bg-slate-700/80 text-sky-400 p-3.5 rounded-full mr-4 shadow-lg transition-all duration-300 group-hover:bg-sky-500 group-hover:text-white group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3.75 13.5l9-9m0 0l9 9m-9-9v12.75M3.75 13.5h16.5M3.75 13.5L3 18m18-4.5l.75 4.5M12 3v18">
                                    </path>
                                </svg>
                            </span>
                            <h4
                                class="font-semibold text-xl text-slate-100 group-hover:text-sky-400 transition-colors duration-300">
                                Infrastruktur & Layanan Publik</h4>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed">Percepatan kualitas jalan/jembatan, ambulans
                            gratis, UHC, dan fasilitas olahraga.</p>
                    </div>
                    {{-- Tambahkan Misi lainnya dengan format serupa --}}
                    <div
                        class="bg-slate-800/60 backdrop-blur-lg p-7 rounded-xl shadow-xl hover:shadow-sky-500/20 ring-1 ring-slate-700/50 hover:ring-sky-500/70 transition-all duration-300 transform hover:-translate-y-2 group">
                        <div class="flex items-center mb-5">
                            <span
                                class="bg-slate-700/80 text-sky-400 p-3.5 rounded-full mr-4 shadow-lg transition-all duration-300 group-hover:bg-sky-500 group-hover:text-white group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.75A.75.75 0 013 4.5h.75m0 0H21m-9 12.75h9m-9 3.75h9M3.75 4.5c0-1.036.84-1.875 1.875-1.875h13.5c1.035 0 1.875.84 1.875 1.875v10.5c0 1.035-.84 1.875-1.875 1.875h-13.5c-1.036 0-1.875-.84-1.875-1.875V4.5z">
                                    </path>
                                </svg>
                            </span>
                            <h4
                                class="font-semibold text-xl text-slate-100 group-hover:text-sky-400 transition-colors duration-300">
                                Ekonomi Masyarakat</h4>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed">Meringankan beban masyarakat, santunan anak
                            yatim, perkuat UMKM.</p>
                    </div>
                    <div
                        class="bg-slate-800/60 backdrop-blur-lg p-7 rounded-xl shadow-xl hover:shadow-sky-500/20 ring-1 ring-slate-700/50 hover:ring-sky-500/70 transition-all duration-300 transform hover:-translate-y-2 group">
                        <div class="flex items-center mb-5">
                            <span
                                class="bg-slate-700/80 text-sky-400 p-3.5 rounded-full mr-4 shadow-lg transition-all duration-300 group-hover:bg-sky-500 group-hover:text-white group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z">
                                    </path>
                                </svg>
                            </span>
                            <h4
                                class="font-semibold text-xl text-slate-100 group-hover:text-sky-400 transition-colors duration-300">
                                Kesejahteraan Petani & Nelayan</h4>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed">Bantuan bibit, peralatan, stabilitas harga, pusat
                            pengolahan agropolitan.</p>
                    </div>
                    <div
                        class="bg-slate-800/60 backdrop-blur-lg p-7 rounded-xl shadow-xl hover:shadow-sky-500/20 ring-1 ring-slate-700/50 hover:ring-sky-500/70 transition-all duration-300 transform hover:-translate-y-2 group">
                        <div class="flex items-center mb-5">
                            <span
                                class="bg-slate-700/80 text-sky-400 p-3.5 rounded-full mr-4 shadow-lg transition-all duration-300 group-hover:bg-sky-500 group-hover:text-white group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h6.75M9 12h6.75M9 17.25h6.75M12 21V3">
                                    </path>
                                </svg>
                            </span>
                            <h4
                                class="font-semibold text-xl text-slate-100 group-hover:text-sky-400 transition-colors duration-300">
                                Pemberdayaan Desa & Hilirisasi</h4>
                        </div>
                        <p class="text-slate-400 text-sm leading-relaxed">Penguatan BUMDes, desa wisata, one village-one
                            product, dan hilirisasi berkelanjutan.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Keunggulan BEN-CONNECT --}}
        <section class="py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16 md:mb-24">
                    <span class="text-sm font-semibold text-sky-400 uppercase tracking-wider">Nilai Lebih Kami</span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-100 mt-3 mb-5">Keunggulan BEN-CONNECT
                    </h2>
                    <div class="w-28 h-1.5 bg-sky-400 mx-auto rounded-full"></div>
                    <p class="text-slate-400 md:text-lg max-w-3xl mx-auto mt-8 leading-relaxed">Platform kami dirancang
                        dengan berbagai keunggulan untuk mendukung kinerja pemerintah daerah secara optimal.</p>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div
                        class="bg-slate-800 p-8 rounded-xl shadow-xl hover:bg-slate-700/70 ring-1 ring-slate-700/50 hover:ring-sky-500/70 transition-all duration-300 ease-in-out transform hover:scale-105 hover:-translate-y-1.5 group">
                        <div
                            class="bg-sky-500 text-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-8 shadow-lg transition-all duration-300 group-hover:scale-110 group-hover:shadow-sky-500/40">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3
                            class="text-xl font-semibold text-slate-100 mb-3 text-center group-hover:text-sky-400 transition-colors duration-300">
                            Monitoring Real-Time</h3>
                        <p class="text-slate-400 text-sm text-center leading-relaxed">Pemantauan efektif aktivitas OPD
                            secara langsung dan berkelanjutan.</p>
                    </div>
                    <div
                        class="bg-slate-800 p-8 rounded-xl shadow-xl hover:bg-slate-700/70 ring-1 ring-slate-700/50 hover:ring-sky-500/70 transition-all duration-300 ease-in-out transform hover:scale-105 hover:-translate-y-1.5 group">
                        <div
                            class="bg-sky-500 text-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-8 shadow-lg transition-all duration-300 group-hover:scale-110 group-hover:shadow-sky-500/40">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3
                            class="text-xl font-semibold text-slate-100 mb-3 text-center group-hover:text-sky-400 transition-colors duration-300">
                            Data Akurat & Terpercaya</h3>
                        <p class="text-slate-400 text-sm text-center leading-relaxed">Data resmi dari sumber valid,
                            menjamin akurasi dan validitas informasi.</p>
                    </div>
                    <div
                        class="bg-slate-800 p-8 rounded-xl shadow-xl hover:bg-slate-700/70 ring-1 ring-slate-700/50 hover:ring-sky-500/70 transition-all duration-300 ease-in-out transform hover:scale-105 hover:-translate-y-1.5 group">
                        <div
                            class="bg-sky-500 text-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-8 shadow-lg transition-all duration-300 group-hover:scale-110 group-hover:shadow-sky-500/40">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <h3
                            class="text-xl font-semibold text-slate-100 mb-3 text-center group-hover:text-sky-400 transition-colors duration-300">
                            Transparansi Publik</h3>
                        <p class="text-slate-400 text-sm text-center leading-relaxed">Akses mudah informasi kinerja
                            pemerintah bagi masyarakat luas.</p>
                    </div>
                    <div
                        class="bg-slate-800 p-8 rounded-xl shadow-xl hover:bg-slate-700/70 ring-1 ring-slate-700/50 hover:ring-sky-500/70 transition-all duration-300 ease-in-out transform hover:scale-105 hover:-translate-y-1.5 group">
                        <div
                            class="bg-sky-500 text-white rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-8 shadow-lg transition-all duration-300 group-hover:scale-110 group-hover:shadow-sky-500/40">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3
                            class="text-xl font-semibold text-slate-100 mb-3 text-center group-hover:text-sky-400 transition-colors duration-300">
                            Kolaborasi Antar OPD</h3>
                        <p class="text-slate-400 text-sm text-center leading-relaxed">Mendorong kerja sama solid antar
                            instansi dalam berbagi data dan informasi.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Tim Kami & Komitmen --}}
        <section class="py-16 md:py-24 bg-gradient-to-b from-slate-800/80 via-slate-900 to-slate-900">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16 md:mb-24">
                    <span class="text-sm font-semibold text-sky-400 uppercase tracking-wider">Pengembang & Dedikasi</span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-100 mt-3 mb-5">Tim Kami & Komitmen
                    </h2>
                    <div class="w-28 h-1.5 bg-sky-400 mx-auto rounded-full"></div>
                </div>
                <div
                    class="max-w-4xl mx-auto bg-slate-800/60 backdrop-blur-lg p-8 md:p-12 rounded-2xl shadow-2xl ring-1 ring-slate-700/50">
                    <p class="text-slate-300 text-lg mb-6 leading-relaxed text-center">
                        BEN-CONNECT dengan bangga dikembangkan oleh <strong class="text-sky-400 font-semibold">Dinas
                            Komunikasi,
                            Informatika, dan Statistik Provinsi Bengkulu</strong>. Kami didukung oleh tim ahli teknologi
                        informasi dan pakar data yang berdedikasi, baik dari sektor publik maupun swasta.
                    </p>
                    <p class="text-slate-300 text-lg mb-10 leading-relaxed text-center">
                        Komitmen kami adalah mewujudkan layanan digital terbaik yang mudah diakses dan bermanfaat bagi semua
                        pemangku kepentingan. Melalui BEN-CONNECT, kami bertekad membangun fondasi pemerintahan yang lebih
                        baik, transparan, dan responsif di Provinsi Bengkulu, dengan data sebagai pilar utama dalam setiap
                        pengambilan keputusan.
                    </p>
                    <div class="text-center mt-10">
                        <p class="text-slate-400 mb-4 text-base">
                            Punya pertanyaan atau ingin tahu lebih lanjut?
                        </p>
                        <a href="#" {{-- Ganti # dengan link kontak Anda --}}
                            class="inline-block bg-sky-500 text-white font-semibold px-10 py-4 rounded-lg shadow-lg hover:bg-sky-600 focus:outline-none focus:ring-4 focus:ring-sky-300/70 transition duration-300 transform hover:scale-105 text-lg">
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection

@push('styles')
    <style>
        /* Tambahan style jika diperlukan, misalnya untuk font custom */
        /* @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap'); */
        /* body { font-family: 'Inter', sans-serif; } */

        /* Efek hover halus untuk kartu misi */
        .transform.hover\\:-translate-y-1:hover {
            transform: translateY(-0.25rem);
        }

        .transform.hover\\:-translate-y-1\\.5:hover {
            /* Custom class for Keunggulan cards */
            transform: translateY(-0.375rem);
        }

        .transform.hover\\:-translate-y-2:hover {
            transform: translateY(-0.5rem);
            /* Sedikit lebih tinggi untuk kartu misi */
        }

        .transition-shadow.duration-300:hover {
            transition-property: box-shadow;
        }

        .transition-all.duration-300:hover {
            transition-property: all;
        }
    </style>
@endpush
