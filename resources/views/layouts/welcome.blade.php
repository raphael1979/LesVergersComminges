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
        @endif
    </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
        </div>
        @yield('content')
        
    </div>
</div>
{{-- <footer class="navbar-fixed-bottom">
    <div class="col-md-12">

        <div class="row">
            <div class="col-sm-4">
                <p>2017 © Tous droits réservés.</p>
            </div>
            <div class="col-sm-4">
                <a href="https://www.les-vergers-retrouves-du-comminges.org/contact/">Contact</a>
                <a href="https://www.les-vergers-retrouves-du-comminges.org/mentions-legales/">Mentions légales du site</a>
                <a href="https://www.les-vergers-retrouves-du-comminges.org/plan-du-site/ ">Plan</a>
            </div>
            <div class="col-sm-4">
                <p>Les Vergers retrouvés du COMMINGES.</p>
            </div>
        </div>
    </div>

</footer> --}}
<footer >
    <div class="container-fluid navbar-fixed-bottom" >
        <div class=""></div>
        <div class="row justify-content-start">
            <div class="col-4">2017 © Tous droits réservés.</div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4"><a href="https://www.les-vergers-retrouves-du-comminges.org/contact/">Contact</a>
                <a href="https://www.les-vergers-retrouves-du-comminges.org/mentions-legales/">Mentions légales du site</a>
                <a href="https://www.les-vergers-retrouves-du-comminges.org/plan-du-site/ ">Plan</a></div>
            </div>
            <div class="row justify-content-end">
                <div class="col-4">Les Vergers retrouvés du COMMINGES.</div>
            </div>
        </div>

    </footer>
</body>
</html>
