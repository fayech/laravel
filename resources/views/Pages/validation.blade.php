@extends('layout')
@section('content')
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h1>Thank you for trusting in us!</h1>
						<h2>VALIDER VOTRE COMMANDE</h2>
						<h3>Délai de livraison estimé: 35-60 min </h3>

					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
						
			<a href="{{URL::to('/facture')}}"class="btn btnwhiteline wfull fontproximalight caps valign2 center  round">Voir facture</a>

						
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	

<div id="footer" class="bg333 pt50 pb100">
	<div class="container titlefont clightgrey size12 caps">
		<a href="#"><img src="{{URL::to('font-office/images/final.png')}}" class="w120" alt="avision logo" /></a>
		<div class="divider mtb30"></div>
		
		<div class="col-md-3 offset-0">
			<ul class="footer-socials">
				<li class="left mr10 blue"><a href="#"><i class="icon-facebook"></i></a></li>
				<li class="left mr10 blue2"><a href="#"><i class="icon-twitter-bird"></i></a></li>
				<li class="left mr10 red"><a href="#"><i class="icon-gplus"></i></a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-3 offset-0">
			<strong class="fontproximabold">Start & Go</strong><br/>
			4676<br/>
			04,Rue Istamboul Bardo
		</div>
		<div class="col-md-3 offset-0">
			<strong class="fontproximabold">Email</strong>
			<p>
				<span class="ti-email mr10"></span>  
				<a href="#">start&go@contact.com</a>
			</p>
			<strong class="fontproximabold">Customer Support</strong>
			<p>
				<span class="ti-mobile mr10"></span>
				<span>(+216) 21115893</span>
			</p>
		</div>
		
	</div>
</div>
<!-- END OF FOOTER MINIMAL -->

@endsection