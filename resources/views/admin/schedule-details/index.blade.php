<x-app-layout>

    <x-slot name="header">
        <div>
            <h2 class="font-bold text-2xl text-gray-800 leading-tight">
                Kelola Pelayan Jadwal
            </h2>

            <p class="text-sm text-gray-500 mt-1">
                Atur pelayan untuk jadwal pelayanan ini.
            </p>
        </div>
    </x-slot>


    <div class="py-8">

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Informasi Jadwal --}}
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6 mb-6">

                <div class="flex items-start gap-4">

                    <div class="w-12 h-12 rounded-xl bg-primary/10
                                flex items-center justify-center shrink-0">

                        <span class="material-symbols-outlined text-primary text-2xl">
                            calendar_month
                        </span>

                    </div>

                    <div>

                        <h3 class="text-xl font-bold text-gray-800">
                            {{ $schedule->activity?->name ?? 'Kegiatan tidak tersedia' }}
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            {{ \Carbon\Carbon::parse($schedule->date)->translatedFormat('l, d F Y') }}
                            ·
                            {{ substr($schedule->time, 0, 5) }}
                            ·
                            {{ $schedule->location ?? '-' }}
                        </p>

                    </div>

                </div>

            </div>


            {{-- Notifikasi --}}
            @if(session('success'))

                <div class="mb-6 flex items-center gap-3 rounded-xl
                            bg-green-50 border border-green-200
                            text-green-700 px-4 py-3">

                    <span class="material-symbols-outlined">
                        check_circle
                    </span>

                    <span class="text-sm font-medium">
                        {{ session('success') }}
                    </span>

                </div>

            @endif


            @if(session('error'))

                <div class="mb-6 flex items-center gap-3 rounded-xl
                            bg-red-50 border border-red-200
                            text-red-700 px-4 py-3">

                    <span class="material-symbols-outlined">
                        error
                    </span>

                    <span class="text-sm font-medium">
                        {{ session('error') }}
                    </span>

                </div>

            @endif


            {{-- Form Tambah Pelayan --}}
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">

                <div class="px-6 py-5 border-b border-gray-100">

                    <div class="flex items-center gap-3">

                        <div class="w-10 h-10 rounded-xl bg-primary/10
                                    flex items-center justify-center">

                            <span class="material-symbols-outlined text-primary">
                                person_add
                            </span>

                        </div>

                        <div>

                            <h3 class="text-lg font-bold text-gray-800">
                                Tambah Pelayan
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                Pilih peran dan ketik nama pelayan.
                            </p>

                        </div>

                    </div>

                </div>


                <form
                    action="{{ route('schedule-details.store', $schedule) }}"
                    method="POST"
                >

                    @csrf

                    <div class="p-6">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                            {{-- Peran --}}
                            <div>

                                <label
                                    for="service_role_id"
                                    class="block text-sm font-semibold text-gray-700 mb-2"
                                >
                                    Peran Pelayanan
                                </label>

                                <select
                                    id="service_role_id"
                                    name="service_role_id"
                                    class="w-full rounded-lg border-gray-300
                                           focus:border-primary focus:ring-primary
                                           text-sm"
                                >

                                    @foreach($serviceRoles as $role)

                                        <option value="{{ $role->id }}">
                                            {{ $role->name }}
                                        </option>

                                    @endforeach

                                </select>

                                @error('service_role_id')

                                    <p class="flex items-center gap-1 text-red-500 text-sm mt-2">

                                        <span class="material-symbols-outlined text-base">
                                            error
                                        </span>

                                        {{ $message }}

                                    </p>

                                @enderror

                            </div>


                            {{-- Nama Pelayan --}}
                            <div>

                                <label
                                    for="servant_name"
                                    class="block text-sm font-semibold text-gray-700 mb-2"
                                >
                                    Nama Pelayan
                                </label>

                                <input
                                    id="servant_name"
                                    type="text"
                                    name="servant_name"
                                    value="{{ old('servant_name') }}"
                                    placeholder="Contoh: Siska"
                                    autocomplete="off"
                                    class="w-full rounded-lg border-gray-300
                                           focus:border-primary focus:ring-primary
                                           text-sm"
                                >

                                <p class="text-xs text-gray-400 mt-2">
                                    Ketik langsung nama jemaat yang bertugas.
                                </p>

                                @error('servant_name')

                                    <p class="flex items-center gap-1 text-red-500 text-sm mt-2">

                                        <span class="material-symbols-outlined text-base">
                                            error
                                        </span>

                                        {{ $message }}

                                    </p>

                                @enderror

                            </div>

                        </div>


                        {{-- Tombol --}}
                        <div class="mt-6 flex justify-end">

                            <button
                                type="submit"
                                class="inline-flex items-center justify-center gap-2
                                       px-5 py-2.5 rounded-lg
                                       bg-blue-600 text-white
                                       text-sm font-semibold
                                       hover:bg-blue-700
                                       transition shadow-sm"
                            >

                                <span class="material-symbols-outlined text-lg">
                                    person_add
                                </span>

                                Tambah Pelayan

                            </button>

                        </div>

                    </div>

                </form>

            </div>


            {{-- Daftar Pelayan --}}
            <div class="bg-white rounded-2xl border border-gray-200
                        shadow-sm overflow-hidden mt-6">

                <div class="px-6 py-5 border-b border-gray-100">

                    <div class="flex items-center justify-between gap-4">

                        <div>

                            <h3 class="text-lg font-bold text-gray-800">
                                Pelayan Jadwal
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                {{ $details->count() }} pelayan telah ditambahkan.
                            </p>

                        </div>

                        <div class="w-10 h-10 rounded-xl bg-blue-50
                                    flex items-center justify-center">

                            <span class="material-symbols-outlined text-primary">
                                groups
                            </span>

                        </div>

                    </div>

                </div>


                @if($details->count())

                    <div class="divide-y divide-gray-100">

                        @foreach($details as $detail)

                            <div class="px-6 py-4 flex items-center
                                        justify-between gap-4">

                                <div class="flex items-center gap-4 min-w-0">

                                    <div class="w-10 h-10 rounded-full bg-blue-50
                                                flex items-center justify-center shrink-0">

                                        <span class="material-symbols-outlined text-primary">
                                            person
                                        </span>

                                    </div>

                                    <div class="min-w-0">

                                        <p class="font-semibold text-gray-800 truncate">
                                            {{ $detail->servant?->name ?? '-' }}
                                        </p>

                                        <p class="text-sm text-gray-500 mt-0.5">
                                            {{ $detail->serviceRole?->name ?? '-' }}
                                        </p>

                                    </div>

                                </div>


                                <form
                                    action="{{ route('schedule-details.destroy', [$schedule, $detail]) }}"
                                    method="POST"
                                    class="shrink-0"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        onclick="return confirm('Hapus pelayan ini?')"
                                        title="Hapus pelayan"
                                        class="inline-flex items-center justify-center
                                               w-9 h-9 rounded-lg
                                               bg-red-50 text-red-600
                                               hover:bg-red-100
                                               transition"
                                    >

                                        <span class="material-symbols-outlined text-lg">
                                            delete
                                        </span>

                                    </button>

                                </form>

                            </div>

                        @endforeach

                    </div>

                @else

                    <div class="px-6 py-12 text-center">

                        <div class="w-14 h-14 mx-auto rounded-full bg-gray-100
                                    flex items-center justify-center">

                            <span class="material-symbols-outlined text-gray-400 text-2xl">
                                groups
                            </span>

                        </div>

                        <p class="mt-4 font-semibold text-gray-700">
                            Belum ada pelayan
                        </p>

                        <p class="text-sm text-gray-500 mt-1">
                            Tambahkan pelayan menggunakan form di atas.
                        </p>

                    </div>

                @endif

            </div>


            {{-- Kembali --}}
            <div class="mt-6">

                <a
                    href="{{ route('schedules.index') }}"
                    class="inline-flex items-center gap-2
                           text-sm font-semibold text-gray-600
                           hover:text-primary transition"
                >

                    <span class="material-symbols-outlined text-lg">
                        arrow_back
                    </span>

                    Kembali ke Jadwal

                </a>

            </div>

        </div>

    </div>

</x-app-layout>