<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\support\Facades\Redirect;
use Illuminate\Support\Facades\storage;
use Cart;
use Session;


session_start();

class paiementController extends Controller
{
    public function index()
    {                $this->AdminAuth();

    	
    	$all_paiement_info=DB::table('tb1_commandes')
    ->join('tb1_paiement','tb1_paiement.paiement_id','=','tb1_commandes.payment_id')
    ->select('tb1_commandes.*','tb1_paiement.*')
    ->paginate(5);
    
                  
   //   echo "<pre>";
   // print_r($all_product_info);
   //   echo "</pre>";
   //   exit();
       $all_paiement_info=view('admin.etat_commande')
               ->with('all_paiement_info',$all_paiement_info);
       return view('admin_layout')
               ->with('admin.etat_commande',$all_paiement_info); 


    	}
    	 public function AdminAuth(){
        $id_users=Session::get('id_users');
        if($id_users){
        return;
        }else{
       return Redirect::to('/admin')->send();

        }
    }
      public function unactive_etatpaiement($id){
    $etatpaiement=DB::table('tb1_paiement')
    ->where('paiement_id',$id)
    ->update(['etat_paiement'=>0,'updated_at'=>date('Y-m-d H:i:s')]);

    return Redirect::to('/etat-paiement');

    } 

    public function active_etatpaiement($id){
   
      $all_Fournisseur_info=DB::table('tb1_paiement')
      ->where('paiement_id',$id)
      ->update(['etat_paiement' => 1,'updated_at'=>date('Y-m-d H:i:s')]);

    return Redirect::to('/etat-paiement');

    } 
}
