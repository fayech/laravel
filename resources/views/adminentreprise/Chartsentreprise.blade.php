@extends('layoutentreprise')
@section('dynamic')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<div class="container">

        <div class="panel panel-primary">
 
         <div class="panel-heading">Reporting relatif à l'entreprise</div>
 <div class="row">
         
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                 <?php
 
   $all_produits=DB::table('tb1_entreprises')
           ->join('tb1_employes','tb1_employes.id_entreprises','=','tb1_entreprises.id_entreprise')
            ->join('tb1_commandes','tb1_commandes.id_employe','=','tb1_employes.id_employe')
 ->select(DB::raw('count(id_commande) as nbC'))
                             
                             ->where('id_entreprise',Session::get('id_entreprises'))
                                ->get();
      foreach($all_produits as $v_produit){?>
                <h3>{{$v_produit->nbC}}<sup style="font-size: 20px">%</sup></h3>
<?php } ?>
                      
                <p>Nombre de commandes</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                  <?php
 
   $all_produits=DB::table('tb1_entreprises')
           ->join('tb1_employes','tb1_employes.id_entreprises','=','tb1_entreprises.id_entreprise')
           
 ->select(DB::raw('count(id_employe) as nbC'))
       ->where('id_entreprise',Session::get('id_entreprises'))
                                ->get();
      foreach($all_produits as $v_produit){?>
                <h3>{{$v_produit->nbC}}</h3>
<?php }?>
                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                  <?php
 
   $all_produits=DB::table('tb1_entreprises')
           ->join('tb1_employes','tb1_employes.id_entreprises','=','tb1_entreprises.id_entreprise')
             ->join('tb1_commandes','tb1_commandes.id_employe','=','tb1_employes.id_employe')
 ->select(DB::raw('sum(commande_total) as CA'))
        ->where('id_entreprise',Session::get('id_entreprises'))
                                ->get();
      foreach($all_produits as $v_produit){?>
                <h3>{{$v_produit->CA}}</h3>
<?php }?>
                <p>CA</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
          <div class="panel-body">    
            <div class="row">
            <div class="col-md-6"> 
               <canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
        labels: [   <?php
       
        $id_entreprises=Session::get('id_entreprises');
        $all_entreprisescmd=DB::table('tb1_commandes')
       ->join('tb1_employes','tb1_employes.id_employe','=','tb1_commandes.id_employe')
       ->select('sexe')
       ->where('id_entreprises',$id_entreprises)
                                     ->groupby('sexe')
                                     
                                     ->get();
                                     
               foreach($all_entreprisescmd as $v_produit){?>
         '<?php echo $v_produit->sexe ?>',<?php } ?>  ],

        datasets: [{
            label: "My First dataset",
             backgroundColor:  ["#0074D9", "#FF4136", "#2ECC40", "#FF851B", "#7FDBFF", "#B10DC9", "#FFDC00", "#001f3f", "#39CCCC", "#01FF70", "#85144b", "#F012BE", "#3D9970", "#111111", "#AAAAAA"],
            borderColor: 'rgb(255, 99, 132)',
            data:[   <?php
                $id_entreprises=Session::get('id_entreprises');
        $all_entreprisescmd=DB::table('tb1_commandes')
       ->join('tb1_employes','tb1_employes.id_employe','=','tb1_commandes.id_employe')
       ->select(DB::raw('count(tb1_employes.sexe) as nbsex'))
                                     ->groupby('sexe')
                                     ->where('id_entreprises',$id_entreprises)
                                     ->get();
                                    
                                  
               foreach($all_entreprisescmd as $v_produit){?>
         '<?php echo $v_produit->nbsex ?>',<?php } ?>  ],

        }]
    },

    // Configuration options go here
    options: {}
});
</script>
            </div>
 
     
            
            <div class="col-md-6"> 
               <canvas id="x" width="400" height="400"></canvas>
<script>
var ctx1 = document.getElementById('x').getContext('2d');
var chart1 = new Chart(ctx1, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: [   <?php
         $all_produits=DB::table('tb1_produits')
                                    
                                     ->get();
               foreach($all_produits as $v_produit){?>
         '<?php echo $v_produit->produit_nom ?>',<?php } ?>  ],

        datasets: [{
            label: "Statistiques montrant les produits les plus commandés",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data:[   <?php
         $all_produits=DB::table('tb1_commandes_details')
                                ->select('id_produit')
                                ->groupby('id_produit')
                                ->get();
               foreach($all_produits as $v_produit){?>
         '<?php echo $v_produit->id_produit ?>',<?php } ?>  ],

        }]
    },

    // Configuration options go here
    options: {}
});
</script>
            </div>
            
 
            <div class="col-md-6"> 
               <canvas id="produits" width="400" height="400"></canvas>
<script>
var produits = document.getElementById('produits').getContext('2d');
var chart2 = new Chart(produits, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
        labels: [   <?php
         $all_produits=DB::table('tb1_commandes_details')
         ->select('product_name')
                                     ->groupby('product_name')
                                     ->get();
               foreach($all_produits as $v_produit){?>
         '<?php echo $v_produit->product_name ?>',<?php } ?>  ],

        datasets: [{
            label: "les produits les plus commandés",
            backgroundColor: ["#0074D9", "#FF4136", "#2ECC40", "#FF851B", "#7FDBFF", "#B10DC9", "#FFDC00", "#001f3f", "#39CCCC", "#01FF70", "#85144b", "#F012BE", "#3D9970", "#111111", "#AAAAAA"],
            borderColor: 'rgb(255, 99, 132)',
            data:[   <?php
         $all_produits=DB::table('tb1_commandes_details')
                        ->select('id_produit',DB::raw('count(id_produit) as category_count'))
                                ->groupby('id_produit')
                                ->get();
               foreach($all_produits as $v_produit){?>
         '<?php echo $v_produit->category_count ?>',<?php } ?>  ],

        }]
    },

    // Configuration options go here
    options: {}
});
</script>
            </div>
    
                    
       <div class="col-md-6"> 
               <canvas id="time" width="400" height="400"></canvas>
<script>
var ctxT = document.getElementById('time').getContext('2d');
var chartT = new Chart(ctxT, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ["de minuit jusqu'à 8h", "de 8h jusqu'à 16h", "de 16h jusqu'à minuit "],

        datasets: [{
            label: "Statistiques montrant les commandes passées selon le cadre temporel",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data:[   <?php
         $all_produits=DB::table('tb1_commandes_details')
 ->select(DB::raw('count(created_at) as heure'),DB::raw('hour(created_at)DIV 8 as periode'))
                                ->groupby('periode')
                                ->get();
               foreach($all_produits as $v_produit){?>
         '<?php echo $v_produit->heure ?>',<?php } ?>  ],

        }]
    },

    // Configuration options go here
    options: {}
});
</script>
            </div>
           
           
 
 
         </div>
 
        </div>
 
    </div>
 

 
   
   
 
    
 
   







@endsection