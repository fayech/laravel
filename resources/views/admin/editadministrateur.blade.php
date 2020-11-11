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
<form method="post" action="{{ url('Update_User',$user_info->id_users)}}"enctype="multipart/form-data">
				@csrf
			
			{{csrf_field()}}
					<div class="modal-header">						
						<h4 class="modal-title">Edit Users</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						
						
               <div class="form-group">
											<label >Nom complet</label>
<input type="text" class="form-control"  name="Nom" placeholder="Enter nom complet  user" value="{{$user_info->nom_complet}}">
					<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
                        <div class="form-group">
		<label for="exampleFormControlSelect1">type role</label>
			<select class="form-control" id="exampleFormControlSelect1" name="NomRole">
									
													
	 <?php
         $all_Role=DB::table('tb1_roles')
                                     ->get();
               foreach($all_Role as $v_Role){?>
            <option value="{{$v_Role->id_role}}">{{$v_Role->type_role}}</option>	
					<?php } ?>			
					
												</select>
											</div>
										
                        


                         <div class="form-group">
						<label >Email</label>
	 <input type="email" id="quantite" class="form-control"  placeholder="Enter Email"  name="Email" value="{{$user_info->email}}">
					 	<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
			         </div>
			          <div class="form-group">
						<label >Mot de passe</label>
				      <input type="password"  class="form-control"  placeholder="Enter Password"  name="Password"  value="{{$user_info->password}}">
					 	<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
			         </div>

					<div class="form-group">
					    <label >Téléphone</label>
						<input type="number" id="quantite" class="form-control"  placeholder="Enter Qunatity"  name="numero"  value="{{$user_info->tel}}">
					 	<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
					</div>
                   <div class="form-group">
					    <label >Adresse</label>
						<input type="text" id="quantite" class="form-control"  placeholder="Enter Qunatity"  name="Adresse" value="{{$user_info->code_postal}}">
					 	<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
					</div>
                        
                        <div class="form-check">
							<label class="form-check-label">
			<input class="form-check-input" type="checkbox" value="{{$user_info->publication_status}}" name="publication" >
				<span class="form-check-sign">Status</span>
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