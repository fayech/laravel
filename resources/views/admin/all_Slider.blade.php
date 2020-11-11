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
						<h2><b>Sliders</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter Slider</span></a>
												
					</div>
                </div>
            </div>
       
            <table class="table table-striped table-hover" >
                <thead>
                    <tr>
					  <th>slider_ID</th>
								  <th>slider_image</th>
								  <th>Status</th>
								  <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                	 @foreach($all_Slider_info as $Slider )
                  <td class="center">{{$Slider->slider_id}}</td>
              <td >
   
         <img class="card-img-top" src="{{Storage::url($Slider->slider_image)}}">
         </td>
 	   <td class="center">
					   	@if($Slider->publication_status==1)
					  <span class="badge badge-success">Active</span>
					   @else
					    <span class="badge badge-danger">InActive</span>
					   @endif
								</td>
								<td class="center">
					@if($Slider->publication_status==1)
       
                      <a  class="update" href="{{URL::to('/unactive-Slider/'.$Slider->slider_id)}}" >
                   <i class="material-icons">
                          thumb_up_alt
                    </i></a>
								
                 @else
  <a  class="delete" href="{{URL::to('/active-Slider/'.$Slider->slider_id)}}" >
                                <i class="material-icons">
                                      thumb_down_alt
                      </i>  </a>	
                 @endif
			   
			 
<a  class="delete" href="{{URL::to('/delet-Slider/'.$Slider->slider_id)}}" id="delete">
						<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
									</a>
								</td>
							</tr>
						</tbody>
						@endforeach
                   </table>
			
        </div>
        {{ $all_Slider_info->links()  }}
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
			<form class="form-horizontal" action="{{ url('save-Slider') }}" method="post"  enctype="multipart/form-data">
			{{csrf_field()}}

			
					<div class="modal-header">						
						<h4 class="modal-title">Ajouter produit</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
			 <label class="control-label" for="fileInput">Image </label>

			    <input type="file" name="file" id="image" class="form-control"/>
		<small id="emailHelp" class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div> 









					
							
					
					
		
					<div class="form-check">
								<label class="form-check-label">
<input class="form-check-input" type="checkbox" value="1" name="publication_status">
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