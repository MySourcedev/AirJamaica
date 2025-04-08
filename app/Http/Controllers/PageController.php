<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;


class PageController extends Controller
{
    /**
     * Display a listing of pages.
     */
    public function index()
    {
        $pages = Page::latest()
            ->with('author')
            ->paginate(10);

        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for editing the specified page.
     */
    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified page in storage.
     */
    public function update(Request $request, Page $page)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages,slug,' . $page->id,
            'content' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'is_published' => 'boolean',
            'in_menu' => 'boolean',
            'menu_title' => 'nullable|string|max:255',
            'menu_order' => 'nullable|integer',
            'published_at' => 'nullable|date',
        ]);

        // Automatically set published_at if publishing for the first time
        if ($validated['is_published'] && !$page->published_at) {
            $validated['published_at'] = now();
        }

        $page->update($validated);

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page updated successfully');
    }

    /**
     * Remove the specified page from storage.
     */
    public function destroy(Page $page)
    {
        $page->delete();

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page moved to trash');
    }

    /**
     * Restore a soft-deleted page.
     */
    public function restore($id)
    {
        $page = Page::withTrashed()->findOrFail($id);
        $page->restore();

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page restored successfully');
    }

    /**
     * Permanently delete a page.
     */
    public function forceDelete($id)
    {
        $page = Page::withTrashed()->findOrFail($id);
        $page->forceDelete();

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page permanently deleted');
    }
}