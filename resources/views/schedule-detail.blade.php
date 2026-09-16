<!DOCTYPE html>
<html class="light" lang="id">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>
        {{ $schedule->activity->name }} - {{ $schedule->activity->name }}
    </title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet"
    />

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Manrope:wght@600;700&display=swap"
        rel="stylesheet"
    />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        background: "#f8f9fb",
                        surface: "#f8f9fb",
                        "surface-container-low": "#f3f4f6",
                        "surface-container": "#edeef0",
                        "surface-container-lowest": "#ffffff",
                        primary: "#00288e",
                        "primary-container": "#1e40af",
                        "on-primary": "#ffffff",
                        "on-surface": "#191c1e",
                        "on-surface-variant": "#444653",
                        secondary: "#904d00",
                        "secondary-container": "#fe932c",
                        tertiary: "#25354a",
                        "on-tertiary": "#ffffff",
                        "outline-variant": "#c4c5d5"
                    },

                    borderRadius: {
                        lg: "0.5rem",
                        xl: "0.75rem",
                        full: "9999px"
                    },

                    fontFamily: {
                        display: ["Manrope"],
                        headline: ["Manrope"],
                        body: ["Inter"],
                        label: ["Inter"]
                    }
                }
            }
        }
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

<body class="bg-background text-on-surface font-body min-h-screen flex flex-col antialiased">

    {{-- NAVBAR --}}
    <nav class="fixed top-0 w-full z-50 bg-surface/90 backdrop-blur-md shadow-sm">

        <div class="flex justify-between items-center max-w-[1200px] mx-auto px-4 md:px-6 h-16">

            {{-- Logo --}}
            <a
                href="{{ url('/') }}"
                class="flex items-center gap-2"
            >
                <img
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9H5lPu54Ajzo_iAZ-JSx-nJ0O3nL6BXIgsIywtPjPhJhwzb4zv2HSk5x1ymc3iXGM84KBHKhAUyAQJD9risjzL7lbwpSDNiLRCmMmbTJ9mBRH2AsjIuHO1I53nLagQrgbT7oM4lAkwyIFNd_nKGgpBdUW4LgCnHhrGOEiW540o8zVri3yorTbjXBdOB6WFWgPCmuBb81sL_n-aQUab5tLJ6t-kwlI0oRBwzx34IBJdSff7q1pqcS59mnAPAe1VZrqRXbdGKxMtjc"
                    alt="GKMI Winong"
                    class="h-9 w-auto rounded-full shadow-sm"
                >

                <span class="font-headline font-bold text-primary text-xl">
                    GKMI Winong
                </span>
            </a>

            {{-- Navigation --}}
            <div class="hidden md:flex items-center gap-8">

                <a
                    href="{{ url('/') }}#beranda"
                    class="text-sm uppercase tracking-wider text-on-surface-variant hover:text-primary transition"
                >
                    Beranda
                </a>

                <a
                    href="{{ url('/') }}#jadwal"
                    class="text-sm uppercase tracking-wider text-primary font-semibold border-b-2 border-secondary-container pb-1"
                >
                    Jadwal Pelayanan
                </a>

                <a
                    href="{{ url('/') }}#pengumuman"
                    class="text-sm uppercase tracking-wider text-on-surface-variant hover:text-primary transition"
                >
                    Pengumuman
                </a>

                <a
                    href="{{ url('/') }}#kontak"
                    class="text-sm uppercase tracking-wider text-on-surface-variant hover:text-primary transition"
                >
                    Kontak
                </a>

            </div>

            {{-- Login --}}
            <a
                href="{{ route('login') }}"
                class="hidden md:flex items-center justify-center px-6 py-2 rounded-full bg-primary text-white font-semibold text-sm hover:bg-primary-container transition shadow-sm"
            >
                Login Admin
            </a>

        </div>

    </nav>


    {{-- CONTENT --}}
    <main class="flex-grow pt-16">

        {{-- Header --}}
        <section class="bg-surface-container-low py-10">

            <div class="max-w-[1200px] mx-auto px-4 md:px-6">

                <a
                    href="{{ url('/') }}#jadwal"
                    class="inline-flex items-center gap-2 text-primary hover:text-primary-container transition mb-6"
                >
                    <span class="material-symbols-outlined">
                        arrow_back
                    </span>

                    <span class="font-medium">
                        Kembali ke Jadwal
                    </span>
                </a>

                <div class="flex items-center gap-3">

                    <span class="material-symbols-outlined text-primary text-3xl">
                        event
                    </span>

                    <div>
                        <p class="text-sm text-on-surface-variant uppercase tracking-wider">
                            Jadwal Pelayanan
                        </p>

                        <h1 class="font-headline text-3xl md:text-4xl font-bold text-primary mt-1">
                            {{ $schedule->activity->name }}
                        </h1>
                    </div>

                </div>

            </div>

        </section>


        {{-- Detail --}}
        <section class="py-12 px-4 md:px-6">

            <div class="max-w-[1000px] mx-auto">

                {{-- Main Card --}}
                <div class="bg-white rounded-2xl shadow-[0_4px_20px_rgba(30,64,175,0.08)] border border-gray-100 overflow-hidden">

                    {{-- Blue header --}}
                    <div class="bg-primary px-6 md:px-8 py-6 text-white">

                        <div class="flex items-start justify-between gap-4">

                            <div>

                                <p class="text-blue-100 text-sm uppercase tracking-wider mb-2">
                                    Kegiatan
                                </p>

                                <h2 class="font-headline text-2xl md:text-3xl font-bold">
                                    {{ $schedule->activity->name }}
                                </h2>

                                @if($schedule->theme)
                                    <p class="mt-2 text-blue-100">
                                        {{ $schedule->theme }}
                                    </p>
                                @endif

                            </div>

                            <span class="material-symbols-outlined text-4xl hidden sm:block">
                                church
                            </span>

                        </div>

                    </div>


                    {{-- Informasi --}}
                    <div class="p-6 md:p-8">

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

                            {{-- Tanggal --}}
                            <div class="bg-surface-container-low rounded-xl p-5">

                                <div class="flex items-center gap-2 text-primary mb-3">

                                    <span class="material-symbols-outlined">
                                        calendar_today
                                    </span>

                                    <span class="font-semibold">
                                        Tanggal
                                    </span>

                                </div>

                                <p class="text-lg font-semibold text-on-surface">

                                    {{ \Carbon\Carbon::parse($schedule->date)->translatedFormat('l, d F Y') }}

                                </p>

                            </div>


                            {{-- Jam --}}
                            <div class="bg-surface-container-low rounded-xl p-5">

                                <div class="flex items-center gap-2 text-primary mb-3">

                                    <span class="material-symbols-outlined">
                                        schedule
                                    </span>

                                    <span class="font-semibold">
                                        Jam
                                    </span>

                                </div>

                                <p class="text-lg font-semibold text-on-surface">

                                    {{ \Carbon\Carbon::parse($schedule->time)->format('H.i') }} WIB

                                </p>

                            </div>


                            {{-- Lokasi --}}
                            <div class="bg-surface-container-low rounded-xl p-5">

                                <div class="flex items-center gap-2 text-primary mb-3">

                                    <span class="material-symbols-outlined">
                                        location_on
                                    </span>

                                    <span class="font-semibold">
                                        Lokasi
                                    </span>

                                </div>

                                <p class="text-lg font-semibold text-on-surface">

                                    {{ $schedule->location ?? '-' }}

                                </p>

                            </div>

                        </div>


                        {{-- Pelayan --}}
                        <div class="mt-10">

                            <div class="flex items-center justify-between mb-5">

                                <div>

                                    <div class="flex items-center gap-2">

                                        <span class="material-symbols-outlined text-primary text-2xl">
                                            groups
                                        </span>

                                        <h2 class="font-headline text-2xl font-bold text-on-surface">
                                            Pelayan
                                        </h2>

                                    </div>

                                    <p class="text-on-surface-variant mt-1">
                                        Daftar petugas pelayanan untuk jadwal ini.
                                    </p>

                                </div>

                                <span class="hidden sm:flex items-center justify-center w-12 h-12 rounded-full bg-primary/10 text-primary font-bold">
                                    {{ $schedule->details->count() }}
                                </span>

                            </div>


                            @forelse($schedule->details as $detail)

                                <div class="flex items-center gap-4 p-4 mb-3 bg-surface-container-low rounded-xl border border-gray-100">

                                    <div class="w-11 h-11 rounded-full bg-primary/10 flex items-center justify-center shrink-0">

                                        <span class="material-symbols-outlined text-primary">
                                            person
                                        </span>

                                    </div>

                                    <div>

                                        <p class="font-semibold text-on-surface">
                                            {{ $detail->servant->name }}
                                        </p>

                                        <p class="text-sm text-on-surface-variant mt-1">
                                            {{ $detail->serviceRole->name }}
                                        </p>

                                    </div>

                                </div>

                            @empty

                                <div class="rounded-xl bg-surface-container-low p-8 text-center">

                                    <div class="w-14 h-14 mx-auto rounded-full bg-primary/10 flex items-center justify-center mb-4">

                                        <span class="material-symbols-outlined text-primary text-3xl">
                                            groups
                                        </span>

                                    </div>

                                    <h3 class="font-headline text-lg font-semibold text-on-surface">
                                        Belum ada pelayan
                                    </h3>

                                    <p class="text-on-surface-variant mt-1">
                                        Pelayan untuk jadwal ini belum ditentukan.
                                    </p>

                                </div>

                            @endforelse

                        </div>


                        {{-- Tombol kembali --}}
                        <div class="mt-10 pt-6 border-t border-gray-200">

                            <a
                                href="{{ url('/') }}#jadwal"
                                class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-primary text-white font-semibold hover:bg-primary-container transition shadow-sm"
                            >

                                <span class="material-symbols-outlined">
                                    arrow_back
                                </span>

                                Kembali ke Jadwal

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>


    {{-- FOOTER --}}
    <footer class="bg-tertiary text-white border-t border-gray-200">

        <div class="max-w-[1200px] mx-auto px-4 md:px-6 py-12">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                <div>

                    <h3 class="font-headline text-xl font-bold text-orange-200">
                        GKMI Winong
                    </h3>

                    <p class="mt-3 text-white/70">
                        Melayani dengan kasih, bertumbuh dalam iman,
                        dan menjadi berkat bagi sesama.
                    </p>

                </div>


                <div>

                    <h3 class="font-headline text-xl font-bold text-orange-200">
                        Tautan Cepat
                    </h3>

                    <div class="flex flex-col gap-2 mt-4">

                        <a
                            href="{{ url('/') }}"
                            class="text-white/70 hover:text-white transition"
                        >
                            Beranda
                        </a>

                        <a
                            href="{{ url('/') }}#jadwal"
                            class="text-white/70 hover:text-white transition"
                        >
                            Jadwal
                        </a>

                        <a
                            href="{{ url('/') }}#pengumuman"
                            class="text-white/70 hover:text-white transition"
                        >
                            Pengumuman
                        </a>

                    </div>

                </div>


                <div>

                    <h3 class="font-headline text-xl font-bold text-orange-200">
                        Hubungi Kami
                    </h3>

                    <div class="flex flex-col gap-2 mt-4 text-white/70">

                        <p>
                            GKMI Winong
                        </p>

                    </div>

                </div>

            </div>


            <div class="mt-10 pt-6 border-t border-white/20 text-center text-white/60">

                © {{ now()->year }} GKMI Winong.
                Semua Hak Dilindungi.

            </div>

        </div>

    </footer>

</body>

</html>