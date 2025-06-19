@extends('layouts.app')

@section('content')
    <div class="bg-slate-900 text-slate-200 min-h-screen antialiased">

        {{-- Header Section --}}
        <section class="py-20 md:py-28 bg-gradient-to-br from-slate-900 via-slate-800/40 to-slate-900">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <span class="text-base font-semibold text-sky-400 uppercase tracking-wider">Direktori Resmi</span>
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-slate-100 mt-3 mb-5 tracking-tight">
                    Organisasi Perangkat Daerah
                </h1>
                <div class="w-32 h-1.5 bg-sky-400 mx-auto rounded-full"></div>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto mt-8 leading-relaxed">
                    Temukan informasi mengenai berbagai Organisasi Perangkat Daerah (OPD) yang beroperasi di lingkungan
                    Pemerintah Provinsi Bengkulu.
                </p>
            </div>
        </section>

        {{-- Filter/Search Bar and OPD Grid Section --}}
        <section class="py-16 md:py-20">
            <div class="max-w-7xl mx-auto px-6">
                <div class="mb-12 md:mb-16 max-w-2xl mx-auto">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" id="opdSearchInput" placeholder="Ketik untuk mencari nama OPD..."
                            class="w-full p-4 pl-14 bg-slate-800 border border-slate-700 rounded-full text-slate-100 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500 transition duration-300 shadow-lg text-base">
                    </div>
                </div>

                {{-- OPD Data Grid --}}
                <div id="opdGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @php
                        // Sample Data - In a real application, this would come from your controller
                        $opds = [
                            [
                                'id' => 1,
                                'nama' => 'Dinas Kesehatan',
                                'initial' => 'DK',
                                'logo_url' => null,
                                'deskripsi' =>
                                    'Bertanggung jawab atas pelayanan dan kebijakan kesehatan masyarakat di Provinsi Bengkulu.',
                                'url_opd' => 'https://dinkes.bengkuluprov.go.id',
                            ],
                            [
                                'id' => 2,
                                'nama' => 'Dinas Pendidikan dan Kebudayaan',
                                'initial' => 'DPK',
                                'logo_url' => 'https://placehold.co/128x128/3B82F6/FFFFFF?text=DPK&font=inter',
                                'deskripsi' =>
                                    'Mengelola urusan pendidikan mulai dari tingkat dasar hingga menengah serta pelestarian kebudayaan daerah.',
                                'url_opd' => '#',
                            ],
                            [
                                'id' => 3,
                                'nama' => 'Dinas Pekerjaan Umum dan Penataan Ruang',
                                'initial' => 'PUPR',
                                'logo_url' => null,
                                'deskripsi' =>
                                    'Melaksanakan urusan pemerintahan di bidang pekerjaan umum, perumahan rakyat, dan penataan ruang.',
                                'url_opd' => '#',
                            ],
                            [
                                'id' => 4,
                                'nama' => 'Dinas Sosial',
                                'initial' => 'DS',
                                'logo_url' => 'https://placehold.co/128x128/EF4444/FFFFFF?text=DS&font=inter',
                                'deskripsi' =>
                                    'Menangani permasalahan sosial, bantuan sosial, dan pemberdayaan masyarakat.',
                                'url_opd' => 'https://dinsos.bengkuluprov.go.id',
                            ],
                            [
                                'id' => 5,
                                'nama' => 'Badan Perencanaan Pembangunan Daerah',
                                'initial' => 'BAPPEDA',
                                'logo_url' => null,
                                'deskripsi' =>
                                    'Merumuskan dan mengkoordinasikan kebijakan perencanaan pembangunan daerah jangka panjang dan menengah.',
                                'url_opd' => '#',
                            ],
                            [
                                'id' => 6,
                                'nama' => 'Dinas Kependudukan dan Pencatatan Sipil',
                                'initial' => 'DUKCAPIL',
                                'logo_url' => 'https://placehold.co/128x128/10B981/FFFFFF?text=DUKCAPIL&font=inter',
                                'deskripsi' =>
                                    'Melayani administrasi kependudukan dan pencatatan sipil bagi seluruh warga.',
                                'url_opd' => '#',
                            ],
                        ];

                        function getDynamicInitialColorDark($name)
                        {
                            $hash = crc32($name);
                            $colors = [
                                'bg-sky-600',
                                'bg-indigo-600',
                                'bg-emerald-600',
                                'bg-rose-600',
                                'bg-amber-600',
                                'bg-teal-600',
                                'bg-purple-600',
                                'bg-pink-600',
                                'bg-cyan-600',
                                'bg-lime-600',
                            ];
                            return $colors[abs($hash) % count($colors)];
                        }
                    @endphp

                    @forelse ($opds as $opd)
                        <div
                            class="opd-card bg-slate-800/60 backdrop-blur-lg rounded-xl shadow-2xl overflow-hidden transition-all duration-300 ease-in-out hover:shadow-sky-500/25 ring-1 ring-slate-700/50 hover:ring-sky-500/60 hover:transform hover:-translate-y-2 flex flex-col">
                            <div class="p-6 flex-grow">
                                <div class="flex items-center mb-5">
                                    @if ($opd['logo_url'])
                                        <img src="{{ $opd['logo_url'] }}" alt="Logo {{ $opd['nama'] }}"
                                            class="flex-shrink-0 h-16 w-16 rounded-lg object-contain mr-5 border-2 border-slate-600/50 p-0.5 shadow-md bg-slate-700/50"
                                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                        <div class="flex-shrink-0 h-16 w-16 rounded-lg {{ getDynamicInitialColorDark($opd['nama']) }} hidden items-center justify-center text-white font-bold text-2xl mr-5 shadow-lg p-1 leading-none"
                                            style="display:none;">
                                            {{ $opd['initial'] }}
                                        </div>
                                    @else
                                        <div
                                            class="flex-shrink-0 h-16 w-16 rounded-lg {{ getDynamicInitialColorDark($opd['nama']) }} flex items-center justify-center text-white font-bold text-2xl mr-5 shadow-lg p-1 leading-none">
                                            {{ $opd['initial'] }}
                                        </div>
                                    @endif
                                    <div class="flex-grow">
                                        <h3 class="text-xl font-semibold text-sky-400 leading-tight group-hover:text-sky-300 transition-colors duration-300"
                                            title="{{ $opd['nama'] }}">
                                            {{ $opd['nama'] }}
                                        </h3>
                                    </div>
                                </div>

                                <p class="text-slate-400 text-sm leading-relaxed line-clamp-4 mb-5">
                                    {{ $opd['deskripsi'] ?? 'Deskripsi untuk OPD ini belum tersedia.' }}
                                </p>
                            </div>
                            @if (isset($opd['url_opd']) && $opd['url_opd'] && $opd['url_opd'] !== '#')
                                <div class="bg-slate-700/70 px-6 py-4 border-t border-slate-700/50">
                                    <a href="{{ $opd['url_opd'] }}" target="_blank" rel="noopener noreferrer"
                                        class="inline-flex items-center justify-center w-full px-4 py-2.5 bg-sky-500 text-white font-medium text-sm rounded-md hover:bg-sky-600 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-sky-400 focus:ring-offset-2 focus:ring-offset-slate-800 shadow-md hover:shadow-lg">
                                        Kunjungi Website
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>
                                    </a>
                                </div>
                            @endif
                        </div> {{-- End of .opd-card --}}
                    @empty
                        <div id="initialNoDataMessage"
                            class="col-span-full text-center py-20 bg-slate-800/60 backdrop-blur-lg rounded-2xl shadow-2xl ring-1 ring-slate-700/50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-slate-500 mx-auto mb-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            <p class="text-2xl text-slate-300 font-semibold">Belum Ada Data OPD</p>
                            <p class="text-slate-400 mt-3">Informasi mengenai Organisasi Perangkat Daerah akan segera
                                ditampilkan di sini.</p>
                        </div>
                    @endforelse {{-- End of @forelse ($opds as $opd) --}}

                    {{-- Placeholder for "No Search Results" message --}}
                    <div id="noSearchResultsMessage"
                        class="col-span-full text-center py-20 bg-slate-800/60 backdrop-blur-lg rounded-2xl shadow-2xl ring-1 ring-slate-700/50"
                        style="display: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-slate-500 mx-auto mb-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <p class="text-2xl text-slate-300 font-semibold">OPD Tidak Ditemukan</p>
                        <p class="text-slate-400 mt-3">Tidak ada OPD yang cocok dengan pencarian Anda. Silakan coba kata
                            kunci lain.</p>
                    </div>
                </div> {{-- End of #opdGrid --}}
            </div> {{-- End of .max-w-7xl --}}
        </section> {{-- End of Filter/Search Bar and OPD Grid Section --}}
    </div> {{-- End of .bg-slate-900 --}}
@endsection {{-- End of @section content --}}

@push('scripts')
    <style>
        /* For line-clamp functionality */
        .line-clamp-4 {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // console.log("Halaman Data OPD Publik (Dark Mode) dimuat."); // Dihapus karena tidak esensial

            const searchInput = document.getElementById('opdSearchInput');
            const opdGrid = document.getElementById('opdGrid');
            const opdCards = opdGrid ? opdGrid.querySelectorAll('.opd-card') : [];

            const initialNoDataMessage = document.getElementById('initialNoDataMessage');
            const noSearchResultsMessage = document.getElementById('noSearchResultsMessage');

            if (searchInput && opdGrid) {
                searchInput.addEventListener('input', function(event) {
                    const searchTerm = event.target.value.toLowerCase().trim();
                    let visibleCards = 0;

                    opdCards.forEach(card => {
                        const opdNameElement = card.querySelector('h3');
                        const opdName = opdNameElement ? opdNameElement.textContent.toLowerCase() :
                            '';

                        if (opdName.includes(searchTerm)) {
                            card.style.display = 'flex';
                            visibleCards++;
                        } else {
                            card.style.display = 'none';
                        }
                    });

                    if (initialNoDataMessage) {
                        initialNoDataMessage.style.display = 'none';
                    }

                    if (noSearchResultsMessage) {
                        if (visibleCards === 0 && opdCards.length > 0 && searchTerm !== '') {
                            noSearchResultsMessage.style.display = 'block';
                        } else {
                            noSearchResultsMessage.style.display = 'none';
                        }
                    }

                    if (searchTerm === '' && opdCards.length > 0) {
                        opdCards.forEach(card => card.style.display = 'flex');
                        if (noSearchResultsMessage) {
                            noSearchResultsMessage.style.display = 'none';
                        }
                    } else if (searchTerm === '' && opdCards.length === 0 && initialNoDataMessage) {
                        initialNoDataMessage.style.display = 'block';
                        if (noSearchResultsMessage) {
                            noSearchResultsMessage.style.display = 'none';
                        }
                    }
                });
            }
        });
    </script>
@endpush {{-- End of @push scripts --}}
