<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\support\Facades\Redirect;
session_start();


class SuperAdminController extends Controller
{
    public function index(){
    $this->AdminAuth();
    return view ('admin_layout');
   }
    public function logout(){
   	//Session::put('admin_name',null);
    //Session::put('admin_id',null); 

$id_users=Session::get('id_users');
      $data=array();
            $data['Connexion']=0;
            $data['updated_at']=date('Y-m-d H:i:s');

 DB::table('tb1_users')->where('id_users',$id_users)
    ->update($data); 
    Session::flush();  

    return Redirect::to('/admin');
    } 
    public function AdminAuth(){
    	$id_users=Session::get('id_users');
    	if($id_users){
        return;
    	}else{
       return Redirect::to('/admin')->send();

    	}
    }
        public function Contactutilisateur()
    {  
         $this->AdminAuth();
        $all_Contact_info=DB::table('tb1_contact')
    ->join('tb1_employes','tb1_employes.id_employe','=','tb1_contact.id_employe')
    ->select('tb1_contact.*','tb1_employes.nom_prenom')
    ->paginate(3);
    
                  
   //   echo "<pre>";
   // print_r($all_product_info);
   //   echo "</pre>";
   //   exit();
       $all_Contact_info=view('admin.Contactutilisateur')
               ->with('all_Contact_info',$all_Contact_info);
       return view('admin_layout')
               ->with('admin.Contactutilisateur',$all_Contact_info); 


        }
         public function delet_Contact($id){
      
    DB::table('tb1_contact')->where('id_contact',$id)
    ->delete();
   

    return Redirect::to('/ContactU');
    } 
}
