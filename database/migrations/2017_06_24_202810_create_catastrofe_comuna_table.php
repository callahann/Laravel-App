<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Tabla intermedia para relacion catastrofes - comuna, many to many.

class CreateCatastrofeComunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catastrofe_comuna',function(Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->integer('catastrofe_id')->unsigned();
            $table->foreign('catastrofe_id')->references('id')->on('catastrofes')->onDelete('cascade');
            $table->integer('comuna_id')->unsigned();
            $table->foreign('comuna_id')->references('id')->on('comunas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catastrofe_comuna');
    }
}
