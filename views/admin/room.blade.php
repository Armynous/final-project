<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/admin.css')}}">
    <title>ADMIN Rooms</title>
</head>

<body>
    <center>
        <h1> ADMIN - ROOMS </h1>
        <a href="{{route('admin-hotel')}}">Home</a>
        <a href="{{route('admin-service')}}">Service</a>
        <br><br>
        <a href="{{route('admin-create-room')}}">Create</a>
        @if(session()->has('status'))
        <div class="status">
            <span class="info">{{ session()->get('status') }}</span>
        </div>
        @endif
        <div class="content">
            <table>
                <tr>
                    <td> ID </td>
                    <td>Room Number</td>
                    <td>Update</td>
                    <td>Delete</td>
                </tr>
                @foreach($rooms as $room)
                <tr>
                    <td> {{$room['id']}} </td>
                    <td> {{$room['roomnumber']}} </td>
                    <td>
                        <a href="{{route('update-room-form', ['id' => $room->id])}}"> Update </a>
                    </td>
                    <td>
                        <a href="{{route('delete-room',['id' => $room->id])}}"> Delete </a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </center>
</body>

</html>