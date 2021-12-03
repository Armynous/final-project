<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Room</title>
</head>

<body>
    <center>
        <header>
            <h1> Update - Room </h1>
        </header>

        @error('error')
        <div class="status">
            <span class="error">{{$message}}</span>
        </div>
        @enderror
        
        <form action="{{route('update-room', ['id' => $rooms['id']])}}" method="POST">
            @csrf
            <table>
                <tr>
                    <td>Room</td>
                    <td> :: </td>
                    <td>
                        <input type="text" name="roomnumber">
                    </td>
                </tr>
            </table>
            <input type="submit" value="Submit">
        </form>
    </center>
</body>

</html>