<section class="offeredSection">
	
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 border-right">
				<div>
					<h2 class="offeredHeading wow fadeInUp">Offered Courses</h2>
				</div>
				<div class="offeredLeft">
					
					@if(!empty($course))
						@foreach($course as $courses)
						<div class="card m-b-10">
							<div class="card-heading">
								<div class="b-polygons">
							        <a href="javascript:void(0);" class="b-polygon b-polygon_hexagon">
							            <span class="b-polygon-part">
							                <span class="b-polygon-part b-polygon-part_content">
							                    <img src="{{asset('assets/img/Courses/'.$courses['image'])}}" alt="images" style="border: 1px solid #03489b;">
												
							                </span>
							            </span>
							        </a>	
								</div>
								<div class="offeredname">{{$courses['name']}}</div>
							</div>
						</div>
						@endforeach
					@endif
					{{-- <div class="card m-b-10">
						<div class="card-heading">
							<img src="{{asset('images/sap.jpg')}}" alt="images" style="height:74px;border: 1px solid #03489b;">
							SAP Analysis
						</div>
					</div>
					<div class="card m-b-10">
						<div class="card-heading">
							<img src="{{asset('images/sap.jpg')}}" alt="images" style="height:74px;border: 1px solid #03489b;">
							SAP Analysis
						</div>
					</div>
					<div class="card m-b-10">
						<div class="card-heading">
							<img src="{{asset('images/sap.jpg')}}" alt="images" style="height:74px;border: 1px solid #03489b;">
							SAP Analysis
						</div>
					</div>
					<div class="card m-b-10">
						<div class="card-heading">
							<img src="{{asset('images/sap.jpg')}}" alt="images" style="height:74px;border: 1px solid #03489b;">
							SAP Analysis
						</div>
					</div> --}}
				</div>
			</div>
		
			<div class="col-lg-8 col-md-6">
				<div class="offeredRight">
					<h2 class="offeredHeading wow fadeInUp">Apply Here !!</h2>
					<form method="post" action="{{url('scholarship')}}" role="scholarship">
						{{csrf_field()}}
						<input type="hidden" name="type" value="offer">
						<div class="offeredcourse-form">
							<div class="form-group">
			               		<div class="inner-addon left-addon">
			               			<i class="fa fa-user fa-lg"></i>
				                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
			                  		<input type="text"  class="form-control" name="name"  placeholder="Full Name">
			                  	</div>
			                </div>
			                <div class="form-group">
			                 	<div class="inner-addon left-addon">
			                 		<i class="fa fa-envelope fa-lg"></i>
				                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
			                  		<input type="text"  class="form-control" name="email"  placeholder="Email">
			                  	</div>
			                </div>
			                <div class="form-group">
			                  <div class="inner-addon left-addon">
			                  		<i class="fa fa-phone fa-lg"></i>
				                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
			                  		<input type="text"  class="form-control" name="phone"  placeholder="Phone no">
			                  	</div>
			                </div>
			                
			                <div class="form-group">
			                  <div class="inner-addon left-addon">
			                  		<i class="fa fa-book fa-lg"></i>
				                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
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
				                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
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
				                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
			                  		<input type="text"  class="form-control" name="college_name"  placeholder="College Name">
			                  	</div>
			                </div>
			                </div> 
			                <div class="form-group">
			                  <button type="button" data-request="ajax-submit" data-target='[role="scholarship"]' class="btn btn-blue">Submit</button>
			                </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>