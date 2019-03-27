 <div class="container">
	<div class="row">
	<div class="col-md-6 animate-box pad-btm">
	<h2 class="contact-info-size">Get In Touch</h2>
		<form role="contact" action="{{url('ask-a-demo')}}" method="POST">
							{{csrf_field()}}
							<div class="row form-group">
								<div class="col-md-6">
									<!-- <label for="fname">First Name</label> -->
									<input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
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
									<!-- <label for="message">Message</label> -->
									<input type="text" name="mobile" id="mobile" class="form-control" placeholder="Your mobile number">		</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<select class="form-control">
										<option>
												
										</option>	
									</select>

								</div>
							</div>

							<div class="form-group">
								<button  type="button" data-request="ajax-submit" data-target='[role="contact"]' class="btn btn-primary">Send Message</button>
							</div>
						</form>	