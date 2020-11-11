<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Start & Go | Inscrpition employé </title>
	<link rel="icon" href="{{URL::to('login-admin/img/icon.ico')}}" />

    
   <link rel="stylesheet" href="{{asset('login-front-office/css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('login-front-office/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('login-front-office/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('login-front-office/css/responsive.css')}}">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
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
					<div class="log-reg-area">
						<h2 class="log-title">Inscription</h2>
						
				

						<?php

				$message=Session::get('messageE');

					if($message){
					echo"<div class='alert p15 alert-danger' role='alert'><span class='ti-face-sad'></span> ";
						echo $message."</div>";
						Session::put('messageE',null);

					}
					?>





						<form method="post"  action="{{ url('/save_employe') }}" enctype="multipart/form-data">
				@csrf
			{{csrf_field()}}
							<div class="form-group">	
							  <input type="text" required="required" name="Nom_prenom" />
							  <label class="control-label" for="input">Nom Prénom</label><i class="mtrl-select"></i>
							</div>
						
							<div class="form-group">	
							  <select name="post"> 
							  	<option value="Agriculture">Directeur,</option>
							  	<option value="Exécutif">Exécutif </option>
							  	<option value="Assistant">Assistant</option>

							  	<option value="Stagiaire">Stagiaire</option>
								<option value="Autres post de services">Autres Post de services</option>

							  </select>
							  <label class="control-label" for="input">Poste</label><i class="mtrl-select"></i>
							</div>

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
							<label>Image employé</label>
							<br>
        <i class="mtrl-select"></i>
				 <input type="file"  name="file" id="image" class="form-control" />
						</div>	
							<div class="form-group">	
							  <input type="number" required="required" name="tel" />
							  <label class="control-label" for="input">Téléphone</label><i class="mtrl-select"></i>
							</div>
								<div class="form-group">	
							  <input type="password" required="required" name="code_entreprise" />
							  <label class="control-label" for="input">Code confidentiel de l'entreprise</label><i class="mtrl-select"></i>
							</div>

							<div class="form-group">	
							  <input type="password" required="required" name="password" />
							  <label class="control-label" for="input">Mot de passe</label><i class="mtrl-select"></i>
							</div>
							<div class="form-radio">
							  <div class="radio">
								<label>
					<input type="radio" name="sexe" checked="checked" value="Homme" /><i class="check-box"></i>Homme
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="sexe" value="Femme" /><i class="check-box"></i>Femme
								</label>
							  </div>
							</div>
							<div class="form-group">	
							  <input type="email" required="required" name="email" />
							  <label class="control-label" for="input"><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6c29010d05002c">[email&#160;]</a></label><i class="mtrl-select"></i>
							</div>
							
							<a href="#" title="" class="already-have">Je possède déjà un compte</a>
							<div >
								<button type="submit"><span>S'inscrire</span></button>
							</div>
						</form>
					</div>
				
				
</div>
			</div>
		</div>
	</div>
</div>
<div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 10px; right: 5px; opacity: 1; cursor: pointer;"><i class="fa fa-angle-up"></i></div>

</body>	
	
	<script src="{{asset('login-front-office/js/main.min.js')}}"></script>
	<script src="{{asset('login-front-office/js/script.js')}}"></script>



</html>