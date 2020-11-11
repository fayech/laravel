<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTb1ProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb1_produits', function (Blueprint $table) {
            $table->increments('id_produit');
            $table->integer('id_categorie')->unsigned();
        $table->foreign('id_categorie')->references('id_categorie')->on('tb1_categories')->onUpdate('cascade')->onDelete('cascade');
            $table->string('produit_nom');
            $table->integer('produit_qte');
            $table->longText('produit_description');
            $table->integer('publication_status');
            $table->double('produit_prix');
            $table->string('produit_image');
            $table->integer('promotion');
            $table->integer('remise');
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
        Schema::dropIfExists('tb1_produits');
    }
}
