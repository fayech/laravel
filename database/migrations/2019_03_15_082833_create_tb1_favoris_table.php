<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTb1FavorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb1_favoris', function (Blueprint $table) {
            $table->increments('idfavoris');
            $table->integer('id_produit')->unsigned();
            $table->foreign('id_produit')->references('id_produit')->on('tb1_produits')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('id_employe')->unsigned();
            $table->foreign('id_employe')->references('id_employe')->on('tb1_employes')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('tb1_favoris');
    }
}
