@extends('login')
@section('loginESE')

<div class="log-reg-area">
						<h2 class="log-title">Login</h2>
							<p>
								Vous n'avez pas de compte? <a href="#" class="signup" title="">Inscrivez-vous</a>
							</p>

						<?php

				$message=Session::get('messageE');

					if($message){
					echo"	<div class='alert p15 alert-danger' role='alert'><span class='ti-face-sad'></span> ";
						echo $message."</div>";
						Session::put('messageE',null);

					}
					?>
				
<form method="post"  action="{{url('/connexion')}}" enctype="multipart/form-data">

@csrf
			{{csrf_field()}}
							<div class="form-group">	
							  <input type="text" id="input" name="email" required="required"/>
							  <label class="control-label" for="input">email d'utilisateur</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="password" required="required" name="password" />
							  <label class="control-label" for="input">Mot de passe</label><i class="mtrl-select"></i>
							</div>
							<div class="checkbox">
							  <label>
								<input type="checkbox" checked="checked"/><i class="check-box"></i>Connexion automatique.
							  </label>
							</div>
					<a href="{{URL::to('/pwdoublie')}}" title="" class="forgot-pwd">Mot de passe oublié?</a>
							<div class="submit-btns">
								<button class="mtr-btn signin" type="Submit"><span>Connexion</span></button>
						<a href="{{URL::to('/inscriptionemploye')}}"  class="mtr-bti">Inscription</a>
								
							</div>
						</form>
					</div>

@endsection