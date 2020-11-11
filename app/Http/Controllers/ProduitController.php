<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\support\Facades\Redirect;
use Illuminate\Support\Facades\storage;
use Session;


session_start();


class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $this->AdminAuth();

    $all_produit_info=DB::table('tb1_produits')
    ->join('tb1_categories','tb1_categories.id_categorie','=','tb1_produits.id_categorie')
    ->select('tb1_produits.*','tb1_categories.name_categorie')
    ->paginate(5);
    
                  
   //   echo "<pre>";
   // print_r($all_product_info);
   //   echo "</pre>";
   //   exit();
       $all_produit_info=view('admin.produit')
               ->with('all_produit_info',$all_produit_info);
       return view('admin_layout')
               ->with('admin.produit',$all_produit_info); 
    }
       public function produitfavourite()
    {
          $this->AdminAuth();

    $all_produit_info=DB::table('tb1_favoris')
    ->join('tb1_produits','tb1_produits.id_produit','=','tb1_favoris.id_produit')
     ->join('tb1_categories','tb1_categories.id_categorie','=','tb1_produits.id_categorie')

    ->select('tb1_produits.*','tb1_categories.name_categorie','tb1_favoris.*')
    ->distinct('tb1_favoris.id_produit')
    ->paginate(5);
    
                  
   //   echo "<pre>";
   // print_r($all_product_info);
   //   echo "</pre>";
   //   exit();
       $all_produit_info=view('admin.produit_Favourite')
               ->with('all_produit_info',$all_produit_info);
       return view('admin_layout')
               ->with('admin.produit_Favourite',$all_produit_info); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function create(Request $request)
    {
        $data=array();
    $data['id_produit']=$request->id_produit;
    $data['id_categorie']=$request->NomCategorie;
    $data['produit_nom']=$request->NomProduit;
    $data['produit_qte']=$request->Quantite;
    $data['produit_description']=$request->Description;
    $data['publication_status']=$request->publication;
    $data['produit_prix']=$request->Prix;
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
         $data['produit_image']=$image_url;
          


            DB::table('tb1_produits')->insert($data);
            return Redirect::to('/Produits');}

         }

         $data['file']='';
            DB::table('tb1_produits')->insert($data);
           
            return Redirect::to('/Produits');
*/
   
    $this->validate($request,['file' => 'required|file|max:20000'
    ]);
    $files=$request->file('file');
    $path=$files->store('public/storage/produit');
    $data['produit_image']=$path;

    DB::table('tb1_produits')->insert($data);
   

return Redirect::to('/Produits');
/*
echo "<pre>";
print_r($data);
echo "</pre>";
*/
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function search(Request $request)
    {
         $search=$request->get('search');
         $all_produit_info=DB::table('tb1_produits')
         ->join('tb1_categories','tb1_categories.id_categorie','=','tb1_produits.id_categorie')
    ->select('tb1_produits.*','tb1_categories.name_categorie')
         ->where('produit_nom','like','%'.$search.'%')->paginate(5);
         return view('admin.produit',['all_produit_info'=>$all_produit_info]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function unactive_Produit($id){
    $all_Produit_info=DB::table('tb1_produits')
    ->where('id_produit',$id)
    ->update(['publication_status' => 0]);

    return Redirect::to('/Produits');

    } 
public function active_Produit($id){
    $all_Produit_info=DB::table('tb1_produits')
    ->where('id_produit',$id)
    ->update(['publication_status' => 1]);

    return Redirect::to('/Produits');

    } 
   public function delet_Produit($id){
      
    DB::table('tb1_produits')->where('id_produit',$id)


    ->delete();
   

    return Redirect::to('/Produits');
    } 
    public function edit_Produit($id){
          $this->AdminAuth();

    $Produit_info=DB::table('tb1_produits')
    ->join('tb1_categories','tb1_categories.id_categorie','=','tb1_produits.id_categorie')
    ->select('tb1_produits.*','tb1_categories.name_categorie')
    ->where('id_produit',$id)
    ->first();
    $Produit_info=view('admin.editproduit')->with('Produit_info',$Produit_info);
return view('admin_layout')->with('admin.editproduit',$Produit_info);

    } 
  public function Update_Produit(Request $request,$produit_id){
        $this->AdminAuth();

    $data=array();
  $data['id_produit']=$request->id_produit;
    $data['id_categorie']=$request->NomCategorie;
    $data['produit_nom']=$request->NomProduit;
    $data['produit_qte']=$request->Quantite;
    $data['produit_description']=$request->Description;
    $data['publication_status']=$request->publication;
    $data['produit_prix']=$request->Prix;
    $data['updated_at']=date('Y-m-d H:i:s');

    $this->validate($request,['file' => 'required|file|max:20000'
    ]);
    $files=$request->file('file');
    $path=$files->store('public/storage/produit');
    $data['produit_image']=$path;


    DB::table('tb1_produits')->where('id_produit',$produit_id)
    ->update($data);

return Redirect::to('/Produits');
   
    } 
    public function AdminAuth(){
        $id_users=Session::get('id_users');
        if($id_users){
        return;
        }else{
       return Redirect::to('/admin')->send();

        }
    }

public function prodfavoris($id_produit){
   
if(Session::get('id_employe')){
     $id_employe = Session::get('id_employe');
            $data=array();
  $data['id_produit']=$id_produit;
    $data['id_employe']=$id_employe;
     $data['created_at']=date('Y-m-d H:i:s');

    DB::table('tb1_favoris')->insert($data);
   

return Redirect::to('/view_product/'.$id_produit);
         }else{
            return Redirect::to('/loginemploye');
         }
}
    public function promotion()
    {
          $this->AdminAuth();

    $all_produit_info=DB::table('tb1_produits')
    ->join('tb1_categories','tb1_categories.id_categorie','=','tb1_produits.id_categorie')
    ->select('tb1_produits.*','tb1_categories.name_categorie')
    ->paginate(5);
    
                  
   //   echo "<pre>";
   // print_r($all_product_info);
   //   echo "</pre>";
   //   exit();
       $all_produit_info=view('admin.promotion')
               ->with('all_produit_info',$all_produit_info);
       return view('admin_layout')
               ->with('admin.promotion',$all_produit_info); 
    }
 public function edit_promotion($id){
          $this->AdminAuth();

    $Produit_info=DB::table('tb1_produits')
    ->join('tb1_categories','tb1_categories.id_categorie','=','tb1_produits.id_categorie')
    ->select('tb1_produits.*','tb1_categories.name_categorie')
    ->where('id_produit',$id)
    ->first();
    $Produit_info=view('admin.editpromotion')->with('Produit_info',$Produit_info);
return view('admin_layout')->with('admin.editpromotion',$Produit_info);

    } 
    public function Update_promotion(Request $request,$produit_id){
        $this->AdminAuth();

    $data=array();
    
    $data['remise']=$request->remise;
    $data['promotion']=$request->promotion;
    $data['updated_at']=date('Y-m-d H:i:s');

   


    DB::table('tb1_produits')->where('id_produit',$produit_id)
    ->update($data);

return Redirect::to('/promotion');
    } 
    public function unactive_promotion($id){
    $all_Produit_info=DB::table('tb1_produits')
    ->where('id_produit',$id)
    ->update(['promotion' => 0]);

    return Redirect::to('/promotion');

    } 
public function active_promotion($id){
    $all_Produit_info=DB::table('tb1_produits')
    ->where('id_produit',$id)
    ->update(['promotion' => 1]);

    return Redirect::to('/promotion');

    } 
}
