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

    public function buscarAL(Request $dato)
    {
        $_auxdni = $dato->txtDni;
        $_numcade = strlen($_auxdni);
        
        if ($_numcade == 8) {
            $datos = DB::select("call buscarAlumnodni(?)", array($_auxdni));
            
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
            // return view('Mantenedor.MatriculaFrm', ['datos' => $datos]);
        } else {
            $data = [
                'estado' => false,
                'cod'    => 100
            ];
            return response()->json($data);
            /// return view('Mantenedor.MatriculaFrm');
            //return view('Mantenedor.MatriculaFrm', ['_auxdni' => $_auxdni]);
        }
    }

    public function buscarAP(Request $dato)
    {
        $_auxdni = $dato->txtDni;
        $_numcade = strlen($_auxdni);
        
        if ($_numcade == 8) {
            $datos = DB::select("call buscarAlumnodni(?)", array($_auxdni));
            
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
            // return view('Mantenedor.MatriculaFrm', ['datos' => $datos]);
        } else {
            $data = [
                'estado' => false,
                'cod'    => 100
            ];
            return response()->json($data);
            /// return view('Mantenedor.MatriculaFrm');
            //return view('Mantenedor.MatriculaFrm', ['_auxdni' => $_auxdni]);
        }
    }


    public function matriculaRegistro(REQUEST $dato){
        $txtDni_Al        =$dato->txtDni_Al;
        $txtApellidoPaAl =$dato->txtApellidoPaAl;
        $txtApellidoMaAl =$dato->txtApellidoMaAl;
        $txtNombreAl     =$dato->txtNombreAl;
        $cboGeneroAl     =$dato->cboGeneroAl;
        $txtDireccionAl  =$dato->txtDireccionAl;
        $txtCelularAl    =$dato->txtCelularAl;
        $txtFechaNaAl    =$dato->txtFechaNaAl;
        $datos = DB::select("call registrarAlumno(?,?,?,?,?,?,?,?)",array($txtDni_Al,$txtNombreAl,$txtApellidoPaAl,$txtApellidoMaAl,$cboGeneroAl,$txtCelularAl,$txtFechaNaAl,$txtDireccionAl));
        
        $txtDni_AP        =$dato->txtDni_AP;
        $txtApellidopa_Ap =$dato->txtApellidopa_Ap;
        $txtApellidoMa_AP =$dato->txtApellidoMa_AP;
        $txtNombre_AP     =$dato->txtNombre_AP;
        $txtDireccion_AP  =$dato->txtDireccion_AP;
        $txtCelular_AP    =$dato->txtCelular_AP;
        $txtParentesco_AP =$dato->txtParentesco_AP;

        $datosAp = DB::select("call registrarApoderado(?,?,?,?,?,?,?)",array($txtDni_AP,$txtNombre_AP,$txtApellidopa_Ap,$txtApellidoMa_AP,$txtCelular_AP,$txtDireccion_AP,$txtParentesco_AP));

        return response()->json(true);
        if($datos){
            $datas = [
                'estado' => true,
                'cod' => 200,
                'datos' => $datas
            ];
            return response()->json($datas);
        }else{
            
            $datas = [
                'estado' => false,
                'cod' => 101
            ];
        return response()->json($datas);
        }


    }

    //********************FIN_Matricula********************* */
    public function Ingresos(REQUEST $request)
    {
        return view('Mantenedor.Ingresos');
    }
}
