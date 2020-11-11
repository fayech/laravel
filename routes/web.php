<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//gestion de liveur

//endgestion de liveur
//gestion de l'entreprise
Route::post('/editprofil','EntrepriseController@editprofil');

Route::post('/rating','utilisateurController@rating');
Route::get('/profil','EntrepriseController@profil');

Route::get('/logoutentreprise','EntrepriseController@logoutentreprise');
Route::get('/adminentreprise','EntrepriseController@index');
Route::get('/affichecommande','EntrepriseController@commande');
Route::get('/affichecommande/{id_commande}','EntrepriseController@detailscommande');
//end-gestion de l'entreprise

//login entreprise & employe

Route::get('/loginentreprise','utilisateurController@entreprise');
Route::get('/loginemploye','utilisateurController@employe');
Route::get('/pwdoublie','utilisateurController@passwordoublie');
Route::post('/oublie','utilisateurController@password');

Route::post('/save_entreprise','utilisateurController@createentreprise');
Route::post('/save_employe','utilisateurController@createemploye');
Route::get('/inscriptionemploye','utilisateurController@inscriptionemploye');
Route::get('/inscriptionentreprise','utilisateurController@entreprise');
Route::get('/view_commandeE/{id_commande}','utilisateurController@viewcommandeE');
Route::get('/Cartliveur','AdminController@Cartliveur');

Route::get('/Carteentreprises','AdminController@Carteentreprises');
Route::post('/connexion','utilisateurController@connexion');

Route::get('/verification','utilisateurController@verification');
Route::get('/logoututilisateur','utilisateurController@logoututilisateur');
Route::get('/HistoireCommande','utilisateurController@HistoireCommande');

Route::post('/order-place','utilisateurController@order_place');
Route::get('/contactutilisateur','utilisateurController@contactutilisateur');
Route::get('/profilutilisateur','utilisateurController@profilutilisateur');
Route::post('/profiledit','utilisateurController@profiledit');
Route::get('/Commande','utilisateurController@Commande');
Route::post('/utilisateurContact','ContactController@ContactE');

Route::get('/facture','CommandeController@facture');
Route::get('/facture/pdf','CommandeController@pdf');
Route::get('/Retour','HomeController@Retour');
//login entreprise & employe
//show font-office desgin Route
Route::get('/index','HomeController@index');
Route::get('/details','HomeController@details');
Route::get('/view_product/{product_id}','HomeController@product_details');

Route::post('/add-to-cart','CartController@add_to_cart');
Route::post('/addremise-to-cart','CartController@addremise_to_cart');
Route::get('/delet-to-cart/{product_id}','CartController@delet_to_cart');
Route::get('/delet_Cart','CartController@delet');
Route::get('/view_Cart','CartController@view_Cart');
Route::get('/delet-view-cart/{product_id}','CartController@delet_view_cart');
Route::post('/update_view_cart','CartController@update_view_cart');
Route::get('/product_by_category/{category_id}','HomeController@show_product');
Route::get('/Start&Go','HomeController@Start');
Route::get('/Histoire','HomeController@Histoire');
Route::get('/FAQ','HomeController@FAQ');
Route::get('/Blogdetails','HomeController@Blogdetails');

Route::get('/Contact','HomeController@Contact');
Route::get('/Blog','HomeController@Blog');


//show end-of font-office desgin Route



//adminlogin
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/entreprise','AdminController@adminentreprise');
Route::get('/delet_entreprise/{id_entreprise}','AdminController@delet_entreprise');
Route::get('/list_employe/{id_entreprise}','AdminController@list_employe');

//endofadminlogin
//admin
Route::get('/dashboard','SuperAdminController@index');

Route::get('/Logout','SuperAdminController@logout');


Route::get('/admin','AdminController@index');
//admincontact affichageContact
Route::get('/ContactU','SuperAdminController@Contactutilisateur');
Route::get('/delet_Contact/{Contact_id}','SuperAdminController@delet_Contact');
//endofadmincontact affichageContact


//fournisseur
Route::get('/Fournisseur','FournisseurController@all_Fournisseur');
Route::post('/save_Fournisseur','FournisseurController@save_Fournisseur');
Route::get('/delet_Fournisseur/{Fournisseur_id}','FournisseurController@delet_Fournisseur');
Route::get('/edit_Fournisseur/{Fournisseur_id}','FournisseurController@edit_Fournisseur');
Route::post('/Update_Fournisseur/{Fournisseur_id}','FournisseurController@Update_Fournisseur');

Route::get('/unactive-Fournisseur/{Fournisseur_id}','FournisseurController@unactive_Fournisseur');

Route::get('/active-Fournisseur/{Fournisseur_id}','FournisseurController@active_Fournisseur');
//end of fournisseur
//categories fournisseur
Route::get('/Categories','CategorieController@all_categorie');
Route::post('/save_categories','CategorieController@save_categorie');
Route::get('/unactive_Categorie/{Categorie_id}','CategorieController@unactive_Categorie');
Route::get('/active_Categorie/{Categorie_id}','CategorieController@active_Categorie');
Route::get('/delet_Categorie/{Categorie_id}','CategorieController@delet_Categorie');
Route::get('/edit_Categorie/{Categorie_id}','CategorieController@edit_Categorie');
Route::post('/Update_Categorie/{Categorie_id}','CategorieController@Update_Categorie');



//end-categories fournisseur
//end-produits
//end-promotion
Route::get('/promotion','ProduitController@promotion');
Route::get('/edit_promotion/{id_produit}','ProduitController@edit_promotion');
Route::post('/Update_promotion/{id_produit}','ProduitController@Update_promotion');
Route::get('/unactive_promotion/{id_produit}','ProduitController@unactive_promotion');
Route::get('/active_promotion/{id_produit}','ProduitController@active_promotion');
//end-of promotion
//end-produits
Route::get('/Produits','ProduitController@index');
Route::get('/Produitsfavourite','ProduitController@produitfavourite');

Route::post('/save_produit','ProduitController@create');
Route::get('/unactive_Produit/{id_produit}','ProduitController@unactive_Produit');
Route::get('/active_Produit/{id_produit}','ProduitController@active_Produit');
Route::get('/delet_Produit/{id_produit}','ProduitController@delet_Produit');
Route::get('/edit_Produit/{id_produit}','ProduitController@edit_Produit');
Route::post('/Update_Produit/{id_produit}','ProduitController@Update_Produit');
Route::get('/searchProduit','ProduitController@search');
//end-of-produits
//end-Role
Route::get('/Role','RoleController@index');
Route::get('/delet_Role/{id_Role}','RoleController@delet_Role');
Route::get('/edit_Role/{id_Role}','RoleController@edit_Role');
Route::post('/Update_Role/{id_Role}','RoleController@Update_Role');
Route::post('/save_Role','RoleController@save_Role');


//end-of-Role
//end-users
Route::get('/User','UserController@index');
Route::get('/connexionUser','UserController@connexionUser');


Route::get('/delet_User/{id_users}','UserController@delet_User');
Route::get('/edit_User/{id_users}','UserController@edit_User');
Route::post('/save_User','UserController@save_User');
Route::get('/active_User/{id_users}','UserController@active_User');
Route::get('/unactive_User/{id_users}','UserController@unactive_User');
Route::post('/Update_User/{id_users}','UserController@Update_User');



//end-of-users
//end-commande
Route::get('/lesCommande','CommandeController@index');
Route::get('/view_commande/{id_commande}','CommandeController@viewcommande');
Route::get('/active_Commande/{id_Commande}','CommandeController@active_Commande');
Route::get('/unactive_Commande/{id_Commande}','CommandeController@unactive_Commande');

//end-commande
Route::get('/paiement','CommandeController@paiement');
Route::get('/listE_commande/{id_commande}','CommandeController@listcommandeE');

Route::get('/active_paiement/{id_paiement}','CommandeController@active_paiement');
Route::get('/unactive_paiement/{id_paiement}','CommandeController@unactive_paiement');
Route::get('/delet_paiement/{id_paiement}','CommandeController@delet_paiement');
//end-of-commande
//end-paiement
Route::get('/etat-paiement','paiementController@index');
Route::get('/unactive_etatpaiement/{paiement_id}','paiementController@active_etatpaiement');
Route::get('/active_etatpaiement/{paiement_id}','paiementController@unactive_etatpaiement');
//end-of-paiement

//Charts
Route::get('/chartEntreprise','ChartController@index');

Route::get('/admincharts','ChartController@admin');

//end-charts
//prod_favoris
Route::get('/favoris/{id_produit}','ProduitController@prodfavoris');



//end prod_favoris
//backend Slider
Route::post('/save-Slider','SliderController@save_Slider');
Route::get('/all-Slider','SliderController@all_Slider');
Route::get('/unactive-Slider/{Slider_id}','SliderController@unactive_Slider');

Route::get('/active-Slider/{Slider_id}','SliderController@active_Slider');
Route::get('/delet-Slider/{Slider_id}','SliderController@delet_Slider');
//backend Slider
//backend  Articles

Route::get('/admin-articles','articlesController@index');
Route::post('/save-articles','articlesController@save_article');

Route::get('/delet_articles/{id_articles}','articlesController@delet_articles');

Route::get('/edit_articles/{id_articles}','articlesController@edit_article');

Route::post('/Update_articles/{id_articles}','articlesController@Update_article');
Route::get('/Blogdetails/{id_articles}','HomeController@Blogdetails');

//backend end-of Articles
//API  webservices
Route::post('/APIconnexion','APIController@connexion');
Route::get('/test','APIController@index');
//API  end-ofwebservices