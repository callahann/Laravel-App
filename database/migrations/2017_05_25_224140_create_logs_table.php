<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs',function(Blueprint $table){
            $table->increments('id');
            $table->date('fecha');
            $table->time('hora');
            $table->string('accion',50);
            $table->rememberToken();
            $table->timestamps();

            //NUEVO (Llaves foráneas)
            $table->integer('users_id')->unsigned();
            //$table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');

        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
