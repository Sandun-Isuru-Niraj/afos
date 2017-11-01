<html>

<head>

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<div class="w3-bar w3-border w3-blue">
    <a class="w3-bar-item " style="font-size: 25px"><b>FIT Moment</b></a>
    <a href="/" class="w3-bar-item w3-button w3-padding-16 w3-hover-red w3-ripple">Home</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hover-red w3-ripple">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hover-red w3-ripple">Link 2</a>

    <a class="w3-bar-item w3-right w3-padding-16"></a>
    <a href="{{route('login')}}" class="w3-bar-item w3-button w3-right w3-padding-16 w3-hover-red w3-ripple"><i class="fa fa-sign-in fa-lg"></i>  Login</a>
    <a href="{{route('getregister')}}" class="w3-bar-item w3-button w3-right w3-padding-16 w3-hover-red w3-ripple"><i class="fa fa-user-plus fa-lg"></i>  Sign Up</a>
    <a class="w3-bar-item w3-right w3-padding-16"></a>
    <a href="#" class="w3-bar-item w3-button w3-right w3-padding-16 w3-hover-red w3-ripple"><i class="fa fa-search fa-lg"></i> Go</a>
    <input type="text" class="w3-bar-item w3-input w3-right w3-padding-16 w3-pale-blue" style="color: white" placeholder="Search..">
  </div>

<div class="w3-container">
    <div class="w3-row">
        <div class="w3-quarter w3-container">
            @yield('sidebar')
        </div>
        <div class="w3-threequarter w3-container">
            @yield('content')
    </div>
</div>
</div>


</body>

</html>