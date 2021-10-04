<nav class="header">
        <img class="logo" src="/images/logo2.png">
        <div class="logout">
            <h2>Logged in as {{ $user['email'] }}</h2>
            <p><a href="http://127.0.0.1:5500/Sign%20in/index.html">
                <img src="/images/logout.png">
            </a></p>
        </div>
        <div class="topnav">
            <a class="active" href="/dashboard/{{ $user['id'] }}">Home</a>
            <a class="box" href="/record/{{ $user['id'] }}">Records</a>
            <a class="box" href="/setting/{{ $user['id'] }}">Settings</a>
            <a class="box" href="#">Support</a>
          </div>
          <div>
            <button class="rq-btn"> 
                <h6 class="pad1">WANT TO DO MORE WITH SELLBETTER ?</h6>
                <h2 class="pad2">Request a feature</h2> <link href="http://127.0.0.1:5501/Request%20Form/index.html">
                <img class="right" src="right-arrow.svg" alt="">
            </button>
          </div>
    </nav>