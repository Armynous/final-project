<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;

    protected $fillable = ['roomnumber'];


    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function roomtype()
    {
        return $this->hasOne(Roomtype::class);
    }
}
