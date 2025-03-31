<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryComment extends Model
{
    /** @use HasFactory<\Database\Factories\GalleryCommentFactory> */
    use HasFactory;

    protected $fillable = [
        "gallery_id",
        "comment"
    ];
    public function gallery(){
        return $this->belongsTo(Gallery::class);
    }
}
