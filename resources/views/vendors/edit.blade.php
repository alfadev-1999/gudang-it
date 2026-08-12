<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Vendor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <h3 class="text-lg font-semibold mb-6">
                        Form Edit Vendor
                    </h3>

                    <form method="POST"
                          action="{{ route('vendors.update', $vendor) }}">

                        @csrf
                        @method('PUT')

                        {{-- Kode --}}
                        <div class="mb-4">

                            <label
                                for="code"
                                class="block text-sm font-medium text-gray-700 mb-1">
                                Kode
                            </label>

                            <input
                                type="text"
                                name="code"
                                id="code"
                                value="{{ old('code', $vendor->code) }}"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                required
                            >

                            @error('code')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- Nama Vendor --}}
                        <div class="mb-4">

                            <label
                                for="name"
                                class="block text-sm font-medium text-gray-700 mb-1">
                                Nama Vendor
                            </label>

                            <input
                                type="text"
                                name="name"
                                id="name"
                                value="{{ old('name', $vendor->name) }}"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                required
                            >

                            @error('name')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- Contact Person --}}
                        <div class="mb-4">

                            <label
                                for="contact_person"
                                class="block text-sm font-medium text-gray-700 mb-1">
                                Contact Person
                            </label>

                            <input
                                type="text"
                                name="contact_person"
                                id="contact_person"
                                value="{{ old('contact_person', $vendor->contact_person) }}"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            >

                            @error('contact_person')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- Telepon --}}
                        <div class="mb-4">

                            <label
                                for="phone"
                                class="block text-sm font-medium text-gray-700 mb-1">
                                Telepon
                            </label>

                            <input
                                type="text"
                                name="phone"
                                id="phone"
                                value="{{ old('phone', $vendor->phone) }}"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            >

                            @error('phone')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- Email --}}
                        <div class="mb-4">

                            <label
                                for="email"
                                class="block text-sm font-medium text-gray-700 mb-1">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                id="email"
                                value="{{ old('email', $vendor->email) }}"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            >

                            @error('email')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- Alamat --}}
                        <div class="mb-4">

                            <label
                                for="address"
                                class="block text-sm font-medium text-gray-700 mb-1">
                                Alamat
                            </label>

                            <textarea
                                name="address"
                                id="address"
                                rows="3"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            >{{ old('address', $vendor->address) }}</textarea>

                            @error('address')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- Deskripsi --}}
                        <div class="mb-6">

                            <label
                                for="description"
                                class="block text-sm font-medium text-gray-700 mb-1">
                                Deskripsi
                            </label>

                            <textarea
                                name="description"
                                id="description"
                                rows="3"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            >{{ old('description', $vendor->description) }}</textarea>

                            @error('description')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- Tombol --}}
                        <div class="flex items-center gap-2">

                            <button
                                type="submit"
                                class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Simpan Perubahan
                            </button>

                            <a
                                href="{{ route('vendors.index') }}"
                                class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-300 transition ease-in-out duration-150">
                                Batal
                            </a>

                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>