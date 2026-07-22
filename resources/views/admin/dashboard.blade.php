<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard Admin
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-gray-500">Jadwal</h3>
                    <p class="text-3xl font-bold">{{ $totalSchedules }}</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-gray-500">Pelayan</h3>
                    <p class="text-3xl font-bold">{{ $totalServants }}</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-gray-500">Pengumuman</h3>
                    <p class="text-3xl font-bold">{{ $totalAnnouncements }}</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-gray-500">Kegiatan</h3>
                    <p class="text-3xl font-bold">{{ $totalActivities }}</p>
                </div>

            </div>

        </div>
    </div>

</x-app-layout>