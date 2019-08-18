<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="pl-PL" lang="pl-PL" >
	<head>
			<title>Sport LIVE</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="Description" content="" />
			<meta name="Keywords" content="" />
			<meta http-equiv="content-type" content="text/html; charset=utf-8" />
			<meta name="Generator" content="Aisen CMS 1.0" />
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
			<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
			<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
			<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
			<link href="{{ asset('css/admin.css') }}" rel="stylesheet" />
			<link href="{{ asset('css/style.css') }}" rel="stylesheet" />
	</head>
	<body>
		<!-- ///////////////////////     MOBILE     /////////////////////////////////////////  -->
	<div class="containter-fluid d-lg-none">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="row align-items-center">
						<div class="col-2">
							<a href="/"><img src="{{asset('images/live.png')}}" height="50px" /></a>
						</div>
						<div class="col-8">
							<a href="/"><span style="font-family: 'Montserrat', sans-serif; font-size: 16px; color: #5a5543">sportscore.eu</span></a><br />
							<span style="font-family: 'Montserrat', sans-serif; font-size: 10px; color: #ff3051"> Admin Panel</span><span style="font-family: 'Montserrat', sans-serif; font-size: 11px; color: #370092"> ver. beta 0.1.0</span>
						</div>
						<div class="col-2">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
							</button>
						</div>
					</div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard"><img src="{{ asset('images/homepage.png') }}" height="20px"> Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/addrelation"><img src="{{ asset('images/add.png') }}" height="20px"> Utwórz nową relację</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="/myrelation"><img src="{{ asset('images/relation.png') }}" height="20px"> Moje relacje LIVE</a>
    </li>
	<li class="nav-item">
        <a class="nav-link" href="/archiverelation"><img src="{{ asset('images/archive.png') }}" height="20px"> Archiwalne relacje</a>
    </li>
	@can('admin-only', Auth::user())<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Panel administratora
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="nav-link" href="{{ route('users.show')}}"><img src="{{ asset('images/team.png') }}" height="20px"> Użytkownicy</a>
		  <a class="nav-link" href="{{ route('team.show')}}"><img src="{{ asset('images/teamwork.png') }}" height="20px"> Zespoły</a>
        </div>
      </li>@endcan
	<li class="nav-item">
        <a class="nav-link" href="/tutorial"><img src="{{ asset('images/manual.png') }}" height="20px"> Samouczek</a>
    </li>
	<li class="nav-item">
        <a class="nav-link" href="/logout"><img src="{{ asset('images/logout.png') }}" height="20px"> Wyloguj</a>
    </li>
    </ul>	  
  </div>
</nav>
	</div>
		<!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->
		<!-- //////////////////////    DESKTOP  ////////////////////////////////////////////////////   -->
			<div class="container-fluid d-none d-lg-block">
				<div class="row">
					<div class="col-md-2 toplewy">
						<div class="row">
							<div class="col-lg-2 nopadding">
								<a href="/"><img src="{{asset('images/live.png')}}" height="45px" /></a>
							</div>
							<div class="col-lg-10 napisadmin">
								<a href="/"><span style="font-family: 'Montserrat', sans-serif; font-size: 12px; color: white">sportscore.eu</span></a><br />
								<span style="font-family: 'Montserrat', sans-serif; font-size: 10px; color: #ff3051"> Admin Panel</span><span style="font-family: 'Montserrat', sans-serif; font-size: 11px; color: #f2f926"> ver. beta 0.1.0</span>
							</div>
						</div>
					</div>
					<div class="col-md-10 topprawy">
						<div class="row">
							<div class="col-lg-3"></div>
								<div class="col-lg-4"></div>
								<div class="col-lg-5">
									Zalogowany: 
									<img src="{{ asset('images/user.png') }}" class="image-circle"/> @if(isset(Auth::user()->name)) {{Auth::user()->name}} @endif
								</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2 lewemenu d-none d-lg-block">
						<div class="row">
							<div class="col-md-12 menudiv">
								<a href="{{ asset('/dashboard') }}">
									<img src="{{ asset('images/homepage.png') }}" height="20px">
									Dashboard </a>
							</div>
							<div class="col-md-12 menudiv"> 
								<a href="{{ asset('/addrelation') }}">
									<img src="{{ asset('images/add.png') }}" height="20px">
									Utwórz nową relację </a>
							</div>
							<div class="col-md-12 menudiv">
								<a href="{{ asset('/myrelation') }}">
									<img src="{{ asset('images/relation.png') }}" height="20px">
									Moje relacje LIVE </a>
							</div>
							<div class="col-md-12 menudiv">
								<a href="{{ asset('/archiverelation') }}">
									<img src="{{ asset('images/archive.png') }}" height="20px">
									Archiwalne relacje </a>
							</div>
							@can('admin-only', Auth::user())<div class="col-md-12 menudiv">
									<a href="{{ route('users.show')}}">
									<img src="{{ asset('images/team.png') }}" height="20px">
									<span style="color: #e9fa77;">Użytkownicy</span> </a>
								</div>@endcan
							@can('admin-only', Auth::user())<div class="col-md-12 menudiv">
									<a href="{{ route('team.show')}}">
									<img src="{{ asset('images/teamwork.png') }}" height="20px">
									<span style="color: #e9fa77;">Zespoły</span></a>
								</div>@endcan
							<div class="col-md-12 menudiv">
								<a href="#">
									<img src="{{ asset('images/manual.png') }}" height="20px">
									Samouczek </a>
							</div>
							<div class="col-md-12 menudiv">
								<a href="{{asset('logout') }}">
									<img src="{{ asset('images/logout.png') }}" height="20px">
									Wyloguj </a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-10 content">
						<div class="row">
							<div class="col-12 col-md-12 align-self-center">
								<div class="alert alert-warning" role="alert">
									Witaj <b>@if(isset(Auth::user()->name)) {{Auth::user()->name}}! @endif</b> Aktualnie korzystasz z oprogramowania w wersji <b>beta</b>. Dzięki Tobie weryfikujemy działanie programu. Jeśli masz jakieś pomysły lub zastrzeżenia - <a href="https://www.facebook.com/sportscoreeu">napisz tutaj</a>.
								</div>
							</div>
						</div>
						<div class="row">
								<div class="col-md-12">
									<br />
									@yield('content')
								</div>
						</div>
					</div>
				</div>
			</div>
			 <!-- ------------------------------------------------------------------------------------------------------------------------- -->
	
			<!-- footer -->
			<div class="container-fluid footer">
				<div class="container footerin">
					<div class="row">
						<div class="col-lg-3">
								<img src="{{asset('images/live.png')}}" height="90px" /> <span style="font-family: 'Montserrat', sans-serif; font-size: 22px; color: #5a5543">sportscore.eu</span>
						</div>
						<div class="col-lg-2 d-none d-md-block nopadding">
							<div class="col-lg-12 titlefooter nopadding">
								Serwis
							</div>
							<div class="col-lg-12 menufooter nopadding">
								<a href="/tutorial">Samouczek</a>
							</div>
							<div class="col-lg-12 menufooter nopadding">
								FAQ
							</div>
							<div class="col-lg-12 menufooter nopadding">
								<a href="/privacypolicy">Polityka prywatności</a>
							</div>
							<div class="col-lg-12 menufooter nopadding">
								Logotypy
							</div>
						</div>
						<div class="col-lg-2 d-none d-md-block nopadding">
							<div class="col-lg-12 titlefooter nopadding">
								O nas
							</div>
							<div class="col-lg-12 menufooter nopadding">
								<a href="/aboutus">O nas</a>
							</div>
							<div class="col-lg-12 menufooter nopadding">
								Misja
							</div>
							<div class="col-lg-12 menufooter nopadding">
								Kluby partnerskie
							</div>
						</div>
						<div class="col-lg-2 d-none d-md-block nopadding">
							<div class="col-lg-12 titlefooter nopadding">
								Oferta
							</div>
							<div class="col-lg-12 menufooter nopadding">
								Reklama w serwisie
							</div>
						</div>
						<!-- WERSJA MOBILE -->
						<div class="col-6 d-md-none">
							<div class="col-lg-12 titlefooter nopadding">
								Serwis
							</div>
							<div class="col-lg-12 menufooter nopadding">
								Samouczek
							</div>
							<div class="col-lg-12 menufooter nopadding">
								FAQ
							</div>
							<div class="col-lg-12 menufooter nopadding">
								<a href="/privacypolicy">Polityka prywatności</a>
							</div>
							<div class="col-lg-12 menufooter nopadding">
								Logotypy
							</div>
						</div>
						<div class="col-6 d-md-none">
							<div class="col-lg-12 titlefooter nopadding">
								O nas
							</div>
							<div class="col-lg-12 menufooter nopadding">
								<a href="/aboutus">O nas</a>
							</div>
							<div class="col-lg-12 menufooter nopadding">
								Misja
							</div>
							<div class="col-lg-12 menufooter nopadding">
								Kluby partnerskie
							</div>
						</div>
						<div class="col-6 d-md-none">
							<div class="col-lg-12 titlefooter nopadding">
								Oferta
							</div>
							<div class="col-lg-12 menufooter nopadding">
								Reklama w serwisie
							</div>
						</div>
						<!-- -------------- -->
					</div>
				</div>
			</div>
			<div class="container-fluid topmenu d-none d-lg-block">
				<div class="container">
				<div class="row">
					<div class="col-lg-12 topmenutext">
						<div class="topmenubox"><a href="/" >Strona główna</a></div>
						<div class="topmenubox"><a href="/addrelation" >Dodaj relację</a></div>
						<div class="topmenubox"><a href="/relation/1/show" >Demo</a></div>
						<div class="topmenubox"><a href="/regulations" >Regulamin</a></div>
						<div class="topmenubox"><a href="/aboutus" >O nas</a></div>
					</div>
				</div>
				</div>
			</div>
			<div class="container-fluid autorfooter">
					<!-- WERSJA DESKTOP -->
					<div class="container d-none d-md-block nopadding">
					<div class="row">
						<div class="col-lg-12">
								&copy; 2019 SportScore.eu
						</div>
					</div>
					</div>
					<!-- ---------- -->
					<!-- WERSJA MOBILE -->
					<div class="container d-md-none">
					<div class="row">
						<div class="col-12" style="padding-top: 2%; padding-bottom: 2%;">
								&copy; 2019 SportScore.eu
						</div>
					</div>
					</div>
					<!-- --------- -->
			</div>
			<!-- WERSJA MOBILE -->
			<div class="container-fluid d-md-none">
					<div class="container nopadding">
						<div class="row">
						<div class="col-lg-12">
								<span style="font-size: 11px">TA STRONA UŻYWA COOKIE.<br />
								<a href="/privacypolicy">Dowiedz się więcej</a> o celu ich używania i zmianie ustawień cookie w przeglądarce. Korzystając ze strony wyrażasz zgodę na używanie cookie, zgodnie z aktualnymi ustawieniami przeglądarki.</span> 
						</div>
						</div>
					</div>
			</div>
			<!-- ---------- -->
			<!-- WERSJA DESKTOP -->
			<div class="container-fluid d-none d-md-block">
					<div class="container nopadding">
						<div class="row">
						<div class="col-lg-12">
								<span style="font-size: 14px">TA STRONA UŻYWA COOKIE.<br />
								<a href="/privacypolicy">Dowiedz się więcej</a> o celu ich używania i zmianie ustawień cookie w przeglądarce. Korzystając ze strony wyrażasz zgodę na używanie cookie, zgodnie z aktualnymi ustawieniami przeglądarki.</span> 
						</div>
						</div>
					</div>
			</div>
			<!-- ---------- -->
	</body>
</html>