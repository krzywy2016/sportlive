@extends('admin')

@section('content')
	<div class="row justify-content-center">
		<div class="col-11 col-lg-11 firsttiles">
			<div class="row">
				<div class="col-12 col-lg-3">
					<div class="tiles">
						<a href="/addrelation"><img src="images/add.png" height="50px" />
						utwórz nową relację</a>
					</div>
				</div>
				<div class="col-12 d-md-none">
					<br />
				</div>
				<div class="col-12 col-lg-3">
					<div class="tiles">
						<a href="/myrelation"><img src="images/relation.png" height="50px" />
						moje relacje live</a>
					</div>
				</div>
				<div class="col-12 d-md-none">
					<br />
				</div>
				<div class="col-lg-3">
					<div class="tiles">
						<a href="/archiverelation"><img src="images/archive.png" height="50px" />
						archiwalne relacje</a>
					</div>
				</div>
				<div class="col-12 d-md-none">
					<br />
				</div>
				<!--<div class="col-lg-3">
					<div class="tiles">
						<a href="/myprofile"><img src="images/profile.png" height="50px" />
						mój profil</a>
					</div>
				</div>-->
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-11 col-lg-11 firsttiles">
			<div class="row">
				<!--<div class="col-lg-3">
					<div class="tiles">
						<a href="/settings"><img src="images/settings.png" height="50px" />
						ustawienia</a>
					</div>
				</div>-->
				<div class="col-lg-3">
					<div class="tiles">
						<a href="/lerning"><img src="images/manual.png" height="50px" />
						samouczek</a>
					</div>
				</div>
				<div class="col-12 d-md-none">
					<br />
				</div>
				<div class="col-lg-3">
					<div class="tiles">
						<a href="/logout"><img src="images/logout.png" height="50px" />
						wyloguj </a>
					</div>
				</div>
				<div class="col-12 d-md-none">
					<br />
				</div>
			</div>
		</div>
	</div>
@endsection