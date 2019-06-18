@extends('admin')

@section('content')
	<div class="row">
		<div class="col-lg-12 firsttiles">
			<img src="images/add.png" height="20px" />Tworzenie nowej relacji live
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
				<div class="col-lg-12">
					<div class="contentbox">
						<div class="row">
							<div class="col-lg-2">
								<img src="images/comment.png" height="130px" />
							</div>
							<div class="col-lg-8">
								<h4>Witaj!</h4>
											<h4 class="subheading">Fajnie, że zdecydowałeś/aś się z nami utworzyć relację tekstową z meczu swojej drużyny.</h4>
							<p class="text-muted">Abyśmy mogli razem przygotować się do tego ważnego spotkania, musisz podać nam podstawowe informacje o tym wydarzeniu.
							Nie martw się. Poprowadzimy Cię krok po kroku do celu. Do dzieła!</p><br />
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<h4>Krok pierwszy</h4>
								<p class="text-muted">Podaj podstawowe informacje o meczu</p>
							</div>
							<form action="{{ URL::to('/relation/add') }}" enctype="multipart/form-data" method="post">
							<div class="row">
								<div class="col-lg-2"></div>
								<div class="col-lg-4">
									<div class="form-group">
										<label for="druzynagospodarzy">Nazwa drużyny gospodarzy</label>
										<input type="text" class="form-control" name="hometeam" aria-describedby="gospodarze" placeholder="kliknij tutaj...">
										<small id="gospodarze" class="form-text text-muted">Wpisz nazwę np. Wisła Kraków</small>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label for="druzynagospodarzy">Nazwa drużyny gości</label>
										<input type="text" class="form-control" name="awayteam" aria-describedby="goscie" placeholder="kliknij tutaj...">
										<small id="goscie" class="form-text text-muted">Wpisz nazwę np. Wisła Kraków</small>
									</div>
								</div>
								<div class="col-lg-2"></div>
							</div>
							<div class="row">
								<div class="col-lg-2"></div>
								<div class="col-lg-4">
										<div class="form-group">
											<label class="custom-file-label">Wybierz herb gospodarzy</label>
											<input type="file" class="custom-file-input" name="logohometeam">
											<small id="goscie" class="form-text text-muted">Dozwolone są pliki takie jak: .jpg, .png, .bmp</small>
										</div>
								</div>
								<div class="col-lg-4">
										<div class="form-group">
											<label class="custom-file-label">Wybierz herb gości</label>
											<input type="file" class="custom-file-input" name="logoawayteam">
											<small id="goscie" class="form-text text-muted">Dozwolone są pliki takie jak: .jpg, .png, .bmp</small>
										</div>
								</div>
								<div class="col-lg-2"></div>
							</div>
							<div class="row">
								<div class="col-lg-2"></div>
								<div class="col-lg-2">
										<div class="form-group">
											<label for="druzynagospodarzy">Data wydarzenia</label>
											<input type="text" class="form-control" name="datematch" placeholder="kliknij tutaj...">
											<small id="goscie" class="form-text text-muted">Przykład: 01.02.2019</small>
										</div>
								</div>
								<div class="col-lg-2">
										<div class="form-group">
											<label for="druzynagospodarzy">Godzina wydarzenia</label>
											<input type="text" class="form-control" name="hourmatch" placeholder="kliknij tutaj...">
											<small id="goscie" class="form-text text-muted">Przykład: 18:00</small>
										</div>
								</div>
								<div class="col-lg-2">
										<div class="form-group">
											<label for="druzynagospodarzy">Miejscowość</label>
											<input type="text" class="form-control" name="city" placeholder="kliknij tutaj...">
											<small id="goscie" class="form-text text-muted">Przykład: 18:00</small>
										</div>
								</div>
								<div class="col-lg-2">
										<div class="form-group">
											<label for="druzynagospodarzy">Liga</label>
											<input type="text" class="form-control" name="league" placeholder="kliknij tutaj...">
											<small id="goscie" class="form-text text-muted">Przykład: Klasa A</small>
										</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="col-lg-12">
										<h4>Krok drugi</h4>
										<p class="text-muted">Teraz już pozostaje czekać na czas przedmeczowy i uzupełnić składy obu zespołów.<br />
										Potem można zacząć relację i kibicować najleszym! Pamiętaj aby zapisać ustawienia relacji.<br /><br /></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-1"></div>
								<div class="col-lg-1">
									<img src="images/manual.png" height="70px" />
								</div>
								<div class="col-lg-3">
									 Gdybyś miał jakieś pytania, zapraszamy do Samouczka!<br />
									 <button type="button" class="btn btn-primary">Otwórz samouczek</button>
								</div>
								<div class="col-lg-3"></div>
								<div class="col-lg-2">
									<button type="button" class="btn btn-danger">Zapisz nową relację!</button>
								</div>
							</div>
							</form>
							<div class="row">
								<div class="col-lg-12">
									<br /><br />
								</div>
							</div>
					</div>
				</div>
		</div>
		<div class="row">
			<div class="col-lg-12 firsttiles">
			
			</div>
		</div>
	</div>
@endsection