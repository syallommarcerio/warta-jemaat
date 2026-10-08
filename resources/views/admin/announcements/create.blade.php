<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Pengumuman
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white rounded-lg shadow p-6">

                <form
                    action="{{ route('announcements.store') }}"
                    method="POST"
                    enctype="multipart/form-data">

                    @csrf

                    <div class="mb-4">
                        <label class="block mb-2 font-medium">
                            Judul
                        </label>

                        <input
                            type="text"
                            name="title"
                            value="{{ old('title') }}"
                            class="w-full border rounded px-3 py-2">
                            @error('title')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2 font-medium">
                            Deskripsi
                        </label>

                        <textarea
                            name="description"
                            rows="5"
                            class="w-full border rounded px-3 py-2">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                    </div>

                    <div class="grid grid-cols-2 gap-4">

                        <div>
                            <label class="block mb-2 font-medium">
                                Tanggal Mulai
                            </label>

                            <input
                                type="date"
                                name="start_date"
                                value="{{ old('start_date') }}"
                                class="w-full border rounded px-3 py-2">
                                @error('start_date')
                                    <p class="mt-1 text-sm text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror
                        </div>

                        <div>
                            <label class="block mb-2 font-medium">
                                Tanggal Berakhir
                            </label>

                            <input
                                type="date"
                                name="end_date"
                                value="{{ old('end_date') }}"
                                class="w-full border rounded px-3 py-2">
                                @error('end_date')
                                    <p class="mt-1 text-sm text-red-600">
                                        {{ $message }}
                                    </p>
                                @enderror
                        </div>

                    </div>

                    <div class="mt-4">
                        <label class="block mb-2 font-medium">
                            Gambar
                        </label>

                        <input
                            type="file"
                            name="image"
                            class="w-full">
                            @error('image')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                    </div>

                    <div class="mt-6">
                    <button
                        type="submit"
                        class="inline-flex items-center justify-center gap-2
                            px-4 py-2.5 rounded-lg
                            bg-blue-600 text-white
                            text-sm font-semibold
                            hover:bg-blue-700
                            transition shadow-sm"
                    >
                        Simpan
                    </button>
                    </div>

                </form>

            </div>

        </div>
    </div>

</x-app-layout>