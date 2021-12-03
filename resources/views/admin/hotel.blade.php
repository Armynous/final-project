<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/admin.css')}}">
    <title>ADMIN</title>
</head>

<body>
    <center>
        <header>
            <h1> ADMIN </h1>
        </header>

        <div class="container">
            <div class="main">
                <div class="link-bar">
                    <a href="{{route('admin-room')}}"> Rooms </a>
                    <a href="{{route('admin-service')}}"> Services </a>
                </div>

                <div class="logo">
                    <img src="{{asset('/picture/logo.jpg')}}" alt="">
                </div>
            </div>
        </div>

        <footer>
            <p>Copyright final-project, Pongpol Prommacharoen 632110180.</p>
        </footer>
    </center>
</body>

</html>