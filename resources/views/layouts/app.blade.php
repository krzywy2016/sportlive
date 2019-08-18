<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
            <title>Sport LIVE</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="Description" content="" />
			<meta name="Keywords" content="" />
			<meta http-equiv="content-type" content="text/html; charset=utf-8" />
			<meta name="Generator" content="Aisen CMS 1.0" />
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
			<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
			<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
			<link href="{{ asset('css/style.css') }}" rel="stylesheet" />
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- CSRF Token -->
			<meta name="csrf-token" content="{{ csrf_token() }}">
	</head>
<body>
    <!-- top menu -->
			<div class="container-fluid topmenu">
				<div class="container nopadding">
					<div class="col-lg-10 topmenutext">
						<div class="topmenubox"><a href="{{asset('/')}}" >Strona główna</a></div>
						<div class="topmenubox"><a href="/addrelation" >Dodaj relację</a></div>
						<div class="topmenubox"><a href="/regulations" >Regulamin</a></div>
						<div class="topmenubox"><a href="/aboutus" >O nas</a></div>
					</div>
					<div class="col-lg-2 topmenutext">
						<div class="topmenubox"><a href="/login" >Logowanie</a> |</div>
						<div class="topmenubox"><a href="/registration" >Rejestracja</a></div>
					</div>
				</div>
			</div>
			<div class="container-fluid ">
				<div class="container footerin nopadding">
					<div class="col-lg-12 nopadding">
						<div class="col-lg-1 nopadding">
							<a href="/"><img src="{{asset('images/live.png')}}" height="90px" /></a>
						</div>
						<div class="col-lg-3 napis">
							<a href="/"><span style="font-family: 'Montserrat', sans-serif; font-size: 24px; color: #5a5543">sportscore.eu</span></a><br />
							<span style="font-family: 'Montserrat', sans-serif; font-size: 10px; color: #ff3051"> CMS do prowadzenia relacji live</span>
						</div>
					</div>
				</div>
			</div>
	
	
	<div class="container">
            @yield('content')
    </div>
	<!-- footer -->
			<div class="container-fluid footer">
				<div class="container footerin">
					<div class="row">
						<div class="col-lg-3">
								<img src="{{asset('images/live.png')}}" height="90px" /> <span style="font-family: 'Montserrat', sans-serif; font-size: 22px; color: #5a5543">sportscore.eu</span>
						</div>
						<div class="col-lg-2 nopadding">
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
								Polityka prywatności
							</div>
							<div class="col-lg-12 menufooter nopadding">
								Logotypy
							</div>
						</div>
						<div class="col-lg-2 nopadding">
							<div class="col-lg-12 titlefooter nopadding">
								O nas
							</div>
							<div class="col-lg-12 menufooter nopadding">
								Misja
							</div>
							<div class="col-lg-12 menufooter nopadding">
								Kluby partnerskie
							</div>
						</div>
						<div class="col-lg-2 nopadding">
							<div class="col-lg-12 titlefooter nopadding">
								Oferta
							</div>
							<div class="col-lg-12 menufooter nopadding">
								Reklama w serwisie
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid topmenu">
				<div class="container nopadding">
					<div class="col-lg-12 topmenutext">
						<div class="topmenubox"><a href="/" >Strona główna</a></div>
						<div class="topmenubox"><a href="/addrelation" >Dodaj relację</a></div>
						<div class="topmenubox"><a href="/regulations" >Regulamin</a></div>
						<div class="topmenubox"><a href="/aboutus" >O nas</a></div>
					</div>
				</div>
			</div>
			<div class="container-fluid nopadding autorfooter">
					<div class="container nopadding">
						<div class="col-lg-2 nopadding">
								&copy; 2019 SportScore.eu
						</div>
					</div>
			</div>
			<div class="container-fluid nopadding">
					<div class="container nopadding">
						<div class="col-lg-12 nopadding">
								TA STRONA UŻYWA COOKIE.<br />
								<a href="#">Dowiedz się więcej</a> o celu ich używania i zmianie ustawień cookie w przeglądarce. Korzystając ze strony wyrażasz zgodę na używanie cookie, zgodnie z aktualnymi ustawieniami przeglądarki. 
						</div>
					</div>
			</div>
</body>
</html>
