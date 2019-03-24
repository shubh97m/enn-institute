	<footer id="jsnn-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 jsnn-widget">
						<h4>News Letter</h4>
						<div class="newsletter">
							<form>
								<input type="text" name="name" placeholder="Subscribe">
								<button class="btn-blue">Subscribe</button>
							</form>
						</div>
					</div>
					<div class="col-md-3 jsnn-widget">
					<h4>Useful Links</h4>
						<ul class="jsnn-footer-links">
							<li><a href="javascript:void(0);"><i class="fa fa-check"></i>About Us</a></li>
							<li><a href="javascript:void(0);"><i class="fa fa-check"></i> FAQ</a></li>
							<li><a href="javascript:void(0);"><i class="fa fa-check"></i>Conatct Us</a></li>
							<li><a href="javascript:void(0);"><i class="fa fa-check"></i> Terms & Conditions</a></li>
						</ul>
					</div>

					<div class="col-md-3  jsnn-widget">
						<h4>Contact Info</h4>
						<ul class="jsnn-footer-links">
		@php
		$settings = _arefy(App\Models\generalSettings::where('status','!=','trashed')->first())		
		@endphp
							<li><i class="fa fa-map-marker" style="color:#67bfff;"></i> 
							{{$settings['address']}}</li>
							<li><a href="tel://011-46702233"><i class="fa fa-phone"></i> 011-{{$settings['skype_number']}}</a></li>
							<li><a href="mailto:info@yoursite.com"><i class="fa fa-envelope"></i> {{$settings['email']}}</a></li>
							<!-- <li><a href="javascript:void(0);"><i class="fa fa-map-marker"></i> yourwebsite.com</a></li> -->
						</ul>
					</div>
					<div class="col-md-3 jsnn-widget">
						<!-- <h4>Contact Us</h4> -->
						<div class="mapsection">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.6385473239793!2d77.29242101455978!3d28.640593290468118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfb50f3139a0f%3A0x423c97213415e690!2sICICI+Bank+Preet+Vihar%2C+Delhi+-+Branch+%26+ATM!5e0!3m2!1sen!2sin!4v1552164127712" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    	</div>
						
					</div>
					
				</div>
			</div>
			<div class="text-center">
			@php		
     		   $data['settings'] = _arefy(App\Models\generalSettings::where('id',1)->first());
       	 	          // pp($data['settings']);
        		$data['social_sites']= json_decode($data['settings']['social_sites']);
     		@endphp	
					<ul class="jsnn-social-icons">
						<li><a href=" {{(!empty($social_sites)?$social_sites->facebook:'')}}"><i class="fa fa-twitter"></i></a></li>
						<li><a href="{{(!empty($social_sites)?$social_sites->facebook:'')}}"><i class="fa fa-facebook"></i></a></li>
						<li><a href="{{(!empty($social_sites)?$social_sites->facebook:'')}}"><i class="fa fa-linkedin"></i></a></li>
					<!-- <li><a href="javascript:void(0);"><i class="fa fa-dribbble"></i></a></li> -->
					</ul>
				
			</div>
			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								<small class="block">	
									<div class="do-copyright">Copyright © 2018 <a href="" class="link-website">ENN Technologies</a> All rights reserved. </div>
								</small>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>

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