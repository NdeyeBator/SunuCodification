<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('etudiant_id')->unsigned();
            $table->integer('chambre_id')->unsigned();
            $table->foreign('etudiant_id')->references('id')->on('etudiants')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('chambre_id')->references('id')->on('chambres')
                          ->onDelete('cascade')
                          ->onUpdate('cascade');
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
        Schema::dropIfExists('reservations');
    }
}
