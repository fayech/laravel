@extends('login')
@section('loginESE')
					
<style>
#Map {
   height: 300px;
   width: 100%;
}
</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBE7kfwSaqVFjr57AHNk2N9057p-d8PNUU&callback=myMap">
</script>  <script src="js/scripts.js"></script>
<script type="text/javascript"> 
var map;
var marker;
var myLatlng = new google.maps.LatLng(36.7948008,10.0031898);
var geocoder = new google.maps.Geocoder();
var infowindow = new google.maps.InfoWindow();
function initialize(){
var mapOptions = {
zoom: 10,
center: myLatlng,
};

map = new google.maps.Map(document.getElementById("Map"), mapOptions);

marker = new google.maps.Marker({
map: map,
position: myLatlng,
draggable: true 
}); 

geocoder.geocode({'latLng': myLatlng }, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
if (results[0]) {
$('#latitude,#longitude').show();
$('#address').val(results[0].formatted_address);
$('#latitude').val(marker.getPosition().lat());
$('#longitude').val(marker.getPosition().lng());
infowindow.setContent(results[0].formatted_address);
infowindow.open(map, marker);
}
}
});

google.maps.event.addListener(marker, 'dragend', function() {

geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
if (results[0]) {
$('#address').val(results[0].formatted_address);
$('#latitude').val(marker.getPosition().lat());
$('#longitude').val(marker.getPosition().lng());
infowindow.setContent(results[0].formatted_address);
infowindow.open(map, marker);
}
}
});
});

}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div class="log-reg-area sign">
						<h2 class="log-title">Connexion</h2>
							
							<p>
								Vous n'avez pas de compte? <a href="#" class="signup" title="">Inscrivez-vous</a>
							</p>
<form method="post"  action="{{url('/connexion')}}" enctype="multipart/form-data">

@csrf
			{{csrf_field()}}
							<div class="form-group">	
							  <input type="text" id="input" name="email" required="required"/>
							  <label class="control-label" for="input">E-mail</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="password" required="required" name="password" />
							  <label class="control-label" for="input">Mot de passe</label><i class="mtrl-select"></i>
							</div>
							
					<a href="{{URL::to('/pwdoublie')}}" title="" class="forgot-pwd">Mot de passe oublié?</a>
							<div class="submit-btns">
								<button class="mtr-btn signin" type="Submit"><span>Connexion</span></button>
								<a href=""  class="mtr-bti signup">Inscription</a>
								
							</div>
						</form>
					</div>
<div class="log-reg-area reg">
						<h2 class="log-title">Inscription</h2>
						<?php

				$message=Session::get('message');

					if($message){
						echo $message;
						Session::put('message',null);
					}
					?>
						<form method="post" action="{{ url('/save_entreprise') }}" enctype="multipart/form-data">
				@csrf
			{{csrf_field()}}
							<div class="form-group">	
					<input type="text" required="required"  name="nom_entreprise"/>
							  <label class="control-label" for="input">Nom entreprise</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							   <select name="organisation"> 
							  	<option value="Agriculture">Agriculture,</option>
							  	<option value="Industries">La Industries </option>
							  	<option value="Production_distribution">Production et distribution</option>
							  	<option value="Commerce">Commerce</option>
							  	<option value="Marsa">Information et communication</option>
							  	<option value="financières-assurance">Activités financières et d'assurance</option>
							  	<option value="Autres">Autres activités de services</option>

							  </select>
							  <label class="control-label" for="input" name="organisation">Organisation</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <select name="ville">
							  	<option value="Tunis">Tunis</option>
							  	<option value="Soukra">La Soukra</option>
							  	<option value="Ariana">Ariana</option>
							  	<option value="Mourouj">El Mourouj</option>
							  	<option value="Marsa">La Marsa</option>
							  	<option value="Arous">Ben Arous</option>
							  	<option value="Kram">Le Kram</option>

							  </select>
							  <label class="control-label" for="input">Ville</label><i class="mtrl-select"></i>
							</div><div class="form-group">	
							  <input type="text" required="required" name="Codepost" />
							  <label class="control-label" for="input">Code postal</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
				<input type="text" required="required" name="adresse_social" />
							  <label class="control-label" for="input">Adresse social media</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">								  <label class="" for="input">

					 Image entreprise</label><i class="mtrl-select"></i>
					 <input type="file"  name="file" id="image" class="form-control" />

							</div><div class="form-group">	
							  <input type="number" required="required" name="telephone" />
							  <label class="control-label" for="input">Téléphone</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
								 <select name="effectif">
							  	<option value="Micro-entreprises">Le Micro-entreprise(TPE) de moins de 10 salariés</option>
							  	<option value="Petites et les moyennes entreprises">Petite et le moyenne entreprise(PME)</option>
							  	<option value="Entreprise de taille intermédiaire">Entreprise de taille intermédiaire(ETI)</option>
							  	<option value="grandes entreprises">grandes entreprises(GE)supérieur ou égal à 5 000</option>
							  	

							  </select>
							  <label class="control-label" for="input">Effectif</label><i class="mtrl-select"></i>
							</div><div class="form-group">	
					<input type="password" required="required" name="codeentreprise" />
							  <label class="control-label" for="input">Code confidentiel </label><i class="mtrl-select"></i>
							</div>
						
							<div class="form-group">	
							  <input type="email" required="required" name="email" />
							  <label class="control-label" for="input"><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6c29010d05002c">[email&#160;]</a></label><i class="mtrl-select"></i>
							</div>
								<div class="form-group">	
							  <input type="hidden" required="required" name="lat_loc" id="latitude"/>
					     <input type="hidden" required="required" name="long_loc" id="longitude"/>

							</div>
							<div id="Map"></div>

							<div class="checkbox">
							  <label>
								<input type="checkbox" checked="checked"/><i class="check-box"></i>J'accepte les termes et les conditions
							  </label>
							</div>
							<a href="#" title="" class="already-have">Je possède déjà un compte</a>
							<div class="submit-btns">
								<button class="mtr-btn signin" type="submit" ><span>S'inscrire</span></button>
							</div>
						</form>
					</div>
@endsection