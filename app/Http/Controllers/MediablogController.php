<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mediablog;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class MediablogController extends Controller
{
    public function index()
    {
        $mediaBlogs = Mediablog::all();
        return view('admin.media-blog.index', compact('mediaBlogs'));
    }
    public function viewBlog()
    {
        $mediaBlogs = Mediablog::all();
        return view('pages.blog', compact('mediaBlogs'));
    }
    public function viewBlogDetails($slug)
    {
        $mediaBlog = Mediablog::where('slug', $slug)->firstOrFail();
        $mediaBlogs = Mediablog::all();
        return view('pages.blog-details', compact('mediaBlog', 'mediaBlogs'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'html_content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('media-blog', 'public');
        }
        Mediablog::create([
            'title' => $request->title,
            'html_content' => $request->html_content,
            'image' => $imagePath,
            'slug' => Str::slug($request->title),
        ]);
        return redirect()->route('media-blog.index')->with('success', 'Media blog added successfully.');
    }
    public function edit($id)
    {
        $mediaBlog = Mediablog::findOrFail($id);
        return response()->json($mediaBlog);
    }
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'html_content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);
    
    $mediaBlog = Mediablog::findOrFail($request->blog_id);
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('media-blog', 'public');
        $mediaBlog->image = $imagePath;
    }
    $mediaBlog->update([
        'title' => $request->title,
        'html_content' => $request->html_content,
        'slug' => Str::slug($request->title),
    ]);
    return redirect()->route('media-blog.index')->with('success', 'Media blog updated successfully.');
}
}
