@extends('page')

@section('content')
			<!-- content -->
			<div class="container">
				<div class="row">
					<div class="col-lg-7 relation">
						<div class="row">
							<div class="col-lg-5">
						
							</div>
							<div class="col-lg-2 time">
								<script type="text/javascript">

												var timeout = setInterval(reloadstatus, 40000);   
												var timeout = setTimeout(reloadstatus1, 10); 
												function reloadstatus1 () {
													$('#status').load('http://sportscore.eu/status.php', {id:"<?php echo $relationview->id;?>"});
												}
												function reloadstatus () {
													$('#status').load('http://sportscore.eu/status.php', {id:"<?php echo $relationview->id;?>"});
												}
								</script>
								<div id="status"></div>
							</div>
							<div class="col-lg-5">
						
							</div>
						</div>
						<div class="row">
							<div class="col-lg-5">
								<div class="col-lg-3">
									<img src="images/teamlogo.png" height="60px"/>
								</div>
								<div class="col-lg-9  nameteam">
									{{$relationview->teamhome}}
								</div>
							</div>
							<div class="col-lg-2 result">
								0 : 0
							</div>
							<div class="col-lg-5 questteam">
								<div class="col-lg-9 nameteam">
									{{$relationview->teamaway}}
								</div>
								<div class="col-lg-3">
									<img src="images/teamlogo.png" height="60px"/>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 descriptionevent">
								{{date('d.m.Y', strtotime($relationview->matchdate))}}, {{$relationview->hour}} • {{$relationview->matchplace}} • {{$relationview->league}} • {{$relationview->round}}. kolejka
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<br />reklama<br /><br />
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 relationwindow">
								<ul class="nav nav-tabs" role="tablist">
									<li class="active"><a href="#1zakladka" role="tab" data-toggle="tab">Relacja</a></li>
									<li><a href="#2zakladka" role="tab" data-toggle="tab">Składy</a></li>
									<li><a href="#3zakladka" role="tab" data-toggle="tab">Zmiany</a></li>
									<li><a href="#4zakladka" role="tab" data-toggle="tab">Kartki</a></li>
									<li><a href="#5zakladka" role="tab" data-toggle="tab">Zdjęcia</a></li>
								</ul>

								<!-- Zawartość zakładek -->
								<div class="tab-content">
									<div class="tab-pane active" id="1zakladka">
											<script type="text/javascript">

												var timeout = setInterval(reloadChat, 30000);   
												var timeout = setTimeout(reload, 100); 
												function reload () {
													$('#links').load('http://sportscore.eu/posts.php', {id:"<?php echo $relationview->id;?>"});
												}
												function reloadChat () {
													$('#links').load('http://sportscore.eu/posts.php', {id:"<?php echo $relationview->id;?>"});
												}
											</script>
										<div class="row">
											<br />
										</div>
										<div class="row">
											<div style="height: 650px; overflow: scroll;" id="links"></div>
										</div>
									</div>
									<div class="tab-pane" id="2zakladka">Zawartość drugiej zakładki</div>
									<div class="tab-pane" id="3zakladka">Zawartość trzeciej zakładki</div>
									<div class="tab-pane" id="4zakladka">Zawartość czwartej zakładki</div>
									<div class="tab-pane" id="5zakladka">Zawartość czwartej zakładki</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-1">
					</div>
					<div class="col-lg-4 promotion">
						<div class="row">
							<div class="col-lg-12 nopadding">
									<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSportScoreeu-508568496350533&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
							</div>
							<div class="col-lg-12 nopadding">
								<br />
							</div>
							<div class="col-lg-12 nopadding">
								<iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fsportlive.pl&layout=button_count&size=large&width=83&height=28&appId" width="183" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
							</div>
							<div class="col-lg-12 nopadding">
								Czat
								<script type="text/javascript">

												var timeout = setInterval(reloadstatus, 5000);   
												var timeout = setTimeout(reloadstatus1, 10); 
												function reloadstatus1 () {
													$('#chat').load('http://sportscore.eu/chat.php', {id:"<?php echo $relationview->id;?>"});
												}
												function reloadstatus () {
													$('#chat').load('http://sportscore.eu/chat.php', {id:"<?php echo $relationview->id;?>"});
												}
								</script>
								<div id="chat"></div>
							</div>
							<div class="col-lg-12 nopadding"><br /></div>
							<form action="{{ URL::to('/relation/addchatpost') }}" enctype="multipart/form-data" method="post">
								@csrf
								<input type="hidden" name="id" value="{{$relationview->id}}">
							<div class="col-lg-3 nopadding">
								<input type="nick" name="nick" class="form-control input-sm" id="exampleFormControlInput1" @if( Session::has('user') )value="{{ Session::get('user') }}" @endif >
							</div>
							<div class="col-lg-1 nopadding">
					
							</div>
							<div class="col-lg-5 nopadding">
								<input type="text" name="chatpost" class="form-control input-sm" id="exampleFormControlInput1" >
							</div>
							<div class="col-lg-3">
								<button type="submit" class="btn btn-block btn-primary"><span style="font-size: 11px;">WYŚLIJ</span></button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
@endsection