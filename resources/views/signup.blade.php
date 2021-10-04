<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SellbetterApp</title>
    <link href="{{ asset('/styles/signup-style.css') }}"  rel="stylesheet">
</head>
<body style="background-image: url({{ '/images/Bglogin.png' }})">
      
        <div class="box">
        <img src="/images/logo.png" alt="">
            <h1>Sign Up</h1>
            <h2>Please enter your details to get started.</h2>
            <hr class="rounded">
            <form name="signup-form" action="/signup-form" id="signup-form" method="post">
                @csrf
                <div class="inputBox">
                    <input type="text" name="name" required placeholder="Your name..">
                    <label>Fullname</label>
                </div> 
                <div class="inputBox">
                    <input type="tel" name="phone" required placeholder="0801...">
                    <label>Phone number</label>
                </div>
                <div class="inputBox">
                    <input type="email" name="email" optional placeholder="johndoe@sellbetter.app">
                    <label>Email Address</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="password" required placeholder="****">
                    <label>Password</label>
                </div>
                    <input type="submit" name="" value="Submit">  
            </form>
        </div>
        <div class="login">
            <p>Already have an account? <a href="/signin">Log In here!</a> </p>
        </div>
    </div>

</body>
</html>