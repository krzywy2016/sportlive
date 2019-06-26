@extends('admin')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="col-lg-1"></div>
		<div class="col-lg-10 firsttiles">
			<img src="images/relation.png" height="40px" /> <span style="font-weight: bold">MOJE RELACJE LIVE</span>
		</div>
	</div>
</div>
<div class="row">
		<div class="col-lg-12">
				<div class="col-lg-1"></div>
				<div class="col-lg-10">
					<div class="contentbox">
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
										<th>LIVE</th>
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
										<td><a href="{{ route('relation.edit', [$relation->id]) }}"><button type="button" class="btn btn-success btn-xs">Prowadź</button></a></td>
										<td><button type="button" class="btn btn-warning btn-xs">Edytuj</button></td>
										<td><button type="button" class="btn btn-danger btn-xs">Usuń</button></td>
				
									</tr>
							@endforeach
							</tbody>
							</table>
					</div>
				</div>
		</div>
</div>
@endsection