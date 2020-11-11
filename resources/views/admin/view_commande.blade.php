@extends('admin_layout')
@section('admin_content')
<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Affichage détails commande</h4>
						<div class="row">
							<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Commande livrée à:</div>
									</div>
									<div class="card-body">
										<div class="card-sub">									
											Ci-dessous la commande passée par le client :
										</div>
										<table class="table mt-3">
											<thead>
												<tr>
													
										<th scope="col">Nom Prénom </th>
									<th scope="col">Poste</th>
								<th scope="col">E-mail</th>
							<th scope="col">Sexe</th>
							<th scope="col">Téléphone</th>

												</tr>
											</thead>
											<tbody>
												<tr>
						@foreach($all_commande_info as $v_order)
									 @endforeach 
								<td>{{$v_order->nom_prenom}}</td>
									<td>{{$v_order->post}}</td>
									<td>{{$v_order->email}}</td>
								<td>{{$v_order->sexe}}</td>
									<td>{{$v_order->tel}}</td>

												</tr>
											
												
											</tbody>
										</table>
									</div>
								</div>
								
							</div>
						
<div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Commande</div>
									</div>
									<div class="card-body">
					<table class="table table-hover">
											<thead>
											<tr>
							<th scope="col">Numéro commmande</th>
						<th scope="col">Nom Prenom</th>
					<th scope="col">Status commande</th>
													
										</tr>
											</thead>
											<tbody>
												<tr>
				@foreach($all_commande_info as $v_order)
							@endforeach
				<td>{{$v_order->id_commande}}</td>
						<td>{{$v_order->nom_prenom}}</td>
									
				<td>{{$v_order->commande_status}}</td>
								</tr>
												
												
											</tbody>
										</table>
									</div>
								</div>
							
								
							</div>
						
							
								
							</div>
								<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Détails commande</div>
									</div>
									<div class="card-body">
										<div class="card-sub">									
											Ci-dessous,les détails des produits commandés :
										</div>
										<table class="table mt-2">
											<thead>
												<tr>
								<th scope="col">Numéro commande</th>
								<th >Nom produit</th>
									<th >Quantité</th>
								<th >Prix produit</th>
								
												</tr>
											</thead>
											<tbody>
				@foreach($all_commande_info as $v_order)	
												<tr>
								<td>{{$v_order->id_commande}}</td>
								<td>{{$v_order->product_name}}</td>
								
						<td>{{$v_order->product_sales_quantity}}</td>
						<td>{{$v_order->product_prix}}</td>
												</tr>
											
												@endforeach
											</tbody>
											  <tfoot>
                          	<tr>
                          	<td colspan="3">Total: </td>
                          	<td><strong>={{$v_order->commande_total}}  TND</strong></td>
                          	</tr>
                          </tfoot>
										</table>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				
			</div>
@endsection