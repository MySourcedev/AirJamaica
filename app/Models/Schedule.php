<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function aircraft(){
        return $this->belongsTo(Aircraft::class);
    }
    public function departureAirport(){
        return $this->belongsTo(Airport::class,"dpt_airport");
    }
    public function arrivalAirport(){
        return $this->belongsTo(Airport::class,"arr_airport");
    }
}
