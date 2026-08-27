<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\DigitalProduct;
use App\Models\Gallery;
use App\Models\Inquiry;
use App\Models\Post;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Training;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $projectCount = Project::count();
        $productCount = DigitalProduct::count();
        $trainingCount = Training::count();
        $galleryCount = Gallery::count();
        $postCount = Post::count();
        $categoryCount = Category::count();
        $inquiryCount = Inquiry::count();
        $unreadInquiryCount = Inquiry::where('is_read', false)->count();

        $recentInquiries = Inquiry::latest()->take(5)->get();
        $recentProjects = Project::with('category')->latest()->take(4)->get();
        $recentProducts = DigitalProduct::latest()->take(4)->get();
        $recentPosts = Post::with('category')->latest()->take(4)->get();

        $primaryColor = Setting::where('key', 'theme_primary_color')->value('value') ?? '#3E5CE7';
        $accentColor = Setting::where('key', 'theme_accent_color')->value('value') ?? '#fe6000';

        return view('admin.dashboard', compact(
            'projectCount',
            'productCount',
            'trainingCount',
            'galleryCount',
            'postCount',
            'categoryCount',
            'inquiryCount',
            'unreadInquiryCount',
            'recentInquiries',
            'recentProjects',
            'recentProducts',
            'recentPosts',
            'primaryColor',
            'accentColor'
        ));
    }
}
