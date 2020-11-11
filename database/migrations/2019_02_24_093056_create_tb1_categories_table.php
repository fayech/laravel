<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTb1CategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb1_categories', function (Blueprint $table) {
              $table->increments('id_categorie');
             $table->string('name_categorie');
            $table->integer('id_fournisser')->unsigned();
         $table->foreign('id_fournisser')->references('id')->on('tb1_fournisseurs')->onUpdate('cascade')->onDelete('cascade');
            $table->longText('categorie_description');
            $table->string('categorie_image');
            $table->integer('publication_status');
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
        Schema::dropIfExists('tb1_categories');
    }
}
