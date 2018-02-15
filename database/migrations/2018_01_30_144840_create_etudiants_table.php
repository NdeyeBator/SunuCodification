<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('etudiants', function (Blueprint $table) {
          $table->increments('id');
          $table->string('numeroEtudiant');
          $table->string('email');
          $table->string('nomEtudiant');
          $table->string('prenomEtudiant');
          $table->string('genre');
          $table->integer('departement_id')->unsigned();
          $table->integer('formation_id')->unsigned();
          $table->string('password');
          $table->foreign('departement_id')->references('id')->on('departements')
                      ->onDelete('cascade')
                      ->onUpdate('cascade');
          $table->foreign('formation_id')->references('id')->on('formations')
                      ->onDelete('cascade')
                      ->onUpdate('cascade');
          $table->rememberToken();
          $table->timestamps();
          $table->boolean('admin')->default(0);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
