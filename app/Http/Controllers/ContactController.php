<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\support\Facades\Redirect;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Facades\Hash;
use Cart;

use Session;

session_start();

class ContactController extends Controller
{
    
    public function AdminAuth(){
      $id_employe=Session::get('id_employe');
      if($id_employe){
        return;
      }else{
       return Redirect::to('/loginemploye')->send();

      }
    }
    public function ContactE(Request $request){
    $id_employe=Session::get('id_employe');
    $data['id_employe']=$id_employe;
    $data['sujet']=$request->sujet;
    $data['message']=$request->message;

    $data['created_at']=date('Y-m-d H:i:s');
     DB::table('tb1_contact')->insert($data);

      return Redirect::to('/contactutilisateur');
   }

}
