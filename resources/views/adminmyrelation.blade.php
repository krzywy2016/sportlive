@extends('admin')

@section('content')
<div class="container">
		<div class="row">
			<div class="col-12 col-lg-12 firsttiles">
				<img src="images/relation.png" height="30px" /><span style="font-weight: bold"> MOJE RELACJE LIVE</span>
			</div>
		</div>
</div>
	<div class="container d-none d-md-block">
		<div class="row justify-content-center">
			<div class="col-lg-12 contentbox">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Gospodarze</th>
										<th>Goście</th>
										<th>Data</th>
										<th>Godzina</th>
										<th>Wynik</th>
										<th>Miejsce</th>
										<th>Prowadź</th>
										<th>Edytuj</th>
										<th>Usuń</th>
									</tr>
								</thead>
							<tbody>
							@foreach($relations as $relation)
									<tr>
										<td>{{$relation->id}}</td>
										<td>{{$relation->teamhome}}</td>
										<td>{{$relation->teamaway}}</td>
										<td>{{$relation->matchdate}}</td>
										<td>{{$relation->hour}}</td>
										<td>{{$relation->resulthometeam}} : {{$relation->resultawayteam}}</td>
										<td>{{$relation->matchplace}}</td>
										<td><a href="{{ route('relation.edit', [$relation->id]) }}"><button type="button" class="btn btn-success btn-sm">Prowadź</button></a></td>
										<td><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editmatch">Edytuj</button></td>
										<div id="editmatch" class="modal fade" role="dialog">
											<div class="modal-dialog modal-lg">

											<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<div class="row">
															<div class="col-md-12">
																<h4 class="modal-title">Edycja danych meczowych</h4>
															</div>
														</div>
															
													</div>
												<div class="modal-body">
													<form action="{{ URL::to('/relation/update') }}" enctype="multipart/form-data" method="post">
													@csrf
														<input type="hidden" name="relation_id" value="{{$relation->id}}">
														<div class="row justify-content-center">
															<div class="col-7 col-md-2">
										<div class="form-group">
											<label for="druzynagospodarzy">Data meczu</label>
											<input class="form-control" value="{{$relation->matchdate}}" type="date"  id="example-date-input" name="date">
											<small id="goscie" class="form-text text-muted">kliknij w okienko</small>
										</div>
								</div>
								<div class="col-4 col-md-2">
										<div class="form-group">
											<label for="druzynagospodarzy">Godzina</label>
											<input class="form-control" value="{{$relation->hour}}" type="time" id="example-time-input" name="hour">
											<small id="goscie" class="form-text text-muted">Przykład: 18:00</small>
										</div>
								</div>
								<div class="col-3 col-md-1">
										<div class="form-group">
											<label for="druzynagospodarzy">Kolejka</label>
											<input class="form-control" value="{{$relation->round}}" type="text" id="example-time-input" name="round">
											<small id="goscie" class="form-text text-muted">Przykład: 30</small>
										</div>
								</div>
								<div class="col-8 col-md-3">
										<div class="form-group">
											<label for="druzynagospodarzy">Miejscowość</label>
											<input type="text" class="form-control" value="{{$relation->matchplace}}" name="city" placeholder="kliknij tutaj..." name="city">
											<small id="goscie" class="form-text text-muted">Przykład: Rzeszów</small>
										</div>
								</div>
								<div class="col-5 col-md-2">
										<div class="form-group">
											<label for="druzynagospodarzy">Liga</label>
											<input type="text" class="form-control" value="{{$relation->league}}" name="league" placeholder="kliknij tutaj..." name="league">
											<small id="goscie" class="form-text text-muted">B Klasa, Sparing itp.</small>
										</div>
								</div>
															<div class="col-md-2 align-self-center">	
																<button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
															</div>
													</form>
													</div>
													</form>
												</div>
												</div>
											</div>
										</div>
										<td><a href="{{ route('relation.delete', [$relation->id]) }}"><button type="button" class="btn btn-danger btn-sm">Usuń</button></a></td>
				
									</tr>
							@endforeach
							</tbody>
							</table>
			</div>	
		</div>
	</div>
	<div class="container d-md-none">
		<div class="row justify-content-center">
			<div class="col-lg-12 contentbox">
							<table class="table table-striped">
								<thead>
									<tr>
										<th><span style="font-size: 9px">#</span></th>
										<th><span style="font-size: 9px">Gospodarze</span></th>
										<th><span style="font-size: 9px">Goście</span></th>
										<th><span style="font-size: 9px">Data</span></th>
										<th><span style="font-size: 9px">Miejsce</span></th>
									</tr>
								</thead>
							<tbody>
							@foreach($relations as $relation)
									<tr>
										<td><span style="font-size: 9px">{{$relation->id}}</span></td>
										<td><span style="font-size: 9px">{{$relation->teamhome}}</span></td>
										<td><span style="font-size: 9px">{{$relation->teamaway}}</span></td>
										<td><span style="font-size: 9px"><div>{{$relation->matchdate}}</div><div>{{$relation->hour}}</div></span></td>
										<td><span style="font-size: 9px">{{$relation->matchplace}}</span></td>
									</tr>
									<tr>
										<td></td>
										<td>
											<a href="{{ route('relation.edit', [$relation->id]) }}">
											<button type="button" class="btn btn-success btn-sm"><span style="font-size: 9px">Prowadź</span></button></a>
										</td>
										<td>
											<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editmatch2"><span style="font-size: 9px">Edytuj</span></button>
											<div id="editmatch2" class="modal fade" role="dialog">
											<div class="modal-dialog modal-lg">

											<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<div class="row">
															<div class="col-md-12">
																<h4 class="modal-title">Edycja danych meczowych</h4>
															</div>
														</div>
															
													</div>
												<div class="modal-body">
													<form action="{{ URL::to('/relation/update') }}" enctype="multipart/form-data" method="post">
													@csrf
														<input type="hidden" name="relation_id" value="{{$relation->id}}">
														<div class="row justify-content-center">
															<div class="col-7 col-md-2">
										<div class="form-group">
											<label for="druzynagospodarzy">Data meczu</label>
											<input class="form-control" value="{{$relation->matchdate}}" type="date"  id="example-date-input" name="date">
											<small id="goscie" class="form-text text-muted">kliknij w okienko</small>
										</div>
								</div>
								<div class="col-4 col-md-2">
										<div class="form-group">
											<label for="druzynagospodarzy">Godzina</label>
											<input class="form-control" value="{{$relation->hour}}" type="time" id="example-time-input" name="hour">
											<small id="goscie" class="form-text text-muted">Przykład: 18:00</small>
										</div>
								</div>
								<div class="col-3 col-md-1">
										<div class="form-group">
											<label for="druzynagospodarzy">Kolejka</label>
											<input class="form-control" value="{{$relation->round}}" type="text" id="example-time-input" name="round">
											<small id="goscie" class="form-text text-muted">Przykład: 30</small>
										</div>
								</div>
								<div class="col-8 col-md-3">
										<div class="form-group">
											<label for="druzynagospodarzy">Miejscowość</label>
											<input type="text" class="form-control" value="{{$relation->matchplace}}" name="city" placeholder="kliknij tutaj..." name="city">
											<small id="goscie" class="form-text text-muted">Przykład: Rzeszów</small>
										</div>
								</div>
								<div class="col-5 col-md-2">
										<div class="form-group">
											<label for="druzynagospodarzy">Liga</label>
											<input type="text" class="form-control" value="{{$relation->league}}" name="league" placeholder="kliknij tutaj..." name="league">
											<small id="goscie" class="form-text text-muted">B Klasa, Sparing itp.</small>
										</div>
								</div>
															<div class="col-md-2 align-self-center">	
																<button type="submit" class="btn btn-block btn-primary">WYŚLIJ</button>
															</div>
													</form>
													</div>
													</form>
												</div>
												</div>
											</div>
										</div>
										</td>
										<td>
											<a href="{{ route('relation.delete', [$relation->id]) }}"><button type="button" class="btn btn-danger btn-sm"><span style="font-size: 9px">Usuń</span></button></a>
										</td>
										<td></td>
									</tr>
							@endforeach
							</tbody>
							</table>
			</div>	
		</div>
	</div><br />
@endsection