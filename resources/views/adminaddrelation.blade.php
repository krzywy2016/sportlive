@extends('admin')

@section('content')



<!--											

		
<script type="text/javascript">
	$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>-->

	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-12 firsttiles">
				<img src="{{ asset('images/add.png') }}" height="30px" /> <span style="font-weight: bold">TWORZENIE NOWEJ RELACJI</span>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-12 contentbox">
				<div class="row justify-content-center">
					<div class="col-lg-2 d-none d-md-block">
						<img src="images/comment.png" height="120px" />
					</div>
					<div class="col-lg-8 d-none d-md-block">
						<h5>Witaj!</h5>
							<h6 class="subheading">Fajnie, że zdecydowałeś/aś się z nami utworzyć relację tekstową z meczu swojej drużyny.</h6>
							<p class="text-muted">Abyśmy mogli razem przygotować się do tego ważnego spotkania, musisz podać nam podstawowe informacje o tym wydarzeniu.
							Nie martw się. Poprowadzimy Cię krok po kroku do celu. Do dzieła!</p>
					</div>
					<div class="col-3 d-md-none">
						<img src="images/comment.png" height="70px" />
					</div>
					<div class="col-8 d-md-none">
						<span style="font-size: 13px"><b>Witaj!</b></span><br />
							<span style="font-size: 13px">Fajnie, że zdecydowałeś/aś się z nami utworzyć relację tekstową z meczu swojej drużyny.</span><br />
					</div>
					<div class="col-11 d-md-none">
						<br /><p style="font-size: 13px; text-align: justify;">Abyśmy mogli razem przygotować się do tego ważnego spotkania, musisz podać nam podstawowe informacje o tym wydarzeniu.
							Nie martw się. Poprowadzimy Cię krok po kroku do celu. Do dzieła!</p>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-12 d-none d-md-block">
						<br />
					</div>
					<div class="col-lg-11 d-none d-md-block">
						<div class="col-lg-11">
								<h4>Krok pierwszy</h4>
								<p class="text-muted">Podaj podstawowe informacje o meczu</p>
							</div>
					</div>
					<div class="col-12 d-md-none">
						<div class="col-12">
								<h6>Krok pierwszy</h6>
								<p class="text-muted" style="font-size: 13px;">Podaj podstawowe informacje o meczu</p>
							</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-11">
					<form id="form" enctype="multipart/form-data" method="post">
							@csrf
							<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
						<div class="row justify-content-center">
							<div class="col-md-5 d-none d-md-block">
									<div class="form-group">
										<label for="druzynagospodarzy">Wyszukaj drużynę gospodarzy</label>
										<input type="text" class="form-control myinput2" id="namehomedesktop" name="namehome" aria-describedby="goscie" placeholder="wpisz nazwę drużyny desktop">
										<small id="goscie" class="form-text text-muted">Wpisz nazwę np. Wisła Kraków</small>
									</div>
									<div id="teamhomedesktop"></div>
							</div>
							<div class="col-11 d-md-none">
									<div class="form-group">
										<label for="druzynagospodarzy">Wyszukaj drużynę gospodarzy</label>
										<input type="text" class="form-control myinput1" id="namehomemobile" name="namehome" aria-describedby="goscie" placeholder="wpisz nazwę drużyny mobile">
										<small id="goscie" class="form-text text-muted">Wpisz nazwę np. Wisła Kraków</small>
									</div>
									<div id="teamhomemobile"></div>
							</div>
							<div class="col-11 d-md-none">
									<div class="form-group">
										<label for="druzynagospodarzy">Wyszukaj drużynę gości</label>
										<input type="text" class="form-control myinput" id="nameaway2" name="nameaway" aria-describedby="goscie" placeholder="wpisz nazwę drużyny">
										<small id="goscie" class="form-text text-muted">Wpisz nazwę np. Wisła Kraków</small>
									</div>
									<div id="teamawaymobile"></div>
							</div>
							<div class="col-md-5 d-none d-md-block">
									<div class="form-group">
										<label for="druzynagospodarzy">Wyszukaj drużynę gości</label>
										<input type="text" class="form-control myinput" id="nameaway" name="nameaway" aria-describedby="goscie" placeholder="wpisz nazwę drużyny">
										<small id="goscie" class="form-text text-muted">Wpisz nazwę np. Wisła Kraków</small>
									</div>
									<div id="teamawaydesktop"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-11 col-md-11">
						<div class="row justify-content-center">
									<div class="col-md-10">
										<hr>
										<b><span style="color: #ff3051">Jeśli nie znalazłeś swojego zespołu, dodaj go:</span></b>
									</div>
									<div class="col-md-4">
										<small id="goscie" class="form-text text-muted">Nazwa zespołu</small>
										<input class="form-control" type="text" name="name">
									</div>
									<div class="col-md-4">
										<small id="goscie" class="form-text text-muted">Logo zespołu</small>
										<input type="file" class="form-control-file" name="logo">										
									</div>
									<div class="col-2 d-md-none"><br />
									</div>
									<div class="col-9 d-md-none"></div>
									<div class="col-2 col-md-2">
										<button type="submit" class="btn btn-success" onclick="document.getElementById('form').action='createdteam';">Dodaj drużynę</button>
									</div>
									<div class="col-lg-10">
										<hr>
									</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-11">
						<div class="row justify-content-center">
								<div class="col-7 col-md-2">
										<div class="form-group">
											<label for="druzynagospodarzy">Data wydarzenia</label>
											<input class="form-control" type="date"  id="example-date-input" name="date">
											<small id="goscie" class="form-text text-muted">kliknij w okienko</small>
										</div>
								</div>
								<div class="col-4 col-md-2">
										<div class="form-group">
											<label for="druzynagospodarzy">Godzina</label>
											<input class="form-control" type="time" id="example-time-input" name="hour">
											<small id="goscie" class="form-text text-muted">Przykład: 18:00</small>
										</div>
								</div>
								<div class="col-3 col-md-1">
										<div class="form-group">
											<label for="druzynagospodarzy">Kolejka</label>
											<input class="form-control" type="text" id="example-time-input" name="round">
											<small id="goscie" class="form-text text-muted">Przykład: 30</small>
										</div>
								</div>
								<div class="col-8 col-md-3">
										<div class="form-group">
											<label for="druzynagospodarzy">Miejscowość</label>
											<input type="text" class="form-control" name="city" placeholder="kliknij tutaj..." name="city">
											<small id="goscie" class="form-text text-muted">Przykład: Rzeszów</small>
										</div>
								</div>
								<div class="col-5 col-md-2">
										<div class="form-group">
											<label for="druzynagospodarzy">Liga</label>
											<input type="text" class="form-control" name="league" placeholder="kliknij tutaj..." name="league">
											<small id="goscie" class="form-text text-muted">B Klasa, Sparing itp.</small>
										</div>
								</div>
							</div>
						</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-12 d-none d-md-block">
						<br />
					</div>
					<div class="col-lg-11 d-none d-md-block">
						<div class="col-lg-11">
								<h4>Krok drugi</h4>
								<p class="text-muted">Teraz już pozostaje czekać na czas przedmeczowy i uzupełnić składy obu zespołów.<br />
										Potem można zacząć relację i kibicować najleszym! Pamiętaj aby zapisać ustawienia relacji.</p>
							</div>
					</div>
					<div class="col-12 d-md-none">
						<div class="col-12">
								<h6>Krok drugi</h6>
								<p class="text-muted" style="font-size: 13px; text-align: justify">Teraz już pozostaje czekać na czas przedmeczowy i uzupełnić składy obu zespołów.
										Potem można zacząć relację i kibicować najleszym! Pamiętaj aby zapisać ustawienia relacji.</p>
						</div>
						
						<div class="col-3">
								<button type="submit" class="btn btn-danger" onclick="document.getElementById('form').action='/relation/add';">Zapisz nową relację!</button>
						</div><br /><br />
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-12 d-none d-md-block">
						<br />
					</div>
					<div class="col-lg-11 d-none d-md-block">
						<div class="row">
						<div class="col-lg-1">
								<img src="images/manual.png" height="70px" />
						</div>
						<div class="col-lg-7">
								Gdybyś miał jakieś pytania, zapraszamy do Samouczka!<br />
									 <button type="button" class="btn btn-primary">Otwórz samouczek</button>
						</div>
						<div class="col-lg-3">
								<button type="submit" class="btn btn-danger" onclick="document.getElementById('form').action='/relation/add';">Zapisz nową relację!</button>
						</div>
						</div>
					</div>
					<div class="col-12 d-md-none">
						<div class="row">
						<div class="col-lg-1">
								<img src="images/manual.png" height="70px" />
						</div>
						<div class="col-lg-7">
								Gdybyś miał jakieś pytania, zapraszamy do Samouczka!<br />
									 <button type="button" class="btn btn-primary">Otwórz samouczek</button>
						</div>
						</div>
						<br />
					</div>
				</div>
			</div>
		</div>
	</div>
	</form>
<script type="text/javascript"> 
	$('.myinput2').on('keyup', function() {
		var namehome = $('#namehomedesktop').val();
		$.ajax({
			type : 'get',
			url : '{{URL::to('searchhometeam')}}',
			data:{
				namehome: namehome,
			},
			success:function(data){
				$('#teamhomedesktop').html(data);
			}
		});
	});
</script>	

<script type="text/javascript"> 
	$('.myinput1').on('keyup', function() {
		var namehome = $('#namehomemobile').val();
		$.ajax({
			type : 'get',
			url : '{{URL::to('searchhometeammobile')}}',
			data:{
				namehome: namehome,
			},
			success:function(data){
				$('#teamhomemobile').html(data);
			}
		});
	});
</script>	

<script type="text/javascript"> 
	$('.myinput').on('keyup', function() {
		var nameaway = $('#nameaway2').val();
		$.ajax({
			type : 'get',
			url : '{{URL::to('searchawayteammobile')}}',
			data:{
				nameaway: nameaway,
				},
			success:function(data){
				$('#teamawaymobile').html(data);
			}
		});
	});
</script>

<script type="text/javascript"> 
	$('.myinput').on('keyup', function() {
		var nameaway = $('#nameaway').val();
		$.ajax({
			type : 'get',
			url : '{{URL::to('searchawayteam')}}',
			data:{
				nameaway: nameaway,
				},
			success:function(data){
				$('#teamawaydesktop').html(data);
			}
		});
	});
</script>
<br /><br />
@endsection