<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Vendor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <h3 class="text-lg font-semibold mb-6">
                        Form Tambah Vendor
                    </h3>

                    @if ($errors->any())
                    <div class="mb-4 rounded-md bg-red-100 px-4 py-3 text-red-800">
                        <ul class="list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form method="POST" action="{{ route('vendors.store') }}">

                        @csrf

                        {{-- Kode --}}
                        <div class="mb-4">
                            <label
                                for="code"
                                class="block text-sm font-medium text-gray-700 mb-1">
                                Kode
                            </label>

                            <input
                                type="text"
                                id="code"
                                name="code"
                                value="{{ old('code') }}"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                required>

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
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                required>

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
                                id="contact_person"
                                name="contact_person"
                                value="{{ old('contact_person') }}"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">

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
                                id="phone"
                                name="phone"
                                value="{{ old('phone') }}"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">

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
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">

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
                                id="address"
                                name="address"
                                rows="3"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('address') }}</textarea>

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
                                id="description"
                                name="description"
                                rows="3"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('description') }}</textarea>

                            @error('description')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        {{-- Tombol --}}
                        <div class="flex items-center gap-2">

                            <a
                                href="{{ route('vendors.index') }}"
                                class="px-4 py-2 bg-gray-500 text-white rounded-md text-sm hover:bg-gray-600">
                                Batal
                            </a>

                            <button
                                type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700">
                                Simpan
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>