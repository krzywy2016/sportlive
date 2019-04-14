@extends('admin')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="col-lg-1"></div>
		<div class="col-lg-10 firsttiles">
			<img src="images/relation.png" height="20px" /> Moje relacje live
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
										<th>Edytuj</th>
										<th>Live</th>
										<th>Usuń</th>
									</tr>
								</thead>
							<tbody>
							</tbody>
							</table>
					</div>
				</div>
		</div>
</div>
@endsection