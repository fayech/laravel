<!DOCTYPE html>
<html>
 <head>
  <title>Start & Go | Facture </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="icon" href="{{URL::to('login-admin/img/icon.ico')}}" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('font-office/css/facture.css')}}">
  <script type="text/javascript" href="{{asset('font-office/js/jquery.printPage.js')}}"></script>
  
 </head>
 <body>
 
   <header class="clearfix">
      <div id="logo">
        <img src="{{URL::to('font-office/images/logofinal.png')}}">  
      </div>
      <h1>Facture</h1>
      <div id="company" class="clearfix">
        <div>Start & Go</div>
        <div>04, Rue Istamboul Bardo<br /> 2000</div>
        <div>(216) 21115893</div>
        <div><a href="mailto:y&m@contact.tn">start&go@contact.com</a></div>

      </div>
         

      <div id="project">
   
                    <?php
                        
                        $id_entreprises=Session::get('id_entreprises');
                        

                          
                     
         $all_entreprises=DB::table('tb1_entreprises')
                                ->where('id_entreprise',$id_entreprises) 
                                    ->get();
         foreach($all_entreprises as $v_entreprise){?>    
                      
        <div><span>Nom de lentreprise</span>{{$v_entreprise->nom_entreprise}}</div>
        <div><span>Lieu de livraison</span> {{$v_entreprise->codepost}}</div>
     <?php }?>
        <div><span>CLIENT</span><?php echo Session::get('name');?></div>

        
        <div><span>EMAIL</span><?php echo Session::get('email');?> <a href="">
          
        </a></div>
 
      </div>   
    </header>
    <!--
  <div class="container">
   
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <thead>
      <tr>
       <th>Id Commande</th>
       <th>Nom Produit</th>
      <th>Prix Produit</th>
      <th>Quantité</th>
     <th>Total</th>
      </tr>
     </thead>
     <tbody>
     @foreach($customer_data as $prod)
      <tr>
       <td>{{ $prod->id_commande }}</td>
       <td>{{ $prod->product_name }}</td>
        <td>{{ $prod->product_prix }}</td>
         <td>{{ $prod->product_sales_quantity }}</td>
     
      </tr>
     @endforeach
     <tr>
    <td rowspan="3">Total</td>

     	<td >{{$prod->commande_total}}</td>
     </tr>
     </tbody>
    </table>
   </div>
  </div>-->

 <main>
 	      <a href="#" onClick="window.open('{{URL::to('/facture/pdf')}}')">Generer PDF</a>		
    

      <table>
        <thead>
          <tr>
          
       <th class="desc">Nom Produit</th>
      <th >Prix Produit</th>
      <th>Quantité</th>
          <th>Produit total</th>

          </tr>
        </thead>
        <tbody>
            <?php  $content=Cart::content();
                        
 
    
   

               ?>
        	 @foreach($content as $prod)

          <tr>
        
            <td class="service">{{$prod->name}}</td>
            <td >{{$prod->price}}</td>
            <td class="unit">{{$prod->qty}}</td>
            <td class="qty">{{$prod->total}}</td>
            
          </tr>
         
          @endforeach
      
          <tr>
            <td colspan="3" class="grand total">GRAND TOTAL</td>
            <td class="grand total">{{Cart::total()}}TND</td>
          </tr>
        </tbody>
      </table>
      <a href="{{URL::to('/Retour')}}">Retour</a>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>>



 </body>
</html>