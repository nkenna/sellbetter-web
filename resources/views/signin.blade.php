<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SellbetterApp</title>
    <link href="{{ asset('/styles/signin-style.css') }}"  rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body style="background-image: url({{ '/images/Bglogin.png' }})">
      
        <div class="box">
            <img src="/images/logo.png" alt="">
            <h1>Welcome</h1>
            <h2>Please login to proceed.</h2>
            <hr class="rounded">
            <form name="login-form" action="/login-form" id="login-form" method="post">
                @csrf
                <div class="inputBox">
                    <input type="number" name="phone" required placeholder="0801...">
                    <label>Phone number</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="password" required placeholder="****">
                    <label>Password</label>
                </div>
                <input type="submit" name="login" value="Log In">
               
            </form>
        </div>
        <div class="login">
            <p>Don't have an account yet? <a href="/signup">Sign up here!</a> </p>
        </div>
    </div>

</body>
</html>