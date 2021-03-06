		
		<div id="jsnn-contact" class="topspace">
			<div class="container">
				<div class="row">
						<div class="col-md-6 animate-box pad-btm" data-aos="fade-right">
						<h2 class="contact-info-size">Get In Touch</h2>
						<form role="contact" action="{{url('contact')}}" method="POST">
							{{csrf_field()}}
							<div class="row form-group">
								<div class="col-md-6">
									<!-- <label for="fname">First Name</label> -->
									<input type="text" name="first_name" id="fname" class="form-control" placeholder="Your firstname">
								</div>
								<div class="col-md-6">
									<!-- <label for="lname">Last Name</label> -->
									<input type="text" name="last_name" id="lname" class="form-control" placeholder="Your lastname">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="email">Email</label> -->
									<input type="text" name="email" id="email" class="form-control" placeholder="Your email address">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="subject">Subject</label> -->
									<input type="text" name="subject" id="subject" class="form-control" placeholder="Your subject of this message">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<!-- <label for="message">Message</label> -->
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
								</div>
							</div>
							<div class="form-group">
								<button  type="button" data-request="ajax-submit" data-target='[role="contact"]' class="btn btn-primary">Send Message</button>
							</div>
						</form>		
					</div>
					<div class="col-md-6  animate-box" data-aos="fade-left">
						<h2 class="contact-info-size">Contact Information</h2>
						<div class="row">
							<div class="col-md-12">
								<div class="contact-info-wrap-flex">
									<div class="con-info">
										<p><span><i class="icon-pointer"></i></span>{{$settings->address}}</p>
									</div>
									<div class="con-info">
										<p>Skype:<span><i class="icon-phone"></i></span> <a href="tel:+ +011-{{$settings->skype_number}}"> 011-{{$settings->skype_number}}</a></p>
									</div>
									<div class="con-info">
										<p>Phone:<span><i class="icon-phone"></i></span> <a href="tel:+91-{{$settings->phone}}">{{$settings->phone}}</a>,  <a href="tel:+91-{{$settings->phone2}}">{{$settings->phone2}}</a></p>
									</div>
								


									<div class="con-info">
										<p><span><i class="icon-envelope"></i></span> <a href="mailto:{{$settings->email}}">{{$settings->email}}</a></p>
									</div>
									<div class="con-info">
										<p><span><i class="icon-globe"></i></span> <a href="http://enntechnologies.in">enntechnologies.in</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
		<div id="" class="jsnn-map" data-aos="fade-up">
			<div class="container">
				<div class="mapsection-contact">
	           		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.6385473239793!2d77.29242101455978!3d28.640593290468118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfb50f3139a0f%3A0x423c97213415e690!2sICICI+Bank+Preet+Vihar%2C+Delhi+-+Branch+%26+ATM!5e0!3m2!1sen!2sin!4v1552164127712" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	        	</div>
        	</div>
		</div>
