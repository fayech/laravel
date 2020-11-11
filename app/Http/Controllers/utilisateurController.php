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

class utilisateurController extends Controller
{
    public function entreprise(){
    
    return view ('login.inscriptionentreprise');
   }
    public function employe(){

    
    return view ('login.inscriptionemploye');
   }
   public function connexion(Request $request){
   	$admin_email=$request->email;
     	$admin_password=md5($request->password);
     	$result=DB::table('tb1_employes')->where('email',$admin_email)
     	->where('password',$admin_password)->first();
if($result){
     	if ($result->post=="Directeur") {
     		Session::put('name',$result->nom_prenom);
        Session::put('image',$result->image_employe);  
        Session::put('id_employe',$result->id_employe);
        Session::put('id_entreprises',$result->id_entreprises);

     		return Redirect::to('/adminentreprise');
     	}else{
     		Session::put('name',$result->nom_prenom);
        Session::put('image',$result->image_employe);  
        Session::put('id_employe',$result->id_employe);
        Session::put('id_entreprises',$result->id_entreprises);
        Session::put('email',$result->email);




     		return Redirect::to('/index');   
     	}
    } 
    else{
        Session::put('messageE','Invalid username or password.');
return Redirect::to('/loginemploye'); 
    	  

    }
}
    	
    
 
   public function inscriptionemploye(){
    
    return view('inscriptionemploye');
   }
    public function passwordoublie(){
      return view('mdpoublie');
    }
    public function password(Request $request){
        $email=$request->email;
      $id_entreprises=$request->Nomentreprise;
      $pwd=md5($request->pwd);
      $password=md5($request->password);

      $result=DB::table('tb1_employes')->where('email',$email)
      ->where('id_entreprises',$id_entreprises)->first();
if($result){
    
   if($pwd==$password){
    $data=array();
  
    $data['password']=md5($request->password);
   
     DB::table('tb1_employes')->where('id_employe',$result->id_employe)
    ->update($data);

    return Redirect::to('/loginemploye');

   }


Session::put('message',"password  est incorrect");
   
  return Redirect::to('/pwdoublie');


  }else{
    Session::put('message',"Invalid usereamil or password .");
 return Redirect::to('/pwdoublie');
  }
   }
    public function createentreprise(Request $request)
    {
        $data=array();
    $data['id_entreprise']=$request->id_entreprise;
    $data['nom_entreprise']=$request->nom_entreprise;
    $data['organisation']=$request->organisation;
    $data['ville']=$request->ville;
    $data['codepost']=$request->Codepost;
    $data['email']=$request->email;
    $data['adresse_social_media']=$request->adresse_social;
    $data['effectif']=$request->effectif;
    $data['codeentreprise']=md5($request->codeentreprise);
    $data['lat_loc']=$request->lat_loc;
    $data['long_loc']=$request->long_loc;
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
    $path=$files->store('public/storage/image_entreprise');
    $data['image_entreprise']=$path;

    DB::table('tb1_entreprises')->insert($data);
   

return Redirect::to('/loginentreprise');
/*
echo "<pre>";
print_r($data);
echo "</pre>";
*/
    }

  public function createemploye(Request $request)
    {

    	 
    	 $id_entreprise=$request->Nomentreprise;
    	 $codeentreprise=md5($request->code_entreprise);

    
        $data=array();
    $data['id_employe']=$request->id_employe;
    $data['id_entreprises']=$request->Nomentreprise;

    $data['nom_prenom']=$request->Nom_prenom;
    $data['post']=$request->post;
    $data['email']=$request->email;
    $data['tel']=$request->tel;
    $data['sexe']=$request->sexe;
    $data['password']=md5($request->password);
    

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
    $path=$files->store('public/storage/image_employe');
    $data['image_employe']=$path;
$entreprises_info=DB::table('tb1_entreprises')
      ->where('id_entreprise',$request->Nomentreprise)
      ->where('codeentreprise',md5($request->code_entreprise))
      ->first();
      
      if($entreprises_info){

    DB::table('tb1_employes')->insert($data);
     return Redirect::to('/loginemploye');
   

}else{
	Session::put('messageE',"Le code de l'entreprise est incorrect"); 
	 return Redirect::to('/inscriptionemploye');
   
}

  
/*

echo "<pre>";
print_r($data);
echo "</pre>";
*/
    }
     public function verification(){
if(Session::get('id_employe')){
 return Redirect::to('/Commande');
   
}else{
   return Redirect::to('/loginemploye');
   
}
    
   
}
public function Commande(Request $request){

 $pdata=array();
      
        $pdata['etat_paiement']=0;
          $pdata['created_at']=date('Y-m-d H:i:s');
      $payment_id=DB::table('tb1_paiement')

      ->insertGetId($pdata);

      $odata=array();
      $odata['id_employe']=Session::get('id_employe');
      $odata['payment_id']=$payment_id;
      $odata['commande_total']=Cart::total();
      $odata['commande_status']='en attendant';
      $odata['created_at']=date('Y-m-d H:i:s');

      $id_commande=DB::table('tb1_commandes')
               ->insertGetId($odata);
  
     $contents=Cart::content();
     $oddata=array();

     foreach ($contents as  $v_content) 
     {
        $oddata['id_commande']=$id_commande;
        $oddata['id_produit']=$v_content->id;
        $oddata['product_name']=$v_content->name;
        $oddata['product_prix']=$v_content->price;
        $oddata['product_sales_quantity']=$v_content->qty;
        $oddata['created_at']=date('Y-m-d H:i:s');

        DB::table('tb1_commandes_details')
            ->insert($oddata);

     }

return view('Pages.commande');
}
public function logoututilisateur(){
    //Session::put('admin_name',null);
    //Session::put('admin_id',null);  
    Cart::destroy();
    Session::flush();  
    return Redirect::to('/index');
    } 
        public function HistoireCommande(){
           $this->AdminAuth();
           $id_employe=Session::get('id_employe');
            $all_commande_info=DB::table('tb1_commandes')
    ->join('tb1_employes','tb1_employes.id_employe','=','tb1_commandes.id_employe')
    ->select('tb1_commandes.*','tb1_employes.nom_prenom')
->where('tb1_employes.id_employe', $id_employe)
   ->paginate(5);    
                  
   //   echo "<pre>";
   // print_r($all_product_info);
   //   echo "</pre>";
   //   exit();
       $all_commande_info=view('Pages.commandeemploye')
               ->with('all_commande_info',$all_commande_info);
       return view('info_employe')
               ->with('Pages.commandeemploye',$all_commande_info); 
    
   
   }

    public function viewcommandeE($id_commande)
         {   $this->AdminAuth();
          $id_employe=Session::get('id_employe');
            $all_commande_info=DB::table('tb1_commandes')

    ->join('tb1_employes','tb1_employes.id_employe','=','tb1_commandes.id_employe')

   ->join('tb1_commandes_details','tb1_commandes.id_commande','=','tb1_commandes_details.id_commande')
    ->select('tb1_commandes.*','tb1_commandes_details.*','tb1_employes.*')
    ->where('tb1_commandes.id_commande',$id_commande)
    ->where('tb1_employes.id_employe',$id_employe)
    ->get();
    
                  
   //   echo "<pre>";
   // print_r($all_product_info);
   //   echo "</pre>";
   //   exit();
       $all_commande_info=view('Pages.commande_details')
               ->with('all_commande_info',$all_commande_info);
       return view('info_employe')
               ->with('Pages.commande_details',$all_commande_info); 





      }
     public function order_place(Request $request)
    {

      return view('Pages.validation');

    }
    public function contactutilisateur(){
       $this->AdminAuth();
    $id=Session::get('id_employe');
     $profil_info=DB::table('tb1_employes')
    ->where('id_employe',$id)
    ->first();
    $profil_info=view('Pages.contact_employe')->with('profil_info',$profil_info);
return view('info_employe')->with('Pages.contact_employe',$profil_info);

   }
   public function profilutilisateur(){
     $this->AdminAuth();
    $id=Session::get('id_employe');
     $profil_info=DB::table('tb1_employes')
    ->where('id_employe',$id)
    ->first();
    $profil_info=view('Pages.profil')->with('profil_info',$profil_info);
return view('info_employe')->with('Pages.profil',$profil_info);
      
   }
      public function profiledit(Request $request){
        $this->AdminAuth();
    $id=Session::get('id_employe');

     $data=array();
  
    $data['nom_prenom']=$request->Nom_prenom;
    $data['tel']=$request->tel;
    $data['email']=$request->email;
    $data['post']=$request->post;
     DB::table('tb1_employes')->where('id_employe',$id)
    ->update($data);

    return Redirect::to('/profilutilisateur');
    
      
   }
   public function rating(Request $request){
    if(Session::get('id_employe')){
 
     $data=array();
     $id=Session::get('id_employe');
      $data['id_evaluation']=$request->id_evaluation;
    $data['id_produit']=$request->produit_id;
    $data['note']=$request->star; 
    $data['id_employe']=$id;
   
    DB::table('tb1_evaluation')
            ->insert($data);

    return Redirect::to('/view_product/'.$request->produit_id);
  }else{

  }
     return Redirect::to('/loginemploye');

    } 
  public function AdminAuth(){
      $id_employe=Session::get('id_employe');
      if($id_employe){
        return;
      }else{
       return Redirect::to('/loginemploye')->send();

      }
    }
}
