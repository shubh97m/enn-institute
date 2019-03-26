		<section class="jsnn-course">
			<div class="container">
				<div class="our-course">
					<h3>All Courses</h3>
				</div>
			</div>
		</section>
		<section>
		<div id="jsnn-course-wrap" class="jsnn-course-warp">
			<div class="container">
				<div class="progarmWrapper">
					<div class="row">
						<div class="col-md-4 text-center animate-box">
							<div class="sub-courses">
								<span class="icon">
									<i class="icon-graduation"></i>
								</span>
								<div class="desc">
									<h3><a href="{{url('admin/')}}">SAP Training</a></h3>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
									<!-- <a href="javascript:void(0);" class="read-more">Read More</a> -->
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="sub-courses">
								<span class="icon">
									<i class="icon-graduation"></i>
								</span>
								<div class="desc">
									<h3><a href="sub-course.html">Angular Training</a></h3>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
									<!-- <a href="javascript:void(0);" class="read-more">Read More</a> -->
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="sub-courses">
								<span class="icon">
									<i class="icon-graduation"></i>
								</span>
								<div class="desc">
									<h3><a href="sub-course.html">Design Training</a></h3>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
									<!-- <a href="javascript:void(0);" class="read-more">Read More</a> -->
									</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="sub-courses">
								<span class="icon">
									<i class="icon-graduation"></i>
								</span>
								<div class="desc">
									<h3><a href="sub-course.html">Java Training</a></h3>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
									<!-- <a href="javascript:void(0);" class="read-more">Read More</a> -->
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="sub-courses">
								<span class="icon">
									<i class="icon-graduation"></i>
								</span>
								<div class="desc">
									<h3><a href="sub-course.html">Python Training</a></h3>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
									<!-- <a href="javascript:void(0);" class="read-more">Read More</a> -->
								</div>
							</div>
						</div>
						<div class="col-md-4 text-center animate-box">
							<div class="sub-courses">
								<span class="icon">
									<i class="icon-graduation"></i>
								</span>
								<div class="desc">
									<h3><a href="sub-course.html">Web Training</a></h3>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
									<!-- <a href="javascript:void(0);" class="read-more">Read More</a> -->
								</div>
							</div>
						</div>
					</div>
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
	
	
