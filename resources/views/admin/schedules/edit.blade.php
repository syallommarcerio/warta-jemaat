<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Jadwal
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white rounded-lg shadow p-6">

                <form
                    action="{{ route('schedules.update', $schedule) }}"
                    method="POST"
                >

                    @csrf
                    @method('PUT')

                    {{-- Kegiatan --}}
                    <div class="mb-4">

                        <label
                            for="activity_id"
                            class="block mb-2 font-medium"
                        >
                            Kegiatan
                        </label>

                        <select
                            id="activity_id"
                            name="activity_id"
                            class="w-full border rounded px-3 py-2"
                        >
                            <option value="">
                                -- Pilih Kegiatan --
                            </option>

                            @foreach($activities as $activity)
                                <option
                                    value="{{ $activity->id }}"
                                    data-has-theme="{{ $activity->name === 'Ibadah Minggu' ? 'true' : 'false' }}"
                                    {{ old('activity_id', $schedule->activity_id) == $activity->id ? 'selected' : '' }}
                                >
                                    {{ $activity->name }}
                                </option>
                            @endforeach

                        </select>

                        @error('activity_id')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    {{-- Tema --}}
                    <div
                        id="theme-field"
                        class="mb-4"
                    >

                        <label
                            for="theme"
                            class="block mb-2 font-medium"
                        >
                            Tema
                        </label>

                        <input
                            type="text"
                            id="theme"
                            name="theme"
                            value="{{ old('theme', $schedule->theme) }}"
                            class="w-full border rounded px-3 py-2"
                        >

                        @error('theme')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    {{-- Tanggal --}}
                    <div class="mb-4">

                        <label
                            for="date"
                            class="block mb-2 font-medium"
                        >
                            Tanggal
                        </label>

                        <input
                            type="date"
                            id="date"
                            name="date"
                            value="{{ old('date', $schedule->date) }}"
                            class="w-full border rounded px-3 py-2"
                        >

                        @error('date')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    {{-- Jam --}}
                    <div class="mb-4">

                        <label
                            for="time"
                            class="block mb-2 font-medium"
                        >
                            Jam
                        </label>

                        <input
                            type="time"
                            id="time"
                            name="time"
                            value="{{ old('time', $schedule->time) }}"
                            class="w-full border rounded px-3 py-2"
                        >

                        @error('time')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    {{-- Lokasi --}}
                    <div class="mb-4">

                        <label
                            for="location"
                            class="block mb-2 font-medium"
                        >
                            Lokasi
                        </label>

                        <input
                            type="text"
                            id="location"
                            name="location"
                            value="{{ old('location', $schedule->location) }}"
                            class="w-full border rounded px-3 py-2"
                        >

                        @error('location')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    {{-- Tombol --}}
                    <div class="flex gap-3 mt-6">

                        <button
                            type="submit"
                            class="inline-flex items-center justify-center gap-2
                                   px-4 py-2.5 rounded-lg
                                   bg-blue-600 text-white
                                   text-sm font-semibold
                                   hover:bg-blue-700
                                   transition shadow-sm"
                        >
                            Simpan Perubahan
                        </button>

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

    {{-- Conditional Tema --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const activitySelect =
                document.getElementById('activity_id');

            const themeField =
                document.getElementById('theme-field');

            const themeInput =
                document.getElementById('theme');

            function toggleTheme() {

                const selectedOption =
                    activitySelect.options[
                        activitySelect.selectedIndex
                    ];

                const hasTheme =
                    selectedOption?.dataset.hasTheme === 'true';

                if (hasTheme) {

                    themeField.classList.remove('hidden');
                    themeInput.disabled = false;

                } else {

                    themeField.classList.add('hidden');
                    themeInput.disabled = true;
                    themeInput.value = '';

                }
            }

            activitySelect.addEventListener(
                'change',
                toggleTheme
            );

            toggleTheme();

        });
    </script>

</x-app-layout>