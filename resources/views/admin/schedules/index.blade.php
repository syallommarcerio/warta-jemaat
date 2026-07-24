<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Daftar Jadwal
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="mb-4">
                <a href="{{ route('schedules.create') }}">
                    <x-primary-button>
                        Tambah Jadwal
                    </x-primary-button>
                </a>
            </div>

            <div class="bg-white shadow rounded-lg overflow-hidden">

                <table class="min-w-full">

                    <thead class="bg-gray-100">

                        <tr>

                            <th class="px-4 py-3 text-left">No</th>

                            <th class="px-4 py-3 text-left">Kegiatan</th>

                            <th class="px-4 py-3 text-left">Tanggal</th>

                            <th class="px-4 py-3 text-left">Jam</th>

                            <th class="px-4 py-3 text-left">Lokasi</th>

                            <th class="px-4 py-3 text-left">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($schedules as $schedule)

                        <tr class="border-t">

                            <td class="px-4 py-3">
                                {{ $loop->iteration }}
                            </td>

                            <td class="px-4 py-3">
                                {{ $schedule->activity->name }}
                            </td>

                            <td class="px-4 py-3">
                                {{ $schedule->date }}
                            </td>

                            <td class="px-4 py-3">
                                {{ $schedule->time }}
                            </td>

                            <td class="px-4 py-3">
                                {{ $schedule->location }}
                            </td>

                            <td class="px-4 py-3 flex gap-2">

                                <a href="{{ route('schedules.edit', $schedule) }}">
                                    <x-secondary-button>
                                        Edit
                                    </x-secondary-button>
                                </a>

                                <a href="{{ route('schedule-details.index', $schedule) }}">
                                    <x-primary-button>
                                        Pelayan
                                    </x-primary-button>
                                </a>

                                <form
                                    action="{{ route('schedules.destroy', $schedule) }}"
                                    method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <x-danger-button
                                        onclick="return confirm('Yakin ingin menghapus jadwal ini?')">
                                        Hapus
                                    </x-danger-button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="6" class="text-center py-5">
                                Belum ada jadwal.
                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>
    </div>

</x-app-layout>