<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pirep extends Model
{
    /** @use HasFactory<\Database\Factories\PirepFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'comment',
        'flight_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function flight(){
        return $this->hasOne(Flights::class);
    }
}
