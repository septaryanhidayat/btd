<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $projectCount = Project::count();
        $postCount = Post::count();
        $inquiryCount = Inquiry::count();
        $unreadInquiryCount = Inquiry::where('is_read', false)->count();

        $recentInquiries = Inquiry::latest()->take(5)->get();
        $recentProjects = Project::with('category')->latest()->take(4)->get();
        $recentPosts = Post::with('category')->latest()->take(4)->get();

        return view('admin.dashboard', compact(
            'projectCount',
            'postCount',
            'inquiryCount',
            'unreadInquiryCount',
            'recentInquiries',
            'recentProjects',
            'recentPosts'
        ));
    }
}
