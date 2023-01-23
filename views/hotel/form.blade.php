@extends('layouts.main')

@section('doc', 'Hotel')

@section('content')
<link rel="stylesheet" href="{{asset('/css/style.css')}}">
<div class="container">
    <div class="box-01">
        <div class="img">
            <img src="{{asset('/picture/colombo_2.jpg')}}" alt="">
        </div>
        <div class="hotel-information">
            <p>
                Welcome to the Ruaypunes Hotel, the most private and smallest Parisian hotels ! This haven of greenery that used to belong to the Hermes family and became a Private House allows you to discover the largest hotel garden in the capital, part of the last vestiges of the Maquis de Montmartre.
                Over time this family house that was once called “une Folie” has established itself as a reference in Paris.
                Whether for a drink, for a dinner or for a night, the Hôtel Particulier awaits you in Montmartre in what many people rightly call “a countryside in the heart of Paris”.
            </p>
        </div>
    </div>
</div>

@endsection