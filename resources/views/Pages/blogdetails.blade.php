@extends('layout')
@section('content')
<div class="bgwhite borderbottom space20 relative z20"></div>

<div class="bgxlight borderbottom relative z20">
	<div class="container ptb40 cdark">
		<h3 class="text-center titlefont size30 c999">{{$articles_info->titre }}</h3>
		<div class="pt10 breadcrumbs">
			<a href="{{URL::to('/Start&Go')}}"><span class="ti-home">Acceuil</span></a> <i>/</i>
			
			<span >Blog</span>
		</div>
		<!-- <div class="toparrow"></div> -->
	</div>
</div>
<div class="container pt60">
	
	<div id="sidecontent" class="col-md-9 offset-0 pr40 mb50">
	<!-- CONTENT -->

		<!-- post -->
		<div class="col-md-12">
			<div class="relative">
				<img src="{{Storage::url($articles_info->imagearticle)}}" class="fwi" alt="">
				
			</div>
			
			<div class="col-md-12 bgwhite pt30 pb50 plr50">
				<div class="col-md-4 size12 titlefont mt20">
					<span class="fontproximabold size12 caps">Posted by</span>
					<p>{{$articles_info->postedby }}</p>
					<span class="fontproximabold size12 caps">Category</span>
					<p class="nospace"><span class="ti-check cmaincolor mr5"></span>Graphic Design</p>
					<p class="nospace"><span class="ti-check cmaincolor mr5"></span>{{$articles_info->titre }}</p>
				</div>
				<div class="col-md-8 mt20">
					<p class="fontproximabold size20">Keep it stupid simple</p>
					<span class="c666 lh24">
						{{$articles_info->description }}
					</span>
				</div>
				<div class="clearfix"></div>
			</div>
			
				<!-- comments -->
				<div class="col-md-12 bglight mb50 plr50 ptb100">

					<div class="col-md-12">
						<h3 class="fontproximabold size14 caps">Ajouter un commentaire</h3>
					</div>
				    <div class="col-md-6 mt20">
				    	<input type="text" class="form-control formlarge comstyle noborder" placeholder="Nom et Prénom *">
				    </div>
				    <div class="col-md-6 mt20">
				    	<input type="text" class="form-control formlarge comstyle noborder" placeholder="Email *">
				    </div>
				   
				    <div class="col-md-12">
				    	<textarea class="form-control formstyle comstyle noborder mt20" rows="7" placeholder="Commenter.."></textarea>
				    </div>
				    <div class="clearfix"></div>
				    <p class="pull-left ml20 mt30 clightgrey">Your email address will not be published. Required fields are marked *</p>
				    <button type="submit" class="btn btn-default btnwhite bgwhite size12 caps p10 plr20 pull-right mr15 mt20"><i class="icon-mail"></i> Laisser un commentaire</button>
				    <div class="clearfix"></div>

				    
				</div>
		</div>

	<!-- END CONTENT -->
	</div>
	<div class="col-md-3 offset-0">
		<div id="make-this-fixed-off" class="rightmenu ">
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
			
			<!-- Tabs -->
			<div class="bs-example-tabs mt30">
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