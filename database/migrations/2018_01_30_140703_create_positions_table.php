<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->increments('id');
            $table->String('description');
            $table->integer('chambre_id')->unsigned();
            $table->integer('batiment_id')->unsigned();
            $table->foreign('chambre_id')->references('id')->on('chambres')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('batiment_id')->references('id')->on('batiments')
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
        Schema::dropIfExists('positions');
    }
}
