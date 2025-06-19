@extends('layouts.app')

@section('content')
    <section id="home" class="relative min-h-screen flex items-center justify-center text-center overflow-hidden">
        <div class="hero-video-container">
            {{-- Background gradient overlay for the video --}}
            <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-slate-800 to-emerald-900 opacity-75 z-0"></div>
            <video autoplay loop muted playsinline class="hero-video" poster="placeholder-poster.jpg">
                <source src="{{ asset('storage/videos/video-hero.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            {{-- Subtle overlay on top of the video for better text legibility --}}
            <div class="hero-overlay"></div>
        </div>

        <div class="max-w-6xl mx-auto px-6 relative z-10 slide-in">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-500/10 border border-emerald-500/30 mb-8">
                <div class="w-2 h-2 rounded-full bg-emerald-400 realtime-indicator-animated"></div>
                <span class="text-emerald-300 font-medium text-xs tracking-wide">Provinsi Bengkulu dalam Real-time
                    Data</span>
            </div>

            <h1 class="text-4xl md:text-6xl font-light mb-6 tracking-tight leading-tight">
                <span class="font-semibold text-slate-100">BEN-Connect</span><br>
                <span class="text-slate-300 text-xl md:text-2xl">Pusat Data Pelayanan Dasar</span>
            </h1>

            <p class="text-md text-slate-300 mb-12 max-w-3xl mx-auto font-light leading-relaxed">
                Akses data pelayanan dasar dari berbagai instansi pemerintah di Provinsi Bengkulu secara realtime.
                Informasi terkini mengenai kesehatan, pendidikan, infrastruktur, dan layanan administratif dalam satu
                platform terintegrasi.
            </p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 mb-12 max-w-3xl mx-auto">
                {{-- Simplified stat card style --}}
                <div class="stat-card bg-slate-800/50 border border-slate-700/50 p-4 rounded-xl text-center shadow-md">
                    <div class="text-3xl font-semibold text-emerald-400 mb-1">24/7</div>
                    <div class="text-sm text-slate-400">Akses Data</div>
                </div>
                <div class="stat-card bg-slate-800/50 border border-slate-700/50 p-4 rounded-xl text-center shadow-md">
                    <div class="text-3xl font-semibold text-sky-400 mb-1">15+</div>
                    <div class="text-sm text-slate-400">Instansi OPD</div>
                </div>
                <div class="stat-card bg-slate-800/50 border border-slate-700/50 p-4 rounded-xl text-center shadow-md">
                    <div class="text-3xl font-semibold text-violet-400 mb-1">Real-time</div>
                    <div class="text-sm text-slate-400">Update Data</div>
                </div>
                <div class="stat-card bg-slate-800/50 border border-slate-700/50 p-4 rounded-xl text-center shadow-md">
                    <div class="text-3xl font-semibold text-orange-400 mb-1">Secure</div>
                    <div class="text-sm text-slate-400">Data Access</div>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                {{-- Primary button with elegant styling --}}
                <button
                    class="btn-primary bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-8 py-3 rounded-lg shadow-sm hover:shadow-md transition-all duration-300 ease-in-out hover-lift">
                    Akses Dashboard
                </button>
                {{-- Secondary (ghost) button style --}}
                <button
                    class="px-8 py-3 bg-slate-700/30 border border-slate-600 text-slate-200 rounded-lg font-medium hover:bg-slate-600/50 transition-all duration-300 ease-in-out hover-lift">
                    Panduan Penggunaan
                </button>
            </div>
        </div>
    </section>

    <section id="services" class="py-20 bg-slate-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-sky-500/10 border border-sky-500/30 mb-6">
                    <svg class="w-5 h-5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <span class="text-sky-300 text-sm font-medium tracking-wide">Layanan Terintegrasi</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-semibold mb-5 text-slate-100">
                    Kategori Pelayanan Dasar
                </h2>
                <p class="text-slate-400 text-lg max-w-2xl mx-auto font-light">
                    Akses lengkap ke berbagai layanan publik Provinsi Bengkulu dalam satu platform.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                {{-- Service card with refined styling --}}
                <div
                    class="service-card bg-slate-800/60 border border-slate-700/50 p-6 rounded-xl hover-lift group cursor-pointer shadow-lg transition-all duration-300 ease-in-out hover:border-emerald-500/50">
                    <div
                        class="service-icon w-14 h-14 bg-red-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-red-500/20 transition-colors duration-300">
                        <svg class="w-7 h-7 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-100 mb-3">Kesehatan</h3>
                    <p class="text-slate-400 text-sm mb-4 leading-relaxed">Data rumah sakit, puskesmas, ketersediaan obat,
                        dan layanan kesehatan masyarakat.</p>
                    <div class="flex items-center gap-2 text-red-400 text-xs font-medium">
                        <div class="w-2 h-2 rounded-full bg-red-400 realtime-indicator-animated"></div>
                        <span>Live Updates</span>
                    </div>
                </div>

                <div
                    class="service-card bg-slate-800/60 border border-slate-700/50 p-6 rounded-xl hover-lift group cursor-pointer shadow-lg transition-all duration-300 ease-in-out hover:border-sky-500/50">
                    <div
                        class="service-icon w-14 h-14 bg-sky-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-sky-500/20 transition-colors duration-300">
                        <svg class="w-7 h-7 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-100 mb-3">Pendidikan</h3>
                    <p class="text-slate-400 text-sm mb-4 leading-relaxed">Informasi sekolah, universitas, beasiswa, dan
                        program pendidikan daerah.</p>
                    <div class="flex items-center gap-2 text-sky-400 text-xs font-medium">
                        <div class="w-2 h-2 rounded-full bg-sky-400 realtime-indicator-animated"></div>
                        <span>Live Updates</span>
                    </div>
                </div>

                <div
                    class="service-card bg-slate-800/60 border border-slate-700/50 p-6 rounded-xl hover-lift group cursor-pointer shadow-lg transition-all duration-300 ease-in-out hover:border-teal-500/50">
                    <div
                        class="service-icon w-14 h-14 bg-teal-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-teal-500/20 transition-colors duration-300">
                        <svg class="w-7 h-7 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-100 mb-3">Infrastruktur</h3>
                    <p class="text-slate-400 text-sm mb-4 leading-relaxed">Status jalan, jembatan, transportasi publik, dan
                        pembangunan infrastruktur.</p>
                    <div class="flex items-center gap-2 text-teal-400 text-xs font-medium">
                        <div class="w-2 h-2 rounded-full bg-teal-400 realtime-indicator-animated"></div>
                        <span>Live Updates</span>
                    </div>
                </div>

                <div
                    class="service-card bg-slate-800/60 border border-slate-700/50 p-6 rounded-xl hover-lift group cursor-pointer shadow-lg transition-all duration-300 ease-in-out hover:border-violet-500/50">
                    <div
                        class="service-icon w-14 h-14 bg-violet-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-violet-500/20 transition-colors duration-300">
                        <svg class="w-7 h-7 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-100 mb-3">Administratif</h3>
                    <p class="text-slate-400 text-sm mb-4 leading-relaxed">Pelayanan KTP, KK, akta kelahiran, perizinan,
                        dan layanan sipil lainnya.</p>
                    <div class="flex items-center gap-2 text-violet-400 text-xs font-medium">
                        <div class="w-2 h-2 rounded-full bg-violet-400 realtime-indicator-animated"></div>
                        <span>Live Updates</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="dashboard" class="py-24 bg-slate-950"> {{-- Slightly darker background for contrast --}}
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-500/10 border border-emerald-500/30 mb-6">
                    <div class="w-2 h-2 rounded-full bg-emerald-400"></div> {{-- Static dot for elegance --}}
                    <span class="text-emerald-300 text-sm font-medium tracking-wide">Dashboard Analytics</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-semibold mb-5 text-slate-100">
                    Dashboard Real-time
                </h2>
                <p class="text-slate-400 text-lg max-w-2xl mx-auto font-light">
                    Pantau seluruh data pelayanan dasar Bengkulu dalam satu dashboard yang komprehensif.
                </p>
            </div>

            <div class="max-w-5xl mx-auto">
                {{-- Refined outer card for dashboard preview --}}
                <div class="bg-slate-800/60 backdrop-blur-md border border-slate-700/40 shadow-2xl rounded-2xl p-2">
                    <div class="bg-slate-900 rounded-xl p-6">
                        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-8 gap-4">
                            <div>
                                <h3 class="text-2xl font-semibold text-slate-100 mb-1">Dashboard Pelayanan Dasar</h3>
                                <p class="text-slate-400 text-sm">Provinsi Bengkulu • Real-time Data</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-2 px-3 py-1.5 bg-emerald-500/20 rounded-lg">
                                    <div class="w-2.5 h-2.5 bg-emerald-400 rounded-full"></div> {{-- Static online indicator --}}
                                    <span class="text-emerald-300 text-xs font-medium">Online</span>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 mb-8">
                            {{-- data-flow animation will be a subtle fade-in and slide-up --}}
                            <div class="bg-slate-800 border border-slate-700/70 rounded-xl p-4 data-flow">
                                <div class="flex items-center gap-2 mb-2">
                                    <div class="w-2.5 h-2.5 bg-red-500 rounded-full"></div>
                                    <span class="text-slate-400 text-xs">Kesehatan</span>
                                </div>
                                <div class="text-2xl font-bold text-slate-100">247</div>
                                <div class="text-xs text-slate-500">Fasilitas Aktif</div>
                            </div>
                            <div class="bg-slate-800 border border-slate-700/70 rounded-xl p-4 data-flow"
                                style="animation-delay: 0.1s;">
                                <div class="flex items-center gap-2 mb-2">
                                    <div class="w-2.5 h-2.5 bg-sky-500 rounded-full"></div>
                                    <span class="text-slate-400 text-xs">Pendidikan</span>
                                </div>
                                <div class="text-2xl font-bold text-slate-100">1,428</div>
                                <div class="text-xs text-slate-500">Sekolah Terdaftar</div>
                            </div>
                            <div class="bg-slate-800 border border-slate-700/70 rounded-xl p-4 data-flow"
                                style="animation-delay: 0.2s;">
                                <div class="flex items-center gap-2 mb-2">
                                    <div class="w-2.5 h-2.5 bg-teal-500 rounded-full"></div>
                                    <span class="text-slate-400 text-xs">Infrastruktur</span>
                                </div>
                                <div class="text-2xl font-bold text-slate-100">89%</div>
                                <div class="text-xs text-slate-500">Kondisi Baik</div>
                            </div>
                            <div class="bg-slate-800 border border-slate-700/70 rounded-xl p-4 data-flow"
                                style="animation-delay: 0.3s;">
                                <div class="flex items-center gap-2 mb-2">
                                    <div class="w-2.5 h-2.5 bg-violet-500 rounded-full"></div>
                                    <span class="text-slate-400 text-xs">Administratif</span>
                                </div>
                                <div class="text-2xl font-bold text-slate-100">24/7</div>
                                <div class="text-xs text-slate-500">Layanan Online</div>
                            </div>
                        </div>

                        <div class="bg-slate-800/50 border border-slate-700/50 rounded-xl p-6">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="text-slate-200 font-semibold text-sm">Aktivitas Pelayanan Real-time</h4>
                                {{-- macOS like window controls (decorative) --}}
                                <div class="flex gap-1.5">
                                    <div class="w-2.5 h-2.5 bg-red-500/70 rounded-full"></div>
                                    <div class="w-2.5 h-2.5 bg-yellow-500/70 rounded-full"></div>
                                    <div class="w-2.5 h-2.5 bg-green-500/70 rounded-full"></div>
                                </div>
                            </div>
                            {{-- Simplified chart placeholder, removed pulsing animation for elegance --}}
                            <div class="grid grid-cols-12 gap-1.5 h-32 items-end">
                                <div class="bg-gradient-to-t from-emerald-600/50 to-emerald-500/70 rounded-t-sm h-[40%]"
                                    style="animation: barGrow 0.5s ease-out 0s forwards;"></div>
                                <div class="bg-gradient-to-t from-sky-600/50 to-sky-500/70 rounded-t-sm h-[50%]"
                                    style="animation: barGrow 0.5s ease-out 0.1s forwards;"></div>
                                <div class="bg-gradient-to-t from-violet-600/50 to-violet-500/70 rounded-t-sm h-[60%]"
                                    style="animation: barGrow 0.5s ease-out 0.2s forwards;"></div>
                                <div class="bg-gradient-to-t from-red-600/50 to-red-500/70 rounded-t-sm h-[45%]"
                                    style="animation: barGrow 0.5s ease-out 0.3s forwards;"></div>
                                <div class="bg-gradient-to-t from-emerald-600/50 to-emerald-500/70 rounded-t-sm h-[70%]"
                                    style="animation: barGrow 0.5s ease-out 0.4s forwards;"></div>
                                <div class="bg-gradient-to-t from-sky-600/50 to-sky-500/70 rounded-t-sm h-[55%]"
                                    style="animation: barGrow 0.5s ease-out 0.5s forwards;"></div>
                                <div class="bg-gradient-to-t from-violet-600/50 to-violet-500/70 rounded-t-sm h-[65%]"
                                    style="animation: barGrow 0.5s ease-out 0.6s forwards;"></div>
                                <div class="bg-gradient-to-t from-red-600/50 to-red-500/70 rounded-t-sm h-[50%]"
                                    style="animation: barGrow 0.5s ease-out 0.7s forwards;"></div>
                                <div class="bg-gradient-to-t from-emerald-600/50 to-emerald-500/70 rounded-t-sm h-[80%]"
                                    style="animation: barGrow 0.5s ease-out 0.8s forwards;"></div>
                                <div class="bg-gradient-to-t from-sky-600/50 to-sky-500/70 rounded-t-sm h-[60%]"
                                    style="animation: barGrow 0.5s ease-out 0.9s forwards;"></div>
                                <div class="bg-gradient-to-t from-violet-600/50 to-violet-500/70 rounded-t-sm h-[70%]"
                                    style="animation: barGrow 0.5s ease-out 1.0s forwards;"></div>
                                <div class="bg-gradient-to-t from-red-600/50 to-red-500/70 rounded-t-sm h-[50%]"
                                    style="animation: barGrow 0.5s ease-out 1.1s forwards;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Note: The JavaScript for DashboardSlideshow targets HTML elements (e.g., #dashboardSlides, .nav-dot)
         that are not present in the provided Blade structure for the "Dashboard Showcase" section.
         If a slideshow is intended here, the corresponding HTML structure needs to be added.
         The current "Dashboard Preview" is a static representation. --}}
    <script>
        // Dashboard Slideshow Functionality (if corresponding HTML is added)
        class DashboardSlideshow {
            constructor() {
                this.currentSlide = 0;
                this.slideWrapper = document.getElementById('dashboardSlides');
                // Check if elements exist before proceeding
                if (!this.slideWrapper) {
                    // console.warn("DashboardSlideshow: slideWrapper element not found.");
                    return;
                }
                this.slides = this.slideWrapper.children;
                this.totalSlides = this.slides.length;
                this.navDots = document.querySelectorAll('.nav-dot');
                this.prevBtn = document.getElementById('prevSlide');
                this.nextBtn = document.getElementById('nextSlide');
                this.autoSlideInterval = null;

                if (this.totalSlides > 0) {
                    this.init();
                }
            }

            init() {
                this.bindEvents();
                this.updateNavDots(); // Initialize nav dots
                this.startAutoSlide();
            }

            bindEvents() {
                this.navDots.forEach((dot, index) => {
                    dot.addEventListener('click', () => {
                        this.goToSlide(index);
                        this.resetAutoSlide();
                    });
                });

                if (this.prevBtn) {
                    this.prevBtn.addEventListener('click', () => {
                        this.previousSlide();
                        this.resetAutoSlide();
                    });
                }

                if (this.nextBtn) {
                    this.nextBtn.addEventListener('click', () => {
                        this.nextSlide();
                        this.resetAutoSlide();
                    });
                }

                const slideContainer = this.slideWrapper.closest(
                    '.dashboard-slideshow-container'); // Assuming a container
                if (slideContainer) {
                    slideContainer.addEventListener('mouseenter', () => this.pauseAutoSlide());
                    slideContainer.addEventListener('mouseleave', () => this.startAutoSlide());
                }
            }

            goToSlide(index) {
                this.currentSlide = index;
                this.updateSlidePosition();
                this.updateNavDots();
            }

            nextSlide() {
                this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
                this.updateSlidePosition();
                this.updateNavDots();
            }

            previousSlide() {
                this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
                this.updateSlidePosition();
                this.updateNavDots();
            }

            updateSlidePosition() {
                const translateX = -this.currentSlide * 100;
                this.slideWrapper.style.transform = `translateX(${translateX}%)`;
            }

            updateNavDots() {
                this.navDots.forEach((dot, index) => {
                    if (index === this.currentSlide) {
                        dot.classList.add('active', 'bg-emerald-500'); // Example active classes
                        dot.classList.remove('bg-slate-600');
                    } else {
                        dot.classList.remove('active', 'bg-emerald-500');
                        dot.classList.add('bg-slate-600');
                    }
                });
            }

            startAutoSlide() {
                if (this.autoSlideInterval) clearInterval(this.autoSlideInterval); // Clear existing interval
                this.autoSlideInterval = setInterval(() => {
                    this.nextSlide();
                }, 6000);
            }

            pauseAutoSlide() {
                if (this.autoSlideInterval) {
                    clearInterval(this.autoSlideInterval);
                    this.autoSlideInterval = null;
                }
            }

            resetAutoSlide() {
                this.pauseAutoSlide();
                this.startAutoSlide();
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            // Only initialize if the slideshow HTML exists
            if (document.getElementById('dashboardSlides')) {
                new DashboardSlideshow();
            }

            // Parallax effect for hero section (optional, subtle)
            const homeSection = document.getElementById('home');
            if (homeSection) {
                window.addEventListener('scroll', () => {
                    const offset = window.pageYOffset;
                    const heroVideoContainer = homeSection.querySelector('.hero-video-container');
                    if (heroVideoContainer) {
                        // Adjust the factor for more or less parallax
                        heroVideoContainer.style.transform = `translateY(${offset * 0.3}px)`;
                    }
                });
            }
        });
    </script>
@endsection

@push('styles')
    {{-- Renamed from @push('scripts') to @push('styles') for CSS --}}
    <style>
        .hero-video-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            /* Ensure it covers the viewport height */
            overflow: hidden;
            z-index: -1;
            /* Behind the gradient and content */
        }

        .hero-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Cover the area, cropping if necessary */
            position: absolute;
            top: 0;
            left: 0;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* Subtle dark overlay for better text contrast over video */
            background: linear-gradient(to bottom, rgba(15, 23, 42, 0.5) 0%, rgba(15, 23, 42, 0.8) 100%);
            z-index: 0;
            /* Above video, below content */
        }

        /* Animation for subtle pulsing indicators */
        @keyframes subtlePulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.6;
                transform: scale(0.9);
            }
        }

        .realtime-indicator-animated {
            animation: subtlePulse 2.5s infinite ease-in-out;
        }

        /* Animation for elements fading/sliding in */
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .slide-in {
            animation: slideInUp 0.8s ease-out forwards;
        }

        /* Animation for data flow elements in dashboard */
        @keyframes dataFlowAnim {
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .data-flow {
            opacity: 0;
            /* Start hidden */
            animation: dataFlowAnim 0.5s ease-out forwards;
        }

        /* Animation for chart bars growing */
        @keyframes barGrow {
            from {
                height: 0%;
                opacity: 0;
            }

            to {
                opacity: 1;
                /* Height will be set by inline style or class */
            }
        }

        /* Apply this if you want bars to start from 0 height and grow to their specified height */
        /* .chart-bar { animation: barGrow 0.6s ease-out forwards; } */


        /* Hover lift effect */
        .hover-lift {
            transition-property: transform, box-shadow;
            transition-duration: 0.3s;
            transition-timing-function: ease-in-out;
        }

        .hover-lift:hover {
            transform: translateY(-4px);
            /* box-shadow: 0 10px 20px rgba(0,0,0,0.1); */
            /* Optional: more pronounced shadow on hover */
        }

        /* Ensure body has a dark background if not set by layout */
        body {
            background-color: #0F172A;
            /* slate-900 */
            color: #cbd5e1;
            /* slate-300 */
            font-family: 'Inter', sans-serif;
            /* Assuming Inter is loaded or use system UI fonts */
        }

        /* Gradient text (if still desired, can be too flashy for "simple") */
        .gradient-text-subtle {
            background-image: linear-gradient(to right, #34d399, #2dd4bf);
            /* emerald-400 to teal-400 */
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* Remove .gradient-text from h1 and h2 if not desired, and use text-slate-100 or similar */
    </style>
    {{-- Make sure to load a font like Inter if you want to use it explicitly --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet"> --}}
@endpush
