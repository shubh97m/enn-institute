
		<aside id="jsnn-hero">
			<div class="flexslider">
				<ul class="slides">
					@foreach($sliders as $slider)
									
			   	<li style="background-image: url('{{asset('assets/img/Slider/'.$slider['image'])}}')" class="img-responsive">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 slider-text">
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
							<li class="active"><a data-toggle="tab" href="#plan"><i class="flaticon-sketch"></i> Director's Message</a></li>
							<li><a data-toggle="tab" href="#general"><i class="icon-user"></i> About ENN Technologies</a></li>
							<!-- <li><a data-toggle="tab" href="#manage"><i class="flaticon-engineer"></i> Principal's Message</a></li> -->
							<!-- <li><a data-toggle="tab" href="#modeling"><i class="flaticon-skyline"></i>  </a></li> -->
						</ul>
						<div class="tab-content">
							<div id="plan" class="tab-pane fade in active">
								<div class="row">
									<div class="col-md-6">
										<div class="sub-courses-img"> 
											<img src="images/message.jpg" alt="about">
										</div>
									</div>
									<div class="col-md-6">
										<div class="sub-courses-desc">
                                            <h3>Director's Message</h3>
											<p>Enn technologies is Having Indiawide Name in IT field. We provide High quality Technologies training and consulting sub-courses that full fill Students.
											Technologies training and consulting sub-courses that full fill Students, government and corporate Requirements. ENN Technologies is a Leading online and classroom training provider based in Delhi which provides training programs for both Corporate and individuals across the globe.</p>
											<ul>
												<li>Materiality & Interpretation</li>
												<li>Design Management and Cultural Enterprise</li>
												<li>Experience Design (XD)</li>
												<li>Sound Design; Social Media and SEO</li>
											</ul>
										</div>
									</div>
								</div>
				         </div>
				         <div id="general" class="tab-pane fade">
				         	<div class="row">
									<div class="col-md-6">
										<div class="sub-courses-img"> 
											<img src="images/about.jpg" alt="message">
										</div>
									</div>
									<div class="col-md-6">
										<div class="sub-courses-desc">
                                            <h3>About ENN Technologies</h3>
											<p>Enn technologies is Having Indiawide Name in IT field. We provide High quality Technologies training and consulting sub-courses that full fill Students.
											Technologies training and consulting sub-courses that full fill Students, government and corporate Requirements. ENN Technologies is a Leading online and classroom training provider based in Delhi which provides training programs for both Corporate and individuals across the globe.</p>
											<ul>
												<li>Materiality & Interpretation</li>
												<li>Design Management and Cultural Enterprise</li>
												<li>Experience Design (XD)</li>
												<li>Sound Design; Social Media and SEO</li>
											</ul>
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
							<div class="col-md-3 text-center animate-box grid-item">
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
						<div class="col-md-3 col-sm-6 aside-stretch text-center animate-box">
							<div class="counter-entry wow fadeInDown animated">
								<span class="icon icon-white"><i class="icon-book-open"></i></span>
								<span class="jsnn-counter js-counter" data-from="0" data-to="{{$total_courses}}" data-speed="5000" data-refresh-interval="50"></span>
								<span class="jsnn-counter-label">TOTAL COURSES</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<div class="counter-entry wow fadeInDown animated">
								<span class="icon"><i class="icon-user"></i></span>
								<span class="jsnn-counter js-counter" data-from="0" data-to="3653" data-speed="5000" data-refresh-interval="50"></span>
								<span class="jsnn-counter-label">SELECTED STUDENTS</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<div class="counter-entry wow fadeInDown animated">
								<span class="icon"><i class="icon-people"></i></span>
								<span class="jsnn-counter js-counter" data-from="0" data-to="5987" data-speed="5000" data-refresh-interval="50"></span>
								<span class="jsnn-counter-label">TOTAL STUDENT</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<div class="counter-entry wow fadeInDown animated">
								<span class="icon"><i class="icon-trophy"></i></span>
								<span class="jsnn-counter js-counter" data-from="0" data-to="3999" data-speed="5000" data-refresh-interval="50"></span>
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

		            {{-- @foreach($gallery as $gal)
	                	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 mix students all">
			                <div class="portfolio-item">
			                  <div class="shot-item">
			                    <img src="{{url('assets/img/gallery/'.$gal['image'])}}" alt="gallery" /> 
			                    <div class="overlay">
			                      <div class="icons">
			                        <a class="lightbox preview" href="images/gallery/gallery2.jpg">
			                          <i class="fa fa-eye"></i>
			                        </a>
			                      </div>
			                    </div>
			                  </div>               
			                </div>
			            </div>
			        @endforeach --}}
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
		              {{-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 mix students academy">
		                <div class="portfolio-item">
		                  <div class="shot-item">
		                    <img src="images/gallery/gallery2.jpg" alt="gallery" /> 
		                    <div class="overlay">
		                      <div class="icons">
		                        <a class="lightbox preview" href="images/gallery/gallery2.jpg">
		                          <i class="fa fa-eye"></i>
		                        </a>
		                      </div>
		                    </div>
		                  </div>               
		                </div>
		              </div>
		              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 mix students">
		                <div class="portfolio-item">
		                  <div class="shot-item">
		                    <img src="images/gallery/gallery3.jpg" alt="gallery"/> 
		                    <div class="overlay">
		                      <div class="icons">
		                        <a class="lightbox preview" href="images/gallery/gallery3.jpg">
		                          <i class="fa fa-eye"></i>
		                        </a>
		                      </div>
		                    </div>
		                  </div>               
		                </div>
		              </div>
		              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 mix academy">
		                <div class="portfolio-item">
		                  <div class="shot-item">
		                    <img src="images/gallery/gallery4.jpg" alt="gallery"/>
		                    <div class="overlay">
		                      <div class="icons">
		                        <a class="lightbox preview" href="images/gallery/gallery4.jpg">
		                          <i class="fa fa-eye"></i>
		                        </a>
		                      </div>
		                    </div>
		                  </div>               
		                </div>
		              </div> --}}
		              {{-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 students">
		                <div class="portfolio-item">
		                  <div class="shot-item">
		                    <img src="images/gallery/gallery5.jpg" alt="projects"/>
		                    <div class="overlay">
		                      <div class="icons">
		                        <a class="lightbox preview" href="images/gallery/gallery5.jpg">
		                          <i class="fa fa-eye"></i>
		                        </a>
		                      </div>
		                    </div>
		                  </div>               
		                </div>
		              </div> --}}
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
	        <div id="modal-exam-form" class="modal fade" role="dialog">
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
	              	<button type="button" class="close" data-dismiss="modal">&times;</button>
	              	<div class="logo-modal">
		               <h4>Exam Register</h4>
		            </div>
	            </div>
	           <!--  <div class="text-center img-logo-modal">
	            	<img src="images/logo/logo.png" alt="logo">
	            </div> -->
	           
	            <div class="modal-body popupmodal-body">
		            <div>
		            <div class="col-md-7 col-sm-12 col-xs-12">
		            	<div class="popup-img-left">
		            		<img src="images/message.jpg" alt="register">
		            	</div>
		            </div>
			        <div class="col-md-5 col-sm-12 col-xs-12">
			              <form role="place-order" method="POST" action="" class="popup-form">
			                
			                <input type="hidden" name="product_id" value="">
			                <input type="hidden" name="user_id" value="">
			                
			               <div class="form-group">
			               		<div class="inner-addon left-addon">
			               			<i class="fa fa-user fa-lg"></i>
				                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
			                  		<input type="text" data-request="isnumeric" class="form-control" id="phone" name="name" value="" placeholder="Full Name">
			                  	</div>
			                </div>
			                <div class="form-group">
			                 	<div class="inner-addon left-addon">
			                 		<i class="fa fa-envelope fa-lg"></i>
				                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
			                  		<input type="text" data-request="isnumeric" class="form-control" id="phone" name="name" value="" placeholder="Email">
			                  	</div>
			                </div>
			                <div class="form-group">
			                  <div class="inner-addon left-addon">
			                  		<i class="fa fa-phone fa-lg"></i>
				                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
			                  		<input type="text" data-request="isnumeric" class="form-control" id="phone" name="name" value="" placeholder="Phone no">
			                  	</div>
			                </div>
			                <div class="form-group">
			                  <div class="inner-addon left-addon">
			                  		<i class="fa fa-book fa-lg"></i>
				                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
			                  		<input type="text" data-request="isnumeric" class="form-control" id="course" name="name" value="" placeholder="Course">
			                  	</div>
			                </div>
			                <div class="form-group">
			                  <div class="inner-addon left-addon">
			                  		<i class="fa fa-book fa-lg"></i>
				                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
			                  		<select class="form-control">
			                  			
					                  	<option value="">Select Degree</option>
					                  	<option>SAP </option>
					                  	<option>SAP Basis</option>
					                  	<option>SAP SM</option>
					                  	<option>SAP ABAP</option>
					                  	<option>Php</option>
					                  	<option>Java</option>
					                 </select>
			                  	</div>
			                </div>
			                <div class="form-group">
			                  <div class="inner-addon left-addon">
			                  		<i class="fa fa-book fa-lg"></i>
				                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
			                  		<input type="text" data-request="isnumeric" class="form-control" id="phone" name="name" value="" placeholder="College Name">
			                  	</div>
			                </div>
			                 
			                <div class="form-group">
			                  <button type="button" data-request="ajax-submit" data-target='[role="place-order"]' class="btn btn-blue">Submit</button>
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


	
