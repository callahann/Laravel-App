<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


//CUALQUIER PERSONA
Route::get('/catastrofes', 'CatastrofeController@index')->name('catastrofes_lista');
Route::get('/catastrofes/detalle/{id}', 'CatastrofeController@show');
Route::get('/error','ErrorControlador@create');
Route::get('/medida/comentar', 'CatastrofeController@comentarMedida');
/*Route::get('/catastrofes/update/{id}', 'CatastrofeController@update');*/

//CUALQUIER LOGGEADO (Voluntario o Organización)

	Route::get('/catastrofes/detalle/{id}/crear_bingo', 'MedidaController@createBingo');
	Route::get('/catastrofes/detalle/{id}/crear_recoleccion', 'MedidaController@createRecoleccion');
	Route::get('/catastrofes/detalle/{id}/crear_voluntariado', 'MedidaController@createVoluntariado');
	Route::get('/catastrofes/detalle/{id}/crear_donacion', 'MedidaController@createDonacion');

	Route::name('store_bingo_path')->post('/catastrofes', 'MedidaController@storeBingo')->middleware('auth');
	Route::name('store_recoleccion_path')->post('/catastrofes/detalle/4', 'MedidaController@storeRecoleccion')->middleware('auth');
	Route::name('store_voluntariado_path')->post('/catastrofes/detalle/3', 'MedidaController@storeVoluntariado')->middleware('auth');
	Route::name('store_donacion_path')->post('/catastrofes/detalle/5', 'MedidaController@storeDonacion')->middleware('auth');


//ADMIN
Route::group(['middleware' => 'userAdmin'], function(){
	Route::get('/admin', 'AdminController@index');
	Route::get('/admin/create', 'AdminController@create');
	Route::name('store_catastro_path')->post('/admin', 'AdminController@store');
	Route::get('/admin/{id}', 'AdminController@show');
});


