@extends('layouts.app')

@section('title', 'Trainer & Keynote Speaker Showcase - CV. Beranda Teknologi Digital')

@section('content')
<section class="py-12" x-data="{ activeImg: null, activeTitle: '', activeDesc: '' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        
        <!-- Header & Profile Card -->
        <div class="glass-card rounded-3xl p-8 sm:p-12 shadow-xl relative overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-4 flex justify-center">
                    <div class="relative">
                        <div class="w-56 h-56 rounded-3xl overflow-hidden shadow-2xl border-4 border-white dark:border-slate-800 rotate-2 hover:rotate-0 transition-transform duration-300">
                            <img src="{{ $trainerAvatar }}" alt="{{ $trainerName }}" class="w-full h-full object-cover" />
                        </div>
                        <div class="absolute -bottom-3 -right-3 bg-amber-500 text-slate-950 font-bold text-xs px-4 py-2 rounded-2xl shadow-lg">
                            ★ Certified Trainer
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-8 space-y-5 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-amber-500/10 text-amber-600 dark:text-amber-400 text-xs font-bold">
                        <span>Profile Trainer & Keynote Speaker</span>
                    </div>

                    <h1 class="text-3xl sm:text-5xl font-extrabold text-slate-900 dark:text-white">
                        {{ $trainerName }}
                    </h1>

                    <p class="text-indigo-600 dark:text-indigo-400 font-semibold text-sm sm:text-base">
                        {{ $trainerTitle }}
                    </p>

                    <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
                        {{ $trainerBio }}
                    </p>

                    <!-- Stats Badges -->
                    <div class="pt-2 grid grid-cols-3 gap-4 max-w-lg mx-auto lg:mx-0">
                        <div class="p-3 rounded-2xl bg-white/60 dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 text-center">
                            <div class="text-xl font-bold text-amber-500 font-heading">{{ $statsYears }}</div>
                            <div class="text-[11px] text-slate-500">Pengalaman</div>
                        </div>
                        <div class="p-3 rounded-2xl bg-white/60 dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 text-center">
                            <div class="text-xl font-bold text-indigo-500 font-heading">{{ $statsEvents }}</div>
                            <div class="text-[11px] text-slate-500">Event & Seminar</div>
                        </div>
                        <div class="p-3 rounded-2xl bg-white/60 dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 text-center">
                            <div class="text-xl font-bold text-emerald-500 font-heading">{{ $statsAlumni }}</div>
                            <div class="text-[11px] text-slate-500">Peserta Workshop</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section: Modul & Silabus Pelatihan IT -->
        <div class="space-y-8">
            <div class="text-center max-w-3xl mx-auto space-y-3">
                <span class="px-4 py-1.5 rounded-full bg-amber-500/10 text-amber-600 dark:text-amber-400 font-semibold text-xs uppercase tracking-wider">
                    Program & Silabus
                </span>
                <h2 class="text-3xl font-extrabold text-slate-900 dark:text-white">Modul Pelatihan Corporate & Bootcamp</h2>
                <p class="text-slate-600 dark:text-slate-300 text-sm">Pilihan silabus materi pelatihan yang dirancang khusus untuk meningkatkan keahlian tim IT perusahaan Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($trainings as $training)
                    <div class="glass-card rounded-3xl p-8 space-y-6 flex flex-col justify-between hover:border-amber-500/50 transition-all">
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="px-3 py-1 rounded-full bg-amber-500/10 text-amber-600 dark:text-amber-400 text-xs font-bold">
                                    {{ $training->level }}
                                </span>
                                <span class="text-xs text-slate-500 font-mono">{{ $training->duration }}</span>
                            </div>

                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">
                                {{ $training->title }}
                            </h3>

                            <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm leading-relaxed">
                                {{ $training->summary }}
                            </p>

                            @if($training->syllabus)
                                <div class="space-y-2 pt-2">
                                    <span class="text-xs font-bold text-slate-900 dark:text-white uppercase tracking-wider block">Materi Pokok:</span>
                                    <ul class="space-y-1.5 text-xs text-slate-600 dark:text-slate-300">
                                        @foreach($training->syllabus as $item)
                                            <li class="flex items-start gap-2">
                                                <span class="text-amber-500 font-bold">▶</span>
                                                <span>{{ $item }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <div class="pt-4 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between">
                            <div>
                                <span class="text-[10px] text-slate-500 uppercase block">Investasi / Peserta</span>
                                <span class="text-lg font-bold text-slate-900 dark:text-white font-mono">Rp {{ number_format($training->price, 0, ',', '.') }}</span>
                            </div>
                            <a href="{{ route('contact') }}" class="px-5 py-2.5 rounded-xl bg-amber-500 hover:bg-amber-600 text-slate-950 font-bold text-xs shadow-md">
                                Request Training Ini
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Section: Galeri Foto Kegiatan & Event Showcase -->
        <div class="space-y-8 pt-8">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-indigo-600 dark:text-indigo-400">Dokumentasi Acara</span>
                    <h2 class="text-3xl font-extrabold text-slate-900 dark:text-white">Galeri Foto Kegiatan & Workshop</h2>
                </div>

                <!-- Category Filters -->
                <div class="flex flex-wrap gap-2">
                    <a href="{{ route('trainer.index') }}" class="px-3.5 py-1.5 rounded-full text-xs font-semibold {{ $categoryFilter === 'all' ? 'bg-indigo-600 text-white' : 'glass-card text-slate-600 dark:text-slate-300' }}">Semua</a>
                    <a href="{{ route('trainer.index', ['category' => 'workshop']) }}" class="px-3.5 py-1.5 rounded-full text-xs font-semibold {{ $categoryFilter === 'workshop' ? 'bg-indigo-600 text-white' : 'glass-card text-slate-600 dark:text-slate-300' }}">Workshop</a>
                    <a href="{{ route('trainer.index', ['category' => 'keynote']) }}" class="px-3.5 py-1.5 rounded-full text-xs font-semibold {{ $categoryFilter === 'keynote' ? 'bg-indigo-600 text-white' : 'glass-card text-slate-600 dark:text-slate-300' }}">Keynote</a>
                    <a href="{{ route('trainer.index', ['category' => 'training']) }}" class="px-3.5 py-1.5 rounded-full text-xs font-semibold {{ $categoryFilter === 'training' ? 'bg-indigo-600 text-white' : 'glass-card text-slate-600 dark:text-slate-300' }}">Corporate Training</a>
                </div>
            </div>

            <!-- Gallery Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($galleries as $gal)
                    <div @click="activeImg = '{{ $gal->image_path }}'; activeTitle = '{{ addslashes($gal->title) }}'; activeDesc = '{{ addslashes($gal->description) }}'" 
                         class="glass-card rounded-2xl overflow-hidden cursor-pointer group hover:shadow-2xl hover:-translate-y-1 transition-all">
                        <div class="aspect-4/3 overflow-hidden relative">
                            <img src="{{ $gal->image_path }}" alt="{{ $gal->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/20 to-transparent opacity-80 group-hover:opacity-95 transition-opacity"></div>
                            
                            <div class="absolute bottom-3 left-3 right-3 text-white space-y-1">
                                <span class="text-[10px] uppercase font-bold tracking-wider px-2 py-0.5 rounded bg-indigo-600/90">
                                    {{ $gal->category }}
                                </span>
                                <h4 class="text-xs font-bold line-clamp-1">{{ $gal->title }}</h4>
                                <p class="text-[10px] text-slate-300 line-clamp-1">📍 {{ $gal->location }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Lightbox Modal -->
        <div x-show="activeImg" 
             x-transition 
             @click.self="activeImg = null" 
             class="fixed inset-0 z-50 bg-slate-950/80 backdrop-blur-md flex items-center justify-center p-4">
            <div class="max-w-3xl w-full glass-card rounded-3xl overflow-hidden shadow-2xl relative space-y-4 p-4">
                <button @click="activeImg = null" class="absolute top-4 right-4 z-10 w-8 h-8 rounded-full bg-slate-900/80 text-white flex items-center justify-center">
                    ✕
                </button>
                <div class="aspect-video rounded-2xl overflow-hidden bg-black">
                    <img :src="activeImg" :alt="activeTitle" class="w-full h-full object-contain" />
                </div>
                <div class="p-2 space-y-1">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white" x-text="activeTitle"></h3>
                    <p class="text-xs text-slate-600 dark:text-slate-300" x-text="activeDesc"></p>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
