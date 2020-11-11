@extends('layout')
@section('content')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  		$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
            $(document).ready(function(){
            	updatedata();
  function updatedata(){
 
var quantity = $('#quantity').text();
var rowId = $('#rowId').val();


$.ajax({
    type: "POST", 
    url:"view_Cart", 
    data:"quantity=" +quantity + "& rowId=" +rowId,
   success: function(response){
   console.log(response);

alert("success");
    
 }
 
});



      
 

    //$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      //" - $" + $( "#slider-range" ).slider( "values", 1 ) );
  }
  $('#quantity').change(function(){
            var qantity = $('#quantity').text();
            updatedata();
           });
  });
  </script>
<div class="bgwhite borderbottom space20 relative z20"></div>

<div class="bgxlight borderbottom relative z20">
	<div class="container ptb40 cdark">
		<h3 class="text-center titlefont size30 c999">Shopping Cart</h3>
		<div class="pt10 breadcrumbs">
				<a href="{{URL::to('/Start&Go')}}"><span class="ti-home">Acceuil</span></a> <i>/</i>
			<a href="{{URL::to('/index')}}">Produits</a> <i>/</i>
		
		
		
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
						<tr class="cart_menu" >
							<td class="image">Image</td>
							<td class="description">Nom </td>
							<td class="price">Prix</td>
							<td class="quantity">Quantité</td>
							<td class="total">Total</td>

								<td class="Action">Action</td>
						</tr>
					</thead>
					<?php  $content=Cart::content();
                        
 
    
   

							 ?>
					<tbody>
					

                             @foreach($content as $prod)
                             	<form method="post" action="{{ url('/update_view_cart')}}"enctype="multipart/form-data">
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
			<input type="hidden" id="rowId"  name="rowId" value="{{$prod->rowId}}">
			<input class="btn btndarkline12 fontproximabold caps valign2 center activate-tmprev round" type="number" id="quantity" name="quantity" value="{{$prod->qty}}"  >
						
								</div>
							</td>
							
							<td class="cart_total">
								<p class="cart_total_price">{{$prod->total}}</p>
							</td>
							<td class="cart_delete">
<a class="ti-trash"  id="delet" href="{{URL::to('/delet-view-cart/'.$prod->rowId)}}"></a>
          
          <button type="submit" class="check"><span class="ti-check"></span></button>
           
           	
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
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						
						
				<a class="btn btn-default update" href="{{URL::to('/logoututilisateur')}}">Annulation commande</a>
						
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Sous-Total <span>{{Cart::subtotal()}}</span></li>
							<li>TVA <span>{{Cart::tax()}}</span></li>
							<li>Frais de livraison <span>Gratuit</span></li>
							<li>Total net<span>{{Cart::total()}}</span></li>
						</ul>
<a class="btn btn-default update" href="{{URL::to('/index')}}">Poursuivre  vos achats</a>
			
<a class="btn btn-default check_out" href="{{URL::to('/verification')}}">Passer commande</a>
			
		
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
				<span>(+216) 21115893</span>
			</p>
		</div>
		
	</div>
</div>
<!-- END OF FOOTER MINIMAL -->


@endsection