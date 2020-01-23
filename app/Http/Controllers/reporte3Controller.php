<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class reporte3Controller extends Controller{

    public function alumnosPorCiclo(REQUEST $request)
    {

        return view('Mantenedor.ReporteAlumnosPorCiclo');
    }

    // public function pdfReporteTotalAlumno(REQUEST $request)
    // {

    //     return view('Mantenedor.pdfReporteTotalAlumnos');
    // }

    public function imprimir(){
        
        $pdf = \PDF::loadView('Mantenedor.pdfReporteTotalAlumnos');
        // return $pdf->download('ReporteCantidadAlumnos.pdf');
        $pdf->setPaper('a4','landscape');

        return $pdf->stream();
    }

    public function listado(REQUEST $request)
    {

        //$cantidad = 3;
        $cantidad = $request->nroCiclos;
         if ($cantidad == ''){
            $cantidad=3;
         }
        
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

    public function validarNroCiclos(REQUEST $dato)
    {
        $nroCiclos = $dato->nroCiclos; //escribe  $auxIdApoderado = $Apoderado[0]->idApoderado;

        $datos = DB::select('call totalCiclos()', array()); //BD
        $cantidadCiclos = $datos[0]->nroCiclos;

        if ($nroCiclos > $cantidadCiclos) {
            $data = [
                'estado' => false,
                'cod'    => 100,
            ];
            return response()->json($data);
        }
        
    }

    public function verTotalCiclos(REQUEST $request)
    {
        $datos = DB::select("call totalCiclos()", array());
        $cantidadCiclos = $datos[0]->nroCiclos;

        if (count($datos) > 0) {
            $data = [
                'estado' => true,
                'cod' => 200,
                'datos' => $datos
            ];

            return response()->json($data);
        } else {

            $data = [
                'estado' => false,
                'cod' => 101,
                'datos' => $datos
            ];
            return response()->json($data);
        }
    }

}