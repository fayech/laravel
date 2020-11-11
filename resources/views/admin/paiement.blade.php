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
						<h2>Gestion <b>paiement</b></h2>
					</div>
					
                </div>
            </div>
            <table class="table table-striped table-hover" >
                <thead>
                    <tr>
					          <th>Id Commande</th>
							  <th>Total commande</th>
							  <th>Status commande</th>
							  <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($all_paiement_info as $v_order)

                    <tr>
						
                      
                       		<tr>
				<td>{{ $v_order->id_commande }}</td>
				<td>{{ $v_order->commande_total }}</td>
        <td>
           @if($v_order->commande_status=="en attente")
      
              <span class="badge badge-danger">{{ $v_order->commande_status }}  </span>  
                        
 @else
               <span class="badge badge-success">{{ $v_order->commande_status }} </span>
             @endif   
              </td>
                        <td>

	   
    <a href="{{URL::to('/listE_commande/'.$v_order->id_employe)}}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Voir détails paiement" >&#xE254;</i></a>
	                        						
  
                 
                
                        </td>
                    </tr>
                   			
					
                </tbody>
              @endforeach

                   </table>
			
        </div>
      	
        {{ $all_paiement_info->links()  }}

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