<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\support\Facades\Redirect;
use Illuminate\Support\Facades\storage;
use Cart;
use Session;

session_start();
class HomeController extends Controller
{
     
     public function details(){
    
    return view ('Pages.Product-details');
   }
    
    public function index(Request $request){

    	 if($request->ajax() && isset($request->start)){
          
          $start = $request->start; // min price value
          $end = $request->end; // max price value  
          $allh_products_info=DB::table('tb1_produits')
    ->join('tb1_categories','tb1_produits.id_categorie','=','tb1_categories.id_categorie')
    ->where('tb1_produits.publication_status',1)
    ->where('produit_prix', '>=', $start)
    ->where('produit_prix', '<=', $end)
    ->get();
    
        response()->json($allh_products_info);
       
             
       return view('Pages.products',compact('allh_products_info'));
    
       }
       else{
   	$allh_products_info=DB::table('tb1_produits')
    ->join('tb1_categories','tb1_produits.id_categorie','=','tb1_categories.id_categorie')
    ->where('tb1_produits.publication_status',1)
    ->paginate(6);
/*

   $manage_product=view('Pages.home')->with('allh_products_info',$allh_products_info);
   return view('layout')->with('Pages.home',$manage_product);

   */

   return view('Pages.home', compact('allh_products_info'));

    
    }

    } 
    public function start(){

     return view('welcome');
    }
      public function Histoire(){
   return view('Pages.Histoire');
    }
      public function Blog(){
          $all_articles_info=DB::table('tb1_articles')
->select('tb1_articles.*',DB::raw('DAY(created_at) AS jour'),DB::raw('MONTHNAME(created_at) AS mois'))
          ->paginate(2);
   return view('Pages.Blog',compact('all_articles_info'));
    }
       public function Contact(){
   return view('Pages.Contact');
    }
    public function FAQ(){
   return view('Pages.FAQ');
    }
    public function Blogdetails($id){
      $articles_info=DB::table('tb1_articles')
    ->where('id_article',$id)
    ->first();
   return view('Pages.Blogdetails',compact('articles_info'));
    }
    public function show_product(Request $request,$category_id){
       if($request->ajax() && isset($request->start) && isset($category_id)){
          
          $start = $request->start; // min price value
          $end = $request->end; // max price value  
          $allh_products_info=DB::table('tb1_produits')
    ->join('tb1_categories','tb1_produits.id_categorie','=','tb1_categories.id_categorie')
    ->where('tb1_produits.publication_status',1)
    ->where('produit_prix', '>=', $start)
    ->where('produit_prix', '<=', $end)
    ->where('id_categorie',$category_id)

    ->get();
    
        response()->json($allh_products_info);
       
             
       return view('Pages.category_by_product',compact('allh_products_info'));
    
       }
       else{
      $allh_products_info=DB::table('tb1_produits')
    ->join('tb1_categories','tb1_produits.id_categorie','=','tb1_categories.id_categorie')
    ->where('tb1_produits.publication_status',1)
    ->where('tb1_categories.id_categorie',$category_id)
     ->paginate(6);
  
  
  return view('Pages.category_by_product',compact('allh_products_info'));

    
    }
    } 

     /*
   public function  show_product($category_id){

        $product_by_product=DB::table('tb1_products')
    ->join('tb1_categories','tb1_products.id_categorie','=','tb1_categories.id_categorie')
    ->select('tb1_products.*','tb1_categories.id_categorie')
    ->where('tb1_category.category_id',$category_id)
    ->where('tb1_products.publication_status',1)
    ->limit(18)
    ->get();


   $manage_by_product=view('pages.category_by_product')->with('product_by_product', $product_by_product);
    return view('layout')->with('pages.category_by_product',$manage_by_product);
       }

   */
      public function  product_details($product_id){
    $products_details=DB::table('tb1_produits')
    ->join('tb1_categories','tb1_produits.id_categorie','=','tb1_categories.id_categorie')
    ->where('tb1_produits.id_produit',$product_id)
    ->first();

/*
   $manage_product_details=view('pages.Product-details')->with('products_details',$products_details);
    return view('layout')->with('pages.Product-details',$manage_product_details);*/
     return view('Pages.Product-details', compact('products_details'));
    } 
     public function  Retour(){
   Cart::destroy();
     return Redirect('/index');
    } 

}
