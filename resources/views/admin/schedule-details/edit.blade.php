<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Jadwal
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white rounded-lg shadow p-6">

                <form action="{{ route('schedules.update', $schedule) }}" method="POST">

                    @csrf
                    @method('PUT')

                    {{-- Kegiatan --}}
                    <div class="mb-4">

                        <label class="block mb-2 font-medium">
                            Kegiatan
                        </label>

                        <select
                            name="activity_id"
                            class="w-full border rounded px-3 py-2">

                            @foreach($activities as $activity)

                                <option
                                    value="{{ $activity->id }}"
                                    {{ old('activity_id', $schedule->activity_id) == $activity->id ? 'selected' : '' }}>

                                    {{ $activity->name }}

                                </option>

                            @endforeach

                        </select>

                    </div>

                    {{-- Tanggal --}}
                    <div class="mb-4">

                        <label class="block mb-2 font-medium">
                            Tanggal
                        </label>

                        <input
                            type="date"
                            name="date"
                            value="{{ old('date', $schedule->date) }}"
                            class="w-full border rounded px-3 py-2">

                    </div>

                    {{-- Jam --}}
                    <div class="mb-4">

                        <label class="block mb-2 font-medium">
                            Jam
                        </label>

                        <input
                            type="time"
                            name="time"
                            value="{{ old('time', substr($schedule->time,0,5)) }}"
                            class="w-full border rounded px-3 py-2">

                    </div>

                    {{-- Lokasi --}}
                    <div class="mb-4">

                        <label class="block mb-2 font-medium">
                            Lokasi
                        </label>

                        <input
                            type="text"
                            name="location"
                            value="{{ old('location', $schedule->location) }}"
                            class="w-full border rounded px-3 py-2">

                    </div>

                    {{-- Tema --}}
                    <div class="mb-6">

                        <label class="block mb-2 font-medium">
                            Tema
                        </label>

                        <input
                            type="text"
                            name="theme"
                            value="{{ old('theme', $schedule->theme) }}"
                            class="w-full border rounded px-3 py-2">

                    </div>

                    <div class="flex gap-3">

                        <x-primary-button>
                            Update
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