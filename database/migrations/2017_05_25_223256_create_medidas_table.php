<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedidasTable extends Migration
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
        Schema::create('medidas',function(Blueprint $table){
             $table->increments('id');
             $table->integer('catastrofes_id');
             
             //$table->integer('catastrofes_id')->unsigned();
             //$table->boolean('aprobacion_medida');
             //$table->integer('progreso');
             //$table->date('fecha_inicio');
             //$table->date('fecha_termino');
             $table->rememberToken();
             $table->timestamps();
             
             /*$table->foreign('catastrofes_id')->references('id')->on('catastrofes')->onDelete('cascade');*/

             //NUEVO (Llaves foráneas)
            $table->integer('users_id')->unsigned();
            //$table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            //$table->foreign('catastrofes_id')->references('id')->on('catastrofes');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medidas');
    }
}
