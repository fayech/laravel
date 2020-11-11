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
<form method="post" action="{{ url('Update_promotion',$Produit_info->id_produit)}}"enctype="multipart/form-data">
				@csrf
			{{csrf_field()}}
					<div class="modal-header">						
						<h4 class="modal-title">Modifier produit</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						
						
<div class="form-group">
						<label >Nom produit</label>
	<input type="text" class="form-control" id="nom" name="NomProduit" placeholder="Enter Product name" value="{{$Produit_info->produit_nom}}" disabled="" >
		<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div> 
										
							
                
				
						<div class="form-group">
<label >Remise(%)</label>
<input type="number" class="form-control" id="prix" placeholder="Enter remise" name="remise" value="{{$Produit_info->remise}}">
<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
								<div class="form-check">
				<label class="form-check-label">
				<input class="form-check-input" type="checkbox" value="1" name="promotion">
	<span class="form-check-sign">Status</span>
												</label>
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