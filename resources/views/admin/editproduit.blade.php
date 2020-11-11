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
<form method="post" action="{{ url('Update_Produit',$Produit_info->id_produit)}}" enctype="multipart/form-data">
				@csrf
			
			{{csrf_field()}}
					<div class="modal-header">						
						<h4 class="modal-title">Edit Produit</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						
						
<div class="form-group">
											<label >NomProduit</label>
											<input type="text" class="form-control" id="nom" name="NomProduit" placeholder="Enter Product name"value="{{$Produit_info->produit_nom}}" >
											<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
										</div> 
										<div class="form-group">
		<label for="exampleFormControlSelect1">Nom Catégorie</label>
			<select class="form-control" id="exampleFormControlSelect1" name="NomCategorie">
									<option>select Catégorie</option>
													
	 <?php
         $all_categorie=DB::table('tb1_categories')
                                     ->where('publication_status',1)
                                     ->get();
               foreach($all_categorie as $v_categorie){?>
               <option value="{{$v_categorie->id_categorie}}">{{$v_categorie->name_categorie}}</option>	
					<?php } ?>			 
												</select>
											</div>
											<div class="form-group">
							<label>produit_image</label>
							<br>
          <input type="file" name="file" id="image" class="form-control" value="{{$Produit_info->produit_image}}"/>
						</div>	
                       <div class="form-group">
											<label >Quantité</label>
											<input type="number" id="quantite" class="form-control"  placeholder="Enter Qunatity"  name="Quantite" value="{{$Produit_info->produit_qte}}">
											<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
										</div>
										<div class="form-group">
											<label >Description</label>
											<input type="text" class="form-control" id="description"  placeholder="Enter description of product " name="Description" value="{{$Produit_info->produit_description}}">
											<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
										</div>
											<div class="form-group">
											<label >Prix</label>
											<input type="number" class="form-control" id="prix" placeholder="Enter Price" name="Prix" value="{{$Produit_info->produit_prix}}">
											<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
										</div>
											<div class="form-check">
												<label class="form-check-label">
				<input class="form-check-input" type="checkbox" value="1" name="publication">
				<span class="form-check-sign">statut de publication</span>
												</label>
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