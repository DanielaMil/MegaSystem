<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'AplicacionController@Inicio')->name('inicio');
Route::get('/a', 'AplicacionController@Inicio2')->name('inicio2');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/matricula', 'AplicacionController@Matricula')->name('matricula');

// **********************MATRICULA*********************************
route::get('/matricula/inicio','AplicacionController@Matricula')->name('matricula01');
route::post('/matricula/buscarAlumno','AplicacionController@buscarAL')->name('buscar_AL');
route::post('/matricula/buscarApoderado','AplicacionController@buscarAP')->name('buscar_AP');
route::post('/matricula','AplicacionController@matriculaRegistro')->name('matriculaRegistro');
route::get('/matricula/cargarGrupo','AplicacionController@cargarGrupo')->name('cargarGrupo');
//************************FIN_MATRICULA******************************** */

Route::get('/matricula', 'AplicacionController@Matricula')->name('matricula');
Route::get('/pagos', 'AplicacionController@Pagos')->name('pagos');