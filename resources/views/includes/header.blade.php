
		<header>
			<div class="topHeader">
				<div class="container">
					<div class="clearfix">   
				@php     
			   $settings= _arefy(App\Models\generalSettings::where('status','!=','trashed')->first()); @endphp

					<ul class="htop-wrap float-left">
						<li><a href="tel:+91-011-46702233"><i class="fa fa-phone"></i>{{$settings['phone']}}</a></li>
							<li class="mobile-hide"><a href="tel:+91-7669620210"><i class="fa fa-mobile"></i>+91-{{$settings['phone2']}}</a></li>
							<li class="mobile-hide"><a href="mailto:admin@enntechnologies.in"><i class="fa fa-envelope"></i>{{$settings['email']}}</a></li>
						</ul>
						<ul class="rightHeader">
							<!-- <li><a href="#login-modal" data-toggle="modal">Login</a></li>
							<li><a href="#register-modal" data-toggle="modal">Register</a></li> -->
							<li class="new-offered-blink">
								<!-- <div class="float-right apply-now"> -->
									<a href="#modal-apply-form" data-toggle="modal" class="apply-now quadrat">Apply Now</a>
								<!-- </div> -->
							</li>
						</ul>
					</div>
					<!-- admin@enntechnologies.in -->
				</div>
			</div>
			<nav class="jsnn-nav" role="navigation">
				<div class="top-menu">
					
					<div class="container">
						
					
						<div class="row">
							<div class="col-xs-2">
								<div id="jsnn-logo"><a href="javascript:void(0);"><img src="images/logo/logo.png"></a></div>
							</div>
							<div class="col-xs-10 text-right menu-1">
								<ul class="menuListing">
									<li class=""><a href="{{url('/')}}">Home</a></li>
									<li class="has-dropdown">
										<a href="{{url('/courses')}}">All Courses</a>
										<!-- <ul class="dropdown">
											<li><a href="#">Commercial</a></li>
											<li><a href="#">Apartment</a></li>
											<li><a href="#">House</a></li>
											<li><a href="#">Building</a></li>
										</ul> -->
									</li>
									<li class="hidemenu"><a href="javascript:void(0);">Training</a>
										<ul class="training submenu">
											<li><a href="#">Corporate Training</a></li>
											<li><a href="#">Industrial Training</a></li>
											<li><a href="#">Online Training</a></li>
										</ul>
									</li>
									
									<li><a href="{{url('/about-us')}}">About Us</a></li>
									<li><a href="{{url('/contact')}}">Contact Us</a></li>
									<li><a href="javascript:void(0);" class="search-input search">
										<i class="fa fa-search searchIcon"></i>
										<i class="fa fa-times cross-icon"></i>
										</a>
										<!-- <a href="javascript:void(0);" class="search-input"></a> -->
									</li>
									
									
								</ul>
								<div class="search-toggle">
									<input type="text" name="seacrh">
									<button class="btn-secarch"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
			
		</header>
		