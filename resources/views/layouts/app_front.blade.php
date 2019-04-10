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
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
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

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/flexslider.css">

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
	
	
	<!-- jQuery -->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/jquery.flexslider.js"></script>
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
			
            // window.addEventListener("keyup", function(e){ if(e.keyCode == 27) history.back(); }, false);

	    });
	    document.onkeydown = function(e){ 
		   if (window.event.keyCode == 27) {
		      history.go(-1);
		   }
		};
	    
	</script>
	@yield('requirejs')
	</body>
</html>

