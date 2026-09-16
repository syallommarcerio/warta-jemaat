<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jadwal Pelayanan - GKMI Winong</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet"
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Manrope:wght@600;700&display=swap"
        rel="stylesheet"
    >

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        background: "#f8f9fb",
                        primary: "#00288e",
                        "primary-container": "#1e40af",
                        "on-surface": "#191c1e",
                        "on-surface-variant": "#444653",
                        tertiary: "#25354a"
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
    </style>
</head>


<body class="bg-background text-on-surface font-body min-h-screen">

    {{-- NAVBAR --}}
    <nav class="fixed top-0 w-full z-50 bg-white/90 backdrop-blur-md shadow-sm">

        <div class="max-w-[1200px] mx-auto px-4 md:px-6 h-16 flex items-center justify-between">

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="flex items-center gap-2">

                <img
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9H5lPu54Ajzo_iAZ-JSx-nJ0O3nL6BXIgsIywtPjPhJhwzb4zv2HSk5x1ymc3iXGM84KBHKhAUyAQJD9risjzL7lbwpSDNiLRCmMmbTJ9mBRH2AsjIuHO1I53nLagQrgbT7oM4lAkwyIFNd_nKGgpBdUW4LgCnHhrGOEiW540o8zVri3yorTbjXBdOB6WFWgPCmuBb81sL_n-aQUab5tLJ6t-kwlI0oRBwzx34IBJdSff7q1pqcS59mnAPAe1VZrqRXbdGKxMtjc"
                    alt="GKMI Winong"
                    class="h-9 w-9 rounded-full"
                >

                <span class="font-headline font-bold text-primary text-xl">
                    GKMI Winong
                </span>

            </a>


            {{-- Menu --}}
            <div class="hidden md:flex items-center gap-8">

                <a
                    href="{{ url('/') }}"
                    class="text-sm uppercase tracking-wider text-on-surface-variant hover:text-primary"
                >
                    Beranda
                </a>

                <a
                    href="{{ route('schedules.public') }}"
                    class="text-sm uppercase tracking-wider text-primary font-semibold border-b-2 border-orange-400 pb-1"
                >
                    Jadwal Pelayanan
                </a>

                <a
                    href="{{ url('/') }}#pengumuman"
                    class="text-sm uppercase tracking-wider text-on-surface-variant hover:text-primary"
                >
                    Pengumuman
                </a>

                <a
                    href="{{ url('/') }}#kontak"
                    class="text-sm uppercase tracking-wider text-on-surface-variant hover:text-primary"
                >
                    Kontak
                </a>

            </div>


            {{-- Login --}}
            <a
                href="{{ route('login') }}"
                class="hidden md:flex px-6 py-2 rounded-full bg-primary text-white font-semibold text-sm hover:bg-primary-container transition"
            >
                Login Admin
            </a>

        </div>

    </nav>


    {{-- CONTENT --}}
    <main class="pt-16">

        {{-- Header --}}
        <section class="bg-white py-12">

            <div class="max-w-[1200px] mx-auto px-4 md:px-6">

                <a
                    href="{{ url('/') }}"
                    class="inline-flex items-center gap-2 text-primary hover:text-primary-container mb-6"
                >

                    <span class="material-symbols-outlined">
                        arrow_back
                    </span>

                    Kembali ke Beranda

                </a>


                <div class="flex items-center gap-3">

                    <span class="material-symbols-outlined text-primary text-4xl">
                        calendar_month
                    </span>

                    <div>

                        <p class="text-sm text-on-surface-variant uppercase tracking-wider">
                            Informasi Gereja
                        </p>

                        <h1 class="font-headline text-3xl md:text-4xl font-bold text-primary">
                            Jadwal Pelayanan
                        </h1>

                    </div>

                </div>

                <p class="mt-4 text-on-surface-variant max-w-2xl">
                    Lihat jadwal kegiatan dan pelayanan GKMI Winong yang akan datang.
                </p>

            </div>

        </section>


        {{-- SCHEDULES --}}
        <section class="py-12">

            <div class="max-w-[1200px] mx-auto px-4 md:px-6">

                @if($schedules->count())

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                        @foreach($schedules as $schedule)

                            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-[0_4px_20px_rgba(30,64,175,0.06)] relative overflow-hidden flex flex-col">

                                {{-- Garis biru --}}
                                <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-primary"></div>


                                {{-- Badge terdekat --}}
                                @if($loop->first)

                                    <div class="mb-4">

                                        <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-red-100 text-red-600 text-xs font-semibold">

                                            <span class="material-symbols-outlined text-sm">
                                                event
                                            </span>

                                            TERDEKAT

                                        </span>

                                    </div>

                                @endif


                                {{-- Judul --}}
                                <h2 class="font-headline text-xl font-bold text-primary">

                                    {{ $schedule->activity->name }}

                                </h2>


                                {{-- Tema --}}
                                @if($schedule->theme)

                                    <p class="mt-1 text-sm text-on-surface-variant">

                                        {{ $schedule->theme }}

                                    </p>

                                @endif


                                {{-- Info --}}
                                <div class="mt-5 space-y-3">

                                    <div class="flex items-center gap-2 text-on-surface-variant">

                                        <span class="material-symbols-outlined text-base">
                                            calendar_today
                                        </span>

                                        <span>

                                            {{ \Carbon\Carbon::parse($schedule->date)->translatedFormat('l, d F Y') }}

                                        </span>

                                    </div>


                                    <div class="flex items-center gap-2 text-on-surface-variant">

                                        <span class="material-symbols-outlined text-base">
                                            schedule
                                        </span>

                                        <span>

                                            {{ substr($schedule->time, 0, 5) }} WIB

                                        </span>

                                    </div>


                                    <div class="flex items-center gap-2 text-on-surface-variant">

                                        <span class="material-symbols-outlined text-base">
                                            location_on
                                        </span>

                                        <span>

                                            {{ $schedule->location ?? '-' }}

                                        </span>

                                    </div>


                                    <div class="flex items-center gap-2 text-on-surface-variant">

                                        <span class="material-symbols-outlined text-base">
                                            groups
                                        </span>

                                        <span>

                                            {{ $schedule->details->count() }} Pelayan

                                        </span>

                                    </div>

                                </div>


                                {{-- Detail --}}
                                <a
                                    href="{{ route('schedule.show', $schedule) }}"
                                    class="mt-6 w-full text-center px-5 py-3 rounded-full bg-primary/10 text-primary font-semibold hover:bg-primary hover:text-white transition"
                                >
                                    Lihat Detail
                                </a>

                            </div>

                        @endforeach

                    </div>

                @else

                    <div class="bg-white rounded-2xl p-12 text-center shadow-sm">

                        <span class="material-symbols-outlined text-5xl text-primary">
                            event_busy
                        </span>

                        <h2 class="font-headline text-xl font-bold mt-4">
                            Belum Ada Jadwal
                        </h2>

                        <p class="text-on-surface-variant mt-2">
                            Belum ada jadwal pelayanan yang tersedia.
                        </p>

                    </div>

                @endif

            </div>

        </section>

    </main>


    {{-- FOOTER --}}
    <footer class="bg-tertiary text-white mt-10">

        <div class="max-w-[1200px] mx-auto px-4 md:px-6 py-10">

            <div class="text-center">

                <h2 class="font-headline text-xl font-bold">
                    GKMI Winong
                </h2>

                <p class="text-white/60 mt-2">
                    Melayani dengan kasih dan bertumbuh dalam iman.
                </p>

                <div class="border-t border-white/20 mt-8 pt-6 text-white/50 text-sm">

                    © {{ now()->year }} GKMI Winong.
                    Semua hak dilindungi.

                </div>

            </div>

        </div>

    </footer>

</body>

</html>