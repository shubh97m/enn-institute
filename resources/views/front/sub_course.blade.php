	<section class="sub-course-detail">
		<div class="container">
			
			<div class="row">
				<div class="col-md-4">
					<div>
						<h3>{{$course['name']}}</h3>
					</div>
					<div class="subcourseWrap">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<ul class="sub-course-offerred">
									@if(!empty($sub_course))
										@foreach($sub_course as $sub_courses)
										<li class="sub-sub-course">
											<div class="sub-course-content">
												<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample{{$sub_courses['id']}}" aria-expanded="false" aria-controls="collapseExample{{$sub_courses['id']}}">
													<i class="fa fa-book" aria-hidden="true"></i>
												   <span>{{$sub_courses['name']}}</span>
												</button>
												<ul class="sub-offered collapse" id="collapseExample{{$sub_courses['id']}}">
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
													{{-- <li>SAP BASIS (For Networking, H/W, DBA, System admin.)</li>
													<li>SAP SM (Sol Man or Solution Manager)</li>
													<li>SAP BO (Business Objects)</li>
													<li>SAP PI (Process Integration)</li>
													<li>SAP HANA</li>
													<li>SAP Workflow</li>
													<li>SAP Webdynpro</li>
													<li>SAP Netweaver</li>
													<li>SAP Security</li>	 --}}
												</ul>
											</div>
										</li>
										@endforeach
										@else
										<li class="sub-sub-course">No Sub Courses Found.</li>
									@endif
									{{-- <li class="sub-sub-course">
										<div class="sub-course-content">
											<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
												<i class="fa fa-book" aria-hidden="true"></i>
											    <span>SAP Functional</span>
											</button>
											<ul class="sub-offered collapse" id="collapseExample1">
												<li>SAP FI (For Accounting)</li>
												<li>SAP CO (For Controlling)</li>
												<li>SAP FICO (For Integrated)</li>
												<li>SAP MM (For Purchase and Inventory)</li>
												<li>SAP SD (For Sales and Marketing)</li>
												<li>SAP HCM/HRM (For Human Resourse Management)</li>
												<li>SAP Logistics (For Logistics)</li>
												<li>SAP CRM (For Customer Relationship)</li>
												<li>SAP PP (For Production Planning & Controlling)</li>
												<li>SAP PM (For Plant Maintenance)</li>
												<li>SAP PS (For Project Management and Planning)</li>
												<li>SAP QM (For Quality Management)</li>	
											</ul>
										</div>
									</li>
									<li class="sub-sub-course">
										<div class="sub-course-content">
											<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
												<i class="fa fa-book" aria-hidden="true"></i>
											    <span>SAP Cloud Platform</span>
											</button>
											<ul class="sub-offered collapse" id="collapseExample1">
												<li>SAP Ariba</li>
												<li>SAP S/4HANA Cloud</li>
												<li>SAP SuccessFactors</li>
												<li>SAP Hybris Service Cloud</li>
												<li>SAP Cloud Platform</li>
												<li>SAP Customer Experience (C4HANA)</li>
												<li>SAP Enable Now</li>
												<li>SAP Integrated Business Planning</li>
												<li>SAP Learning Hub</li>
												<li>SAP Leonardo</li>
											</ul>
										</div>
									</li>
									<li class="sub-sub-course">
										<div class="sub-course-content">
											<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
												<i class="fa fa-book" aria-hidden="true"></i>
											    <span>Industry Specific Modules</span>
											</button>
											<ul class="sub-offered collapse" id="collapseExample1">
												<li>SAP IS Banking (For Banking)</li>
												<li>SAP IS BChemical (For Chemical Industries)</li>
												<li>SAP IS EHS (For Enviornment Health & Safety)</li>
												<li>SAP IS Healthcare (For Healthcare Industries)</li>
												<li>SAP IS Oil & Gas (For Petrolium Industries)</li>
												<li>SAP IS Retail (For Retail Industries)</li>
												<li>SAP IS Utilities (For Utilities).</li>	
											</ul>
										</div>
									</li>	
									<li class="sub-sub-course">
										<div class="sub-course-content">
											<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
												<i class="fa fa-book" aria-hidden="true"></i>
											    <span>SAP Analytics</span>
											</button>
											<ul class="sub-offered collapse" id="collapseExample1">
												<li>Business Intelligence (BI)</li>
												<li>Business Warehouse (BW)</li>
												
											</ul>
										</div>
									</li>	 --}}
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
				
				<div class="col-md-8">
					<h3>Related Cousres</h3>
					<div class="owl-carousel" id="our-course">
						<div class="item courseDiv">
							<div class="sub-couse-sub-courses">
								<div class="subCourse">
									<span class="icon">
										<i class="icon-graduation"></i>
									</span>
									<div class="desc">
										<h3>SAP SM</h3>
										<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item courseDiv">
							<div class="sub-couse-sub-courses">
								<div class="subCourse">
									<span class="icon">
										<i class="icon-graduation"></i>
									</span>
									<div class="desc">
										<h3>SAP BASIS</h3>
										<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item courseDiv">
							<div class="sub-couse-sub-courses">
								<div class="subCourse">
									<span class="icon">
										<i class="icon-graduation"></i>
									</span>
									<div class="desc">
										<h3>SAP ABAP</h3>
										<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
									</div>
								</div>
							</div>
						</div>
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
	
		