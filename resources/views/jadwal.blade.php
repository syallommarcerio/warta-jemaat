<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jadwal Pelayanan {{ $setting->church_name ?? 'GKMI Winong' }}</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700&display=swap"
        rel="stylesheet"
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Manrope:wght@600;700&display=swap"
        rel="stylesheet"
    >

    <script>
        tailwind.config = {
            darkMode: "class",

            theme: {
                extend: {

                    colors: {
                        "background": "#f8f9fb",
                        "surface": "#f8f9fb",
                        "surface-container-low": "#f3f4f6",
                        "surface-container": "#edeef0",
                        "surface-container-high": "#e7e8ea",
                        "surface-container-lowest": "#ffffff",

                        "on-surface": "#191c1e",
                        "on-surface-variant": "#444653",

                        "primary": "#00288e",
                        "primary-container": "#1e40af",
                        "on-primary": "#ffffff",

                        "secondary": "#904d00",
                        "secondary-container": "#fe932c",

                        "outline": "#757684",
                        "outline-variant": "#c4c5d5",

                        "tertiary": "#25354a",
                        "on-tertiary": "#ffffff",
                    },

                    borderRadius: {
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px",
                    },

                    spacing: {
                        "xs": "0.5rem",
                        "sm": "1rem",
                        "md": "1.5rem",
                        "lg": "2.5rem",
                        "xl": "4rem",
                        "gutter": "24px",
                        "margin-mobile": "16px",
                    },

                    fontFamily: {
                        "headline-lg": ["Manrope"],
                        "headline-md": ["Manrope"],
                        "headline-sm": ["Manrope"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "display-lg": ["Manrope"],
                    },

                    fontSize: {
                        "headline-lg": [
                            "32px",
                            {
                                lineHeight: "1.2",
                                fontWeight: "600"
                            }
                        ],

                        "headline-md": [
                            "24px",
                            {
                                lineHeight: "1.3",
                                fontWeight: "600"
                            }
                        ],

                        "headline-sm": [
                            "20px",
                            {
                                lineHeight: "1.4",
                                fontWeight: "600"
                            }
                        ],

                        "body-md": [
                            "16px",
                            {
                                lineHeight: "1.6",
                                fontWeight: "400"
                            }
                        ],

                        "body-lg": [
                            "18px",
                            {
                                lineHeight: "1.6",
                                fontWeight: "400"
                            }
                        ],

                        "label-md": [
                            "14px",
                            {
                                lineHeight: "1.2",
                                fontWeight: "500"
                            }
                        ],

                        "display-lg": [
                            "48px",
                            {
                                lineHeight: "1.1",
                                fontWeight: "700"
                            }
                        ],
                    }
                }
            }
        };
    </script>

    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24;
        }

        .material-symbols-outlined.fill {
            font-variation-settings:
                'FILL' 1;
        }
    </style>
</head>


<body class="bg-background text-on-surface font-body-md min-h-screen flex flex-col antialiased">


    {{-- =========================
         NAVBAR
    ========================== --}}
    <nav class="fixed top-0 w-full z-50 bg-surface/90 backdrop-blur-md shadow-sm">

        <div class="flex justify-between items-center max-w-[1200px] mx-auto px-margin-mobile md:px-sm h-16">

            {{-- LOGO --}}
            <a
                href="{{ url('/') }}"
                class="flex items-center gap-3 cursor-pointer group"
            >

                {{-- 
                    GANTI path ini jika file logo kamu punya nama/path lain.
                    Contoh:
                    public/images/logo-gkmi.png
                    maka gunakan asset('images/logo-gkmi.png')
                --}}
                <div
                    class="h-9 w-9 rounded-full bg-white border border-gray-200
                           shadow-sm flex items-center justify-center overflow-hidden
                           shrink-0"
                >
                    <img
                        src="{{ asset('images/logo.gkmi.png') }}"
                        alt="Logo GKMI Winong"
                        class="h-full w-full object-contain"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                    >

                    {{-- fallback kalau gambar belum ditemukan --}}
                    <span
                        class="hidden items-center justify-center
                               h-full w-full
                               text-primary font-bold text-xs"
                    >
                        GKMI
                    </span>
                </div>

                <span class="font-headline-sm font-bold text-primary whitespace-nowrap">
                    {{ $setting->church_name ?? 'GKMI Winong' }}
                </span>

            </a>


            {{-- NAVIGATION --}}
            <div class="hidden md:flex items-center gap-gutter">

                <a
                    href="{{ url('/') }}"
                    class="font-label-md uppercase tracking-wider
                           text-on-surface-variant hover:text-primary transition-colors"
                >
                    Beranda
                </a>

                <a
                    href="{{ route('schedules.index') }}"
                    class="font-label-md uppercase tracking-wider
                           text-primary font-semibold
                           border-b-2 border-secondary-container pb-1"
                >
                    Jadwal Pelayanan
                </a>

                <a
                    href="{{ url('/#pengumuman') }}"
                    class="font-label-md uppercase tracking-wider
                           text-on-surface-variant hover:text-primary transition-colors"
                >
                    Pengumuman
                </a>

                <a
                    href="{{ url('/#kontak') }}"
                    class="font-label-md uppercase tracking-wider
                           text-on-surface-variant hover:text-primary transition-colors"
                >
                    Kontak
                </a>

            </div>


            {{-- LOGIN --}}
            <a
                href="{{ route('login') }}"
                class="hidden md:flex items-center justify-center
                       px-md py-xs rounded-full
                       bg-primary text-on-primary
                       font-label-md
                       hover:bg-primary/90 transition shadow-sm"
            >
                Login Admin
            </a>


            {{-- MOBILE --}}
            <button class="md:hidden p-xs text-on-surface">

                <span class="material-symbols-outlined text-2xl">
                    menu
                </span>

            </button>

        </div>

    </nav>


    {{-- =========================
         MAIN
    ========================== --}}
    <main class="flex-grow pt-16">


        {{-- =========================
             HEADER
        ========================== --}}
        <section class="py-lg md:py-xl px-margin-mobile md:px-gutter">

            <div class="max-w-[1200px] mx-auto">


                {{-- Kembali --}}
                <a
                    href="{{ url('/') }}"
                    class="inline-flex items-center gap-2
                           text-primary hover:opacity-80 transition
                           mb-lg"
                >

                    <span class="material-symbols-outlined">
                        arrow_back
                    </span>

                    Kembali ke Beranda

                </a>


                {{-- Judul --}}
                <div class="flex items-center gap-sm">

                    <span class="material-symbols-outlined text-primary text-3xl fill">
                        event
                    </span>

                    <div>

                        <p class="text-sm uppercase tracking-wider
                                  text-primary font-semibold">
                            Jadwal Pelayanan
                        </p>

                        <h1 class="font-headline-lg text-headline-lg
                                   text-on-surface mt-1">
                            Semua Jadwal Pelayanan
                        </h1>

                        <p class="text-on-surface-variant mt-2">
                            Lihat seluruh jadwal pelayanan GKMI Winong yang akan datang.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        {{-- =========================
             DAFTAR JADWAL
        ========================== --}}
        <section class="py-xl px-margin-mobile md:px-gutter bg-surface-container-lowest">

            <div class="max-w-[1200px] mx-auto">


                @if($schedules->count() > 0)

                    <div
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3
                               gap-gutter items-stretch"
                    >

                        @foreach($schedules as $schedule)

                            <div class="h-full">

                                <x-schedule-card
                                    :schedule="$schedule"
                                    :terdekat="$loop->first"
                                />

                            </div>

                        @endforeach

                    </div>

                @else

                    <div class="text-center py-xl">

                        <span class="material-symbols-outlined text-6xl text-gray-400">
                            event_busy
                        </span>

                        <h2 class="font-headline-md text-headline-md text-on-surface mt-4">
                            Belum Ada Jadwal
                        </h2>

                        <p class="text-on-surface-variant mt-2">
                            Belum ada jadwal pelayanan yang akan datang.
                        </p>

                    </div>

                @endif


            </div>

        </section>

    </main>


    {{-- =========================
         FOOTER
    ========================== --}}
    <footer
        class="w-full py-xl bg-tertiary text-on-tertiary
               border-t border-outline/10"
    >

        <div
            class="grid grid-cols-1 md:grid-cols-3
                   gap-gutter max-w-[1200px]
                   mx-auto px-margin-mobile md:px-sm"
        >

            {{-- Kolom 1 --}}
            <div class="flex flex-col gap-sm">

                <span class="font-headline-sm font-bold text-white">
                    {{ $setting->church_name ?? 'GKMI Winong' }}
                </span>

                <p class="text-white/70 max-w-sm">
                    Melayani dengan kasih, bertumbuh dalam iman,
                    dan menjadi berkat bagi sesama.
                </p>

            </div>


            {{-- Kolom 2 --}}
            <div class="flex flex-col gap-sm">

                <span class="font-headline-sm font-bold text-white">
                    Tautan Cepat
                </span>

                <nav class="flex flex-col gap-xs">

                    <a
                        href="{{ url('/') }}"
                        class="text-white/70 hover:text-white transition"
                    >
                        Beranda
                    </a>

                    <a
                        href="{{ route('schedules.index') }}"
                        class="text-white/70 hover:text-white transition"
                    >
                        Jadwal
                    </a>

                    <a
                        href="{{ url('/#pengumuman') }}"
                        class="text-white/70 hover:text-white transition"
                    >
                        Pengumuman
                    </a>

                    <a
                        href="{{ url('/#kontak') }}"
                        class="text-white/70 hover:text-white transition"
                    >
                        Kontak
                    </a>

                </nav>

            </div>


            {{-- Kolom 3 --}}
            <div class="flex flex-col gap-sm">

                <span class="font-headline-sm font-bold text-white">
                    Hubungi Kami
                </span>

                <div class="flex flex-col gap-xs text-white/70">

                    <p>
                        {{ $setting->address ?? '-' }}
                    </p>

                    <p>
                        Email: {{ $setting->email ?? '-' }}
                    </p>

                    <p>
                        Telp: {{ $setting->phone ?? '-' }}
                    </p>

                </div>

            </div>

        </div>


        {{-- Copyright --}}
        <div
            class="mt-lg pt-md border-t border-white/20
                   text-center px-margin-mobile"
        >

            <p class="text-white/60">

                © {{ now()->year }}
                {{ $setting->church_name ?? 'GKMI Winong' }}.
                Semua Hak Dilindungi.

            </p>

        </div>

    </footer>


</body>

</html>