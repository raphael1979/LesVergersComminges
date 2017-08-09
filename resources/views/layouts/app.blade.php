<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
    <header class="navbar">
        <div class="container">
            <div class="col-md-12 col-xs-12">
                <img src="{{ asset('/images/cropped-BannierSite-2.png') }}"  class="img-responsive" alt="coucou">
            </div>
        </div>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <section class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                            <a href="{{ route('login') }}" style="color:green">Login</a>
                            {{-- <li><a href="{{ route('register') }}">Register</a></li> --}}
                            @else
                            <section>
                                <a style="color:green" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </section>
                            @endif
                        </section>
                    </div>
                </div>
            </nav>
        </div>
    </header>

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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')
</body>
</html>
