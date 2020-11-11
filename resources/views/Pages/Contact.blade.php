@extends('layout')
@section('content')

<div class="bgwhite borderbottom space20 relative z20"></div>

<div class="bgxlight borderbottom relative z20">
	<div class="container ptb40 cdark">
		<h3 class="text-center titlefont size30 c999">Contact</h3>
		<div class="pt10 breadcrumbs">
			<a href="{{URL::to('/Start&Go')}}"><span class="ti-home">Acceuil</span></a> <i>/</i>
			
			<span >Contact</span>
		</div>
		<!-- <div class="toparrow"></div> -->
	</div>
</div>


<section class="bgwhite  borderbottom relative z10 clearfix">
	<div class="col-xs-12 col-sm-12 col-md-6 offset-0 h600">
		<div class="map">
				
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3194.1679540397477!2d10.134059014780064!3d36.8144950745956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd33af5db2dc99%3A0x7abb472b46f24e61!2sRue+d&#39;Istanboul!5e0!3m2!1sfr!2stn!4v1554896101338!5m2!1sfr!2stn" frameborder="0" style="border:0 ; width: 1349px; height:600px; " allowfullscreen></iframe>
		
		</div>
	</div>

</section>
<div class="bgwhite">
	<div class="container sspacing-title-button">
		<div class="col-md-4">
			<div class="space30"></div>

			<span class="fontproximabold cdark caps"> Nos informations</span>
			
			<div class="divider mtb20"></div>
			<strong class="fontproximabold cdark">Email:</strong>
			<p>
				<span class="ti-email mr10"></span>  
				<a href="mailto:hello@avision.com">start&go@contact.tn</a>
			</p>
			<div class="divider mtb20"></div>
			<strong class="fontproximabold cdark">Tel:</strong>
			<p>
				<span class="ti-mobile mr10"></span>
				<span class="cdark">(+216) 25 206 896</span>
			</p>
			<strong class="fontproximabold cdark">Heures de travail:</strong>
			<p>
				<span class="ti-direction mr10"></span>
				<span class="cdark">Lundi - Samedi 4AM - 8AM</span>
			</p>


		</div>
		<div class="col-md-8">

				<p class="size30 ml10 mb10 cdark pb20">Nous contacter</p>
				<p class="cdark">
				N’hésitez pas à nous envoyer des petits messages, nous aurons plaisir à vous lire…
			</p>
				
				<div class="col-md-6">
					<input type="text" class="form-control formlarge" placeholder="Name">
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control formlarge" placeholder="Email">
				</div>
				
				
				<div class="col-md-12">
					<textarea class="form-control formstyle mt17" rows="7" placeholder="Message"></textarea>
				</div>
				<div class="clearfix"></div>
				<button type="submit" class="btn btnwhitebig btn-default caps ml10 mt30"><i class="icon-mail"></i> Envoyer</button>
				<div class="clearfix"></div>

		</div>
	</div>
</div>
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