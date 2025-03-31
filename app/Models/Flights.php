<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{
    public function aircraft(){
        return $this->hasOne(Aircraft::class);
    }
    public function airline(){
        return $this->belongsTo(Airline::class);
    }
    public function departureAirport(){
        return $this->hasOne(Airport::class, 'arr_airport');
    }
    public function arrivalAirport(){
        return $this->hasOne(Airport::class,'arr_airport');
    }
}
