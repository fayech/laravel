<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTb1CommandesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb1_commandes_details', function (Blueprint $table) {
           $table->increments('id_commande_details');
            $table->integer('id_commande')->unsigned();
          $table->foreign('id_commande')->references('id_commande')->on('tb1_commandes')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('id_produit')->unsigned();
        $table->foreign('id_produit')->references('id_produit')->on('tb1_produits')->onUpdate('cascade')->onDelete('cascade');
            $table->string('product_name');
            $table->double('product_prix');
            $table->integer('product_sales_quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb1_commandes_details', function (Blueprint $table) {
            //
        });
    }
}
