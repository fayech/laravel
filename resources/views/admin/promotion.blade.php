@extends('admin_layout')


@section('admin_content')
<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<!-- end table -->
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Gestion <b>produits en promotion</b></h2>
					</div>
				
                </div>
            </div>
            <table class="table table-striped table-hover" >
                <thead>
                    <tr>
					<th>Image produit</th>
                        <th>Nom produit</th>
                       
						<th>Nom Catégorie</th>
                        <th>Quantité</th>
                        <th>Remise(%)</th>
                        <th>Promotion</th>
                        
                        

                        
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                	 @foreach($all_produit_info as $four) 
                    <tr>
						
                        <td>
                        	<img class="card-img-top" src="{{Storage::url($four->produit_image)}}">

</td>
                        <td>{{$four->produit_nom }}</td>
						<td>{{$four->name_categorie }}</td>
                        <td>{{$four->produit_qte }}</td>
                        <td>{{$four->remise }}%</td>
                       
                                                <td>
                                    
					 @if($four->promotion==1)
					   <span class="badge badge-success">avec promotion </span>
					   @else
					     <span class="badge badge-danger">sans promotion </span>
					   @endif   
                                        </td>

                        <td>
           <a href="{{URL::to('/edit_promotion/'.$four->id_produit)}}" class="edit" ><i class="material-icons" data-target="editproduitModal" title="Edit" >&#xE254;</i></a>
   <a  class="delete" href="{{URL::to('/delet_Produit/'.$four->id_produit)}}" id="delete">
						<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
									</a>
	                        	
            
                 @if($four->promotion==1)

            
                  <a  class="update" href="{{URL::to('/unactive_promotion/'.$four->id_produit)}}" >
                   <i class="material-icons">
                          thumb_up_alt
                    </i></a>
                                 @else
           
     
            <a  class="delete" href="{{URL::to('/active_promotion/'.$four->id_produit)}}" >
                                <i class="material-icons">
                                      thumb_down_alt
                      </i>  </a>		
    @endif							

                 
                
                        </td>
                    </tr>
                   			
					
                </tbody>
              @endforeach

                   </table>
			
        </div>
        {{ $all_produit_info->links()  }}
    </div>
						</div>
					</div>
				</div>
			</div>
							<!-- end of content  user -->

			</div>
					</div>
				</div>
			</div>
			<!--model edit  user -->
<!-- addaddEmployeeModal Modal HTML -->

<!-- end-of model edit  user -->
<!--  model add  user -->
<!-- addaddEmployeeModal Modal HTML -->
	<div id="editproduitModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
			<form method="post" action="{{ url('/save_produit') }}"	enctype="multipart/form-data">
				@csrf
			{{csrf_field()}}
			
					<div class="modal-header">						
						<h4 class="modal-title">Ajouter produit</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
											<label >NomProduit</label>
				<input type="text" class="form-control" id="nom" name="NomProduit" placeholder="Enter Product name">
						<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
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
          <input type="file" name="file" id="image" class="form-control"/>
						</div>	
						<div class="form-group">
		<label >Quantité</label>
		<input type="number" id="quantite" class="form-control"  placeholder="Enter Qunatity"  name="Quantite">
		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
										</div>
						<div class="form-group">
		<label >Description</label>
		<input type="text" class="form-control" id="description"  placeholder="Enter description of product " name="Description">
		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
										</div>
									
			<div class="form-group">
											<label >Prix</label>
		<input type="number" class="form-control" id="prix" placeholder="Enter Price" name="Prix">
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
						<button type="submit" class="btn btn-success">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- end-of model edit  user -->
<!--  model add  user -->

<!--  end-of model add  user -->
<!-- end of table -->
<!--  end-of model add  user -->
<!-- end of table -->

  <!-- Delete Modal HTML -->
	<div id="delet_Fournisseur" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
		<form method="" action="">
					{{csrf_field()}}
					<div class="modal-header">		
									
						<h4 class="modal-title">Delete Fournisseur</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						
						 <a class="btn btn-danger" href="">
						<i class="halflings-icon white trash"></i> 
									DELETS</a>
					</div>
				</form>
			</div>
		</div>
	</div>
		<!-- end of Delete Modal HTML -->
		
@endsection