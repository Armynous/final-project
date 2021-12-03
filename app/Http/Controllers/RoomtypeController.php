<?php

namespace App\Http\Controllers;

use App\Models\Roomtype;
use Illuminate\Http\Request;

class RoomtypeController extends Controller
{
    public function roomlist()
    {
        $roomtypes = Roomtype::all();

        return view('hotel.roomlist', [
            'roomtypes' => $roomtypes
        ]);
    }
    
}
