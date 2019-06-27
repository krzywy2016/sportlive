<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Sport LIVE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Description" content="" />
	<meta name="Keywords" content="" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="Generator" content="Aisen CMS 1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'Laravel') }}</title>-->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
			<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('auth.login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
	<!-- footer -->
			<div class="container-fluid footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 nopadding">
								<img src="{{asset('images/live.png')}}" height="50px" /> sportscore.eu
						</div>
						<div class="col-lg-3 nopadding">
							<div class="col-lg-12 nopadding">
								Serwis
							</div>
							<div class="col-lg-12 nopadding">
								FAQ
							</div>
							<div class="col-lg-12 nopadding">
								Prywatność
							</div>
							<div class="col-lg-12 nopadding">
								Logotypy
							</div>
						</div>
						<div class="col-lg-3 nopadding">
							<div class="col-lg-12 nopadding">
								O nas
							</div>
							<div class="col-lg-12 nopadding">
								Kontakt
							</div>
							<div class="col-lg-12 nopadding">
								Partnerzy
							</div>
							<div class="col-lg-12 nopadding">
								Logotypy
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid topmenu">
				<div class="container nopadding">
					<div class="col-lg-12 topmenutext">
						<div class="topmenubox"><a href="#" >Strona główna</a></div>
						<div class="topmenubox"><a href="#" >Dodaj relację</a></div>
						<div class="topmenubox"><a href="#" >Regulamin</a></div>
						<div class="topmenubox"><a href="#" >O nas</a></div>
					</div>
				</div>
			</div>
			<div class="container-fluid nopadding autorfooter">
					<div class="container nopadding">
						<div class="col-lg-2 nopadding">
								&copy; 2019 SportScore.eu
						</div>
						<div class="col-lg-3">
								Generated by SportLive 1.0
						</div>
					</div>
			</div>
</body>
</html>
