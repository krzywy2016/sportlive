<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="pl-PL" lang="pl-PL" >
	<head>
			<title>Sport LIVE - skrypt relacji sportowych na żywo</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="Description" content="Aplikacja pozwala na prowadzenie tekstowych relacji z wydarzeń sportowych za darmo. Dostępna na komputery i smartfony." />
			<meta name="Keywords" content="piłka nożna, live, relacja, skrypt, php, tekstowa, mecz na żywo, wszystkie ligi, pzpn, za darmo, mecz" />
			<meta http-equiv="content-type" content="text/html; charset=utf-8" />
			<meta name="Generator" content="Aisen CMS 1.0" />
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
			<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
			<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
			<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
			<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
			<link href="{{ asset('css/style.css') }}" rel="stylesheet" />
	</head>
	<body>
			<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144372310-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-144372310-1');
		</script>
		<!-- MOBILE -->
	<div class="containter-fluid d-lg-none">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="row align-items-center">
						<div class="col-2">
							<a href="/"><img src="{{asset('images/live.png')}}" height="50px" /></a>
						</div>
						<div class="col-8">
							<a href="/"><span style="font-family: 'Montserrat', sans-serif; font-size: 16px; color: #5a5543">sportscore.eu</span></a><br />
							<span style="font-family: 'Montserrat', sans-serif; font-size: 8px; color: #ff3051"> CMS do prowadzenia relacji live</span>
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
        <a class="nav-link" href="/"><i class="fas fa-home"></i> Strona główna</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/addrelation"><i class="fas fa-plus-square"></i> Dodaj relację</a>
      </li>
      <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>-->
	  <li class="nav-item">
        <a class="nav-link" href="/relation/1/show"><i class="fas fa-laptop-code"></i> Demo</a>
    </li>
	<li class="nav-item">
        <a class="nav-link" href="/regulations"><i class="far fa-address-card"></i> Regulamin</a>
    </li>
	<li class="nav-item">
        <a class="nav-link" href="/aboutus"><i class="fas fa-users"></i> O nas</a>
    </li>
	@if(isset(Auth::user()->name))
	<li class="nav-item">
        <a class="nav-link" href="/dashboard"><i class="fas fa-sign-in-alt"></i> Panel admina</a>
    </li>
	<li class="nav-item">
        <a class="nav-link" href="/logout"><i class="fas fa-sign-out-alt"></i> Wyloguj</a>
    </li>
	@else
	<li class="nav-item">
        <a class="nav-link" href="/login"><i class="fas fa-sign-in-alt"></i> Logowanie</a>
    </li>
	<li class="nav-item">
        <a class="nav-link" href="/register"><i class="fas fa-registered"></i> Rejestracja</a>
    </li>
	@endif
    </ul>	  
  </div>
</nav>
	</div>
	<!-- ---------- -->
			 <div class="container d-none d-lg-block">
					<div class="row">
						<div class="col-lg-1 nopadding">
							<a href="/"><img src="{{asset('images/live.png')}}" height="90px" /></a>
						</div>
						<div class="col-lg-3 napis">
							<a href="/"><span style="font-family: 'Montserrat', sans-serif; font-size: 24px; color: #5a5543">sportscore.eu</span></a><br />
							<span style="font-family: 'Montserrat', sans-serif; font-size: 10px; color: #ff3051"> CMS do prowadzenia relacji live</span>
						</div>
						<div class="col-lg-5 napis topmenutext2 no-gutters" style="padding-top: 2.7%">
							<div class="topmenubox"><a href="/" >Strona główna</a></div>
							<div class="topmenubox"><a href="/addrelation" >Dodaj relację</a></div>
							<div class="topmenubox"><a href="/relation/1/show" >Demo</a></div>
							<div class="topmenubox"><a href="/regulations" >Regulamin</a></div>
							<div class="topmenubox"><a href="/aboutus" >O nas</a></div>
						</div>
						<div class="col-lg-3 napis topmenutext2 no-gutters" style="padding-top: 2.7%; padding-left: 6%">
							@if(isset(Auth::user()->name))
							<div class="topmenubox"><a href="/dashboard" >[ Panel admina</a></div>
							<div class="topmenubox"> | </div>
							<div class="topmenubox"><a href="/logout" >Wyloguj ]</a></div>
							@else
							<div class="topmenubox"><a href="/login" >[ Logowanie</a></div>
							<div class="topmenubox"> | </div>
							<div class="topmenubox"><a href="/register" >Rejestracja ]</a></div>
							@endif
						</div>
					</div>
			</div>
			<div class="containter nopadding">
			<br />
				@yield('content')
			</div>
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