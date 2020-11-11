@extends('admin_layout')


@section('admin_content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

<div class="main-panel">
                <div class="content">
                    <div class="row">
                            <div class="col-md-3">
                 <div class="card card-stats card-warning">
                         <div class="card-body ">
                                        <div class="row">
                                            <div class="col-5">
                             <div class="icon-big text-center">
                      <i class="la la-pie-chart text-warning"></i>
                                                </div>
                                            </div>
                     <div class="col-7 d-flex align-items-center">
                                     <div class="numbers">
          <p class="card-category">Nombres entreprises conventionnées</p>
          <?php
         $all_produits=DB::table('tb1_entreprises')
 ->select(DB::raw('count(nom_entreprise) as nbe'))
                             
                                ->get();
      foreach($all_produits as $v_produit){?>
        <h4 class="card-title">{{$v_produit->nbe}}</h4>
    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                <div class="card card-stats card-success">
                                    <div class="card-body ">
                              <div class="row">
                                            <div class="col-5">
                          <div class="icon-big text-center">
                       <i class="la la-bar-chart"></i>
                                                </div>
                                            </div>
         <div class="col-7 d-flex align-items-center">
                                  <div class="numbers">
             <p class="card-category">Chiffre d'affaires</p>
                 <?php
         $all_produits=DB::table('tb1_commandes')
 ->select(DB::raw('sum(commande_total) as CA'))
                             
                                ->get();
             foreach($all_produits as $v_produit){?>
             <h4 class="card-title">{{$v_produit->CA}}</h4>
         <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                  <div class="card card-stats card-danger">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5">
                      <div class="icon-big text-center">
                   <i class="la la-newspaper-o"></i>
                                                </div>
                                            </div>
                        <div class="col-7 d-flex align-items-center">
                                        <div class="numbers">
                            <p class="card-category">Nombre de visiteurs </p>
                                    <?php
         $all_produits=DB::table('tb1_employes')
 ->select(DB::raw('count(id_employe) as nbV'))
                             
                                ->get();
                                 foreach($all_produits as $v_produit){?>
         
                                    <h4 class="card-title">{{$v_produit->nbV}}</h4>
                                <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                 <div class="card card-stats card-primary">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-5">
                         <div class="icon-big text-center">
                         <i class="la la-check-circle"></i>
                                                </div>
                                            </div>
              <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                <p class="card-category">Nombre de commandes</p>
                                 <?php
         $all_produits=DB::table('tb1_commandes')
 ->select(DB::raw('count(id_commande) as nbC'))
                             
                                ->get();
                                 foreach($all_produits as $v_produit){?>
                                    <h4 class="card-title">{{$v_produit->nbC}}</h4>
                                <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
     
                      
                   
                        </div>
                    <div class="container-fluid">
                        <!-- end table -->
    <div class="container">
        <div class="table-wrapper">
            <div>
                <div class="row">
<div class="container">

        <div class="panel panel-primary">
 
         <div class="panel-heading">Ci-dessous, on trouve plusieurs statistiques répartis sur plusieurs critères.</div>
 
          <div class="panel-body">    
            <div class="row">
            <div class="col-md-6"> 
               <canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: [   <?php
         $all_produits=DB::table('tb1_commandes_details')
                                    
                                   ->select(DB::raw('dayname(created_at) as date'))
                                     ->groupby('date')
                                    ->orderBy('date', 'asc')
                                     ->get();
               foreach($all_produits as $v_produit){?>
         '<?php echo $v_produit->date ?>',<?php } ?>  ],

        datasets: [{
            label: "Statistiques des commandes passées  selon la date associée",
            backgroundColor: '["#FF4136", "#2ECC40", "#FF851B", "#7FDBFF"]',
            borderColor: '["#0074D9", "#FF4136", "#2ECC40", "#FF851B", "#7FDBFF"]',
            data:[   <?php
         $all_produits=DB::table('tb1_commandes_details')
                                    
                                   ->select(DB::raw('dayname(created_at) as date'),DB::raw('count(id_commande) as nb'))
                                     ->groupby('date')
                                    ->orderBy('date', 'asc')
                                     ->get();
                                     
               foreach($all_produits as $v_produit){?>
         '<?php echo $v_produit->nb ?>',<?php } ?>  ],

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
               <canvas id="entreprises" width="400" height="400"></canvas>
<script>
var entreprises = document.getElementById('entreprises').getContext('2d');
var chart3= new Chart(entreprises, {
    // The type of chart we want to create
    type: 'doughnut',

    // The data for our dataset
    data: {
        labels: [   <?php
         $all_entreprises=DB::table('tb1_entreprises')
           ->join('tb1_employes','tb1_employes.id_entreprises','=','tb1_entreprises.id_entreprise')
            ->join('tb1_commandes','tb1_commandes.id_employe','=','tb1_employes.id_employe')
           ->join('tb1_commandes_details','tb1_commandes_details.id_commande','=','tb1_commandes.id_commande')
         ->select('nom_entreprise')
                                     ->groupby('nom_entreprise')
                                     ->get();
               foreach($all_entreprises as $entreprises){?>
         '<?php echo $entreprises->nom_entreprise ?>',<?php } ?>  ],

        datasets: [{
            label: "Statistiques montrant les entreprises qui passent plus de commandes",
            backgroundColor: ["#0074D9", "#FF4136", "#2ECC40", "#FF851B", "#7FDBFF", "#B10DC9", "#FFDC00", "#001f3f", "#39CCCC", "#01FF70", "#85144b", "#F012BE", "#3D9970", "#111111", "#AAAAAA"],
            borderColor: 'rgb(255, 99, 132)',
            data:[   <?php
         $all_entreprisescmd=DB::table('tb1_commandes_details')
     ->join('tb1_commandes','tb1_commandes.id_commande','=','tb1_commandes_details.id_commande')
     ->join('tb1_employes','tb1_employes.id_employe','=','tb1_commandes.id_employe')
        ->join('tb1_entreprises','tb1_entreprises.id_entreprise','=','tb1_employes.id_entreprises')
         ->select(DB::raw('count(tb1_commandes_details.id_commande) as entreprise'))
                                     ->groupby('nom_entreprise')
                                     ->get();
               foreach($all_entreprisescmd as $entreprisescmd){?>
         '<?php echo $entreprisescmd->entreprise ?>',<?php } ?>  ],

        }]
    },

    // Configuration options go here
    options: {}
});
</script>
            </div>
            
           
    <div class="col-md-6"> 
               <canvas id="price" width="400" height="400"></canvas>
<script>
var price = document.getElementById('price').getContext('2d');
var chart4= new Chart(price, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [   <?php
         $all_price=DB::table('tb1_commandes_details')
        
     ->select(DB::raw('MONTHNAME(created_at) as Month'))
      ->groupby(DB::raw('MONTHNAME(created_at)'))
           ->get();
               foreach($all_price as $p){?>
         '<?php echo $p->Month ?>',<?php } ?>  ],

        datasets: [{
            label: "Statistiques montrant les commandes passées par mois",
            backgroundColor: ["#0074D9", "#FF4136", "#2ECC40", "#FF851B", "#7FDBFF", "#B10DC9", "#FFDC00", "#001f3f", "#39CCCC", "#01FF70", "#85144b", "#F012BE", "#3D9970", "#111111", "#AAAAAA"],
            borderColor: 'rgb(255, 99, 132)',
            data:[   <?php
        $all_price=DB::table('tb1_commandes_details')
        
     ->select(DB::raw('sum(product_prix) as prix'))
      ->groupby(DB::raw('MONTHNAME(created_at)'))
           ->get();
               foreach($all_price as $price){?>
         '<?php echo $price->prix ?>',<?php } ?>  ],

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
 

 
   
   </div>
</div>
</div>
 </div>

    
 
   







@endsection