<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\support\Facades\Redirect;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Facades\Hash;


use Session;

session_start();


class EntrepriseController extends Controller
{
    function index() {
      $this->AdminAuth();
    	$identreprise=Session::get('id_entreprises');
    	 $all_employe=DB::table('tb1_employes')
    ->join('tb1_entreprises','tb1_entreprises.id_entreprise','=','tb1_employes.id_entreprises')
    ->select('tb1_employes.*','tb1_entreprises.nom_entreprise')
    ->where('id_entreprises',$identreprise)
    ->paginate(5);
    
                  
   //   echo "<pre>";
   // print_r($all_product_info);
   //   echo "</pre>";
   //   exit();
       $all_employe=view('adminentreprise.gestionentreprise')
               ->with('all_employe',$all_employe);
       return view('layoutentreprise')
               ->with('adminentreprise.gestionentreprise',$all_employe); 
    }
     public function commande(){ 
       $this->AdminAuth();
       
    	$identreprise=Session::get('id_entreprises');
    	 $all_employe=DB::table('tb1_employes')
    ->join('tb1_entreprises','tb1_entreprises.id_entreprise','=','tb1_employes.id_entreprises')
    ->join('tb1_commandes','tb1_commandes.id_employe','=','tb1_employes.id_employe')
  ->select('tb1_employes.*','tb1_entreprises.nom_entreprise','tb1_commandes.*')
    ->where('id_entreprises',$identreprise)
    ->distinct('tb1_employes.id_employe')
    ->paginate(5);
   
    
    
                  
   //   echo "<pre>";
   // print_r($all_product_info);
   //   echo "</pre>";
   //   exit();
       $all_employe=view('adminentreprise.affichecommande')
               ->with('all_employe',$all_employe);
       return view('layoutentreprise')
               ->with('adminentreprise.affichecommande',$all_employe);

     }

       public function detailscommande($id_commande)
         {  
           $this->AdminAuth();
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
       $all_commande_info=view('adminentreprise.detailscommande')
               ->with('all_commande_info',$all_commande_info);
       return view('layoutentreprise')
               ->with('adminentreprise.detailscommande
                ',$all_commande_info); 





      }
       public function AdminAuth(){
         
      $id_employe=Session::get('id_employe');
      if($id_employe){
        return;
      }else{
       return Redirect::to('/loginemploye')->send();

      }
    }
     public function logoutentreprise(){
    //Session::put('admin_name',null);
    //Session::put('admin_id',null);  
    Session::flush();  

    return Redirect::to('/loginemploye');
    } 
  public function profil(){
         $id=Session::get('id_employe');
         $identreprise=Session::get('id_entreprises');
     $profil_info=DB::table('tb1_employes')
    ->join('tb1_entreprises','tb1_entreprises.id_entreprise','=','tb1_employes.id_entreprises')
    ->where('id_employe',$id)
    ->where('id_entreprises',$identreprise)
    ->first();
    $profil_info=view('adminentreprise.profil')->with('profil_info',$profil_info);
return view('layoutentreprise')->with('adminentreprise.profil',$profil_info);
   
    } 
     public function editprofil(Request $request){
      $this->AdminAuth();
         $id=Session::get('id_employe');
         $identreprise=Session::get('id_entreprises');
     
        

     $data=array();
      $data['organisation']=$request->organisation;

    $data['adresse_social_media']=$request->adresse_social;
     $profil_info=DB::table('tb1_entreprises')
    ->where('id_entreprise',$identreprise)
    ->first();
    $coderecp=$profil_info->codeentreprise;
    $codedb=$request->codeentreprise;
    if($coderecp==$codedb){
$data['codeentreprise']=$codedb;
    }else{
          $data['codeentreprise']=md5($request->codeentreprise);

    }
    
    $data['tb1_entreprises.email']=$request->emailentreprise;
    $data['ville']=$request->ville;
    $data['effectif']=$request->effectif;
    
     DB::table('tb1_employes')
    ->join('tb1_entreprises','tb1_entreprises.id_entreprise','=','tb1_employes.id_entreprises')
    ->where('id_employe',$id)
    ->where('id_entreprises',$identreprise)
     
    ->update($data);
return Redirect::to('/profil');
   
    } 
}
