@extends('layout')
@section('content')
<div class="bgwhite borderbottom space20 relative z20"></div>

<div class="bgxlight borderbottom relative z20">
	<div class="container ptb40 cdark">
		<h3 class="text-center titlefont size30 c999">FAQ</h3>
		<div class="pt10 breadcrumbs">
			<a href="{{URL::to('/Start&Go')}}"><span class="ti-home">Acceuil</span></a> <i>/</i>
			
			<span >FAQ</span>
		</div>
		<!-- <div class="toparrow"></div> -->
	</div>
</div>
<div class="bgwhite space20"></div>
<div class="bglight bordertopbottom">
	<div class="container ptb40 cdark">
		<div class="relative">
			<input type="email" class="form-control fqsearch" placeholder="Tapez les mots-clés à chercher">
			<button type="submit" class="btn fqsearchbtn"><i class="ti-search"></i> <span>Rechercher</span></button>
			<div class="clearfix"></div>
		</div>
		<!-- <div class="toparrow"></div> -->
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-8 borderright pt60 pb100 pr50">
			
			<h1 class="fontproxima">Nous sommes là pour répondre à vos questions.</h1>
			<div class="space50"></div>

			<!-- Accordion -->
			<div class="panel-group" id="accordion">
			  <div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed">
					  Pourquoi Start & GO?
					</a>
				  </h4>
				  <span></span>
				</div>
				<div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
				  <div class="panel-body"><span></span>
					Car chez Start & Go, le goût d'un café est exceptionnel. Ajoutant à ça, la diversité et la qualité des produits offerts sera un moyen pour nos chers clients afin d'accomplir leurs besoins.
				  </div>
				</div>					
			  </div>
			  
			  <div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">
					  Non seulement un café? Alors quoi d'autres
					</a>
				  </h4>
				  <span></span>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false">
				  <div class="panel-body"><span></span>
				 Un café, c'est toujours attendu mais on délivre des produits des différents catégories et qui sont dans des normes qualificatifs pas loin d'un café tel que:
				 Boissons froids,viennoiserie,lunch,etc.	
				  </div>
				</div>					
			  </div>
			  
			  <div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">
					 Les prix sont-ils toujours statisques? (inchangeables)
					</a>
				  </h4>
				  <span></span>
				</div>
				<div id="collapseThree" class="panel-collapse collapse" aria-expanded="false">
				  <div class="panel-body"><span></span>
					Des remises et des offres promotionnels sont mis à la disposition de nos fidèles clients.
				  </div>
				</div>					
			  </div>

			    <div class="panel panel-default">
			  	<div class="panel-heading">
			  	  <h4 class="panel-title">
			  		<a data-toggle="collapse" data-parent="#accordion" href="#tabnr4" class="collapsed" aria-expanded="false">
			  		  De quoi un café est-il constitué?
			  		</a>
			  	  </h4>
			  	  <span></span>
			  	</div>
			  	<div id="tabnr4" class="panel-collapse collapse" aria-expanded="false">
			  	  <div class="panel-body"><span></span>
			  		Le café est une boisson qui apporte un certain nombre de vitamines et de minéraux importants pour l'organisme. Par exemple, une tasse fournit 80 mg de potassium. On y trouve également des acides phénoliques, dont les propriétés antioxydantes sont connues. De plus, une tasse contient très peu de calories… A moins bien sûr d'y ajouter du sucre ou du lait.
			  	  </div>
			  	</div>					
			    </div>

			       

			  

			   
			 	    

			   

			   

			    
			   

					    			    		    			    
			</div>
			<!-- End of Accordion -->	
		</div>

		<div class="col-md-4 pt70 pb100 plr50">
			<ul role="tablist" class="nav nav-tabs fb-tabs2" id="myTab2">
			    <li class="caps fontproximabold"><a  href="{{URL::to('/index')}}" >Produit</a></li>
			      
			    </ul>
					    <div class="tab-content " id="myTabContent2">
			      <div id="tab-b" class="tab-pane fade active in">
			      	 <?php
         $all_produits=DB::table('tb1_produits')
                                     ->where('publication_status',1)
                                     ->limit(3)
                                     ->get();
               foreach($all_produits as $v_produits){?>
			        <div class="mt20">
			        	<div class="sidethumb">
			 <a href="#"><img src="{{Storage::url($v_produits->produit_image)}}" class="fwi" alt=""></a>
			        	</div>
			        	<a href="#">{{$v_produits->produit_nom}}</a>
			        	<p>{{$v_produits->produit_prix}}</p>
			        	<div class="clearfix mtb10"></div>

			        

			        
			        </div>
			        <?php } ?>		
			      </div>
			 
			    
			    </div>
			
			

			<!-- Tabs -->
			<div class="bs-example-tabs mt50">
			    <ul role="tablist" class="nav nav-tabs fb-tabs2" id="myTab2">
			      <li class="caps fontproximabold"><a href="{{URL::to('/Blog')}}">Articles</a></li>
			      
			    </ul>
			    <div class="tab-content " id="myTabContent2">
			      <div id="tab-b" class="tab-pane fade active in">
			      	 <?php
         $all_articles=DB::table('tb1_articles')
                                    
                                     ->limit(3)
                                     ->get();
               foreach($all_articles as $v_articles){?>
			        <div class="mt20">
			        	<div class="sidethumb">
			        		<a href="#"><img src="{{Storage::url($v_articles->imagearticle)}}" class="fwi" alt=""></a>
			        	</div>
			        	<a href="#">{{$v_articles->titre}}</a>
			        	
			        	<div class="clearfix mtb10"></div>

			        	

			        	
			        </div>
			        <?php } ?>	
			      </div>
			 
			    </div>
			</div>
			<div class="clearfix"></div>

			<!-- Tags -->

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