<!doctype html>
<html lang="en">
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>START & GO</title>
	<link rel="icon" href="{{URL::to('login-admin/img/icon.ico')}}" />

	<!-- Bootstrap implementation -->
	<link href="{{asset('font-office/dist/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('font-office/css/style.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('font-office/css/main.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('font-office/css/login.css')}}" rel="stylesheet" type="text/css" />
	
	 <link href="{{asset('font-office/css/style.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('font-office/rs-plugin/css/settings.css')}}" media="screen" rel="stylesheet" type="text/css" />
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
	<link href="{{asset('font-office/css/settings.css')}}" media="screen" rel="stylesheet" type="text/css" />
	<!-- CarouFredSel -->
	<!-- WOW.JS REVEAL ANIMATIONS -->
	<link href="{{asset('font-office/css/animate.css')}}" rel="stylesheet" type="text/css" />
	<!-- PYE CHART -->
	<link href="{{asset('font-office/css/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" />
	<!-- Hover Effect Ideas -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css' />
	<link href="{{asset('font-office/css/demo.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('font-office/css/set1.css')}}" rel="stylesheet" type="text/css" />
	<!-- Lightcase ( image popup preview ) -->
	<link href="{{asset('font-office/css/lightcase.css')}}" rel="stylesheet" type="text/css" />
</head>


<body class="bglight2">

<!-- start preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- end preloader -->

<!-- Navigation -->
<div ID="navoffset" class="secpage shadow-off bgwhite">
	<div class="topnavbar bgwhite">
		<div class="container">

			<ul class="top-socials">
				<li class="left mr10"><a href="#"><i class="icon-facebook"></i></a></li>
				<li class="left mr10"><a href="#"><i class="icon-twitter-bird"></i></a></li>
				<li class="left mr10"><a href="#"><i class="icon-gplus"></i></a></li>
				<li class="left mr10"><a href="#"><i class="icon-dribbble"></i></a></li>
				<li class="left mr10"><a href="#"><i class="icon-youtube"></i></a></li>
			</ul>

			<div class="right top-links titlefont">
				<a href="#" class="c999 bold"><span class="ti-headphone-alt"></span> (+216) 21115893 </a> <span class="plr5">|</span>
				<a href="#" class=""><span class="ti-email"></span> E-mail </a> <span class="plr5">|</span>
              			</div>
		</div>
	</div>
	<div class="navigation dark">

		<div class="container">
			<div class="logo"><a href="index.html"><img src="{{URL::to('font-office/images/logofinal.png')}}" class="mt5 relative z100" alt=""
				 /></a></div>

					
			<div class="navbar navbar-default" role="navigation">
				<div class="container-fluid relative">

					<button type="button" class="btn left hide-show-button none">
					    <span class="burgerbar"></span>
					    <span class="burgerbar"></span>
					    <span class="burgerbar"></span>
					</button>
					<a href="#" class="closemenu"></a> 

					<!-- mobile version drop menu -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle hamburger" data-toggle="collapse" data-target=".navbar-collapse">
						  <span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>
					</div>
					
					<!-- menu -->
					<div class="mainmenu mobanim dark-menu navbar-collapse white collapse offset-0 ">
						<ul class="nav navbar-nav mobpad">

							<li class="dropdown static">
							      <a class="dropdown-toggle" href="{{URL::to('/Start&Go')}}">Acceuil  <b class="caret"></b></a>
							</li>
							
								<li class="dropdown">
							  <a class="dropdown-toggle" href="{{URL::to('/Histoire')}}">Histoire <b class="caret"></b></a>
                
							
							</li>
							<li class="dropdown">
							  <a class="dropdown-toggle" href="{{URL::to('/FAQ')}}">FAQ <b class="caret"></b></a>
                
							
							</li>
							<li class="dropdown">
							     <a class="dropdown-toggle" href="{{URL::to('/index')}}">Commande <b class="caret"></b></a>
                    
							
							</li>
							 <li class="dropdown">
               <a class="dropdown-toggle" href="{{URL::to('/Blog')}}">Blog <b class="caret"></b></a>
                             
                            </li>
						   <li><a href="{{URL::to('/Contact')}}">Contact</a></li>
						   @if(Session::get('id_employe'))
						     <li><a href="{{URL::to('/profilutilisateur')}}" href="#myModal">{{Session::get('name')}}<img class="card-img-top" src="{{Storage::url(Session::get('image'))}}" style="width: 24px; height: 23px; border-radius:100%;"></a></li>
						     @else
						      <li><a  data-target="#myModal" data-toggle="modal" href="#myModal">Login</a></li>
						      @endif	
						</ul>
					</div>
				
					<!-- shop/search -->


					<?php  $content=Cart::content();
              /*               
 echo "<pre>";
   print_r($content);
    echo"</pre>";
    */
   

							 ?>
					<div class="shopsearch navbar-collapse white collapsee offset-0 relative z1000">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<div class="clearfix"></div>
							</li>
						

							<li class="dropdown basket basket-white"> 
			 <a data-toggle="dropdown" class="dropdown-toggle" href="#"> <i class="ti-bag"></i><span class="active">{{ $content->count() }}</span></a>
							  <ul class="cart dropdown-menu">
								<!-- <li class="transparent"><span class="cartip"></span></li> -->
 
								<li class="itmhide">
									<p class="size15 bold caps clightgrey">Panier</p>
									@foreach($content as $prod)
									<div >
	<a href="#"><img src="{{Storage::url($prod->options->image)}}" alt="" style="width:70px; height:50px;"/></a>
									</div>
									<p class="price">{{$prod->price}}</p>
						<a href="#" class="title">{{$prod->name}} </a>
									<p class="quantity">Qty: {{$prod->qty}}</p>
				<a class="cart_delet" href="{{URL::to('/delet-to-cart/'.$prod->rowId)}}">
									
				<button type="button"  class="close mt-30">&times;</button>


				</a>

								</li>
								@endforeach

								<li class="itmhide2">
									<div class="noitems text-center none">There are no items in cart</div>
									<div class="total">
										<p class="left size15 bold caps clightgrey">Total:</p>
										<p class="totalprice right"></p>
										<div class="clearfix"></div>
										
		<a  class="btn cartbtn btn-default caps " href="{{URL::to('/view_Cart')}}"><i >panier</i></a>
										
					<a  class="btn cartbtn btn-default caps  " href="{{URL::to('/delet_Cart')}}" ><i >Vider panier</i></a>
										<div class="clearfix"></div>
									</div>
								</li>
								
							  </ul>
							</li>
							<li class="search"><a href="#" class="srclick flip"><i class="ti-search"></i></a></li>
									
						</ul>

					</div>	

					<div class="dots">
						<a href="#" class="opendots">
							<span class="icon-dots"></span>
							<span class="icon-dots"></span>
							<span class="icon-dots"></span>
						</a>
					</div>			
					
				</div>
			</div>	

		</div>
	</div>

	<!-- SEARCH -->	
	<div class="fwsearch">
		<div class="size30"><span class="escape">Press [ esc ] or close</span><a href="#" class="closesearch">+</a></div>
		
		<div class="csearch container">
			<input type="email" class="form-control fwsearchfield" placeholder="Search keyword">
			<button type="submit" class="btn fwsearchfieldbtn"><i class="icon-search-3"></i></button>
		</div>
		
	</div>
</div>
<!-- End of Navigation -->		

<div class="bgwhite borderbottom space20 relative z20"></div>

<div class="bgxlight borderbottom relative z20">
  @yield('content')

</div>



<div class="container pt60">


</div>



<p id="back-top"><a href="#top"><span class="ti-angle-up"></span></a></p>
<!--modal end-->
 
 <div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">              
                <h4 class="modal-title">Connexion</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                
                
                 <div class="form-group">
                        <a href="{{URL::to('/loginentreprise')}}" class="btn btn-primary btn-block btn-lg" >Connexion entreprise
                        </a>
                    </div>
            <div class="form-group">
                <a href="{{URL::to('/loginemploye')}}" class="btn btn-primary btn-block btn-lg" >              Connexion employé

                        </a>
                    
                    </div>
        </div>
    </div>
</div>     


<style type="text/css">
.modal-dialog {
    
    margin: 90px auto !important;
}
</style>

    <!-- // register -->


        <!-- // ENDOF Forgot Your Password?-->
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
<script type="text/javascript" src="{{asset('font-office/js/StarRating.js')}}"></script>
<script type="text/javascript" src="{{asset('font-office/js/rating.js')}}"></script>
</body>
</html>