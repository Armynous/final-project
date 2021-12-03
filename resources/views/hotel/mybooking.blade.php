@extends('layouts.main')

@section('doc', 'My Booking')

@section('content')
<link rel="stylesheet" href="{{asset('/css/my-booking.css')}}">
<form action="" method="get">
    <div class="container">
        <div class="main">
            <table>
                @csrf
                <tr>
                    <th> id </th>
                    <th> Arrival </th>
                    <th> Checkout </th>
                    <th> Roomtype </th>
                    <th> Service </th>
                    <th> Update </th>
                    <th> Delete </th>
                </tr>
                @foreach($bookings as $booking)
                <tr>
                    <td> {{$booking['id']}} </td>
                    <td> {{$booking['arrival']}} </td>
                    <td> {{$booking['checkout']}} </td>
                    <td> {{$booking->roomtype->roomtype}} </td>
                    <td>
                        @foreach($booking->services as $service)
                        {{$service['name']}},
                        @endforeach
                    </td>
                    <td> <a href="{{route('update-booking-form', ['id' => $booking->id])}}">Update</a> </td>
                    <td> <a href="{{route('delete-booking', ['id' => $booking->id])}}">Delele</a> </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</form>
@endsection