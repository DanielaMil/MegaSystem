<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AplicacionController extends Controller
{
    public function Inicio(REQUEST $request)
    {
        return view('layouts/app');
    }
/*
    public function Inicio2(REQUEST $request)
    {
        return view('Mantenedor/Registrar');
    }
*/
//********************Matricula********************* */
    public function Matricula(REQUEST $request)
    {
        return view('Mantenedor.MatriculaFrm');
    }

    public function DatosMatricula(Request $dato)
    {
        $_auxdni = $dato->input('txtDni');
        $datos = DB::select("call buscarAlumnodni(?)",array($_auxdni));
        //return $datos;
        return view('Mantenedor.MatriculaFrmRegistro',['datos'=>$datos]);

        //return   view('Mantenedor.MatriculaFrm',compact(datos));
    } 
//********************FIN_Matricula********************* */

}
