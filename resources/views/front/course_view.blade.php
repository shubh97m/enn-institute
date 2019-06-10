	<section class="sub-course-detail">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div>
						<h3>{{$course['name']}}</h3>
					</div>
					<div class="subcourseWrap">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12" style="padding: 0;">
								
								<ul class="sub-course-offerred">
									@if(!empty($sub_course))
										@foreach($sub_course as $sub_courses)
									
										<li class="sub-sub-course">
											<div class="sub-course-content">
											    <div class="cardheader" id="headingOne{{$sub_courses['id']}}">
												    <h5 class="mb-0">
												        <button class="btn btn btn-primary" type="button"  data-target="#collapseExample{{$sub_courses['id']}}" aria-expanded="false" aria-controls="collapseExample{{$sub_courses['id']}}">
												        	<a href="javascript:void();">
													         	<div class="text-center">
																	<img src="{{asset('assets/img/Courses/'.$sub_courses['image'])}}" alt="images" style="height:74px;width:80px;margin-bottom: 10px;">
																</div>

															<span>{{$sub_courses['name']}}</span>
															</a>
												        </button>
												    </h5>
										    	</div>

											    <div id="collapseExample{{$sub_courses['id']}}" aria-labelledby="headingOne{{$sub_courses['id']}}" class="view-child-course">
											      	<div class="cardbody">
											        	<ul class="sub-offered">
															@php
																$childCourse = App\Models\ChildCourses::where('sub_course',$sub_courses['id'])->get();
															@endphp
															@if(!empty($childCourse))
																@foreach($childCourse as $childCourses)
																	<li>{{$childCourses->name}}</li>
																@endforeach
																@else
																<li>No child Courses found.</li>
															@endif
														</ul>
											     	</div>
											    </div>
										    </div>
										</li>
									
								  	@endforeach
												@else
										<li class="sub-sub-course not-found">No Sub Courses Found.</li>
									@endif
								</ul>
							</div>
						</div>
					</div>
				</div>
			
	<!-- </section>
	<section class="sub-course-section">	
		<div id="jsnn-sub-course">
			<div class="container"> -->
				
				<!-- <div>
					<ul class="related-list">
						<li><a href="javascript:void(0);">Home</a></li>
						<li><a href="javascript:void(0);">Course Name</a></li>
						<li><a href="javascript:void(0);">sub Course Name</a></li>
					</ul>
				</div> -->
				
				<div class="col-md-12">
					<h3>Related Courses</h3>
					<div class="owl-carousel" id="our-course">
						@if(!empty($related_courses))
							@foreach($related_courses as $related)
								<div class="item courseDiv">
									<div class="sub-couse-sub-courses">
										<div class="subCourse">
											<span class="icon">
												<img src="{{url('assets/img/Courses')}}/{{$related['image']}}" alt="course image">
											</span>
											<div class="desc">
												<h3><a href="{{url('courses/'.___encrypt($related['id']))}}">{{$related['name']}}</a></h3>
												<p title="{{($related['description'])}}">{{str_limit($related['description']),30}}</p>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						@endif
						
						
					</div>
				</div>
					<!-- <div class="col-md-4">
						<div class="side-course">
							<div class="sub-course-right">
								<div class="sub-sub-course">
									<a href="javascript:void(0);">
										<span class="icon">
											<i class="icon-graduation"></i>
										</span>
										<span>
											<h3>SAP SM</h3>
										</span>
									</a>
								</div>
								<div class="sub-sub-course">
									<a href="javascript:void(0);">
										<span class="icon">
											<i class="icon-graduation"></i>
										</span>
										<span>
											<h3>SAP ABAP</h3>
										</span>
									</a>
								</div>
								<div class="sub-sub-course">
									<a href="javascript:void(0);">
										<span class="icon">
											<i class="icon-graduation"></i>
										</span>
										<span>
											<h3>SAP Basis</h3>
										</span>
									</a>
								</div>
								<div class="sub-sub-course">
									<a href="javascript:void(0);">
										<span class="icon">
											<i class="icon-graduation"></i>
										</span>
										<span>
											<h3>SAP ABAP</h3>
										</span>
									</a>
								</div>
								<div class="sub-sub-course">
									<a href="javascript:void(0);">
										<span class="icon">
											<i class="icon-graduation"></i>
										</span>
										<span>
											<h3>SAP Basis</h3>
										</span>
									</a>
								</div>
								<div class="sub-sub-course">
									<a href="javascript:void(0);">
										<span class="icon">
											<i class="icon-graduation"></i>
										</span>
										<span>
											<h3>SAP Basis</h3>
										</span>
									</a>
								</div>
								<div class="sub-sub-course">
									<a href="javascript:void(0);">
										<span class="icon">
											<i class="icon-graduation"></i>
										</span>
										<span>
											<h3>SAP ABAP</h3>
										</span>
									</a>
								</div>
							</div>
						</div>
					</div> -->
			</div>
		</div>
	</section>
	
		