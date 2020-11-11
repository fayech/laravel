<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\support\Facades\Redirect;
use Illuminate\Support\Facades\storage;
use Session;

session_start();



class CategorieController extends Controller
{
    public function index(){
          $this->AdminAuth();

    	return view('admin.categories');
    }
     public function save_categorie(Request $request){
   	$data=array();
   	$data['id_categorie']=$request->id_categorie;
   	$data['name_categorie']=$request->Nom;
   	$data['id_fournisser']=$request->fournisser_id;
   	$data['categorie_description']=$request->categorie_description;
    $data['publication_status']=$request->publication;
    $data['created_at']=date('Y-m-d H:i:s');

/*
   	$image=$request->file('file');
    if ($image) {
       $image_name=str_random(20);
       $ext=strtolower($image->getClientOriginalExtension());
       $image_full_name=$image_name.'.'.$ext;
       $upload_path='image/';
       $image_url=$upload_path.$image_full_name;
       $success=$image->move($upload_path,$image_full_name);
       if ($success) {
         $data['categorie_image']=$image_url;
          


         	DB::table('tb1_categories')->insert($data);
         	return Redirect::to('/Categories');}

         }
         $data['file']='';
            DB::table('tb1_categories')->insert($data);
           
            return Redirect::to('/Categories');

   	*/
   	$this->validate($request,['file' => 'required|file|max:20000'
    ]);
    $files=$request->file('file');
    $path=$files->store('public/storage');
    $data['categorie_image']=$path;

   	DB::table('tb1_categories')->insert($data);
   

return Redirect::to('/Categories');
/*
echo "<pre>";
print_r($data);
echo "</pre>";
*/
    } 
     public function all_categorie(){
/*
  
   	$all_categorie_info=DB::table('tb1_categories')->get();


$manage_categorie=view('admin.categories')->with('all_categorie_info',$all_categorie_info);
return view('admin_layout')->with('admin.categories',$manage_categorie);

*/
    $this->AdminAuth();

$all_categorie_info=DB::table('tb1_categories')
                     ->join('tb1_fournisseurs','tb1_fournisseurs.id','=','tb1_categories.id_fournisser')
                     ->select('tb1_categories.*','tb1_fournisseurs.nom')
                     ->paginate(5);
                     
                  
   //   echo "<pre>";
   // print_r($all_product_info);
   //   echo "</pre>";
   //   exit();
       $all_categorie_info=view('admin.categories')
               ->with('all_categorie_info',$all_categorie_info);
       return view('admin_layout')
               ->with('admin.categories',$all_categorie_info); 

    } 


     public function unactive_Categorie($Categorie_id){

      $all_Fournisseur_info=DB::table('tb1_categories')
      ->where('id_categorie',$Categorie_id)
      ->update(['publication_status' => 0]);

return Redirect::to('/Categories');

    } 
 public function active_Categorie($Categorie_id){
      $all_Fournisseur_info=DB::table('tb1_categories')
      ->where('id_categorie',$Categorie_id)
      ->update(['publication_status' => 1]);

return Redirect::to('/Categories');

    } 
     public function delet_Categorie($Categorie_id){
      
      DB::table('tb1_categories')->where('id_categorie',$Categorie_id)
      ->delete();



      
   

return Redirect::to('/Categories');
    } 
      public function edit_Categorie($Categorie_id){
            $this->AdminAuth();

      
      $Categorie_info=DB::table('tb1_categories')
      ->join('tb1_fournisseurs','tb1_fournisseurs.id','=','tb1_categories.id_fournisser')
      ->select('tb1_categories.*','tb1_fournisseurs.nom')
      ->where('id_categorie',$Categorie_id)
      ->first();
     $Categorie_info=view('admin.editcategories')->with('Categorie_info',$Categorie_info);
return view('admin_layout')->with('admin.editcategories',$Categorie_info);

    } 
  public function Update_Categorie(Request $request,$Categorie_id){
        $this->AdminAuth();

    $data=array();
    $data['id_categorie']=$request->Categorie_id;
    $data['name_categorie']=$request->Nom;
    $data['id_fournisser']=$request->fournisser_id;
    $data['categorie_description']=$request->categorie_description;
    $data['publication_status']=$request->publication;
    $data['updated_at']=date('Y-m-d H:i:s');

    $this->validate($request,['file' => 'required|file|max:20000'
    ]);
    $files=$request->file('file');
    $path=$files->store('public/storage');
    $data['categorie_image']=$path;


    DB::table('tb1_categories')->where('id_categorie',$Categorie_id)
    ->update($data);

return Redirect::to('/Categories');
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
