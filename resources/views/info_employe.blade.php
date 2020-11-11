<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>Start & Go | Profile</title>
	<link rel="icon" href="{{URL::to('login-admin/img/icon.ico')}}" />

	<!-- Bootstrap implementation -->
	<link href="{{asset('font-office/dist/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('font-office/css/style.css')}}" rel="stylesheet" type="text/css" />
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	<!-- GOOGLE FONTS -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css" />
	<!-- FONTELLO -->
	<link href="{{asset('font-office/font/fontello/css/fontello.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('font-office/font/fontello/css/animation.css')}}" rel="stylesheet" type="text/css" />
	<!--if IE 7
	link(rel='stylesheet', href='font/fontello/css/fontello-ie7.css')
	-->
	<!-- ANONYMOUS PRO FONT-->
	<link href="http://fonts.googleapis.com/css?family=Anonymous+Pro:400,700" rel="stylesheet" type="text/css" />
	<!-- DRIPICONS -->
	<link href="{{asset('font-office/font/dripicons/webfont.css')}}" rel="stylesheet" type="text/css" />
	<!-- SIMPLE LINE ICONS -->
	<link href="{{asset('font-office/font/simple-line-icons/simple-line-icons.css')}}" rel="stylesheet" type="text/css" />
	<!-- THEMIFY ICONS -->
	<link href="{{asset('font-office/font/themify-icons/themify-icons.css')}}" rel="stylesheet" type="text/css" />
	<!-- FONTASTIC ICONS -->
	<link href="{{asset('font-office/font/fontastic/styles.css')}}" rel="stylesheet" type="text/css" />
	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link href="{{asset('font-office/css/extralayers.css')}}" media="screen" rel="stylesheet" type="text/css" />
	
	<!-- CarouFredSel -->
	<link href="{{asset('font-office/css/caroufredsel.css')}}" rel="stylesheet" type="text/css" />
	<!-- WOW.JS REVEAL ANIMATIONS -->
	<link href="{{asset('font-office/css/animate.css')}}" rel="stylesheet" type="text/css" />
	<!-- PYE CHART -->
	<link href="{{asset('font-office/css/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" />
	<!-- Hover Effect Ideas -->

	
	<!-- Lightcase ( image popup preview ) -->
	
</head>
<body class="cover5b">

<!-- start preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- end preloader -->

<!-- LEFTSIDE -->
<div id="sectionleftbg" class="leftsidemenu2 col-md-3 bgdark z1000">
	<div class="prlx-leftbg"></div>
	<div class="leftcontent relative hfull">
		<div class="usericon">
			<a href="index.html"><img src="{{Storage::url(Session::get('image'))}}" class="fwi" alt="" /></a>
		</div>
		<div class="clearfix"></div>
		<h1 class="titlefont">
			Bienvenue Mr/Mme. <span>{{ Session::get('name') }}</span><br/>
			Espace reservé à vous<br/>
			
		</h1>
		<ul class="leftbgmenu">
			<li class="active"><a href="{{URL::to('/profilutilisateur')}}">Paramètres du compte</a></li>
			<li><a href="{{URL::to('/HistoireCommande')}}">Dernières commandes</a></li>
			<li><a href="{{URL::to('/index')}}">shop</a></li>
			<li><a href="{{URL::to('/contactutilisateur')}}">Contact</a></li>
			<li><a href="{{URL::to('/logoututilisateur')}}">Se deconnecter</a></li>
		</ul>
		
		
	</div>

</div>

<!-- RIGHT SIDE -->
<div id="sectionrightbg" class="col-md-9 col-lg-8 col-md-offset-3 offset-0">
	

	<!-- CONTENT -->
	<div class="bgwhite owhidden cpdd">
		
		<!-- Top Colver -->
		
		
		<!-- Description -->
		
		
		<!-- 2 images -->
		

		<!-- SECTION INFO -->
		
		<!-- END OF SECTION INFO -->

		<div class="separator100 none"></div>

		<!-- SECTION CONTACT -->
		  @yield('info_employe')
		<!-- END OF CONTACT -->
<div class="btmfooter">
		<p class="clightgrey left">Powered with love &copy; 2019</p>
		<p class="clightgrey right">
			<a href="#" class="clightgrey">FAQ's</a> | 
			<a href="#" class="clightgrey">Help</a>
		</p>

		<div class="clearfix"></div>
	</div>
	</div>
	<!-- END OF CONTENT -->
	
	<!-- FOOTER -->
	

	<!-- FOOTER -->
</div>

<p id="back-top"><a href="#top"><span class="ti-angle-up"></span></a></p>

<!-- jQuery --> 
<script type="text/javascript" src="{{asset('font-office/js/jquery.js')}}"></script>

<!-- COMPRESSED -->
<script type="text/javascript" src="{{asset('font-office/js/compressed.js')}}"></script>

<!-- Parallax & Animations -->
<script type="text/javascript" src="{{asset('font-office/js/animations.js')}}"></script>

<!-- FUNCTIONS -->
<script type="text/javascript" src="{{asset('font-office/js/functions.js')}}"></script>

<!-- Including all compiled Bootstrap plugins  --> 
<script type="text/javascript" src="{{asset('font-office/dist/js/bootstrap.min.js')}}"></script>

</body>
</html>