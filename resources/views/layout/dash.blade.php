<html>


<head>

@if(!(Auth::check()))
    <?php return view('404'); ?>

@endif

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style media="screen">
        body{
            background-image: url("image.jpg");
        }
        #form_style{
            background-color:black;
            opacity:0.9;
        }
    </style>
</head>

<body>
<div class="w3-bar w3-border w3-brown">
    <a class="w3-bar-item " style="font-size: 25px"><img src="logo.png" style="width: 75px;"></a>
    <a href="{{route('welcome')}}" class="w3-bar-item w3-button w3-padding-16 w3-hover-red w3-ripple"><i class="fa fa-home"></i> Home</a>
    <a href="{{ route('select') }}" class="w3-bar-item w3-button w3-padding-16 w3-hover-red w3-ripple"><i class="fa fa-paper-plane"></i> Send Orders</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hover-red w3-ripple">Link 2</a>

    <a class="w3-bar-item w3-right w3-padding-16"></a>
    <div class="w3-dropdown-hover w3-right">
        <a href="#" class="w3-bar-item w3-button w3-padding-16"><i class="fa fa-user fa-lg"></i> {{Auth::user()->fname}} {{Auth::user()->lname}}</a>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hover-brown"><i class="fa fa-user fa-lg"></i> {{Auth::user()->fname}} {{Auth::user()->lname}}</a>
            <a href="{{route('logout')}}" class="w3-bar-item w3-button w3-padding-16 w3-hover-red"><i class="fa fa-sign-out"></i> Logout</a>

        </div>
    </div>
    <a class="w3-bar-item w3-right w3-padding-16"></a>
    <a class="w3-bar-item w3-right w3-padding-16"></a>
    <a href="#" class="w3-bar-item w3-button w3-right w3-padding-16 w3-hover-red w3-ripple"><i class="fa fa-search fa-lg"></i> Go</a>
    <input type="text" class="w3-bar-item w3-input w3-right w3-padding-16 w3-pale-blue" style="color: white" placeholder="Search..">
</div>

@yield('body')


</body>

</html>