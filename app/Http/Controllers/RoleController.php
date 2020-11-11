<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\support\Facades\Redirect;
use Session;

session_start();



class RoleController extends Controller
{
     public function index(){
          $this->AdminAuth();

    	$all_Role_info=DB::table('tb1_roles')
      ->paginate(5);
      


$manage_Role=view('admin.Role')->with('all_Role_info',$all_Role_info);
return view('admin_layout')->with('admin.Role',$manage_Role);
    }
   public function save_Role(Request $request){
   	$data=array();
   	$data['id_role']=$request->id;
   	$data['nom']=$request->Nom;
   	$data['type_role']=$request->Type;
   	$data['created_at']=date('Y-m-d H:i:s');
   
   	DB::table('tb1_roles')->insert($data);
   

return Redirect::to('/Role');
/*
echo "<pre>";
print_r($data);
echo "</pre>";
*/
    } 

     public function delet_Role($id_role){
    	
   		$del=DB::table('tb1_roles')->where('id_role',$id_role)
 	   	->delete();

return Redirect::to('/Role');
    } 
    public function edit_Role($id_role){
          $this->AdminAuth();

      
      $Role_info=DB::table('tb1_roles')
      ->where('id_role',$id_role)
      ->first();
     $Role_info=view('admin.editRole')->with('Role_info',$Role_info);
return view('admin_layout')->with('admin.editRole',$Role_info);

    } 


    public function Update_Role(Request $request,$id_role){
          $this->AdminAuth();

      $data=array();
    
   $data=array();
   	
   	$data['nom']=$request->Nom;
   	$data['type_role']=$request->Type;
   	$data['updated_at']=date('Y-m-d H:i:s');

    DB::table('tb1_roles')->where('id_role',$id_role)
      ->update($data);

return Redirect::to('/Role');
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
