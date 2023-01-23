<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/login.css')}}">
    <title> @section('doc', 'Log In') </title>
</head>

<body>
    <div class="container">
        <img id="img" src="{{asset('/picture/logo.jpg')}}" alt="">
        <div class="login-form">
            @error('credentials')
            <div class="warn">{{ $message }}</div>
            @enderror
            <div class="login-title">
                <h1> Sign In </h1>
            </div>
            <form action="{{route('authenticate')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email"></label>
                    <input type="text" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password"></label>
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <input type="submit" value="GO">
                <label for="register"></label>
                <a href="#" name="register" id="register">Register</a>
                <label for="login"></label>
                <a href="{{route('github-login')}}" name="login" id="login">Longin with github</a>
            </form>
        </div>
    </div>
</body>

</html>