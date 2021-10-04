<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
    <link href="{{ asset('/styles/record-style.css') }}" rel="stylesheet">
</head>
<body>
    @include('small-views/navheader') 
    <div class="inputBox">
        <img class="search" src="/images/search.svg" alt="">
        <input class="textbox" type="text" name="search" required placeholder="Search for a sale ..">
        <button type="submit"><img class="calender" src="/images/date.svg" alt=""></button>
    </div> 
    @for($i = 0; $i < count($sales); $i++)
        <div class="records">
            <div class="grid-container">
                <div class="grid-item1">{{date_parse($sales[$i]['createdAt'])['year']}}-{{date_parse($sales[$i]['createdAt'])['month']}}-{{date_parse($sales[$i]['createdAt'])['day']}}</div>
                <div class="grid-item2">{{$sales[$i]['content']}}</div>
                <div class="grid-item3"> &#8358; {{$sales[$i]['amount']}}</div>
            </div>
        </div>
    @endfor
    
    
    <div class="footer">
        <p>Copyright Sellbetter 2021</p>

    </div>

    
</body>
</html>