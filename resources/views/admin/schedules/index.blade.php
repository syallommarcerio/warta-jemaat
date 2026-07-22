<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Daftar Pengumuman
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a href="{{ route('announcements.create') }}">
                <x-primary-button>
                    Tambah Pengumuman
                </x-primary-button>
            </a>

        </div>
    </div>

</x-app-layout>