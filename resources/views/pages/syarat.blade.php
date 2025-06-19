@extends('layouts.app')

@section('content')
    <div class="bg-slate-900 text-slate-200 min-h-screen antialiased">

        {{-- Hero Section --}}
        <section class="relative bg-gradient-to-br from-slate-900 via-slate-800/50 to-slate-900 text-white py-24 md:py-32">
            <div class="absolute inset-0 opacity-[0.03]">
                {{-- Optional: background pattern or subtle image --}}
                {{-- <img src="https://placehold.co/1920x1080/0F172A/1E293B?text=Pola+Abstrak+Halus" alt="Pola Latar Belakang Abstrak Slate" class="w-full h-full object-cover"> --}}
            </div>
            <div class="container mx-auto px-6 text-center relative z-10">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold mb-6 leading-tight tracking-tight">
                    Syarat dan <span class="text-sky-400">Ketentuan</span>
                </h1>
                <p class="text-lg md:text-xl mb-12 max-w-3xl mx-auto font-light text-slate-300">
                    Selamat datang di BEN-CONNECT. Mohon baca dengan saksama syarat dan ketentuan penggunaan platform resmi
                    untuk sinergi integrasi data di lingkungan Pemerintah Provinsi Bengkulu berikut ini.
                </p>
            </div>
        </section>

        {{-- Content Section --}}
        <section id="syarat-ketentuan-content" class="py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-6">
                <div class="bg-slate-800/60 backdrop-blur-lg p-8 md:p-12 rounded-2xl shadow-2xl ring-1 ring-slate-700/50">
                    <h2
                        class="text-2xl md:text-3xl font-bold text-slate-100 mb-10 md:mb-12 border-b border-slate-700 pb-6 text-center">
                        Detail Syarat dan Ketentuan Penggunaan BEN-CONNECT
                    </h2>

                    <div
                        class="grid md:grid-cols-2 md:gap-x-12 lg:gap-x-16 gap-y-10 md:gap-y-0 text-slate-300 leading-relaxed">
                        {{-- Kolom Kiri: Bagian Syarat --}}
                        <div class="space-y-6">
                            <h3
                                class="text-2xl xl:text-3xl font-semibold text-sky-400 mb-6 pb-2 border-b border-sky-400/30">
                                Syarat Penggunaan</h3>
                            <div class="space-y-5">
                                <div
                                    class="p-5 bg-slate-700/50 rounded-lg ring-1 ring-slate-600/70 hover:ring-sky-500/50 transition-all duration-300">
                                    <h4 class="text-lg font-medium text-slate-100 mb-2">Penerimaan Syarat</h4>
                                    <p class="text-sm">Dengan mengakses dan menggunakan BEN-CONNECT, Anda menyetujui untuk
                                        terikat dengan syarat dan ketentuan yang telah ditetapkan. Jika Anda tidak setuju
                                        dengan syarat-syarat ini, Anda tidak diperbolehkan menggunakan layanan ini.</p>
                                </div>
                                <div
                                    class="p-5 bg-slate-700/50 rounded-lg ring-1 ring-slate-600/70 hover:ring-sky-500/50 transition-all duration-300">
                                    <h4 class="text-lg font-medium text-slate-100 mb-2">Penggunaan Data Resmi</h4>
                                    <p class="text-sm">Semua data yang diintegrasikan melalui BEN-CONNECT merupakan data
                                        resmi dari Organisasi Perangkat Daerah (OPD) di lingkungan Pemerintah Provinsi
                                        Bengkulu. Pengguna diwajibkan menggunakan data sesuai dengan ketentuan hukum dan
                                        peraturan yang berlaku. Penggunaan data yang melanggar hukum atau tidak sah akan
                                        dikenakan tindakan sesuai dengan peraturan yang berlaku.</p>
                                </div>
                                <div
                                    class="p-5 bg-slate-700/50 rounded-lg ring-1 ring-slate-600/70 hover:ring-sky-500/50 transition-all duration-300">
                                    <h4 class="text-lg font-medium text-slate-100 mb-2">Hak Kekayaan Intelektual</h4>
                                    <p class="text-sm">Konten dan layanan di BEN-CONNECT merupakan milik Pemerintah Provinsi
                                        Bengkulu dan dilindungi oleh undang-undang hak cipta yang berlaku. Pengguna tidak
                                        diizinkan menyalin, mendistribusikan, atau memodifikasi konten tanpa izin tertulis
                                        dari Pemerintah Provinsi Bengkulu.</p>
                                </div>
                                <div
                                    class="p-5 bg-slate-700/50 rounded-lg ring-1 ring-slate-600/70 hover:ring-sky-500/50 transition-all duration-300">
                                    <h4 class="text-lg font-medium text-slate-100 mb-2">Kebijakan Privasi</h4>
                                    <p class="text-sm">Kami berkomitmen untuk melindungi privasi pengguna. Data pribadi yang
                                        dikumpulkan melalui BEN-CONNECT akan digunakan sesuai dengan kebijakan privasi kami,
                                        yang menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi
                                        pribadi Anda.</p>
                                </div>
                            </div>
                        </div>

                        {{-- Kolom Kanan: Bagian Ketentuan --}}
                        <div class="space-y-6">
                            <h3
                                class="text-2xl xl:text-3xl font-semibold text-sky-400 mb-6 pb-2 border-b border-sky-400/30">
                                Ketentuan Penggunaan</h3>
                            <div class="space-y-5">
                                <div
                                    class="p-5 bg-slate-700/50 rounded-lg ring-1 ring-slate-600/70 hover:ring-sky-500/50 transition-all duration-300">
                                    <h4 class="text-lg font-medium text-slate-100 mb-2">Keamanan Akun</h4>
                                    <p class="text-sm">Pengguna bertanggung jawab untuk menjaga kerahasiaan informasi akun
                                        mereka, termasuk kata sandi dan akses ke BEN-CONNECT. Pemerintah Provinsi Bengkulu
                                        tidak bertanggung jawab atas segala kerugian yang timbul dari akses yang tidak sah
                                        ke akun pengguna.</p>
                                </div>
                                <div
                                    class="p-5 bg-slate-700/50 rounded-lg ring-1 ring-slate-600/70 hover:ring-sky-500/50 transition-all duration-300">
                                    <h4 class="text-lg font-medium text-slate-100 mb-2">Batasan Tanggung Jawab</h4>
                                    <p class="text-sm">Pemerintah Provinsi Bengkulu tidak bertanggung jawab atas segala
                                        kerugian atau kerusakan yang diakibatkan oleh penggunaan atau ketidakmampuan untuk
                                        menggunakan BEN-CONNECT. Kami tidak menjamin bahwa layanan akan selalu bebas dari
                                        gangguan, kesalahan, atau virus.</p>
                                </div>
                                <div
                                    class="p-5 bg-slate-700/50 rounded-lg ring-1 ring-slate-600/70 hover:ring-sky-500/50 transition-all duration-300">
                                    <h4 class="text-lg font-medium text-slate-100 mb-2">Perubahan Ketentuan</h4>
                                    <p class="text-sm">Kami berhak untuk mengubah syarat dan ketentuan ini kapan saja tanpa
                                        pemberitahuan sebelumnya. Perubahan akan segera berlaku setelah dipublikasikan di
                                        situs ini. Pengguna disarankan untuk secara berkala meninjau halaman ini untuk
                                        mengetahui perubahan terbaru.</p>
                                </div>
                                <div
                                    class="p-5 bg-slate-700/50 rounded-lg ring-1 ring-slate-600/70 hover:ring-sky-500/50 transition-all duration-300">
                                    <h4 class="text-lg font-medium text-slate-100 mb-2">Hukum yang Berlaku</h4>
                                    <p class="text-sm">Syarat dan ketentuan ini diatur oleh hukum yang berlaku di Indonesia.
                                        Segala sengketa yang timbul sehubungan dengan penggunaan BEN-CONNECT akan
                                        diselesaikan sesuai dengan prosedur hukum yang berlaku di Indonesia.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 md:mt-16 pt-8 border-t border-slate-700">
                        <p class="text-slate-400 text-center text-sm">
                            Dengan mengakses dan menggunakan platform BEN-CONNECT, Anda menyatakan telah membaca, memahami,
                            dan menyetujui untuk terikat oleh seluruh syarat dan ketentuan yang tercantum di atas.
                        </p>
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
    </style>
@endpush
