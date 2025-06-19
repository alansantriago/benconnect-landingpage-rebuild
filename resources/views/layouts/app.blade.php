<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ben-Connect</title>
    @vite('resources/css/app.css')
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-accent': '#06b6d4',
                        'brand-accent-light': '#67e8f9',
                        'brand-accent-dark': '#0891b2',
                        'elegant-bg': '#111827', // Darker, more elegant background base
                        'elegant-surface': '#1f2937', // For cards, navbar scroll
                        'elegant-border': 'rgba(255, 255, 255, 0.08)', // Softer border
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.7s ease-out forwards',
                        'slide-up': 'slideUp 0.7s ease-out forwards',
                        'subtle-slide-up': 'subtleSlideUp 0.7s ease-out forwards',
                        'glow': 'glow 2.5s ease-in-out infinite alternate',
                        'bgPatternAnimate': 'bgPatternAnimate 80s linear infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(8px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            },
                        },
                        slideUp: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(20px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            },
                        },
                        subtleSlideUp: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(10px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            },
                        },
                        glow: {
                            '0%': {
                                filter: 'drop-shadow(0 0 4px rgba(6, 182, 212, 0.2))'
                            },
                            '100%': {
                                filter: 'drop-shadow(0 0 12px rgba(6, 182, 212, 0.4))'
                            },
                        },
                        bgPatternAnimate: {
                            '0%': {
                                backgroundPosition: '0% 0%'
                            },
                            '50%': {
                                backgroundPosition: '100% 100%'
                            },
                            '100%': {
                                backgroundPosition: '0% 0%'
                            },
                        }
                    },
                    backdropBlur: {
                        'sm': '4px',
                        'DEFAULT': '8px',
                        'md': '12px',
                    },
                    boxShadow: {
                        'elegant-soft': '0 4px 15px rgba(0, 0, 0, 0.15)',
                        'brand-glow': '0 0 20px rgba(6, 182, 212, 0.2)',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        /* Reduced weights for elegance */

        :root {
            --brand-accent: #06b6d4;
            --brand-accent-light: #67e8f9;
            --brand-accent-dark: #0891b2;

            --text-primary: #f3f4f6;
            /* Lighter primary text (gray-100) */
            --text-secondary: #d1d5db;
            /* Lighter secondary text (gray-300) */
            --text-muted: #9ca3af;
            /* (gray-400) */

            --bg-base: #0f172a;
            /* slate-900 */
            --bg-surface: #1e293b;
            /* slate-800 */
            --bg-surface-subtle: rgba(30, 41, 59, 0.7);
            /* For subtle glassmorphism */

            --border-color: rgba(255, 255, 255, 0.07);
            /* Softer borders */
            --border-color-strong: rgba(255, 255, 255, 0.1);
        }

        * {
            font-family: 'Inter', sans-serif;
            box-sizing: border-box;
        }

        body {
            background-color: var(--bg-base);
            /* Simplified background */
            color: var(--text-primary);
            line-height: 1.65;
            /* Slightly more generous line height */
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .bg-pattern {
            /* More subtle pattern */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.025;
            background-image:
                radial-gradient(ellipse at 10% 20%, rgba(103, 232, 249, 0.1) 0%, transparent 50%),
                radial-gradient(ellipse at 90% 80%, rgba(6, 182, 212, 0.08) 0%, transparent 50%);
            background-size: 200% 200%;
            /* Larger size for slower perceived movement */
            animation: bgPatternAnimate 120s linear infinite;
            z-index: -10;
        }

        .navbar-base {
            transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out, border-color 0.3s ease-in-out;
            border-bottom: 1px solid transparent;
            /* Start with transparent border */
        }

        .navbar-scrolled {
            background-color: var(--bg-surface-subtle);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom-color: var(--border-color);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-transparent {
            /* No changes needed, already good */
            background: transparent;
            backdrop-filter: none;
            box-shadow: none;
        }

        .mobile-menu-custom-blur {
            background-color: rgba(30, 41, 59, 0.9);
            /* Slightly more opaque for readability */
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid var(--border-color);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border-radius: 1rem;
            /* Softer rounding */
        }

        .glass-card {
            /* Simplified glass card for elegance */
            background-color: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid var(--border-color);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, border-color 0.3s ease, transform 0.3s ease;
        }

        .glass-card:hover {
            background-color: rgba(255, 255, 255, 0.05);
            border-color: var(--border-color-strong);
            transform: translateY(-2px);
        }

        .gradient-text {
            /* Kept for headings, but use sparingly for elegance */
            background: linear-gradient(135deg, var(--brand-accent) 0%, var(--brand-accent-light) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hover-lift {
            transition: transform 0.25s ease-out;
        }

        .hover-lift:hover {
            transform: translateY(-2px);
        }

        .logo-glow {
            filter: drop-shadow(0 0 10px rgba(103, 232, 249, 0.3));
            transition: filter 0.3s ease;
        }

        .logo-glow:hover {
            filter: drop-shadow(0 0 16px rgba(103, 232, 249, 0.5));
        }

        /* Elegant Nav Link Styling */
        .nav-link {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            /* 8px */
            padding: 0.5rem 1rem;
            /* 8px 16px */
            border-radius: 0.5rem;
            /* Softer radius */
            font-weight: 500;
            transition: color 0.2s ease-in-out, background-color 0.2s ease-in-out;
            color: var(--text-secondary);
            position: relative;
        }

        .nav-link svg {
            /* Icon styling */
            width: 1.125rem;
            /* 18px */
            height: 1.125rem;
            opacity: 0.8;
            transition: opacity 0.2s ease-in-out;
        }

        .nav-link:hover {
            color: var(--text-primary);
            background-color: rgba(255, 255, 255, 0.04);
        }

        .nav-link:hover svg {
            opacity: 1;
        }

        .nav-link-active {
            color: var(--brand-accent-light) !important;
            background-color: rgba(6, 182, 212, 0.1) !important;
            /* Subtle active background */
        }

        .nav-link-active::after {
            /* Optional: subtle underline for active state */
            content: '';
            position: absolute;
            bottom: -1px;
            /* Adjust if navbar padding changes */
            left: 0.75rem;
            right: 0.75rem;
            height: 2px;
            background-color: var(--brand-accent);
            border-radius: 1px;
        }

        .nav-link-active svg {
            color: var(--brand-accent-light) !important;
            opacity: 1;
        }

        #mobile-menu .nav-link {
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
        }

        #mobile-menu .nav-link-active {
            color: var(--brand-accent-light) !important;
            background-color: rgba(6, 182, 212, 0.15) !important;
        }

        #mobile-menu .nav-link-active::after {
            display: none;
            /* No underline for mobile pill-like active state */
        }


        /* Elegant Footer Link Styling */
        .footer-link {
            display: inline-flex;
            align-items: center;
            gap: 0.375rem;
            /* 6px */
            color: var(--text-muted);
            /* Softer color for footer links */
            font-weight: 400;
            /* Regular weight */
            transition: color 0.2s ease-in-out;
        }

        .footer-link:hover {
            color: var(--brand-accent-light);
        }

        .footer-link svg {
            width: 0.875rem;
            /* 14px */
            height: 0.875rem;
            opacity: 0.7;
        }

        .footer-link:hover svg {
            opacity: 1;
        }

        /* Elegant Social Icon Styling */
        .social-icon a {
            color: var(--text-muted);
            transition: color 0.2s ease-in-out, transform 0.2s ease-out;
            display: inline-block;
            padding: 0.375rem;
            /* 6px padding */
        }

        .social-icon a:hover {
            color: var(--brand-accent-light);
            transform: scale(1.1);
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Slimmer scrollbar */
        ::-webkit-scrollbar-track {
            background: var(--bg-base);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--bg-surface);
            border-radius: 4px;
            border: 2px solid var(--bg-base);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #374151;
            /* gray-700 */
        }
    </style>
</head>

<body class="antialiased overflow-x-hidden">
    <div class="bg-pattern fixed inset-0"></div>

    <nav id="navbar" class="fixed w-full top-0 z-50 px-4 sm:px-6 py-3 navbar-base navbar-transparent animate-fade-in">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="/" class="flex items-center space-x-2 rtl:space-x-reverse group">
                <img src="{{ asset('storage/images/logo.png') }}" alt="Ben-Connect Logo" class="h-9 w-auto logo-glow" /*
                    Slightly smaller logo */
                    onerror="this.src='https://placehold.co/110x36/0F172A/FFFFFF?text=Logo&font=inter'" />
            </a>

            <ul class="hidden md:flex items-center gap-x-2 lg:gap-x-3 text-sm">
                <li>
                    <a href="/" class="nav-link hover-lift">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd"
                                d="M9.293 2.293a1 1 0 0 1 1.414 0l7 7A1 1 0 0 1 17 10.707V17.5a1.5 1.5 0 0 1-1.5 1.5h-3.75a.75.75 0 0 1-.75-.75V14.5h-2.5v3.75a.75.75 0 0 1-.75.75H4.5A1.5 1.5 0 0 1 3 17.5V10.707a1 1 0 0 1 .293-.707l7-7Z"
                                clip-rule="evenodd" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="/data-opd" class="nav-link hover-lift">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path
                                d="M2.5 3A1.5 1.5 0 0 0 1 4.5v2.75A.75.75 0 0 0 1.75 8h16.5a.75.75 0 0 0 .75-.75V4.5A1.5 1.5 0 0 0 17.5 3h-15Z" />
                            <path
                                d="M1.75 9.75A.75.75 0 0 0 1 10.5v2.75A1.5 1.5 0 0 0 2.5 14.75h15A1.5 1.5 0 0 0 19 13.25v-2.75a.75.75 0 0 0-.75-.75H1.75ZM2.5 16A1.5 1.5 0 0 0 1 17.5v.75A1.75 1.75 0 0 0 2.75 20h14.5A1.75 1.75 0 0 0 19 18.25v-.75A1.5 1.5 0 0 0 17.5 16h-15Z" />
                        </svg>
                        Data OPD
                    </a>
                </li>
                <li>
                    <a href="/tentang" class="nav-link hover-lift">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path
                                d="M10 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM3.5 10.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM16.5 10.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Zm-5 4.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Zm-5.69-.153a2.504 2.504 0 0 0-3.626 3.626 2.504 2.504 0 0 0 3.626-3.626ZM10 18a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Zm5.69-4.653a2.504 2.504 0 0 0-3.626-3.626 2.504 2.504 0 0 0 3.626 3.626Z" />
                        </svg>
                        Tentang Kami
                    </a>
                </li>
            </ul>

            <button id="mobile-menu-button"
                class="md:hidden p-2 text-text-secondary hover:text-brand-accent focus:outline-none focus:ring-2 focus:ring-brand-accent/30 rounded-md transition-colors duration-200"
                aria-label="Open main menu" aria-expanded="false"> {/* Simpler button */}
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>

        <div id="mobile-menu"
            class="md:hidden hidden mt-2 mx-2 sm:mx-4 rounded-xl shadow-xl overflow-hidden mobile-menu-custom-blur animate-subtle-slide-up">
            <ul class="space-y-1.5 px-3 py-3 text-sm">
                <li>
                    <a href="/" class="nav-link hover-lift">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd"
                                d="M9.293 2.293a1 1 0 0 1 1.414 0l7 7A1 1 0 0 1 17 10.707V17.5a1.5 1.5 0 0 1-1.5 1.5h-3.75a.75.75 0 0 1-.75-.75V14.5h-2.5v3.75a.75.75 0 0 1-.75.75H4.5A1.5 1.5 0 0 1 3 17.5V10.707a1 1 0 0 1 .293-.707l7-7Z"
                                clip-rule="evenodd" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="/data-opd" class="nav-link hover-lift">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path
                                d="M2.5 3A1.5 1.5 0 0 0 1 4.5v2.75A.75.75 0 0 0 1.75 8h16.5a.75.75 0 0 0 .75-.75V4.5A1.5 1.5 0 0 0 17.5 3h-15Z" />
                            <path
                                d="M1.75 9.75A.75.75 0 0 0 1 10.5v2.75A1.5 1.5 0 0 0 2.5 14.75h15A1.5 1.5 0 0 0 19 13.25v-2.75a.75.75 0 0 0-.75-.75H1.75ZM2.5 16A1.5 1.5 0 0 0 1 17.5v.75A1.75 1.75 0 0 0 2.75 20h14.5A1.75 1.75 0 0 0 19 18.25v-.75A1.5 1.5 0 0 0 17.5 16h-15Z" />
                        </svg>
                        Data OPD
                    </a>
                </li>
                <li>
                    <a href="/tentang" class="nav-link hover-lift">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path
                                d="M10 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM3.5 10.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM16.5 10.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Zm-5 4.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Zm-5.69-.153a2.504 2.504 0 0 0-3.626 3.626 2.504 2.504 0 0 0 3.626-3.626ZM10 18a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Zm5.69-4.653a2.504 2.504 0 0 0-3.626-3.626 2.504 2.504 0 0 0 3.626 3.626Z" />
                        </svg>
                        Tentang Kami
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main id="content" class="animate-slide-up relative">
        @yield('content')
    </main>

    <footer class="relative border-t border-border-color bg-bg-base/70 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-6 py-12 sm:py-16">
            <div class="grid md:grid-cols-12 gap-8 mb-12">
                <div class="md:col-span-12 lg:col-span-5">
                    <a href="/" class="flex items-center space-x-2 mb-5 group">
                        <img src="{{ asset('storage/images/logo.png') }}" alt="Ben-Connect Logo"
                            class="h-9 w-auto logo-glow"
                            onerror="this.src='https://placehold.co/110x36/0F172A/FFFFFF?text=Logo&font=inter'" />
                    </a>
                    <p class="text-text-muted text-sm leading-relaxed max-w-md">
                        Platform modern untuk konektivitas data OPD yang aman dan efisien, membangun jembatan digital
                        untuk pelayanan publik yang lebih baik.
                    </p>
                </div>

                <div class="hidden lg:block lg:col-span-1"></div>

                <div class="md:col-span-6 lg:col-span-2">
                    <h4 class="font-semibold text-text-primary mb-4 text-base gradient-text">Navigasi</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="/" class="footer-link">Dashboard</a></li>
                        <li><a href="/data-opd" class="footer-link">Data OPD</a></li>
                        <li><a href="/tentang" class="footer-link">Tentang Kami</a></li>
                    </ul>
                </div>

                <div class="md:col-span-6 lg:col-span-3">
                    <h4 class="font-semibold text-text-primary mb-4 text-base gradient-text">Dukungan & Legal</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="/help" class="footer-link">Bantuan & Masukan</a></li>
                        <li><a href="/syarat" class="footer-link">Syarat & Ketentuan</a></li>
                        <li><a href="/privasi" class="footer-link">Kebijakan Privasi</a></li>
                    </ul>
                </div>
            </div>

            <div
                class="border-t border-border-color pt-8 flex flex-col md:flex-row justify-between items-center text-xs gap-y-4 md:gap-y-0">

                <div class="text-text-muted text-center md:text-left">
                    © <span id="currentYear"></span> Ben-Connect. Hak Cipta Dilindungi.
                </div>
                <div class="flex items-center gap-x-4">
                    <a href="mailto:info@benconnect.id"
                        class="text-text-muted hover:text-brand-accent transition-colors duration-200 group flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-4 h-4 opacity-80 group-hover:opacity-100 transition-opacity">
                            <path
                                d="M3 4a2 2 0 0 0-2 2v1.161l8.441 4.221a1.25 1.25 0 0 0 1.118 0L19 7.162V6a2 2 0 0 0-2-2H3Z" />
                            <path
                                d="M19 8.839l-7.77 3.885a2.75 2.75 0 0 1-2.46 0L1 8.839V14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.839Z" />
                        </svg>
                        info@benconnect.id
                    </a>
                    <div class="flex gap-x-2">
                        <div class="social-icon">
                            <a href="https://facebook.com/benconnect" target="_blank"
                                aria-label="Facebook Ben-Connect">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                                </svg>
                            </a>
                        </div>
                        <div class="social-icon">
                            <a href="https://twitter.com/benconnect" target="_blank"
                                aria-label="Twitter Ben-Connect">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-.422.724-.665 1.56-.665 2.452 0 1.735.884 3.269 2.228 4.165-.823-.026-1.602-.253-2.284-.626v.081c0 2.425 1.716 4.441 3.992 4.903-.418.114-.863.174-1.328.174-.321 0-.633-.031-.937-.091.636 1.988 2.484 3.439 4.676 3.48-1.701 1.333-3.846 2.127-6.173 2.127-.402 0-.799-.023-1.189-.069 2.199 1.407 4.817 2.229 7.649 2.229 9.171 0 14.19-7.803 13.705-14.553.968-.699 1.801-1.574 2.461-2.548z" />
                                </svg>
                            </a>
                        </div>
                        <div class="social-icon">
                            <a href="https://instagram.com/benconnect" target="_blank"
                                aria-label="Instagram Ben-Connect">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.012 3.584-.07 4.85c-.148 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.584-.012-4.85-.07c-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.85s.012-3.584.07-4.85c.149-3.227 1.664-4.771 4.919 4.919 1.266-.057 1.645-.069 4.85-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.359 2.618 6.78 6.98 6.98 1.281.059 1.689.073 4.948.073s3.667-.014 4.947-.072c4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.947s-.014-3.667-.072-4.947c-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                        </div>
                        <div class="social-icon">
                            <a href="https://linkedin.com/company/benconnect" target="_blank"
                                aria-label="LinkedIn Ben-Connect">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.594-11.018-3.714v-2.155z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const navbar = document.getElementById('navbar');
        const scrollThreshold = 30; // Reduced scroll threshold for quicker navbar change

        function toggleMobileMenu() {
            const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true' || false;
            mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
            mobileMenu.classList.toggle('hidden');

            if (!isExpanded) {
                mobileMenu.classList.add('animate-subtle-slide-up'); // Add animation class when showing
                mobileMenuButton.innerHTML =
                    `<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>`;
            } else {
                // Consider removing animation class on hide if it causes issues, or let it run its course
                mobileMenuButton.innerHTML =
                    `<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>`;
            }
        }
        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', toggleMobileMenu);
        }

        function handleScroll() {
            if (window.scrollY > scrollThreshold) {
                navbar.classList.remove('navbar-transparent');
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
                navbar.classList.add('navbar-transparent');
            }
        }
        window.addEventListener('scroll', handleScroll);

        document.addEventListener('DOMContentLoaded', () => {
            handleScroll();

            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    if (this.getAttribute('href') !== '#' && document.querySelector(this
                            .getAttribute('href'))) {
                        e.preventDefault();
                        document.querySelector(this.getAttribute('href')).scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });

            const currentYearSpan = document.getElementById('currentYear');
            if (currentYearSpan) {
                currentYearSpan.textContent = new Date().getFullYear();
            }

            const currentPath = window.location.pathname;
            const allNavLinks = document.querySelectorAll('#navbar a.nav-link, #mobile-menu a.nav-link');

            allNavLinks.forEach(link => {
                link.classList.remove('nav-link-active');
                // Normalize href by removing trailing slash if present, for robust matching
                // Also handle if link href is just "/" for homepage
                const linkHref = link.getAttribute('href') === '/' ? '/' : link.getAttribute('href')
                    .replace(/\/$/, "");
                const currentPathNormalized = currentPath === '/' ? '/' : currentPath.replace(/\/$/, "");

                if (linkHref === currentPathNormalized) {
                    link.classList.add('nav-link-active');
                }
            });

            // Fallback: if no link is active and on homepage, make Dashboard active
            const isActive = document.querySelector('.nav-link-active');
            if (!isActive && (currentPath === '/' || currentPath === '/index.html' || currentPath === '')) {
                document.querySelectorAll('a.nav-link[href="/"]').forEach(dashboardLink => {
                    dashboardLink.classList.add('nav-link-active');
                });
            }
        });
    </script>
</body>

</html>
