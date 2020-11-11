<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\support\Facades\Redirect;
use Session;
session_start();


class FournisseurController extends Controller
{
    public function index(){
          $this->AdminAuth();

    	return view('admin.fournisseur');
    }
     public function save_Fournisseur(Request $request){
   	$data=array();
   	$data['id']=$request->id;
   	$data['nom']=$request->Nom;
   	$data['ville']=$request->ville;
   	$data['telephone']=$request->telephone;
   	$data['email']=$request->email;
   	$data['specialite']=$request->specialite;
   	$data['statut_publication']=$request->publication;
    $data['created_at']=date('Y-m-d H:i:s');


   	DB::table('tb1_fournisseurs')->insert($data);
   

return Redirect::to('/Fournisseur');
/*
echo "<pre>";
print_r($data);
echo "</pre>";
*/
    } 
  public function all_Fournisseur(){

      $this->AdminAuth();

   	$all_Fournisseur_info=DB::table('tb1_fournisseurs')
    ->paginate(5);
    

$manage_Fournisseur=view('admin.fournisseur')->with('all_Fournisseur_info',$all_Fournisseur_info);
return view('admin_layout')->with('admin.fournisseur',$manage_Fournisseur);
    } 
    public function delet_Fournisseur($Fournisseur_id){
    	
   		$del=DB::table('tb1_fournisseurs')->where('id',$Fournisseur_id)
 	   	->delete();

return Redirect::to('/Fournisseur');
    } 
     public function edit_Fournisseur($Fournisseur_id){
      
      $Fournisseur_info=DB::table('tb1_fournisseurs')
      ->where('id',$Fournisseur_id)
      ->first();
     $Fournisseur_info=view('admin.editfournisseur')->with('Fournisseur_info',$Fournisseur_info);
return view('admin_layout')->with('admin.editfournisseur',$Fournisseur_info);

    } 
 public function Update_Fournisseur(Request $request,$Fournisseur_id){
      $this->AdminAuth();

      $data=array();
    
    $data['nom']=$request->Nom;
    $data['ville']=$request->ville;
    $data['telephone']=$request->telephone;
    $data['email']=$request->email;
    $data['specialite']=$request->specialite;
    $data['updated_at']=date('Y-m-d H:i:s');



    DB::table('tb1_fournisseurs')->where('id',$Fournisseur_id)
      ->update($data);

return Redirect::to('/Fournisseur');
    } 


     public function unactive_Fournisseur($Fournisseur_id){
      $all_Fournisseur_info=DB::table('tb1_fournisseurs')
      ->where('id',$Fournisseur_id)
      ->update(['statut_publication' => 0]);

return Redirect::to('/Fournisseur');

    } 
 public function active_Fournisseur($Fournisseur_id){
      $all_Fournisseur_info=DB::table('tb1_fournisseurs')
      ->where('id',$Fournisseur_id)
      ->update(['statut_publication' => 1]);

return Redirect::to('/Fournisseur');

    } 
    public function AdminAuth(){
      $id_users=Session::get('id_users');
      if($id_users){
        return;
      }else{
       return Redirect::to('/admin')->send();

      }
    }
}
