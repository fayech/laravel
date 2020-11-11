@extends('info_employe')
@section('info_employe')


<div class="row mt90 mb70">
	<form method="post" action="{{url('/profiledit')}}">
		@csrf
			
			{{csrf_field()}}
			<h3 class="text-center caps pb20 titlefont">Paramètres du compte</h3>
			<p class="text-center size30 mb10 pb20">

Ceci est votre espace privé. Veuillez garder vos informations à jour.
Informations personnelles.</p>
			<div class="col-md-6 center">
				<label  for="input">Nom et Prénom :</label>	
			<i class="mtrl-select"></i>

	 <input type="text" required="required" name="Nom_prenom" class="form-control formlarge mt17"  value="{{$profil_info->nom_prenom}}" />
			   <label  for="input">tel :</label><i class="mtrl-select"></i>

				 <input type="number" required="required" name="tel" class="form-control formlarge mt17"  value="{{$profil_info->tel}}"/>
							 
 
							 
  <label  for="input">Poste :</label><i class="mtrl-select"></i>
				 <select name="post" class="form-control formlarge mt17"> 
				 	<option value="{{$profil_info->post}}">{{$profil_info->post}}</option>
				 	<option value="Agriculture">Directeur,</option>
							  	
							  	<option value="Exécutif">Exécutif </option>
							  	<option value="Assistant">Assistant</option>

							  	<option value="Stagiaire">Stagiaire</option>
								<option value="Autres post de services">Autres Post de services</option>

							  </select>
			<label  for="input">E-mail :</label>  

			  <input type="email" required="required" name="email" class="form-control formlarge mt17" value="{{$profil_info->email}}"/>	
							
			</div>
			
			<button type="submit" class="btn btnwhitebig btn-default caps center mt30 wow pulse animated" data-wow-delay="0.4s" data-wow-duration="1s" data-wow-iteration="2"><i class="icon-mail"></i> Modifier profil</button>
			<div class="clearfix"></div>
			</form>
		</div>
		@endsection