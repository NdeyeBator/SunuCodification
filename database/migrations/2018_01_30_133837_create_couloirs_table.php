<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouloirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couloirs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numeroCouloir');
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
        Schema::dropIfExists('couloirs');
    }
}
