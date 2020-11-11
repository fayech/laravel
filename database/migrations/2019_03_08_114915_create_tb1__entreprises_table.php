<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTb1EntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb1_Entreprises', function (Blueprint $table) {
             $table->increments('id_entreprise');
            $table->string('nom_entreprise');
            $table->string('organisation');
            $table->string('ville');
            $table->string('codepost');
            $table->string('email');
            $table->string('adresse_social_media');
            $table->string('image_entreprise');
            $table->string('effectif');
            $table->string('codeentreprise');
            $table->float('lat_loc');
            $table->float('long_loc');
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
        Schema::dropIfExists('tb1_Entreprises');
    }
}
