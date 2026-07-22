<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Jabatan Pelayanan
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white rounded-lg shadow p-6">

                <form action="{{ route('service-roles.update', $serviceRole) }}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="mb-4">

                        <label class="block mb-2 font-medium">
                            Nama Jabatan
                        </label>

                        <input
                            type="text"
                            name="name"
                            value="{{ old('name', $serviceRole->name) }}"
                            class="w-full border rounded px-3 py-2">

                        @error('name')
                            <p class="text-red-500 text-sm">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    <div class="flex gap-3">

                        <x-primary-button>
                            Simpan Perubahan
                        </x-primary-button>

                        <a href="{{ route('service-roles.index') }}">
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