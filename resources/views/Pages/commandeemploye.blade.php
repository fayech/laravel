@extends('info_employe')
@section('info_employe')


<div class="row mt90 mb70">
			<h3 class="text-center caps pb20 titlefont">Dernières commandes</h3>
			<p class="text-center size30 mb10 pb20">Ci-dessous l'historique de vos dernières commandes passées:</p>
			<table class="table table-bordered">
	   
	      <thead>
	        <tr>
	          <th>Num Commande </th>
	          <th>Nom</th>
	          <th>Commande Total</th>
	          <th>Action</th>
	        </tr>
	      </thead>
	      <tbody>

	        <tr>
	        	 @foreach($all_commande_info as $v_order)
	          <th >{{$v_order->id_commande }}</th>
	           <th >{{$v_order->nom_prenom }}</th>
	          <td>{{$v_order->commande_total }}</td>
	         
	          <td> <a href="{{URL::to('/view_commandeE/'.$v_order->id_commande)}}" class="edit" ><span class="ti-marker-alt"></span></a></td>
	        </tr>
	       
	        @endforeach
	      </tbody>
	</table>
		</div>
@endsection