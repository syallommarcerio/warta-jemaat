<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard Admin
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-gray-500">Jadwal</p>
                    <h2 class="text-3xl font-bold">{{ $totalSchedules }}</h2>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-gray-500">Pelayan</p>
                    <h2 class="text-3xl font-bold">{{ $totalServants }}</h2>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-gray-500">Pengumuman</p>
                    <h2 class="text-3xl font-bold">{{ $totalAnnouncements }}</h2>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-gray-500">Kegiatan</p>
                    <h2 class="text-3xl font-bold">{{ $totalActivities }}</h2>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>