<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings2</title>
    <link href="{{ asset('/styles/setting-style.css') }}" rel="stylesheet">
</head>
<body>
    @include('small-views/navheader') 
    <div class="details">
        <h3>Account Details</h3>
        <h6>Change name, email, phone number etc.</h6>
    </div>
    <div class="details-active">
        <h3>Password Details</h3>
        <h6>Change passwords and control</h6>
    </div>
    <div class="ad-form">
        <form>
            <div class="inputBox">
                    <input type="password" name="">
                    <label>Old Password</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="">
                    <label>New Password</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="">
                    <label>Re-enter Password</label>
                </div>
                <input type="submit" name="" value="Save">

            </div>

        </form>

    </div>
    
    <div class="footer">
        <p>Copyright Sellbetter 2021</p>

    </div>

    
</body>
</html>