<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\support\Facades\Redirect;
session_start();

class SliderController extends Controller
{

  public function save_Slider(Request $request){
   	$data=array();
   	$data['slider_id']=$request->slider_id;
   


   
   	$data['publication_status']=$request->publication_status;
/*
   if ($image){
   			$image_name=str_random(20);
   			$ext=strtolower($image->getClientOriginalExtension());
   			$image_full_name=$image_name.'.'.$ext;
   			$upload_path='slider/';
   			$image_url=$upload_path.$image_full_name;
   			$success=$image->move($upload_path,$image_full_name);
   			if($success){

 	$data['slider_image']=$image_url;*/
 /*   DB::table('tb1_slider')->insert($data);
  	Session::put('messsage','Slider added successfully!!');

    return Redirect::to('/add-Slider');
    //echo"<pre>";
    //print_r($data);
    //echo"</pre>";
    //exit();
   			}

   		}
   		$data['slider_image']='';
   		DB::table('tb1_slider')->insert($data);
  	Session::put('messsage','Slider added successfully!!');

        return Redirect::to('/add-Slider');
*/ $this->validate($request,['file' => 'required|file|max:20000'
    ]);
    $files=$request->file('file');
    $path=$files->store('public/storage/slider');
    $data['slider_image']=$path;


    DB::table('tb1_silder')->insert($data);
    Session::put('messsage','Slider added successfully!!');

        return Redirect::to('/all-Slider');
    } 
    public function all_Slider(){
      $this->AdminAuth();
   	$all_Slider_info=DB::table('tb1_silder')->paginate(5);


$manage_catagory=view('admin.all_Slider')->with('all_Slider_info',$all_Slider_info);

return view('admin_layout')->with('admin.all_Slider',$manage_catagory);
    } 
public function unactive_Slider($Slider_id){
      $all_product_info=DB::table('tb1_silder')
      ->where('slider_id',$Slider_id)
      ->update(['publication_status' => 0]);
   Session::put('messsage','slider unactive successfully!!');

return Redirect::to('/all-Slider');

    } 
    public function active_Slider($Slider_id){
      $all_product_info=DB::table('tb1_silder')
      ->where('slider_id',$Slider_id)
      ->update(['publication_status' => 1]);
   Session::put('messsage','slider Activated successfully!!');

return Redirect::to('/all-Slider');

    } 
public function delet_Slider($Slider_id){
      
    
    
    DB::table('tb1_silder')->where('slider_id',$Slider_id)
      ->delete();
    Session::put('messsage','Slider delete successfully!!');

return Redirect::to('/all-Slider');
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
