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
						<h2>Gestion <b>Articles</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter Articles</span></a>
											
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover" >
                <thead>
                    <tr>
					
                   <th>Image</th>
                        <th>postedby</th>
                       
						<th>Titre</th>
                        <th>Description</th>
                       <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                	 @foreach($all_articles_info as $Articles) 
                    <tr>
						 <td> <img class="card-img-top" src="{{Storage::url($Articles->imagearticle)}}"></td>
                         <td>{{$Articles->postedby }}</td>
						<td>{{$Articles->titre }}</td>
                        <td>{{$Articles->description }}</td>
                       
                       
                                            

                        <td>
                   <a href="{{URL::to('/edit_articles/'.$Articles->id_article)}}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit" >&#xE254;</i></a>
   <a  class="delete" href="{{URL::to('/delet_articles/'.$Articles->id_article)}}" id="delete">
						<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
									</a>
	                        	
            
            
                
                        </td>
                    </tr>
                   			
					
                </tbody>
              
 @endforeach
            </table>
			
        </div>
        {{ $all_articles_info->links()  }}
    </div>
</div>
</div>
</div>
			
					
			
			<!--model edit  user -->
<!-- addaddEmployeeModal Modal HTML -->
	
<!-- end-of model edit  user -->
<!-- addaddEmployeeModal Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
<form method="post" action="{{ url('save-articles') }}"	enctype="multipart/form-data">
				@csrf
			{{csrf_field()}}
			
					<div class="modal-header">						
						<h4 class="modal-title">Ajouter articles</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
											<label >postedby</label>
<input type="text" class="form-control"  name="postedby" placeholder="Entrez posteur">
				<small  class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
                           <div class="form-group">
											<label>Titre</label>
<input type="text"  class="form-control"  placeholder="Entrez titre article"  name="Titre">
					<small  class="form-text text-muted">Vous devrez obligatoire remplir ce chammp.</small>
										</div>
										<div class="form-group">
								<label for="comment">Description</label>
		<textarea class="form-control"  name="description" rows="5">

												</textarea>
											</div>
											<div class="form-group">
							<label>Image</label>
							<br>
          <input type="file" name="file" id="image" class="form-control"/>
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

 
@endsection