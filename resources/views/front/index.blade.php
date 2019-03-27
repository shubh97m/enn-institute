
		<aside id="jsnn-hero">
			<div class="flexslider">
				<ul class="slides">
					@foreach($sliders as $slider)
									
			   	<li style="background-image: url('{{asset('assets/img/Slider/'.$slider['image'])}}')">
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
			{{--    	
			   	<li style="background-image: url(images/banner-1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 slider-text">
				   				<div class="slider-text-inner">
				   					<h1><span class="color-span">Education</span> is a tool that helps us get Success</h1>
				   					
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/banner-2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Best Database Management training institute in 
									Delhi/NCR
				   					
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	 --}}
			  	</ul>
		  	</div>
		</aside>
	<section>
		<div id="jsnn-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-12 tabulation animate-box">
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#plan"><i class="flaticon-sketch"></i> About ENN Technologies</a></li>
							<li><a data-toggle="tab" href="#general"><i class="icon-user"></i> Director's Message</a></li>
							<!-- <li><a data-toggle="tab" href="#manage"><i class="flaticon-engineer"></i> Principal's Message</a></li> -->
							<!-- <li><a data-toggle="tab" href="#modeling"><i class="flaticon-skyline"></i>  </a></li> -->
						</ul>
						<div class="tab-content">
							<div id="plan" class="tab-pane fade in active">
								<div class="row">
									<div class="col-md-6">
										<div class="sub-courses-img"> 
											<img src="images/about.jpg" alt="about">
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
				         <div id="general" class="tab-pane fade">
				         	<div class="row">
									<div class="col-md-6">
										<div class="sub-courses-img"> 
											<img src="images/message.jpg" alt="message">
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
					<div class="row">
						@foreach($course as $courses)
							<div class="col-md-4 text-center animate-box">
								<div class="sub-courses">
									<span class="icon">
										<img src="{{url('assets/img/Courses')}}/{{$courses['image']}}" alt="course image" style="height:70px;width:60px">
									</span>
									<div class="desc">
										<h3><a href="{{url('courses/'.___encrypt($courses['id']))}}">{{$courses['name']}}</a></h3>
										<p>{!! str_limit(strip_tags($courses['description']),30) !!}</p>
										 <a href="{{url('courses/'.___encrypt($courses['id']))}}" class="read-more">Read More</a> 
									</div>
								</div>
							</div>
						@endforeach
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
								<span class="jsnn-counter js-counter" data-from="0" data-to="1539" data-speed="5000" data-refresh-interval="50"></span>
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
		                <a class="filter btn btn-common" data-filter=".academy">
		                  Academy 
		                </a>
		                <a class="filter btn btn-common" data-filter=".students">
		                  Students
		                </a>
		                <a class="filter btn btn-common" data-filter=".awards">
		                  Awards 
		                </a>
		              </div>
		              
		            </div>

		            <div id="portfolio" class="row wow fadeInDown" data-wow-delay="0.4s">
		              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 mix students awards">
		                <div class="portfolio-item">
		                  <div class="shot-item">
		                    <img src="images/gallery/gallery.jpg" alt="projects"/>  
		                    <div class="overlay">
		                      <div class="icons">
		                        <a class="lightbox preview" href="images/gallery/gallery.jpg">
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
		                    <img src="images/gallery/gallery1.jpg" alt="gallery"/> 
		                    <div class="overlay">
		                      <div class="icons">
		                        <a class="lightbox preview" href="images/gallery/gallery1.jpg">
		                          <i class="fa fa-eye"></i>
		                        </a>
		                      </div>
		                    </div>
		                  </div>               
		                </div>
		              </div>
		              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 mix students academy">
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
		              </div>
		              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 students">
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
								<div class="item">
									<div class="partners">
										<img src="images/partner.png" alt="partner">
									</div>
								</div>
								<div class="item">
									<img src="images/partner1.png" alt="partner">
								</div>
								<div class="item">
									<img src="images/partner2.png" alt="partner">
								</div>
								<div class="item">
									<img src="images/partner3.png" alt="partner">
								</div>
								<div class="item">
									<img src="images/partner4.png" alt="partner">
								</div>
								<div class="item">
									<img src="images/partner5.png" alt="partner">
								</div>
							<!-- </div> -->
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
					<div class="item">
                        <div class="review_container">
                            <div class="shadow-effect">    
                                <div class="item-details">
                                    <p class="ctext">test</p>
                                    <div class="testimonialWrap clearfix">
                                        <div class="float-left circle-radius">
                                            <img src="images/person1.jpg" alt="image">
                                        </div>
                                        <div class="float-left margin-box client-info">
                                            <h5>Vainhav</h5>
                                            <p>designation</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="review_container">
                            <div class="shadow-effect">    
                                <div class="item-details">
                                    <p class="ctext">test</p>
                                    <div class="testimonialWrap clearfix">
                                        <div class="float-left circle-radius">
                                            <img src="images/person1.jpg" alt="image">
                                        </div>
                                        <div class="float-left margin-box client-info">
                                            <h5>Vainhav</h5>
                                            <p>designation</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="review_container">
                            <div class="shadow-effect">    
                                <div class="item-details">
                                    <p class="ctext">test</p>
                                    <div class="testimonialWrap clearfix">
                                        <div class="float-left circle-radius">
                                            <img src="images/person1.jpg" alt="image">
                                        </div>
                                        <div class="float-left margin-box client-info">
                                            <h5>Vainhav</h5>
                                            <p>designation</p>
                                        </div>
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


	
