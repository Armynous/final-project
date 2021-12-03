<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function hotelForm()
    {

        return view('hotel.form');
    }
}
