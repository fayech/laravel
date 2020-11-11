@extends('admin_layout')
@extends('superadmin')

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
						<h2>Gestion <b>fournisseurs</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter fournisseur</span></a>
												
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover" >
                <thead>
                    <tr>
					
                        <th>Nom fourrnisseur</th>
                        <th>Ville</th>
						<th>Télépphone</th>
                        <th>E-mail</th>
                        <th>Specialité</th>
                        <th>Status</th>

                        
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                	 @foreach($all_Fournisseur_info as $four)
                    <tr>
						
                        <td>{{$four->nom }}</td>
                        <td>{{$four->ville }}</td>
						<td>{{$four->telephone }}</td>
                        <td>{{$four->email }}</td>
                        <td>{{$four->specialite }}</td>

                                                <td>
                                     @if($four->statut_publication==1)
					   <span class="badge badge-success">Active</span>
					   @else
					     <span class="badge badge-danger">InActive</span>
					   @endif
                                        </td>

                        <td>
                    <a href="{{URL::to('/edit_Fournisseur/'.$four->id)}}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit" >&#xE254;</i></a>
  
            <a  class="delete" href="{{URL::to('/delet_Fournisseur/'.$four->id)}}" id="delete">
						<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
									</a>
	                        	 @if($four->statut_publication==1)

            
                  <a  class="update" href="{{URL::to('/unactive-Fournisseur/'.$four->id)}}" >
                   <i class="material-icons">
                          thumb_up_alt
                    </i></a>
                                 @else
           
     
            <a  class="delete" href="{{URL::to('/active-Fournisseur/'.$four->id)}}" >
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
        {{ $all_Fournisseur_info->links()  }}
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
			<form method="post" action="{{ url('save_Fournisseur') }}">
			{{csrf_field()}}
					<div class="modal-header">						
						<h4 class="modal-title">Ajouter fournisseur</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
											<label >Nom fournnisseur</label>
											<input type="text" class="form-control" id="nom" name="Nom" placeholder="Entrez nom fournisseur">
											<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
						


						<div class="form-group">
											<label >Ville</label>
											<input type="text" class="form-control" id="ville" placeholder="Entrez ville"  name="ville">
											<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
						<div class="form-group">
											<label >Téléphone</label>
											<input type="number" class="form-control" id="telephone" placeholder="Enter " name="telephone">
											<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
										<div class="form-group">
											<label >E-mail</label>
				<input type="email" class="form-control" id="telephone" placeholder="Enter Email" name="email">
					<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
										<div class="form-group">
											<label >Specialité</label>
											<input type="text" class="form-control" id="telephone" placeholder="Enter Email" name="specialite">
											<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
											<div class="form-check">
												<label class="form-check-label">
				<input class="form-check-input" type="checkbox" value="1" name="publication">
				<span class="form-check-sign">Status</span>
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

  <!-- Delete Modal HTML -->
	<div id="delet_Fournisseur" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
		<form method="" action="">
					{{csrf_field()}}
					<div class="modal-header">		
									
						<h4 class="modal-title">Supprimer fournnisseur</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Etes-vous sûr de vouloir supprimer?</p>
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