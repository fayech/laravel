@extends('layout')
@section('content')
<div class="bgwhite borderbottom space20 relative z20"></div>

<div class="bgxlight borderbottom relative z20">
	<div class="container ptb40 cdark">
		<h3 class="text-center titlefont size30 c999">Shopping Cart</h3>
		<div class="pt10 breadcrumbs">
			
			<a href="{{URL::to('/Start&Go')}}"><span class="ti-home">Acceuil</span></a> <i>/</i>
			<a href="{{URL::to('/index')}}">Produits</a> <i>/</i>
		
		
			<a href="#">Shopping Cart</a>
		</div>
		<!-- <div class="toparrow"></div> -->
	</div>
</div>
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Image</td>
							<td class="description">Nom</td>
							<td class="price">Prix</td>
							<td class="quantity">Quantité</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<?php  $content=Cart::content();
                        
 
    
   

							 ?>
					<tbody>
					

                             @foreach($content as $prod)
     <form method="post" action="{{ url('/update_view_cart')}}"
     enctype="multipart/form-data">
				@csrf
			
			{{csrf_field()}}
						<tr>
							<td class="cart_product">
		<a href=""><img src="{{Storage::url($prod->options->image)}}" alt="" style="width: 60px; height: 80px;"></a>
							</td>
							<td class="cart_description">
					<h4><a href="">{{$prod->name}}</a></h4>
								
							</td>
							<td class="cart_price">
								<p>{{$prod->price}}</p>
							</td>
						
							<td class="cart_quantity">
								<div class="cart_quantity_button">
			<input type="hidden"  name="rowId" value="{{$prod->rowId}}">
			<input class="btn btndarkline12 fontproximabold caps valign2 center activate-tmprev round" type="number" name="quantity" value="{{$prod->qty}}"  disabled >
						
								</div>
							</td>
							
							<td class="cart_total">
				<p class="cart_total_price">{{$prod->total}}</p>
							</td>
							<td class="cart_delete">
<a class="ti-trash" id="delet" href="{{URL::to('/delet-view-cart/'.$prod->rowId)}}"></a>
          
           
           
           	
							</td>
							
						</tr>
                          </form>
						@endforeach
						
					
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
			</div>
			<div class="row">
				
				<div class="col-sm-12">
					<div class="total_area">
						<h1>Paiement</h1>
			<form action="{{url('/order-place')}}" method="post">
					{{csrf_field()}}
						<ul>
							<li>Sous-Total <span>{{Cart::subtotal()}}</span></li>
							<li>TVA <span>{{Cart::tax()}}</span></li>
							<li>Frais de livraison<span>Free</span></li>
							<li>Total net<span>{{Cart::total()}}</span></li>
						</ul>
<h3>Délai de livraison estimé: 35-60 min </h3>
<input type="submit" name="" class="btn btn-default update" value="Valider  commande">

<a class="btn btn-default check_out" href="{{URL::to('/logoututilisateur')}}">Quitter</a>
			</form>
		
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

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
				<span>(+216) 21115893 </span>
			</p>
		</div>
		
	</div>
</div>
<!-- END OF FOOTER MINIMAL -->
@endsection