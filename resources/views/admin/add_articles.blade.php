@extends('admin_layout')

@section('admin_content')

			
					
			
			<!--model edit  user -->
<!-- addaddEmployeeModal Modal HTML -->
	
<!-- end-of model edit  user -->
<!-- addaddEmployeeModal Modal HTML -->
		<div class="">

		<div class="modal-content">
			<form method="post" action="{{ url('save-articles') }}"	enctype="multipart/form-data">
				@csrf
			{{csrf_field()}}
			
					<div class="modal-header">						
						<h4 class="modal-title">Ajouter role</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
											<label >postedby</label>
<input type="text" class="form-control"  name="postedby" placeholder="Entrez postedby">
				<small  class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
                           <div class="form-group">
											<label>Titre</label>
<input type="text"  class="form-control"  placeholder="Entrez tye role"  name="Titre">
					<small  class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
										<div class="form-group">
								<label for="comment">Description</label>
		<textarea class="form-control"  name="description" rows="5">

												</textarea>
											</div>
											<div class="form-group">
							<label>Image</label>
							<br>
          <input type="file" name="file" id="image" class="form-control"/>
						</div>	
					</div>
					<div class="modal-footer">
				        <button type="button" class="btn btn-default " data-dismiss="modal">Annuler</button>
						<button type="submit" class="btn btn-success">Ajouter</button>
					</div>
				</form>
			
	</div>
</div>
<!-- end-of model edit  user -->
<!--  model add  user -->
	
<!--  end-of model add  user -->
<!-- end of table -->

 
@endsection