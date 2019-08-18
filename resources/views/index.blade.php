@extends('page')

@section('content')
	<div class="container">
		<br />
	</div>
	
<script async type="text/javascript">
$(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 10,           // how long it should take to count between the target numbers
		refreshInterval: 10,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
	</script>	
	<div id="carouselExampleIndicators" class="carousel slide my-carousel my-carousel  d-none d-lg-block" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url('images/laptop.jpg')">

        </div>
          <div class="carousel-item " style="background-image: url('images/code.jpg')">

        </div>
        <div class="carousel-item " style="background-image: url('/images/free.jpg')">

        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>	
	<div class="container">
	 <br />
		<div class="row text-center">
	        <div class="col-6 col-lg-3">
	        <div class="counter">
      <i class="fas fa-users fa-3x"></i>
      <h2 class="timer count-title count-number" data-to="{{$users}}" data-speed="1500"></h2>
       <p class="count-text ">Zadowolonych <br />użytkowników</p>
    </div>
	        </div>
              <div class="col-6 col-lg-3">
               <div class="counter">
      <i class="fas fa-headset fa-3x"></i>
      <h2 class="timer count-title count-number" data-to="{{$relation}}" data-speed="1500"></h2>
      <p class="count-text ">Przeprowadzonych <br />relacji live</p>
    </div>
              </div>
			  <div class="col-12 d-md-none">
				<br />
			  </div>
              <div class="col-6 col-lg-3">
                  <div class="counter">
      <i class="fas fa-comments fa-3x"></i>
      <h2 class="timer count-title count-number" data-to="{{$chat}}" data-speed="1500"></h2>
      <p class="count-text ">Komentarzy<br /> na czacie</p>
    </div></div>
              <div class="col-6 col-lg-3">
              <div class="counter">
      <i class="fas fa-file-invoice fa-3x"></i>
      <h2 class="timer count-title count-number" data-to="{{$post}}" data-speed="1500"></h2>
      <p class="count-text ">Postów <br />w relacjach</p>
    </div>
              </div>
         </div>
	</div>
	
	
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12"><br /></div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="col-lg-12 tlo1">
				<b>O programie</b> <hr>
				Nasza aplikacja za pomocą wygodnego systemu zarządzania treścią, umożliwia wygenerowanie i prowadzenie tekstowej relacji na żywo z każdego meczu piłkarskiego. 
				Wszystkie wydarzenia meczowe po jego zakończeniu można wygodnie przenieść na stronę klubową.
				</div>
			</div>
			<div class="col-12 d-md-none">
				<br />
			</div>
			<div class="col-lg-4">
				<div class="col-lg-12 tlo2">
				<b>Dlaczego warto?</b> <hr>
				Oferowany przez nas skrypt do prowadzenia relacji live z meczów sportowych jest jednym z niewielu rozwiązań tego typu w internecie. <br />
				Na pewno jest to pierwsze oprogramowanie o tej tematyce udostępnione w tzw. chmurze. - bez konieczności jakiejkolwiek instalacji i konfiguracji.<br />		
				</div>				
			</div>
			<div class="col-12 d-md-none">
				<br />
			</div>
			<div class="col-lg-4">
				<div class="col-lg-12 tlo3">
				<b>Jakie są zalety?</b> <hr>
				- nie potrzebujesz wiedzy informatycznej<br />
				- nie potrzebujesz serwera i bazy danych<br />
				- nie potrzebujesz własnej domeny<br />
				- brak konieczności instalacji i konfiguracji<br />
				- pomoc techniczna 7 dni w tygodniu<br />
				- całkowicie za darmo<br /><br />
				</div>
			</div>
		</div>	
	</div>
	
	<div class="container">
		<div class="col-lg-12"><br /></div>
	</div>
	
	<div class="container d-none d-md-block">
            <div class="grid">
                <div class="row">
                    <div class="col-md-4">
                        <figure class="effect-ravi">
                            <img src="/images/promo1.jpg" alt="skrypt relacj live" />
                            <figcaption>
                                <h2>Ładny <span>interfejs</span></h2>
                                <p>
                                    <a href="/images/promo1.jpg"><i class="fa fa-search"></i></a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4">
                        <figure class="effect-ravi">
                            <img src="/images/promo2.jpg" alt="skrypt relacj live" />
                            <figcaption>
                                <h2>Prosty <span>Panel</span></h2>
                                <p>
                                    <a href="/images/promo2.jpg"><i class="fa fa-search"></i></a>

                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4">
                        <figure class="effect-ravi">
                            <img src="/images/promo3.jpg" alt="skrypt relacj live" />
                            <figcaption>
                                <h2>Łatwość <span>tworzenia</span></h2>
                                <p>
                                    <a href="/images/promo3.jpg"><i class="fa fa-search"></i></a>

                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <figure class="effect-ravi">
                            <img src="/images/promo4.jpg" alt="skrypt relacj live" />
                            <figcaption>
                                <h2><span>Intuicyjność</span></h2>
                                <p>
                                    <a href="/images/promo4.jpg"><i class="fa fa-search"></i></a>

                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="effect-ravi">
                            <img src="/images/promo5.jpg" alt="skrypt relacj live" />
                            <figcaption>
                                <h2>Banalna <span>obsługa</span></h2>
                                <p>
                                    <a href="/images/promo5.jpg"><i class="fa fa-search"></i></a>

                                </p>
                            </figcaption>
                        </figure>
                    </div>
					<div class="col">
                        <figure class="effect-ravi">
                            <img src="/images/promo6.jpg" alt="skrypt relacj live" />
                            <figcaption>
                                <h2>Prestiż dla <span>klubu</span></h2>
                                <p>
                                    <a href="/images/promo6.jpg"><i class="fa fa-search"></i></a>

                                </p>
                            </figcaption>
                        </figure>

                    </div>
                </div>
            </div>

        </div>
		<div class="container d-md-none">
            <div class="grid">
                <div class="row">
                    <div class="col-6">
                        <figure class="effect-ravi">
                            <img src="/images/promo1.jpg" alt="skrypt relacj live" />
                            <figcaption>
                                <h2>Ładny <span>interfejs</span></h2>
                                <p>
                                    <a href="/images/promo1.jpg"><i class="fa fa-search"></i></a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-6">
                        <figure class="effect-ravi">
                            <img src="/images/promo2.jpg" alt="skrypt relacj live" />
                            <figcaption>
                                <h2>Prosty <span>Panel</span></h2>
                                <p>
                                    <a href="/images/promo2.jpg"><i class="fa fa-search"></i></a>

                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-12">
                        <figure class="effect-ravi">
                            <img src="/images/promo3.jpg" alt="skrypt relacj live" />
                            <figcaption>
                                <h2>Łatwość <span>tworzenia</span></h2>
                                <p>
                                    <a href="/images/promo3.jpg"><i class="fa fa-search"></i></a>

                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <figure class="effect-ravi">
                            <img src="/images/promo4.jpg" alt="skrypt relacj live" />
                            <figcaption>
                                <h2><span>Intuicyjność</span></h2>
                                <p>
                                    <a href="/images/promo4.jpg"><i class="fa fa-search"></i></a>

                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-6">
                        <figure class="effect-ravi">
                            <img src="/images/promo5.jpg" alt="skrypt relacj live" />
                            <figcaption>
                                <h2>Banalna <span>obsługa</span></h2>
                                <p>
                                    <a href="/images/promo5.jpg"><i class="fa fa-search"></i></a>

                                </p>
                            </figcaption>
                        </figure>
                    </div>
					<div class="col-6">
                        <figure class="effect-ravi">
                            <img src="/images/promo6.jpg" alt="skrypt relacj live" />
                            <figcaption>
                                <h2>Prestiż dla <span>klubu</span></h2>
                                <p>
                                    <a href="/images/promo6.jpg"><i class="fa fa-search"></i></a>

                                </p>
                            </figcaption>
                        </figure>

                    </div>
                </div>
            </div>

        </div>
		<div class="container">
		<div class="col-lg-12"><br /></div>
		</div>
@endsection