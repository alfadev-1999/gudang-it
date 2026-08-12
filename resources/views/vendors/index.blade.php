<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vendors') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <div class="flex items-center justify-between mb-4">

                        <div>
                            <h3 class="text-lg font-semibold">
                                Daftar Vendor
                            </h3>

                            <p class="text-sm text-gray-500 mt-1">
                                Total {{ $vendors->total() }} vendor
                            </p>
                        </div>

                        @can('vendor.create')
                        <a
                            href="{{ route('vendors.create') }}"
                            class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            + Tambah Vendor
                        </a>
                        @endcan

                    </div>

                    @if (session('success'))
                    <div class="mb-4 rounded-md bg-green-100 px-4 py-3 text-green-800">
                        {{ session('success') }}
                    </div>
                    @endif

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
                                    Nama Vendor
                                </th>

                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Contact Person
                                </th>

                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Telepon
                                </th>

                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Email
                                </th>
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Aksi
                                </th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($vendors as $vendor)

                            <tr>

                                <td class="border border-gray-300 px-4 py-2">
                                    {{ $vendors->firstItem() + $loop->index }}
                                </td>

                                <td class="border border-gray-300 px-4 py-2">
                                    {{ $vendor->code }}
                                </td>

                                <td class="border border-gray-300 px-4 py-2">
                                    {{ $vendor->name }}
                                </td>

                                <td class="border border-gray-300 px-4 py-2">
                                    {{ $vendor->contact_person ?? '-' }}
                                </td>

                                <td class="border border-gray-300 px-4 py-2">
                                    {{ $vendor->phone ?? '-' }}
                                </td>

                                <td class="border border-gray-300 px-4 py-2">
                                    {{ $vendor->email ?? '-' }}
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    @can('vendor.edit')
                                    <a
                                        href="{{ route('vendors.edit', $vendor) }}"
                                        class="inline-flex items-center justify-center px-3 py-1.5 bg-blue-600 text-white rounded-md text-xs font-semibold hover:bg-blue-700">
                                        Edit
                                    </a>
                                    @endcan
                                </td>
                            </tr>

                            @empty

                            <tr>
                                <td
                                    colspan="7"
                                    class="border border-gray-300 px-4 py-4 text-center">
                                    Belum ada data vendor.
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