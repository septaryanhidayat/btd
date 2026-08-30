<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Administrator - CV. Beranda Teknologi Digital</title>
    
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS (Compiled & CDN Fallback) -->
    <link rel="stylesheet" href="{{ asset('build/assets/app-B9ThRUf5.css') }}">
    <link rel="stylesheet" href="/build/assets/app-B9ThRUf5.css">
    <script src="https://cdn.tailwindcss.com"></script>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(base_path('public/build/manifest.json')) || file_exists(base_path('build/manifest.json')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: radial-gradient(circle at 10% 20%, #07153f 0%, #0a1b4d 50%, #030a21 100%);
        }
        @keyframes float-slow {
            0%, 100% { transform: translateY(-10px); }
            50% { transform: translateY(10px); }
        }
        .anim-float {
            animation: float-slow 5s ease-in-out infinite;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 relative overflow-hidden text-slate-800 selection:bg-[#3E5CE7] selection:text-white"
      x-data="{ showPass: false, email: '{{ old('email', 'admin@berandadigital.net') }}', password: 'password123' }">

    <!-- Ambient Glowing Orbs Background -->
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-[#3E5CE7]/30 rounded-full blur-3xl pointer-events-none anim-float"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-[#fe6000]/25 rounded-full blur-3xl pointer-events-none anim-float" style="animation-delay: -2.5s;"></div>
    
    <!-- Multi-color Dot Matrix Grid -->
    <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: radial-gradient(#3E5CE7 1.5px, transparent 1.5px); background-size: 24px 24px;"></div>

    <div class="w-full max-w-md relative z-10">
        
        <!-- Login Glass Card -->
        <div class="bg-white/95 backdrop-blur-2xl rounded-3xl p-8 sm:p-10 shadow-2xl border border-white/40 space-y-8">
            
            <!-- Logo & Brand Title -->
            <div class="text-center space-y-3">
                <a href="{{ route('home') }}" class="inline-block hover:scale-105 transition-transform">
                    <img src="{{ asset('images/Logo-BTD.png') }}" alt="CV. Beranda Teknologi Digital" class="h-16 sm:h-20 w-auto mx-auto object-contain drop-shadow-xs" />
                </a>
                <div class="space-y-1">
                    <h1 class="text-xl font-extrabold text-[#07153f]">Admin Dashboard Portal</h1>
                    <p class="text-xs text-slate-500">Silakan login untuk mengelola seluruh konten dan tema website</p>
                </div>
            </div>

            <!-- Error Alerts -->
            @if ($errors->any())
                <div class="p-4 rounded-xl bg-rose-50 border border-rose-200 text-rose-700 text-xs font-semibold space-y-1">
                    @foreach ($errors->all() as $error)
                        <div class="flex items-center gap-2">
                            <span>⚠️</span>
                            <span>{{ $error }}</span>
                        </div>
                    @endforeach
                </div>
            @endif

            <!-- Form -->
            <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Email -->
                <div class="space-y-1.5">
                    <label for="email" class="block text-xs font-bold text-[#07153f] uppercase tracking-wider">
                        Email Administrator
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400 text-sm">
                            ✉️
                        </span>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               x-model="email"
                               required 
                               placeholder="admin@berandadigital.net" 
                               class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:border-[#3E5CE7] focus:outline-none transition-all" />
                    </div>
                </div>

                <!-- Password -->
                <div class="space-y-1.5">
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-xs font-bold text-[#07153f] uppercase tracking-wider">
                            Kata Sandi
                        </label>
                        <button type="button" 
                                @click="showPass = !showPass" 
                                class="text-[11px] font-bold text-[#3E5CE7] hover:underline focus:outline-none" 
                                x-text="showPass ? 'Sembunyikan' : 'Tampilkan'">
                        </button>
                    </div>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400 text-sm">
                            🔒
                        </span>
                        <input :type="showPass ? 'text' : 'password'" 
                               id="password" 
                               name="password" 
                               x-model="password"
                               required 
                               placeholder="••••••••" 
                               class="w-full pl-10 pr-10 py-3 rounded-xl border border-slate-200 text-xs focus:ring-2 focus:ring-[#3E5CE7] focus:border-[#3E5CE7] focus:outline-none transition-all" />
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between text-xs">
                    <label class="flex items-center gap-2 cursor-pointer text-slate-600 font-medium">
                        <input type="checkbox" name="remember" class="rounded text-[#3E5CE7] focus:ring-[#3E5CE7]" checked />
                        <span>Ingat Saya</span>
                    </label>
                    <a href="{{ route('home') }}" class="font-bold text-slate-500 hover:text-[#3E5CE7] transition-colors">
                        &larr; Kembali ke Web
                    </a>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full py-4 rounded-xl bg-[#3E5CE7] hover:bg-blue-700 text-white font-extrabold text-xs uppercase tracking-wider shadow-lg hover:shadow-blue-600/30 transition-all flex items-center justify-center gap-2">
                    <span>Masuk ke Dashboard</span> &rarr;
                </button>
            </form>

            <!-- Quick Auto-Fill Demo Credentials Helper -->
            <div class="pt-4 border-t border-slate-100 text-center space-y-2">
                <span class="text-[11px] text-slate-400 font-semibold block">Kredensial Default Administrator:</span>
                <div class="inline-flex items-center gap-2 p-2 px-3 rounded-xl bg-slate-50 border border-slate-200 text-[11px] font-mono text-slate-600">
                    <span><strong>Email:</strong> admin@berandadigital.net</span>
                    <span>&bull;</span>
                    <span><strong>Pass:</strong> password123</span>
                </div>
            </div>

        </div>

        <!-- Footer Notice -->
        <div class="text-center pt-6 text-xs text-slate-400">
            &copy; {{ date('Y') }} CV. Beranda Teknologi Digital &bull; All Rights Reserved.
        </div>

    </div>

</body>
</html>
