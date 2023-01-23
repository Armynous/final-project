<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Service</title>
</head>
<body>
    <center>
        <header>
            <h1> Update - Service </h1>
        </header>

        @error('error')
        <div class="status">
            <span class="error">{{$message}}</span>
        </div>
        @enderror
        
        <form action="{{route('update-service', ['id' => $services['id']])}}" method="post">
            @csrf
            <table>
                <tr>
                    <td>Service</td>
                    <td> :: </td>
                    <td>
                        <input type="text" name="name">
                    </td>
                </tr>
            </table>
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
</html>