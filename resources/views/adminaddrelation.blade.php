@extends('admin')

@section('content')
	<div class="row">
	<div class="col-lg-12">
		<div class="col-lg-1"></div>
		<div class="col-lg-10 firsttiles">
			<img src="{{ asset('images/add.png') }}" height="40px" /> <span style="font-weight: bold">TWORZENIE NOWEJ RELACJI</span>
		</div>
	</div>
</div>
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
				<div class="col-lg-12">
					<div class="contentbox">
						<div class="row">
						<div class="col-lg-1"></div>
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
						<div class="col-lg-1"></div>
							<div class="col-lg-11">
								<h4>Krok pierwszy</h4>
								<p class="text-muted">Podaj podstawowe informacje o meczu</p>
							</div>
							<form action="{{ URL::to('/relation/add') }}" enctype="multipart/form-data" method="post">
							@csrf
							 <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
							<div class="row">
								<div class="col-lg-2"></div>
								<div class="col-lg-4">
									<div class="form-group">
										<label for="druzynagospodarzy">Wyszukaj drużynę gospodarzy</label>
										<input type="text" class="form-control myinput" id="namehome" name="namehome" aria-describedby="goscie" placeholder="wpisz nazwę drużyny">
										<small id="goscie" class="form-text text-muted">Wpisz nazwę np. Wisła Kraków</small>
										<script type="text/javascript"> 
												$('.myinput').on('keyup', function() {
													var namehome = $('#namehome').val();
													$.ajax({
														type : 'get',
														url : '{{URL::to('searchhometeam')}}',
														data:{
															namehome: namehome,
														},
														success:function(data){
														$('#teamhome').html(data);
														}
													});
												});
											</script>
		
											<script type="text/javascript">
													$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
											</script>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label for="druzynagospodarzy">Nazwa drużyny gości</label>
										<input type="text" class="form-control myinput" id="nameaway" name="nameaway" aria-describedby="goscie" placeholder="wpisz nazwę drużyny">
										<small id="goscie" class="form-text text-muted">Wpisz nazwę np. Wisła Kraków</small>
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
														$('#teamaway').html(data);
														}
													});
												});
											</script>
		
											<script type="text/javascript">
													$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
											</script>
									</div>
								</div>
								<div class="col-lg-2"></div>
							</div>
							<div class="row">
								<div class="col-lg-2"></div>
								<div id="teamhome" class="col-lg-4">
								</div>
								<div id="teamaway" class="col-lg-4">
								</div>
								<div class="col-lg-2"></div>
							</div>
							<div class="row">
								<div class="col-lg-2"></div>
								<div class="col-lg-2">
										<div class="form-group">
											<label for="druzynagospodarzy">Data wydarzenia</label>
											<input class="form-control" type="date"  id="example-date-input" name="date">
											<small id="goscie" class="form-text text-muted">Przykład: 01.02.2019</small>
										</div>
								</div>
								<div class="col-lg-2">
										<div class="form-group">
											<label for="druzynagospodarzy">Godzina</label>
											<input class="form-control" type="time" id="example-time-input" name="hour">
											<small id="goscie" class="form-text text-muted">Przykład: 18:00</small>
										</div>
								</div>
								<div class="col-lg-1">
										<div class="form-group">
											<label for="druzynagospodarzy">Kolejka</label>
											<input class="form-control" type="text" id="example-time-input" name="round">
											<small id="goscie" class="form-text text-muted">Przykład: 30</small>
										</div>
								</div>
								<div class="col-lg-2">
										<div class="form-group">
											<label for="druzynagospodarzy">Miejscowość</label>
											<input type="text" class="form-control" name="city" placeholder="kliknij tutaj..." name="city">
											<small id="goscie" class="form-text text-muted">Przykład: 18:00</small>
										</div>
								</div>
								<div class="col-lg-2">
										<div class="form-group">
											<label for="druzynagospodarzy">Liga</label>
											<input type="text" class="form-control" name="league" placeholder="kliknij tutaj..." name="league">
											<small id="goscie" class="form-text text-muted">Przykład: Klasa A</small>
										</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
								<div class="col-lg-1"></div>
									<div class="col-lg-11">
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
									<button type="submit" class="btn btn-danger">Zapisz nową relację!</button>
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