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
			<form method="post" action="{{ url('Update_Role',$Role_info->id_role) }}">

			{{csrf_field()}}
					<div class="modal-header">						
						<h4 class="modal-title">Modifier role</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
											<label >Nom</label>
		<input type="text" class="form-control" id="nom" name="Nom" value="{{$Role_info->nom}}">
										<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
		
				                         <div class="form-group">
											<label >Type role</label>
		<input type="text" id="quantite" class="form-control"  placeholder="Enter Qunatity"  name="Type"  value="{{$Role_info->type_role}}">
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