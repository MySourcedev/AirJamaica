<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::where('published', true)
                   ->orderBy('published_at', 'desc')
                   ->paginate(10);
        return view("public.news.index", compact("news"));
    }

    public function create()
    {
        return view("admin.news.edit-create");
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "title" => "required|string|max:255",
            "slug" => "nullable|string|unique:news,slug",
            "subject" => "required|string|max:255",
            "content" => "required|string",
            "featured_image" => "nullable|image|max:2048",
            "published" => "nullable"
        ]);

        // Generate slug if not provided
        $validated['slug'] = Str::slug($validated['slug'] ?? $validated['title']);
        $validated['published_at'] = $validated['published'] ?? false ? now() : null;

        $news = News::create($validated);

        // Handle featured image
        if ($request->hasFile('featured_image')) {
            $news->addMediaFromRequest('featured_image')
                 ->toMediaCollection('featured_image');
        }

        return redirect()->route("admin")
               ->with("success", "News created successfully");
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)
                   ->where('published', true)
                   ->firstOrFail();
        return view("public.news.show", compact("news"));
    }

    public function edit(News $news)
    {
        return view("admin.news.edit-create", compact("news"));
    }

    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            "title" => "required|string|max:255",
            "slug" => "required|string|unique:news,slug,".$news->id,
            "subject" => "required|string|max:255",
            "content" => "required|string",
            "featured_image" => "nullable|image|max:2048",
            "published" => "nullable|boolean"
        ]);

        $validated['published_at'] = $validated['published'] ?? false 
            ? ($news->published_at ?? now()) 
            : null;

        $news->update($validated);

        // Update featured image if provided
        if ($request->hasFile('featured_image')) {
            $news->clearMediaCollection('featured_image');
            $news->addMediaFromRequest('featured_image')
                 ->toMediaCollection('featured_image');
        }

        return redirect()->route("admin")
               ->with("success", "News updated successfully");
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route("admin")
               ->with("success", "News deleted successfully");
    }

    // Trix Attachment Handling
    public function uploadTrixAttachment(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:10048'
        ]);
        
        $path = $request->file('file')->store('trix-attachments', 'public');
        
        return response()->json([
            'image_url' => Storage::url($path)
        ]);
    }

    public function deleteTrixAttachment(Request $request, $attachment)
    {
        Storage::disk('public')->delete($attachment);
        return response()->noContent();
    }
}