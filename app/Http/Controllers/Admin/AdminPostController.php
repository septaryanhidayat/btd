<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminPostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['category', 'author'])->latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::where('type', 'post')->get();
        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'thumbnail' => 'nullable|string|max:255',
            'excerpt' => 'nullable|string',
            'body' => 'required|string',
            'status' => 'required|in:draft,published',
        ]);

        $slug = Str::slug($validated['title']);
        $originalSlug = $slug;
        $count = 1;
        while (Post::where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-" . $count++;
        }

        Post::create([
            'category_id' => $validated['category_id'],
            'user_id' => Auth::id(),
            'title' => $validated['title'],
            'slug' => $slug,
            'thumbnail' => $validated['thumbnail'] ?? 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?auto=format&fit=crop&w=800&q=80',
            'excerpt' => $validated['excerpt'],
            'body' => $validated['body'],
            'status' => $validated['status'],
            'published_at' => $validated['status'] === 'published' ? now() : null,
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Artikel berhasil dibuat.');
    }

    public function edit(Post $post)
    {
        $categories = Category::where('type', 'post')->get();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'thumbnail' => 'nullable|string|max:255',
            'excerpt' => 'nullable|string',
            'body' => 'required|string',
            'status' => 'required|in:draft,published',
        ]);

        $publishedAt = $post->published_at;
        if ($validated['status'] === 'published' && !$publishedAt) {
            $publishedAt = now();
        }

        $post->update([
            'category_id' => $validated['category_id'],
            'title' => $validated['title'],
            'thumbnail' => $validated['thumbnail'] ?? $post->thumbnail,
            'excerpt' => $validated['excerpt'],
            'body' => $validated['body'],
            'status' => $validated['status'],
            'published_at' => $publishedAt,
        ]);

        return redirect()->route('admin.posts.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
