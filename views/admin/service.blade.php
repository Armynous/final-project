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
        <h1> ADMIN - SERVICE </h1>
        <a href="{{route('admin-hotel')}}">Home</a>
        <a href="{{route('admin-room')}}">Room</a>
        <br><br>
        <a href="{{route('create-service-form')}}">Create</a>
        @if(session()->has('status'))
        <div class="status">
            <span class="info">{{ session()->get('status') }}</span>
        </div>
        @endif
        <div class="content">
            <table>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Update</td>
                    <td>Delete</td>
                </tr>
                @foreach($services as $service)
                <tr>
                    <td> {{$service['id']}} </td>
                    <td> {{$service['name']}} </td>
                    <td>
                        <a href="{{route('update-serviceform', ['id' => $service['id']])}}">Update</a>
                    </td>
                    <td>
                        <a href="{{route('delete-service', ['id' => $service['id']])}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </center>
</body>

</html>