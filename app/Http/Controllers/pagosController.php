<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class pagosController extends Controller
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
    //********************Matricula************************ */

    public function buscarAl(Request $dato)
    {
        $DNI = $dato->DNI;
        $_numcade = strlen($DNI);
        if ($_numcade == 8) {
            $datos = DB::select('call nombreDni(?)', array($DNI));
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
        } else {
            $data = [
                'estado' => false,
                'cod'    => 100
            ];
            return response()->json($data);
        }
    }
    public  function StorePago(Request $dato){
        
        $importe = $dato->importe;
        $recibo = $dato->recibo;
        $idcuota = $dato->idcuota;
        
        if (true) {
            $datos = DB::select('call registrarPago(?,?,?)', array($importe,$recibo,$idcuota));
            
            return response()->json($datos);
            
        } else {
            $data = [
                'estado' => false,
                'cod'    => 100
            ];
            return response()->json($data);
        }
    }

    public function llenarCombo(Request $dato){
            $datos = DB::select('call mostrarConcepto()');
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
        return response()->json($data);
    }
    //********************FIN_Matricula********************* */
    public function Pagos(Request $request)
    {
        return view('Mantenedor.Pagos');
    }

    public function registrarCuota(Request $dato){
        $monto = $dato->monto;
        $concepto= $dato->concepto;
        $matricula= $dato->matricula;
        $feVencimiento= $dato->feVencimiento;
        $descuento= $dato->descuento;
        $razon= $dato->razon;
        $saldo= $dato->saldo;
        $pagado = $dato->pagado;
        $datos = DB::select("call registrarCuotaIngreso(?,?,?,?,?,?,?,?)",array($monto,$feVencimiento,$concepto,$matricula,$saldo,$razon,$descuento,$pagado));
        return response()->json(true);
    }

    public function obtenerID(Request $dato){
        $datos = DB::select("call obtenerID()");
        return response()->json(true);
    }
    
    public function listarCuotas(Request $dato)
    {
        
        $idMatricula = $dato->idMatricula;
        
        $_numcade = strlen($idMatricula);
        // return response()->json($_numcade);
        if ($_numcade > 0) {
            $datos = DB::select('call listarCuotas(?)', array($idMatricula));
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
        } else {
            $data = [
                'estado' => false,
                'cod'    => 100
            ];
            return response()->json($data);
        }
    }

    public function registrarPagos(Request $dato)
    {
        
        $importe = $dato->importe;
        $recibo = $dato->recibo;
        $idcuota = $dato->idcuota;
        
        // $_numcade = strlen($idMatricula);
        // return response()->json($_numcade);
        if (true) {
            $datos = DB::select('call registrarPago(?,?,?)', array($importe,$recibo,$idcuota));
            
            return response()->json($datos);
            
        } else {
            $data = [
                'estado' => false,
                'cod'    => 100
            ];
            return response()->json($data);
        }
    }
}
