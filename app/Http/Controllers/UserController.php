<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\support\Facades\Redirect;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Facades\Hash;
use Session;

session_start();



class UserController extends Controller
{
    public function index()
    {
          $this->AdminAuth();

    $all_user_info=DB::table('tb1_users')
    ->join('tb1_roles','tb1_roles.id_role','=','tb1_users.id_role')
    ->select('tb1_users.*','tb1_roles.type_role')
    ->paginate(5);
    
                  
   //   echo "<pre>";
   // print_r($all_product_info);
   //   echo "</pre>";
   //   exit();
       $all_user_info=view('admin.administrateur')
               ->with('all_user_info',$all_user_info);
       return view('admin_layout')
               ->with('admin.administrateur',$all_user_info); 
    }
 public function connexionUser()
    {
          $this->AdminAuth();

    $all_user_info=DB::table('tb1_users')
    ->join('tb1_roles','tb1_roles.id_role','=','tb1_users.id_role')
    ->select('tb1_users.*','tb1_roles.type_role')
    ->where('publication_status',1)
    ->paginate(5);
    
                  
   //   echo "<pre>";
   // print_r($all_product_info);
   //   echo "</pre>";
   //   exit();
       $all_user_info=view('admin.connexionAdmin')
               ->with('all_user_info',$all_user_info);
       return view('admin_layout')
               ->with('admin.connexionAdmin',$all_user_info); 
    }

  public function save_User(Request $request){
        $this->AdminAuth();

   	$data=array();
   	$data['id_users']=$request->id_users;
   	$data['id_role']=$request->NomRole;
   	$data['nom_complet']=$request->Nom;
    $data['email']=$request->Email;
   	$data['password']=md5($request->Password);
   	$data['tel']=$request->numero;
   	$data['code_postal']=$request->Adresse;
    $data['publication_status']=$request->publication;
     $data['Connexion']=0;

   	$data['created_at']=date('Y-m-d H:i:s');
   	 $this->validate($request,['file' => 'required|file|max:20000'
    ]);
    $files=$request->file('file');
    $path=$files->store('public/storage/user');
    $data['image_user']=$path;

   
   
   	DB::table('tb1_users')->insert($data);
   

return Redirect::to('/User');
/*
echo "<pre>";
print_r($data);
echo "</pre>";
*/
    } 
 public function unactive_User($id_users){
    $all_user_info=DB::table('tb1_users')
    ->where('id_users',$id_users)
    ->update(['publication_status' => 0]);

return Redirect::to('/User');

    } 
 public function active_User($id_users){
   $all_user_info=DB::table('tb1_users')
   ->where('id_users',$id_users)
   ->update(['publication_status' => 1]);

   return Redirect::to('/User');

    } 

    public function edit_User($id_users){
          $this->AdminAuth();

      
      $user_info=DB::table('tb1_users')
      ->join('tb1_roles','tb1_roles.id_role','=','tb1_users.id_role')
     ->select('tb1_users.*','tb1_roles.type_role')
     ->where('id_users',$id_users)
     ->first();
     $user_info=view('admin.editadministrateur')->with('user_info',$user_info);
     return view('admin_layout')->with('admin.editadministrateur',$user_info);

    } 

    public function delet_User($id_users){
      
    $del=DB::table('tb1_users')->where('id_users',$id_users)

    ->delete();
   

   return Redirect::to('/User');
    } 
 public function Update_User(Request $request,$id_users){
      $this->AdminAuth();

    $data=array();
    $data['id_users']=$id_users;
    $data['id_role']=$request->NomRole;
    $data['nom_complet']=$request->Nom;
    $data['email']=$request->Email;
     $profil_info=DB::table('tb1_users')
    ->where('id_users',$id_users)
    ->first();
    $coderecp=$profil_info->password;
    $codedb=$request->Password;
    if($coderecp==$codedb){
        $data['password']=$codedb;
    }else{
          $data['password']=md5($request->Password);

    }
    
    $data['tel']=$request->numero;
    $data['code_postal']=$request->Adresse;
    $data['publication_status']=$request->publication;

    $data['updated_at']=date('Y-m-d H:i:s');
   


    DB::table('tb1_users')->where('id_users',$id_users)
    ->update($data);

return Redirect::to('/User');
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
