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
            ->take(3)
            ->get();

        // 6. Settings
        $siteName = Setting::getValue('site_name', 'Beranda Digital');
        $heroTagline = Setting::getValue('hero_tagline', 'Mitra Transformasi Digital, Developer Software & Inovator Produk AI');
        $heroDescription = Setting::getValue('hero_description', 'Beranda Digital adalah startup agensi teknologi modern yang bergerak di bidang pembuatan aplikasi enterprise, pengembangan produk digital, dan penyelenggaraan pelatihan/workshop teknologi terkini.');
        
        $trainerName = Setting::getValue('trainer_name', 'Ryan Beranda Digital');
        $trainerTitle = Setting::getValue('trainer_title', 'Senior Software Architect, AI Specialist & Certified Corporate Trainer');
        $trainerBio = Setting::getValue('trainer_bio', 'Berpengalaman lebih dari 8 tahun merancang arsitektur sistem skala besar dan memimpin pelatihan teknologi.');
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
}
