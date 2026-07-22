<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kelola Pengumuman
        </h2>
    </x-slot>

    <div class="py-8">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white rounded-lg shadow p-6">

                <div class="flex justify-between items-center mb-6">

                    <h3 class="text-lg font-semibold">
                        Daftar Pengumuman
                    </h3>

                    <a href="{{ route('announcements.create') }}">
                        <x-primary-button>
                            Tambah Pengumuman
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
                            <th class="border p-2">Judul</th>
                            <th class="border p-2">Mulai</th>
                            <th class="border p-2">Berakhir</th>
                            <th class="border p-2">Gambar</th>
                            <th class="border p-2">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($announcements as $announcement)

                            <tr>

                                <td class="border p-2 text-center">
                                    {{ $loop->iteration }}
                                </td>

                                <td class="border p-2">
                                    {{ $announcement->title }}
                                </td>

                                <td class="border p-2">
                                    {{ $announcement->start_date }}
                                </td>

                                <td class="border p-2">
                                    {{ $announcement->end_date ?? '-' }}
                                </td>

                                <td class="border p-2 text-center">

                                    @if($announcement->image)

                                        <img
                                            src="{{ asset('storage/'.$announcement->image) }}"
                                            alt="{{ $announcement->title }}"
                                            class="w-20 h-20 object-cover rounded mx-auto">

                                    @else

                                        -

                                    @endif

                                </td>

                                <td class="border p-2 text-center">

                                    <a href="{{ route('announcements.edit', $announcement) }}">
                                        <x-secondary-button>
                                            Edit
                                        </x-secondary-button>
                                    </a>

                                    <a href="#">
                                        <x-danger-button>
                                            Hapus
                                        </x-danger-button>
                                    </a>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="6"
                                    class="border p-4 text-center text-gray-500">

                                    Belum ada pengumuman.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</x-app-layout>