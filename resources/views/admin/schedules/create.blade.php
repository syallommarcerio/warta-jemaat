<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Jadwal
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white rounded-lg shadow p-6">

                <form action="{{ route('schedules.store') }}" method="POST">

                    @csrf

                    {{-- Jenis Kegiatan --}}
                    <div class="mb-4">

                        <label class="block mb-2 font-medium">
                            Kegiatan
                        </label>

                        <select
                            name="activity_id"
                            class="w-full border rounded px-3 py-2">

                            <option value="">-- Pilih Kegiatan --</option>

                            @foreach ($activities as $activity)
                                <option
                                    value="{{ $activity->id }}"
                                    {{ old('activity_id') == $activity->id ? 'selected' : '' }}>
                                    {{ $activity->name }}
                                </option>
                            @endforeach

                        </select>

                        @error('activity_id')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    {{-- Tanggal --}}
                    <div class="mb-4">

                        <label class="block mb-2 font-medium">
                            Tanggal
                        </label>

                        <input
                            type="date"
                            name="date"
                            value="{{ old('date') }}"
                            class="w-full border rounded px-3 py-2">

                        @error('date')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    {{-- Jam --}}
                    <div class="mb-4">

                        <label class="block mb-2 font-medium">
                            Jam
                        </label>

                        <input
                            type="time"
                            name="time"
                            value="{{ old('time') }}"
                            class="w-full border rounded px-3 py-2">

                        @error('time')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    {{-- Lokasi --}}
                    <div class="mb-4">

                        <label class="block mb-2 font-medium">
                            Lokasi
                        </label>

                        <input
                            type="text"
                            name="location"
                            value="{{ old('location') }}"
                            class="w-full border rounded px-3 py-2">

                        @error('location')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    {{-- Tema --}}
                    <div class="mb-6">

                        <label class="block mb-2 font-medium">
                            Tema
                        </label>

                        <input
                            type="text"
                            name="theme"
                            value="{{ old('theme') }}"
                            class="w-full border rounded px-3 py-2">

                        @error('theme')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="flex gap-3">

                        <x-primary-button>
                            Simpan
                        </x-primary-button>

                        <a href="{{ route('schedules.index') }}">
                            <x-secondary-button>
                                Batal
                            </x-secondary-button>
                        </a>

                    </div>

                </form>

            </div>

        </div>
    </div>

</x-app-layout>