<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTb1UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb1_users', function (Blueprint $table) {
            $table->increments('id_users');
            $table->integer('id_role')->unsigned();
            $table->foreign('id_role')->references('id_role')->on('tb1_roles')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nom_complet');
            $table->string('image_user');
            $table->string('email');
            $table->string('password');
            $table->integer('tel');
            $table->String('code_postal');
            $table->integer('publication_status');
            $table->integer('Connexion');
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
        Schema::dropIfExists('tb1_users');
    }
}
