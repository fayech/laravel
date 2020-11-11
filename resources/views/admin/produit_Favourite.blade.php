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
						<h2>Manage <b>Produits Favourite</b></h2>
					</div>
					<div class="col-sm-6">
							
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover" >
                <thead>
                    <tr>
					<th>ImageProduit</th>
                        <th>NomProduit</th>
                       
						<th>NomCatégorie</th>
                       

                        
                        
                    </tr>
                </thead>
                <tbody>
                	 @foreach($all_produit_info as $four) 
                    <tr>
						
                        <td>
                        	<img class="card-img-top" src="{{Storage::url($four->produit_image)}}">

</td>
                        <td>{{$four->produit_nom }}</td>
						<td>{{$four->name_categorie }}</td>
                       
                      

      
                    </tr>
                   			
					
                </tbody>
              @endforeach

                   </table>
			
        </div>
        {{ $all_produit_info->links()  }}
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
@endsection