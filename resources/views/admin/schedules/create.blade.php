<x-app-layout>

    <x-slot name="header">
        <div>
            <h2 class="font-bold text-2xl text-gray-800 leading-tight">
                Tambah Jadwal
            </h2>

            <p class="text-sm text-gray-500 mt-1">
                Tambahkan jadwal pelayanan gereja baru.
            </p>
        </div>
    </x-slot>


    <div class="py-8">

        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Form Card --}}
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">

                {{-- Form Header --}}
                <div class="px-6 py-5 border-b border-gray-100">

                    <div class="flex items-center gap-4">

                        <div class="w-12 h-12 rounded-xl bg-primary/10
                                    flex items-center justify-center">

                            <span class="material-symbols-outlined text-primary text-2xl">
                                calendar_add_on
                            </span>

                        </div>

                        <div>
                            <h3 class="text-lg font-bold text-gray-800">
                                Informasi Jadwal
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                Isi informasi jadwal pelayanan dengan lengkap.
                            </p>
                        </div>

                    </div>

                </div>


                {{-- Form --}}
                <form action="{{ route('schedules.store') }}" method="POST">

                    @csrf

                    <div class="p-6 space-y-6">


                        {{-- Jenis Kegiatan --}}
                        <div>

                            <label
                                for="activity_id"
                                class="block text-sm font-semibold text-gray-700 mb-2"
                            >
                                Kegiatan
                            </label>

                            <select
                                id="activity_id"
                                name="activity_id"
                                class="w-full rounded-lg border-gray-300
                                       focus:border-primary focus:ring-primary
                                       text-sm"
                            >

                                <option value="">
                                    -- Pilih Kegiatan --
                                </option>

                            @foreach ($activities as $activity)

                                <option
                                    value="{{ $activity->id }}"
                                    data-has-theme="{{ $activity->name === 'Ibadah Minggu' ? 'true' : 'false' }}"
                                    {{ old('activity_id') == $activity->id ? 'selected' : '' }}
                                >
                                    {{ $activity->name }}
                                </option>

                            @endforeach

                            </select>

                            @error('activity_id')

                                <p class="flex items-center gap-1 text-red-500 text-sm mt-2">

                                    <span class="material-symbols-outlined text-base">
                                        error
                                    </span>

                                    {{ $message }}

                                </p>

                            @enderror

                        </div>


                        {{-- Tanggal & Jam --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">

                            {{-- Tanggal --}}
                            <div>

                                <label
                                    for="date"
                                    class="block text-sm font-semibold text-gray-700 mb-2"
                                >
                                    Tanggal
                                </label>

                                <div class="relative">

                                    <input
                                        id="date"
                                        type="date"
                                        name="date"
                                        value="{{ old('date') }}"
                                        class="w-full rounded-lg border-gray-300
                                               focus:border-primary focus:ring-primary
                                               text-sm"
                                    >

                                </div>

                                @error('date')

                                    <p class="flex items-center gap-1 text-red-500 text-sm mt-2">

                                        <span class="material-symbols-outlined text-base">
                                            error
                                        </span>

                                        {{ $message }}

                                    </p>

                                @enderror

                            </div>


                            {{-- Jam --}}
                            <div>

                                <label
                                    for="time"
                                    class="block text-sm font-semibold text-gray-700 mb-2"
                                >
                                    Jam
                                </label>

                                <input
                                    id="time"
                                    type="time"
                                    name="time"
                                    value="{{ old('time') }}"
                                    class="w-full rounded-lg border-gray-300
                                           focus:border-primary focus:ring-primary
                                           text-sm"
                                >

                                @error('time')

                                    <p class="flex items-center gap-1 text-red-500 text-sm mt-2">

                                        <span class="material-symbols-outlined text-base">
                                            error
                                        </span>

                                        {{ $message }}

                                    </p>

                                @enderror

                            </div>

                        </div>


                        {{-- Lokasi --}}
                        <div>

                            <label
                                for="location"
                                class="block text-sm font-semibold text-gray-700 mb-2"
                            >
                                Lokasi
                            </label>

                            <div class="relative">

                                <input
                                    id="location"
                                    type="text"
                                    name="location"
                                    value="{{ old('location') }}"
                                    placeholder="Contoh: GKMI Winong"
                                    class="w-full rounded-lg border-gray-300
                                           focus:border-primary focus:ring-primary
                                           text-sm"
                                >

                            </div>

                            @error('location')

                                <p class="flex items-center gap-1 text-red-500 text-sm mt-2">

                                    <span class="material-symbols-outlined text-base">
                                        error
                                    </span>

                                    {{ $message }}

                                </p>

                            @enderror

                        </div>


                    {{-- Tema --}}
                    <div id="theme-field">

                        <label
                            for="theme"
                            class="block text-sm font-semibold text-gray-700 mb-2"
                        >
                            Tema
                        </label>

                        <input
                            id="theme"
                            type="text"
                            name="theme"
                            value="{{ old('theme') }}"
                            placeholder="Contoh: Hidup Dalam Kasih"
                            class="w-full rounded-lg border-gray-300
                                focus:border-primary focus:ring-primary
                                text-sm"
                        >

                        @error('theme')

                            <p class="flex items-center gap-1 text-red-500 text-sm mt-2">

                                <span class="material-symbols-outlined text-base">
                                    error
                                </span>

                                {{ $message }}

                            </p>

                        @enderror

                    </div>

                    </div>


                    {{-- Form Footer --}}
                    <div class="px-6 py-4 bg-gray-50 border-t border-gray-100
                                flex flex-col-reverse sm:flex-row
                                sm:justify-end gap-3">

                        {{-- Batal --}}
                        <a
                            href="{{ route('schedules.index') }}"
                            class="inline-flex items-center justify-center gap-2
                                   px-4 py-2.5 rounded-lg
                                   border border-gray-300
                                   bg-white text-gray-700
                                   text-sm font-semibold
                                   hover:bg-gray-50 transition"
                        >

                            <span class="material-symbols-outlined text-lg">
                                arrow_back
                            </span>

                            Batal

                        </a>


                        {{-- Simpan --}}
                            <button
                                type="submit"
                                class="inline-flex items-center gap-2 rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-semibold text-white hover:bg-blue-700 transition"
                            >
                                <span class="material-symbols-outlined text-lg">
                                    save
                                </span>

                                Simpan Jadwal
                            </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {

        const activitySelect = document.getElementById('activity_id');
        const themeField = document.getElementById('theme-field');
        const themeInput = document.getElementById('theme');

        function toggleTheme() {

            const selectedOption =
                activitySelect.options[activitySelect.selectedIndex];

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

        activitySelect.addEventListener('change', toggleTheme);

        toggleTheme();
    });
</script>

</x-app-layout>