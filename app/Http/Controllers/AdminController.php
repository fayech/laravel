<?php

namespace App\Http\Controllers;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

session_start();
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    	return view('Admin-connexion');
    }
    public function Carteentreprises(){
      $this->AdminAuth();

        return view('admin.Carteentreprises');
    }
    public function AdminAuth(){

      $id_users=Session::get('id_users');
      if($id_users){
        return;
      }else{
       return Redirect::to('/admin')->send();

      }
    }
      public function Cartliveur(){
              $this->AdminAuth();

        return view('admin.Cartlivreur');
    }
        public function adminentreprise(){
         

    $all_entreprise_info=DB::table('tb1_entreprises')
   
   
    ->paginate(5);
    
                  
   //   echo "<pre>";
   // print_r($all_product_info);
   //   echo "</pre>";
   //   exit();
       $all_entreprise_info=view('admin.entreprise')
               ->with('all_entreprise_info',$all_entreprise_info);
       return view('admin_layout')
               ->with('admin.entreprise',$all_entreprise_info); 
    }
       public function delet_entreprise($id){
      
    DB::table('tb1_entreprises')->where('id_entreprise',$id)


    ->delete();
   

    return Redirect::to('/entreprise');
    } 
     public function list_employe($identreprise){
      
       $all_employe=DB::table('tb1_employes')
    ->join('tb1_entreprises','tb1_entreprises.id_entreprise','=','tb1_employes.id_entreprises')
    ->select('tb1_employes.*','tb1_entreprises.nom_entreprise')
    ->where('id_entreprises',$identreprise)
    ->paginate(5);
   

    $all_employe=view('admin.list_employe')
               ->with('all_employe',$all_employe);
       return view('admin_layout')
               ->with('admin.list_employe',$all_employe); 
    } 
   
    public function dashboard(Request $request){
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

   if($result->type_role=="livreur"){
     return Redirect::to('/lesCommande');
   }
            return Redirect::to('/admincharts');

      	}else{
     		Session::put('message','email or password invalid'); 
            return Redirect::to('/admin');   
     	}
    } 

         
/*
     
     	   echo "<pre>";
   print_r($result);
     echo "</pre>";
     exit();
     	

       /*
     	if ($result){
     		if($result->type_role="Adminstrater"){
     		return view('admin.dashboard');
     		}else{
     			return view('admin.User');
     		}
     		
     	}else{
     		return view('admin-login');
     	}
     */	


}

