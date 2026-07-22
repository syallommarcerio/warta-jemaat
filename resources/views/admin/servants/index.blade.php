<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Pelayan
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white rounded-lg shadow p-6">
                @if(session('success'))
                    <div class="mb-4 rounded-md bg-green-100 border border-green-400 text-green-700 px-4 py-3">
                        {{ session('success') }}
                    </div>
                @endif
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-lg font-semibold">
                    Daftar Pelayan
                </h3>

                <a href="{{ route('servants.create') }}">
                    <x-primary-button>
                        + Tambah Pelayan
                    </x-primary-button>
                </a>
            </div>

                <table class="w-full border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border p-2 w-16">No</th>
                            <th class="border p-2 text-left">Nama Pelayan</th>
                            <th class="border p-2 w-40">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($servants as $servant)

                           <tr>

                                <td class="border p-2 text-center">
                                    {{ $loop->iteration }}
                                </td>

                                <td class="border p-2">
                                    {{ $servant->name }}
                                </td>

                                <td class="border p-2">
                                    <div class="flex justify-center gap-2">

                                        <a href="{{ route('servants.edit', $servant) }}">
                                            <x-secondary-button>
                                                Edit
                                            </x-secondary-button>
                                        </a>

                                        <form action="{{ route('servants.destroy', $servant) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <x-danger-button
                                                onclick="return confirm('Yakin ingin menghapus pelayan ini?')">
                                                Hapus
                                            </x-danger-button>
                                        </form>

                                    </div>
                                </td>

                            </tr>
                        @empty

                            <tr>
                                <td colspan="3" class="text-center p-4">
                                    Belum ada data pelayan.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>
    </div>

</x-app-layout>