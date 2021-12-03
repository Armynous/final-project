<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'updated_at', 'created_at'];

    public function bookings()
    {
        return $this->belongsToMany(Booking::class);
    }
}
