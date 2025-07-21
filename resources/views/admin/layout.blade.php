
<x-app-layout>
    <div class="min-h-screen flex bg-gray-50">
        <!-- Sidebar -->
        <aside class="w-64 bg-[#316FB5] text-white flex flex-col py-8 px-4">
            <div class="flex items-center gap-2 mb-10">
                <img src="{{ asset('assets/img/logo1.jpg') }}" alt="Brain Nova" class="h-10 w-10 rounded-full shadow" />
                <span class="font-bold text-xl">Brain Nova</span>
            </div>
            <nav class="flex flex-col gap-4">
                <a href="{{ route('admin.dashboard') }}" class="py-2 px-3 rounded-lg hover:bg-[#254e7e] {{ request()->routeIs('admin.dashboard') ? 'bg-[#254e7e]' : '' }}">
                    Dashboard
                </a>
                <a href="{{ route('admin.quotes.index') }}" class="py-2 px-3 rounded-lg hover:bg-[#254e7e] {{ request()->routeIs('admin.quotes.index') ? 'bg-[#254e7e]' : '' }}">
                    Devis clients
                </a>
                <!-- Ajoute ici d'autres liens admin si besoin -->
            </nav>
            <div class="mt-auto text-xs text-center text-white/60">
                © {{ date('Y') }} Brain Nova
            </div>
        </aside>

        <!-- Main content -->
        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>
</x-app-layout>