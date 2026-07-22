<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kelola Jadwal
        </h2>
    </x-slot>

    <div class="py-8">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white rounded-lg shadow p-6">

                <div class="flex justify-between items-center mb-6">

                    <h3 class="text-lg font-semibold">
                        Daftar Jadwal
                    </h3>

                    <a href="{{ route('schedules.create') }}">
                        <x-primary-button>
                            Tambah Jadwal
                        </x-primary-button>
                    </a>

                </div>

                @if(session('success'))

                    <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
                        {{ session('success') }}
                    </div>

                @endif

                <table class="w-full border border-gray-300">

                    <thead class="bg-gray-100">

                        <tr>

                            <th class="border p-2">No</th>
                            <th class="border p-2">Kegiatan</th>
                            <th class="border p-2">Tanggal</th>
                            <th class="border p-2">Jam</th>
                            <th class="border p-2">Lokasi</th>
                            <th class="border p-2">Tema</th>
                            <th class="border p-2">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($schedules as $schedule)

                            <tr>

                                <td class="border p-2 text-center">
                                    {{ $loop->iteration }}
                                </td>

                                <td class="border p-2">
                                    {{ $schedule->activity->name }}
                                </td>

                                <td class="border p-2">
                                    {{ $schedule->date }}
                                </td>

                                <td class="border p-2">
                                    {{ substr($schedule->time,0,5) }}
                                </td>

                                <td class="border p-2">
                                    {{ $schedule->location }}
                                </td>

                                <td class="border p-2">
                                    {{ $schedule->theme }}
                                </td>

                                <td class="border p-2">

                                    <div class="flex gap-2">

                                        <a href="{{ route('schedules.edit',$schedule) }}">
                                            <x-secondary-button>
                                                Edit
                                            </x-secondary-button>
                                        </a>

                                        <form
                                            action="{{ route('schedules.destroy',$schedule) }}"
                                            method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <x-danger-button
                                                onclick="return confirm('Hapus jadwal ini?')">

                                                Hapus

                                            </x-danger-button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="7"
                                    class="border p-4 text-center text-gray-500">

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