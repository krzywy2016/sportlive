@extends('admin')

@section('content')
	<div class="row">
		<div class="col-lg-12 firsttiles">
				<div class="col-lg-3">
					<div class="tiles">
						<img src="images/add.png" height="50px" />
						utwórz nową relację
					</div>
				</div>
				<div class="col-lg-3">
					<div class="tiles">
						<img src="images/relation.png" height="50px" />
						moje relacje live
					</div>
				</div>
				<div class="col-lg-3">
					<div class="tiles">
						<img src="images/archive.png" height="50px" />
						archiwalne relacje
					</div>
				</div>
				<div class="col-lg-3">
					<div class="tiles">
						<img src="images/profile.png" height="50px" />
						mój profil
					</div>
				</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 secondtiles">
				<div class="col-lg-3">
					<div class="tiles">
						<img src="images/settings.png" height="50px" />
						ustawienia
					</div>
				</div>
				<div class="col-lg-3">
					<div class="tiles">
						<img src="images/manual.png" height="50px" />
						samouczek
					</div>
				</div>
				<div class="col-lg-3">
					<div class="tiles">
						<img src="images/logout.png" height="50px" />
						wyloguj 
					</div>
				</div>
		</div>
	</div>
@endsection