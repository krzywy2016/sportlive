@extends('admin')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="col-lg-12 firsttiles">
			<img src="{{asset('images/relation.png')}}" height="20px" /> Relacja live: {{$relations->teamhome}} vs. {{ $relations->teamaway}}
		</div>
	</div>
</div>
<div class="row">
		<div class="col-lg-12">
				<div class="col-lg-12">
					<div class="contentbox">
						<div class="row">
							<div class="col-lg-5">
								<div class="row">
									<div class="col-lg-5">
						
									</div>
									<div class="col-lg-2 time">
											{{$relations->status}}
									</div>
									<div class="col-lg-5">
						
									</div>
								</div>
								<div class="row">
									<div class="col-lg-5">
										<div class="col-lg-12  nameteam">
											{{$relations->teamhome}}
										</div>
									</div>
									<div class="col-lg-2 result">
										0 : 0
									</div>
									<div class="col-lg-5 questteam">
										<div class="col-lg-12 nameteam">
											{{$relations->teamaway}}
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<br />
									</div>
									<div class="col-lg-6">
										<button type="button" class="btn btn-block btn-success" style="font-size:20px;">GOL </button>	
									</div>
									<div class="col-lg-6">
										<button type="button" class="btn btn-block btn-success" style="font-size:20px;">GOL</button>	
									</div>
								</div>	
								<div class="row">
									<div class="col-lg-12">
										<br />
									</div>
									<div class="col-lg-6">
										<button type="button" class="btn btn-block btn" style="font-size:17px;">Odejmij gola </button>	
									</div>
									<div class="col-lg-6">
										<button type="button" class="btn btn-block btn" style="font-size:17px;">Odejmij gola</button>	
									</div>
								</div>	
								<div class="row">
									<div class="col-lg-12">
										<br />
									</div>
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
									<div class="col-lg-12">
										<br />
									</div>
									<div class="col-lg-6">
										<button type="button" class="btn btn-block btn-default" style="font-size:20px;">Składy gospodarzy</button>	
									</div>
									<div class="col-lg-6">
										<button type="button" class="btn btn-block btn-default" style="font-size:20px;">Skład gości</button>	
									</div>
								</div>	
								<div class="row">
									<div class="col-lg-12">
										<br />
									</div>
									<div class="col-lg-3">
										<button type="button" class="btn btn-block btn-warning" style="font-size:14px;"><span style="font-size:1.5em;" class="glyphicon glyphicon-file" aria-hidden="true"></span><br /><br />Żółta <br />kartka</button>	
									</div>
									<div class="col-lg-3">
										<button type="button" class="btn btn-block btn-warning" style="font-size:14px;"><span style="font-size:1.5em;" class="glyphicon glyphicon-duplicate" aria-hidden="true"></span><br /><br />Druga <br />żółta</button>	
									</div>
									<div class="col-lg-3">
										<button type="button" class="btn btn-block btn-danger" style="font-size:14px;"><span style="font-size:1.5em;" class="glyphicon glyphicon-file" aria-hidden="true"></span><br /><br />Czerwona <br />kartka</button>	
									</div>
									<div class="col-lg-3">
										<button type="button" class="btn btn-block btn-primary" style="font-size:14px;"><span style="font-size:1.5em;" class="glyphicon glyphicon-sort" aria-hidden="true"></span><br /><br />Zmiana <br />zawodnika</button>	
									</div>
								</div>
						</div>
							<div class="col-lg-7">
								<div class="row">
									<div class="col-lg-12">
										<br />
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<br />
										<b>Dodaj zdjęcia do relacji</b>
										<br /><br />
										<input type="file" class="form-control-file" id="exampleFormControlFile1">
										<input type="file" class="form-control-file" id="exampleFormControlFile1">
										<input type="file" class="form-control-file" id="exampleFormControlFile1">
										<input type="file" class="form-control-file" id="exampleFormControlFile1">
										<input type="file" class="form-control-file" id="exampleFormControlFile1">
									</div>
									<div class="col-lg-7">	
											
									</div>
									<div class="col-lg-3">	
											<button type="button" class="btn btn-block btn-primary">WYŚLIJ</button>
									</div>
								</div>
								<div class="row">
									<br /><br />
								</div>
								<div class="row">
									<div class="col-lg-2">
										<b>Minuta</b>
									</div>
									<div class="col-lg-7">
										<b>Tekst wydarzenia</b>
									</div>
								</div>
								<div class="row">
								<form action="{{ URL::to('/relation/addpost') }}" enctype="multipart/form-data" method="post">
								@csrf
								<input type="hidden" name="relations_id" value="{{$relations->id}}">
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
								<div class="row">
									<div class="col-lg-12">
										<br />RELACJA:<br /><br />
									@foreach($post as $posts)
									<div class='col-lg-1'>
										<span style='font-size: 16px; color: #808080; font-family: Calibri;'>{{$posts->time}}</span>
									</div>
									<div class='col-lg-1'>
											<img src="{{asset('images/chat.png')}}" height="15px" />
									</div>
									<div class='col-lg-6'>
											<span style='font-size: 13px; color: #808080;'>{{$posts->text}}</span>
									</div>
									<div class='col-lg-2'>
											<button type="button" class="btn btn-block btn-warning btn-xs">Edytuj</button>
									</div>
									<div class='col-lg-2'>
											<button type="button" class="btn btn-block btn-danger btn-xs">Usuń</button>
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
		</div>
</div>
@endsection