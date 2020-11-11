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
						<h2>Gestion <b>commandes</b></h2>
					</div>
					
                </div>
            </div>
            <table class="table table-striped table-hover" >
                <thead>
                    <tr>
					          <th>id_contact</th>
							  <th>Nom client</th>
							  <th>sujet</th>
							  <th>message</th>

							  <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($all_Contact_info as $v_Contact)

                 
						
                      
                       		<tr>
				<td>{{ $v_Contact->id_contact }}</td>
					<td>{{ $v_Contact->nom_prenom }}</td>
				<td>{{ $v_Contact->sujet }}</td>
			
				<td>{{ $v_Contact->message }}</td>
        
      

                        <td>

	      
   <a  class="delete" href="{{URL::to('/delet_Contact/'.$v_Contact->id_contact)}}" id="delete">
						<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
									</a>
	                        	
            
                

            
                 
                
                        </td>
                    </tr>
                   			
					
                </tbody>
              @endforeach

                   </table>
			
        </div>
      	
        {{ $all_Contact_info->links()  }}

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