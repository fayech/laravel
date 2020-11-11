<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Start & Go</title>
    <link rel="icon" href="{{URL::to('login-admin/img/icon.ico')}}" />

    <!-- Bootstrap implementation -->
    <link href="{{asset('font-office/dist/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('font-office/css/style.css')}}" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- GOOGLE FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- FONTELLO -->
    <link href="{{asset('font-office/font/fontello/css/fontello.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('font-office/font/fontello/css/animation.css')}}" rel="stylesheet" type="text/css" />
    <!--if IE 7
    link(rel='stylesheet', href='font/fontello/css/fontello-ie7.css')
    -->
        <link href="{{asset('font-office/font/themify-icons/themify-icons.css')}}" rel="stylesheet" type="text/css" />

    <!-- ANONYMOUS PRO FONT-->
    <link href="http://fonts.googleapis.com/css?family=Anonymous+Pro:400,700" rel="stylesheet" type="text/css" />
    <!-- DRIPICONS -->
    <link href="{{asset('font-office/font/dripicons/webfont.css')}}" rel="stylesheet" type="text/css" />
    <!-- SIMPLE LINE ICONS -->
    <link href="{{asset('font-office/font/simple-line-icons/simple-line-icons.css')}}" rel="stylesheet" type="text/css" />
    <!-- THEMIFY ICONS -->
    <link href="http://localhost:8000/font-office/font/themify-icons/themify-icons.css')}}" rel="stylesheet" type="text/css" />
    <!-- FONTASTIC ICONS -->
    <link href="{{asset('font-office/font/fontastic/styles.css')}}" rel="stylesheet" type="text/css" />
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link href="{{asset('font-office/css/extralayers.css')}}" media="screen" rel="stylesheet" type="text/css" />
    <link href="{{asset('font-office/rs-plugin/css/settings.css')}}" media="screen" rel="stylesheet" type="text/css" />
    <!-- CarouFredSel -->
    <link href="{{asset('font-office/css/caroufredsel.css')}}" rel="stylesheet" type="text/css" />
    <!-- WOW.JS REVEAL ANIMATIONS -->
    <link href="{{asset('font-office/css/animate.css')}}" rel="stylesheet" type="text/css" />
    <!-- PYE CHART -->
    <link href="{{asset('font-office/css/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" />
    <!-- Hover Effect Ideas -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css' />
    <link href="{{asset('font-office/css/HoverEffectIdeas/css/demo.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('font-office/css/HoverEffectIdeas/css/set1.css')}}" rel="stylesheet" type="text/css" />
    <!-- Lightcase ( image popup preview ) -->
    <link href="{{asset('font-office/plugins/lightcase/css/lightcase.css')}}" rel="stylesheet" type="text/css" />
</head>
<body class="hidenav removebullets">

<!-- start preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- end preloader -->

<!-- Navigation -->
    <div class="navigation ">

        <div class="container">
            <div class="logo"><a href="index.html"><img src="
                {{asset('font-office/images/logofinal.png')}}"  class="white mt5 relative z100" alt=""/></a></div>

            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid relative">

                    <button type="button" class="btn left hide-show-button none">
                        <span class="burgerbar"></span>
                        <span class="burgerbar"></span>
                        <span class="burgerbar"></span>
                    </button>
                    <a href="#" class="closemenu"></a> 

                    <!-- mobile version drop menu -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle hamburger" data-toggle="collapse" data-target=".navbar-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                    </div>
                    
                    <!-- menu -->
                    <div class="mainmenu mobanim dark-menu navbar-collapse white collapse offset-0 ">
                        <ul class="nav navbar-nav mobpad">

                            <li class="dropdown static">
                              <a class="dropdown-toggle" href="{{URL::to('/Start&Go')}}">Acceuil  <b class="caret"></b></a>
                              
                            </li>
                          <li class="dropdown">
                              <a class="dropdown-toggle" href="{{URL::to('/Histoire')}}">Histoire <b class="caret"></b></a>
                
                            
                            </li>
                           
                            <li class="dropdown">
                              <a class="dropdown-toggle" href="{{URL::to('/FAQ')}}">FAQ <b class="caret"></b></a>
                
                            </li>
                            <li class="dropdown">
                              <a class="dropdown-toggle" href="{{URL::to('/index')}}">Commande <b class="caret"></b></a>
                    
                            </li>
                            <li class="dropdown">
                              <a class="dropdown-toggle" href="{{URL::to('/Blog')}}">Blog <b class="caret"></b></a>
                             
                            </li>
                            <li><a href="{{URL::to('/Contact')}}">Contact</a></li>
                            
                            </li>
  @if(Session::get('id_employe'))
                             <li><a  href="{{URL::to('/profilutilisateur')}}">{{Session::get('name')}}<img class="card-img-top" src="{{Storage::url(Session::get('image'))}}"  style="width: 24px; height: 23px; border-radius:100%;">
</a></li>
                             @else
                            <li class="dropdown">
         <a data-target="#myModal" data-toggle="modal" href="#myModal"><span class="ti-lock"></span></a>
     </li>
      @endif

                            
                        </ul>
                    </div>
                
                    <!-- shop/search -->
                        <?php  $content=Cart::content();
              /*               
 echo "<pre>";
   print_r($content);
    echo"</pre>";
    */
   

                             ?>
            <div class="shopsearch navbar-collapse white collapsee offset-0 relative z1000">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <div class="clearfix"></div>
                            </li>
                        

                            <li class="dropdown basket basket-white"> 
             <a data-toggle="dropdown" class="dropdown-toggle" href="#"> <i class="ti-bag"></i><span class="active">{{ $content->count() }}</span></a>
                              <ul class="cart dropdown-menu">
                                <!-- <li class="transparent"><span class="cartip"></span></li> -->
 
                                <li class="itmhide">
                                    <p class="size15 bold caps clightgrey">cart content</p>
                                    @foreach($content as $prod)
                                    <div >
    <a href="#"><img src="{{Storage::url($prod->options->image)}}" alt="" style="width:70px; height:50px;"/></a>
                                    </div>
                                    <p class="price">{{$prod->price}}</p>
                        <a href="#" class="title">{{$prod->name}} </a>
                                    <p class="quantity">Qty: {{$prod->qty}}</p>
                <a class="cart_delet" href="{{URL::to('/delet-to-cart/'.$prod->rowId)}}">
                                    
                <button type="button"  class="close mt-30">&times;</button>


                </a>

                                </li>
                                @endforeach
                                <li class="itmhide2">
                                    <div class="noitems text-center none">There are no items in cart</div>
                                    <div class="total">
                                        <p class="left size15 bold caps clightgrey">Total:</p>
                                        <p class="totalprice right"></p>
                                        <div class="clearfix"></div>
                                        
        <a  class="btn cartbtn btn-default caps  right" href="{{URL::to('/view_Cart')}}"><i >View Cart</i></a>
                                        
                    <a  class="btn cartbtn btn-default caps  right" href="{{URL::to('/delet_Cart')}}" ><i >checkout</i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                                
                              </ul>
                            </li>
                            <li class="search"><a href="#" class="srclick flip"><i class="ti-search"></i></a></li>
                        </ul>
                    </div>  

                    <div class="dots">
                        <a href="#" class="opendots">
                            <span class="icon-dots"></span>
                            <span class="icon-dots"></span>
                            <span class="icon-dots"></span>
                        </a>
                    </div>          
                    
                </div>
            </div>      
            
        </div>
    </div>

    <!-- SEARCH --> 
    <div class="fwsearch">
        <div class="size30"><span class="escape">Press [ esc ] or close</span><a href="#" class="closesearch">+</a></div>
        
        <div class="csearch container">
            <input type="email" class="form-control fwsearchfield" placeholder="Search keyword">
            <button type="submit" class="btn fwsearchfieldbtn"><i class="ti-search"></i></button>
        </div>


    </div>
<!-- End of Navigation -->          

<!--
#################################
    - THEMEPUNCH BANNER -
#################################
-->
<!-- START REVOLUTION SLIDER 3.1 rev5 fullwidth mode -->
<div id="parallax-off" class="tp-banner-container relative">
    <div class="tp-banner" >
        <ul>

            <!-- SLIDE 1  -->
            <li  data-transition="fade" data-slotamount="1" data-masterspeed="2000" data-thumb="{{asset('font-office/images/slider/girls.jpg')}}" data-delay="12000"  data-saveperformance="on"  data-title="Ken Burns Slide" data-color="white">
                <!-- MAIN IMAGE -->
                <img src="{{asset('font-office/images/dummy.png')}}" alt="" data-lazyload="{{asset('font-office/images/slider/girls.jpg')}}" data-bgposition="left center" data-kenburns="on" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="100" data-bgfitend="100" data-bgpositionend="center center">

                <!-- LAYER 1 -->
                <div class="prlx-on tp-caption slidertitle customin customout tp-resizeme"
                    data-x="center"  data-voffset="-50"
                    data-y="center"  data-hoffset="0"
                                            
                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-speed="500"
                    data-start="3500"
                    data-easing="Power3.easeInOut"
                    data-splitin="chars"
                    data-splitout="chars"
                    data-elementdelay="0.05"
                    data-endelementdelay="0.05"
                    data-endspeed="300"
                    style="z-index: 10;"
                    >Start & Go
                </div>
                
                <!-- LAYER 2 -->
                <div class="prlx-on tp-caption slidersubtitle randomrotate customout tp-resizeme"
                    data-x="center"  data-voffset="0"       
                    data-y="center"  data-hoffset="0"   
                    
                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-speed="500"
                    data-start="500"
                    data-easing="Power3.easeInOut"
                    data-splitin="chars"
                    data-splitout="chars"
                    data-elementdelay="0.05"
                    data-endelementdelay="0.05"                     
                    data-endspeed="100"
                    style="z-index: 10;"
                    >Une chaîne de distribution digitale des cafés
                </div>
                
                <!-- LAYER 3 -->
                <div class="prlx-on tp-caption caption-white-bold-caps  customin customout"
                    data-x="center"   data-voffset="80" 
                    data-y="center"   data-hoffset="0"
                
                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-speed="500"
                    data-start="5000"
                    data-easing="Back.easeOut"
                    data-endspeed="300"
                    data-endeasing="Back.easeIn"
                    style="z-index: 10;"
                    >
                    <div class="container rev-ct1">
                        <div class="col-md-6">
                            <a href="{{URL::to('/index')}}" class="btn btnwhiteline2 fontproximabold plr40 caps rev-l">Order now</a>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btnwhiteline2 fontproximabold plr50 caps rev-r " href="{{URL::to('/Blog')}}">Our articles</a>
                        </div>
                    </div>
                </div>  

                <!-- SCROLL -->
                <div class="prlx-off tp-caption caption-white-bold-caps customin customout"
                    data-x="center"   data-voffset="-20"
                    data-y="bottom"   data-hoffset="0"  
                                            
                    data-customin="opacity:0;"
                    data-customout="opacity:1;"
                    data-speed="500"
                    data-start="0"
                    data-easing="easeOut"  
                    style="z-index: 10;"
                    >
                    <div class=" rs-slideloop"          
                    data-easing="Power3.easeInOut"
                    data-speed="0.5"
                    data-ys="-5"
                    data-ye="5"
                    data-xs="0"
                    data-xe="0"
                    >
                    <span class="ti-mouse size30 cwhite"></span>
                    </div>
                </div>  

                <!-- Filter dark -->
                <div class="tp-caption customin customout"
                     data-x="center"
                     data-y="center"

                     data-customin="opacity:0;"
                     data-customout="opacity:1;"
                     data-speed="600"
                     data-start="0"
                     data-easing="easeOut"  
                     style="z-index: 4; display:block; background:rgba(0,0,0,0.5); width:100%; height:100%;"
                ></div>
            </li>

            <!-- VIDEO  -->
            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-color="white">
            
                <!-- MAIN IMAGE -->
                <img src="http://titanicthemes.com/demo/avision/preview/images/slider/video/flexboxvideo.jpg"  alt="video_forest"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-fade fadeout fullscreenvideo"
                    data-x="0"
                    data-y="0"
                    data-speed="1000"
                    data-start="0"
                    data-easing="Power4.easeOut"
                    data-endspeed="1500"
                    data-endeasing="Power4.easeIn"
                    data-autoplay="true"
                    data-autoplayonlyfirsttime="false"
                    data-nextslideatend="true"
                    data-forceCover="1"
                    data-aspectratio="16:9"
                    data-forcerewind="on"
                    style="z-index: 2">
                <!-- data-dottedoverlay="twoxtwo" -->

                <video class="video-js vjs-default-skin whfull" preload="none" poster='http://titanicthemes.com/demo/avision/preview/images/slider/video/flexboxvideo.jpg' >
                    <source src='http://titanicthemes.com/demo/avision/preview/images/slider/video/flexboxvideo.mp4' type='video/mp4' />
                    <source src='http://titanicthemes.com/demo/avision/preview/images/slider/video/flexboxvideo.webm' type='video/webm' />
                    <source src='http://titanicthemes.com/demo/avision/preview/images/slider/video/flexboxvideo.ogv' type='video/ogg' />
                </video>

                </div>

                <!-- Filter maron -->
                <div class="tp-caption "
                     data-x="center"
                     data-y="center"
                     data-speed="600"
                     data-start="0"
                     data-easing="easeOut"  
                     style="z-index: 4; display:block; background:rgba(102,102,51,0.1); width:100%; height:100%;"
                     ></div>

                <!-- Filter dark -->
                <div class="tp-caption customin customout"
                     data-x="center"
                     data-y="center"

                     data-customin="opacity:0;"
                     data-customout="opacity:1;"
                     data-speed="600"
                     data-start="0"
                     data-easing="easeOut"  
                     style="z-index: 4; display:block; background:rgba(0,0,0,0.5); width:100%; height:100%;"
                     ></div>

                <!-- SCROLL -->
                <div class="prlx-off tp-caption caption-white-bold-caps customin customout"
                    data-x="center"   data-voffset="-20"
                    data-y="bottom"   data-hoffset="0"  
                                            
                    data-customin="opacity:0;"
                    data-customout="opacity:1;"
                    data-speed="500"
                    data-start="0"
                    data-easing="easeOut"  
                    style="z-index: 10;"
                    >
                    <div class=" rs-slideloop"          
                    data-easing="Power3.easeInOut"
                    data-speed="0.5"
                    data-ys="-5"
                    data-ye="5"
                    data-xs="0"
                    data-xe="0"
                    >
                    <span class="ti-mouse size30 cwhite"></span>
                    </div>
                </div>  

                <!-- LAYER NR. 1 -->
                <div class="prlx-on tp-caption slidertitle customin customout"
                    data-x="center"
                    data-y="center"
                    data-captionhidden="on"


                    data-splitin="words"
                    data-elementdelay="0.25"
                    data-start="200"
                    data-speed="600"
                    data-easing="Back.easeOut"
                    data-customin="x:0;y:-20;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"



                    data-frames="{ typ :lines;
                                 elementdelay :0.1;
                                 start:1650;
                                 speed:500;
                                 ease:Power3.easeOut;
                                 animation:x:0;y:-20;z:0;rotationX:00;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                 },
                                 { typ :lines;
                                 elementdelay :0.1;
                                 start:2150;
                                 speed:500;
                                 ease:Power3.easeOut;
                                 animation:x:0;y:-40;z:0;rotationX:00;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                 }
                                 "

                    data-splitout="words"
                    data-endelementdelay="0.1"
                    data-customout="x:0;y:0;z:0;rotationX:40;rotationY:70;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-endspeed="500"
                    data-endeasing="Power4.easeIn"

                    style="z-index: 4">TRY THE PAGEBUILDER
                </div>

                <div class="prlx-on tp-caption slidersubtitle customin customout"
                    data-x="center"   data-hoffset="0"
                    data-y="center"   data-voffset="30"

                    data-splitin=""
                    data-elementdelay=""
                    data-start="1600"
                    data-speed="600"
                    data-easing="Power3.easeOut"
                    data-customin="x:0;y:30;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                    data-frames="{ typ :lines;
                                 elementdelay :0.1;
                                 start:2150;
                                 speed:500;
                                 ease:Power3.easeOut;
                                 animation:x:0;y:-35;z:0;rotationX:00;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                 }
                                 "

                    data-splitout="lines"
                    data-endelementdelay="0.1"
                    data-customout="x:-230;y:-20;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.2;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%"
                    data-endspeed="500"

                    data-endeasing="Back.easeIn"
                    data-captionhidden="on"
                    style="z-index: 10">You can choose from a large variety of themes, or..
                </div>

                <div class="prlx-on tp-caption  customin customout"
                    data-x="center"   data-voffset="80" 
                    data-y="center"   data-hoffset="0"

                    data-splitin=""
                    data-elementdelay=""
                    data-start="2150"
                    data-speed="600"
                    data-easing="Power3.easeOut"
                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 100%;"
                    
                    data-frames="{ 
                                 elementdelay :0.1;
                                 start:2150;
                                 speed:500;
                                 ease:Power3.easeOut;
                                 animation:x:0;y:-20;z:0;rotationX:00;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                 }
                                 "

                    data-endelementdelay="0.1"
                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 100%;"
                    data-endspeed="500"
                
                    data-endeasing="Back.easeIn"
                    data-captionhidden="on"
                    style="z-index: 10"><a href="../builder" class="btn btnwhiteline2 fontproximabold plr50 caps center" target="_blank">Build your own page</a>
                </div>
            </li>

        </ul>
        <div class="tp-bannertimer none"></div>
    </div>
</div>
<!-- END REVOLUTION SLIDER -->
<!-- THE TEAM SECTION -->
<div class="teamsection bgwhite relative z100 sspacing-title-button owhidden">
    <div class="container">
        <div class="row">
            <h3 class="text-center caps pb30 titlefont">Non seulement un café, mais aussi:</h3> 

             <?php
         $all_categorie=DB::table('tb1_categories')
                                     ->where('publication_status',1)
                                     ->limit(4)
                                     ->get();
               foreach($all_categorie as $v_categorie){?>
            <div class="col-md-3" data-scroll-reveal="enter left over 1s and move 300px after 0.5s">
                <div class="player offset-0" data-scrollreveal="enter left">
                    <h4 class="m15">{{$v_categorie->name_categorie}}</h4>
                    <div class="teampicture">
                        <img src="{{Storage::url($v_categorie->categorie_image)}}" class="fwi dajy" alt=""/>
                        <div class="teamover"></div>
                        <p>Start&GO</p>
                         

                    </div>
                    <div class="socialiconswhite m20">
                        
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
                <?php } ?>           
                                    
           
            
            
            <div class="clearfix"></div>
            <div class="separator33" data-scroll-reveal="enter top over 1s and move 30px after 0.5s"></div>
            
            <div class="col-md-8" data-scroll-reveal="enter bottom over 1s and move 30px after 0.5s">
            
                <ul class="aboutteamlist">
                    <li>
                        <div class="circlesmall left"><i class="icon-globe"></i></div>
                        <div class="ctnr">
                            <h4 class="uppercase mb15 titlefont">Boisson chaude</h4>
                        
                        </div>
                    </li>

                    <li>                
                        <div class="circlesmall left"><i class="icon-signal"></i></div>
                        <div class="ctnr">
                            <h4 class="uppercase mb15 titlefont">Boisson froide</h4>
                                 
                        </div>
                    </li>

                    <li>                
                        <div class="circlesmall left"><i class="icon-group"></i></div>
                        <div class="ctnr">
                            <h4 class="uppercase mb15 titlefont">Viennoiserie</h4>      
                          
                        </div>
                    </li>               
                    
                    <li>                
                        <div class="circlesmall left"><i class="icon-beaker"></i></div>
                        <div class="ctnr">
                            <h4 class="uppercase mb15 titlefont">Lunch</h4>
                           
                        </div>  
                    </li>
                </ul>
            </div>
            <div class="col-md-4 enableanimation" data-scroll-reveal="enter bottom over 1s and move 30px after 0.5s">
                <h4 class="uppercase mb15 titlefont">TOP CATEGORIES</h4>                
                
                <div class="progress-about margbar">
                  <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-maincolor pbar1">
                    Boisson chaude 90%
                  </div>
                </div>
                <div class="progress-about margbar">
                  <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" role="progressbar" class="progress-bar progress-bar-maincolor pbar2">
                    Boisson froide 100%
                  </div>
                </div>
                <div class="progress-about margbar">
                  <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" role="progressbar" class="progress-bar progress-bar-maincolor pbar3">
                    Viennoiserie 85%
                  </div>
                </div>              
                <div class="progress-about margbar mb50">
                  <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="95" role="progressbar" class="progress-bar progress-bar-maincolor pbar4">
                    Lunch 95%
                  </div>
                </div>              
            </div>      
            
            <div class="clearfix"></div>        
            <p class="text-center caps"><a href="#" class="btn btnwhitehuge btn-default">Voir Détails</a></p>
        </div>
    </div>
</div>


<!-- SECTION IMAGE -->
<section class="bg222 c999 relative z100 clearfix">
    <div class="cover1 col-xs-12 col-sm-12 col-md-6 h700" ><img style="width:600px; height:700px;" src="
        {{asset('font-office/images/main.jpg')}}">
</div>
    <div class="container cus-pos-abs">
        <div class="clearfix"></div>
        <div class="cover-right-text col-sm-12 col-sm-offset-0 col-md-6 col-md-offset-6 sspacing">

            <h1 class="titlefont cwhite">START & GO</h1>
            <h3 class="titlefont mt20">
                Un nouveau concept idéal, pour les addictionnés au café.
                Un concept qui se base sur l'agilité, l'interaction instantanné avec le besoin quotidien de l'employé. Vous en avez marre d'attendre du temps à avoir votre café matinal? Vous en avez marre d'arriver tard à votre lieu de travail?
                <BR>START & GO est toujours à votre service afin de vous sauver!
            </h3>
            <div class="separator100 bg333 mtb30"></div>
            <ul class="aboutteamlist">
                <li>
                    <div class="clightgrey circlesmall dark left"><i class="icon-magic"></i></div>
                    <div class="ctnr">
                        <h4 class="cwhite uppercase mb15">Agilité</h4>
                        <p></p>
                    </div>
                </li>

                <li>                
                    <div class="clightgrey circlesmall dark left"><i class="icon-equalizer"></i></div>
                    <div class="ctnr">
                        <h4 class="cwhite uppercase mb15">Interaction instantanné</h4>
                        <p></p>         
                    </div>
                </li>

                <li>                
                    <div class="clightgrey circlesmall dark left"><i class="icon-mobile"></i></div>
                    <div class="ctnr">
                        <h4 class="cwhite uppercase mb15">Digital Process</h4>      
                        <p></p>
                    </div>
                </li>               
                
            
            </ul>           
        </div>
    </div>
</section>
<!-- END OF SECTION IMAGE -->


<!-- END OF TEAM SECTION -->
<div class="">
    <div class="container sspacing">
        <div class="row">
            <ul class="services">
                
                <li class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <a>
                        <i class="icon-user lh50 size50 clightgrey"></i>
                        <h4 class="uppercase titlefont mtb10">Entreprises conventionnées</h4>
                        Chaque entreprise conventionnée avec notre café bénéficie des promos
                        ainsi que des remises en fonction des produits commandés. 
                    </a>
                </li>
                <li class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <a>
                        <i class="icon-fire lh50 size50 clightgrey"></i>
                        <h4 class="uppercase titlefont mtb10">Produits variés</h4>
                        Non seulement un simple tas de café, mais des produits différents mis à vôtre disposition.
                    </a>
                </li>
                <li class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <a>
                        <i class="icon-location-1 lh50 size50 clightgrey"></i>
                        <h4 class="uppercase titlefont mtb10">Livraison</h4>
                        Ne craignez rien, votre commande sera livrée à vôtre localisation dans des délais inimaginables.
 
                    </a>
                </li>
            </ul>   
        </div>
    </div>
</div>
<!-- END OF SECTION SERVICES -->
<!-- SECTION PORTFOLIO CAROUSEL-->
<div class="bg222 relative z100 pt50">
    <div class=" text-center">
        <h3 class="titlefont text-center caps pb20 cwhite">Derniers articles postés</h3>

        <!-- CarouFredSel 4 -->
        <div class="list_carousel5 responsive">
            <ul id="foo5" class="max4">
                <?php
         $all_articles=DB::table('tb1_articles')
                                    
                                     ->limit(4)
                                     ->get();
               foreach($all_articles as $v_article){?>
                <li class="pfover">
                    <a href="{{URL::to('/Blogdetails/'.$v_article->id_article)}}" class="circlebig2"><i class="icon-article-alt"></i></a>
                    <a href="{{asset('font-office/images/carousel5/thumb5.jpg')}}" data-rel="lightcase:myCollection2"><img src="{{Storage::url($v_article->imagearticle)}}" class="wdhover" alt=""/></a>
                    <div class="caption">
                        <p class="title">{{$v_article->titre}}</p>
                        Your caption description goes here...
                    </div>
                </li>
              
               <?php }?>
               
                                  
            </ul>
            <div class="clearfix"></div>
            
            <a id="prev5" href="" class="">&#60;</a>
            <a id="next5" href="" class="">&#62;</a>
        </div>
        <!-- End of CarouFredSel 4 -->
        
    </div>
</div>
<!-- END OF SECTION PORTFOLIO CAROUSEL -->

<!-- 2 COLUMNS -->
<div class="bg222 c999 relative z100">
    <div class="container">
        <div class="col-md-6 ptb50">
            <i class="icon-fire size60 pull-left"></i>
            <h4 class="titlefont caps mb10 cwhite">Promos</h4>
            <p>Un client fidèle, c'est un client qui doit être recompensé. Découvrez nos offres promotionnels et profitez-en! </p>          
        </div>
        <div class="h200 col-md-6 cborder ptb50">
            <i class="icon-doc size60 pull-left"></i>
            
            <div class="ml100">
                <h4 class="titlefont caps mb10 cwhite">Nouveautés</h4>
                <!-- TESTIMONIALS CAROUSEL -->
                <div class="testimonials responsive">
                    <ul id="testimonials">
                        <li>
                            Découvrez plus en profondeur ce qu'on fournit pour vous.
                        </li>
                        <li>Découvrez notre gamme à travers la composition des produits. </li>
                        <li>Découvrez aussi la diversité des produits avec des normes qualitatives. </li>
                    </ul>
                    <div class="clearfix"></div>
                    
                    
                    <!-- <div class="test-timer"></div> -->
                    <!-- <div class="w60 ml70">
                        <a id="test-prev" href="" class="">&#60;</a>
                        <a id="test-next" href="" class="">&#62;</a> 
                    </div> -->
                    
                    <div class="test-pager dark2 ml-10"></div>
                </div>
                <!-- TESTIMONIALS END -->
            </div>
        </div>
    </div>
</div>
<!-- END OF 2 COLUMNS -->

<!-- SECTION -->
<div class="">
    <div class="container sspacing">
        <div class="row">

            <div class="col-md-6">
                <h3 class="caps size40 pb20 titlefont">Soyez flexible, utilisez notre application mobile!</h3>
                <!-- Accordion -->
                <div class="panel-group" id="accordion">
                  
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                         Pourquoi devrez-vous utiliser l'application mobile? 
                        </a>
                      </h4>
                      <span></span>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                      <div class="panel-body"><span></span>
                        Grâce à l'application mobile, vous pouvez principalement gagner du temps,passer votre commande rapidement n'importe où vous se trouverez.<br/><br/>
                        L'application mobile est plus facile à utiliser, seulement en trois cliques, votre commande pourrait être livrée à vous dans des brefs délais.
                      </div>
                    </div>                  
                  </div>
                  
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                         Mobile,Tablette,autres plateformes
                        </a>
                      </h4>
                      <span></span>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body"><span></span>
                        Avec un même contenu, mais une ambiance de navigation différente vous pouvez découvrir les sevices offerts par notre application.
                    </div>                        
                    </div>                  
                  </div>

                  
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                          Ergonomie
                        </a>
                      </h4>
                      <span></span>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body"><span></span>
                        Ne vous inquietez pas, quelque soit la version que vous allez exploiter! Vous vous sentez toujours dans le même endroit, vôtre satisfaction est notre priorité.
                      </div>
                    </div>                  
                  </div>
                </div>
                <!-- End of Accordion -->           
            </div>
            
            <div class="col-md-6">
                <!-- CarouFredSel 3 -->
                <div class="list_carousel3 responsive">
                    <ul id="foo3">
                        <li><img src="{{asset('font-office/images/device-b.png')}}" class="fwi" alt=""/></li>
                        <li><img src="{{asset('font-office/images/device.png')}}" class="fwi" alt=""/></li>
                        
                       
                    </ul>
                    <div class="clearfix"></div>
                    
                    <div class="timer3 none"></div>
                    <a id="prev3" href="" class="none">&#60;</a>
                    <a id="next3" href="" class="none">&#62;</a>
                    <div class="pager3"></div>
                </div>
                <!-- End of CarouFredSel 3 -->
            </div>

            <div class="clearfix"></div>
            <div class="separator33 mt10"></div>
            
            <div class="col-md-3" data-scroll-reveal="enter top over 1s and move 0px after 0.2s">
                <div class="circlesmall left"><i class="icon-child"></i></div>
                <div class="ctnr">
                    <h4 class="uppercase mb15 titlefont">Expérience utilisateur</h4>
                    <p>Une application mobile offre une expérience utilisateur bien meilleure. La navigation est transparente et intuitive et est donc beaucoup plus utilisée que les sites Web mobiles.</p>
                </div>
            </div>
            <div class="col-md-3" data-scroll-reveal="enter top over 1s and move 0px after 0.4s">
                <div class="circlesmall left"><i class="icon-network"></i></div>
                <div class="ctnr">
                    <h4 class="uppercase mb15 titlefont">Disponnibilité</h4>
                    <p>Les services offerts par l'application, y compris la passassion de la commande est toujours valable à votre disposition. Vous pouvez passer votre commande avant une durée bien determinée en mentionnnant la date que vous désirez en recevoir.</p>
                </div>
            </div>
            <div class="col-md-3" data-scroll-reveal="enter top over 1s and move 0px after 0.6s">
                <div class="circlesmall left"><i class="icon-shield"></i></div>
                <div class="ctnr">
                    <h4 class="uppercase mb15 titlefont">Sécurité</h4>
                    <p>Les applications natives mobiles ont un avantage architectural et ne nécessitent donc pas de se connecter fréquemment au réseau.</p>
                </div>
            </div>
            <div class="col-md-3" data-scroll-reveal="enter top over 1s and move 0px after 0.8s">
                <div class="circlesmall left"><i class="icon-ok"></i></div>
                <div class="ctnr">
                    <h4 class="uppercase mb15 titlefont">Compatibilité</h4>
                    <p>Une application native est spécialement conçue pour être compatible avec votre appareil mobile. C’est pourquoi il est capable de communiquer et d’interagir avec votre appareil.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Facts -->


<!-- End of FACTS SECTION-->



<div class="separator100"></div>

<!-- SECTION PARTNERS -->
<div class="sspacing-title">
    <div class="container text-center">
        <h3 class="text-center caps titlefont pb10">Nous sommes reconnaissants à nos fournisseurs</h3>

        <!-- CarouFredSel 4 -->
        <div class="list_carousel4 responsive">
            <ul id="foo4">
                <li><img src="{{asset('font-office/images/logos/logo1.jpg')}}" alt=""/></li>
                <li><img src="{{asset('font-office/images/logos/logo2.jpg')}}" alt=""/></li>
                <li><img src="{{asset('font-office/images/logos/logo3.jpg')}}" alt=""/></li>
                <li><img src="{{asset('font-office/images/logos/logo4.jpg')}}" alt=""/></li>
                <li><img src="{{asset('font-office/images/logos/logo5.jpg')}}" alt=""/></li>
                <li><img src="{{asset('font-office/images/logos/logo6.jpg')}}" alt=""/></li>
                <li><img src="{{asset('font-office/images/logos/logo7.jpg')}}" alt=""/></li>
            </ul>
            <div class="clearfix"></div>
            
            <!--
            //This enables more scrolling options and timer
            <div class="timer4"></div>
            <a id="prev4" href="" class="">&#60;</a>
            <a id="next4" href="" class="">&#62;</a>
            <div class="pager4"></div>
            -->
        </div>
        <!-- End of CarouFredSel 4 -->
        
    </div>
</div>
<!-- End of Section -->

<!-- ADDRESS SECTION -->

<!-- End of Address -->

<!-- FOOTER -->
<div class="footer">
    <div class="container ptb50 cwhite">
        <div class="row">
            <div class="col-md-3">
                <h5 class="uppercase bold pb20 cwhite titlefont">About us</h5>
                <p>Start & Go est une chaîne de distribution digitale des cafés, un différent gôût grâce à nos produits variés.</p>
            </div>
            <div class="col-md-3">
                <h5 class="uppercase bold pb20 cwhite titlefont">Services</h5>
                <ul>
                    <li><a href="{{URL::to('/Start&Go')}}">Acceuil</a></li>
                    <li><a href="{{URL::to('/Histoire')}}">Histoire</a></li>
                    <li><a href="{{URL::to('/FAQ')}}">FAQ</a></li>
                    <li><a href="{{URL::to('/index')}}">Commande</a></li>
                    <li><a href="{{URL::to('/Blog')}}">Blog</a></li>
                    <li><a href="{{URL::to('/Contact')}}">Contact</a></li>
                </ul>
            </div>
            
            <div class="col-md-3">
                <h5 class="uppercase bold pb20 cwhite titlefont">Newsletter</h5>
                <p>Latest News Straight to your inbox</p>
                <input type="email" class="form-control newsletter" placeholder="Enter email">
                <button type="submit" class="btn newsletterbtn"><i class="icon-mail"></i></button>
            </div>
        </div>
    </div>
    
    <div class="clearfix"></div>
    <div class="separator100dark"></div>
    
    <div class="container ptb30 cwhite">
        <a href="#"><img src="http://localhost:8000/font-office/images/final.png" class="w90" alt="avision logo" /></a>
        <div class="socialicons right">
            <ul>
                <li class="blue dgrey"><a href="#"><i class="icon-facebook"></i></a></li>
                <li class="lblue lgrey"><a href="#"><i class="icon-twitter-bird"></i></a></li>
                <li class="orange dgrey"><a href="#"><i class="icon-gplus"></i></a></li>
                <li class="pink lgrey"><a href="#"><i class="icon-dribbble"></i></a></li>
                <li class="red dgrey"><a href="#"><i class="icon-youtube"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- End of Footer -->

<p id="back-top"><a href="#top"><span class="ti-angle-up"></span></a></p>

<div class="newsletter-ani">
    <div class="circle-obj"></div>
    <div class="circle-obj2"><span class="ti-check"></span></div>
    <div class="circle-obj3 opensans xslim">Subscribed</div>
</div>
 <div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">              
                <h4 class="modal-title">Connexion</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                
                
                    <div class="form-group">
                        <a href="{{URL::to('/loginentreprise')}}" class="btn btn-primary btn-block btn-lg" >Connexion entreprise
                        </a>
                    </div>
            <div class="form-group">
                <a href="{{URL::to('/loginemploye')}}" class="btn btn-primary btn-block btn-lg" >              Connexion employé

                        </a>
                    
                    </div>
        </div>
    </div>
</div>     

<!-- jQuery --> 
<script type="text/javascript" src="{{asset('font-office/js/jquery.js')}}"></script>

<!-- COMPRESSED -->
<script type="text/javascript" src="{{asset('font-office/js/compressed.js')}}"></script>

<!-- Parallax & Animations -->
<script type="text/javascript" src="{{asset('font-office/js/animations.js')}}"></script>

<!-- FUNCTIONS -->
<script type="text/javascript" src="{{asset('font-office/js/functions.js')}}"></script>

<!-- Including all compiled Bootstrap plugins  --> 
<script type="text/javascript" src="{{asset('font-office/dist/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('font-office/js/StarRating.js')}}"></script>
<script type="text/javascript" src="{{asset('font-office/js/rating.js')}}"></script>

</body>
</html>