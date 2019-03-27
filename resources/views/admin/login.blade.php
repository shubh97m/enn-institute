<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
	    <meta content="" name="description"/>
	    <meta content="" name="author"/>

	    
	    <meta name="_token" content="{{ csrf_token() }}">
	    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
	    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
	  
	    <meta charset="utf-8"/>
	    <title>ENN-Technologies </title>

	 	<link rel="icon" type="image/png" href="{{asset('assets/img/logo.png')}}">
	 	<!-- Bootstrap 3.3.7 -->
	 	<link rel="stylesheet" href="{{asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
	  	<!-- Theme style -->
	  	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	  	
	  	<link rel="stylesheet" href="{{asset('assets/css/sweetalert2.css')}}">
	  	<!-- Google Font -->
	</head>
	
	<body  class="loginpg">
		<div class="container ">
			<div class="row">
				<div class="box_xs">
	     	       <form role="login" action="{{url('admin/login')}}"  method="post" data-request="enable-enter">
	            	{{ csrf_field() }}
	            		<div class="formWrapper">
	            			<div id="jsnn-logo" style="text-align: center;"><a href="javascript:void(0);"><img src="../images/logo/logo.png"></a></div>
		                <h3 class=" text-center ">Sign in to Proceed</h3> 
		                <div class="m-b-20 formLogin">  
			                <div class="input-group">
							    <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
							    <input  id="inputEmail3" type="text" class="form-control" name="email" placeholder="Email">
							</div>
						</div>
		                <!-- <div class="form-row "> 
		                  <div class="form-group col-md-2  ">
		                    <label for="inputEmail3" class="control-label whites">Email</label>
		         		  </div>			
		                  <div class="form-group col-md-8 ">
		                    <input type="email" name="email" class=" form-control" id="inputEmail3" placeholder="Email">
		                   </div> 
		                 </div> -->
		                <div class="m-b-20 formLogin">
			                <div class="input-group">
							    <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
							    <input type="password" class="form-control" name="password" placeholder="Password" id="inputPassword3">
							</div>
						</div>
		                 <!-- <div class="form-row "> 
		                  <div class="form-group col-md-2 mr-3 text-light">
		                  	<label for="inputPassword3" class=" control-label whites">Password</label>
		                   </div>
		                	<div class="form-group col-md-8"> 
		                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
		                  	<input type="hidden" name="not_exists">
		                   </div> 
		                 </div>   -->
		                 <div class="form-row "> 
		                  <div class="form-group whites">
		                        <input type ="checkbox"> Remember me
		                   </div>
		                  </div>	
			                 <div class="form-row "> 
			                  <div class="form-group">
			         			<small><a class="nav-link whites">Forget Password?</a></small>	
								<button type ="button" class="btn btn-primary  login" data-request ="ajax-submit" data-target='[role="login"]' style="float: right;font-size: 14px;">Sign In</button>	
			                   </div>
		                   	</div>
		                  </div> 
		            	</form>
     		         </div>            
			       </div>
           	   	</div>
         	  </div>

	    <!-- jQuery 3 -->
		<script src="{{asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="{{asset('assets/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
		  $.widget.bridge('uibutton', $.ui.button);
		</script>
		<!-- Bootstrap 3.3.7 -->
		<script src="{{asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<!-- Sparkline -->
		<script src="{{asset('assets/js/sweetalert2.js')}}"></script>
		<!-- FastClick -->
		<!-- AdminLTE App -->
		<script src="{{asset('assets/dist/js/pages/dashboard.js')}}"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="{{asset('assets/js/script.js')}}"></script>
		<script type="text/javascript">
		$(function () {
		    $.ajaxSetup({
		        headers: {
		            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
		        },isLocal: false
		    });
		});  

		$(window).load(function(){
		    setTimeout(function(){
		        $('#cover').fadeOut(500);
		    },1000)
		});
		</script>
	<script type="text/javascript">
	    setTimeout(function(){
	    $('[data-request="enable-enter"]').on('keyup','input',function (e) {
	    e.preventDefault();
	    if (e.which == 13) {
	    $('[data-request="enable-enter"]').find('.login').trigger('click');
	    return false;    //<---- Add this line
	    }
	    }); 
	    },100);
	</script>
@yield('requirejs')

	</body>
</html>