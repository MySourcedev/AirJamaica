<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Auth;

class GalleryCommentController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            "comment"=> "required|text",
        ]);
        $validated['user_id'] = Auth::id();

        Gallery::create($validated);
        return back()->with('success','You have successfully commented');
    }
    public function destroy(Gallery $gallery){
        $gallery->delete();
        return back()->with('success','You have successfully deleted the comment');
    }
}
