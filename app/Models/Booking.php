<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['arrival', 'checkout', 'room_id', 'roomtype_id', 'customer_id', 'user_id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function room()
    {
        return $this->hasMany(Rooms::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function roomtype()
    {
        return $this->belongsTo(Roomtype::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
