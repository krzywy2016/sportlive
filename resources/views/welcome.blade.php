@extends('page')

@section('content')
	<!-- SKRYPT STATUSU CZASU -->
	<script type="text/javascript">
		var timeout = setInterval(reloadstatus, 40000);   
		var timeout = setTimeout(reloadstatus1, 10); 
		function reloadstatus1 () {
			$('#statusmobile').load('https://sportscore.eu/status.php', {id:"<?php echo $relationview->id;?>"});
		}
		function reloadstatus () {
			$('#statusmobile').load('https://sportscore.eu/status.php', {id:"<?php echo $relationview->id;?>"});
		}
	</script>
	<script type="text/javascript">
		var timeout = setInterval(reloadstatus, 40000);   
		var timeout = setTimeout(reloadstatus1, 10); 
		function reloadstatus1 () {
			$('#status').load('https://sportscore.eu/status.php', {id:"<?php echo $relationview->id;?>"});
		}
		function reloadstatus () {
			$('#status').load('https://sportscore.eu/status.php', {id:"<?php echo $relationview->id;?>"});
		}
	</script>
	<!-- ------- -->
	<!-- SKRYPT REZULTATU -->
	<script type="text/javascript">
		var timeout = setInterval(reloadresult, 40000);   
		var timeout = setTimeout(reloadresult1, 5); 
		function reloadresult1 () {
			$('#resultmobile').load('https://sportscore.eu/result.php', {id:"<?php echo $relationview->id;?>"});
		}
		function reloadresult () {
			$('#resultmobile').load('https://sportscore.eu/result.php', {id:"<?php echo $relationview->id;?>"});
		}
	</script>
	<script type="text/javascript">
		var timeout = setInterval(reloadresult, 40000);   
		var timeout = setTimeout(reloadresult1, 5); 
		function reloadresult1 () {
			$('#result').load('https://sportscore.eu/result.php', {id:"<?php echo $relationview->id;?>"});
		}
		function reloadresult () {
			$('#result').load('https://sportscore.eu/result.php', {id:"<?php echo $relationview->id;?>"});
		}
	</script>
	<!-- ------- -->
	
	<!-- WERSJA MOBILE -->
	<div class="container d-md-none">
		<div class="row">
			<div class="col-12">
				<div class="row">
					<div class="col-5"></div>
					<div class="col-2 timemobile">
						<div id="statusmobile"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-5">
						<div class="row align-items-center">
							<div class="col-3">
								<img src="../../../{{$imageteamhome->logoadress}}" height="40px"/>
							</div>
							<div class="col-9">
								{{$relationview->teamhome}}
							</div>
						</div>
					</div>
					<div class="col-2 resultmobile">
						<div id="resultmobile"></div>
					</div>
					<div class="col-5 questteam">
						<div class="row align-items-center">
							<div class="col-3">
								{{$relationview->teamaway}}
							</div>
							<div class="col-9">
								<img src="../../../{{$imageteamaway->logoadress}}" height="40px"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="col-12 descriptionevent">
									{{date('d.m.Y', strtotime($relationview->matchdate))}}, {{$relationview->hour}} • {{$relationview->matchplace}} • {{$relationview->league}} • {{$relationview->round}}. kolejka
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<br /><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SportScore [MOBILE] pod nagłówkiem relacji -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7735770317770835"
     data-ad-slot="2906772358"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
					<br />
						<span style="font-size: 10px;">odświeżanie automatyczne</span>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<br />
					</div>
					<div class="col-12 relationwindow">
						<ul class="nav nav-tabs">
									<li class="nav-item">
										<a class="nav-link active" role="tab" data-toggle="tab" href="#1zakladka">Relacja</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" role="tab" data-toggle="tab" href="#2zakladka">Składy</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" role="tab" data-toggle="tab" href="#3zakladka">Wydarzenia</a>
									</li>
						</ul>
						<div class="tab-content">
								<div class="tab-pane active" id="1zakladka">
									<script type="text/javascript">

										var timeout = setInterval(reloadChat, 30000);   
										var timeout = setTimeout(reload, 100); 
										function reload () {
											$('#links').load('https://sportscore.eu/postmobile.php', {id:"<?php echo $relationview->id;?>"});
										}
										function reloadChat () {
											$('#links').load('https://sportscore.eu/postmobile.php', {id:"<?php echo $relationview->id;?>"});
										}
									</script>
									<div class="row">
										<div class="col-12">
											<div style="height: 400px; overflow: scroll;" id="links"></div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="2zakladka">
									<div class="col-12"><br /></div>
								<div class="row">
										<div class="col-6">
											@foreach($squadhome as $playerhome)
												@if(!empty($playerhome->name))
													@if(!empty($playerhome->position === 'position11'))
														<div class="col-12">	
															<span style="font-size: 12px;"><b>Zawodnicy rezerwowi</b></span>
														</div>
														<div class="col-12">	
															<br /><br />
														</div>
													@endif
												<div class="row">
												<div class="col-2">
													<span style="font-size: 12px;">{{$playerhome->number}} </span><br />
												</div>
												<div class="col-10">
													<span style="font-size: 12px;">{{$playerhome->name}} </span><br />
												</div>
												<div class="col-12">
													<hr>
												</div>
												</div>
												@endif
											@endforeach
										</div>
										<div class="col-6">
											@foreach($squadaway as $playeraway)
												@if(!empty($playeraway->name))
													@if(!empty($playeraway->position === 'position211'))
														<div class="col-12">	
															<span style="font-size: 12px;"><b>Zawodnicy rezerwowi</b></span>
														</div>
														<div class="col-12">	
															<br /><br />
														</div>
													@endif
												<div class="row">
												<div class="col-2">
													<span style="font-size: 12px;">{{$playeraway->number}} </span><br />
												</div>
												<div class="col-10">
													<span style="font-size: 12px;">{{$playeraway->name}} </span><br />
												</div>
												<div class="col-12">
													<hr>
												</div>
												</div>
												@endif
											@endforeach
										</div>
								</div>
								</div>
								<div class="tab-pane" id="3zakladka">
										<script type="text/javascript">

												var timeout = setInterval(reloadCards, 30000);   
												var timeout = setTimeout(reloadcards, 100); 
												function reloadcards () {
													$('#card').load('https://sportscore.eu/cardsmobile.php', {id:"<?php echo $relationview->id;?>", teamhome:"<?php echo $relationview->teamhome;?>", teamaway:"<?php echo $relationview->teamaway;?>"});
												}
												function reloadCards () {
													$('#card').load('https://sportscore.eu/cardsmobile.php', {id:"<?php echo $relationview->id;?>", teamhome:"<?php echo $relationview->teamhome;?>", teamaway:"<?php echo $relationview->teamaway;?>"});
												}
											</script>
										<div class="row">
											<br />
										</div>
										<div class="row">
											<div class="col-12">
												<div id="card"></div>
											</div>
										</div>	
										<script type="text/javascript">

												var timeout = setInterval(reloadChange, 30000);   
												var timeout = setTimeout(reloadchange, 100); 
												function reloadchange () {
													$('#change').load('https://sportscore.eu/changemobile.php', {id:"<?php echo $relationview->id;?>", teamhome:"<?php echo $relationview->teamhome;?>", teamaway:"<?php echo $relationview->teamaway;?>"});
												}
												function reloadChange () {
													$('#change').load('https://sportscore.eu/changemobile.php', {id:"<?php echo $relationview->id;?>", teamhome:"<?php echo $relationview->teamhome;?>", teamaway:"<?php echo $relationview->teamaway;?>"});
												}
											</script>
										<div class="row">
											<div class="col-12">
												<div id="change"></div>
											</div>
										</div>
								</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<br />
						<div class="col-lg-12 headingmobile">
								Czat
						</div>
						<div class="col-lg-12">
								<script type="text/javascript">

												var timeout = setInterval(reloadstatus, 5000);   
												var timeout = setTimeout(reloadstatus1, 10); 
												function reloadstatus1 () {
													$('#chatmobile').load('https://sportscore.eu/chatmobile.php', {id:"<?php echo $relationview->id;?>"});
												}
												function reloadstatus () {
													$('#chatmobile').load('https://sportscore.eu/chatmobile.php', {id:"<?php echo $relationview->id;?>"});
												}
								</script>
							<div id="chatmobile"></div>
						</div>
						<div class="col-12 nopadding"><br /></div>
						<div class="row">
						<div class="col-3">
							nick
						</div>
						<div class="col-1">
				
						</div>
						<div class="col-7">
							treść wiadomości
						</div>
							
						<div class="col-1">
							<br />
						</div>
						</div>
						<form action="{{ URL::to('/relation/addchatpost') }}" enctype="multipart/form-data" method="post">
						@csrf
						<input type="hidden" name="id" value="{{$relationview->id}}">
						<div class="row">
						<div class="col-4">
							<input type="nick" name="nick" maxlength="13" class="form-control input-sm" id="exampleFormControlInput1" @if( Session::has('user') )value="{{ Session::get('user') }}" @endif >
						</div>
						<div class="col-5">
							<input type="text" name="chatpost" maxlength="140" class="form-control input-sm" id="exampleFormControlInput1" >
						</div>
						<div class="col-3">
							<button type="submit" class="btn btn-block btn-primary"><span style="font-size: 11px;">WYŚLIJ</span></button>
						</div>
						</form>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SPORTSCORE [MOBILE] pod czatem -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7735770317770835"
     data-ad-slot="1869022857"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
							<br /><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsportscoreeu&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe><br /><br />
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ------ -->
	<!-- WERSJA DESKTOP, TABLET -->
	<div class="container d-none d-md-block nopadding">
		<div class="row nopadding">
			<div class="col-lg-12">
				<br />
			</div>
		</div>
		<div class="row nopadding">
			<div class="col-md-7">
				<div class="row">
					<div class="col-md-5"></div>
					<div class="col-md-2 time">
						<div id="status"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 nopadding">
						<div class="row align-items-center">
							<div class="col-md-3 d-none d-md-block">
								<img src="../../../{{$imageteamhome->logoadress}}" height="60px"/>
							</div>
							<div class="col-md-9 nameteam">
								{{$relationview->teamhome}}
							</div>
						</div>
					</div>
					<div class="col-md-2 nopadding result">
						<div id="result"></div>
					</div>
					<div class="col-md-5 nopadding questteam">
						<div class="row align-items-center">
							<div class="col-md-9 nameteam">
								{{$relationview->teamaway}}
							</div>
							<div class="col-md-3">
								<img src="../../../{{$imageteamaway->logoadress}}" height="60px"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 descriptionevent">
						{{date('d.m.Y', strtotime($relationview->matchdate))}}, {{$relationview->hour}} • {{$relationview->matchplace}} • {{$relationview->league}} • {{$relationview->round}}. kolejka
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<br />
					</div>
					<div class="col-lg-12 nopadding">
						<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- SPORTSCORE [PC] pod nagłówkiem relacji -->
							<ins class="adsbygoogle"
							style="display:inline-block;width:685px;height:180px"
							data-ad-client="ca-pub-7735770317770835"
							data-ad-slot="7849661206"></ins>
						<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					</div>
					<div class="col-lg-12">
						<br />
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 nopadding relationwindow">
						 <!-- Nav tabs -->
						<ul class="nav nav-tabs">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#home">Relacja</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#menu1">Składy</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#menu2">Kartki</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#menu3">Zmiany</a>
							</li>
							</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane active container" id="home">
								<script type="text/javascript">

												var timeout = setInterval(reloadChat, 30000);   
												var timeout = setTimeout(reload, 100); 
												function reload () {
													$('#link').load('https://sportscore.eu/posts.php', {id:"<?php echo $relationview->id;?>"});
												}
												function reloadChat () {
													$('#link').load('https://sportscore.eu/posts.php', {id:"<?php echo $relationview->id;?>"});
												}
											</script>
										<div class="row">
											<div style="height: 650px; width: 880px; overflow-y: scroll; overflow-x: hidden;" id="link"></div>
										</div>
							</div>
							<div class="tab-pane container" id="menu1">
								<div class="col-lg-12"><br /></div>
								<div class="row">
										<div class="col-lg-6">
											@foreach($squadhome as $playerhome)
												@if(!empty($playerhome->name))
													@if(!empty($playerhome->position === 'position11'))
														<div class="col-lg-12">	
															<b>Zawodnicy rezerwowi</b>
														</div>
														<div class="col-lg-12">	
															<br /><br />
														</div>
													@endif
												<div class="row">
												<div class="col-lg-2">
													{{$playerhome->number}} <br />
												</div>
												<div class="col-lg-10">
													{{$playerhome->name}} <br />
												</div>
												<div class="col-lg-12">
													<hr>
												</div>
												</div>
												@endif
											@endforeach
										</div>
										<div class="col-lg-6">
											@foreach($squadaway as $playeraway)
												@if(!empty($playeraway->name))
												@if(!empty($playeraway->position === 'position211'))
														<div class="col-lg-12">	
															<b>Zawodnicy rezerwowi</b>
														</div>
														<div class="col-lg-12">	
															<br /><br />
														</div>
												@endif
												<div class="row">
												<div class="col-lg-2">
													{{$playeraway->number}} <br />
												</div>
												<div class="col-lg-10">
													{{$playeraway->name}} <br />
												</div>
												<div class="col-lg-12">
													<hr>
												</div>
												</div>
												@endif
											@endforeach
										</div>
								</div>
							</div>
							<div class="tab-pane container" id="menu2">
									<script type="text/javascript">

												var timeout = setInterval(reloadCards, 30000);   
												var timeout = setTimeout(reloadcards, 100); 
												function reloadcards () {
													$('#cards').load('https://sportscore.eu/cards.php', {id:"<?php echo $relationview->id;?>", teamhome:"<?php echo $relationview->teamhome;?>", teamaway:"<?php echo $relationview->teamaway;?>"});
												}
												function reloadCards () {
													$('#cards').load('https://sportscore.eu/cards.php', {id:"<?php echo $relationview->id;?>", teamhome:"<?php echo $relationview->teamhome;?>", teamaway:"<?php echo $relationview->teamaway;?>"});
												}
											</script>
										<div class="row">
											<br />
										</div>
										<div class="row">
											<div id="cards"></div>
										</div>	
							</div>
							<div class="tab-pane container" id="menu3">
								<script type="text/javascript">

												var timeout = setInterval(reloadChange, 30000);   
												var timeout = setTimeout(reloadchange, 100); 
												function reloadchange () {
													$('#changes').load('https://sportscore.eu/change.php', {id:"<?php echo $relationview->id;?>", teamhome:"<?php echo $relationview->teamhome;?>", teamaway:"<?php echo $relationview->teamaway;?>"});
												}
												function reloadChange () {
													$('#changs').load('https://sportscore.eu/change.php', {id:"<?php echo $relationview->id;?>", teamhome:"<?php echo $relationview->teamhome;?>", teamaway:"<?php echo $relationview->teamaway;?>"});
												}
											</script>
										<div class="row">
											<div id="changes"></div>
										</div>
							</div>
						</div> 
					</div>
				</div>					
			</div>
			<div class="col-md-1 d-none d-md-block">
			</div>
			<div class="col-md-4 d-none d-md-block nopadding">
				<div class="row">
					<div class="col-lg-12 nopadding">
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsportscoreeu&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
					</div>
					<div class="col-lg-12 nopadding">
						<br />
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<br />
					</div>
					<div class="col-lg-12 nopadding heading">
						Czat
					</div>
					<div class="col-lg-12">
						<script type="text/javascript">

							var timeout = setInterval(reloadstatus, 5000);   
							var timeout = setTimeout(reloadstatus1, 10); 
							function reloadstatus1 () {
								$('#chat').load('https://sportscore.eu/chat.php', {id:"<?php echo $relationview->id;?>"});
							}
							function reloadstatus () {
								$('#chat').load('https://sportscore.eu/chat.php', {id:"<?php echo $relationview->id;?>"});
							}
						</script>
						<div id="chat"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 nopadding"><br /></div>
				</div>
				<div class="row">
					<div class="col-lg-3 nopadding">
						nick
					</div>
					<div class="col-lg-2 nopadding">
					
					</div>
					<div class="col-lg-6 nopadding">
						treść wiadomości
					</div>
							
					<div class="col-lg-1">
						<br />
					</div>
				</div>
							<form action="{{ URL::to('/relation/addchatpost') }}" enctype="multipart/form-data" method="post">
								@csrf
								<input type="hidden" name="id" value="{{$relationview->id}}">
				<div class="row">
					<div class="col-lg-3 nopadding">
						<input type="nick" name="nick" maxlength="13" class="form-control input-sm" id="exampleFormControlInput1" @if( Session::has('user') )value="{{ Session::get('user') }}" @endif >
					</div>
					<div class="col-lg-1 nopadding">
					
					</div>
					<div class="col-lg-5 nopadding">
						<input type="text" name="chatpost" maxlength="140" class="form-control input-sm" id="exampleFormControlInput1" >
					</div>
					<div class="col-lg-3">
						<button type="submit" class="btn btn-block btn-primary"><span style="font-size: 11px;">WYŚLIJ</span></button>
					</div>
							</form>
				</div>
				<div class="row">
					<div class="col-lg-12 nopadding">
						<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- SPORTSCORE [PC] nad czatem -->
						<ins class="adsbygoogle"
							style="display:block"
							data-ad-client="ca-pub-7735770317770835"
							data-ad-slot="9624518122"
							data-ad-format="auto"
							data-full-width-responsive="true"></ins>
						<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
	
			<div class="container">
				<div class="col-lg-12 nopadding d-none d-lg-block">
				<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- SPORTSCORE [PC] przed stopką -->
					<ins class="adsbygoogle"
						style="display:block"
						data-ad-client="ca-pub-7735770317770835"
						data-ad-slot="3218400600"
						data-ad-format="auto"
						data-full-width-responsive="true"></ins>
					<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
					<br />
			</div>
			</div>
	<!-- -------- -->
@endsection