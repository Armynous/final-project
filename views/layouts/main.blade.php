<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <title>@yield('doc')</title>
</head>

<body>
    <nav class="nav-bar">
        <ul>
            <li id="name"><b> <a href="{{route('hotel-form')}}">RUAYPUNES</a> </b></li>
            @auth
            <li class="list"> <span>[ {{\Auth::user()->email}} ]</span> </li>
            <li class="list"> <a href="{{route('logout')}}">Logout</a> </li>
            <li class="list"> <a href="{{route('my-booking')}}">My Booking</a> </li>
            <li class="list"><a href="{{route('booking-roomtype-form')}}">Booking</a></li>
            @endauth
            @guest
            <li class="list"><a href="{{route('login-form')}}">Log in</a></li>
            @endguest
            <li class="list"><a href="{{route('room-list')}}">Rooms</a></li>
        </ul>
    </nav>

    <center>
        @if(session()->has('status'))
        <div class="status">
            <span class="info">{{ session()->get('status') }}</span>
        </div>
        @endif
    </center>

    <div>
        @yield('content')
    </div>



    <div class="footer">
        <p>Copyright final-project, Pongpol Prommacharoen 632110180.</p>
    </div>
</body>

</html>