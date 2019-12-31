<?php

/*
|---------------------------------------------------------------------------
| Web Routes
|------------------------------------------------------------------------------
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

// **********************MATRICULA***********************************
route::get('/matricula/inicio','AplicacionController@Matricula')->name('matricula01');
route::post('/matricula/buscarAlumno','AplicacionController@buscarAL')->name('buscar_AL');
route::post('/matricula/buscarApoderado','AplicacionController@buscarAP')->name('buscar_AP');
route::post('/matricula/buscarPromotor','AplicacionController@buscarPromotor')->name('buscar_Promotor');

route::post('/matricula','AplicacionController@matriculaRegistro')->name('matriculaRegistro');
route::post('/matricula/cargarGrupo','AplicacionController@listarGrupo')->name('listarGrupo');
route::post('/matricula/buscarMontoMatricula','AplicacionController@buscarMontoMatricula')->name('buscarMontoMatricula');
route::post('/matricula/listarMensualidad','AplicacionController@listarMensualidad')->name('listarMensualidad');
route::post('/matricula/cantidad','AplicacionController@cantidadCelAp')->name('cantidadCelularAP');
route::post('/matricula/validarImporte','AplicacionController@validarImporte')->name('validarImporte');
route::post('/matricula/validarDescuento','AplicacionController@validarDescuento')->name('validarDescuento');
route::post('/matricula/guardar_Alumno','AplicacionController@guardar_Alumno')->name('guardar_Alumno');
route::post('/matricula/guardar_Apoderado','AplicacionController@guardar_Apoderado')->name('guardar_Apoderado');

route::post('/matricula/verificarAlumno','AplicacionController@verificarAlumno')->name('verificarAlumno');
route::post('/matricula/verificarApoderado','AplicacionController@verificarApoderado')->name('verificarApoderado');



route::post('/matricula/volverInicio','AplicacionController@volverInicio')->name('volverInicio');


//************************FIN_MATRICULA******************************** */

Route::get('/matricula2', 'AplicacionController@Matricula2')->name('matricula2');
route::post('/matricula2/buscarAlumno','AplicacionController@buscarAL')->name('buscar_AL');
Route::get('/matricula', 'AplicacionController@Matricula')->name('matricula');

//********************PAGOS****** */
Route::get('/pagos', 'pagosController@Pagos')->name('pago');
Route::post('/pagos/buscarAlumno', 'pagosController@buscarAl')->name('buscarAlumnos');
Route::post('/pagos/llenarCombo', 'pagosController@llenarCombo')->name('llenar');
Route::post('/pagos/registrarCuota', 'pagosController@registrarCuota')->name('registrarCuota');
Route::post('/pagos/id', 'pagosController@obtenerID')->name('obtenerID');
Route::post('/pagos/pagar', 'pagosController@StorePago')->name('StorePago');
Route::post('/pagos/listarCuotas', 'pagosController@listarCuotas')->name('listarCuotas');
Route::post('/pagos/registrarPagos', 'pagosController@registrarPagos')->name('registrarPagos');
Route::post('/pagos/pagosIngresos', 'pagosController@pagosIngresos')->name('pagosIngresos');
