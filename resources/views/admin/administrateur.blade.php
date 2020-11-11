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
						<h2>Gestion <b>d'effectif</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter membre effectif</span></a>
										
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover" >
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Nom</th>

						<th>Role</th>
                        <th>E-mail </th>
                        <th>Téléphone</th>
                        <th>Adresse</th>

                        <th>Status</th>
                       
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                	 @foreach($all_user_info as $four)
                    <tr>
						<td>
                        <img class="card-img-top" src="{{Storage::url($four->image_user)}}">

                        </td>
                        <td>{{$four->nom_complet}}</td>
                        <td>{{$four->type_role}}</td>
                        <td>{{$four->email}}</td>
                        <td>{{$four->tel}}</td>
                        <td>{{$four->code_postal}}</td>



					
                        <td>
                                    
					 @if($four->publication_status==1)
					   <span class="badge badge-success">Active</span>
					   @else
					     <span class="badge badge-danger">InActive</span>
					   @endif   
                                        </td>                 

                        <td>
                   <a href="{{URL::to('/edit_User/'.$four->id_users)}}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit" >&#xE254;</i></a>
 <a  class="delete" href="{{URL::to('/delet_User/'.$four->id_users)}}" id="delete">
						<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
									</a>

  @if($four->publication_status==1)

            
                  <a  class="update" href="{{URL::to('/unactive_User/'.$four->id_users)}}" >
                   <i class="material-icons">
                          thumb_up_alt
                    </i></a>
                                 @else
           
     
            <a  class="delete" href="{{URL::to('/active_User/'.$four->id_users)}}" >
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
        {{ $all_user_info->links()  }}
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
			<form method="post" action="{{ url('save_User') }}"	enctype="multipart/form-data">
				@csrf
			{{csrf_field()}}
			
					<div class="modal-header">						
						<h4 class="modal-title">Ajouter membre effectif</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
											<label >Nom</label>
<input type="text" class="form-control"  name="Nom" placeholder="Enter nom complet  user">
					<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
                        



	<div class="form-group">
		<label for="exampleFormControlSelect1">Types roles</label>
			<select class="form-control" id="exampleFormControlSelect1" name="NomRole">
									<option>Choisir roles</option>
													
	 <?php
         $all_Role=DB::table('tb1_roles')
                                     ->get();
               foreach($all_Role as $v_Role){?>
               <option value="{{$v_Role->id_role}}">{{$v_Role->type_role}}</option>	
					<?php } ?>			
					
												</select>
											</div>
											<div class="form-group">
							<label>Image</label>
							<br>
          <input type="file" name="file" id="image" class="form-control"/>
						</div>	
                        

	               <div class="form-group">
						<label >Email</label>
				      <input type="email" id="quantite" class="form-control"  placeholder="Enter Email"  name="Email">
						<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
			         </div>
			          <div class="form-group">
						<label >Mot de passe</label>
				      <input type="password" id="quantite" class="form-control"  placeholder="Enter Password"  name="Password">
						<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
			         </div>

					<div class="form-group">
					    <label >Téléphone</label>
						<input type="number" id="quantite" class="form-control"  placeholder="Enter Phone Number"  name="numero">
						<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
					</div>
                   <div class="form-group">
					    <label >Code Postal</label>
						<input type="text" id="quantite" class="form-control"  placeholder="Enter Postal Code"  name="Adresse">
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