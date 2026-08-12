<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Departments') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (session('success'))
                    <div class="mb-4 rounded-md bg-green-100 px-4 py-3 text-green-800">
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold">
                            Daftar Department
                        </h3>

                        @can('department.create')
                        <a href="{{ route('departments.create') }}"
                            class="...">
                            + Tambah Department
                        </a>
                        @endcan
                    </div>
                    <p class="text-sm text-gray-500 mb-4">
                        Total {{ $departments->total() }} department
                    </p>

                    <form method="GET" action="{{ route('departments.index') }}" class="mb-6">
                        <div class="flex gap-2">

                            <input
                                type="text"
                                name="search"
                                value="{{ $search }}"
                                placeholder="Cari kode, nama, atau deskripsi department..."
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">

                            <button
                                type="submit"
                                class="...">
                                Cari
                            </button>

                            @if ($search)
                            <a
                                href="{{ route('departments.index') }}"
                                class="...">
                                Reset
                            </a>
                            @endif

                        </div>
                    </form>

                    <table class="w-full border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    No
                                </th>
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Kode
                                </th>
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Nama
                                </th>
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Deskripsi
                                </th>
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Aksi
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($departments as $department)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">
                                    {{ $departments->firstItem() + $loop->index }}
                                </td>

                                <td class="border border-gray-300 px-4 py-2">
                                    {{ $department->code }}
                                </td>

                                <td class="border border-gray-300 px-4 py-2">
                                    {{ $department->name }}
                                </td>

                                <td class="border border-gray-300 px-4 py-2">
                                    {{ $department->description ?? '-' }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center gap-2">
                                        @can('department.edit')
                                        <a
                                            href="{{ route('departments.edit', $department) }}"
                                            class="inline-flex items-center px-3 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                            Edit
                                        </a>
                                        @endcan

                                        @can('department.delete')
                                        <form
                                            method="POST"
                                            action="{{ route('departments.destroy', $department) }}"
                                            onsubmit="return confirm('Yakin ingin menghapus department ini?')">
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="inline-flex items-center px-3 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-800 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                Hapus
                                            </button>
                                        </form>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="border border-gray-300 px-4 py-4 text-center">
                                    Belum ada data department.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="mt-6">
                        {{ $departments->links() }}
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>