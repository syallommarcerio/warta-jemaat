<div
    class="bg-white rounded-2xl border border-gray-200
           shadow-sm hover:shadow-md
           transition-all duration-200
           relative overflow-hidden
           flex flex-col
           h-full min-h-[420px]"
>

    {{-- Garis biru di sebelah kiri --}}
    <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-primary"></div>

    <div class="p-7 pl-8 flex flex-col flex-1">

        {{-- Badge jadwal terdekat --}}
        @if($terdekat ?? false)
            <div class="mb-5">
                <span
                    class="inline-flex items-center gap-1.5
                           px-3 py-1.5
                           rounded-full
                           bg-red-50 text-red-600
                           text-xs font-semibold"
                >
                    <span class="material-symbols-outlined text-sm">
                        event
                    </span>

                    TERDEKAT
                </span>
            </div>
        @endif


        {{-- Nama kegiatan --}}
        <div class="mb-1">

            <h3 class="text-xl font-semibold text-primary">
                {{ $schedule->activity?->name ?? 'Kegiatan tidak tersedia' }}
            </h3>

            @if($schedule->theme)
                <p class="mt-1 text-sm text-gray-600">
                    {{ $schedule->theme }}
                </p>
            @endif

        </div>


        {{-- Informasi jadwal --}}
        <div class="mt-5 space-y-4">

            {{-- Tanggal --}}
            <div class="flex items-start gap-3">

                <span class="material-symbols-outlined text-primary text-[21px]">
                    calendar_today
                </span>

                <div>
                    <p class="text-xs uppercase tracking-wide text-gray-400 font-medium">
                        Tanggal
                    </p>

                    <p class="text-sm text-gray-800 font-medium mt-0.5">
                        {{ \Carbon\Carbon::parse($schedule->date)->translatedFormat('l, d F Y') }}
                    </p>
                </div>

            </div>


            {{-- Jam --}}
            <div class="flex items-start gap-3">

                <span class="material-symbols-outlined text-primary text-[21px]">
                    schedule
                </span>

                <div>
                    <p class="text-xs uppercase tracking-wide text-gray-400 font-medium">
                        Jam
                    </p>

                    <p class="text-sm text-gray-800 font-medium mt-0.5">
                        {{ \Carbon\Carbon::parse($schedule->time)->format('H.i') }} WIB
                    </p>
                </div>

            </div>


            {{-- Lokasi --}}
            <div class="flex items-start gap-3">

                <span class="material-symbols-outlined text-primary text-[21px]">
                    location_on
                </span>

                <div>
                    <p class="text-xs uppercase tracking-wide text-gray-400 font-medium">
                        Lokasi
                    </p>

                    <p class="text-sm text-gray-800 font-medium mt-0.5">
                        {{ $schedule->location ?? '-' }}
                    </p>
                </div>

            </div>


            {{-- Jumlah pelayan --}}
            <div class="flex items-start gap-3">

                <span class="material-symbols-outlined text-primary text-[21px]">
                    groups
                </span>

                <div>
                    <p class="text-xs uppercase tracking-wide text-gray-400 font-medium">
                        Pelayan
                    </p>

                    <p class="text-sm text-gray-800 font-medium mt-0.5">
                        {{ $schedule->details?->count() ?? 0 }} Pelayan
                    </p>
                </div>

            </div>

        </div>


        {{-- Tombol --}}
        <div class="mt-auto pt-6">

            <a
                href="{{ route('schedule.show', ['schedule' => $schedule->id]) }}"
                class="w-full
                       inline-flex items-center justify-center gap-2
                       px-5 py-3
                       rounded-full
                       bg-primary text-white
                       text-sm font-semibold
                       hover:opacity-90
                       transition"
            >
                Lihat Detail

                <span class="material-symbols-outlined text-[18px]">
                    arrow_forward
                </span>
            </a>

        </div>

    </div>

</div>