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
        
        $trainerName = Setting::getValue('trainer_name', 'Tim Ahli & Trainer Beranda Digital');
        $trainerTitle = Setting::getValue('trainer_title', 'Software Engineer, UI/UX Designer & AI Specialist');
        $trainerBio = Setting::getValue('trainer_bio', 'Tim profesional di CV. Beranda Teknologi Digital yang berpengalaman merancang arsitektur sistem skala besar dan memimpin pelatihan teknologi nasional.');
        $trainerAvatar = Setting::getValue('trainer_avatar', '/images/hero-person-old.png');

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
