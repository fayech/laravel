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
						<h2>Gestion <b>entreprises</b></h2>
					</div>
					
                </div>
            </div>
            <table class="table table-striped table-hover" >
                <thead>
                    <tr>
                       <th> image_entreprise </th>
					          <th>id_entreprise</th>
							  <th>nom_entreprise</th>
							  <th>Codepost</th>
							  <th>email</th>
              
							  <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($all_entreprise_info as $v_order)

                  
						
                      
                       		<tr>
                      <td>
            <img class="card-img-top" src="{{Storage::url($v_order->image_entreprise)}}">

</td>
				<td>{{ $v_order->id_entreprise }}</td>
				<td>{{ $v_order->nom_entreprise }}</td>
				<td>{{$v_order->codepost}}</td>
       <td>{{$v_order->email}}</td>
      

                        <td>

	       <a href="{{URL::to('/list_employe/'.$v_order->id_entreprise)}}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit" >&#xE254;</i></a>
    <a  class="delete" href="{{URL::to('/delet_entreprise/'.$v_order->id_entreprise)}}" id="delete">
            <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                  </a>
	                        	
            
                

 
                 
                
                        </td>
                    </tr>
                   			
					
                </tbody>
              @endforeach

                   </table>
			
        </div>
      	
        {{ $all_entreprise_info->links()  }}

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

<!--  end-of model add  user -->
<!-- end of table -->

  <!-- Delete Modal HTML -->
	
		<!-- end of Delete Modal HTML -->
@endsection