<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTb1EmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb1_employes', function (Blueprint $table) {
             $table->increments('id_employe');
            $table->integer('id_entreprises')->unsigned();
 $table->foreign('id_entreprises')->references('id_entreprise')->on('tb1_Entreprises')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nom_prenom');
             $table->string('post');
             $table->string('image_employe');
             $table->string('email');
             $table->integer('tel');
             $table->string('sexe');
             $table->string('password');
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
        Schema::dropIfExists('tb1_employes');
    }
}
