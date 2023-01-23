<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Room</title>
</head>
<body>
    <center>
        <header>
            <h1> Create - Room </h1>
        </header>

        @error('error')
        <div class="status">
            <span class="error">{{$message}}</span>
        </div>
        @enderror
        
        <form action="{{route('create-room')}}" method="post">
            @csrf
            <table>
                <tr>
                    <td> Create Room </td>
                    <td> :: </td>
                    <td>
                        <input type="text" name="roomnumber">
                    </td>
                </tr>
            </table>
            <input type="submit" value="Create">
        </form>
    </center>
</body>
</html>