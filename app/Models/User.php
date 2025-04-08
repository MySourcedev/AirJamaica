<?php

namespace App\Models;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'f_name',
        'l_name',
        'password',
        'VATSIM_ID',
        'hub',
        'airline',
        'location',
        'email',
        'Background',
        'Avatar'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function flights() {
        return $this->hasMany(Flights::class);
    }
    public function mail(){
        return $this->hasMany(Mail::class);
    }
    public function pirep(){
        return $this->hasMany(Pirep::class);
    }
    public function airline(){
        return $this->belongsTo(Airline::class);
    }
    public function hub_transfer(){
        return $this->hasMany(HubTransfer::class);
    }
    public function leave_of_absence(){
        return $this->hasMany(LeaveOfAbsence::class);
    }
    public function airport(){
        return $this->hasOne(Airport::class);
    }
    public function awards(){
        return $this->hasMany(Awards::class);
    }

    
}
