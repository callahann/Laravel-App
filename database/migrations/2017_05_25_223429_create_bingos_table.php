<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBingosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bingos',function(Blueprint $table){
             $table->increments('id');
             $table->integer('medidas_id')->unsigned();
             $table->integer('catastrofes_id')->unsigned();
             //
             $table->boolean('aprobacion_medida')->default(false);
             $table->integer('progreso');
             $table->date('fecha_inicio');
             $table->date('fecha_termino');
             //
             $table->string('lugar_bingo',50);
             $table->float('monto_bingo');
             $table->float('meta_bingo');
             $table->string('actividad',100);
             $table->rememberToken();
             $table->timestamps();
             /*$table->foreign('medidas_id')->references('id')->on('medidas')->onDelete('cascade');
             $table->foreign('catastrofes_id')->references('id')->on('catastrofes')->onDelete('cascade');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bingos');
    }
}
