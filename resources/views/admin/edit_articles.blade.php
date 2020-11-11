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
<form method="post" action="{{ url('Update_articles',$articles_info->id_article)}}" enctype="multipart/form-data">
				@csrf
			
			{{csrf_field()}}
					<div class="modal-header">						
						<h4 class="modal-title">Edit Produit</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						
						
<div class="form-group">
											<label >postedby</label>
<input type="text" class="form-control"  name="postedby" value="{{$articles_info->postedby}}" placeholder="Entrez postedby">
				<small  class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
										<div class="form-group">
											<label>Titre</label>
<input type="text" value="{{$articles_info->titre}}"  class="form-control"  placeholder="Entrez tye role"  name="Titre">
					<small  class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
									
											<div class="form-group">
							<label>Article_image</label>
							<br>
          <input type="file" name="file" id="image" class="form-control" value="{{$articles_info->imagearticle}}"/>
						</div>	
                 
										
											<div class="form-group">
								<label for="comment">Description</label>
		<textarea class="form-control"  name="description" rows="5">
{{$articles_info->description}}
												</textarea>
											</div>
										

						
						
										
										

					</div>
					<div class="modal-footer">
						
						<button type="button" class="btn btn-default " data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-success">Edit</button>
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