<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Dashboard') - CV. Beranda Teknologi Digital</title>
    
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS (Compiled & CDN Fallback) -->
    <link rel="stylesheet" href="{{ asset('build/assets/app-B9ThRUf5.css') }}">
    <link rel="stylesheet" href="/build/assets/app-B9ThRUf5.css">
    <script src="https://cdn.tailwindcss.com"></script>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(base_path('public/build/manifest.json')) || file_exists(base_path('build/manifest.json')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body, button, input, select, textarea {
            font-family: 'Poppins', sans-serif !important;
        }
        .mono {
            font-family: 'JetBrains Mono', monospace !important;
        }
    </style>
</head>
<body class="bg-[#f4f7fe] text-slate-800 min-h-screen flex selection:bg-[#3E5CE7] selection:text-white" x-data="{ sidebarOpen: false }">

    <!-- Mobile Sidebar Backdrop -->
    <div x-show="sidebarOpen" 
         @click="sidebarOpen = false" 
         class="fixed inset-0 bg-slate-900/50 backdrop-blur-xs z-40 lg:hidden"
         x-transition.opacity></div>

    <!-- Sidebar Navigation -->
    <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'"
           class="fixed inset-y-0 left-0 z-50 w-72 bg-[#07153f] text-white flex flex-col justify-between transition-transform duration-300 ease-in-out border-r border-slate-800">
        
        <div class="p-6 space-y-8 overflow-y-auto">
            
            <!-- Logo Brand -->
            <div class="flex items-center justify-between">
                <a href="{{ route('admin.dashboard') }}" class="inline-block py-1">
                    <img src="/images/Logo-BTD.png" alt="CV. Beranda Teknologi Digital" class="h-14 sm:h-16 w-auto object-contain brightness-110 drop-shadow-xs" />
                </a>
                <button @click="sidebarOpen = false" class="lg:hidden text-slate-400 hover:text-white">
                    ✕
                </button>
            </div>

            <!-- Menu Navigation Links -->
            <div class="space-y-6">
                <div class="space-y-1">
                    <span class="text-[10px] font-extrabold uppercase tracking-widest text-slate-400 px-3">Ringkasan</span>
                    <a href="{{ route('admin.dashboard') }}" 
                       class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('admin.dashboard') ? 'bg-[#3E5CE7] text-white shadow-md' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                        <span>📊</span>
                        <span>Dashboard Overview</span>
                    </a>
                    <a href="{{ route('admin.settings.index') }}" 
                       class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('admin.settings.*') ? 'bg-[#3E5CE7] text-white shadow-md' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                        <span>🎨</span>
                        <span>Tema & Pengaturan Web</span>
                    </a>
                </div>

                <div class="space-y-1">
                    <span class="text-[10px] font-extrabold uppercase tracking-widest text-slate-400 px-3">Konten Halaman</span>
                    <a href="{{ route('admin.projects.index') }}" 
                       class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('admin.projects.*') ? 'bg-[#3E5CE7] text-white shadow-md' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                        <span>📁</span>
                        <span>Portofolio Proyek</span>
                    </a>
                    <a href="{{ route('admin.products.index') }}" 
                       class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('admin.products.*') ? 'bg-[#3E5CE7] text-white shadow-md' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                        <span>🛒</span>
                        <span>Produk Digital & Store</span>
                    </a>
                    <a href="{{ route('admin.trainings.index') }}" 
                       class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('admin.trainings.*') ? 'bg-[#3E5CE7] text-white shadow-md' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                        <span>🎓</span>
                        <span>Modul & Pelatihan IT</span>
                    </a>
                    <a href="{{ route('admin.galleries.index') }}" 
                       class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('admin.galleries.*') ? 'bg-[#3E5CE7] text-white shadow-md' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                        <span>🖼️</span>
                        <span>Galeri Dokumentasi</span>
                    </a>
                    <a href="{{ route('admin.posts.index') }}" 
                       class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('admin.posts.*') ? 'bg-[#3E5CE7] text-white shadow-md' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                        <span>📰</span>
                        <span>Artikel Blog & Berita</span>
                    </a>
                    <a href="{{ route('admin.categories.index') }}" 
                       class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('admin.categories.*') ? 'bg-[#3E5CE7] text-white shadow-md' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                        <span>📂</span>
                        <span>Kategori Konten</span>
                    </a>
                </div>

                <div class="space-y-1">
                    <span class="text-[10px] font-extrabold uppercase tracking-widest text-slate-400 px-3">Interaksi</span>
                    <a href="{{ route('admin.inquiries.index') }}" 
                       class="flex items-center justify-between px-3 py-2.5 rounded-xl text-xs font-bold transition-all {{ request()->routeIs('admin.inquiries.*') ? 'bg-[#3E5CE7] text-white shadow-md' : 'text-slate-300 hover:bg-slate-800/80 hover:text-white' }}">
                        <span class="flex items-center gap-3">
                            <span>✉️</span>
                            <span>Pesan Masuk</span>
                        </span>
                        @php $unread = \App\Models\Inquiry::where('is_read', false)->count(); @endphp
                        @if($unread > 0)
                            <span class="px-2 py-0.5 rounded-full bg-[#fe6000] text-white text-[10px] font-extrabold">
                                {{ $unread }}
                            </span>
                        @endif
                    </a>
                </div>
            </div>

        </div>

        <!-- Sidebar Bottom Footer -->
        <div class="p-6 border-t border-slate-800 space-y-4">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-full bg-blue-600/30 text-blue-300 flex items-center justify-center font-bold text-xs border border-blue-500/30">
                    👨‍💼
                </div>
                <div class="overflow-hidden">
                    <div class="text-xs font-bold text-white truncate">{{ Auth::user()->name ?? 'Administrator' }}</div>
                    <div class="text-[10px] text-slate-400 truncate">{{ Auth::user()->email ?? 'admin@berandadigital.net' }}</div>
                </div>
            </div>

            <div class="flex items-center gap-2">
                <a href="{{ route('home') }}" target="_blank" class="flex-1 py-2 px-3 rounded-lg bg-slate-800 hover:bg-slate-700 text-center text-[11px] font-bold text-slate-300 transition-all">
                    Lihat Web ↗
                </a>
                <form action="{{ route('admin.logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="py-2 px-3 rounded-lg bg-rose-950/80 hover:bg-rose-900 text-rose-300 text-[11px] font-bold transition-all">
                        Logout
                    </button>
                </form>
            </div>
        </div>

    </aside>

    <!-- Main Content Area -->
    <div class="flex-1 lg:pl-72 flex flex-col min-h-screen">
        
        <!-- Top Header Navigation -->
        <header class="h-16 bg-white border-b border-slate-200 px-4 sm:px-8 flex items-center justify-between sticky top-0 z-30 shadow-xs">
            <div class="flex items-center gap-4">
                <button @click="sidebarOpen = !sidebarOpen" class="lg:hidden p-2 rounded-lg bg-slate-100 text-slate-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <div class="text-xs font-bold text-slate-500 hidden sm:block">
                    Portal Manajemen Konten Website &bull; <strong class="text-[#07153f]">CV. Beranda Teknologi Digital</strong>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <a href="{{ route('admin.settings.index') }}" class="px-3.5 py-1.5 rounded-lg bg-orange-50 hover:bg-orange-100 text-[#fe6000] text-xs font-bold transition-all flex items-center gap-1.5">
                    <span>🎨</span>
                    <span class="hidden sm:inline">Kustomisasi Tema</span>
                </a>
                <a href="{{ route('home') }}" target="_blank" class="px-3.5 py-1.5 rounded-lg bg-blue-50 hover:bg-blue-100 text-[#3E5CE7] text-xs font-bold transition-all flex items-center gap-1.5">
                    <span>🌐</span>
                    <span class="hidden sm:inline">Lihat Web Publik</span>
                </a>
            </div>
        </header>

        <!-- Main Body Wrapper -->
        <main class="flex-1 p-4 sm:p-8 space-y-6 max-w-7xl w-full mx-auto">
            
            <!-- Toast Notification Alerts -->
            @if (session('success'))
                <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-bold flex items-center justify-between shadow-xs">
                    <div class="flex items-center gap-2">
                        <span class="text-base">✅</span>
                        <span>{{ session('success') }}</span>
                    </div>
                    <button type="button" @click="$el.parentElement.remove()" class="text-emerald-600 hover:text-emerald-900 font-extrabold text-sm">✕</button>
                </div>
            @endif

            @if (session('error'))
                <div class="p-4 rounded-2xl bg-rose-50 border border-rose-200 text-rose-800 text-xs font-bold flex items-center justify-between shadow-xs">
                    <div class="flex items-center gap-2">
                        <span class="text-base">⚠️</span>
                        <span>{{ session('error') }}</span>
                    </div>
                    <button type="button" @click="$el.parentElement.remove()" class="text-rose-600 hover:text-rose-900 font-extrabold text-sm">✕</button>
                </div>
            @endif

            @yield('content')
        </main>

        <!-- Admin Footer -->
        <footer class="py-4 px-8 border-t border-slate-200 text-center text-xs text-slate-400 bg-white">
            &copy; {{ date('Y') }} CV. Beranda Teknologi Digital &bull; Admin Management Engine v2.0
        </footer>

    </div>

</body>
</html>
