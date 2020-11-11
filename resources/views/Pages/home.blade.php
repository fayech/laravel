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
  $( function(){
  
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 100,
      values: [ 0, 100 ],
      slide: function( event, ui ) {

        $( "#amount_start" ).val( ui.values[ 0 ]);
        $( "#amount_end" ).val( ui.values[ 1 ]);


var start = $('#amount_start').val();
var end = $('#amount_end').val();


$.ajax({
    type: 'get', 
    url:'index', 
    data:"start=" +start + "& end=" +end,
   success: function(response){
   console.log(response);

   $('#updateDiv').html(response);

    
 }

});



      }
    });

    //$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      //" - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );
  </script>
<div class="bgwhite borderbottom space20 relative z20"></div>

<div class="bgxlight borderbottom relative z20">
	<div class="container ptb40 cdark">
		<h3 class="text-center titlefont size30 c999">Produits</h3>
		<div class="pt10 breadcrumbs">
			<a href="{{URL::to('/Start&Go')}}"><span class="ti-home">Acceuil</span></a> <i>/</i>
			
			<span >Produits</span>
		</div>
		<!-- <div class="toparrow"></div> -->
	</div>
</div>
<!-- START REVOLUTION SLIDER 3.1 rev5 fullwidth mode -->
<div class="container offset-0">
	<div class="tp-banner-container relative">
		<div class="tp-banner2" >
			<ul>
				<!-- SLIDE 1  -->
				 <?php
         $all_silder=DB::table('tb1_silder')
                                     ->where('publication_status',1)
                                     ->get();
               foreach($all_silder as $v_silder){?>
				<li  data-transition="fade" data-slotamount="1" data-masterspeed="2000" data-thumb="images/slider/girls.jpg" data-delay="12000"  data-saveperformance="on"  data-title="Ken Burns Slide" data-color="black">
					<!-- MAIN IMAGE -->
					<img src="{{URL::to('font-office/images/dummy.png')}}" data-lazyload="{{Storage::url($v_silder->slider_image)}}" data-bgposition="top center" data-bgpositionend="top center" alt="" data-kenburns="on" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="100" data-bgfitend="100">


					<!-- Filter dark -->
					<div class="tp-caption "
						 data-x="center"
						 data-y="center"
						 data-speed="600"
						 data-start="0"
						 data-easing="easeOut"  
						 style="z-index: 1; display:block; background:rgba(0,0,0,0.0); width:100%; height:100%;"
						 ></div>
					
					<!-- LAYER 2 -->
					<div class="tp-caption caption-white randomrotate customout tp-resizeme"
						data-x="center"  data-voffset="0"		
						data-y="center"  data-hoffset="0"	

						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="500"
						data-easing="Power3.easeInOut"
						data-splitin="chars"
						data-splitout="chars"
						data-elementdelay="0.08"
						data-endelementdelay="0.08"						
						data-endspeed="300"
						style="z-index: 10;"
						>START &  GO
					</div>
					
					<!-- LAYER 3 -->
			
				</li>

					<?php } ?>

			</ul>
			<div class="tp-bannertimer none"></div>
		</div>
	</div>
</div>
<!-- END REVOLUTION SLIDER -->

<section style="margin-top: 20px">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Catégories</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
                                <div class="panel-heading">
                           <h4 class="panel-title">
        <a href="{{URL::to('/index')}}">All categorie</a></h4>
                                </div>
                            </div>
							
							 <?php 
               $all_categories_info=DB::table('tb1_categories')->where('publication_status',1)->get();
               	  foreach($all_categories_info as $catg ) {  ?>
							<div class="panel panel-default">
                                <div class="panel-heading">
                           <h4 class="panel-title">
        <a href="{{URL::to('/product_by_category/'.$catg->id_categorie)}}">{{ $catg->name_categorie}}</a></h4>
                                </div>
                            </div>
                            <?php
                       }

                            ?>
                        </div><!--/category-products-->
					<!--
						
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div>
					-->
						<!--price-range-->
                  <div class="price-range">
                      <h2>Price Range</h2>
                      <div class="well">
                      	<div id="slider-range"></div>
                      <br>
              <b class="pull-left">TND <input size="2" type="text" id="amount_start" name="start_price"  value="0"  style="border:0px;"  readonly="readonly" /> 
                     </b> 

                     <b class="pull-right"><input size="2" type="text" id="amount_end" name="end_price"  value="100" style="border:0px;"  readonly="readonly" /><span>TND</span>
 </b>
                      <br><br>
                      <!--<button onclick="send()">Click me</button>-->

                      </div>	
                  

                  </div>	

<?php $d=1;
?>





	




						
						<!--/price-range-->
						
			<img src="{{URL::to('image/svg.jpg')}}" alt=""  width="262px" height="280px" />
				
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right" id="updateDiv" >
					<div class="features_items" ><!--features_items-->
						<h2 class="title text-center">Liste des produits</h2>
						
           
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
						
					</div><!--features_items-->

					  					<nav class="ml10">
		  <ul class="pagination2">
		    
		   
		   {{ $allh_products_info->links()  }}
		    
		    
		  </ul>
		</nav>
					
			






					
					
					
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			 <?php
			 

         $all_produit=DB::table('tb1_produits')
                                     ->where('publication_status',1)
                                     ->limit(4)
                                     ->get();
               foreach($all_produit as $v_produit){?>
			<div class="col-md-3" data-scroll-reveal="enter left over 1s and move 300px after 0.5s">
				<div class="player offset-0" data-scrollreveal="enter left">
					<h4 class="m15">{{$v_produit->produit_nom}}</h4>
					<div class="teampicture">
	<img src="{{Storage::url($v_produit->produit_image)}}" class="fwi dajy" alt="" style="width: 261px; height: 261px; " />
						<div class="teamover"></div>
						<p>{{$v_produit->produit_prix}}TND</p>
					</div>
				
				</div>
			</div>
	
		<?php } ?>	
	
			
			<div class="clearfix"></div>
<div id="footer" class="bgwhite pt50 pb100">
	<div class="container titlefont clightgrey size12 caps">
		<a href="#"></a>
		<div class="divider mtb30"></div>
		<a href="#"><img src="http://localhost:8000/font-office/images/final.png" class="w90" alt="avision logo"></a>
		<div class="col-md-3 offset-0">
			<ul class="footer-socials">
				<li class="left mr10 blue"><a href="#"><i class="icon-facebook"></i></a></li>
				<li class="left mr10 blue2"><a href="#"><i class="icon-twitter-bird"></i></a></li>
				<li class="left mr10 red"><a href="#"><i class="icon-gplus"></i></a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-3 offset-0">
			<strong class="fontproximabold"></strong><br/>
			4676<br/>
			04,Rue Istamboul Bardo
		</div>
		<div class="col-md-3 offset-0">
			<strong class="fontproximabold">Email</strong>
			<p>
				<span class="ti-email mr10"></span>  
				<a href="#">start&go@contact.tn</a>
			</p>
			<strong class="fontproximabold">Customer Support</strong>
			<p>
				<span class="ti-mobile mr10"></span>
				<span>(+216)21115893</span>
			</p>
		</div>
		
	</div>
</div>
<!-- END OF FOOTER MINIMAL -->


	@endsection