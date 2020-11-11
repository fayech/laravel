<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTb1FournisseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb1_fournisseurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('ville');
            $table->integer('telephone');
            $table->string('email');
            $table->string('specialite');
            $table->integer('statut_publication');

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
        Schema::dropIfExists('tb1_fournisseurs');
    }
}
