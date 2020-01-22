<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class reporte3Controller extends Controller{

    public function alumnosPorCiclo(REQUEST $request)
    {

        return view('Mantenedor.ReporteAlumnosPorCiclo');
    }

    public function listado(REQUEST $request)
    {

        $cantidad = 3;
        $datos = DB::select('call cantidadAlumnosCiclo(?)', array($cantidad));
        
        if(count($datos) > 0){
            $data = [
                'estado' => true,
                'cod' => 200,
                'datos' => $datos
            ];
            return response()->json($data);
        }else{
            $data = [
                'estado' => false,
                'cod' => 101
            ];
        return response()->json($data);
        }
    }

}