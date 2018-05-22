<?php

use Illuminate\Database\Seeder;

//Seeder que genera el usuario admin en la base de datos.

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::create([
        	'id' => 1,
        	'nombre_tipo' => 'administrador',
        	'descripcion_tipo'=> 'lalala'
        	'permisos' => 'todo'
        	]);
    }
}
