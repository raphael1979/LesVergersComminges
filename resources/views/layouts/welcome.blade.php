<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>POM_API</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/style.css">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
    </style>
</head>
<body>
    <header>
        <div class="containerBannier">
            <div class="col-sm-12" >
               <img class="navbar-left" src="{{ asset('/images/cropped-BannierSite-2.png') }}" alt="coucou">
           </div>
       </div>
   </header>   
</div>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="bottom-right links">
        @if (Auth::check())
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ url('/login') }}">Login</a>
    </div>
    @endif
    <div class="content">
        <div class="title m-b-md">
        </div>
        @yield('content')
        
    </div>
</div>
<footer class="col-sm-12">
    <div>
        <p>2017 © Tous droits réservés.</p>
        <a href="https://www.les-vergers-retrouves-du-comminges.org/contact/">Contact</a>
        <a href="https://www.les-vergers-retrouves-du-comminges.org/mentions-legales/">Mentions légales du site</a>
        <a href="https://www.les-vergers-retrouves-du-comminges.org/plan-du-site/ ">Plan</a>
        <p>Les Vergers retrouvés du COMMINGES.</p>
    </div>
</footer>
</body>
</html>
