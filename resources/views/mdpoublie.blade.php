<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Responsable Entrperise | Login </title>
	<link rel="icon" href="{{URL::to('login-admin/img/icon.ico')}}" />

    
   <link rel="stylesheet" href="{{asset('login-front-office/css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('login-front-office/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('login-front-office/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('login-front-office/css/responsive.css')}}">

</head>
<body>



<div class="theme-layout">
	<div class="container-fluid pdng0">
		<div class="row merged">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="land-featurearea">
					<div class="land-meta">
						<h1>Start & Go</h1>
						<p>
							Start & Go est une chaîne de distrubtion des cafés 
						</p>
						<div class="friend-logo">
							<span><img src="{{URL::to('font-office/images/logofinal.png')}}" alt=""></span>

						</div>
						<a href="#" title="" class="folow-me">A satisfied customer is our happiness.</a>
					</div>	
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="login-reg-bg">
					<div class="log-reg-area sign">
						<h2 class="log-title">Login</h2>
					
					<?php

				$message=Session::get('message');

					if($message){
					echo"<div class='alert p15 alert-danger' role='alert'><span class='ti-face-sad'></span> ";
						echo $message."</div>";
						Session::put('messageE',null);

					}
					?>
	<form method="post"  action="{{ url('/oublie') }}" enctype="multipart/form-data">
				@csrf
			{{csrf_field()}}
							<div class="form-group">	
							  <input type="email" id="input" required="required" name="email" />
							  <label class="control-label" for="input">email d'utilisateur</label><i class="mtrl-select"></i>
							</div>
							<br>
						<div class="form-group">	
							  <select name="Nomentreprise"> 
                                      <option>Choisir entreprise</option>
											<?php
         $all_entreprises=DB::table('tb1_entreprises')
                                     
                                     ->get();
               foreach($all_entreprises as $v_entreprise){?>									  	
            <option value="{{$v_entreprise->id_entreprise}}">{{$v_entreprise->nom_entreprise}}</option>
<?php } ?>		
							  </select>
							  <label class="control-label" for="input">Nom entreprisie</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="password" required="required" name="password"/>
							  <label class="control-label" for="input">Nouveau mot de passe</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="password" required="required" name="pwd" />
							  <label class="control-label" for="input">Confirmer mot de passe</label><i class="mtrl-select"></i>
							</div>
							<div class="checkbox">
							
							
							<div class="submit-btns">
								<button class="mtr-btn signin" type="submit"><span>Connexion</span></button>
								
							</div>
						</form>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</div>
</body>	
	
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('login-front-office/js/main.min.js')}}"></script>
	<script src="{{asset('login-front-office/js/script.js')}}"></script>



</html>