<x-app-layout>

    <x-slot name="header">
        <div>
            <h2 class="font-bold text-2xl text-gray-800 leading-tight">
                Dashboard Admin
            </h2>

            <p class="text-sm text-gray-500 mt-1">
                Kelola informasi dan pelayanan GKMI Winong
            </p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Welcome --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-8">

                <h3 class="text-xl font-bold text-gray-800">
                    Selamat Datang, Admin 👋
                </h3>

                <p class="text-gray-500 mt-1">
                    Berikut ringkasan data Sistem Informasi Warta Jemaat GKMI Winong.
                </p>

            </div>


            {{-- Statistik --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                {{-- Jadwal --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition">

                    <div class="flex items-center justify-between">

                        <div>
                            <p class="text-sm font-medium text-gray-500">
                                Jadwal
                            </p>

                            <h2 class="text-3xl font-bold text-gray-800 mt-2">
                                {{ $totalSchedules }}
                            </h2>

                            <p class="text-xs text-gray-400 mt-1">
                                Total jadwal pelayanan
                            </p>
                        </div>

                        <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center">

                            <span class="material-symbols-outlined text-blue-600 text-2xl">
                                calendar_month
                            </span>

                        </div>

                    </div>

                </div>



                {{-- Pengumuman --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition">

                    <div class="flex items-center justify-between">

                        <div>
                            <p class="text-sm font-medium text-gray-500">
                                Pengumuman
                            </p>

                            <h2 class="text-3xl font-bold text-gray-800 mt-2">
                                {{ $totalAnnouncements }}
                            </h2>

                            <p class="text-xs text-gray-400 mt-1">
                                Total pengumuman
                            </p>
                        </div>

                        <div class="w-12 h-12 rounded-xl bg-yellow-100 flex items-center justify-center">

                            <span class="material-symbols-outlined text-yellow-600 text-2xl">
                                campaign
                            </span>

                        </div>

                    </div>

                </div>


                {{-- Kegiatan --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition">

                    <div class="flex items-center justify-between">

                        <div>
                            <p class="text-sm font-medium text-gray-500">
                                Kegiatan
                            </p>

                            <h2 class="text-3xl font-bold text-gray-800 mt-2">
                                {{ $totalActivities }}
                            </h2>

                            <p class="text-xs text-gray-400 mt-1">
                                Total jenis kegiatan
                            </p>
                        </div>

                        <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center">

                            <span class="material-symbols-outlined text-purple-600 text-2xl">
                                event
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>