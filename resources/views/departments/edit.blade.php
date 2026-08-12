<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Department') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{ route('departments.update', $department) }}">

                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label
                                for="code"
                                class="block font-medium text-sm text-gray-700"
                            >
                                Kode
                            </label>

                            <input
                                type="text"
                                name="code"
                                id="code"
                                value="{{ old('code', $department->code) }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                                required
                            >

                            @error('code')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label
                                for="name"
                                class="block font-medium text-sm text-gray-700"
                            >
                                Nama Department
                            </label>

                            <input
                                type="text"
                                name="name"
                                id="name"
                                value="{{ old('name', $department->name) }}"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                                required
                            >

                            @error('name')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label
                                for="description"
                                class="block font-medium text-sm text-gray-700"
                            >
                                Deskripsi
                            </label>

                            <textarea
                                name="description"
                                id="description"
                                rows="4"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            >{{ old('description', $department->description) }}</textarea>

                            @error('description')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="flex items-center gap-2">

                            <a
                                href="{{ route('departments.index') }}"
                                class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md"
                            >
                                Batal
                            </a>

                            <button
                                type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded-md"
                            >
                                Update
                            </button>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</x-app-layout>