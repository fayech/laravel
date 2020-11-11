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
						<h2>Gestion <b>categories</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter categories</span></a>
											
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover" >
                <thead>
                    <tr>
					
                    <th>Image</th>
                     <th>Nom</th>
						<th>Fournisseur</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                	 @foreach($all_categorie_info as $four)
                    <tr>
						 <td> 
<img class="card-img-top" src="{{Storage::url($four->categorie_image)}}">
</td>
                        <td>{{$four->name_categorie }}</td>
                        <td>{{$four->nom }}</td>
						
                        <td>{{$four->categorie_description}}</td>
                     
                                                <td>

					   @if($four->publication_status==1)
					   <span class="badge badge-success">Active</span>
					   @else
					     <span class="badge badge-danger">InActive</span>
					   @endif                                        
					</td>

                        <td>
                   <a href="{{URL::to('/edit_Categorie/'.$four->id_categorie)}}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit" >&#xE254;</i></a>
         
            <a  class="delete" href="{{URL::to('/delet_Categorie/'.$four->id_categorie)}}" id="delete">
						<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
									</a>
	

              
 @if($four->publication_status==1)

            
                  <a  class="update" href="{{URL::to('/unactive_Categorie/'.$four->id_categorie)}}" >
                   <i class="material-icons">
                          thumb_up_alt
                    </i></a>
                                 @else
           
     
            <a  class="delete" href="{{URL::to('/active_Categorie/'.$four->id_categorie)}}" >
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
        {{ $all_categorie_info->links()  }}
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
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
			<form action="{{ url('/save_categories') }}" method="post" 
			enctype="multipart/form-data">
				@csrf
			{{csrf_field()}}
					<div class="modal-header">						
						<h4 class="modal-title">Ajouter catégorie</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
											<label >Nom Categorie</label>
											<input type="text" class="form-control" id="nom" name="Nom" placeholder="Enter Nom Categorie">
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
          <input type="file" name="file" id="image" class="form-control"/>
						</div>	

						<div class="form-group">
								<label for="comment">Description</label>
					<textarea class="form-control" id="comment" name="categorie_description" rows="5">

												</textarea>
											</div>
									
										<div class="form-check">
								<label class="form-check-label">
<input class="form-check-input" type="checkbox" value="1" name="publication">
				<span class="form-check-sign">Status</span>
												</label>
											</div>

					</div>
					<div class="modal-footer">
						
						<button type="button" class="btn btn-default " data-dismiss="modal">Annuler</button>
						<button type="submit" class="btn btn-success">Ajouter</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- end-of model edit  user -->
<!--  model add  user -->
<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post">
					{{ csrf_field()}}
					<div class="modal-header">						
						<h4 class="modal-title">Modifier fournisseur</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
<div class="form-group">
								<label for="email">Email Address</label>
	<input type="email" class="form-control" id="email" placeholder="Enter Email">
					<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
						<div class="form-group">
											<label for="email">Email Address</label>
											<input type="email" class="form-control" id="email" placeholder="Enter Email">
											<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
										</div>
										<div class="form-check">
									<label class="form-check-label">
				<input class="form-check-input" type="checkbox" value="">
								<span class="form-check-sign">
								Agree with terms and conditions</span>
												</label>
											</div>
						
											
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end of Edit Modal HTML -->
	
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