<nav x-data="{ open: false }" class="bg-white border-r border-gray-200 w-64 min-h-screen">

    <!-- Logo -->
    <div class="h-16 flex items-center px-6 border-b border-gray-200">
        <a href="{{ route('dashboard') }}"
           class="text-xl font-bold text-gray-800">
            GUDANG IT
        </a>
    </div>

    <!-- Navigation -->
    <div class="p-4">

        <!-- Dashboard -->
        <div class="mb-6">
            <x-nav-link
                :href="route('dashboard')"
                :active="request()->routeIs('dashboard')"
                class="w-full"
            >
                Dashboard
            </x-nav-link>
        </div>

        <!-- Master Data -->
        <div class="mb-6">

            <div class="px-3 mb-2 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                Master Data
            </div>

            <div class="space-y-1">

                <a href="#"
                   class="block px-3 py-2 text-sm text-gray-600 rounded-md hover:bg-gray-100">
                    Departemen
                </a>

                <a href="#"
                   class="block px-3 py-2 text-sm text-gray-600 rounded-md hover:bg-gray-100">
                    Vendor
                </a>

                <a href="#"
                   class="block px-3 py-2 text-sm text-gray-600 rounded-md hover:bg-gray-100">
                    Lokasi
                </a>

                <a href="#"
                   class="block px-3 py-2 text-sm text-gray-600 rounded-md hover:bg-gray-100">
                    Kategori
                </a>

                <a href="#"
                   class="block px-3 py-2 text-sm text-gray-600 rounded-md hover:bg-gray-100">
                    Brand
                </a>

            </div>
        </div>

        <!-- Asset -->
        <div class="mb-6">

            <div class="px-3 mb-2 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                Asset
            </div>

            <div class="space-y-1">

                <a href="#"
                   class="block px-3 py-2 text-sm text-gray-600 rounded-md hover:bg-gray-100">
                    Asset
                </a>

                <a href="#"
                   class="block px-3 py-2 text-sm text-gray-600 rounded-md hover:bg-gray-100">
                    Assignment
                </a>

                <a href="#"
                   class="block px-3 py-2 text-sm text-gray-600 rounded-md hover:bg-gray-100">
                    Transfer
                </a>

                <a href="#"
                   class="block px-3 py-2 text-sm text-gray-600 rounded-md hover:bg-gray-100">
                    Return
                </a>

            </div>
        </div>

        <!-- Consumable -->
        <div class="mb-6">

            <div class="px-3 mb-2 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                Consumable
            </div>

            <div class="space-y-1">

                <a href="#"
                   class="block px-3 py-2 text-sm text-gray-600 rounded-md hover:bg-gray-100">
                    Stok
                </a>

                <a href="#"
                   class="block px-3 py-2 text-sm text-gray-600 rounded-md hover:bg-gray-100">
                    Transaksi
                </a>

            </div>
        </div>

        <!-- Reports -->
        <div class="mb-6">

            <div class="px-3 mb-2 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                Reports
            </div>

            <a href="#"
               class="block px-3 py-2 text-sm text-gray-600 rounded-md hover:bg-gray-100">
                Laporan
            </a>

        </div>

    </div>

</nav>