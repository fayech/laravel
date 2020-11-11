@extends('admin_layout')
@extends('superadmin')

@section('admin_content')
<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<!-- end table -->
   <div >
		<div class="modal-dialog">
			<div class="modal-content">
			<form method="post" action="{{ url('Update_Fournisseur',$Fournisseur_info->id) }}">

			{{csrf_field()}}
					<div class="modal-header">						
						<h4 class="modal-title">Modifier fournisseur</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
											<label >Nom</label>
		<input type="text" class="form-control" id="nom" name="Nom"  value="{{$Fournisseur_info->nom}}">
											<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
						


						<div class="form-group">
											<label >Ville</label>
		<input type="text" class="form-control" id="ville"   name="ville" value="{{$Fournisseur_info->ville}}" >
											<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
						<div class="form-group">
											<label >Téléphone</label>
			<input type="number" class="form-control"  name="telephone" value="{{$Fournisseur_info->telephone}}">
										<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
										<div class="form-group">
											<label >email</label>
				<input type="email" class="form-control" id=""  name="email" value="{{$Fournisseur_info->email}}">
					<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
										<div class="form-group">
											<label >Specialité</label>
		<input type="text" class="form-control" id="specialite"  name="specialite" value="{{$Fournisseur_info->specialite}}">
											<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
											

					</div>
					<div class="modal-footer">
						
						<button type="button" class="btn btn-default " data-dismiss="modal">Annuler</button>
						<button type="submit" class="btn btn-success">Modifier</button>
					</div>
				</form>
			</div>
		</div>
	</div>
					
							<!-- end of content  user -->

					</div>
				</div>
			</div>
			<!--model edit  user -->

@endsection