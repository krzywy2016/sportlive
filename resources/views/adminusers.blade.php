@extends('admin')

@section('content')
@can('admin-only', Auth::user())
<div class="row">
	<div class="col-lg-12">
		<div class="col-lg-1"></div>
		<div class="col-lg-10 firsttiles">
			<img src="{{ asset('images/team.png') }}" height="20px" /> Użytkownicy
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