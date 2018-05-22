<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /*

    MEDIDAS HERE
    
    */
    public function up()
    {
        Schema::create('elementos',function(Blueprint $table){
             $table->increments('id');
             $table->integer('medidas_id')->unsigned();
             $table->integer('recoleccions_id')->unsigned();
             $table->string('nombre_elem',20);
             $table->rememberToken();
             $table->timestamps();
             $table->foreign('medidas_id')->references('id')->on('medidas')->onDelete('cascade');
             $table->foreign('recoleccions_id')->references('id')->on('recoleccions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elementos');
    }
}
