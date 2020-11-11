@extends('layout')
@section('content')

<div class="bgwhite space20 relative z20 borderbottom"></div>

<!-- Page Title -->
<div class="bgxlight borderbottom relative z20 ">
	<div class="container ptb40 cdark">
		<h3 class="text-center titlefont size30 c999">Détails produit</h3>
		<div class="pt10 breadcrumbs">
			<a href="{{URL::to('/Start&Go')}}"><span class="ti-home">Acceuil</span></a> <i>/</i>
			<a href="{{URL::to('/index')}}">Produits</a> <i>/</i>
			<span >Détails produit</span>
		</div>
	</div>
</div>
<!-- Page Title End -->

<div class="mt60 none">
	<div class="container">
		<img src="{{URL::to('font-office/images/shop/test.jpg')}}" class="fwi" alt="">		
	</div>
</div>

<!-- Product gallery zoom + sidebox -->
<center>
<div class="mt60">
	
	<div class="container">
	
		<div id='ex1' class='coll2 zoom'>
<img src="{{Storage::url($products_details->produit_image)}}" class="test" alt='' style="width:700px; height:600px;" />
		</div>
		<div class="coll3 h650" >
			<div class="product-sidebox">
				<div class="topbar">
					<a href="{{URL::to('/index')}}" class="cwhite pull-left">
						<span class="ti-arrow-circle-left"></span> 
						<span class="size12">Back to Shop</span>
					</a>
					
					<div class="clearfix"></div>
				</div>
				
				<div class="col-md-12 ptb20 borderbottom">
					<h1 class="titlefont">{{$products_details->produit_nom}}</h1>

					<div class="col-xs-6 offset-0 id">{{$products_details->name_categorie}}</div>
					<div class="col-xs-6 offset-0 rating text-center">
						<div class="mr-10">
							<span class="icon-star"></span>
							<span class="icon-star"></span>
							<span class="icon-star"></span>
							<span class="icon-star"></span>
							<span class="icon-star cwhite"></span>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
<form method="post" action="{{url('/add-to-cart')}}">
	@csrf
	{{csrf_field()}}
			
		<div class="col-xs-6 price titlefont text-center pt25">{{$products_details->produit_prix}}TND</div>
				
				<div class="clearfix"></div>
				<div class="line"></div>
				
			
				<div class="clearfix"></div>
				<div class="line"></div>
				
					
				<div class="col-md-12 ptb10">
					Quantité:
					<div class="input-group ptb5">
					  <span class="input-group-btn">
					      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant">
					          <span class="ti-minus"></span>
					      </button>
					  </span>
<input type="hidden" name="produit_id" value="{{$products_details->id_produit}}">
					  <input type="number" name="quant" class="form-control input-number" value="1" min="1" max="20">
					  <span class="input-group-btn">
<button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant">
					          <span class="ti-plus"></span>
					      </button>
					  </span>
					</div>
				
				</div>
		
				<div class="clearfix"></div>
				<div class="line"></div>

				<div class="sidebox-btns mt20">
					
					<a  class="btnfav fontproximabold" href="{{URL::to('/favoris/'.$products_details->id_produit)}}"><span class="ti-heart"></span> <i>Favourite</i></a>
					<div class="clearfix"></div>
					<div class="space15"></div>
					<button type="submit" class="btn btn-default btnaddtocart fontproximabold"><span class="ti-shopping-cart"></span><i>add to cart</i></button>
				</div>
					</form>
			</div>
	
		
	</center>
<!-- Tabs and Info-box -->
<div class="container">
	<div class="row">
		<div class="col-md-4 mt40">
			<div class="bgwhite borderall pt20 plr40 pb20">
				<h2 class="fontproximabold size14 caps pb20">Info box</h2>
				<blockquote>
					<p class="fontproxima cmaincolor size18">If you order more than 2 products or in value of more than 100$ you get free shipping anywhere in the world.</p>
				</blockquote>
				
			</div>
		</div>
		<div class="col-md-8 mt40">
			<ul role="tablist" class="nav nav-tabs av-tabs" id="myTab">
			  <li class=""><a data-toggle="tab" role="tab" href="#tab2">Evaluation</a></li>
			<li class=""><a data-toggle="tab" role="tab" href="#tab3">Commentaire</a></li>
<li class=""><a data-toggle="tab" role="tab" href="#tab4">Feedback</a></li>

			</ul>
			<div class="tab-content border avtabbg" id="myTabContent">
			 
			  <div id="tab2" class="tab-pane fade p20">
			  
	<form method="post" action="{{url('/rating')}}">
	{{csrf_field()}}
			<input type="hidden" name="produit_id" value="{{$products_details->id_produit}}">
			  	<p>Pour mieux analyser votre feedback envers ce produit, veuillez donner une note comme évaluation</p> 
		<div class="mr-10">
			<div class="rat">
				<div class="stars">  
			 <input type="radio" class="star ti-star" name="star" value="5" id="star-5">
              <label for="star-5" class="star ti-star"></label>   
                <input type="radio" class="star ti-star" name="star" value="4" id="star-4">
              <label for="star-4" class="star ti-star"></label> 
               <input type="radio" class="star ti-star" name="star" value="3" id="star-3">
              <label for="star-3" class="star ti-star"></label>  
                 <input type="radio" class="star ti-star" name="star" value="2" id="star-2">
              <label for="star-2" class="star ti-star"></label> 
                 <input type="radio" class="star ti-star" name="star" value="1" id="star-1">
              <label for="star-1" class="star ti-star"></label> </div>
			</div>
          
                 

<button type="submit" class="btn btn-default btnaddtocart fontproximabold"><span class="ti-shopping-cart"></span><i>Evaluer produit</i></button>

					<br/>

					<span class="info"></span>	
			  </div>
			  </form>
			</div>
			<div id="tab3" class="tab-pane p20 active">
			  	<div class="row">
				    <div class="col-md-4">
				    	<input type="text" class="form-control formlarge comstyle noborder" placeholder="Name">
				    </div>
				    <div class="col-md-4">
				    	<input type="text" class="form-control formlarge comstyle noborder" placeholder="Email">
				    </div>
				    <div class="col-md-4">
				    	<input type="text" class="form-control formlarge comstyle noborder" placeholder="Phone">
				    </div>
				    <div class="col-md-12">
				    	<textarea class="form-control formstyle comstyle noborder mt20" rows="7" placeholder="Message"></textarea>
				    </div>
				    <div class="clearfix"></div>
				    <p class="pull-left ml20 mt30 clightgrey">Entrez votre commentaire</p>
				    <button type="submit" class="btn btn-default btnwhite bgwhite size12 caps p10 plr20 pull-right mr15 mt20"><i class="icon-mail"></i> Send Message</button>
				    <div class="clearfix"></div>

			    </div>
			  </div>
			  	  <div id="tab4" class="tab-pane fade p20">
<div class="enableanimation">


			<div class="rat">
				<div class="stars">  
			
             <label  class="start ti-star"></label>
              <label  class="start ti-star"></label>
              
              <label  class="start ti-star"></label>
              
              <label  class="start ti-star"></label>
                
             <label  class="start ti-star"></label> </div>
			</div>
		<div class="progress-about margbar">
				<?php
				$id_produit=$products_details->id_produit;
			 $all_note=DB::table('tb1_evaluation')
	->select(DB::raw('count(note) as  notetotal'))
->where('id_produit',$id_produit)
     ->first();
          $toal=$all_note->notetotal;
          $s_evaluation=DB::table('tb1_evaluation')

         ->select(DB::raw('count(note) as evaluation'))

                         ->where('id_produit',$id_produit)
                         ->where('note',5)
                        ->first();
                        if($s_evaluation->evaluation<=0){
                                $s_evaluation=0;
                        }else{
                
                        	$s_evaluation=($s_evaluation->evaluation / $toal)*100;
                        }
 
           ?>
		  <div aria-valuemax='100' aria-valuemin='0' aria-valuenow='90' role='progressbar' class='progress-bar progress-bar-green progress-bar-striped' style='width:{{$s_evaluation}}%; '>
			{{$s_evaluation}}%
		  </div>
			
		</div>

				<div class="rat">
				<div class="stars">  
			
              

             <label  class="start ti-star"></label>
              
              <label  class="start ti-star"></label>
              
             <label  class="start ti-star"></label>
                
               <label  class="start ti-star"></label> </div>
			</div>
		

		<div class="progress-about margbar">
			<?php
			 $all_note=DB::table('tb1_evaluation')
	->select(DB::raw('count(note) as  notetotal'))
->where('id_produit',$id_produit)
     ->first();
          $toal=$all_note->notetotal;
          $all_evaluation=DB::table('tb1_evaluation')

         ->select(DB::raw('count(note) as evaluation'))

                         ->where('id_produit',$id_produit)
                         ->where('note',4)
                        ->first();
                         if($all_evaluation->evaluation<=0){
                                     $v_evaluation=0;
                        }else{
           
                          $v_evaluation=($all_evaluation->evaluation / $toal)*100;
                        }
 
           ?>
		  <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" role="progressbar" class="progress-bar progress-bar-orange progress-bar-striped" style="width:{{$v_evaluation}}%;">
			{{$v_evaluation}} %
		  </div>
		  	
		</div>
		
					<div class="rat">
				<div class="stars">  
			
             
             <label  class="start ti-star"></label> 
              
          <label  class="start ti-star"></label>
                
             <label  class="start ti-star"></label> </div>
			</div>
	

		<div class="progress-about margbar">
			<?php
			 $all_note=DB::table('tb1_evaluation')
	->select(DB::raw('count(note) as  notetotal'))
->where('id_produit',$id_produit)
     ->first();
          $toal=$all_note->notetotal;
          $all_evaluation=DB::table('tb1_evaluation')

         ->select(DB::raw('count(note) as evaluation'))

                         ->where('id_produit',$id_produit)
                         ->where('note',3)
                        ->first();
                               if($all_evaluation->evaluation<=0){
                           $v_evaluation=0;
                        }else{
                    
                         $v_evaluation=($all_evaluation->evaluation / $toal)*100;
                        }

           ?>
		  <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" role="progressbar" class="progress-bar progress-bar-blue progress-bar-striped" style="width:{{$v_evaluation}}%; ">
			{{$v_evaluation}} %
		  </div>
		   
		</div>		
	
				<div class="rat">
				<div class="stars">  
			
             
           <label  class="start ti-star"></label> 
                
            <label  class="start ti-star"></label> </div>
			</div>
			
		
		<div class="progress-about margbar mb50">
				<?php
			 $all_note=DB::table('tb1_evaluation')
	->select(DB::raw('count(note) as  notetotal'))
->where('id_produit',$id_produit)
     ->first();
          $toal=$all_note->notetotal;
          $p_evaluation=DB::table('tb1_evaluation')

         ->select(DB::raw('count(note) as evaluation'))

                         ->where('id_produit',$id_produit)
                         ->where('note',2)
                        ->first();
        if($p_evaluation->evaluation<=0){
                          $p_evaluation=0;
                        }else{
                  
                         $p_evaluation=($p_evaluation->evaluation / $toal)*100;
                        }
           ?>
		  <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="95" role="progressbar"  class="progress-bar progress-bar-red progress-bar-striped" style="width:{{$p_evaluation}}%; ">
			{{$p_evaluation}}%
		  </div>
		  
		</div>	
				
					<div class="rat">
				<div class="stars">  
			
           
                
              <label  class="start ti-star"></label> </div>
			</div>
			
		<div class="progress-about margbar mb50">
				<?php
			 $all_note=DB::table('tb1_evaluation')
	->select(DB::raw('count(note) as  notetotal'))
->where('id_produit',$id_produit)
     ->first();
          $toal=$all_note->notetotal;
          $p_evaluation=DB::table('tb1_evaluation')

         ->select(DB::raw('count(note) as evaluation'))

                         ->where('id_produit',$id_produit)
                         ->where('note',1)
                        ->first();
  if($p_evaluation->evaluation<=0){
                          $p_evaluation=0;
                        }else{
                  
                         $p_evaluation=($p_evaluation->evaluation / $toal)*100;
                        }
           ?>
		  <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="95" role="progressbar"  class="progress-bar progress-bar-red progress-bar-striped" style="width:{{$p_evaluation}}%; ">
			{{$p_evaluation}}%
		  </div>
		  
		</div>		
	</div>
			</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<div class="space50"></div>

<!-- You'll  also love -->
<div class="container">
	<h3 class="fontproximabold caps">Produits avec remises:</h3>
	 <?php
         $all_products=DB::table('tb1_produits')
      ->select('*',DB::raw('produit_prix-produit_prix*(remise / 100)as prixsolde'))
                        ->where('promotion',1)
                        ->limit(3)
                        ->get();
              foreach($all_products as $products_details){?>
	<!-- item -->

	<div class="bgwhite mt10 mb25">
<form method="post" action="{{url('/addremise-to-cart')}}">
	@csrf
	{{csrf_field()}}
		<div class="col-md-8 hfull plr30 ptb40 borderright">
			<div class="col-md-4">
				<img src="{{Storage::url($products_details->produit_image)}}" class="fwi" name="imageremise" alt="">
	

			</div>
			<div class="col-md-8">
				<h1 class="titlefont size24">{{$products_details->produit_nom}}</h1>
			
				<span class="icon-star cmaincolor"></span>
				<span class="icon-star cmaincolor"></span>
				<span class="icon-star cmaincolor"></span>
				<span class="icon-star cmaincolor"></span>
				<span class="icon-star clight"></span>
	<p class="mt10">{{$products_details->produit_description}}.</p>
			</div>
		</div>
		<div class="col-md-4 offset-0 hfull">
			<div class="col-xs-6 p15 h100">
				<span class="titlefont size30 cmaincolor text-center valign">{{$products_details->prixsolde}}TND</span>
				<input type="hidden" name="id_produit" value="{{$products_details->id_produit}}">
		<input type="hidden" name="qte" value="1">
			</div>
			
				<div class="col-xs-6 brdleft ptb8 h90" ><span class="col-xs-6 savesale2" style="color:#1abc9c;">Remise<br>{{$products_details->remise}}%</span></div>
			<div class="clearfix"></div>
			<div class="divider"></div>
			<div class="col-xs-6 p15 h100">
				<span class="titlefont size30 cmaincolor text-center valign">
				<s>{{$products_details->produit_prix}}TND</s>
				</span>
			</div>
			<div class="clearfix"></div>
			<div class="divider"></div>
			<div class="col-xs-12 plr20 ptb10">
				<div class="row">
					<div class="col-xs-6">
						<button type="button" class="btn btn-default btnaddtocart fontproximabold mt5"><span class="ti-align-left"></span><i> read more</i></button>
					</div>
					<div class="col-xs-6">
						<button type="submit" class="btn btn-default btnaddtocart fontproximabold mt5"><span class="ti-shopping-cart"></span><i>add to cart</i></button>

					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</form>
<?php } ?>	
	<!-- item -->
	

	<!-- item -->


	<div class="space50"></div>
</div>

<!-- Related Products-->




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
 	