
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Responsable Entrperise | Login </title>
	<link rel="icon" href="{{URL::to('login-admin/img/icon.ico')}}" />

    
   <link rel="stylesheet" href="{{asset('login-front-office/css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('login-front-office/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('login-front-office/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('login-front-office/css/responsive.css')}}">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	<div class="container-fluid pdng0">
		<div class="row merged">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="land-featurearea">
					<div class="land-meta">
						<h1>Start & Go</h1>
						<p>
							Start & Go est une chaîne de distrubtion des cafés 
						</p>
						<div class="friend-logo">
<span><img src="{{URL::to('font-office/images/logofinal.png')}}" alt=""></span>
						</div>
						<a href="#" title="" class="folow-me">A satisfied customer is our happiness.</a>
					</div>	
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="login-reg-bg">
					
					@yield('loginESE')
				</div>
			</div>
		</div>
	</div>
</div>
<div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 10px; right: 5px; opacity: 1; cursor: pointer;"><i class="fa fa-angle-up"></i></div>

</body>	
	
	<script src="{{asset('login-front-office/js/main.min.js')}}"></script>
	<script src="{{asset('login-front-office/js/script.js')}}"></script>



</html>