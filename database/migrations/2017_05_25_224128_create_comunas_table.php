<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunas',function(Blueprint $table){
            $table->increments('id');
            $table->integer('regions_id')->unsigned();
            //Agregado para la relacion many to many.
            $table->integer('catastrofes_id')->unsigned();
            //
            $table->string('nombre_com');
            $table->rememberToken();
            $table->timestamps();
            /*$table->foreign('catastrofe_id')->references('id')->on('catastrofes')->onDelete('cascade');
            $table->foreign('regions_id')->references('id')->on('regions')->onDelete('cascade');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comunas');
    }
}
