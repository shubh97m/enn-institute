<div class="container">
	<h2 class="contact-info-size text-center mt-4 pd-4" >Get In Touch</h2>
		<div class="askademo-wrapper">
		<form role="contact" action="{{url('ask-a-demo')}}" method="POST">
		{{csrf_field()}}
			<div class="row form-group">
				<div class="col-md-12">
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
					<input type="text" name="mobile" id="mobile" class="form-control" placeholder="Your mobile number">	
				</div>
			</div>
			<div class="row form-group">
		    	<div class="col-md-12">
					  <select class="form-control" name="courses">
					  	<option value="">-- Select Course Name--</option>
					  	@foreach($course as $courses)
				  <option value="{{!empty($courses['name'])?$courses['name']:''}}">{{!empty($courses['name'])?$courses['name']:''}}</option>	@endforeach
					  </select>     				
				</div>	  	
			</div>
			
			<div class="row form-group">
			  
			   <div class="col-md-12">	
					<button  type="button" data-request="ajax-submit" data-target='[role="contact"]' class="btn btn-primary text-center">Send Message</button>
				</div>
			  
			</div>
		</form>	
	</div>
</div>