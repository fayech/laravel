<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\support\Facades\Redirect;
use Illuminate\Support\Facades\storage;
use App\Http\Controllers\Controller;
use App\tb1_produits;
use App\tb1_categories;
use ConsoleTVs\Charts\Facades\Charts;

use App\Charts\EntrepriseChart;
use Session;

session_start();


class ChartController extends Controller
{
    public function index(){
       
     /*
   $all_produit_info=DB::table('tb1_produits')
    ->join('tb1_categories','tb1_categories.id_categorie','=','tb1_produits.id_categorie')
    ->select('tb1_produits.*','tb1_categories.name_categorie')
    ->get();
    */
  /*


  $chart=new EntrepriseChart;
    $chart=Charts::database(tb1_produits::all(),'bar','highcharts')
    ->elementLabel("Total")
    ->dimensions(1000,500)
    ->responsive(false)
    ->groupBy('produit_nom');
    
    return view('adminentreprise.Chartsentreprise', ['chart' => $chart]);
    $chart=new EntrepriseChart;
    $chart->labels(['One', 'Two', 'Three']);
    $chart->dataset('My dataset1', 'line', [1, 2 ,3]);
 */
     /*
$chart = collect([]); 
     $chart=new EntrepriseChart;
       $chart->dataset('My dataset', 'line',$all_produit_info->values());
             $chart->title('Produits plus commandés');
               $chart->labels('total produits');
             
              
               
              return view('adminentreprise.Chartsentreprise',compact('chart'));

*/

/*
$today_users=DB::table('tb1_produits')
    ->join('tb1_categories','tb1_categories.id_categorie','=','tb1_produits.id_categorie')
    ->select('tb1_produits.produit_prix','tb1_categories.name_categorie')
    ->get();

$chart = new EntrepriseChart;
$chart->labels(['2 days ago', 'Yesterday', 'Today']);
$chart->dataset('My dataset', 'line',[$today_users]);


   $chart = Charts::multi('bar' ,'material')
        ->title("Ahla bik")
        ->dimensions(0,400)
        ->template("material")
        ->dataset('Element 1', [5,20,100])
        ->dataset('Element 2', [15,30,80])
        ->dataset('Element 3', [25,10,40])
        ->labels(['One', 'Two', 'Threee']);


*/
         $this->entrepriseAuth(); 
        $today_users=DB::table('tb1_produits')
    ->join('tb1_categories','tb1_categories.id_categorie','=','tb1_produits.id_categorie')
    ->select('tb1_produits.produit_prix','tb1_categories.name_categorie')
    ->get();

        return view('adminentreprise.Chartsentreprise',$today_users);
    }
     public function admin(){
       $this->AdminAuth(); 
      return view('admin.Chartadmin');
     }
public function entrepriseAuth(){
         
      $id_employe=Session::get('id_employe');
      if($id_employe){
        return;
      }else{
       return Redirect::to('/loginemploye')->send();

      }
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
