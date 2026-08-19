<?php

namespace App\Http\Controllers;

use App\Models\DigitalProduct;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Training;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // 1. Featured Projects
        $featuredProjects = Project::with('category')
            ->where('is_featured', true)
            ->orderBy('order', 'asc')
            ->take(6)
            ->get();

        if ($featuredProjects->isEmpty()) {
            $featuredProjects = Project::with('category')->latest()->take(6)->get();
        }

        // 2. Featured Digital Products
        $featuredProducts = DigitalProduct::with('category')
            ->where('is_featured', true)
            ->orderBy('order', 'asc')
            ->take(3)
            ->get();

        // 3. Featured Trainings
        $trainings = Training::where('is_featured', true)
            ->orderBy('order', 'asc')
            ->take(2)
            ->get();

        // 4. Featured Galleries
        $galleries = Gallery::where('is_featured', true)
            ->orderBy('order', 'asc')
            ->take(4)
            ->get();

        // 5. Latest Posts
        $latestPosts = Post::with(['category', 'author'])
            ->where('status', 'published')
            ->latest('published_at')
            ->take(6)
            ->get();

        // 6. Settings
        $siteName = Setting::getValue('site_name', 'CV. Beranda Teknologi Digital');
        $heroTagline = Setting::getValue('hero_tagline', 'Bangun Usaha & Bisnis Anda Go Digital !');
        $heroDescription = Setting::getValue('hero_description', 'Beranda Teknologi Digital - Jasa pembuatan website, sistem informasi, aplikasi android & desain grafis.');
        
        $trainerName = Setting::getValue('trainer_name', 'Septa Ryan Hidayat, S.Kom');
        $trainerTitle = Setting::getValue('trainer_title', 'Direktur Utama CV. Beranda Teknologi Digital, Software Engineer & AI Speaker');
        $trainerBio = Setting::getValue('trainer_bio', 'Direktur Utama & Lead Software Engineer di CV. Beranda Teknologi Digital. Dewan Pakar IGI Ogan Ilir, Narasumber Komdigi & Media Indonesia, serta Trainer Nasional.');
        $trainerAvatar = Setting::getValue('trainer_avatar', 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=600&q=80');

        return view('public.home', compact(
            'featuredProjects',
            'featuredProducts',
            'trainings',
            'galleries',
            'latestPosts',
            'siteName',
            'heroTagline',
            'heroDescription',
            'trainerName',
            'trainerTitle',
            'trainerBio',
            'trainerAvatar'
        ));
    }

    public function services()
    {
        return view('public.services');
    }
}
