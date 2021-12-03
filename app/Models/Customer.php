<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'address', 'phone_number'];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
