<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ENN Technologies</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="google-site-verification" content="91j39t4YkHbQztL5T1wCSXA9z3QhwAPPHq98pjsPUCY" />
  <!-- Facebook and Twitter integration -->
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<link rel="icon" type="image/png" href="{{url('images/logo/logo.png')}}">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" />
	<!-- Icomoon Icon Fonts-->
	<!-- <link rel="stylesheet" href="css/icomoon.css"> -->
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/flexslider.css">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/thumbnail-slider.css')}}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
	
	<!-- Flaticons  -->
	<!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
	<link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	
	<!-- Modernizr JS -->
	<script src="{{asset('assets/js/modernizr-2.6.2.min.js')}}"></script>
	<link rel="stylesheet" href="{{asset('assets/css/sweetalert2.css')}}">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	

	</head>
	<body>
		
	<div class="jsnn-loader"></div>
	
	<div id="page">
		@yield('content')
	</div>
	 <div class="popupmodal askdempwrap">
        <!-- Modal -->
	        <div id="askdemo" class="modal fade" role="dialog">
	           <div class="modal-dialog modal-lg">
	          <!-- Modal content-->
	          <div class="modal-content">
	            <div class="modal-header">
	            	<div class="logo-modal">
		               <h4 style="text-transform: uppercase;">Schedule A Demo</h4>
		            </div>
	              	<button type="button" class="close" data-dismiss="modal">&times;</button>
	              	
	            </div>

	            <div class="modal-body popupmodal-body">
		            <div class="row">
		            	<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
		            		<div class="askhead">
				               <h6>Demo as per your choice</h6>
				            </div>
		            		<div class="ask-demo-head">
		            		    <h6>Please fill the information here:</h6>
		            		</div>
			              	<form role="askDemo" method="POST" action="{{url('askdemo')}}" class="popup-form">
			              		{{csrf_field()}}
			               	<div class="form-group">
			               		<div class="inner-addon left-addon">
			                  		<input type="text"  class="form-control"  name="name" value="" placeholder="Full Name">
			                  	</div>
			                </div>
			                <div class="form-group">
			                 	<div class="inner-addon left-addon">
			                  		<input type="text"  class="form-control"  name="email" value="" placeholder="Email">
			                  	</div>
			                </div>
			                <div class="form-group">
			                  <div class="inner-addon left-addon">
			                  	<input type="text" class="form-control" name="mobile" placeholder="Phone no">
			                  	</div>
			                </div>
			              <div class="form-group">
					            <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
					                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" placeholder="Demo date and time">
					                <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
					                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
					                </div>
					            </div>
					        </div>
			               
			                <div class="form-group">
			                  	<div class="inner-addon left-addon">
			                  		<select class="form-control" name="courses">
										<option value="">Select Course</option>
											@foreach($course as $courses)
								  			<option value="{{!empty($courses['name'])?$courses['name']:''}}">{{!empty($courses['name'])?$courses['name']:''}}</option>	
								  		@endforeach
					                </select>
			                  	</div>
			                </div>
			                <div class="form-group">
											<div class="checkbox">
											   <input type="checkbox" value="1" name="tos" id="iq_check_callback" class="css-checkbox">
											   <label for="iq_check_callback" class="css-label human" style="background-position: 0px 0px;">I am Human.</label>
											   <input type="hidden" class="hidden_human" value="" name="iq_human">
											</div>
										</div>
		                <div class="form-group">
		                  <button type="button" data-request="ajax-submit" data-target='[role="askDemo"]' class="btn btn-blue">Submit</button>
		                </div>
			             </form>
		            	</div>
			            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 borderleft">
			            	<div class="popup-img-left">
			            		<img src="{{asset('images/askdemo.jpg')}}" alt="askdemo">
			            	</div>
			            </div>
			        
	            	</div>
	            </div>
	          </div>
	          
	        </div>
	    </div>
    </div>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="fa fa-angle-up"></i></a>
	</div>
	
	
	<!-- jQuery -->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- Waypoints -->
	<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/jquery.flexslider.js"></script>
	<!-- Owl carousel -->
	<script type="text/javascript" src="{{asset('assets/js/thumbnail-slider.js')}}"></script>
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.mixitup.js')}}"></script>
	<script src="{{asset('assets/js/magnific-popup-options.js')}}"></script>
	<!-- Counters -->
	<script src="{{asset('assets/js/jquery.countTo.js')}}"></script>
	<!-- Main -->
	
	
	<script src="{{asset('assets/js/main.js')}}"></script>
	<script src="{{asset('assets/js/custom.js')}}"></script>
	<script src="{{asset('assets/js/sweetalert2.js')}}"></script>
	<script src="{{asset('assets/js/script.js')}}"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" type="text/javascript"></script>
	<script>
	      $(window).scroll(function () { 
	       if ($(this).scrollTop() < 20) {
	       		$("header").parent().removeClass("header-hidden", 1000);
		          // jQuery("header").removeClass("header-hidden", 1000);
		          // jQuery("#page").removeClass("page-hidden", 1000);
		        }
                else
                	$("header").parent().addClass("header-hidden", 1000);
                 //  jQuery("header").addClass("header-hidden", 1000);
              	  // jQuery("#page").addClass("page-hidden", 1000);
		      });
	     
    </script>
    
	<script type="text/javascript">
		$(document).ready(function(){ 
		// alert("ghgg");    
	   		$(".hidemenu").click(function(){
                $(".submenu").toggle();
            });
            $(".search-input").click(function(){
            	/*$(".searchIcon").css("display","none");
            	$(".cross-icon").css("display","block");*/
                $(".search-toggle").toggle();
                
			});
			$('.search-input').on('click',function(event){
			   event.stopPropagation();
			    
			    $('.menuListing').toggleClass('mobile_search');
			});
			$(".search-mobile-input").click(function(){
            	/*$(".searchIcon").css("display","none");
            	$(".cross-icon").css("display","block");*/
                $(".search-mobile-toggle").toggle();
                
			});
			$('.search-mobile-input').on('click',function(event){
			   event.stopPropagation();
			    
			    $('.rightHeader').toggleClass('mobile_search');
			});
			
			// $('#datetimepicker1').datetimepicker({
			// 	format:'DD/MM/YYYY hh:mm a'
			// });

			$("#testimonials-user").owlCarousel({
                  // items:4,
                  loop:true,
                  margin:10,
                  nav:false,
                  dots:false,
                  slideTransition: 'linear',
                  autoplaySpeed: 2000,
                  autoplay:true,
                  // autoplayTimeout:3000,
                  // autoplayHoverPause:true,
                  responsive: {
                    0: {
                        items: 1
                    },
                    360: {
                        items: 1
                    },
                    500: {
                        items: 1
                    },
                    991: {
                        items: 2
                    },
                    1600: {
                        items: 2
                    }
                }
              });

			$(".offcanvas-has-dropdown").click(function(){
				$(".dropdownMenu").css("display","block");
			});
            // window.addEventListener("keyup", function(e){ if(e.keyCode == 27) history.back(); }, false);


	    });
	    document.onkeydown = function(e){ 
		   if (window.event.keyCode == 27) {
		      history.go(-1);
		   }
		};
		$(document).ready(function() {
	  //       $('img').bind('contextmenu', function(e) {
			//     return false;
			// });
			// $('body').bind('contextmenu', function(e) {
			// 	e.preventDefault();
			//     return false;
			// });

	    }); 
		$(document).ready(function() {
			$(".fancybox-button").fancybox({
				prevEffect		: 'none',
				nextEffect		: 'none',
				closeBtn		: false,
				helpers		: {
					title	: { type : 'inside' },
					buttons	: {}
				}
				
			});
			
			$(".allcourse-main .hover-menu").on('mouseenter', function(event) {
			  $('.allcourse-main .hover-menu').removeClass("child-active");
			  $(this).addClass("child-active");

			});
			$(".hover-menu .sub-hover .sub-sub-allcourse-list").on('mouseenter', function(event) {
			  $('.hover-menu .sub-hover .sub-sub-allcourse-list').removeClass("sub-active");
			  $(this).addClass("sub-active");

			});
		});
		
	    
	</script>
	
	 <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker();
        });
    </script>
    <script type="text/javascript">
        AOS.init({
          duration: 1200,
          disable: 'mobile'
        })
    </script>

    <script>

    $(document).ready(function() {

     var docHeight = $(window).height();
     var footerHeight = $('#jsnn-footer').height();
     var footerTop = $('#jsnn-footer').position().top + footerHeight;

     if (footerTop < docHeight) {
      $('#jsnn-footer').css('margin-top', 2+ (docHeight - footerTop) + 'px');
     }
    });
   </script>
	
	@yield('requirejs')
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5cb1aa5ad6e05b735b426078/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
	</body>
</html>

