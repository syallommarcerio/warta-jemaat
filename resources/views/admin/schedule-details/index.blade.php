<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kelola Pelayan Jadwal
        </h2>
    </x-slot>

    <div class="py-8">

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white rounded-lg shadow p-6">
                @if(session('success'))
                    <div class="mb-4 rounded bg-green-100 border border-green-300 text-green-700 px-4 py-3">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="mb-4 rounded bg-red-100 border border-red-300 text-red-700 px-4 py-3">
                        {{ session('error') }}
                    </div>
                @endif
                <h3 class="text-xl font-semibold mb-2">
                    {{ $schedule->activity->name }}
                </h3>

                <p class="text-gray-600 mb-6">
                    {{ $schedule->date }} | {{ substr($schedule->time,0,5) }}
                </p>

                <form
                action="{{ route('schedule-details.store', $schedule) }}"
                method="POST">

                @csrf

                    <div class="grid grid-cols-2 gap-4">

                        <div>

                            <label class="block mb-2 font-medium">
                                Jabatan
                            </label>

                            <select
                                name="service_role_id"
                                class="w-full border rounded px-3 py-2">

                                @foreach($serviceRoles as $role)

                            <option value="{{ $role->id }}">
                                {{ $role->name }}
                            </option>
                                @endforeach

                            </select>

                        </div>

                        <div>

                            <label class="block mb-2 font-medium">
                                Pelayan
                            </label>

                            <select
                                name="servant_id"
                                class="w-full border rounded px-3 py-2">

                                @foreach($servants as $servant)

                            <option value="{{ $servant->id }}">
                                {{ $servant->name }}
                            </option>

                                @endforeach

                            </select>

                        </div>

                    </div>

                    <div class="mt-6">

                        <x-primary-button>

                            Tambah Pelayan

                        </x-primary-button>

                    </div>

                </form>

                <hr class="my-8">

                <table class="w-full border">

                    <thead class="bg-gray-100">

                        <tr>

                            <th class="border p-2">
                                Jabatan
                            </th>

                            <th class="border p-2">
                                Pelayan
                            </th>

                            <th class="border p-2">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($details as $detail)

                            <tr>

                                <td class="border p-2">

                                    {{ $detail->serviceRole->name }}

                                </td>

                                <td class="border p-2">

                                    {{ $detail->servant->name }}

                                </td>
                                <td class="border p-2 text-center">

                                    <form
                                        action="{{ route('schedule-details.destroy', [$schedule, $detail]) }}"
                                        method="POST">

                                        @csrf
                                        @method('DELETE')

                                        <x-danger-button
                                            onclick="return confirm('Hapus pelayan ini?')">

                                            Hapus

                                        </x-danger-button>

                                    </form>

                                </td>
                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="3"
                                    class="border p-4 text-center text-gray-500">

                                    Belum ada pelayan.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</x-app-layout>