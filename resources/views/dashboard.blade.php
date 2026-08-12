<x-app-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    {{-- Dashboard Content --}}
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Welcome --}}
            <div class="mb-6">
                <h3 class="text-2xl font-bold text-gray-800">
                    Selamat Datang di Gudang IT
                </h3>

                <p class="mt-1 text-sm text-gray-500">
                    Kelola asset, stok, transaksi, dan aktivitas gudang IT.
                </p>
            </div>

            {{-- Statistics --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                {{-- Total Asset --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <p class="text-sm font-medium text-gray-500">
                            Total Asset
                        </p>

                        <p class="mt-2 text-3xl font-bold text-gray-800">
                            0
                        </p>
                    </div>
                </div>

                {{-- Asset Tersedia --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <p class="text-sm font-medium text-gray-500">
                            Asset Tersedia
                        </p>

                        <p class="mt-2 text-3xl font-bold text-gray-800">
                            0
                        </p>
                    </div>
                </div>

                {{-- Asset Dipakai --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <p class="text-sm font-medium text-gray-500">
                            Asset Dipakai
                        </p>

                        <p class="mt-2 text-3xl font-bold text-gray-800">
                            0
                        </p>
                    </div>
                </div>

                {{-- Consumable --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <p class="text-sm font-medium text-gray-500">
                            Consumable
                        </p>

                        <p class="mt-2 text-3xl font-bold text-gray-800">
                            0
                        </p>
                    </div>
                </div>

            </div>

            {{-- Recent Activity --}}
            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6">

                    <h3 class="text-lg font-semibold text-gray-800">
                        Aktivitas Terbaru
                    </h3>

                    <p class="mt-2 text-sm text-gray-500">
                        Belum ada aktivitas.
                    </p>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>