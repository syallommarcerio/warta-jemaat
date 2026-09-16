<x-app-layout>

    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Jadwal Pelayanan
                </h2>
                <p class="text-sm text-gray-500 mt-1">
                    Kelola jadwal pelayanan gereja.
                </p>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Pesan sukses --}}
            @if (session('success'))
                <div class="mb-5 rounded-lg bg-green-50 border border-green-200 px-4 py-3 text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Header halaman --}}
            <div class="flex items-center justify-between mb-6">

                <div>
                    <h3 class="text-lg font-semibold text-gray-800">
                        Daftar Jadwal
                    </h3>

                    <p class="text-sm text-gray-500 mt-1">
                        {{ $schedules->count() }} jadwal terdaftar
                    </p>
                </div>

                <a href="{{ route('schedules.create') }}">
                    <x-primary-button>
                        + Tambah Jadwal
                    </x-primary-button>
                </a>

            </div>


            {{-- Tabel --}}
            <div class="bg-white shadow-sm rounded-xl border border-gray-200 overflow-hidden">

                <div class="overflow-x-auto">

                    <table class="min-w-full">

                        <thead class="bg-gray-50 border-b border-gray-200">

                            <tr>

                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase">
                                    No
                                </th>

                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Kegiatan
                                </th>

                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Tanggal
                                </th>

                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Jam
                                </th>

                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Lokasi
                                </th>

                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase">
                                    Aksi
                                </th>

                            </tr>

                        </thead>

                        <tbody class="divide-y divide-gray-200">

                            @forelse($schedules as $schedule)

                                <tr class="hover:bg-gray-50 transition">

                                    {{-- No --}}
                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        {{ $loop->iteration }}
                                    </td>


                                    {{-- Kegiatan --}}
                                    <td class="px-6 py-4">

                                        <div class="font-medium text-gray-900">
                                            {{ $schedule->activity->name }}
                                        </div>

                                        @if($schedule->theme)
                                            <div class="text-sm text-gray-500 mt-1">
                                                {{ $schedule->theme }}
                                            </div>
                                        @endif

                                    </td>


                                    {{-- Tanggal --}}
                                    <td class="px-6 py-4 text-sm text-gray-700">
                                        {{ \Carbon\Carbon::parse($schedule->date)->translatedFormat('d F Y') }}
                                    </td>


                                    {{-- Jam --}}
                                    <td class="px-6 py-4 text-sm text-gray-700">
                                        {{ substr($schedule->time, 0, 5) }} WIB
                                    </td>


                                    {{-- Lokasi --}}
                                    <td class="px-6 py-4 text-sm text-gray-700">
                                        {{ $schedule->location }}
                                    </td>


                                    {{-- Aksi --}}
                                    <td class="px-6 py-4">

                                        <div class="flex items-center gap-2">

                                            {{-- Edit --}}
                                            <a href="{{ route('schedules.edit', $schedule) }}">
                                                <x-secondary-button>
                                                    Edit
                                                </x-secondary-button>
                                            </a>


                                            {{-- Kelola Pelayan --}}
                                            <a href="{{ route('schedule-details.index', $schedule) }}">
                                                <x-primary-button>
                                                    Pelayan
                                                </x-primary-button>
                                            </a>


                                            {{-- Hapus --}}
                                            <form
                                                action="{{ route('schedules.destroy', $schedule) }}"
                                                method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus jadwal ini?')"
                                            >

                                                @csrf
                                                @method('DELETE')

                                                <x-danger-button>
                                                    Hapus
                                                </x-danger-button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="6" class="px-6 py-12 text-center">

                                        <div class="text-gray-400 text-4xl mb-3">
                                            📅
                                        </div>

                                        <h3 class="font-medium text-gray-700">
                                            Belum ada jadwal
                                        </h3>

                                        <p class="text-sm text-gray-500 mt-1">
                                            Silakan tambahkan jadwal pelayanan baru.
                                        </p>

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>