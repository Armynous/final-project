<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <header>
            <h1> Update - Booking </h1>
        </header>
        <form action="{{route('update-booking', ['id' => $booking['id']])}}" method="post">
            @csrf
            <table>
                <tr>
                    <th> Roomtype </th>
                    <td> :: </td>
                    <td>
                        <select name="roomtype_id" id="">
                            @foreach($roomtype as $roomtype)
                            <option value="{{$roomtype['id']}}"> {{$roomtype['roomtype']}} </option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th> Arrival </th>
                    <td> :: </td>
                    <td>
                        <input type="date" name="arrival" value="{{$booking->arrival}}">
                    </td>
                </tr>
                <tr>
                    <th> Checkout </th>
                    <td> :: </td>
                    <td>
                        <input type="date" name="checkout" value="{{$booking->checkout}}">
                    </td>
                </tr>
            </table>
            <input type="submit" value="Update">
        </form>
    </center>
</body>

</html>