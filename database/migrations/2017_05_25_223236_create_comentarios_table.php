<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios',function(Blueprint $table){
             $table->increments('id');
             $table->integer('medidas_id')->unsigned();
             $table->integer('users_id')->unsigned();
             $table->string('descripcion',1024);
             $table->date('fecha');
             $table->time('hora');
             $table->rememberToken();
             $table->timestamps();
             //$table->foreign('medidas_id')->references('id')->on('medidas')->onDelete('cascade');
             //$table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
             //CAMBIE ALGO
        }); 
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
