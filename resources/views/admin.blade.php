<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl-PL" lang="pl-PL" >
	<head>
            <title>Sport LIVE - admin panel</title>
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
			<link href="{{ asset('css/admin.css') }}" rel="stylesheet" />
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	</head>
	<body class="body">
		<div class="container-fluid">
				<div class="row">
						<div class="col-lg-2 toplewy"><img src="images/logocms.png" height="20px" align="middle"/> AISEN SportLIVE</div>
						<div class="col-lg-10 topprawy">
								<div class="col-lg-3"></div>
								<div class="col-lg-4"></div>
								<div class="col-lg-5">
									<img src="images/message.png" height="30px"/>
									<img src="images/alert.png" height="30px"/>
									<img src="images/user.png" class="image-circle"/>  Kamil Krzywonos
								</div>
						</div>
				</div>
				<div class="row">
					<div class="col-container">
						<div class="col-lg-2 lewemenu">
							<div class="profile-usermenu">
							<ul class="nav">
								<li class="active">
									<a href="#">
									<img src="images/homepage.png" height="20px">
									Dashboard </a>
								</li>
								<li>
									<a href="#">
									<img src="images/add.png" height="20px">
									Utwórz nową relację </a>
								</li>
								<li>
									<a href="#">
									<img src="images/relation.png" height="20px">
									Moje relacje LIVE </a>
								</li>
								<li>
									<a href="#">
									<img src="images/archive.png" height="20px">
									Archiwalne relacje </a>
								</li>
								<li>
									<a href="#">
									<img src="images/profile.png" height="20px">
									Mój profil </a>
								</li>
								<li>
									<a href="#">
									<img src="images/manual.png" height="20px">
									Samouczek </a>
								</li>
								<li>
									<a href="#">
									<img src="images/settings.png" height="20px">
									Ustawienia </a>
								</li>
								<li>
									<a href="#">
									<img src="images/logout.png" height="20px">
									Wyloguj </a>
								</li>
							</ul>
							</div>
						</div>
					<div class="col-lg-10 content">
								@yield('content')
					</div>	
					</div>
				</div>
			<div class="col-lg-12">
			stopka
			</div> 
	</body>
</html>