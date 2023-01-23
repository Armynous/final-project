<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Service</title>
</head>

<body>
    <center>
        <header>
            <h1> Create - Service </h1>
        </header>

        @error('error')
        <div class="status">
            <span class="error">{{$message}}</span>
        </div>
        @enderror

        <div class="content">
            <form action="{{route('create-service')}}" method="post">
                @csrf
                <table>
                    <tr>
                        <td>Create service</td>
                        <td> :: </td>
                        <td>
                            <input type="text" name="name">
                        </td>
                    </tr>
                </table>
                <input type="submit" value="Submit">
            </form>
        </div>
    </center>
</body>

</html>