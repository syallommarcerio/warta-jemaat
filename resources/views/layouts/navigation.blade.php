<nav
    x-data="{
        open: false,
        activeSection: window.location.hash || '#beranda'
    }"
    x-init="
        window.addEventListener('hashchange', () => {
            activeSection = window.location.hash || '#beranda'
        });

        window.addEventListener('scroll', () => {
            if (window.location.pathname === '/') {
                const sections = ['#beranda', '#jadwal', '#pengumuman', '#kontak'];

                for (const section of sections.reverse()) {
                    const element = document.querySelector(section);

                    if (element && window.scrollY >= element.offsetTop - 150) {
                        activeSection = section;
                        break;
                    }
                }
            }
        });
    "
    class="bg-white border-b border-gray-200 shadow-sm"
>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex justify-between items-center h-16">

            {{-- LOGO --}}
            <div class="shrink-0 flex items-center">
                <x-application-logo />
            </div>


            {{-- ================= DESKTOP NAVIGATION ================= --}}
            <div class="hidden sm:flex items-center gap-2">

                @auth

                    {{-- ================= ADMIN ================= --}}

                    {{-- DASHBOARD --}}
                    <a
                        href="{{ route('dashboard') }}"
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-lg
                               text-sm font-medium transition
                               {{ request()->routeIs('dashboard')
                                    ? 'bg-blue-600 text-white'
                                    : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}"
                    >
                        <span class="material-symbols-outlined text-lg">
                            dashboard
                        </span>

                        Dashboard
                    </a>


                    {{-- JADWAL --}}
                    <a
                        href="{{ route('schedules.index') }}"
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-lg
                               text-sm font-medium transition
                               {{ request()->routeIs(
                                    'schedules.index',
                                    'schedules.create',
                                    'schedules.edit',
                                    'schedules.show',
                                    'schedule-details.*'
                               )
                                    ? 'bg-blue-600 text-white'
                                    : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}"
                    >
                        <span class="material-symbols-outlined text-lg">
                            calendar_month
                        </span>

                        Jadwal
                    </a>


                    {{-- JABATAN --}}
                    <a
                        href="{{ route('service-roles.index') }}"
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-lg
                               text-sm font-medium transition
                               {{ request()->routeIs('service-roles.*')
                                    ? 'bg-blue-600 text-white'
                                    : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}"
                    >
                        <span class="material-symbols-outlined text-lg">
                            badge
                        </span>

                        Jabatan
                    </a>


                    {{-- PENGUMUMAN --}}
                    <a
                        href="{{ route('announcements.index') }}"
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-lg
                               text-sm font-medium transition
                               {{ request()->routeIs('announcements.*')
                                    ? 'bg-blue-600 text-white'
                                    : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}"
                    >
                        <span class="material-symbols-outlined text-lg">
                            campaign
                        </span>

                        Pengumuman
                    </a>


                @else

                    {{-- ================= PUBLIC ================= --}}

                    {{-- BERANDA --}}
                    <a
                        href="{{ url('/') }}"
                        @click="activeSection = '#beranda'"
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-lg
                               text-sm font-medium transition"
                        :class="
                            (window.location.pathname === '/' &&
                            (activeSection === '#beranda' || activeSection === ''))
                                ? 'bg-blue-600 text-white'
                                : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900'
                        "
                    >
                        <span class="material-symbols-outlined text-lg">
                            home
                        </span>

                        Beranda
                    </a>


                    {{-- JADWAL --}}
                    <a
                        href="{{ request()->is('/') ? '#jadwal' : route('schedules.public') }}"
                        @click="activeSection = '#jadwal'"
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-lg
                               text-sm font-medium transition"
                        :class="
                            (
                                window.location.pathname === '/jadwal' ||
                                window.location.pathname.startsWith('/jadwal/') ||
                                (window.location.pathname === '/' && activeSection === '#jadwal')
                            )
                                ? 'bg-blue-600 text-white'
                                : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900'
                        "
                    >
                        <span class="material-symbols-outlined text-lg">
                            calendar_month
                        </span>

                        Jadwal
                    </a>


                    {{-- PENGUMUMAN --}}
                    <a
                        href="{{ request()->is('/') ? '#pengumuman' : url('/#pengumuman') }}"
                        @click="activeSection = '#pengumuman'"
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-lg
                               text-sm font-medium transition"
                        :class="
                            window.location.pathname === '/' &&
                            activeSection === '#pengumuman'
                                ? 'bg-blue-600 text-white'
                                : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900'
                        "
                    >
                        <span class="material-symbols-outlined text-lg">
                            campaign
                        </span>

                        Pengumuman
                    </a>


                    {{-- KONTAK --}}
                    <a
                        href="{{ request()->is('/') ? '#kontak' : url('/#kontak') }}"
                        @click="activeSection = '#kontak'"
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-lg
                               text-sm font-medium transition"
                        :class="
                            window.location.pathname === '/' &&
                            activeSection === '#kontak'
                                ? 'bg-blue-600 text-white'
                                : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900'
                        "
                    >
                        <span class="material-symbols-outlined text-lg">
                            contact_mail
                        </span>

                        Kontak
                    </a>

                @endauth

            </div>


            {{-- ================= USER MENU ================= --}}
            @auth

                <div class="hidden sm:flex items-center gap-3">

                    <div class="h-8 w-px bg-gray-200"></div>

                    <x-dropdown align="right" width="48">

                        <x-slot name="trigger">

                            <button
                                class="inline-flex items-center gap-2 px-3 py-2 rounded-lg
                                       text-sm font-medium text-gray-600
                                       hover:bg-gray-100 hover:text-gray-900
                                       transition focus:outline-none"
                            >

                                <div
                                    class="w-8 h-8 rounded-full bg-blue-600 text-white
                                           flex items-center justify-center"
                                >
                                    <span class="material-symbols-outlined text-lg">
                                        person
                                    </span>
                                </div>

                                <span>
                                    {{ Auth::user()->name }}
                                </span>

                                <span class="material-symbols-outlined text-lg">
                                    expand_more
                                </span>

                            </button>

                        </x-slot>


                        <x-slot name="content">

                            {{-- PROFILE --}}
                            <x-dropdown-link :href="route('profile.edit')">

                                <span class="flex items-center gap-2">

                                    <span class="material-symbols-outlined text-lg">
                                        person
                                    </span>

                                    Profile

                                </span>

                            </x-dropdown-link>


                            {{-- LOGOUT --}}
                            <form
                                method="POST"
                                action="{{ route('logout') }}"
                            >
                                @csrf

                                <x-dropdown-link
                                    :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                >

                                    <span class="flex items-center gap-2">

                                        <span class="material-symbols-outlined text-lg">
                                            logout
                                        </span>

                                        Log Out

                                    </span>

                                </x-dropdown-link>

                            </form>

                        </x-slot>

                    </x-dropdown>

                </div>

            @endauth


            {{-- ================= MOBILE BUTTON ================= --}}
            <div class="-me-2 flex items-center sm:hidden">

                <button
                    @click="open = !open"
                    class="inline-flex items-center justify-center p-2 rounded-lg
                           text-gray-500 hover:bg-gray-100
                           focus:outline-none transition"
                >

                    <span
                        class="material-symbols-outlined"
                        x-show="!open"
                    >
                        menu
                    </span>

                    <span
                        class="material-symbols-outlined"
                        x-show="open"
                    >
                        close
                    </span>

                </button>

            </div>

        </div>

    </div>


    {{-- ================= MOBILE NAVIGATION ================= --}}
    <div
        x-show="open"
        x-transition
        class="sm:hidden border-t border-gray-100 bg-white"
    >

        <div class="px-4 py-4 space-y-2">

            @auth

                {{-- DASHBOARD --}}
                <a
                    href="{{ route('dashboard') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg
                           text-sm font-medium
                           {{ request()->routeIs('dashboard')
                                ? 'bg-blue-600 text-white'
                                : 'text-gray-600 hover:bg-gray-100' }}"
                >
                    <span class="material-symbols-outlined">
                        dashboard
                    </span>

                    Dashboard
                </a>


                {{-- JADWAL --}}
                <a
                    href="{{ route('schedules.index') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg
                           text-sm font-medium
                           {{ request()->routeIs(
                                'schedules.index',
                                'schedules.create',
                                'schedules.edit',
                                'schedules.show',
                                'schedule-details.*'
                           )
                                ? 'bg-blue-600 text-white'
                                : 'text-gray-600 hover:bg-gray-100' }}"
                >
                    <span class="material-symbols-outlined">
                        calendar_month
                    </span>

                    Jadwal
                </a>


                {{-- JABATAN --}}
                <a
                    href="{{ route('service-roles.index') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg
                           text-sm font-medium
                           {{ request()->routeIs('service-roles.*')
                                ? 'bg-blue-600 text-white'
                                : 'text-gray-600 hover:bg-gray-100' }}"
                >
                    <span class="material-symbols-outlined">
                        badge
                    </span>

                    Jabatan Pelayanan
                </a>


                {{-- PENGUMUMAN --}}
                <a
                    href="{{ route('announcements.index') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg
                           text-sm font-medium
                           {{ request()->routeIs('announcements.*')
                                ? 'bg-blue-600 text-white'
                                : 'text-gray-600 hover:bg-gray-100' }}"
                >
                    <span class="material-symbols-outlined">
                        campaign
                    </span>

                    Pengumuman
                </a>


            @else

                {{-- BERANDA --}}
                <a
                    href="{{ url('/') }}"
                    @click="activeSection = '#beranda'"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg
                           text-sm font-medium"
                    :class="
                        window.location.pathname === '/' &&
                        (activeSection === '#beranda' || activeSection === '')
                            ? 'bg-blue-600 text-white'
                            : 'text-gray-600 hover:bg-gray-100'
                    "
                >
                    <span class="material-symbols-outlined">
                        home
                    </span>

                    Beranda
                </a>


                {{-- JADWAL --}}
                <a
                    href="{{ request()->is('/') ? '#jadwal' : route('schedules.public') }}"
                    @click="activeSection = '#jadwal'"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg
                           text-sm font-medium"
                    :class="
                        window.location.pathname === '/jadwal' ||
                        window.location.pathname.startsWith('/jadwal/') ||
                        (window.location.pathname === '/' && activeSection === '#jadwal')
                            ? 'bg-blue-600 text-white'
                            : 'text-gray-600 hover:bg-gray-100'
                    "
                >
                    <span class="material-symbols-outlined">
                        calendar_month
                    </span>

                    Jadwal
                </a>


                {{-- PENGUMUMAN --}}
                <a
                    href="{{ request()->is('/') ? '#pengumuman' : url('/#pengumuman') }}"
                    @click="activeSection = '#pengumuman'"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg
                           text-sm font-medium"
                    :class="
                        window.location.pathname === '/' &&
                        activeSection === '#pengumuman'
                            ? 'bg-blue-600 text-white'
                            : 'text-gray-600 hover:bg-gray-100'
                    "
                >
                    <span class="material-symbols-outlined">
                        campaign
                    </span>

                    Pengumuman
                </a>


                {{-- KONTAK --}}
                <a
                    href="{{ request()->is('/') ? '#kontak' : url('/#kontak') }}"
                    @click="activeSection = '#kontak'"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg
                           text-sm font-medium"
                    :class="
                        window.location.pathname === '/' &&
                        activeSection === '#kontak'
                            ? 'bg-blue-600 text-white'
                            : 'text-gray-600 hover:bg-gray-100'
                    "
                >
                    <span class="material-symbols-outlined">
                        contact_mail
                    </span>

                    Kontak
                </a>

            @endauth


            {{-- MOBILE USER --}}
            @auth

                <div class="border-t border-gray-100 pt-4 mt-4">

                    <div class="px-4 mb-3">

                        <p class="text-sm font-semibold text-gray-800">
                            {{ Auth::user()->name }}
                        </p>

                        <p class="text-xs text-gray-500">
                            {{ Auth::user()->email }}
                        </p>

                    </div>


                    {{-- PROFILE --}}
                    <a
                        href="{{ route('profile.edit') }}"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg
                               text-sm text-gray-600 hover:bg-gray-100"
                    >
                        <span class="material-symbols-outlined">
                            person
                        </span>

                        Profile
                    </a>


                    {{-- LOGOUT --}}
                    <form
                        method="POST"
                        action="{{ route('logout') }}"
                    >

                        @csrf

                        <a
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault(); this.closest('form').submit();"
                            class="flex items-center gap-3 px-4 py-3 rounded-lg
                                   text-sm text-gray-600 hover:bg-gray-100"
                        >
                            <span class="material-symbols-outlined">
                                logout
                            </span>

                            Log Out
                        </a>

                    </form>

                </div>

            @endauth

        </div>

    </div>

</nav>