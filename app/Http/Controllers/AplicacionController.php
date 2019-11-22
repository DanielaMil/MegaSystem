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
            // return view('Mantenedor.MatriculaFrm');
            //return view('Mantenedor.MatriculaFrm', ['_auxdni' => $_auxdni]);
        }
    }

    public function matriculaRegistro(REQUEST $dato){
        $txtDniAl        =$dato->txtDniAl;
        $txtApellidoPaAl =$dato->txtApellidoPaAl;
        $txtApellidoMaAl =$dato->txtApellidoMaAl;
        $txtNombreAl     =$dato->txtNombreAl;
        $cboGeneroAl     =$dato->cboGeneroAl;
        // return response()->json($dato);
        // if ($cboGeneroAl == '') {
        //     $cboGeneroAl = 'M';
        // } else {
        //     $cboGeneroAl = 'F';
        // }
        
        $txtDireccionAl  =$dato->txtDireccionAl;
        $txtCelularAl    =$dato->txtCelularAl;
        $txtFechaNaAl    =$dato->txtFechaNaAl;
        // array($txtDniAl,$txtNombreAl,$txtApellidoPaAl,$txtApellidoMaAl,$cboGeneroAl,$txtCelularAl,$txtFechaNaAl,$txtDireccionAl)
        // $datos = DB::select("call registrarAlumno('".$txtDniAl."','".$txtNombreAl."','".$txtApellidoPaAl."','".$txtApellidoMaAl."','".$cboGeneroAl."','".$txtCelularAl."','".$txtFechaNaAl."','".$txtDireccionAl."')");
        $datos = DB::select("call registrarAlumno(?,?,?,?,?,?,?,?)",array($txtDniAl,$txtNombreAl,$txtApellidoPaAl,$txtApellidoMaAl,$cboGeneroAl,$txtCelularAl,$txtFechaNaAl,$txtDireccionAl));
        
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
