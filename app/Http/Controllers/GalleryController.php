<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    public function index() {
        $galleries = Gallery::paginate(10);
        return view("public.screenshot.index",["screenshots" => $galleries]);
    }
    public function show(Gallery $gallery) {
        $gallery->increment("views");
        return view("public.screenshot.show",["screenshot"=> $gallery]);
    }
    public function create() {
        return view("public.screenshot.edit-create");
    }
    public function store(Request $request) {
        $validated = $request->validate([
            "image" => "required|file|mimes:png,webp,jpg,jpeg,gif",
            "description" => "required",
        ]);
        $validated['user_id'] = Auth::id();
        if($request->hasFile('image')){
            $store = $request->file('image');
            $filename = time(). '_gallery' . $store->getClientOriginalName();

            $path = $store->storeAs('images/gallery', $filename, 'public');
            $validated['image_url'] = $path;
        }
        Gallery::create($validated);
        return redirect()->route("public.screenshot.index")->with("success","You have successfully created a screenshot");
    }

    public function edit(Gallery $gallery) {
        return view("public.screenshot.edit-create",['screenshot' => $gallery]);
    }
    public function update(Request $request, Gallery $gallery) {
        $validated = $request->validate([
            "description"=> "required",
        ]);
        $gallery->update($validated);
        return redirect()->route("public.screenshot.index")->with("success","You have successfully updated the screenshot's description");
    }
    public function destroy(Gallery $gallery){
        $gallery->delete();
        return redirect()->route("public.screenshot.index")->with("success","You have successfully deleted the screenshot");
    }
}
