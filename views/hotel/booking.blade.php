@extends('layouts.main')

@section('doc', 'Booking')

@section('content')
<link rel="stylesheet" href="{{asset('/css/booking.css')}}">
<div class="main">
    <form action="{{route('booking-create')}}" method="post">
        @csrf
        <h1> Booking </h1>
        <h2>
            @error('error')
            <div class="status">
                <span class="error">{{$message}}</span>
            </div>
            @enderror
        </h2>
        <table>
            <tr>
                <td> <strong>Roomtype</strong> </td>
                <td> :: </td>
                <td>
                    {{$roomtype->roomtype}}
                </td>
            </tr>
            <tr>
                <td> <strong>Arrival</strong> </td>
                <td> :: </td>
                <td>
                    <label for="arrival"></label>
                    <input type="date" name="arrival" id="arrival" placeholder="">
                </td>
            </tr>
            <tr>
                <td> <strong>Chech out</strong> </td>
                <td> :: </td>
                <td>
                    <label for="check0ut"></label>
                    <input type="date" name="checkout" id="checkout" placeholder="">
                </td>
            </tr>
            <tr>
                <td> <strong>Room number</strong> </td>
                <td> :: </td>
                <td>
                    <select name="room_id" id="">
                        @foreach($rooms as $room)
                        <option value="{{$room['id']}}"> {{$room['roomnumber']}} </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    @foreach($services as $service)
                    <input type="checkbox" name="services[]" id="{{$service['id']}}" value="{{$service['id']}}">
                    <label for="{{$service['id']}}">{{$service['name']}}</label>
                    @endforeach
                </td>
            </tr>
        </table>
        <input type="hidden" value="{{$roomtype['id']}}" name="roomtype_id">
        <input type="hidden" value="{{$roomtype['id']}}" name="user_id">
        <input type="submit" value="Submit">
    </form>
</div>

@endsection