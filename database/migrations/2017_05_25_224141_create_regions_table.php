<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions',function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre_reg');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('users',function(Blueprint $table){
            $table->foreign('tipos_id')->references('id')->on('tipos')->onDelete('cascade');
            /*$table->foreign('logs_id')->references('id')->on('logs')->onDelete('cascade');
            $table->foreign('medidas_id')->references('id')->on('medidas')->onDelete('cascade');*/
        });

        Schema::table('logs',function(Blueprint $table){
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('medidas',function(Blueprint $table){
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('catastrofes_id')->references('id')->on('catastrofes');
        });

        Schema::table('comentarios',function(Blueprint $table){
            $table->foreign('medidas_id')->references('id')->on('medidas')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });

        /*Schema::table('medidas',function(Blueprint $table){
            $table->foreign('catastrofes_id')->references('id')->on('catastrofes')->onDelete('cascade');
        });   */

        Schema::table('recoleccions',function(Blueprint $table){
            $table->foreign('medidas_id')->references('id')->on('medidas')->onDelete('cascade');
            $table->foreign('catastrofes_id')->references('id')->on('catastrofes')->onDelete('cascade');
        }); 

        Schema::table('bingos',function(Blueprint $table){
            $table->foreign('medidas_id')->references('id')->on('medidas')->onDelete('cascade');
            $table->foreign('catastrofes_id')->references('id')->on('catastrofes')->onDelete('cascade');
        }); 

        Schema::table('donacions',function(Blueprint $table){
            $table->foreign('medidas_id')->references('id')->on('medidas')->onDelete('cascade');
             $table->foreign('catastrofes_id')->references('id')->on('catastrofes')->onDelete('cascade');
        }); 

        Schema::table('voluntariados',function(Blueprint $table){
            $table->foreign('medidas_id')->references('id')->on('medidas')->onDelete('cascade');
            $table->foreign('catastrofes_id')->references('id')->on('catastrofes')->onDelete('cascade');
        });  

        Schema::table('comunas',function(Blueprint $table){
            $table->foreign('regions_id')->references('id')->on('regions')->onDelete('cascade');
            /*$table->foreign('catastrofe_id')->references('id')->on('catastrofes')->onDelete('cascade');*/
        }); 
        

    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
