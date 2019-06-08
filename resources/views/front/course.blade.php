		<section class="jsnn-course" data-aos="fade-down">
			<div class="container">
				<div class="our-course">
					<h3>All Courses</h3>
				</div>
			</div>
		</section>
		<section>
			<div id="jsnn-course-wrap" class="jsnn-course-warp">
				<div class="container">
					<div class="progarmWrapper programmer-wrap">
						{{-- row starts here --}}
						<div class="row">
							@foreach($course as $courses)
							<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-12 text-center" data-aos="fade-up">
								<a href="{{url('courses/'.___encrypt($courses['id']))}}">
								<div class="sub-courses">
									<span class="icon">
										<img src="{{url('assets/img/Courses')}}/{{$courses['image']}}" alt="course image">
									</span>
									<div class="desc">
										<h3>{{$courses['name']}}</h3>
										<p>{!! str_limit(strip_tags($courses['description']),30) !!}</p>
										 <a href="{{url('courses/'.___encrypt($courses['id']))}}" class="read-more">Read More</a> 
									</div>
								</div>
								</a>
							</div>
							@endforeach
						</div>
						{{-- row ends here --}}
					</div>
				</div>
			</div>
		</section>
	

		<!-- apply modal -->
		<div class="popupmodal">
        <!-- Modal -->
        <div id="modal-apply-form" class="modal fade" role="dialog">
           <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="logo-modal">
               <h4>Apply Now</h4>
            </div>
            <div class="modal-body popupmodal-body">
              <form role="place-order" method="POST" action="" class="popup-form">
                
                <input type="hidden" name="product_id" value="">
                <input type="hidden" name="user_id" value="">
                <div class="form-group">
                  <!-- <label for="usr">Name<sup class="required-sup">*</sup>:</label> -->
                  <input type="text" class="form-control" id="usr" name="name" value="" placeholder="Name">
                </div>
               <div class="form-group">
                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
                  <input type="email" data-request="isnumeric" class="form-control" id="phone" name="phone" value="" placeholder="Email">
                </div>
                <div class="form-group">
                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
                  <input type="text" data-request="isnumeric" class="form-control" id="phone" name="phone" value="" placeholder="Phone No">
                </div>
                <div class="form-group">
                  <!-- <label for="pwd">course<sup class="required-sup">*</sup>:</label> -->
                  <input type="subject" data-request="isnumeric" class="form-control" id="phone" name="phone" value="" placeholder="Course">
                </div>
               
                <div class="form-group">
                  <!-- <label for="pwd">Message:</label> -->
                 <textarea class="form-control" id="message" placeholder="message"></textarea>
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

        <!--------------------- Login modal ------------------->
		<div class="popupmodal">
        <!-- Modal -->
	        <div id="login-modal" class="modal fade" role="dialog">
	           <div class="modal-dialog">
	          <!-- Modal content-->
	          <div class="modal-content">
	            <div class="modal-header">
	              <button type="button" class="close" data-dismiss="modal">&times;</button>

	            </div>
	            <div class="text-center img-logo-modal">
	            	<img src="images/logo/logo.png" alt="logo">
	            </div>
	           
	            <div class="modal-body popupmodal-body">
		            <div class="logo-modal">
		               <h4 style="text-align: left;font-size: 22px;">Login Here!!</h4>
		            </div>
	              <form role="place-order" method="POST" action="" class="popup-form">
	                
	                <input type="hidden" name="product_id" value="">
	                <input type="hidden" name="user_id" value="">
	                
	               <div class="form-group">
	                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
	                  <input type="email" data-request="isnumeric" class="form-control" id="phone" name="phone" value="" placeholder="Email">
	                </div>
	                <div class="form-group">
	                  <!-- <label for="usr">Name<sup class="required-sup">*</sup>:</label> -->
	                  <input type="text" class="form-control" id="usr" name="name" value="" placeholder="Password">
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
		<!---------------------End Login modal ------------------->

		 <!--------------------- Register modal ------------------->
		<div class="popupmodal">
        <!-- Modal -->
	        <div id="register-modal" class="modal fade" role="dialog">
	           <div class="modal-dialog">
	          <!-- Modal content-->
	          <div class="modal-content">
	            <div class="modal-header">
	              <button type="button" class="close" data-dismiss="modal">&times;</button>

	            </div>
	            <div class="text-center img-logo-modal">
	            	<img src="images/logo/logo.png" alt="logo">
	            </div>
	           
	            <div class="modal-body popupmodal-body">
		            <div class="logo-modal">
		               <h4 style="text-align: left;font-size: 22px;">Register Here!!</h4>
		            </div>
	              <form role="place-order" method="POST" action="" class="popup-form">
	                
	                <input type="hidden" name="product_id" value="">
	                <input type="hidden" name="user_id" value="">
	                
	               <div class="form-group">
	                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
	                  <input type="text" data-request="isnumeric" class="form-control" id="phone" name="name" value="" placeholder="Full Name">
	                </div>
	                <div class="form-group">
	                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
	                  <input type="text" data-request="isnumeric" class="form-control" id="phone" name="email" value="" placeholder="Email">
	                </div>
	                <div class="form-group">
	                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
	                  <input type="text" data-request="isnumeric" class="form-control" id="phone" name="phone" value="" placeholder="Phone No">
	                </div>
	                <div class="form-group">
	                  <!-- <label for="usr">Name<sup class="required-sup">*</sup>:</label> -->
	                  <input type="text" class="form-control" id="usr" name="name" value="" placeholder="Password">
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
		<!---------------------End Register modal ------------------->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	
