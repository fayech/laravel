@extends('admin_layout')
@section('admin_content')
<style>
#myMap {
   height: 700px;
   width: 100%;
}
</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBE7kfwSaqVFjr57AHNk2N9057p-d8PNUU&callback=myMap">
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script>
<script  > 
var map;
var marker;
var myLatlng = new google.maps.LatLng(36.7730426,10.2348214);

var geocoder = new google.maps.Geocoder();
var infowindow = new google.maps.InfoWindow();
function initialize(){
var mapOptions = {
zoom: 12,
center: myLatlng,


};

map = new google.maps.Map(document.getElementById("myMap"), mapOptions);
												
	 <?php
         $all_entreprises=DB::table('tb1_entreprises')
            ->join('tb1_employes','tb1_employes.id_entreprises','=','tb1_entreprises.id_entreprise')
            ->join('tb1_commandes','tb1_commandes.id_employe','=','tb1_employes.id_employe')
            ->select('tb1_entreprises.*',DB::raw('count(tb1_commandes.id_commande) as nombreC'))
            ->where('tb1_commandes.commande_status','en attente')
             ->groupby('id_entreprises')
                                     ->get();
               foreach($all_entreprises as $v){?> 
addMarker({coords:{ lat:<?php echo $v->lat_loc; ?>,lng:<?php echo  $v->long_loc; ?>},content:'<div class="modal-content"> <form method="post" enctype="multipart/form-data"> <div class="modal-body"><div class="form-group"><label >nom_entreprise</label><input type="text" class="form-control" id="description"  placeholder="Enter description of product "  value="<?php echo  $v->nom_entreprise; ?>" disabled></div><div class="form-group"><label >adresse</label><input type="text" class="form-control" id="codepost"  placeholder="Enter description of product "  value="<?php echo  $v->codepost; ?>" disabled></div><div class="form-group"><label >nombre total commande</label><input type="text" class="form-control" id="codepost"   value="<?php echo  $v->nombreC; ?>" disabled></div></div> </form></div>' }); 	

<?php } ?>	
function addMarker(props){
var marker = new google.maps.Marker({
position: props.coords,
map: map,

}); 
if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });


	marker.addListener('click',function(){
	infoWindow.open(map,marker);
		
	});

}

}

}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<!-- end table -->
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Localisation<b> commmandes à livrer</b></h2>
					</div>
					
                </div>

            </div>
         
        </div>
               
 <div id="myMap"></div>
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

@endsection
