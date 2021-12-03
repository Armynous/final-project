<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomtype extends Model
{
    use HasFactory;

    protected $fillable = ['picture', 'roomtype', 'maxperson', 'price_per_night'];

    public function room()
    {
        return $this->belongsTo(Rooms::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
