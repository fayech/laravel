<div class="features_items" ><!--features_items-->
<h2 class="title text-center">Liste des produits</h2>
<?php $d=1;
?>
@if($allh_products_info->isEmpty())
          Desolé produit non trouvé
         @else

 @foreach($allh_products_info as $prod)
           
<form method="post" action="{{url('/add-to-cart')}}">
           	{{csrf_field()}}
					<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
		
	       

			<img src="{{Storage::url($prod->produit_image)}}" alt=""  />
										<h2>{{$prod->produit_prix}}TND</h2>
										<p>{{$prod->produit_nom}}</p>
					
			
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>{{$prod->produit_prix}}TND</h2>
											<p>{{$prod->produit_nom}}</p>
					<a href="{{URL::to('/view_product/'.$prod->id_produit)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Voir détails</a>
										</div>
									</div>
								</div>
	           
	         
	       <input type="hidden" name="produit_id" value="{{$prod->id_produit}}">
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li>
<input type="hidden" name="quant" value="{{$d}}">
 

<button type="submit" class="btn btnwhiteline wfull fontproximalight caps valign2 center  round" ><span ></span><i>add to cart</i></button>


										</li>
										
									</ul>
								</div>
							
							</div>
						</div>
					</form>
						
           

          
						
	@endforeach
 @endif

	</div>	
	
