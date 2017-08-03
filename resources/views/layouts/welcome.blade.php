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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>
<body>
    <header class="navbar-fixed-top">
        <div class="container">
            <div class="col-md-12 col-xs-12">
                <img src="{{ asset('/images/cropped-BannierSite-2.png') }}" alt="coucou">
            </div>
        </div>
    </header>
    <div class="login">
        @if (Route::has('login'))
        <div class="">
            @if (Auth::check())
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ url('/login') }}">Login</a>
            <button type="button" class="btn btn-info">Info</button>
            @endif
        </div>
        @endif
    </div>
    
    @yield('content')

    <footer class="navbar-fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-4">2017 © Tous droits réservés.</div>
                <div class="col-md-4 col-xs-4"> 
                    <a href="https://www.les-vergers-retrouves-du-comminges.org/contact/">Contact</a>|
                    <a href="https://www.les-vergers-retrouves-du-comminges.org/mentions-legales/">Mentions légales</a>|
                    <a href="https://www.les-vergers-retrouves-du-comminges.org/plan-du-site/ ">Plan du site</a>
                </div>
                <div class="col-md-4 col-xs-4">Les Vergers retrouvés du COMMINGES.</div>
            </div>
        </div>
    </footer>
    {{-- essai srcolltop --}}
{{-- <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>

<button class="btn_up">
    <span  class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
</button> --}}
</body>
</html>


