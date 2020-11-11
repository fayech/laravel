<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

session_start();
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function index(){

    	
          
          
          $allh_products_info=DB::table('tb1_produits')
    ->join('tb1_categories','tb1_produits.id_categorie','=','tb1_categories.id_categorie')
    ->where('tb1_produits.publication_status',1)
    ->get();
    
       
       
             
       return  response()->json($allh_products_info);
    
       }
        public function connexion(Request $request){
    	/*
     	$admin_email=$request->admin_email;
     	$admin_password=$request->admin_password;
     	
     	 $result=DB::select('select tb1_users.*,tb1_roles.type_role from tb1_users,tb1_roles where tb1_roles.id_role=tb1_users.id_role and email=? and password=?',[$admin_email,$admin_password]);
           Session::put('type_role',$result->type_role);


         return view('admin_layout');
*/
         

        $admin_email=$request->admin_email;
     	$admin_password=md5($request->admin_password);
     	$result=DB::table('tb1_users')
     	->join('tb1_roles','tb1_roles.id_role','=','tb1_users.id_role')
     	->where('email',$admin_email)
     	->where('password',$admin_password)
     	->first();
     	if ($result){
             $data=array();
            $data['Connexion']=1;
            $data['updated_at']=date('Y-m-d H:i:s');

 DB::table('tb1_users')->where('id_users',$result->id_users)
    ->update($data);
           Session::put('id_users',$result->id_users);
           Session::put('email',$result->email);
     	   Session::put('nom_complet',$result->nom_complet);
     	   Session::put('image_user',$result->image_user);
     	   Session::put('type_role',$result->type_role);

   return  response()->json($result);
    
          

      	}else{
     		$message=Session::put('message','email or password invalid'); 

            return  response()->json($message);
     	}
    } 

         
}
