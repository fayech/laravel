@extends('info_employe')
@section('info_employe')


<div class="row mt90 mb70">
			<h3 class="text-center caps pb20 titlefont">Contact</h3>
			<p class="text-center size30 mb10 pb20">Vôtre feedback est important pour nous, envvoyez-nous un petit message.</p>
			<form method="post" action="{{url('/utilisateurContact')}}">
		@csrf
			<div class="col-md-6">
				<input type="text" class="form-control formlarge" placeholder="Name" value="{{$profil_info->nom_prenom}}" disabled="">
				<input type="text" class="form-control formlarge mt17" placeholder="Email" value="{{$profil_info->email}}" disabled="">
				<input type="text" class="form-control formlarge mt17" placeholder="sujet" name="sujet">
			</div>
			<div class="col-md-6">
				<textarea class="form-control formstyle" rows="8" placeholder="Message"
				name="message"></textarea>
			</div>
			<div class="clearfix"></div>
			<button type="submit" class="btn btnwhitebig btn-default caps center mt30 wow pulse animated" data-wow-delay="0.4s" data-wow-duration="1s" data-wow-iteration="2"><i class="icon-mail"></i>Envoyer Message</button>
			<div class="clearfix"></div>
		</form>
		</div>
		@endsection