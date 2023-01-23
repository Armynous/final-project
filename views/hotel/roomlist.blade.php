@extends('layouts.main')

@section('doc', 'Rooms List')

@section('content')
<link rel="stylesheet" href="{{asset('/css/room.css')}}">
<div class="container">
    <div class="main">
        @foreach($roomtypes as $roomtype)
        <table>
            <tr>
                <img src="{{asset($roomtype['picture'])}}" alt="">
            </tr>
            <tr>
                <th>Max perosn</th>
                <td> :: </td>
                <td> {{$roomtype['maxperson']}} </td>
            </tr>
            <tr>
                <th>Priceper night</th>
                <td> :: </td>
                <td> {{$roomtype['price_per_night']}} </td>
            </tr>
            <tr>
                <th>Description</th>
                <td> :: </td>
                <td> {{$roomtype['description']}} </td>
            </tr>
        </table>
        @endforeach
    </div>
</div>
@endsection