<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTb1ContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb1_contact', function (Blueprint $table) {
            $table->increments('id_contact');
            $table->integer('id_employe')->unsigned();
            $table->foreign('id_employe')->references('id_employe')->on('tb1_employes')->onUpdate('cascade')->onDelete('cascade');
              $table->string('sujet');
            $table->string('message');

              
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
        Schema::dropIfExists('tb1_contact');
    }
}
