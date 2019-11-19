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
        $_numcade = strlen ($_auxdni);
        if ($_numcade = 8) {
            $datos = DB::select("call buscarAlumnodni(?)", array($_auxdni));
            return view('Mantenedor.MatriculaFrm', ['datos' => $datos]);
        } else {
            return view('Mantenedor.MatriculaFrm');
            //return view('Mantenedor.MatriculaFrm', ['_auxdni' => $_auxdni]);
        }
    }
    //********************FIN_Matricula********************* */
    public function Ingresos(REQUEST $request)
    {
        return view('Mantenedor.Ingresos');
    }
}
