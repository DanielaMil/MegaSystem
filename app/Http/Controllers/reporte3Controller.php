<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class reporte3Controller extends Controller{

    public function mostrarCiclo(REQUEST $request)
    {
        $datos = DB::select('call listarCiclos()', array());

        return response()->json($datos);
    }

}