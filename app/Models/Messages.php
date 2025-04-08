<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    /** @use HasFactory<\Database\Factories\MessagesFactory> */
    use HasFactory;

    protected $fillable = [
        "to","from","subject","message"
    ];


    public function sender()
{
    return $this->belongsTo(User::class, 'from');
}

public function recipient()
{
    return $this->belongsTo(User::class, 'to');
}
}
