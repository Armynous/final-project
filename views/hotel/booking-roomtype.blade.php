@extends('layouts.main')

@section('doc', 'Booking')

@section('content')
<link rel="stylesheet" href="{{asset('/css/booking-roomtype.css')}}">
<div class="main">
    <form action="{{route('booking-form')}}" method="post">
        @csrf
        @foreach($roomtype as $roomtype)
            <img src="{{asset($roomtype['picture'])}}" alt="">
            <a href="{{route('booking-form',['foyer'=>$roomtype->id])}}"> {{$roomtype['roomtype']}} </a>
        @endforeach
    </form>
</div>
@endsection