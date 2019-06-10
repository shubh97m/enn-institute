	<section class="jsnn-course" data-aos="fade-up">
			<div class="container">
				<div class="section-heading">
                  	<h2><span>About Us</span></h2>  
             	</div>
			</div>
		</section>
	<section class="about-section">
		<div id="jsnn-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-12 tabulation animate-box">
						<ul class="nav nav-tabs" data-aos="fade-up">
							<li class="active"><a data-toggle="tab" href="#plan" class="active"><i class="flaticon-sketch"></i> {{$static[0]['name']}}</a></li>
							<li><a data-toggle="tab" href="#general"><i class="icon-user"></i> {{$static[1]['name']}}</a></li>
							<!-- <li><a data-toggle="tab" href="#manage"><i class="flaticon-engineer"></i> Principal's Message</a></li> -->
							<!-- <li><a data-toggle="tab" href="#modeling"><i class="flaticon-skyline"></i>  </a></li> -->
						</ul>
						<div class="tab-content">
							<div id="plan" class="tab-pane fade show active">
								<div class="row">
									<div class="col-lg-6 col-md-12" data-aos="fade-right">
										<div class="sub-courses-img"> 
											<img src="images/about.jpg" alt="about">
										</div>
									</div>
									<div class="col-lg-6 col-md-12" data-aos="fade-left">
										<div class="sub-courses-desc">
											<h3>{{$static[0]['name']}}</h3>
											<p>{!! $static[0]['description'] !!}</p>
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
											<h3>{{$static[1]['name']}}</h3>
											<p>{!! $static[1]['description'] !!}</p>
										</div>
									</div>
								</div>
						      
						   </div>
						   <div id="manage" class="tab-pane fade">
						   	<div class="row">
									<div class="col-md-6">
										<div class="sub-courses-img" style="background-image: url(images/building-3.jpg);"></div>
									</div>
									<div class="col-md-6">
										<div class="sub-courses-desc">
											<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<ul>
												<li>It is a paradisematic country in which</li>
												<li>Even the all-powerful Pointing has no control</li>
												<li>When she reached the first hills of the Italic Mountains</li>
												<li>Alphabet Village and the subline of her own road</li>
											</ul>
										</div>
									</div>
								</div>
						   	
						   </div>
						   <div id="modeling" class="tab-pane fade">
						   	<div class="row">
									<div class="col-md-6">
										<div class="sub-courses-img" style="background-image: url(images/building-4.jpg);"></div>
									</div>
									<div class="col-md-6">
										<div class="sub-courses-desc">
											<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<ul>
												<li>It is a paradisematic country in which</li>
												<li>Even the all-powerful Pointing has no control</li>
												<li>When she reached the first hills of the Italic Mountains</li>
												<li>Alphabet Village and the subline of her own road</li>
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
		<a href="#" class="js-gotop"><i class="fa fa-angle-up"></i></a>
	</div>
