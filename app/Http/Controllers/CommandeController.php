<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\support\Facades\Redirect;
use Illuminate\Support\Facades\storage;
use Cart;
use Session;


session_start();


class CommandeController extends Controller
{
    public function index()
    {  
    	 $this->AdminAuth();
    	$all_commande_info=DB::table('tb1_commandes')
    ->join('tb1_employes','tb1_employes.id_employe','=','tb1_commandes.id_employe')
    ->select('tb1_commandes.*','tb1_employes.nom_prenom')
     ->distinct('tb1_employes.id_employe')
    ->paginate(5);
    
                  
   //   echo "<pre>";
   // print_r($all_product_info);
   //   echo "</pre>";
   //   exit();
       $all_commande_info=view('admin.manage_commande')
               ->with('all_commande_info',$all_commande_info);
       return view('admin_layout')
               ->with('admin.manage_commande',$all_commande_info); 


    	}
    	 public function viewcommande($id_commande)
         {   $this->AdminAuth();
         		$all_commande_info=DB::table('tb1_commandes')
    ->join('tb1_employes','tb1_employes.id_employe','=','tb1_commandes.id_employe')
   ->join('tb1_commandes_details','tb1_commandes.id_commande','=','tb1_commandes_details.id_commande')
   ->select('tb1_commandes.*','tb1_commandes_details.*','tb1_employes.*')
    ->where('tb1_commandes.id_commande',$id_commande)
    ->get();
    
                  
   //   echo "<pre>";
   // print_r($all_product_info);
   //   echo "</pre>";
   //   exit();
       $all_commande_info=view('admin.view_commande')
               ->with('all_commande_info',$all_commande_info);
       return view('admin_layout')
               ->with('admin.view_commande',$all_commande_info); 





    	}
    	public function active_Commande($id){
    $all_Produit_info=DB::table('tb1_commandes')
    ->where('id_commande',$id)
    ->update(['commande_status' => 'en attente']);

    return Redirect::to('/lesCommande');

    } 
    public function unactive_Commande($id){
    $all_Produit_info=DB::table('tb1_commandes')
    ->where('id_commande',$id)
    ->update(['commande_status' => 'reçue']);

    return Redirect::to('/lesCommande');

    } 

     public function AdminAuth(){
        $id_users=Session::get('id_users');
        if($id_users){
        return;
        }else{
       return Redirect::to('/admin')->send();

        }
    }
  function facture() {
    
        $customer_data =$this->get_customer_data();
     return view('Pages.facture')->with('customer_data',$customer_data);
    }
   


    
    function get_customer_data(){
      
   $content=Cart::content();
        return $content;  
        }

  function pdf(){
    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadHTML($this->convert_customer_data_to_html())->setPaper('a3','portrait');
   return $pdf->stream();
  }
  function convert_customer_data_to_html() {
    $customer_data = $this->get_customer_data();
    $image = 'font-office/images/logofinal.png';
    $output = '

 <!DOCTYPE html>
<html>
 <head>
  <title>Facture</title>
  <meta http-equiv="Content-Type" content="charset=utf-8" />

<style>

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}

body {
  position: relative;
  width: 21cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 90px;
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background: url(dimension.png);
}

#project {
  float: left;
}

#project span {
  color: #5D6975;
  text-align: right;
  width: 52px;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.8em;
}

#company {
  float: right;
}

#project div
 {
  white-space: nowrap;        
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding: 20px;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;

}

</style>  
 </head>
 <body>
 
   <header class="clearfix">
      <div id="logo">
        ';
              $output .='
               <img  src='.$image.'>
         ';
$output .='
      </div>
      <h1>Facture</h1>
<div class="clearfix" id="company">
        <div>Coffee Shop</div>
        <div>21,Rue des fatimides Bardo<br /> 2000</div>
        <div>(216) 25206896</div>
        <div><a href="mailto:y&m@contact.tn">y&m@contact.tn</a></div>
</div>
      <div id="project">  ';  $id_entreprises=Session::get('id_entreprises');
                        
 $nom = Session::get('name');
 $email = Session::get('email');                         
                     
         $all_entreprises=DB::table('tb1_entreprises')
                                ->where('id_entreprise',$id_entreprises) 
                                    ->get();

             foreach($all_entreprises as $v_entreprise){
               $output .= '
        <div><span>Nom de lentreprise</span> '.$v_entreprise->nom_entreprise.'</div>
        <div><span>CLIENT</span> '.$v_entreprise->codepost.'</div>
         ';
     }
     $output .= '
        <div><span>ADDRESS</span>'.$nom.'</div>
        <div><span>EMAIL</span>'.$email.'</div>
        
      </div>
    </header>
       <main>
      

      <table>
        <thead>
          <tr>
           
            
       <th class="desc">Nom Produit</th>
      <th >Prix Produit</th>
      <th>Quantité</th>
     <th>PrixTotal Produit</th>
          </tr>
        </thead>
        <tbody>
         '; 
    $total = Cart::total();
           foreach($customer_data as $prod)

{
      $output .= '
          <tr>
            <td class="service">'.$prod->name.'</td>
            <td >'.$prod->price.'</td>
            <td class="unit">'.$prod->qty.'</td>
            <td class="qty">'.$prod->total.'</td>
            
          </tr>
         ';
     }
        $output .= '
      
          <tr>
            <td colspan="3" class="grand total">GRAND TOTAL</td>
            <td class="grand total">'.$total.'TND</td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>



 </body>
</html>
   
     
      
    ';
     return $output;


  }

      public function paiement()
    {  
       $this->AdminAuth();
      $all_paiement_info=DB::table('tb1_commandes')
    ->join('tb1_paiement','tb1_paiement.paiement_id','=','tb1_commandes.payment_id')
        ->join('tb1_employes','tb1_employes.id_employe','=','tb1_commandes.id_employe')

    ->select('tb1_commandes.*','tb1_paiement.*','tb1_employes.id_employe')
    ->paginate(5);
    
                  
   //   echo "<pre>";
   // print_r($all_product_info);
   //   echo "</pre>";
   //   exit();
       $all_paiement_info=view('admin.paiement')
               ->with('all_paiement_info',$all_paiement_info);
       return view('admin_layout')
               ->with('admin.paiement',$all_paiement_info); 


      }
        public function unactive_paiement($id){
    $all_Produit_info=DB::table('tb1_paiement')
    ->where('paiement_id',$id)
    ->update(['paiement_status' => 'en attente','updated_at'=>date('Y-m-d H:i:s')]);

    return Redirect::to('/paiement');

    } 

    public function active_paiement($id){
    $all_Produit_info=DB::table('tb1_paiement')
    ->where('paiement_id',$id)
    ->update(['paiement_status' => 'expedier','updated_at'=>date('Y-m-d H:i:s')]);

    return Redirect::to('/paiement');

    } 
     public function delet_paiement($id){
      
    DB::table('tb1_paiement')->where('paiement_id',$id)


    ->delete();
   

    return Redirect::to('/paiement');
    } 
    public function listcommandeE($id_employe)
         {   $this->AdminAuth();
            $all_commande_info=DB::table('tb1_employes')
    ->join('tb1_commandes','tb1_commandes.id_employe','=','tb1_employes.id_employe')
   ->join('tb1_entreprises','tb1_entreprises.id_entreprise','=','tb1_employes.id_entreprises')
   ->select('tb1_entreprises.*','tb1_commandes.*','tb1_employes.*')
    ->where('tb1_employes.id_employe',$id_employe)
    ->get();
    
                  
   //   echo "<pre>";
   // print_r($all_product_info);
   //   echo "</pre>";
   //   exit();
       $all_commande_info=view('admin.listE_commande')
               ->with('all_commande_info',$all_commande_info);
       return view('admin_layout')
               ->with('admin.listE_commande',$all_commande_info); 





      }
    
}
