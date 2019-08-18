@extends('admin')

@section('content')
@can('admin-only', Auth::user())
<div class="container">
		<div class="row">
			<div class="col-12 col-lg-12 firsttiles">
				<img src="{{ asset('images/team.png') }}" height="40px" /> <span style="font-weight: bold"> UŻYTKOWNICY</span>
			</div>
		</div>
	</div>
	<div class="container d-none d-md-block">
		<div class="row">
			<div class="col-12 col-lg-12 contentbox">
				<table class="table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Nazwa</th>
										<th>Email</th>
										<th>Ostatnio widziany</th>
										<th>IP</th>
										<th>Zarejestrowany</th>
										<th>Edytuj</th>
										<th>Usuń</th>
									</tr>
								</thead>
							<tbody>
								@foreach($users as $user)
									<tr>
										<td>{{$user->id}}</td>
										<td>{{$user->name}}</td>
										<td>{{$user->email}}</td>
										<td>{{$user->last_visit}}</td>
										<td>{{$user->last_login_ip}}</td>
										<td>{{$user->created_at}}</td>
										<td><button type="submit" class="btn btn-warning btn-sm">Edytuj</button></td>
										<td><button type="button" class="btn btn-danger btn-sm">Usuń</button></td>
				
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
										<th><span style="font-size: 9px">Nazwa</span></th>
										<th><span style="font-size: 9px">Ostatnio</span></th>
										<th><span style="font-size: 9px">Zarejestr.</span></th>
										<th></th>
										<th></th>
									</tr>
								</thead>
							<tbody>
							@foreach($users as $user)
									<tr>
										<td><span style="font-size: 9px">{{$user->name}}</span></td>
										<td><span style="font-size: 9px">{{$user->last_visit}}</span></td>
										<td><span style="font-size: 9px">{{$user->created_at}}</span></td>
										<td><button type="button" class="btn btn-warning btn-sm"><span style="font-size: 9px">Edytuj</span></button></td>
										<td><button type="button" class="btn btn-danger btn-sm"><span style="font-size: 9px">Usuń</span></button></td>
									</tr>
							@endforeach
							</tbody>
							</table>
			</div>	
		</div>
	</div><br />
@endcan
@endsection