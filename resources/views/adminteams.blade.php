@extends('admin')

@section('content')
@can('admin-only', Auth::user())
<div class="row">
	<div class="col-lg-12">
		<div class="col-lg-1"></div>
		<div class="col-lg-10 firsttiles">
			<img src="{{ asset('images/teamwork.png') }}" height="40px" /> <span style="font-weight: bold">ZESPOŁY</span>
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
										<th>Nazwa</th>
										<th>Herb</th>
										<th>Miejscowość</th>
										<th>Stadion</th>
										<th>Utworzony</th>
										<th>Edytuj</th>
										<th>Usuń</th>
									</tr>
								</thead>
							<tbody>
								@foreach($teams as $team)
									<tr>
										<td>{{$team->id}}</td>
										<td>{{$team->name}}</td>
										<td></td>
										<td>{{$team->city}}</td>
										<td>{{$team->stadium}}</td>
										<td>{{$team->created_at}}</td>
										<td><button type="submit" class="btn btn-warning btn-xs">Edytuj</button></td>
										<td><button type="button" class="btn btn-danger btn-xs">Usuń</button></td>
				
									</tr>
								@endforeach
							</tbody>
							</table>
					</div>
				</div>
		</div>
</div>
@endcan
@endsection