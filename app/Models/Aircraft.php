<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    protected $fillable = [];

    protected $table = "aircrafts";

    public function schedule(){
        return $this->belongsTo(Schedule::class);
    }
}
