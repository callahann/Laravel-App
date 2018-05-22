<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatastrofesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('catastrofes',function(Blueprint $table){
            $table->increments('id');
            $table->integer('users_id')->unsigned();
            //Agregado para relacion many to many.
            $table->integer('comuna_id')->unsigned();
            $table->string('nombre_catas');
            $table->string('tipo_catas');
            $table->string('descripcion_c');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            /*$table->foreign('comuna_id')->references('id')->on('comunas')->onDelete('cascade');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catastrofes');
    }
}
