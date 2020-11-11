<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\support\Facades\Redirect;
use Illuminate\Support\Facades\storage;
use Cart;
use Session;
session_start();




class CartController extends Controller
{
  public function add_to_cart(Request $request){
   
    $qte=$request->quant;
    $produit_id=$request->produit_id;
    $products_details=DB::table('tb1_produits')
    ->where('id_produit',$produit_id)
    ->first();
    /*
    echo "<pre>";
   print_r($products_details);
    echo"</pre>";
     */
    $data['qty']=$qte;
    $data['id']=$produit_id;
    $data['options']['image']=$products_details->produit_image;
    $data['price']=$products_details->produit_prix;
    $data['name']=$products_details->produit_nom;
    $data['tb']=$data['qty']*$data['price'];
    Cart::add($data);
   



    return Redirect::to('/index');
    
    


    }
   public function delet_to_cart($rowId){
    Cart::update($rowId,0);
    return Redirect::to('/index');

   }
    public function delet(){
    Cart::destroy();

    return Redirect::to('/index');

   }
 public function view_Cart(){
    
    return view('Pages.Show-Cart');

   }
 public function delet_view_cart($rowId){
     Cart::update($rowId,0);
    return Redirect::to('/view_Cart');


   }
public function update_view_cart(Request $request){
    $qty=$request->quantity;
    $rowId=$request->rowId;

    if($qty>0){
     Cart::update($rowId,$qty);
    
    return Redirect::to('/view_Cart');
}else{
     Cart::update($rowId,0);
    return Redirect::to('/view_Cart');
}


   }

public function addremise_to_cart(Request $request){
    $qte=$request->qte;
    $produit_id=$request->id_produit;
    $products_details=DB::table('tb1_produits')
    ->select('*',DB::raw('produit_prix-produit_prix*(remise / 100)as prixsolde'))
    ->where('id_produit',$produit_id)
    ->where('promotion',1)
    ->first();
                  
    echo "<pre>";
   print_r($products_details);
    echo"</pre>";
    
    
    $data['qty']=$qte;
    $data['id']=$produit_id;
    $data['options']['image']=$products_details->produit_image;
    $data['price']=$products_details->prixsolde;
    $data['name']=$products_details->produit_nom;
    $data['tb']=$data['qty']*$data['price'];
    Cart::add($data);
return Redirect::to('/index');


   

    }


}