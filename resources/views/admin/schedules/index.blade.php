<x-app-layout>

    {{-- Header --}}
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

            <div>
                <h2 class="font-bold text-2xl text-gray-800 leading-tight">
                    Jadwal Pelayanan
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    Kelola jadwal pelayanan gereja.
                </p>
            </div>

        </div>
    </x-slot>


    <div class="py-8">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Pesan sukses --}}
            @if (session('success'))
                <div class="mb-6 flex items-start gap-3 rounded-xl
                            bg-green-50 border border-green-200
                            px-4 py-3 text-green-700">

                    <span class="material-symbols-outlined text-green-600">
                        check_circle
                    </span>

                    <div>
                        <p class="font-medium">
                            Berhasil
                        </p>

                        <p class="text-sm mt-0.5">
                            {{ session('success') }}
                        </p>
                    </div>

                </div>
            @endif


            {{-- Page Header --}}
            <div class="bg-white rounded-2xl border border-gray-200
                        shadow-sm p-6 mb-6">

                <div class="flex flex-col sm:flex-row
                            sm:items-center sm:justify-between gap-4">

                    <div class="flex items-center gap-4">

                        <div class="w-12 h-12 rounded-xl bg-primary/10
                                    flex items-center justify-center">

                            <span class="material-symbols-outlined text-primary text-2xl">
                                calendar_month
                            </span>

                        </div>

                        <div>
                            <h3 class="text-lg font-bold text-gray-800">
                                Daftar Jadwal
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                {{ $schedules->count() }} jadwal terdaftar
                            </p>
                        </div>

                    </div>


                    {{-- Tambah Jadwal --}}
                    {{-- Tambah Jadwal --}}
                    <a
                        href="{{ route('schedules.create') }}"
                        class="inline-flex items-center justify-center gap-2
                            px-4 py-2.5 rounded-lg
                            bg-blue-600 text-white
                            text-sm font-semibold
                            hover:bg-blue-700
                            transition shadow-sm"
                    >
                        <span class="material-symbols-outlined text-lg">
                            add
                        </span>

                        Tambah Jadwal
                    </a>

                </div>

            </div>


            {{-- Tabel --}}
            <div class="bg-white rounded-2xl border border-gray-200
                        shadow-sm overflow-hidden">

                <div class="overflow-x-auto">

                    <table class="min-w-full">

                        {{-- Table Header --}}
                        <thead class="bg-gray-50 border-b border-gray-200">

                            <tr>

                                <th class="px-6 py-4 text-left text-xs
                                           font-semibold text-gray-500 uppercase
                                           tracking-wider">
                                    No
                                </th>

                                <th class="px-6 py-4 text-left text-xs
                                           font-semibold text-gray-500 uppercase
                                           tracking-wider">
                                    Kegiatan
                                </th>

                                <th class="px-6 py-4 text-left text-xs
                                           font-semibold text-gray-500 uppercase
                                           tracking-wider">
                                    Tanggal
                                </th>

                                <th class="px-6 py-4 text-left text-xs
                                           font-semibold text-gray-500 uppercase
                                           tracking-wider">
                                    Jam
                                </th>

                                <th class="px-6 py-4 text-left text-xs
                                           font-semibold text-gray-500 uppercase
                                           tracking-wider">
                                    Lokasi
                                </th>

                                <th class="px-6 py-4 text-left text-xs
                                           font-semibold text-gray-500 uppercase
                                           tracking-wider">
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        {{-- Table Body --}}
                        <tbody class="divide-y divide-gray-100">

                            @forelse($schedules as $schedule)

                                <tr class="hover:bg-gray-50/80 transition">


                                    {{-- No --}}
                                    <td class="px-6 py-5 text-sm text-gray-500">
                                        {{ $loop->iteration }}
                                    </td>


                                    {{-- Kegiatan --}}
                                    <td class="px-6 py-5">

                                        <div class="flex items-start gap-3">

                                            <div class="w-10 h-10 shrink-0 rounded-lg
                                                        bg-blue-50
                                                        flex items-center justify-center">

                                                <span class="material-symbols-outlined
                                                             text-blue-600">
                                                    event
                                                </span>

                                            </div>

                                            <div>

                                                <p class="font-semibold text-gray-900">
                                                    {{ $schedule->activity->name }}
                                                </p>

                                                @if($schedule->theme)

                                                    <p class="text-sm text-gray-500 mt-1
                                                              max-w-xs">
                                                        {{ $schedule->theme }}
                                                    </p>

                                                @endif

                                            </div>

                                        </div>

                                    </td>


                                    {{-- Tanggal --}}
                                    <td class="px-6 py-5">

                                        <div class="flex items-center gap-2">

                                            <span class="material-symbols-outlined
                                                         text-gray-400 text-lg">
                                                calendar_today
                                            </span>

                                            <span class="text-sm text-gray-700">
                                                {{ \Carbon\Carbon::parse($schedule->date)->translatedFormat('d F Y') }}
                                            </span>

                                        </div>

                                    </td>


                                    {{-- Jam --}}
                                    <td class="px-6 py-5">

                                        <div class="inline-flex items-center gap-2
                                                    px-3 py-1.5 rounded-lg
                                                    bg-gray-100 text-gray-700">

                                            <span class="material-symbols-outlined text-base">
                                                schedule
                                            </span>

                                            <span class="text-sm font-medium">
                                                {{ substr($schedule->time, 0, 5) }} WIB
                                            </span>

                                        </div>

                                    </td>


                                    {{-- Lokasi --}}
                                    <td class="px-6 py-5">

                                        <div class="flex items-center gap-2">

                                            <span class="material-symbols-outlined
                                                         text-gray-400 text-lg">
                                                location_on
                                            </span>

                                            <span class="text-sm text-gray-700">
                                                {{ $schedule->location }}
                                            </span>

                                        </div>

                                    </td>


                                    {{-- Aksi --}}
                                    <td class="px-6 py-5">

                                        <div class="flex items-center gap-2">

                                            {{-- Edit --}}
                                            <a
                                                href="{{ route('schedules.edit', $schedule) }}"
                                                title="Edit Jadwal"
                                                class="inline-flex items-center justify-center
                                                       w-9 h-9 rounded-lg
                                                       bg-gray-100 text-gray-600
                                                       hover:bg-gray-200
                                                       transition"
                                            >

                                                <span class="material-symbols-outlined text-lg">
                                                    edit
                                                </span>

                                            </a>


                                            {{-- Kelola Pelayan --}}
                                            <a
                                                href="{{ route('schedule-details.index', $schedule) }}"
                                                title="Kelola Pelayan"
                                                class="inline-flex items-center justify-center
                                                       w-9 h-9 rounded-lg
                                                       bg-primary/10 text-primary
                                                       hover:bg-primary/20
                                                       transition"
                                            >

                                                <span class="material-symbols-outlined text-lg">
                                                    groups
                                                </span>

                                            </a>


                                            {{-- Hapus --}}
                                            <form
                                                action="{{ route('schedules.destroy', $schedule) }}"
                                                method="POST"
                                            
                                        data-confirm-delete
                                        data-confirm-title="Hapus jadwal?"
                                        data-confirm-message="Jadwal pelayanan ini akan dihapus. Data terkait mungkin ikut terhapus sesuai aturan database."
>

                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    title="Hapus Jadwal"
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

                                    </td>

                                </tr>

                            @empty

                                {{-- Empty State --}}
                                <tr>

                                    <td colspan="6" class="px-6 py-16 text-center">

                                        <div class="flex flex-col items-center">

                                            <div class="w-16 h-16 rounded-full
                                                        bg-gray-100
                                                        flex items-center justify-center
                                                        mb-4">

                                                <span class="material-symbols-outlined
                                                             text-gray-400 text-3xl">
                                                    calendar_month
                                                </span>

                                            </div>

                                            <h3 class="font-semibold text-gray-700">
                                                Belum ada jadwal
                                            </h3>

                                            <p class="text-sm text-gray-500 mt-1">
                                                Silakan tambahkan jadwal pelayanan baru.
                                            </p>

                                            <a
                                                href="{{ route('schedules.create') }}"
                                                class="inline-flex items-center gap-2
                                                    mt-5 px-4 py-2 rounded-lg
                                                    bg-blue-600 text-white
                                                    text-sm font-semibold
                                                    hover:bg-blue-700 transition"
                                            >
                                                <span class="material-symbols-outlined text-lg">
                                                    add
                                                </span>

                                                Tambah Jadwal
                                            </a>

                                            </a>

                                        </div>

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>