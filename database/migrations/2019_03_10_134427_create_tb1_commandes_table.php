<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTb1CommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb1_commandes', function (Blueprint $table) {
            $table->increments('id_commande');           
            $table->integer('id_employe')->unsigned();
 $table->foreign('id_employe')->references('id_employe')->on('tb1_employes')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('payment_id');
            $table->double('commande_total');
            $table->integer('commande_status');
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
        Schema::dropIfExists('tb1_commandes');
    }
}
