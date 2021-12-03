<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Roomtype;
use App\Models\Booking;
use App\Models\Rooms;
use App\Models\Customer;
use App\Models\Service;
use Psr\Http\Message\ServerRequestInterface;
use illuminate\Database\QueryException;


use function Ramsey\Uuid\v1;

class BookingController extends Controller
{
    public function bookingRoomtype()
    {
        $roomtype = Roomtype::all();

        return view('hotel.booking-roomtype', [
            'roomtype' => $roomtype
        ]);
    }

    public function bookingForm(Request  $request)
    {
        $data = array_merge($request->getParsedBody(), $request->getQueryParams());

        $roomtype = Roomtype::where('id', $data['foyer'])->firstOrFail();
        $rooms = Rooms::all();
        $services = Service::all();

        return view('hotel.booking', [
            'roomtype' => $roomtype,
            'rooms' => $rooms,
            'services' => $services
        ]);
    }

    public function create(Request $request)
    {
        try {
            $data = $request->getParsedBody();
            $booking = Booking::create([
                'arrival' => $data['arrival'],
                'checkout' => $data['checkout'],
                'room_id' => $data['room_id'],
                'roomtype_id' => $data['roomtype_id'],
                'customer_id' => auth()->user()->id,
                'user_id' => auth()->user()->id
            ]);

            foreach ($data['services'] as $service) {
                $booking->services()->attach($service);
            }

            return redirect()->route('my-booking')
                ->with('status', "Booking {$booking->id} was created.");
        } catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'error' => $excp->errorInfo[2]
            ]);
        }
    }

    public function myBooking()
    {
        $bookings = auth()->user()->bookings;
        return view('hotel.mybooking', [
            'bookings' => $bookings,
        ]);
    }

    public function updateBookingform($booking)
    {
        $booking = Booking::where('id', $booking)->first();
        $roomtype = Roomtype::all();

        return view('hotel.update-booking-form', [
            'booking' => $booking,
            'roomtype' => $roomtype
        ]);
    }

    public function update(Request $request, $booking)
    {
        $data = $request->getParsedBody();
        $booking = Booking::where('id', $booking)->first();
        $booking->update($data);

        return redirect()->route('my-booking', ['id' => $booking['id']])
            ->with('status', "Booking {$booking->id} was updated.");
    }

    public function delete($booking)
    {
        $booking = Booking::where('id', $booking)->first();
        $booking->delete();

        return redirect()->route('my-booking')
            ->with('status', "Booking {$booking->id} was deleted");
    }
}
