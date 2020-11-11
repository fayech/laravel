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
			<form method="post" action="{{ url('Update_Categorie',$Categorie_info->id_categorie) }}"
enctype="multipart/form-data">
				@csrf
			{{csrf_field()}}
					<div class="modal-header">						
						<h4 class="modal-title">Modifier categorie</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
											<label >Nom</label>
				<input type="text" class="form-control" id="nom" name="Nom" value="{{$Categorie_info->name_categorie}}" >
											<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
		   <div class="form-group">
		<label for="exampleFormControlSelect1">Nom fournisseur</label>
			<select class="form-control" id="exampleFormControlSelect1" name="fournisser_id">
									<option>Choisir fournisseur</option>
													
	 <?php
         $all_fournisseur=DB::table('tb1_fournisseurs')
                                     ->where('statut_publication',1)
                                     ->get();
               foreach($all_fournisseur as $v_fournisseur){?>
               <option value="{{$v_fournisseur->id}}">{{$v_fournisseur->nom}}</option>	
					<?php } ?>			 
												</select>
											</div>
											<div class="form-group">
							<label>Image</label>
							<br>
          <input type="file" name="file" id="image" class="form-control" value="{{$Categorie_info->categorie_image}}" />
						</div>	
						<div class="form-group">
								<label for="comment">Description</label>
					<textarea class="form-control" id="comment" name="categorie_description" rows="5"> {{$Categorie_info->categorie_description}}

												</textarea>
											</div>
										<div class="form-check">
								<label class="form-check-label">
<input class="form-check-input" type="checkbox" value="1" name="publication" >
				<span class="form-check-sign">status</span>
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