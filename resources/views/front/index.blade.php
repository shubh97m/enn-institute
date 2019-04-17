<aside id="jsnn-hero">
			<div class="flexslider">
				<ul class="slides">
					<!-- <div class="new-offered-blink">
	   					<div class="quadrat"><a href="{{url('courseOffered')}}">Summer Training upto 50% Off
	   						<i class="fa fa-gift"></i>
	   					<div><i class="fa fa-hand-o-right"></i>Click Here!</div></a></div>
	   				</div> -->
	   				
					@foreach($sliders as $slider)
									
			   	<li style="background-image: url('{{asset('assets/img/Slider/'.$slider['image'])}}')" class="img-responsive">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-lg-8 col-md-12 col-sm-12 slider-text">
				   				<div class="slider-text-inner">
				   					<h1>
				   					{!!$slider['text']!!} 		
				   					</h1>
				   					
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   
			   @endforeach
			
			  	</ul>
		  	</div>
		</aside>
	<section>
		<div id="jsnn-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-12 tabulation animate-box">
						<ul class="nav nav-tabs">
							<li><a data-toggle="tab" href="#plan" class="active"><i class="flaticon-sketch"></i> {{$static[1]['name']}}</a></li>
							<li><a data-toggle="tab" href="#general"><i class="icon-user"></i> {{$static[0]['name']}}</a></li>
							<!-- <li><a data-toggle="tab" href="#modeling"><i class="flaticon-skyline"></i>  </a></li> -->
						</ul>
						<div class="tab-content">
							<div id="plan" class="tab-pane fade show active">
								<div class="row">
									<div class="col-lg-6 col-md-12">
										<div class="sub-courses-img"> 
											<img src="images/message.jpg" alt="about">
										</div>
									</div>
									<div class="col-lg-6 col-md-12">
										<div class="sub-courses-desc">
                                            <h3>{{$static[1]['name']}}</h3>
											<p>{!! $static[1]['description'] !!}</p>
										</div>
									</div>
								</div>
				         </div>
				         <div id="general" class="tab-pane fade">
				         	<div class="row">
									<div class="col-lg-6 col-md-12">
										<div class="sub-courses-img"> 
											<img src="images/about.jpg" alt="message">
										</div>
									</div>
									<div class="col-lg-6 col-md-12">
										<div class="sub-courses-desc">
                                            <h3>{{$static[0]['name']}}</h3>
											<p>{!! $static[0]['description'] !!}</p>
										</div>
									</div>
								</div>
						      
						   </div>
						  
						   
			         </div>
		         </div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div id="jsnn-program" class="jsnn-program">
			<div class="container">
				<div class="progarmWrapper">
					<div class="clearfix">
						<div class="float-left">
							<h3>Course</h3>
						</div>
						<div class="float-right view-btn">
							<a href="{{url('/courses')}}">View All Course</a>
						</div>
					</div>
					<div class="grid-container">
					<div class="row">
						@foreach($course as $courses)
							<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-6 text-center animate-box grid-item allcoursesBox">
								<a href="{{url('courses/'.___encrypt($courses['id']))}}">
								<div class="sub-courses">
									<span class="icon">
										<img src="{{url('assets/img/Courses')}}/{{$courses['image']}}" alt="course image">
									</span>
									<div class="desc">
										<h3>{{$courses['name']}}</h3>
									</div>
								</div>
								</a> 
							</div>
						@endforeach
					</div>
				</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div id="jsnn-counter" class="jsnn-counters" style="background-image: url(images/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutter">
						<div class="col-lg-3 col-md-6 col-sm-12 aside-stretch text-center animate-box">
							<div class="counter-entry wow fadeInDown animated">
								<span class="icon icon-white"><i class="icon-book-open"></i></span>
								<span class="jsnn-counter js-counter" data-from="0" data-to="{{$generalsettings[0]['courses']}}" data-speed="5000" data-refresh-interval="50"></span>
								<span class="jsnn-counter-label">TOTAL COURSES</span>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 text-center animate-box">
							<div class="counter-entry wow fadeInDown animated">
								<span class="icon"><i class="icon-user"></i></span>
								<span class="jsnn-counter js-counter" data-from="0" data-to="{{$generalsettings[0]['selected_std']}}" data-speed="5000" data-refresh-interval="50"></span>
								<span class="jsnn-counter-label">SELECTED STUDENTS</span>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 text-center animate-box">
							<div class="counter-entry wow fadeInDown animated">
								<span class="icon"><i class="icon-people"></i></span>
								<span class="jsnn-counter js-counter" data-from="0" data-to="{{$generalsettings[0]['total_std']}}" data-speed="5000" data-refresh-interval="50"></span>
								<span class="jsnn-counter-label">TOTAL STUDENT</span>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12 text-center animate-box">
							<div class="counter-entry wow fadeInDown animated">
								<span class="icon"><i class="icon-trophy"></i></span>
								<span class="jsnn-counter js-counter" data-from="0" data-to="{{$generalsettings[0]['awards']}}" data-speed="5000" data-refresh-interval="50"></span>
								<span class="jsnn-counter-label">AWARDS RECEIVED</span>
							</div>
						</div>
					</div>
				</div>
		</div>
	</section>
	<section id="gallery" class="gallery-wrap">
	        
	        <div class="container"> 
		        <div class="row">
		              <div class="col-12">
		                  <div class="section-heading wow fadeInUp">
		                      <h2>Our Gallery</h2>  
		                  </div>
		              </div>
		        </div>       
	          
		        <div class="row">          
		            <div class="col-md-12">
		             
		              <div class="controls text-center">
		                <a class="filter active btn btn-common" data-filter="all">
		                  All 
		                </a>
		                @if(!empty($gallery_category))
			                @foreach($gallery_category as $cat)
				                <a class="filter btn btn-common" data-filter=".{{$cat['id']}}">
				                  {{$cat['name']}}
				                </a>
			                @endforeach
		                @endif
		                
		              </div>
		              
		            </div>
			        <div id="portfolio" class="row wow fadeInDown" data-wow-delay="0.4s">
		              @if(!empty($gallery_category))
			                @foreach($gallery_category as $cat)
				                @foreach($cat['gallery'] as $gal)
				                	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 mix {{$cat['id'] }} all" >
						                <div class="portfolio-item">
						                  <div class="shot-item">
						                    <img src="{{url('assets/img/gallery/'.$gal['image'])}}" alt="gallery" /> 
						                    <div class="overlay">
						                      <div class="icons">
						                        <a class="lightbox preview" href="{{url('assets/img/gallery/'.$gal['image'])}}">
						                          <i class="fa fa-eye"></i>
						                        </a>
						                      </div>
						                    </div>
						                  </div>               
						                </div>
						            </div>
			                	@endforeach
			                @endforeach
		                @endif
		            </div>
		           
		            </div>
		          </div>
		        </div>
		      
		    </section>

<section>
	<div class="about-wrap">
		<div id="jsnn-about" class="jsnn-about-img">
			<!-- <div class="overlay"></div> -->
			<div class="container">
				<!-- <div class="row">
					<div class="col-md-12 text-center jsnn-heading jsnn-heading2 animate-box">
						<h2>Our Partners</h2>
					</div>
				</div> -->
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="about-flex">
							<!-- <div class="owl-carousel" id="our-partners"> -->
							<marquee behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
								@if(!empty($partner))
								@foreach($partner as $partners)
								<div class="item">
									<div class="partners">
										<img src="{{url('assets/img/Partners/'.$partners['image'])}}" alt="partner">
									</div>
								</div>
								@endforeach
								@else
									<div class="item">
										<div class="partners">
											No Record Found.
										</div>
									</div>
								@endif
								{{-- <div class="item">
									<img src="images/partner1.png" alt="partner">
								</div>
								<div class="item">
									<img src="images/partner2.png" alt="partner">
								</div>
								<div class="item">
									<img src="images/partner3.png" alt="partner">
								</div> --}}
							
							</marquee>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="testimonials hideme" id="testimonials-wrap">
    <div class="container img-section">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="section-title-testimonial">
                    <h2>Student Says</h2>   
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div  class="owl-carousel owl-loaded owl-drag" id="testimonials">
                @foreach($testimonial as $testimonials)
					<div class="item">
                        <div class="review_container">
                            <div class="shadow-effect">    
                                <div class="item-details">
                                    <p class="ctext">{{$testimonials['review']}}</p>
                                    <div class="testimonialWrap clearfix">
                                        <div class="float-left circle-radius">
                                        	@if(!empty(!empty($testimonials['image'])))
                                            	<img src="{{url('assets/img/testimonial/'.$testimonials['image'])}}" alt="image">
                                            @else
                                             	<img src="{{url('images/avatar1.png')}}" alt="image">
                                            @endif
                                        </div>
                                        <div class="float-left margin-box client-info">
                                            <h5>{{$testimonials['client']}}</h5>
                                            <p>{{$testimonials['designation']}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@if(Request::segment(1)!='ask-a-demo')
	<div class="popupmodal">
	        <div id="modal-exam-form" class="modal fade" role="dialog" style="overflow: hidden;">
	           <div class="modal-dialog">
		          <!-- Modal content-->
		          	<div class="modal-content">
			            <div class="modal-header">
			              <button type="button" class="close" data-dismiss="modal">&times;</button>
			            </div>
			            <!--  -->
		  				<a href="#register-form-exam" data-toggle="modal" style="cursor: pointer;">
				            <div class="modal-body popupmodal-body">
				              	<img src="{{url('images/Capture-img.jpg')}}" alt="capture" id="img-modal">
				            </div>
			        	</a>
		          	</div>
	            </div>
	        </div>
        </div>
        @endif
    <div class="popupmodal">
        <!-- Modal -->
	        <div id="register-form-exam" class="modal fade" role="dialog">
	           <div class="modal-dialog modal-lg">
	          <!-- Modal content-->
	          <div class="modal-content">
	            <div class="modal-header">
	            	<div class="logo-modal">
		               <h4>Exam Register</h4>
		            </div>
	              	<button type="button" class="close" data-dismiss="modal">&times;</button>
	              	
	            </div>

	            <div class="modal-body popupmodal-body">
		            <div class="row">
		            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
		            	<div class="popup-img-left">
		            		<img src="{{asset('images/message.jpg')}}" alt="register">
		            	</div>
		            </div>
			        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">

			              <form role="scholarship" method="POST" action="{{url('scholarship')}}" class="popup-form">
			              	{{csrf_field()}}
			               
			                <input type="hidden" name="type" value="scholarship">

			               <div class="form-group">
			               		<div class="inner-addon left-addon">
			               			<i class="fa fa-user fa-lg"></i>
			                  		<input type="text"  class="form-control"  name="name" value="" placeholder="Full Name">
			                  	</div>
			                </div>
			                <div class="form-group">
			                 	<div class="inner-addon left-addon">
			                 		<i class="fa fa-envelope fa-lg"></i>
			                  		<input type="text"  class="form-control"  name="email" value="" placeholder="Email">
			                  	</div>
			                </div>
			                <div class="form-group">
			                  <div class="inner-addon left-addon">
			                  		<i class="fa fa-phone fa-lg"></i>
			                  		<input type="text" data-request="isnumeric" class="form-control"  name="phone" value="" placeholder="Phone no">
			                  	</div>
			                </div>
			               
			                <div class="form-group">
			                  <div class="inner-addon left-addon">
			                  		<i class="fa fa-book fa-lg"></i>

			                  		<select class="form-control" name="course">
										<option value="">Select Course</option>
										@if(!empty($course))
											@foreach($course as $courses)
					                  			<option value="{{$courses['name']}}">{{$courses['name']}}</option>
					                  		@endforeach
					                  	@else
					                  			<option value="">No Course Found. </option>
					                  	@endif
					                 </select>

			                  	</div>
			                </div>
			                <div class="form-group">
			                  <div class="inner-addon left-addon">
			                  		<i class="fa fa-book fa-lg"></i>
			                  		<select class="form-control" name="degree">
			                  			
					                  	<option value="">Select Degree</option>
					                  	<option value="B.tech">B.tech</option>
					                  	<option value="M.tech">M.tech</option>
					                  	<option value="BCA">BCA</option>
					                  	<option value="MCA">MCA</option>
					                  	<option value="BBA">BBA</option>
					                  	<option value="MBA">MBA</option>
					                  	<option value="B.com">B.com</option>
					                  	<option value="M.com">M.com</option>
					                 </select>
			                  	</div>
			                </div>
			                <div class="form-group">
			                  <div class="inner-addon left-addon">
			                  		<i class="fa fa-book fa-lg"></i>
			                  		<input type="text"  class="form-control"  name="college_name" value="" placeholder="College Name">
			                  	</div>
			                </div>
			                 
			                <div class="form-group">
			                  <button type="button" data-request="ajax-submit" data-target='[role="scholarship"]' class="btn btn-blue">Submit</button>
			                </div>
			             </form>
		            </div>
	            	</div>
	            </div>
	          </div>
	          
	        </div>
	    </div>
    </div>
@section('requirejs')
<script type="text/javascript">
	$(window).load(function(){     
   		$('#modal-exam-form').modal('show');
    });
    $("#img-modal").click(function(){
		$("#modal-exam-form").modal("hide");
		$("#register-form-exam").show();
		
	});
</script>
@endsection


	
