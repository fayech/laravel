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
						<h2>Gestion <b>roles d'effectif</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter role d'effectif</span></a>
												
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover" >
                <thead>
                    <tr>
                        <th>Role</th>
                        <th>Type role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                	 @foreach($all_Role_info as $four)
                    <tr>
						
                        <td>{{$four->nom }}</td>
                        <td>{{$four->type_role }}</td>
					
                                              

                        <td>
                   <a href="{{URL::to('/edit_Role/'.$four->id_role)}}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit" >&#xE254;</i></a>
 <a  class="delete" href="{{URL::to('/delet_Role/'.$four->id_role)}}" id="delete">
						<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
									</a>						

                 
                
                        </td>
                    </tr>
                   			
					
                </tbody>
               @endforeach

               
            </table>
			
        </div>
                {{ $all_Role_info->links()  }}

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
			<form method="post" action="{{ url('save_Role') }}"	enctype="multipart/form-data">
				@csrf
			{{csrf_field()}}
			
					<div class="modal-header">						
						<h4 class="modal-title">Ajouter role</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
											<label >Nom role</label>
<input type="text" class="form-control"  name="Nom" placeholder="Entrez nom role">
				<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
                           <div class="form-group">
											<label >Type role</label>
		<input type="text"  class="form-control"  placeholder="Entrez tye role"  name="Type">
					<small  class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
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