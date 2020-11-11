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
					          <th>Id Commande</th>
							  <th>Nom client</th>
							  <th>Prix total</th>
							  <th>Status</th>
							  <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($all_commande_info as $v_order)

                    <tr>
						
                      
                       		<tr>
				<td>{{ $v_order->id_commande }}</td>
				<td>{{ $v_order->nom_prenom }}</td>
				<td>{{$v_order->commande_total}}</td>
        
              <td>
           @if($v_order->commande_status=="en attente")
      
              <span class="badge badge-danger">{{ $v_order->commande_status }}  </span>  
                        
 @else
               <span class="badge badge-success">{{ $v_order->commande_status }} </span>
             @endif   
              </td>

                        <td>

	       <a href="{{URL::to('/view_commande/'.$v_order->id_commande)}}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Voir détails de commande" >&#xE254;</i></a>
   <a  class="delete" href="{{URL::to('/delet_commande/'.$v_order->id_commande)}}" id="delete">
						<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
									</a>
	                        	
            
                

            
                   @if($v_order->commande_status=="en attente")

           <a  class="delete" href="{{URL::to('/unactive_Commande/'.$v_order->id_commande)}}" >
                                <i class="material-icons">
                                     thumb_down_alt
                      </i>  </a>    
                                 @else
             


                          
         <a  class="update" href="{{URL::to('/active_Commande/'.$v_order->id_commande)}}" >
                   <i class="material-icons">
                       thumb_up_alt
                    </i></a>
    @endif							
  
                 
                
                        </td>
                    </tr>
                   			
					
                </tbody>
              @endforeach

                   </table>
			
        </div>
      	
        {{ $all_commande_info->links()  }}

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