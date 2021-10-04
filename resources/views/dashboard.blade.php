<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="{{ asset('/styles/dashboard-style.css') }}" rel="stylesheet">
</head>
<body>

    @include('small-views/navheader') 
  
    <div class="msale">
        <h6>MAKE SALES & KEEP RECORD</h6>
        <h2>Sell now</h2>
        <form name="sale-form" action="/make-sale" id="sale-form" method="post">
            @csrf
            <div class="inputBox2">
                <textarea name="content" rows="10" cols="30" placeholder="Type the items you want to sell.."></textarea>
                <label>Item Name and Description</label>
            </div> 
            <div class="inputBox">
                <input name="amount" type="number" text="" required placeholder="&#8358;">
                <label>Amount Sold for</label>
            </div> 
                <input type="submit" name="sell" value="Sell & Save">  
        </form>
    </div>
    <div class="footer">
        <p>Copyright Sellbetter 2021</p>

    </div>
    
</body>
</html>