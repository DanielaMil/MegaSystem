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
Route::get('/matricula', 'AplicacionController@Matricula')->name('matricula');

// **********************MATRICULA***********************************
route::get('/inicio','AplicacionController@Matricula')->name('matricula01');
route::post('/buscarAlumno','AplicacionController@buscarAL')->name('buscar_AL');
route::post('/buscarApoderado','AplicacionController@buscarAP')->name('buscar_AP');
route::post('/buscarPromotor','AplicacionController@buscarPromotor')->name('buscar_Promotor');

route::post('/matriculaRegistro','AplicacionController@matriculaRegistro')->name('matriculaRegistro');
route::post('/cargarGrupo','AplicacionController@listarGrupo')->name('listarGrupo');
route::post('/buscarMontoMatricula','AplicacionController@buscarMontoMatricula')->name('buscarMontoMatricula');
route::post('/listarMensualidad','AplicacionController@listarMensualidad')->name('listarMensualidad');
route::post('/cantidad','AplicacionController@cantidadCelAp')->name('cantidadCelularAP');
route::post('/validarImporte','AplicacionController@validarImporte')->name('validarImporte');
route::post('/validarDescuento','AplicacionController@validarDescuento')->name('validarDescuento');
route::post('/guardar_Alumno','AplicacionController@guardar_Alumno')->name('guardar_Alumno');
route::post('/guardar_Apoderado','AplicacionController@guardar_Apoderado')->name('guardar_Apoderado');

route::post('/verificarAlumno','AplicacionController@verificarAlumno')->name('verificarAlumno');
route::post('/verificarApoderado','AplicacionController@verificarApoderado')->name('verificarApoderado');
route::post('/verificarMatricula','AplicacionController@verificarMatricula')->name('verificarMatricula');




route::post('/auxfuncion','AplicacionController@auxfuncion')->name('auxfuncion');


//************************FIN_MATRICULA********************************* */
/*
Route::get('/matricula2', 'AplicacionController@Matricula2')->name('matricula2');
route::post('/matricula2/buscarAlumno','AplicacionController@buscarAL')->name('buscar_AL');
Route::get('/matricula', 'AplicacionController@Matricula')->name('matricula');*/

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
Route::post('/pagos/duplicado', 'pagosController@duplicado')->name('duplicado');

///*****************************************REPORTE 1*** */

Route::get('/CantidadPorGrupo', 'AplicacionController@CantidadPorGrupo')->name('CantidadPorGrupo');

///*****************************************REPORTE 2*** */

Route::get('/alumnosPorCiclo', 'AplicacionController@alumnosPorCiclo')->name('alumnosPorCiclo');
Route::post('/grupoxcurso','AplicacionController@grupoXCurso')->name('grupoXCurso');

Route::get('/alumnosEgresados', 'AplicacionController@alumnosEgresados')->name('alumnosEgresados');
Route::get('/egresadosPorCurso', 'AplicacionController@listarEgresadosPorCurso')->name('listarEgresadosPorCurso');
Route::get('/cursos', 'AplicacionController@listarCursos')->name('listarCursos');
Route::get('/ciclos', 'AplicacionController@mostrarCiclo')->name('mostrarCiclo');

Route::get('/alumnosPorCiclo', 'reporte3Controller@alumnosPorCiclo')->name('alumnosPorCiclo');
Route::get('/listado', 'reporte3Controller@listado')->name('listado');
