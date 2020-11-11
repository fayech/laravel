<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\support\Facades\Redirect;
use Illuminate\Support\Facades\storage;
use Session;

session_start();

class articlesController extends Controller
{
      public function index()
    {
          $this->AdminAuth();

    $all_articles_info=DB::table('tb1_articles')
   
    ->paginate(5);
    
                  
   //   echo "<pre>";
   // print_r($all_product_info);
   //   echo "</pre>";
   //   exit();
       $all_articles_info=view('admin.all_articles')
               ->with('all_articles_info',$all_articles_info);
       return view('admin_layout')
               ->with('admin.all_articles',$all_articles_info); 
    }
     public function AdminAuth(){
        $id_users=Session::get('id_users');
        if($id_users){
        return;
        }else{
       return Redirect::to('/admin')->send();

        }
    }

   
       public function delet_articles($id){
      
    DB::table('tb1_articles')->where('id_article',$id)


    ->delete();
   

    return Redirect::to('/admin-articles');
    } 
     public function save_article(Request $request){
    $data=array();
    $data['id_article']=$request->id_article;
    $data['postedby']=$request->postedby;
    $data['titre']=$request->Titre;
    $data['description']=$request->description;
    $data['created_at']=date('Y-m-d H:i:s');


    $this->validate($request,['file' => 'required|file|max:20000'
    ]);
    $files=$request->file('file');
    $path=$files->store('public/storage/article');
    $data['imagearticle']=$path;

    DB::table('tb1_articles')->insert($data);
   
    return Redirect::to('/admin-articles');





    } 

     public function edit_article($id){
          $this->AdminAuth();

   $articles_info=DB::table('tb1_articles')
    ->where('id_article',$id)
    ->first();
    $articles_info=view('admin.edit_articles')->with('articles_info',$articles_info);
return view('admin_layout')->with('admin.edit_articles',$articles_info);

    } 
  public function Update_article(Request $request,$id_article){
        $this->AdminAuth();
 $data=array();
    $data['postedby']=$request->postedby;
    $data['titre']=$request->Titre;
    $data['description']=$request->description;
    $data['created_at']=date('Y-m-d H:i:s');


    $this->validate($request,['file' => 'required|file|max:20000'
    ]);
    $files=$request->file('file');
    $path=$files->store('public/storage/article');
    $data['imagearticle']=$path;

    DB::table('tb1_articles')->where('id_article',$id_article)
    ->update($data);

return Redirect::to('/admin-articles');
   
    } 
   
}
