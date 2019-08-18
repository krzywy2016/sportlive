@extends('admin')

@section('content')
<div class="container">
		<div class="row">
			<div class="col-12 col-lg-12 firsttiles">
				<img src="{{ asset('images/relation.png') }}" height="30px" /><span style="font-weight: bold"> Relacja live: </span>{{$relations->teamhome}} vs. {{ $relations->teamaway}}
			</div>
		</div>
</div>
<div class="container d-none d-md-block">
	<div class="row justify-content-center">
			<div class="col-lg-12 contentbox">
				<div class="row">
					<div class="col-md-5">
						<div class="row justify-content-center">
							<div class="col-md-2 time">
											{{$relations->status}}
							</div>
						</div>
						<div class="row">
							<div class="col-lg-5">
								<div class="col-lg-12  nameteam">
									{{$relations->teamhome}}
								</div>
							</div>
							<div class="col-lg-2 result">
								{{$relations->resulthometeam}} : {{$relations->resultawayteam}}
							</div>
							<div class="col-lg-5 questteam">
								<div class="col-lg-12 nameteam">
									{{$relations->teamaway}}
								</div>
							</div>
						</div>
						<div class="row">
					<div class="col-12"><br /></div>
					<div class="col-12">
						<div class="row">
							<div class="col-3">
								Link do relacji:
							</div>
							<div class="col-9">
								<input type="text" value="https://sportscore.eu/relation/{{$relations->id}}/show" class="form-control" id="exampleFormControlInput1" >
							</div>
						</div>
					</div>
				</div>
						<div class="row" style="margin-top: 5%;">
							<div class="col-md-6">
										<input type="hidden" name="relation_id" value="{{$relations->id}}">
										<button type="button" class="btn btn-block btn-success" style="font-size:20px;" data-toggle="modal" data-target="#goalhome">GOL </button>	
										<div id="goalhome" class="modal fade" role="dialog">
											<div class="modal-dialog modal-lg">

											<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<div class="row">
															<div class="col-md-12">
																<h4 class="modal-title">Gol dla gospodarzy</h4>
															</div>
														</div>
															
													</div>
												<div class="modal-body">
												<form action="{{ URL::to('/relation/editgoal') }}" enctype="multipart/form-data" method="post">
													@csrf
														<input type="hidden" value="/images/goal.png" name="icon" >
														<input type="hidden" name="goalhome" value="1">
														<input type="hidden" name="relation_id" value="{{$relations->id}}">
												<div class="row justify-content-center">
													<div class="row justify-content-center">
															<div class="col-md-2">
																<small id="goscie" class="form-text text-muted">Minuta</small>
																<input type="text" name="time" class="form-control" id="exampleFormControlInput1" >
															</div>
															<div class="col-md-7">
																<small id="goscie" class="form-text text-muted">Tekst wydarzenia</small>
																<textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
															</div>
															<div class="col-md-3 align-self-center">	
																<button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
															</div>
													</form>
													</div>
													</div>
												</div>
												<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
												</div>
												</div>

											</div>
										</div>
							</div>
							<div class="col-md-6">
										<button type="submit" class="btn btn-block btn-success" data-toggle="modal" data-target="#goalaway" style="font-size:20px;">GOL</button>	
										<div id="goalaway" class="modal fade" role="dialog">
											<div class="modal-dialog modal-lg">

											<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
													<div class="row">
														<div class="col-lg-12">
															<h4 class="modal-title">Gol dla gości</h4>
														</div>
													</div>
													</div>
												<div class="modal-body">
													<form action="{{ URL::to('/relation/editgoal') }}" enctype="multipart/form-data" method="post">
													@csrf
														<input type="hidden" value="/images/goal.png" name="icon" >
														<input type="hidden" name="goalaway" value="1">
														<input type="hidden" name="relation_id" value="{{$relations->id}}">
												<div class="row justify-content-center">
													<div class="row justify-content-center">
														<div class="col-lg-2">	
																<small id="goscie" class="form-text text-muted">Minuta</small>
																<input type="text" name="time" class="form-control" id="exampleFormControlInput1" >
														</div>
														<div class="col-lg-7">	
																<small id="goscie" class="form-text text-muted">Tekst wydarzenia</small>
																<textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
														</div>
														<div class="col-lg-3 align-self-center">	
																<button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
														</div>
													</form>
													</div>
													</div>
																	</div>
												<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
												</div>
												</div>

											</div>
										</div>
							</div>							
						</div>
						<div class="row" style="margin-top:5%">
							<div class="col-lg-6">
										<form action="{{ URL::to('/relation/editgoal') }}" enctype="multipart/form-data" method="post">
										@csrf
										<input type="hidden" name="relation_id" value="{{$relations->id}}">
										<button type="submit" class="btn btn-block btn" name="goalhomeminus" value="1" style="font-size:17px;">Odejmij gola </button>	
									</div>
									<div class="col-lg-6">
										<button type="submit" class="btn btn-block btn" name="goalawayminus" value="1" style="font-size:17px;">Odejmij gola</button>	
										</form>
									</div>
						</div>
						<div class="row" style="margin-top:3%">
							<div class="col-lg-7">
									<form action="{{ URL::to('/relation/editstatus') }}" enctype="multipart/form-data" method="post">
									@csrf
										 <input type="hidden" name="id" value="{{$relations->id}}">
										 <select class="form-control" id="exampleFormControlSelect1" name="status">
												<option>przed meczem</option>
												<option>trwa I połowa</option>
												<option>przerwa</option>
												<option>trwa II połowa</option>
												<option>koniec meczu</option>
												<option>przerwany</option>
												<option>walkower</option>
												<option>odwołany</option>
										</select>	
									</div>
									<div class="col-lg-5">
										<button type="submit" class="btn btn-block btn-primary">ZMIEŃ</button>
									</div>
									</form>
						</div>
						<div class="row">
								<div class="col-lg-6">
										<button type="button" class="btn btn-block btn-default" style="font-size:20px;" data-toggle="modal" data-target="#teamhome">Składy gospodarzy</button>
										<div id="teamhome" class="modal fade" role="dialog">
											<div class="modal-dialog modal-lg">

											<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<div class="row">
														<div class="col-lg-12">
															<h4 class="modal-title">Skład gospodarzy</h4>
														</div>
													</div>
													</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-lg-12">
															<b>SKŁAD PODSTAWOWY</b>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-2">
															<b>Numer</b>
														</div>
														<div class="col-lg-7">
															<b>Imię i nazwisko</b>
														</div>
													</div>
													<form action="{{ URL::to('/relation/addsquad') }}" enctype="multipart/form-data" method="post">
													@csrf
														<input type="hidden" value="{{$relations->id}}" name="relations_id">
														<input type="hidden" value="{{$relations->teamhome}}" name="team">
														@foreach($teamhome as $teamplayer)
													<div class="row" style="margin-top: 2%">
														<div class="col-lg-2">	
																<input type="text" name="number[]" value="{{$teamplayer->number}}" class="form-control" id="exampleFormControlInput1" >
														</div>
														<div class="col-lg-10">	
																<input type="text" name="name[]" value="{{$teamplayer->name}}" class="form-control" id="exampleFormControlInput1" >
																<input type="hidden" value="{{$teamplayer->position}}" name="position[]">
														</div>
													</div>
														@if ($teamplayer->position === 'position10')
														<div class="row" style="margin-top: 2%">
															<div class="col-lg-12">
																<b>SKŁAD REZERWOWY</b>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-2">
																<b>Numer</b>
															</div>
															<div class="col-lg-10">
																<b>Imię i nazwisko</b>
															</div>
														</div>
														@endif
														@endforeach 
														@for($i=count($teamhome); $i < 18; $i++)
														<div class="row">
															<div class="col-lg-2">	
																<input type="text" name="number[]" class="form-control" id="exampleFormControlInput1" >
															</div>
															<div class="col-lg-10">	
																<input type="text" name="name[]" class="form-control" id="exampleFormControlInput1" >
																<input type="hidden" value="position{{$i}}" name="position[]">
															</div>
														</div>
														<div class="row">
															<div class="col-lg-12">	
																<br />
															</div>
														</div>
														@if ($i == 10)
														<div class="row" style="margin-top: 2%">
															<div class="col-lg-12">
																<b>SKŁAD REZERWOWY</b>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-2">
																<b>Numer</b>
															</div>
															<div class="col-lg-10">
																<b>Imię i nazwisko</b>
															</div>
														
														</div>
														@endif
														@endfor
														<div class="row">
															<div class="col-lg-12">	
																<br />
															</div>
														</div>
														<div class="row">
															<div class="col-lg-9">	
																
															</div>
															<div class="col-lg-3">	
																<button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
															</div>
														</div>
													</form>
																	</div> 
												<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
												</div>
												</div>

											</div>
										</div>		
									</div>
										<div class="col-lg-6">
										<button type="button" class="btn btn-block btn-default" style="font-size:20px;" data-toggle="modal" data-target="#teamaway">Składy gości</button>
										<div id="teamaway" class="modal fade" role="dialog">
											<div class="modal-dialog modal-lg">

											<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<div class="row">
														<div class="col-lg-12">
															<h4 class="modal-title">Skład gości</h4>
														</div>
													</div>
													</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-lg-12">
															<b>SKŁAD PODSTAWOWY</b>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-2">
															<b>Numer</b>
														</div>
														<div class="col-lg-7">
															<b>Imię i nazwisko</b>
														</div>
													</div>
													<form action="{{ URL::to('/relation/addsquad2') }}" enctype="multipart/form-data" method="post">
													@csrf
														<input type="hidden" value="{{$relations->id}}" name="relations_id">
														<input type="hidden" value="{{$relations->teamaway}}" name="team">
														@foreach($teamaway as $teamplayer)
													<div class="row" style="margin-top: 2%">
														<div class="col-lg-2">	
																<input type="text" name="number2[]" value="{{$teamplayer->number}}" class="form-control" id="exampleFormControlInput1" >
														</div>
														<div class="col-lg-10">	
																<input type="text" name="name2[]" value="{{$teamplayer->name}}" class="form-control" id="exampleFormControlInput1" >
																<input type="hidden" value="{{$teamplayer->position}}" name="position2[]">
														</div>
													</div>
														@if ($teamplayer->position === 'position210')
														<div class="row" style="margin-top: 2%">
															<div class="col-lg-12">
																<b>SKŁAD REZERWOWY</b>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-2">
																<b>Numer</b>
															</div>
															<div class="col-lg-10">
																<b>Imię i nazwisko</b>
															</div>
														</div>
														@endif
														@endforeach
														@for($i=count($teamaway); $i < 18; $i++)
														<div class="row">
															<div class="col-lg-2">	
																<input type="text" name="number2[]" class="form-control" id="exampleFormControlInput1" >
															</div>
															<div class="col-lg-10">	
																<input type="text" name="name2[]" class="form-control" id="exampleFormControlInput1" >
																<input type="hidden" value="position2{{$i}}" name="position2[]">
															</div>
														</div>
														<div class="row">
															<div class="col-lg-12">	
																<br />
															</div>
														</div>
														@if ($i == 10)
														<div class="row" style="margin-top: 2%">
															<div class="col-lg-12">
																<b>SKŁAD REZERWOWY</b>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-2">
																<b>Numer</b>
															</div>
															<div class="col-lg-10">
																<b>Imię i nazwisko</b>
															</div>
														
														</div>
														@endif
														@endfor
														<div class="row">
															<div class="col-lg-12">	
																<br />
															</div>
														</div>
														<div class="row">
															<div class="col-lg-9">	
																
															</div>
															<div class="col-lg-3">	
																<button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
															</div>
														</div>
													</form>
																	</div>
												<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
												</div>
												</div>

											</div>
										</div>		
									</div>
						</div>
						<div class="row" style="margin-top:5%">
								<div class="col-lg-3">
										<button type="button" class="btn btn-block btn-warning" style="font-size:14px;" data-toggle="modal" data-target="#yellowcard"><img src="{{ asset('images/yellowcard.png') }}" /><br />Żółta <br />kartka</button>	
										<div id="yellowcard" class="modal fade" role="dialog">
											<div class="modal-dialog">

											<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title">Żółta kartka</h4>
													</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-lg-2">
															<b>Minuta</b>
														</div>
														<div class="col-lg-7">
															<b>Tekst wydarzenia</b>
														</div>
													</div>
													<form action="{{ URL::to('/relation/addpost') }}" enctype="multipart/form-data" method="post">
													@csrf
														<input type="hidden" value="/images/yellowcard.png" name="icon" >
														<input type="hidden" name="relations_id" value="{{$relations->id}}">
													<div class="row">
														<div class="col-lg-2">	
																<input type="text" name="time" class="form-control" id="exampleFormControlInput1" >
														</div>
														<div class="col-lg-10">	
																<textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-6">
															<b>Zawodnik gospodarzy</b>
														</div>
														<div class="col-lg-6">
															<b>Zawodnik gości</b>
														</div>
														<div class="col-lg-6">
															<select class="form-control" name="cardplayerhome">
																<option></option>
																@foreach($teamhome as $teamplayer)
																@if(!empty($teamplayer->name))
																<option>{{$teamplayer->name}}</option>
																@endif
																@endforeach
															</select>
															<input type="hidden" value="{{$relations->teamhome}}" name="cardplayerhometeam">
														</div>
														<div class="col-lg-6">
															<select class="form-control" name="cardplayeraway">
																<option></option>
																@foreach($teamaway as $teamplayer2)
																@if(!empty($teamplayer2->name))
																<option>{{$teamplayer2->name}}</option>
																@endif
																@endforeach
															</select>
															<input type="hidden" value="{{$relations->teamaway}}" name="cardplayerawayteam">
															<input type="hidden" value="yellow" name="typecard">
															<input type="hidden" value="{{$relations->id}}" name="relation_id">
														</div>
														<div class="col-lg-12"><br /></div>
														<div class="col-lg-9"></div>
														<div class="col-lg-3">	
																<button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
														</div>
													</form>
													</div>
																	</div>
												<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
												</div>
												</div>

											</div>
										</div>									
									</div>
									<div class="col-lg-3">
										<button type="button" class="btn btn-block btn-warning" style="font-size:14px;" data-toggle="modal" data-target="#twoyellowcard"><img src="{{ asset('images/yellowred.png') }}" height="27px" /><br />Druga <br />żółta</button>	
										<div id="twoyellowcard" class="modal fade" role="dialog">
											<div class="modal-dialog">

											<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title">Druga żółta kartka</h4>
													</div>
												<div class="modal-body">
														<div class="row">
														<div class="col-lg-2">
															<b>Minuta</b>
														</div>
														<div class="col-lg-7">
															<b>Tekst wydarzenia</b>
														</div>
													</div>
													<form action="{{ URL::to('/relation/addpost') }}" enctype="multipart/form-data" method="post">
													@csrf
														<input type="hidden" value="/images/yellowred.png" name="icon" >
														<input type="hidden" name="relations_id" value="{{$relations->id}}">
													<div class="row">													
														<div class="col-lg-2">	
																<input type="text" name="time" class="form-control" id="exampleFormControlInput1" >
														</div>
														<div class="col-lg-10">	
																<textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
														</div>
													</div>
														<div class="row">
														<div class="col-lg-6">
															<b>Zawodnik gospodarzy</b>
														</div>
														<div class="col-lg-6">
															<b>Zawodnik gości</b>
														</div>
														<div class="col-lg-6">
															<select class="form-control" name="cardplayerhome">
																<option></option>
																@foreach($teamhome as $teamplayer)
																@if(!empty($teamplayer->name))
																<option>{{$teamplayer->name}}</option>
																@endif
																@endforeach
															</select>
															<input type="hidden" value="{{$relations->teamhome}}" name="cardplayerhometeam">
														</div>
														<div class="col-lg-6">
															<select class="form-control" name="cardplayeraway">
																<option></option>
																@foreach($teamaway as $teamplayer2)
																@if(!empty($teamplayer2->name))
																<option>{{$teamplayer2->name}}</option>
																@endif
																@endforeach
															</select>
															<input type="hidden" value="{{$relations->teamaway}}" name="cardplayerawayteam">
															<input type="hidden" value="yellowred" name="typecard">
															<input type="hidden" value="{{$relations->id}}" name="relation_id">
														</div>
														<div class="col-lg-12"><br /></div>
														<div class="col-lg-9"></div>
														<div class="col-lg-3">	
																<button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
														</div>
													</form>
													</div>
													</div>
												<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
												</div>
												</div>

											</div>
										</div>	
									</div>
									<div class="col-lg-3">
										<button type="button" class="btn btn-block btn-danger" style="font-size:14px;" data-toggle="modal" data-target="#redcard"><img src="{{ asset('images/redcard.png') }}" /><br />Czerwona <br />kartka</button>	
										<div id="redcard" class="modal fade" role="dialog">
											<div class="modal-dialog">

											<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title">Czerwona kartka</h4>
													</div>
												<div class="modal-body">
														<div class="row">
														<div class="col-lg-2">
															<b>Minuta</b>
														</div>
														<div class="col-lg-7">
															<b>Tekst wydarzenia</b>
														</div>
													</div>
													<form action="{{ URL::to('/relation/addpost') }}" enctype="multipart/form-data" method="post">
													@csrf
														<input type="hidden" value="/images/redcard.png" name="icon" >
														<input type="hidden" name="relations_id" value="{{$relations->id}}">
													<div class="row">
														<div class="col-lg-2">	
																<input type="text" name="time" class="form-control" id="exampleFormControlInput1" >
														</div>
														<div class="col-lg-10">	
																<textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-6">
															<b>Zawodnik gospodarzy</b>
														</div>
														<div class="col-lg-6">
															<b>Zawodnik gości</b>
														</div>
														<div class="col-lg-6">
															<select class="form-control" name="cardplayerhome">
																<option></option>
																@foreach($teamhome as $teamplayer)
																@if(!empty($teamplayer->name))
																<option>{{$teamplayer->name}}</option>
																@endif
																@endforeach
															</select>
															<input type="hidden" value="{{$relations->teamhome}}" name="cardplayerhometeam">
														</div>
														<div class="col-lg-6">
															<select class="form-control" name="cardplayeraway">
																<option></option>
																@foreach($teamaway as $teamplayer2)
																@if(!empty($teamplayer2->name))
																<option>{{$teamplayer2->name}}</option>
																@endif
																@endforeach
															</select>
															<input type="hidden" value="{{$relations->teamaway}}" name="cardplayerawayteam">
															<input type="hidden" value="red" name="typecard">
															<input type="hidden" value="{{$relations->id}}" name="relation_id">
														</div>
														<div class="col-lg-12"><br /></div>
														<div class="col-lg-9"></div>
														<div class="col-lg-3">	
																<button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
														</div>
													</form>
													</div>
																	</div>
												<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
												</div>
												</div>

											</div>
										</div>	
									</div>
									<div class="col-lg-3">
										<button type="button" class="btn btn-block btn-primary" style="font-size:14px;" data-toggle="modal" data-target="#change" ><img src="{{ asset('images/change.png') }}" height="27px" /><br />Zmiana <br />zawodnika</button>	
										<div id="change" class="modal fade" role="dialog">
											<div class="modal-dialog">

											<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title">Zmiana gracza</h4>
													</div>
												<div class="modal-body">
														<div class="row">
														<div class="col-lg-2">
															<b>Minuta</b>
														</div>
														<div class="col-lg-7">
															<b>Tekst wydarzenia</b>
														</div>
													</div>
													<form action="{{ URL::to('/relation/addpost') }}" enctype="multipart/form-data" method="post">
													@csrf
														<input type="hidden" value="/images/change.png" name="icon" >
														<input type="hidden" name="relations_id" value="{{$relations->id}}">
													<div class="row">
														<div class="col-lg-2">	
																<input type="text" name="time" class="form-control" id="exampleFormControlInput1" >
														</div>
														<div class="col-lg-10">	
																<textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-2">
														</div>
														<div class="col-lg-5">
															<b>Zawodnik gospodarzy</b>
														</div>
														<div class="col-lg-5">
															<b>Zawodnik gości</b>
														</div>
														<div class="col-lg-2">
															Schodzi
														</div>
														<div class="col-lg-5">
															<select class="form-control" name="playeroffhome">
																<option></option>
																@foreach($teamhome as $teamplayer)
																@if(!empty($teamplayer->name))
																<option>{{$teamplayer->name}}</option>
																@endif
																@endforeach
															</select>
															<input type="hidden" value="{{$relations->teamhome}}" name="playerhometeam">
														</div>
														<div class="col-lg-5">
															<select class="form-control" name="playeroffaway">
																<option></option>
																@foreach($teamaway as $teamplayer2)
																@if(!empty($teamplayer2->name))
																<option>{{$teamplayer2->name}}</option>
																@endif
																@endforeach
															</select>
															<input type="hidden" value="{{$relations->teamaway}}" name="playerawayteam">
															<input type="hidden" value="{{$relations->id}}" name="relation_id">
														</div>
														<div class="col-lg-12"><br /></div>
														<div class="col-lg-2">
															Wchodzi
														</div>
														<div class="col-lg-5">
															<select class="form-control" name="playeronhome">
																<option></option>
																@foreach($teamhome as $teamplayer)
																@if(!empty($teamplayer->name))
																<option>{{$teamplayer->name}}</option>
																@endif
																@endforeach
															</select>
														</div>
														<div class="col-lg-5">
															<select class="form-control" name="playeronaway">
																<option></option>
																@foreach($teamaway as $teamplayer2)
																@if(!empty($teamplayer2->name))
																<option>{{$teamplayer2->name}}</option>
																@endif
																@endforeach
															</select>
															<input type="hidden" value="{{$relations->id}}" name="relation_id">
														</div>
														<div class="col-lg-12"><br /></div>
														<div class="col-lg-9"></div>
														<div class="col-lg-3">	
																<button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
														</div>
													</form>
													</div>
																	</div>
												<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
												</div>
												</div>

											</div>
										</div>	
									</div>
						</div>
					</div>
					<!-- PRAWA DESKTOP -->
					<div class="col-md-7">
						<div class="row">
							<div class="col-lg-12">
										<br />
										<b>Dodaj zdjęcia do relacji</b>
										<br /><br />
										<form action="{{ URL::to('/relation/addpost') }}" enctype="multipart/form-data" method="post">
										@csrf
										<input type="hidden" name="relations_id" value="{{$relations->id}}">
										<input type="hidden" value="/images/camera.png" name="icon" >
										<input type="file" class="form-control-file" name="image1">
										<input type="file" class="form-control-file" name="image2">
										<input type="file" class="form-control-file" name="image3">
										<input type="file" class="form-control-file" name="image4">
							</div>
							<div class="col-lg-7">
							
							</div>
							<div class="col-lg-3">	
											<button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
							</div></form>
						</div>
						<div class="row" style="margin-top:5%">
							<div class="col-lg-2">
										<b>Minuta</b>
									</div>
									<div class="col-lg-7">
										<b>Tekst wydarzenia</b>
									</div>
						</div>
						<form action="{{ URL::to('/relation/addpost') }}" enctype="multipart/form-data" method="post">
								@csrf
								<input type="hidden" name="relations_id" value="{{$relations->id}}">
								<input type="hidden" name="icon" value="/images/chat.png">
						<div class="row">
									<div class="col-lg-2">	
											<input type="text" name="time" class="form-control" id="exampleFormControlInput1" >
									</div>
									<div class="col-lg-7">	
											<textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									</div>
									<div class="col-lg-3">	
											<button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
									</div>
								</form>
						</div>
						<div class="row" style="margin-top-5%">
							<div class="col-lg-12">
								RELACJA:
							</div>
						</div>
						<div class="row" style="margin-top:5%">
									@foreach($post as $posts)
									<div class='col-lg-1'>
										<span style='font-size: 16px; color: #808080; font-family: Calibri;'>{{$posts->time}}</span>
									</div>
									<div class='col-lg-1'>
											<img src="{{$posts->icon}}" height="15px" />
									</div>
									<div class='col-lg-6'>
											<span style='font-size: 13px; color: #808080;'>{{$posts->text}}</span>
									</div>
									<div class='col-lg-2'>
											<button type="button" class="btn btn-block btn-warning btn-sm" data-toggle="modal" data-target="#modalEdit{{$posts->id}}">Edytuj</button>
											<!-- Modal -->
											<div class="modal fade" id="modalEdit{{$posts->id}}" role="dialog">
												<div class="modal-dialog">
    
												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Edycja wpisu</h4>
													</div>
													<div class="modal-body">
														<div class="row">
									<div class="col-lg-2">
										<b>Minuta</b>
									</div>
									<div class="col-lg-7">
										<b>Tekst wydarzenia</b>
									</div>
								</div>
								<div class="row">
								<form action="{{ URL::to('/relation/editpost') }}" enctype="multipart/form-data" method="post">
								@csrf
								<input type="hidden" name="post_id" value="{{$posts->id}}">
									<div class="col-lg-2">	
											<input type="text" name="time" value="{{$posts->time}}" class="form-control" id="exampleFormControlInput1" >
									</div>
									<div class="col-lg-7">	
											<textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$posts->text}}</textarea>
									</div>
									<div class="col-lg-3">	
											<button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
									</div>
								</form>
								</div>
													</div>
													<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
													</div>
												</div>
      
												</div>
											</div>
									</div>
									<div class='col-lg-2'>
											<form action="{{ URL::to('/relation/deletepost') }}" enctype="multipart/form-data" method="post">
											@csrf
											<button type="submit" value="{{$posts->id}}" name="post_id" class="btn btn-block btn-danger btn-sm">Usuń</button>
											</form>
									</div>
									<div class='col-lg-12'>
											<hr>
									</div>
									@endforeach
						</div>
					</div>
				</div>
			</div>
	</div>
</div>
<div class="container d-md-none">
	<div class="row justify-content-center">
			<div class="col-lg-12 contentbox">
				<div class="row justify-content-center">
					<div class="col-2 timemobile">
						{{$relations->status}}
					</div>
				</div>
				<div class="row">
					<div class="col-5">
						<div class="col-12  nameteammobile">
							{{$relations->teamhome}}
						</div>
					</div>
					<div class="col-2 resultmobiletwo">
						{{$relations->resulthometeam}} : {{$relations->resultawayteam}}
					</div>
					<div class="col-5 questteam">
						<div class="col-12 nameteammobile">
							{{$relations->teamaway}}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12"><br /></div>
					<div class="col-12">
						<div class="row">
							<div class="col-3">
								Link do relacji:
							</div>
							<div class="col-9">
								<input type="text" value="https://sportscore.eu/relation/{{$relations->id}}/show" class="form-control" id="exampleFormControlInput1" >
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 5%;">
					<div class="col-6">
										<input type="hidden" name="relation_id" value="{{$relations->id}}">
										<button type="button" class="btn btn-block btn-success" style="font-size:20px;" data-toggle="modal" data-target="#goalhome2">GOL </button>	
										<div id="goalhome2" class="modal fade" role="dialog">
											<div class="modal-dialog">

											<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">Gol dla gospodarzy</h4>
													</div>
												<div class="modal-body">
														<div class="row">
														<div class="col-3">
															<b>Minuta</b>
														</div>
														<div class="col-9">
															<b>Tekst wydarzenia</b>
														</div>
													</div>
													<div class="row">
													<form action="{{ URL::to('/relation/editgoal') }}" enctype="multipart/form-data" method="post">
													@csrf
														<input type="hidden" value="/images/goal.png" name="icon" >
														<input type="hidden" name="goalhome" value="1">
														<input type="hidden" name="relation_id" value="{{$relations->id}}">
														<div class="col-12">
														<div class="row">
														<div class="col-3">	
																<input type="text" name="time" class="form-control" id="exampleFormControlInput1" >
														</div>
														<div class="col-9">	
																<textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
														</div>
														<div class="col-8">
														</div>
														<div class="col-4">	
																<br /><button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
														</div>
														</div>
														</div>
													</form>
													</div>
																	</div>
												<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
												</div>
												</div>

											</div>
										</div>
					</div>
					<div class="col-6">
										<button type="submit" class="btn btn-block btn-success" data-toggle="modal" data-target="#goalaway2" style="font-size:20px;">GOL</button>	
										<div id="goalaway2" class="modal fade" role="dialog">
											<div class="modal-dialog">

											<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">Gol dla gości</h4>
													</div>
												<div class="modal-body">
														<div class="row">
														<div class="col-3">
															<b>Minuta</b>
														</div>
														<div class="col-9">
															<b>Tekst wydarzenia</b>
														</div>
													</div>
													<div class="row">
													<form action="{{ URL::to('/relation/editgoal') }}" enctype="multipart/form-data" method="post">
													@csrf
														<input type="hidden" value="/images/goal.png" name="icon" >
														<input type="hidden" name="goalaway" value="1">
														<input type="hidden" name="relation_id" value="{{$relations->id}}">
														<div class="col-12">
														<div class="row">
														<div class="col-3">	
																<input type="text" name="time" class="form-control" id="exampleFormControlInput1" >
														</div>
														<div class="col-9">	
																<textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
														</div>
														<div class="col-8">	
														</div>
														<div class="col-4">	
																<br /><button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
														</div>
														</div>
														</div>
													</form>
													</div>
																	</div>
												<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
												</div>
												</div>

											</div>
										</div>
					</div>
				</div>
				<div class="row" style="margin-top: 5%;">
					<div class="col-6">
							<form action="{{ URL::to('/relation/editgoal') }}" enctype="multipart/form-data" method="post">
							@csrf
							<input type="hidden" name="relation_id" value="{{$relations->id}}">
							<button type="submit" class="btn btn-block btn" name="goalhomeminus" value="1" style="font-size:17px;"> Odejmij gola </button>	
					</div>
					<div class="col-6">
							<button type="submit" class="btn btn-block btn" name="goalawayminus" value="1" style="font-size:17px;">Odejmij gola</button>	
							</form>
					</div>	
				</div>
						<div class="row">
								<div class="col-7">
									<form action="{{ URL::to('/relation/editstatus') }}" enctype="multipart/form-data" method="post">
									@csrf
										 <input type="hidden" name="id" value="{{$relations->id}}">
										 <select class="form-control" id="exampleFormControlSelect1" name="status">
												<option>przed meczem</option>
												<option>trwa I połowa</option>
												<option>przerwa</option>
												<option>trwa II połowa</option>
												<option>koniec meczu</option>
												<option>przerwany</option>
												<option>walkower</option>
												<option>odwołany</option>
										</select>	
									</div>
									<div class="col-5">
										<button type="submit" class="btn btn-block btn-primary">ZMIEŃ</button>
									</div>
									</form>
						</div>
						<div class="row" style="margin-top: 2%;">
										<div class="col-6">
										<button type="button" class="btn btn-block btn-default" style="font-size:20px;" data-toggle="modal" data-target="#teamhome2"><span style="font-size: 16px;">Składy gospodarzy</span></button>
										<div id="teamhome2" class="modal fade" role="dialog">
											<div class="modal-dialog modal-lg">

											<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<div class="row">
														<div class="col-lg-12">
															<h4 class="modal-title">Skład gospodarzy</h4>
														</div>
													</div>
													</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-12">
															<b>SKŁAD PODSTAWOWY</b>
														</div>
													</div>
													<div class="row">
														<div class="col-3">
															<b>Numer</b>
														</div>
														<div class="col-9">
															<b>Imię i nazwisko</b>
														</div>
													</div>
													<form action="{{ URL::to('/relation/addsquad') }}" enctype="multipart/form-data" method="post">
													@csrf
														<input type="hidden" value="{{$relations->id}}" name="relations_id">
														<input type="hidden" value="{{$relations->teamhome}}" name="team">
														@foreach($teamhome as $teamplayer)
													<div class="row" style="margin-top: 2%">
														<div class="col-3">	
																<input type="text" name="number[]" value="{{$teamplayer->number}}" class="form-control" id="exampleFormControlInput1" >
														</div>
														<div class="col-9">	
																<input type="text" name="name[]" value="{{$teamplayer->name}}" class="form-control" id="exampleFormControlInput1" >
																<input type="hidden" value="{{$teamplayer->position}}" name="position[]">
														</div>
													</div>
														@if ($teamplayer->position === 'position10')
														<div class="row" style="margin-top: 2%">
															<div class="col-12">
																<b>SKŁAD REZERWOWY</b>
															</div>
														</div>
														<div class="row">
															<div class="col-3">
																<b>Numer</b>
															</div>
															<div class="col-9">
																<b>Imię i nazwisko</b>
															</div>
														</div>
														@endif
														@endforeach 
														@for($i=count($teamhome); $i < 18; $i++)
														<div class="row">
															<div class="col-3">	
																<input type="text" name="number[]" class="form-control" id="exampleFormControlInput1" >
															</div>
															<div class="col-9">	
																<input type="text" name="name[]" class="form-control" id="exampleFormControlInput1" >
																<input type="hidden" value="position{{$i}}" name="position[]">
															</div>
														</div>
														<div class="row">
															<div class="col-12">	
																<br />
															</div>
														</div>
														@if ($i == 10)
														<div class="row" style="margin-top: 2%">
															<div class="col-12">
																<b>SKŁAD REZERWOWY</b>
															</div>
														</div>
														<div class="row">
															<div class="col-3">
																<b>Numer</b>
															</div>
															<div class="col-9">
																<b>Imię i nazwisko</b>
															</div>
														
														</div>
														@endif
														@endfor
														<div class="row">
															<div class="col-lg-12">	
																<br />
															</div>
														</div>
														<div class="row">
															<div class="col-lg-9">	
																
															</div>
															<div class="col-lg-3">	
																<button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
															</div>
														</div>
													</form>
																	</div> 
												<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
												</div>
												</div>

											</div>
										</div>		
									</div>
										<div class="col-6">
										<button type="button" class="btn btn-block btn-default" style="font-size:20px;" data-toggle="modal" data-target="#teamaway2"><span style="font-size: 16px;">Składy gości</span></button>
										<div id="teamaway2" class="modal fade" role="dialog">
											<div class="modal-dialog modal-lg">

											<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<div class="row">
														<div class="col-lg-12">
															<h4 class="modal-title">Skład gości</h4>
														</div>
													</div>
													</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-12">
															<b>SKŁAD PODSTAWOWY</b>
														</div>
													</div>
													<div class="row">
														<div class="col-3">
															<b>Numer</b>
														</div>
														<div class="col-9">
															<b>Imię i nazwisko</b>
														</div>
													</div>
													<form action="{{ URL::to('/relation/addsquad2') }}" enctype="multipart/form-data" method="post">
													@csrf
														<input type="hidden" value="{{$relations->id}}" name="relations_id">
														<input type="hidden" value="{{$relations->teamaway}}" name="team">
														@foreach($teamaway as $teamplayer)
													<div class="row" style="margin-top: 2%">
														<div class="col-3">	
																<input type="text" name="number2[]" value="{{$teamplayer->number}}" class="form-control" id="exampleFormControlInput1" >
														</div>
														<div class="col-9">	
																<input type="text" name="name2[]" value="{{$teamplayer->name}}" class="form-control" id="exampleFormControlInput1" >
																<input type="hidden" value="{{$teamplayer->position}}" name="position2[]">
														</div>
													</div>
														@if ($teamplayer->position === 'position210')
														<div class="row" style="margin-top: 2%">
															<div class="col-12">
																<b>SKŁAD REZERWOWY</b>
															</div>
														</div>
														<div class="row">
															<div class="col-3">
																<b>Numer</b>
															</div>
															<div class="col-9">
																<b>Imię i nazwisko</b>
															</div>
														</div>
														@endif
														@endforeach
														@for($i=count($teamaway); $i < 18; $i++)
														<div class="row">
															<div class="col-3">	
																<input type="text" name="number2[]" class="form-control" id="exampleFormControlInput1" >
															</div>
															<div class="col-9">	
																<input type="text" name="name2[]" class="form-control" id="exampleFormControlInput1" >
																<input type="hidden" value="position2{{$i}}" name="position2[]">
															</div>
														</div>
														<div class="row">
															<div class="col-12">	
																<br />
															</div>
														</div>
														@if ($i == 10)
														<div class="row" style="margin-top: 2%">
															<div class="col-12">
																<b>SKŁAD REZERWOWY</b>
															</div>
														</div>
														<div class="row">
															<div class="col-3">
																<b>Numer</b>
															</div>
															<div class="col-9">
																<b>Imię i nazwisko</b>
															</div>
														
														</div>
														@endif
														@endfor
														<div class="row">
															<div class="col-12">	
																<br />
															</div>
														</div>
														<div class="row">
															<div class="col-lg-9">	
																
															</div>
															<div class="col-lg-3">	
																<button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
															</div>
														</div>
													</form>
																	</div>
												<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
												</div>
												</div>

											</div>
										</div>		
									</div>
						</div>
						<div class="row" style="margin-top: 5%;">
							<div class="col-3">
										<button type="button" class="btn btn-block btn-warning" style="font-size:14px;" data-toggle="modal" data-target="#yellowcard2"><img src="{{ asset('images/yellowcard.png') }}" /><span style="font-size: 12px;"><br />Żółta <br />kartka</span></button>	
										<div id="yellowcard2" class="modal fade" role="dialog">
											<div class="modal-dialog">

											<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title">Żółta kartka</h4>
													</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-3">
															<b>Minuta</b>
														</div>
														<div class="col-9">
															<b>Tekst wydarzenia</b>
														</div>
													</div>
													<form action="{{ URL::to('/relation/addpost') }}" enctype="multipart/form-data" method="post">
													@csrf
														<input type="hidden" value="/images/yellowcard.png" name="icon" >
														<input type="hidden" name="relations_id" value="{{$relations->id}}">
													<div class="row">
														<div class="col-3">	
																<input type="text" name="time" class="form-control" id="exampleFormControlInput1" >
														</div>
														<div class="col-9">	
																<textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-6">
															<b>Zawodnik gospodarzy</b>
														</div>
														<div class="col-lg-6">
															<select class="form-control" name="cardplayerhome">
																<option></option>
																@foreach($teamhome as $teamplayer)
																@if(!empty($teamplayer->name))
																<option>{{$teamplayer->name}}</option>
																@endif
																@endforeach
															</select>
															<input type="hidden" value="{{$relations->teamhome}}" name="cardplayerhometeam">
														</div>
														<div class="col-lg-6">
															<b>Zawodnik gości</b>
														</div>
														<div class="col-lg-6">
															<select class="form-control" name="cardplayeraway">
																<option></option>
																@foreach($teamaway as $teamplayer2)
																@if(!empty($teamplayer2->name))
																<option>{{$teamplayer2->name}}</option>
																@endif
																@endforeach
															</select>
															<input type="hidden" value="{{$relations->teamaway}}" name="cardplayerawayteam">
															<input type="hidden" value="yellow" name="typecard">
															<input type="hidden" value="{{$relations->id}}" name="relation_id">
														</div>
														<div class="col-lg-12"><br /></div>
														<div class="col-lg-9"></div>
														<div class="col-lg-3">	
																<button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
														</div>
													</form>
													</div>
																	</div>
												<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
												</div>
												</div>

											</div>
										</div>									
									</div>
									<div class="col-3">
										<button type="button" class="btn btn-block btn-warning" style="font-size:14px;" data-toggle="modal" data-target="#twoyellowcard2"><img src="{{ asset('images/yellowred.png') }}" height="27px" /><span style="font-size: 12px;"><br />Druga <br />żółta</span></button>	
										<div id="twoyellowcard2" class="modal fade" role="dialog">
											<div class="modal-dialog">

											<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title">Druga żółta kartka</h4>
													</div>
												<div class="modal-body">
														<div class="row">
														<div class="col-3">
															<b>Minuta</b>
														</div>
														<div class="col-9">
															<b>Tekst wydarzenia</b>
														</div>
													</div>
													<form action="{{ URL::to('/relation/addpost') }}" enctype="multipart/form-data" method="post">
													@csrf
														<input type="hidden" value="/images/yellowred.png" name="icon" >
														<input type="hidden" name="relations_id" value="{{$relations->id}}">
													<div class="row">													
														<div class="col-3">	
																<input type="text" name="time" class="form-control" id="exampleFormControlInput1" >
														</div>
														<div class="col-9">	
																<textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
														</div>
													</div>
														<div class="row">
														<div class="col-lg-6">
															<b>Zawodnik gospodarzy</b>
														</div>
														<div class="col-lg-6">
															<select class="form-control" name="cardplayerhome">
																<option></option>
																@foreach($teamhome as $teamplayer)
																@if(!empty($teamplayer->name))
																<option>{{$teamplayer->name}}</option>
																@endif
																@endforeach
															</select>
															<input type="hidden" value="{{$relations->teamhome}}" name="cardplayerhometeam">
														</div>
														<div class="col-lg-6">
															<b>Zawodnik gości</b>
														</div>
														<div class="col-lg-6">
															<select class="form-control" name="cardplayeraway">
																<option></option>
																@foreach($teamaway as $teamplayer2)
																@if(!empty($teamplayer2->name))
																<option>{{$teamplayer2->name}}</option>
																@endif
																@endforeach
															</select>
															<input type="hidden" value="{{$relations->teamaway}}" name="cardplayerawayteam">
															<input type="hidden" value="yellowred" name="typecard">
															<input type="hidden" value="{{$relations->id}}" name="relation_id">
														</div>
														<div class="col-lg-12"><br /></div>
														<div class="col-lg-9"></div>
														<div class="col-lg-3">	
																<button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
														</div>
													</form>
													</div>
													</div>
												<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
												</div>
												</div>

											</div>
										</div>	
									</div>
									<div class="col-3">
										<button type="button" class="btn btn-block btn-danger"  data-toggle="modal" data-target="#redcard2"><img src="{{ asset('images/redcard.png') }}" /><span style="font-size: 12px;"><br />Czerwona <br />kartka</span></button>	
										<div id="redcard2" class="modal fade" role="dialog">
											<div class="modal-dialog">

											<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title">Czerwona kartka</h4>
													</div>
												<div class="modal-body">
														<div class="row">
														<div class="col-3">
															<b>Minuta</b>
														</div>
														<div class="col-9">
															<b>Tekst wydarzenia</b>
														</div>
													</div>
													<form action="{{ URL::to('/relation/addpost') }}" enctype="multipart/form-data" method="post">
													@csrf
														<input type="hidden" value="/images/redcard.png" name="icon" >
														<input type="hidden" name="relations_id" value="{{$relations->id}}">
													<div class="row">
														<div class="col-3">	
																<input type="text" name="time" class="form-control" id="exampleFormControlInput1" >
														</div>
														<div class="col-9">	
																<textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-6">
															<b>Zawodnik gospodarzy</b>
														</div>
														<div class="col-lg-6">
															<select class="form-control" name="cardplayerhome">
																<option></option>
																@foreach($teamhome as $teamplayer)
																@if(!empty($teamplayer->name))
																<option>{{$teamplayer->name}}</option>
																@endif
																@endforeach
															</select>
															<input type="hidden" value="{{$relations->teamhome}}" name="cardplayerhometeam">
														</div>
														<div class="col-lg-6">
															<b>Zawodnik gości</b>
														</div>
														<div class="col-lg-6">
															<select class="form-control" name="cardplayeraway">
																<option></option>
																@foreach($teamaway as $teamplayer2)
																@if(!empty($teamplayer2->name))
																<option>{{$teamplayer2->name}}</option>
																@endif
																@endforeach
															</select>
															<input type="hidden" value="{{$relations->teamaway}}" name="cardplayerawayteam">
															<input type="hidden" value="red" name="typecard">
															<input type="hidden" value="{{$relations->id}}" name="relation_id">
														</div>
														<div class="col-lg-12"><br /></div>
														<div class="col-lg-9"></div>
														<div class="col-lg-3">	
																<button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
														</div>
													</form>
													</div>
																	</div>
												<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
												</div>
												</div>

											</div>
										</div>	
									</div>
									<div class="col-3">
										<button type="button" class="btn btn-block btn-primary" style="font-size:14px;" data-toggle="modal" data-target="#change2" ><img src="{{ asset('images/change.png') }}" height="27px" /><span style="font-size: 12px;"><br />Zmiana <br />gracza</span></button>	
										<div id="change2" class="modal fade" role="dialog">
											<div class="modal-dialog">

											<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title">Zmiana gracza</h4>
													</div>
												<div class="modal-body">
														<div class="row">
														<div class="col-3">
															<b>Minuta</b>
														</div>
														<div class="col-9">
															<b>Tekst wydarzenia</b>
														</div>
													</div>
													<form action="{{ URL::to('/relation/addpost') }}" enctype="multipart/form-data" method="post">
													@csrf
														<input type="hidden" value="/images/change.png" name="icon" >
														<input type="hidden" name="relations_id" value="{{$relations->id}}">
													<div class="row">
														<div class="col-3">	
																<input type="text" name="time" class="form-control" id="exampleFormControlInput1" >
														</div>
														<div class="col-9">	
																<textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-2">
														</div>
														<div class="col-lg-5">
															<b>Zawodnik gospodarzy</b>
														</div>
														<div class="col-lg-2">
															Schodzi
														</div>
														<div class="col-lg-5">
															<select class="form-control" name="playeroffhome">
																<option></option>
																@foreach($teamhome as $teamplayer)
																@if(!empty($teamplayer->name))
																<option>{{$teamplayer->name}}</option>
																@endif
																@endforeach
															</select>
															<input type="hidden" value="{{$relations->teamhome}}" name="playerhometeam">
														</div>
														<div class="col-lg-2">
															Wchodzi
														</div>
														<div class="col-lg-5">
															<select class="form-control" name="playeronhome">
																<option></option>
																@foreach($teamhome as $teamplayer)
																@if(!empty($teamplayer->name))
																<option>{{$teamplayer->name}}</option>
																@endif
																@endforeach
															</select>
														</div>
														<div class="col-lg-5">
															<b>Zawodnik gości</b>
														</div>
														<div class="col-lg-2">
															Schodzi
														</div>
														<div class="col-lg-5">
															<select class="form-control" name="playeroffaway">
																<option></option>
																@foreach($teamaway as $teamplayer2)
																@if(!empty($teamplayer2->name))
																<option>{{$teamplayer2->name}}</option>
																@endif
																@endforeach
															</select>
															<input type="hidden" value="{{$relations->teamaway}}" name="playerawayteam">
															<input type="hidden" value="{{$relations->id}}" name="relation_id">
														</div>
														<div class="col-lg-2">
															Wchodzi
														</div>
														<div class="col-lg-5">
															<select class="form-control" name="playeronaway">
																<option></option>
																@foreach($teamaway as $teamplayer2)
																@if(!empty($teamplayer2->name))
																<option>{{$teamplayer2->name}}</option>
																@endif
																@endforeach
															</select>
															<input type="hidden" value="{{$relations->id}}" name="relation_id">
														</div>
														<div class="col-lg-12"><br /></div>
														<div class="col-lg-9"></div>
														<div class="col-lg-3">	
																<button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
														</div>
													</form>
													</div>
																	</div>
												<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
												</div>
												</div>

											</div>
										</div>	
									</div>
						</div>
						<div class="row" style="margin-top: 5%;">
							<div class="col-12">
										<br />
										<b>Dodaj zdjęcia do relacji</b>
										<br /><br />
										<form action="{{ URL::to('/relation/addpost') }}" enctype="multipart/form-data" method="post">
										@csrf
										<input type="hidden" name="relations_id" value="{{$relations->id}}">
										<input type="hidden" value="/images/camera.png" name="icon" >
										<input type="file" class="form-control-file" name="image1">
										<input type="file" class="form-control-file" name="image2">
										<input type="file" class="form-control-file" name="image3">
										<input type="file" class="form-control-file" name="image4">
							</div>
							<div class="col-7">
							
							</div>
							<div class="col-5">	
											<button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
							</div></form>
						</div>
						<div class="row" style="margin-top: 5%;">
									<div class="col-3">
										<b>Minuta</b>
									</div>
									<div class="col-9">
										<b>Tekst wydarzenia</b>
									</div>
									<form action="{{ URL::to('/relation/addpost') }}" enctype="multipart/form-data" method="post">
								@csrf
								<input type="hidden" name="relations_id" value="{{$relations->id}}">
								<input type="hidden" name="icon" value="/images/chat.png">
								<div class="col-12">
								<div class="row">
									<div class="col-3">	
											<input type="text" name="time" class="form-control" id="exampleFormControlInput1" >
									</div>
									<div class="col-9">	
											<textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									</div>
									<div class="col-8">	
									
									</div>
									<div class="col-4">	
											<br /><button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
									</div>
								</div>
								</div>
								</form>
						</div>
						<div class="row" style="margin-top-5%">
							<div class="col-lg-12">
								RELACJA:
							</div>
						</div>
						<div class="row" style="margin-top:5%">
									@foreach($post as $posts)
									<div class='col-2'>
										<span style='font-size: 16px; color: #808080; font-family: Calibri;'>{{$posts->time}}</span>
									</div>
									<div class='col-1'>
											<img src="{{$posts->icon}}" height="15px" />
									</div>
									<div class='col-8'>
											<span style='font-size: 13px; color: #808080;'>{{$posts->text}}</span>
									</div>
									<div class='col-3'>
									
									</div>
									<div class='col-3'>
											<button type="button" class="btn btn-block btn-warning btn-sm" data-toggle="modal" data-target="#modalEdit2{{$posts->id}}">Edytuj</button>
											<!-- Modal -->
											<div class="modal fade" id="modalEdit2{{$posts->id}}" role="dialog">
												<div class="modal-dialog">
    
												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Edycja wpisu</h4>
													</div>
													<div class="modal-body">
														<div class="row">
									<div class="col-3">
										<b>Minuta</b>
									</div>
									<div class="col-9">
										<b>Tekst wydarzenia</b>
									</div>
								</div>
								<form action="{{ URL::to('/relation/editpost') }}" enctype="multipart/form-data" method="post">
								@csrf
								<input type="hidden" name="post_id" value="{{$posts->id}}">
								<div class="row">
									<div class="col-3">	
											<input type="text" name="time" value="{{$posts->time}}" class="form-control" id="exampleFormControlInput1" >
									</div>
									<div class="col-9">	
											<textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$posts->text}}</textarea>
									</div>
									<div class="col-8">	
									</div>
									<div class="col-4">	
											<br /><button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
									</div>
								</form>
								</div>
													</div>
													<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
													</div>
												</div>
      
												</div>
											</div>
									</div>
									<div class='col-3'>
											<form action="{{ URL::to('/relation/deletepost') }}" enctype="multipart/form-data" method="post">
											@csrf
											<button type="submit" value="{{$posts->id}}" name="post_id" class="btn btn-block btn-danger btn-sm">Usuń</button>
											</form>
									</div>
									<div class='col-12'>
											<hr>
									</div>
									@endforeach
						</div>
						</div>
						
			</div>
	</div>
</div>
<br />
@endsection