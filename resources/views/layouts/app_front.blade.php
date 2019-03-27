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

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<link rel="icon" type="image/png" href="images/logo/logo.png">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('assets/css/animate')}}.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" />
	<!-- Icomoon Icon Fonts-->
	<!-- <link rel="stylesheet" href="css/icomoon.css"> -->
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('assets/css/flexslider.css')}}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
	
	<!-- Flaticons  -->
	<!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
	<link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
	<!--<link rel="stylesheet" href="{{asset('fonts/icomoon/icomoon.css')}}"> -->

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	
	<!-- Modernizr JS -->
	<script src="{{asset('assets/js/modernizr-2.6.2.min.js')}}"></script>
	<link rel="stylesheet" href="{{asset('assets/css/sweetalert2.css')}}">
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

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="fa fa-angle-up"></i></a>
	</div>
	<div class="popupmodal">
	        <div id="modal-exam-form" class="modal fade" role="dialog">
	           <div class="modal-dialog">
		          <!-- Modal content-->
		          	<div class="modal-content">
			            <div class="modal-header">
			              <button type="button" class="close" data-dismiss="modal">&times;</button>
			            </div>
			            <!--  -->
		  				<a href="#register-form-exam" data-toggle="modal" style="cursor: pointer;">
				            <div class="modal-body popupmodal-body">
				              	<img src="{{url('images/Capture-img.jpg')}}" alt="capture" id="img-modal">
				            </div>
			        	</a>
		          	</div>
	            </div>
	        </div>
        </div>
	<div class="popupmodal">
        <!-- Modal -->
	        <div id="register-form-exam" class="modal fade" role="dialog">
	           <div class="modal-dialog modal-lg">
	          <!-- Modal content-->
	          <div class="modal-content">
	            <div class="modal-header">
	              	<button type="button" class="close" data-dismiss="modal">&times;</button>
	              	<div class="logo-modal">
		               <h4>Exam Register</h4>
		            </div>
	            </div>
	           <!--  <div class="text-center img-logo-modal">
	            	<img src="images/logo/logo.png" alt="logo">
	            </div> -->
	           
	            <div class="modal-body popupmodal-body">
		            <div>
		            <div class="col-md-7 col-sm-12 col-xs-12">
		            	<div class="popup-img-left">
		            		<img src="images/message.jpg" alt="register">
		            	</div>
		            </div>
			        <div class="col-md-5 col-sm-12 col-xs-12">
			              <form role="place-order" method="POST" action="" class="popup-form">
			                
			                <input type="hidden" name="product_id" value="">
			                <input type="hidden" name="user_id" value="">
			                
			               <div class="form-group">
			               		<div class="inner-addon left-addon">
			               			<i class="fa fa-user fa-lg"></i>
				                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
			                  		<input type="text" data-request="isnumeric" class="form-control" id="phone" name="name" value="" placeholder="Full Name">
			                  	</div>
			                </div>
			                <div class="form-group">
			                 	<div class="inner-addon left-addon">
			                 		<i class="fa fa-envelope fa-lg"></i>
				                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
			                  		<input type="text" data-request="isnumeric" class="form-control" id="phone" name="name" value="" placeholder="Email">
			                  	</div>
			                </div>
			                <div class="form-group">
			                  <div class="inner-addon left-addon">
			                  		<i class="fa fa-phone fa-lg"></i>
				                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
			                  		<input type="text" data-request="isnumeric" class="form-control" id="phone" name="name" value="" placeholder="Phone no">
			                  	</div>
			                </div>
			                <div class="form-group">
			                  <div class="inner-addon left-addon">
			                  		<i class="fa fa-book fa-lg"></i>
				                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
			                  		<input type="text" data-request="isnumeric" class="form-control" id="phone" name="name" value="" placeholder="Scholorship Date">
			                  	</div>
			                </div>
			                <div class="form-group">
			                  <div class="inner-addon left-addon">
			                  		<i class="fa fa-book fa-lg"></i>
				                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
			                  		<select class="form-control">
			                  			
					                  	<option value="">Select Degree</option>
					                  	<option>SAP </option>
					                  	<option>SAP Basis</option>
					                  	<option>SAP SM</option>
					                  	<option>SAP ABAP</option>
					                  	<option>Php</option>
					                  	<option>Java</option>
					                 </select>
			                  	</div>
			                </div>
			                <div class="form-group">
			                  <div class="inner-addon left-addon">
			                  		<i class="fa fa-book fa-lg"></i>
				                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
			                  		<input type="text" data-request="isnumeric" class="form-control" id="phone" name="name" value="" placeholder="College Name">
			                  	</div>
			                </div>
			                 <div class="form-group">
			                  <div class="inner-addon left-addon">
			                  		<i class="fa fa-book fa-lg"></i>
				                  <!-- <label for="pwd">Email<sup class="required-sup">*</sup>:</label> -->
			                  		<input type="text" data-request="isnumeric" class="form-control" id="phone" name="name" value="" placeholder="Scholorship Technology Name">
			                  	</div>
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
	        </div>
        </div>
	<!-- jQuery -->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('assets/js/jquery.flexslider-min.js')}}"></script>
	<!-- Owl carousel -->
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
		$(window).load(function(){        
	   		$('#modal-exam-form').modal('show');
	    });
	</script>
	<script type="text/javascript">
		$(document).ready(function(){ 
		// alert("ghgg");    
	   		$(".hidemenu").click(function(){
                $(".submenu").toggle();
            });
            $(".search-input").click(function(){
            	$(".searchIcon").css("display","none");
            	$(".cross-icon").css("display","block");
                $(".search-toggle").toggle();
                
			});
			$(".cross-icon").click(function(){
				$(".searchIcon").css("display","block");
				$(".cross-icon").css("display","none");
			});
			$("#img-modal").click(function(){
				$("#modal-exam-form").modal("hide");
				$("#register-form-exam").show();
			});
            // window.addEventListener("keyup", function(e){ if(e.keyCode == 27) history.back(); }, false);

	    });
	    document.onkeydown = function(e){ 
		   if (window.event.keyCode == 27) {
		      history.go(-1);
		   }
		};
	    
	</script>
	</body>
</html>

