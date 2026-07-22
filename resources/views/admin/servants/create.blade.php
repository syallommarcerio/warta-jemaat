<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Pelayan
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white rounded-lg shadow p-6">

                <form action="{{ route('servants.store') }}" method="POST">

                    @csrf

                    <div class="mb-4">

                        <label class="block mb-2 font-medium">
                            Nama Pelayan
                        </label>

                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            class="w-full border rounded px-3 py-2">

                        @error('name')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="flex gap-3">

                    <x-primary-button>
                        Simpan
                    </x-primary-button>
                        <a href="{{ route('servants.index') }}"
                            class="bg-gray-500 text-white px-5 py-2 rounded hover:bg-gray-600">

                            Batal

                        </a>

                    </div>

                </form>

            </div>

        </div>
    </div>

</x-app-layout>