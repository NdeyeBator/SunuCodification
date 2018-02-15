<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContraintesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contraintes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('valeur');
            $table->integer('batiment_id')->unsigned();
            $table->integer('etage_id')->unsigned();
            $table->foreign('batiment_id')->references('id')->on('batiments')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('etage_id')->references('id')->on('etages')
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
        Schema::dropIfExists('contraintes');
    }
}
