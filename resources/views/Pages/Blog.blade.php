@extends('layout')
@section('content')

<div class="bgwhite borderbottom space20 relative z20"></div>

<div class="bgxlight borderbottom relative z20">
	<div class="container ptb40 cdark">
		<h3 class="text-center titlefont size30 c999">Blog</h3>
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
                	 @foreach($all_articles_info as $Articles) 

		<!-- post -->
		<div class="col-md-12">
			<div class="relative">
				<img src="{{Storage::url($Articles->imagearticle)}}" class="fwi" alt="">
				<div class="blogdate">
					<p class="fontproxima size30 caps nospace lh30">{{$Articles->jour }}</p>
					<p class="fontproxima size12 caps nospace">{{$Articles->mois }}</p>
				</div>
			</div>
			<div class="col-md-12 bgwhite pt30 pb20 plr50">
				<div class="col-md-4 size12 titlefont mt20">
					<span class="fontproximabold size12 caps">Posted by</span>
					<p>{{$Articles->postedby }}</p>
					<span class="fontproximabold size12 caps"></span>
					<p class="nospace"><span class="ti-check cmaincolor mr5"></span>Graphic Design</p>
					<p class="nospace"><span class="ti-check cmaincolor mr5"></span>Freebies</p>
				</div>
				<div class="col-md-8 mt20">
					<p class="fontproximabold size20">{{$Articles->titre }}</p>
					<span class="c666 lh24">
						{{$Articles->description }}
					</span>
				</div>
				<div class="clearfix"></div>
				<a class="btn btnwhite btn-default mt20 mb10 pull-right" href="{{URL::to('/Blogdetails/'.$Articles->id_article)}}"><i class="icon-article-alt"></i> Read more</a>
				<div class="clearfix"></div>
			</div>
		</div>

	 @endforeach

		<div class="clearfix"></div>
		<div class="divider bglight3 mtb50"></div>

		 {{ $all_articles_info->links()  }}

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
				<span>(+216) 21115893 </span>
			</p>
		</div>
		
	</div>
</div>
<!-- END OF FOOTER MINIMAL -->


	@endsection
