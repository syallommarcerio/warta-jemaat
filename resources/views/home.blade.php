<!DOCTYPE html>

<html class="light" lang="id">

<head>
    <meta charset="utf-8"/>

    <meta
        content="width=device-width, initial-scale=1.0"
        name="viewport"
    />

    <title>
        Warta Jemaat {{ $setting->church_name }}
    </title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet"
    />

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Manrope:wght@600;700&display=swap"
        rel="stylesheet"
    />

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",

            theme: {
                extend: {
                    colors: {
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

                    borderRadius: {
                        DEFAULT: "0.25rem",
                        lg: "0.5rem",
                        xl: "0.75rem",
                        full: "9999px"
                    },

                    spacing: {
                        unit: "4px",
                        "margin-mobile": "16px",
                        xs: "0.5rem",
                        "container-max": "1200px",
                        md: "1.5rem",
                        sm: "1rem",
                        gutter: "24px",
                        lg: "2.5rem",
                        xl: "4rem"
                    },

                    fontFamily: {
                        "display-lg": ["Manrope"],
                        "label-md": ["Inter"],
                        "headline-lg": ["Manrope"],
                        "headline-md": ["Manrope"],
                        "headline-lg-mobile": ["Manrope"],
                        "headline-sm": ["Manrope"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"]
                    },

                    fontSize: {
                        "display-lg": [
                            "48px",
                            {
                                lineHeight: "1.1",
                                letterSpacing: "-0.02em",
                                fontWeight: "700"
                            }
                        ],

                        "label-md": [
                            "14px",
                            {
                                lineHeight: "1.2",
                                letterSpacing: "0.01em",
                                fontWeight: "500"
                            }
                        ],

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

                        "headline-lg-mobile": [
                            "28px",
                            {
                                lineHeight: "1.2",
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
                        ]
                    }
                }
            }
        }
    </script>

    <style>
        html {
            scroll-behavior: smooth;
        }

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

        .public-nav-link {
            position: relative;
            transition: all 0.3s ease;
        }

        .public-nav-link.active {
            color: #00288e;
            font-weight: 600;
        }

        .public-nav-link.active::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: -8px;
            height: 2px;
            background-color: #fe932c;
            border-radius: 9999px;
        }
    </style>

</head>


<body class="bg-background text-on-background font-body-md min-h-screen flex flex-col antialiased">


    {{-- ========================= --}}
    {{-- TOP NAVBAR --}}
    {{-- ========================= --}}

    <nav
        class="fixed top-0 w-full z-50
               bg-surface/80
               backdrop-blur-md
               shadow-sm
               transition-all duration-300"
    >

        <div
            class="flex justify-between items-center
                   max-w-[1200px] mx-auto
                   px-margin-mobile md:px-sm
                   h-16"
        >

            {{-- LOGO --}}
            <a
                href="#beranda"
                class="flex items-center gap-xs cursor-pointer group"
            >

                <img
                    alt="GKMI Winong Logo"
                    class="h-8 w-auto rounded-full shadow-sm
                           group-hover:scale-105 transition-transform"
                    src="{{ asset('images/logo.gkmi.png') }}"
                >

                <span
                    class="font-headline-md text-headline-md
                           font-bold text-primary"
                >
                    {{ $setting->church_name }}
                </span>

            </a>


            {{-- DESKTOP NAV --}}
            <div class="hidden md:flex items-center gap-gutter">

                {{-- BERANDA --}}
                <a
                    id="nav-beranda"
                    href="#beranda"
                    data-section="beranda"
                    class="public-nav-link
                           font-label-md text-label-md
                           uppercase tracking-wider
                           text-on-surface-variant
                           hover:text-primary"
                >
                    Beranda
                </a>


                {{-- JADWAL --}}
                <a
                    id="nav-jadwal"
                    href="#jadwal"
                    data-section="jadwal"
                    class="public-nav-link
                           font-label-md text-label-md
                           uppercase tracking-wider
                           text-on-surface-variant
                           hover:text-primary"
                >
                    Jadwal Pelayanan
                </a>


                {{-- PENGUMUMAN --}}
                <a
                    id="nav-pengumuman"
                    href="#pengumuman"
                    data-section="pengumuman"
                    class="public-nav-link
                           font-label-md text-label-md
                           uppercase tracking-wider
                           text-on-surface-variant
                           hover:text-primary"
                >
                    Pengumuman
                </a>


                {{-- KONTAK --}}
                <a
                    id="nav-kontak"
                    href="#kontak"
                    data-section="kontak"
                    class="public-nav-link
                           font-label-md text-label-md
                           uppercase tracking-wider
                           text-on-surface-variant
                           hover:text-primary"
                >
                    Kontak
                </a>


                {{-- LOGIN ADMIN --}}
                <a
                    href="{{ route('login') }}"
                    class="flex items-center justify-center
                           px-md py-xs
                           rounded-full
                           bg-primary
                           text-on-primary
                           font-label-md text-label-md
                           hover:bg-primary/90
                           transition-colors
                           shadow-sm hover:shadow-md
                           active:scale-95"
                >
                    Login Admin
                </a>

            </div>


            {{-- MOBILE MENU BUTTON --}}
            <button
                id="mobile-menu-button"
                type="button"
                class="md:hidden p-xs
                       text-on-surface
                       hover:text-primary
                       transition-colors"
            >
                <span class="material-symbols-outlined text-2xl">
                    menu
                </span>
            </button>

        </div>


        {{-- MOBILE NAV --}}
        <div
            id="mobile-menu"
            class="hidden md:hidden
                   bg-surface
                   border-t border-outline/10
                   shadow-md"
        >

            <div class="flex flex-col px-margin-mobile py-sm gap-2">

                <a
                    href="#beranda"
                    data-section="beranda"
                    class="mobile-nav-link px-4 py-3 rounded-lg
                           text-sm font-medium
                           text-on-surface-variant
                           hover:bg-surface-container-low
                           hover:text-primary"
                >
                    Beranda
                </a>

                <a
                    href="#jadwal"
                    data-section="jadwal"
                    class="mobile-nav-link px-4 py-3 rounded-lg
                           text-sm font-medium
                           text-on-surface-variant
                           hover:bg-surface-container-low
                           hover:text-primary"
                >
                    Jadwal Pelayanan
                </a>

                <a
                    href="#pengumuman"
                    data-section="pengumuman"
                    class="mobile-nav-link px-4 py-3 rounded-lg
                           text-sm font-medium
                           text-on-surface-variant
                           hover:bg-surface-container-low
                           hover:text-primary"
                >
                    Pengumuman
                </a>

                <a
                    href="#kontak"
                    data-section="kontak"
                    class="mobile-nav-link px-4 py-3 rounded-lg
                           text-sm font-medium
                           text-on-surface-variant
                           hover:bg-surface-container-low
                           hover:text-primary"
                >
                    Kontak
                </a>

                <a
                    href="{{ route('login') }}"
                    class="mt-2
                           flex items-center justify-center
                           px-4 py-3
                           rounded-lg
                           bg-primary
                           text-white
                           text-sm font-semibold"
                >
                    Login Admin
                </a>

            </div>

        </div>

    </nav>


    <main class="flex-grow pt-16">


        {{-- ========================= --}}
        {{-- HERO SECTION --}}
        {{-- ========================= --}}

        <section
            id="beranda"
            class="relative
                   py-md md:py-xl
                   px-margin-mobile md:px-gutter
                   flex flex-col
                   items-center justify-center
                   min-h-[50vh] md:min-h-[70vh]
                   text-center
                   overflow-hidden"
        >

            <div
                class="absolute inset-0 z-0
                       opacity-5
                       pointer-events-none
                       flex items-center justify-center"
            >

                <div
                    class="w-[800px] h-[800px]
                           rounded-full
                           bg-primary
                           blur-3xl
                           mix-blend-multiply"
                ></div>

            </div>


            <div
                class="relative z-10
                       max-w-3xl
                       flex flex-col
                       items-center
                       gap-md"
            >

                <img
                    alt="GKMI Winong Logo Large"
                    class="w-24 h-24 md:w-48 md:h-48
                           rounded-full
                           shadow-[0_4px_20px_rgba(30,64,175,0.15)]
                           mb-sm"
                    src="{{ asset('images/logo.gkmi.png') }}"
                >


                <div class="flex flex-col gap-xs">

                    <h1
                        class="font-display-lg
                               text-display-lg
                               text-primary"
                    >
                        Warta Jemaat {{ $setting->church_name }}
                    </h1>

                    <p
                        class="font-headline-sm
                               text-headline-sm
                               text-secondary
                               italic"
                    >
                        Urip iku Urup
                    </p>

                </div>


                <p
                    class="font-body-lg
                           text-body-lg
                           text-on-surface-variant
                           max-w-2xl"
                >
                    Website resmi GKMI Winong untuk melihat jadwal pelayanan,
                    pengumuman, dan informasi terbaru bagi jemaat.
                </p>


                <div
                    class="flex flex-col
                           sm:flex-row
                           gap-sm
                           mt-sm"
                >

                    <a
                        class="px-xl py-sm
                               rounded-full
                               bg-primary
                               text-on-primary
                               font-label-md
                               text-label-md
                               uppercase
                               tracking-wider
                               hover:bg-primary/90
                               transition-all
                               shadow-md
                               hover:shadow-lg
                               active:scale-95
                               text-center"
                        href="#jadwal"
                    >
                        Lihat Jadwal Minggu Ini
                    </a>


                    <a
                        class="px-xl py-sm
                               rounded-full
                               bg-surface
                               text-primary
                               border border-primary
                               font-label-md
                               text-label-md
                               uppercase
                               tracking-wider
                               hover:bg-primary
                               hover:text-on-primary
                               transition-all
                               shadow-sm
                               hover:shadow-md
                               active:scale-95
                               text-center"
                        href="#pengumuman"
                    >
                        Lihat Pengumuman
                    </a>

                </div>

            </div>

        </section>


        {{-- ========================= --}}
        {{-- JADWAL --}}
        {{-- ========================= --}}

        <section
            id="jadwal"
            class="py-xl
                   px-margin-mobile md:px-gutter
                   bg-surface-container-lowest"
        >

            <div class="max-w-[1200px] mx-auto">

                <div class="flex items-center gap-sm mb-lg">

                    <span
                        class="material-symbols-outlined
                               text-primary
                               text-3xl
                               fill"
                    >
                        event
                    </span>

                    <h2
                        class="font-headline-lg
                               text-headline-lg
                               text-on-surface"
                    >
                        Jadwal Mendatang
                    </h2>

                </div>


                <div
                    class="grid
                           grid-cols-1
                           md:grid-cols-2
                           lg:grid-cols-3
                           gap-gutter"
                >

                    @forelse($schedules as $schedule)

                        <x-schedule-card
                            :schedule="$schedule"
                            :terdekat="$loop->first"
                        />

                    @empty

                        <div
                            class="col-span-3
                                   text-center
                                   text-gray-500
                                   py-10"
                        >
                            Belum ada jadwal pelayanan.
                        </div>

                    @endforelse

                </div>

            </div>


            {{-- LIHAT SEMUA JADWAL --}}
            <div class="mt-8 flex justify-center">

                <a
                    href="{{ route('schedules.public') }}"
                    class="inline-flex items-center gap-2
                           px-6 py-3
                           rounded-full
                           bg-primary
                           text-white
                           font-semibold
                           hover:bg-primary/90
                           transition-all duration-200"
                >
                    Lihat Semua Jadwal

                    <span class="material-symbols-outlined text-lg">
                        arrow_forward
                    </span>

                </a>

            </div>

        </section>

    </main>


    {{-- ========================= --}}
    {{-- PENGUMUMAN --}}
    {{-- ========================= --}}

    <section
        id="pengumuman"
        class="py-xl
               px-margin-mobile md:px-gutter
               bg-background"
    >

        <div class="max-w-[1200px] mx-auto">

            <div class="flex items-center gap-sm mb-lg">

                <span
                    class="material-symbols-outlined
                           text-primary
                           text-3xl
                           fill"
                >
                    campaign
                </span>

                <h2
                    class="font-headline-lg
                           text-headline-lg
                           text-on-surface"
                >
                    Pengumuman Terbaru
                </h2>

            </div>


            <div
                class="grid
                       grid-cols-1
                       md:grid-cols-2
                       lg:grid-cols-3
                       gap-gutter"
            >

                @forelse($announcements as $announcement)

                    <div
                        class="bg-white
                               rounded-2xl
                               overflow-hidden
                               shadow
                               hover:shadow-lg
                               transition
                               duration-300"
                    >

                        @if($announcement->image)

                            <img
                                src="{{ asset('storage/' . $announcement->image) }}"
                                alt="{{ $announcement->title }}"
                                class="w-full h-56 object-cover"
                            >

                        @endif


                        <div class="p-6 flex flex-col h-full">

                            <p class="text-sm text-gray-500 mb-2">

                                Berlaku
                                {{ \Carbon\Carbon::parse($announcement->start_date)->translatedFormat('d M Y') }}

                            </p>


                            <h3
                                class="text-xl
                                       font-semibold
                                       text-primary
                                       mb-3"
                            >
                                {{ $announcement->title }}
                            </h3>


                            <p
                                class="text-gray-600
                                       flex-grow"
                            >
                                {{ Str::limit(strip_tags($announcement->description), 120) }}
                            </p>

                        </div>

                    </div>

                @empty

                    <div
                        class="col-span-3
                               text-center
                               text-gray-500
                               py-10"
                    >
                        Belum ada pengumuman.
                    </div>

                @endforelse

            </div>

        </div>

    </section>


    {{-- ========================= --}}
    {{-- FOOTER --}}
    {{-- ========================= --}}

    <footer
        id="kontak"
        class="w-full
               py-xl
               bg-tertiary
               text-on-tertiary
               border-t border-outline/10"
    >

        <div
            class="grid
                   grid-cols-1
                   md:grid-cols-3
                   gap-gutter
                   max-w-[1200px]
                   mx-auto
                   px-margin-mobile md:px-sm"
        >

            {{-- IDENTITAS --}}
            <div class="flex flex-col gap-sm">

                <span
                    class="font-headline-sm
                           text-headline-sm
                           font-bold
                           text-secondary-fixed"
                >
                    {{ $setting->church_name }}
                </span>


                <p
                    class="font-body-md
                           text-body-md
                           text-on-tertiary/80
                           max-w-sm"
                >
                    Melayani dengan kasih,
                    bertumbuh dalam iman,
                    dan menjadi berkat bagi sesama.
                </p>

            </div>


            {{-- TAUTAN --}}
            <div class="flex flex-col gap-sm">

                <span
                    class="font-headline-sm
                           text-headline-sm
                           font-bold
                           text-secondary-fixed"
                >
                    Tautan Cepat
                </span>


                <nav class="flex flex-col gap-xs">

                    <a
                        class="font-body-md
                               text-body-md
                               text-on-tertiary/80
                               hover:text-secondary-fixed
                               transition-colors
                               w-fit"
                        href="#beranda"
                    >
                        Beranda
                    </a>


                    <a
                        class="font-body-md
                               text-body-md
                               text-on-tertiary/80
                               hover:text-secondary-fixed
                               transition-colors
                               w-fit"
                        href="#jadwal"
                    >
                        Jadwal
                    </a>


                    <a
                        class="font-body-md
                               text-body-md
                               text-on-tertiary/80
                               hover:text-secondary-fixed
                               transition-colors
                               w-fit"
                        href="#pengumuman"
                    >
                        Pengumuman
                    </a>


                    <a
                        class="font-body-md
                               text-body-md
                               text-on-tertiary/80
                               hover:text-secondary-fixed
                               transition-colors
                               w-fit"
                        href="#kontak"
                    >
                        Kontak
                    </a>


                    <a
                        class="font-body-md
                               text-body-md
                               text-on-tertiary/80
                               hover:text-secondary-fixed
                               transition-colors
                               w-fit"
                        href="#"
                    >
                        Kebijakan Privasi
                    </a>

                </nav>

            </div>


            {{-- KONTAK --}}
            <div class="flex flex-col gap-sm">

                <span
                    class="font-headline-sm
                           text-headline-sm
                           font-bold
                           text-secondary-fixed"
                >
                    Hubungi Kami
                </span>


                <div
                    class="flex flex-col gap-xs
                           font-body-md
                           text-body-md
                           text-on-tertiary/80"
                >

                    <p>
                        {{ $setting->address }}
                    </p>

                    <p>
                        Email: {{ $setting->email }}
                    </p>

                    <p>
                        Telp: {{ $setting->phone }}
                    </p>

                </div>

            </div>

        </div>


        {{-- COPYRIGHT --}}
        <div
            class="mt-lg
                   pt-md
                   border-t border-on-tertiary/20
                   text-center
                   px-margin-mobile"
        >

            <p
                class="font-body-md
                       text-body-md
                       text-on-tertiary/60"
            >
                © {{ now()->year }}
                {{ $setting->church_name }}.
                Semua Hak Dilindungi.
            </p>

        </div>

    </footer>


    {{-- ========================= --}}
    {{-- PUBLIC NAV SCRIPT --}}
    {{-- ========================= --}}

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const sections = [
                {
                    id: 'beranda',
                    element: document.getElementById('beranda'),
                    nav: document.getElementById('nav-beranda')
                },
                {
                    id: 'jadwal',
                    element: document.getElementById('jadwal'),
                    nav: document.getElementById('nav-jadwal')
                },
                {
                    id: 'pengumuman',
                    element: document.getElementById('pengumuman'),
                    nav: document.getElementById('nav-pengumuman')
                },
                {
                    id: 'kontak',
                    element: document.getElementById('kontak'),
                    nav: document.getElementById('nav-kontak')
                }
            ];


            function setActiveSection(id) {

                sections.forEach(section => {

                    if (!section.nav) {
                        return;
                    }

                    if (section.id === id) {

                        section.nav.classList.add('active');

                    } else {

                        section.nav.classList.remove('active');

                    }

                });


                document.querySelectorAll('.mobile-nav-link').forEach(link => {

                    if (link.dataset.section === id) {

                        link.classList.remove(
                            'text-on-surface-variant'
                        );

                        link.classList.add(
                            'bg-primary',
                            'text-white'
                        );

                    } else {

                        link.classList.remove(
                            'bg-primary',
                            'text-white'
                        );

                        link.classList.add(
                            'text-on-surface-variant'
                        );

                    }

                });

            }


            /* =========================
               KLIK MENU
            ========================= */

            document.querySelectorAll('[data-section]').forEach(link => {

                link.addEventListener('click', function () {

                    const sectionId = this.dataset.section;

                    setActiveSection(sectionId);

                });

            });


            /* =========================
               SCROLL ACTIVE STATE
            ========================= */

            const observer = new IntersectionObserver(
                function (entries) {

                    const visibleSections = entries
                        .filter(entry => entry.isIntersecting)
                        .sort(
                            (a, b) =>
                                b.intersectionRatio -
                                a.intersectionRatio
                        );

                    if (visibleSections.length === 0) {
                        return;
                    }

                    const activeId =
                        visibleSections[0].target.id;

                    setActiveSection(activeId);

                },
                {
                    rootMargin: '-80px 0px -45% 0px',
                    threshold: [0.1, 0.25, 0.5]
                }
            );


            sections.forEach(section => {

                if (section.element) {

                    observer.observe(section.element);

                }

            });


            /* =========================
               INITIAL STATE
            ========================= */

            const hash =
                window.location.hash.replace('#', '');

            const validHash =
                sections.some(section => section.id === hash);

            if (validHash) {

                setActiveSection(hash);

            } else {

                setActiveSection('beranda');

            }


            /* =========================
               MOBILE MENU
            ========================= */

            const mobileButton =
                document.getElementById('mobile-menu-button');

            const mobileMenu =
                document.getElementById('mobile-menu');


            if (mobileButton && mobileMenu) {

                mobileButton.addEventListener('click', function () {

                    mobileMenu.classList.toggle('hidden');

                });


                mobileMenu
                    .querySelectorAll('a[data-section]')
                    .forEach(link => {

                        link.addEventListener('click', function () {

                            mobileMenu.classList.add('hidden');

                        });

                    });

            }

        });
    </script>


</body>

</html>