<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;
use Psr\Http\Message\ServerRequestInterface;
use Whoops\Run;
use illuminate\Database\QueryException;

class AdminRoomContrller extends Controller
{
    public function adminHotel()
    {
        return view('admin.hotel');
    }

    public function adminRoom()
    {
        $rooms = Rooms::all();

        return view('admin.room', [
            'rooms' => $rooms
        ]);
    }

    public function createRoomform()
    {
        $rooms = Rooms::all();
        return view('admin.createroom', [
            'rooms' => $rooms
        ]);
    }

    public function createRoom(ServerRequestInterface $request)
    {
        try {
            $data = $request->getParsedBody();
            $rooms = Rooms::create($data);

            return redirect()->route('admin-room')
                ->with('status', "Room {$rooms->id} was created");
        } 
        
        catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'error' => $excp->errorInfo[2]
            ]);
        }
    }

    public function updateForm($rooms)
    {
        $rooms = Rooms::where('id', $rooms)->first();
        return view('admin.updateroom', [
            'rooms' => $rooms
        ]);
    }

    public function update(ServerRequestInterface $request, $rooms) {
        try {
        $data = $request->getParsedBody();
        $rooms = Rooms::where('id', $rooms)->first();
        $rooms->update($data);

        return redirect()->route('admin-room', ['id' => $rooms['id']])
            ->with('status', "Room {$rooms->id} was updated");
        }

        catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'error' => $excp->errorInfo[2]
            ]);
        }
    }

    public function deleteRoom($rooms) {
        $rooms = Rooms::where('id', $rooms)->first();
        $rooms->delete();

        return redirect()->route('admin-room')
            ->with('status', "Room {$rooms->id} was deleted");
    }
}
