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
						<h2>Gestion <b>Status d'effectif</b></h2>
					</div>
					<div class="col-sm-6">
												
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover" >
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Nom</th>

						<th>Type role</th>
                        <th>E-mail </th>
                        <th>Téléphone</th>
                      

                        <th>Status</th>
                        <th>Date de connexion</th>
                       
                    </tr>
                </thead>
                <tbody>
                	 @foreach($all_user_info as $four)
                    <tr>
						<td>
                        <img class="card-img-top user" src="{{Storage::url($four->image_user)}}">

                        </td>
                        <td>{{$four->nom_complet}}</td>
                        <td>{{$four->type_role}}</td>
                        <td>{{$four->email}}</td>
                        <td>{{$four->tel}}</td>



					
                        <td>
                                    
					 @if($four->Connexion==1)
					   <span class="badge badge-success">Online</span>
					   @else
					     <span class="badge badge-danger">Offline</span>
					   @endif   
                                        </td> 

 <td>{{$four->updated_at}}</td>                
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

<!-- end-of model edit  user -->
<!--  model add  user -->

<!--  end-of model add  user -->
<!-- end of table -->

  
		<!-- end of Delete Modal HTML -->
@endsection