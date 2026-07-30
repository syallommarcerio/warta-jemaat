<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Warta Jemaat {{ $setting->church_name }}</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&amp;family=Manrope:wght@600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "on-secondary": "#ffffff",
                      "background": "#f8f9fb",
                      "on-primary": "#ffffff",
                      "secondary-fixed": "#ffdcc3",
                      "on-primary-fixed": "#001453",
                      "surface-bright": "#f8f9fb",
                      "surface-dim": "#d9dadc",
                      "primary-container": "#1e40af",
                      "on-error-container": "#93000a",
                      "on-secondary-fixed": "#2f1500",
                      "on-tertiary-fixed-variant": "#38485d",
                      "on-surface": "#191c1e",
                      "surface": "#f8f9fb",
                      "tertiary-fixed-dim": "#b7c8e1",
                      "on-error": "#ffffff",
                      "tertiary-container": "#3c4c61",
                      "on-background": "#191c1e",
                      "primary-fixed-dim": "#b8c4ff",
                      "surface-container-low": "#f3f4f6",
                      "on-tertiary-fixed": "#0b1c30",
                      "on-tertiary": "#ffffff",
                      "on-secondary-container": "#663500",
                      "surface-container-high": "#e7e8ea",
                      "inverse-on-surface": "#f0f1f3",
                      "secondary-container": "#fe932c",
                      "on-secondary-fixed-variant": "#6e3900",
                      "on-tertiary-container": "#acbcd6",
                      "error": "#ba1a1a",
                      "secondary-fixed-dim": "#ffb77d",
                      "surface-container": "#edeef0",
                      "surface-variant": "#e1e2e4",
                      "inverse-surface": "#2e3132",
                      "surface-container-highest": "#e1e2e4",
                      "on-surface-variant": "#444653",
                      "outline-variant": "#c4c5d5",
                      "on-primary-fixed-variant": "#173bab",
                      "tertiary-fixed": "#d3e4fe",
                      "inverse-primary": "#b8c4ff",
                      "outline": "#757684",
                      "error-container": "#ffdad6",
                      "primary": "#00288e",
                      "primary-fixed": "#dde1ff",
                      "surface-tint": "#3755c3",
                      "surface-container-lowest": "#ffffff",
                      "secondary": "#904d00",
                      "on-primary-container": "#a8b8ff",
                      "tertiary": "#25354a"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "unit": "4px",
                      "margin-mobile": "16px",
                      "xs": "0.5rem",
                      "container-max": "1200px",
                      "md": "1.5rem",
                      "sm": "1rem",
                      "gutter": "24px",
                      "lg": "2.5rem",
                      "xl": "4rem"
              },
              "fontFamily": {
                      "display-lg": [
                              "Manrope"
                      ],
                      "label-md": [
                              "Inter"
                      ],
                      "headline-lg": [
                              "Manrope"
                      ],
                      "headline-md": [
                              "Manrope"
                      ],
                      "headline-lg-mobile": [
                              "Manrope"
                      ],
                      "headline-sm": [
                              "Manrope"
                      ],
                      "body-md": [
                              "Inter"
                      ],
                      "body-lg": [
                              "Inter"
                      ]
              },
              "fontSize": {
                      "display-lg": [
                              "48px",
                              {
                                      "lineHeight": "1.1",
                                      "letterSpacing": "-0.02em",
                                      "fontWeight": "700"
                              }
                      ],
                      "label-md": [
                              "14px",
                              {
                                      "lineHeight": "1.2",
                                      "letterSpacing": "0.01em",
                                      "fontWeight": "500"
                              }
                      ],
                      "headline-lg": [
                              "32px",
                              {
                                      "lineHeight": "1.2",
                                      "fontWeight": "600"
                              }
                      ],
                      "headline-md": [
                              "24px",
                              {
                                      "lineHeight": "1.3",
                                      "fontWeight": "600"
                              }
                      ],
                      "headline-lg-mobile": [
                              "28px",
                              {
                                      "lineHeight": "1.2",
                                      "fontWeight": "600"
                              }
                      ],
                      "headline-sm": [
                              "20px",
                              {
                                      "lineHeight": "1.4",
                                      "fontWeight": "600"
                              }
                      ],
                      "body-md": [
                              "16px",
                              {
                                      "lineHeight": "1.6",
                                      "fontWeight": "400"
                              }
                      ],
                      "body-lg": [
                              "18px",
                              {
                                      "lineHeight": "1.6",
                                      "fontWeight": "400"
                              }
                      ]
              }
      },
          },
        }
    </script>
<style>
        .material-symbols-outlined {
          font-variation-settings:
          'FILL' 0,
          'wght' 400,
          'GRAD' 0,
          'opsz' 24
        }
        .material-symbols-outlined.fill {
            font-variation-settings: 'FILL' 1;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex flex-col antialiased">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-surface/80 dark:bg-surface-container/80 backdrop-blur-md shadow-sm dark:shadow-none transition-all duration-300">
<div class="flex justify-between items-center max-w-[1200px] mx-auto px-margin-mobile md:px-sm h-16">
<div class="flex items-center gap-xs cursor-pointer group">
<img alt="GKMI Winong Logo" class="h-8 w-auto rounded-full shadow-sm group-hover:scale-105 transition-transform" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9H5lPu54Ajzo_iAZ-JSx-nJ0O3nL6BXIgsIywtPjPhJhwzb4zv2HSk5x1ymc3iXGM84KBHKhAUyAQJD9risjzL7lbwpSDNiLRCmMmbTJ9mBRH2AsjIuHO1I53nLagQrgbT7oM4lAkwyIFNd_nKGgpBdUW4LgCnHhrGOEiW540o8zVri3yorTbjXBdOB6WFWgPCmuBb81sL_n-aQUab5tLJ6t-kwlI0oRBwzx34IBJdSff7q1pqcS59mnAPAe1VZrqRXbdGKxMtjc"/>
<span class="font-headline-md text-headline-md font-bold text-primary dark:text-primary-fixed">{{ $setting->church_name }}</span>
</div>
<div class="hidden md:flex items-center gap-gutter">
<a class="font-label-md text-label-md uppercase tracking-wider text-primary dark:text-secondary-fixed-dim font-semibold border-b-2 border-secondary-container hover:opacity-90 transition-all duration-300" href="#beranda">Beranda</a>
<a class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed transition-colors hover:opacity-90 transition-all duration-300" href="#jadwal">Jadwal Pelayanan</a>
<a class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed transition-colors hover:opacity-90 transition-all duration-300" href="#pengumuman">Pengumuman</a>
<a class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed transition-colors hover:opacity-90 transition-all duration-300" href="#kontak">Kontak</a>
</div>
<button class="hidden md:flex items-center justify-center px-md py-xs rounded-full bg-primary text-on-primary font-label-md text-label-md hover:bg-primary/90 transition-colors shadow-sm hover:shadow-md active:scale-95 transition-transform">
                Login Admin
            </button>
<!-- Mobile Menu Button (Placeholder for interaction) -->
<button class="md:hidden p-xs text-on-surface hover:text-primary transition-colors">
<span class="material-symbols-outlined text-2xl">menu</span>
</button>
</div>
</nav>
<main class="flex-grow pt-16">

<!-- Hero Section -->
<section class="relative py-md md:py-xl px-margin-mobile md:px-gutter flex flex-col items-center justify-center min-h-[50vh] md:min-h-[70vh] text-center overflow-hidden" id="beranda"><div class="absolute inset-0 z-0 opacity-5 pointer-events-none flex items-center justify-center"><div class="w-[800px] h-[800px] rounded-full bg-primary blur-3xl mix-blend-multiply"></div></div><div class="relative z-10 max-w-3xl flex flex-col items-center gap-md"><img alt="GKMI Winong Logo Large" class="w-24 h-24 md:w-48 md:h-48 rounded-full shadow-[0_4px_20px_rgba(30,64,175,0.15)] mb-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBc73VsIlcOfA5d4JEOv0nTA9fFJH0I2Mdm3-EonWAmqt3m7HkYTglaaNEVKl0WGytwonLf2vtRG5TGmN0fKxU5PeEDKYYakiFArE7tGrOlN8yVFRXAhG8w1FoUyjMcOPWKe08n1S7mM8bgBXI7-_eRGqomVZS_FknN1rXMp1F01h1SARya1ioJcgqG3KeKDwzF_QwNAQ6DHsXhKAEtgSLNNiiYGgz9OeJ37iKYHMNpN4bX2UAMhEOAcZwUNjUSz4xxxvKAtDHF2Vc"/><div class="flex flex-col gap-xs"><h1 class="font-display-lg text-display-lg text-primary">Warta Jemaat {{ $setting->church_name }}</h1><p class="font-headline-sm text-headline-sm text-secondary italic">Urip iku Urup</p></div><p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">Website resmi GKMI Winong untuk melihat jadwal pelayanan, pengumuman, dan informasi terbaru bagi jemaat.</p><div class="flex flex-col sm:flex-row gap-sm mt-sm"><a class="px-xl py-sm rounded-full bg-primary text-on-primary font-label-md text-label-md uppercase tracking-wider hover:bg-primary/90 transition-all shadow-md hover:shadow-lg active:scale-95 text-center" href="#jadwal">Lihat Jadwal Minggu Ini</a><a class="px-xl py-sm rounded-full bg-surface text-primary border border-primary font-label-md text-label-md uppercase tracking-wider hover:bg-primary hover:text-on-primary transition-all shadow-sm hover:shadow-md active:scale-95 text-center" href="#pengumuman">Lihat Pengumuman</a></div></div></section>

        <!-- Jadwal Pelayanan Section -->

<section class="py-xl px-margin-mobile md:px-gutter bg-surface-container-lowest" id="jadwal">

    <div class="max-w-[1200px] mx-auto">

        <div class="flex items-center gap-sm mb-lg">

            <span class="material-symbols-outlined text-primary text-3xl fill">
                event
            </span>

            <h2 class="font-headline-lg text-headline-lg text-on-surface">
                Jadwal Mendatang
            </h2>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">

            @forelse($schedules as $schedule)

                <div class="bg-surface rounded-[16px] p-lg shadow-[0_4px_20px_rgba(30,64,175,0.06)] hover:shadow-[0_8px_30px_rgba(30,64,175,0.1)] transition-shadow flex flex-col gap-sm border border-outline/5 relative overflow-hidden">

                    <div class="absolute top-0 left-0 w-2 h-full bg-primary"></div>

                    @if($loop->first)
                        <span class="inline-block w-fit mb-2 px-3 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-600">
                            📅 TERDEKAT
                        </span>
                    @endif

                    <h3 class="font-headline-sm text-headline-sm text-primary">
                        {{ $schedule->activity->name }}
                    </h3>

                    <div class="flex items-center gap-xs text-on-surface-variant">

                        <span class="material-symbols-outlined text-sm">
                            calendar_today
                        </span>

                        <span class="font-body-md">
                            {{ \Carbon\Carbon::parse($schedule->date)->translatedFormat('l, d F Y') }}
                        </span>

                    </div>

                    <div class="flex items-center gap-xs text-on-surface-variant">

                        <span class="material-symbols-outlined text-sm">
                            schedule
                        </span>

                        <span class="font-body-md">
                            {{ \Carbon\Carbon::parse($schedule->time)->format('H.i') }} WIB
                        </span>

                    </div>

                    <div class="flex items-center gap-xs text-on-surface-variant">

                        <span class="material-symbols-outlined text-sm">
                            location_on
                        </span>

                        <span class="font-body-md">
                            {{ $schedule->location }}
                        </span>

                    </div>

                    @if($schedule->theme)

                        <div class="flex items-start gap-xs text-on-surface-variant">

                            <span class="material-symbols-outlined text-sm">
                                auto_stories
                            </span>

                            <span class="font-body-md">
                                {{ $schedule->theme }}
                            </span>

                        </div>

                    @endif

                    <div class="flex items-center gap-xs text-on-surface-variant">

                        <span class="material-symbols-outlined text-sm">
                            groups
                        </span>

                        <span class="font-body-md">
                            {{ $schedule->details->count() }} Pelayan
                        </span>

                    </div>

                    <button
                        class="mt-auto px-md py-xs rounded-full bg-primary text-white hover:bg-primary/90 transition">

                        Lihat Detail

                    </button>

                </div>

            @empty

                <div class="col-span-3 text-center text-gray-500 py-10">

                    Belum ada jadwal pelayanan.

                </div>

            @endforelse

        </div>

    </div>

</section>
</main>
<!-- Pengumuman Section -->
<section class="py-xl px-margin-mobile md:px-gutter bg-background" id="pengumuman">

    <div class="max-w-[1200px] mx-auto">

        <div class="flex items-center gap-sm mb-lg">

            <span class="material-symbols-outlined text-primary text-3xl fill">
                campaign
            </span>

            <h2 class="font-headline-lg text-headline-lg text-on-surface">
                Pengumuman Terbaru
            </h2>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">

            @forelse($announcements as $announcement)

                <div class="bg-white rounded-2xl overflow-hidden shadow hover:shadow-lg transition duration-300">

                    @if($announcement->image)

                        <img
                            src="{{ asset('storage/' . $announcement->image) }}"
                            alt="{{ $announcement->title }}"
                            class="w-full h-56 object-cover">

                    @endif

                    <div class="p-6 flex flex-col h-full">

                        <p class="text-sm text-gray-500 mb-2">

                            Berlaku
                            {{ \Carbon\Carbon::parse($announcement->start_date)->translatedFormat('d M Y') }}

                        </p>

                        <h3 class="text-xl font-semibold text-primary mb-3">

                            {{ $announcement->title }}

                        </h3>

                        <p class="text-gray-600 flex-grow">

                            {{ Str::limit(strip_tags($announcement->description), 120) }}

                        </p>

                        <button
                            class="mt-5 w-full py-2 rounded-full bg-primary text-white hover:bg-primary/90 transition">

                            Baca Selengkapnya

                        </button>

                    </div>

                </div>

            @empty

                <div class="col-span-3 text-center text-gray-500 py-10">

                    Belum ada pengumuman.

                </div>

            @endforelse

        </div>

    </div>

</section>
<!-- Footer -->
<footer class="w-full py-xl bg-tertiary dark:bg-surface-container-lowest text-on-tertiary dark:text-on-surface border-t border-outline/10">
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter max-w-[1200px] mx-auto px-margin-mobile md:px-sm">
<div class="flex flex-col gap-sm">
<span class="font-headline-sm text-headline-sm font-bold text-secondary-fixed dark:text-secondary">{{ $setting->church_name }}</span>
<p class="font-body-md text-body-md text-on-tertiary/80 dark:text-on-surface-variant max-w-sm">Melayani dengan kasih, bertumbuh dalam iman, dan menjadi berkat bagi sesama.</p>
</div>
<div class="flex flex-col gap-sm">
<span class="font-headline-sm text-headline-sm font-bold text-secondary-fixed dark:text-secondary">Tautan Cepat</span>
<nav class="flex flex-col gap-xs">
<a class="font-body-md text-body-md text-on-tertiary/80 dark:text-on-surface-variant hover:text-secondary-fixed transition-colors focus:outline-none focus:ring-2 focus:ring-secondary-fixed w-fit" href="#beranda">Beranda</a>
<a class="font-body-md text-body-md text-on-tertiary/80 dark:text-on-surface-variant hover:text-secondary-fixed transition-colors focus:outline-none focus:ring-2 focus:ring-secondary-fixed w-fit" href="#jadwal">Jadwal</a>
<a class="font-body-md text-body-md text-on-tertiary/80 dark:text-on-surface-variant hover:text-secondary-fixed transition-colors focus:outline-none focus:ring-2 focus:ring-secondary-fixed w-fit" href="#pengumuman">Pengumuman</a>
<a class="font-body-md text-body-md text-on-tertiary/80 dark:text-on-surface-variant hover:text-secondary-fixed transition-colors focus:outline-none focus:ring-2 focus:ring-secondary-fixed w-fit" href="#kontak">Kontak</a>
<a class="font-body-md text-body-md text-on-tertiary/80 dark:text-on-surface-variant hover:text-secondary-fixed transition-colors focus:outline-none focus:ring-2 focus:ring-secondary-fixed w-fit" href="#">Kebijakan Privasi</a>
</nav>
</div>
<div class="flex flex-col gap-sm">
<span class="font-headline-sm text-headline-sm font-bold text-secondary-fixed dark:text-secondary">Hubungi Kami</span>
<div class="flex flex-col gap-xs font-body-md text-body-md text-on-tertiary/80 dark:text-on-surface-variant">
<p>{{ $setting->address }}</p>
<p>Email: {{ $setting->email }}</p>
<p>Telp: {{ $setting->phone }}</p>
</div>
</div>
</div>
<div class="mt-lg pt-md border-t border-on-tertiary/20 text-center px-margin-mobile">
<p class="font-body-md text-body-md text-on-tertiary/60 dark:text-on-surface-variant">© {{ now()->year }} {{ $setting->church_name }}. Semua Hak Dilindungi.</p>
</div>
</footer>
</body></html>