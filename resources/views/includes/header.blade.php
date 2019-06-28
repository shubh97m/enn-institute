		<header>
			<div class="topHeader">
				<div class="container">
					<div class="clearfix">   
				@php     
			   $settings= _arefy(App\Models\generalSettings::where('status','!=','trashed')->first()); @endphp

					<ul class="htop-wrap float-left">
						<li class="mobile-hide"><a href="tel:{{$settings['phone']}}"><i class="fa fa-phone"></i>{{$settings['phone']}}</a></li>
							<li ><a href="tel:+91-{{$settings['phone2']}}"><i class="fa fa-mobile"></i>{{$settings['phone2']}}</a></li>
							<li class="mobile-hide"><a href="mailto:admin@enntechnologies.in"><i class="fa fa-envelope"></i>{{$settings['email']}}</a></li>
						</ul>
						<ul class="rightHeader">
							<!-- <li><a href="#login-modal" data-toggle="modal">Login</a></li>
							<li><a href="#register-modal" data-toggle="modal">Register</a></li> -->
							<!-- <li class="new-offered-blink">-->
								<!-- <div class="float-right apply-now"> -->
									<!-- <a href="#modal-apply-form" data-toggle="modal" class="apply-now quadrat">Apply Now</a> -->
								<!-- </div> -->
							<!--</li>-->
							<li class="rightListli boxli"><a href="#askdemo" data-toggle="modal"><i class="fa fa-caret-square-o-up" style="padding-right:5px;"></i>Ask a Demo</a></li>
							<li class="rightListli boxli1"><a href="#call-back" data-toggle="collapse" aria-expanded="true" aria-controls="call-back" class="call-back-bt"><img src="{{url('images/phone.gif')}}" style="padding-right:5px;height: 20px;"></i>Get a Call Back</a>
								<div class="call-back-form collapse in" id="call-back" aria-expanded="true" style="">

                            <div class="call-form-field text-left">
                                <button type="button" onclick="$('.call-back-form').removeClass('show');" class="close" data-dismiss="collapse" aria-label="Close"><span aria-hidden="false">×</span></button>

                                <span class="ttl">Provide Your Detail</span>

                                <form action="/ajax/send-enquiry" method="POST" id="iq_form">
                                    <div class="form-group">
										<input type="text" class="form-control" name="iq_name" id="iq_name" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="iq_email" id="iq_email" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="iq_mobile" id="iq_mobile" placeholder="Enter Mobile No.">
                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control" name="iq_course" id="iq_course" placeholder="Enter Course">
                                    </div>
									<!--div class="form-group">
                                        <select class="form-control chosen-select" id="iq_participant" name="iq_participant" data-placeholder="Select type of Participant" tabindex="2">
                                          										</select>
                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control" name="iq_city" placeholder="Enter City/Area (In case of Delhi)">
                                    </div-->
									<div class="form-group">
                                        <textarea class="form-control" name="iq_message" rows="3" placeholder="Enter your message"></textarea>
                                    </div>
									<div class="form-group">
										<div class="checkbox">
										   <input type="checkbox" value="1" name="tos" id="iq_check_callback" class="css-checkbox">
										   <label for="iq_check_callback" class="css-label human" style="background-position: 0px 0px;">I am Human.</label>
										   <input type="hidden" class="hidden_human" value="" name="iq_human">
										</div>
									</div>
									<input type="submit" class="btn btn-default btn-stick-submit btn-black" value="Send Enquiry">
									
                                </form>
                            </div>
                        </div>
							</li>
							<li class="mobileBlock">
								<a href="javascript:void(0);" class="search-mobile-input search">
									<i class="fa fa-search searchIcon"></i>
									<i class="fa fa-times cross-icon"></i>
								</a>
							</li>
						</ul>
						<form method="GET" action="{{url('search')}}"> 
							<div class="search-mobile-toggle forMobile">
								<input type="text" name="search" placeholder="Search Courses...">
								<button type="submit" class="btn-secarch"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<nav class="jsnn-nav" role="navigation">
				<div class="top-menu">
					
					<div class="container">					
						<div class="row">
							<div class="col-md-4 col-sm-3 col-xs-4">
								<div id="jsnn-logo"><a href="{{url('/')}}"><img src="{{url('images/logo/logo.png')}}"></a></div>
								<div class="new-offered-blink1">
				   					<div class="quadrat_s"><a href="{{url('courseOffered')}}">
				   						Summer Training / Internship
				   						<div class="new_round">
				   							<img src="{{asset('images/new_red.gif')}}" alt="new">
				   						</div>
				   					</a></div>
				   				</div>
							</div>
							<div class="col-md-8 col-sm-9 col-xs-8 text-right menu-1">
								<ul class="menuListing">
									<li class=""><a href="{{url('/')}}">Home</a></li>
									<li class="has-dropdown">
										<a href="{{url('/courses')}}">All Courses</a>
										<div class="dropdownMenu">
											<i class="caret-up"></i>
											<ul class="allcourse-main">
												<li class="menu-item-1 hover-menu child-active">
													<a href="javascript:void(0);" title="CS/IT"><i class="fa fa-fw fa-code"></i><br>CS/IT</a>
													<ul class="sub-allcourse-main">
														<li>
															<a title="Programming Language" href="javascript:void(0);">Programming Language</a>
															<ul class="sub-allcourse-main">
																<li><a title="Web Development" href="javascript:void(0);">Web Development</a></li>
																<li><a title="Software Testing" href="javascript:void(0);">Software Testing</a></li>
																<li><a title="Automation Testing" href="javascript:void(0);">Automation Testing</a></li>
																<li><a title="Oracle DBA/Developer" href="javascript:void(0);">Oracle DBA/Developer</a></li>
																<li><a title="Microsoft SQL Server" href="javascript:void(0);">Microsoft SQL Server</a></li>
																<li><a title="Cloud Computing" href="javascript:void(0);">Cloud Computing</a></li>
																<li><a title="Mobile Development" href="javascript:void(0);">Mobile Development</a></li>
																<li><a title="Networking" href="javascript:void(0);">Networking</a></li>
															</ul>
														</li>
														<li><a title="Web Development" href="javascript:void(0);">Web Development</a></li>
														<li><a title="Software Testing" href="javascript:void(0);">Software Testing</a></li>
														<li><a title="Automation Testing" href="javascript:void(0);">Automation Testing</a></li>
														<li><a title="Oracle DBA/Developer" href="javascript:void(0);">Oracle DBA/Developer</a></li>
														<li><a title="Microsoft SQL Server" href="javascript:void(0);">Microsoft SQL Server</a></li>
														<li><a title="Cloud Computing" href="javascript:void(0);">Cloud Computing</a></li>
														<li><a title="Mobile Development" href="javascript:void(0);">Mobile Development</a></li>
														<li><a title="Networking" href="javascript:void(0);">Networking</a></li>
													</ul>
												</li>
												<li class="menu-item-1 hover-menu">
													<a href="javascript:void(0);" title="Professional Programs"><i class="fa fa-fw fa-database"></i><br>Professional Programs</a>
													<ul class="sub-allcourse-main">
														<li><a title="Programming Language" href="javascript:void(0);">Programming Language</a>
															<ul class="sub-allcourse-main">
																<li>
																	<a title="Web Development" href="javascript:void(0);">Web Development</a></li>
																<li>
																	<a title="Software Testing" href="javascript:void(0);">Software Testing</a>
																</li>
															</ul>
														</li>
														
													</ul>
												</li>
												<li class="menu-item-1 hover-menu">
													<a href="javascript:void(0);" title="Advance Programs"><i class="fa fa-fw fa-graduation-cap"></i><br>Advance Programs</a>
													<ul class="sub-allcourse-main">
														<li><a title="Programming Language" href="javascript:void(0);">Programming Language</a>
															<ul class="sub-allcourse-main">
																<li>
																	<a title="Web Development" href="javascript:void(0);">Web Development</a></li>
																<li>
																	<a title="Software Testing" href="javascript:void(0);">Software Testing</a>
																</li>
															</ul>
														</li>
														<li><a title="Web Development" href="javascript:void(0);">Web Development</a></li>
														<li><a title="Software Testing" href="javascript:void(0);">Software Testing</a></li>
														
													</ul>
												</li>
												<li class="menu-item-1 hover-menu">
													<a href="javascript:void(0);" title="Management & Quality"><i class="fa fa-fw fa-bandcamp"></i><br>Management & Quality</a>
													<ul class="sub-allcourse-main">
														<li><a title="Programming Language" href="javascript:void(0);">Programming Language</a>
															<ul class="sub-allcourse-main">
																<li>
																	<a title="Web Development" href="javascript:void(0);">Web Development</a></li>
																<li>
																	<a title="Software Testing" href="javascript:void(0);">Software Testing</a>
																</li>
															</ul></li>
														<li><a title="Web Development" href="javascript:void(0);">Web Development</a></li>
														<li><a title="Software Testing" href="javascript:void(0);">Software Testing</a></li>
														
													</ul>
												</li>
												<li class="menu-item-1 hover-menu">
													<a href="javascript:void(0);" title="EC/EI/EEE Programs"><i class="fa fa-fw fa-microchip"></i><br>EC/EI/EEE Programs</a>
													<ul class="sub-allcourse-main">
														<li><a title="Programming Language" href="javascript:void(0);">Programming Language</a>
															<ul class="sub-allcourse-main">
																<li>
																	<a title="Web Development" href="javascript:void(0);">Web Development</a>
																</li>
																<li>
																	<a title="Software Testing" href="javascript:void(0);">Software Testing</a>
																</li>
															</ul>
														</li>	
													</ul>
												</li>
											</ul>
										</div>
									</li>
									<li class="hidemenu"><a href="{{url('/courses')}}">Training</a>
									@if(\App\Models\Trainings::where('status','active')->count() >0)
									@php
					                    $menus = \App\Models\Trainings::where('status','active')->orderBy('training_type','desc')->get();
					                @endphp
										<ul class="training submenu">
										@foreach($menus as $menu)
											<li><a href="javascript:void(0);">{{$menu->training_type}}</a></li>
										@endforeach
										</ul>
									@endif
									</li>
									<li><a href="{{url('/about-us')}}">About Us</a></li>
									<li><a href="{{url('/contact')}}">Contact Us</a></li>
									<li class="mobileHide"><a href="javascript:void(0);" class="search-input search">
										<i class="fa fa-search searchIcon"></i>
										<i class="fa fa-times cross-icon"></i>
										</a>
									</li>
									
									
								</ul>
								<form method="GET" action="{{url('search')}}"> 
									<div class="search-toggle forDesktop">
										<input type="text" name="search" placeholder="Search for courses">
										<button type="submit" class="btn-secarch"><i class="fa fa-search"></i></button>
									</div>
								</form>
								{{-- <div class="new-offered-blink1">
				   					<div class="quadrat_s"><a href="{{url('courseOffered')}}">
				   						Summer Training / Internship
				   						<div class="new_round">
				   							<img src="{{asset('images/new_red.gif')}}" alt="new">
				   						</div>
				   					</a></div>
				   				</div> --}}
							</div>
						</div>
					</div>
				</div>
			</nav>
			
		</header>
		