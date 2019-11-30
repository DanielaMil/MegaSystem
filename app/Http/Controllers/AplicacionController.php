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
    //********************Matricula************************ */
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
            $datos = DB::select("call buscarApoderado(?)", array($_auxdni));
            
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
            //return view('Mantenedor.MatriculaFrm', ['_auxdni' => $_auxdni]);response
        }
    }

    public function listarGrupo(Request $dato)
    {   
        $datosCurso = DB::select("call listarCurso()",array());
        $datosGrupo = DB::select("call listarGrupos()",array());
        if(count($datosCurso) > 0){
            $dataC = [
                'estado' => true,
                'cod' => 200,
                'datosC' => $datosCurso
            ];

            $dataG = [
                'estado' => true,
                'cod' => 200,
                'datosG' => $datosGrupo
            ];
            $dataC+=$dataG;
            return response()->json($dataC);

            //return response()->json($dataG);
        }else{
            
            $data = [
                'estado' => false,
                'cod' => 101
            ];
        return response()->json($data);
        }
    }

    public function listarMensualidad(Request $dato)
    {
        $txtIdGrupo = $dato->txtIdGrupo;
        
        $datosGrupo = DB::select("call mostrarMesesPagos(?)",array($txtIdGrupo));
        
        if(count($datosGrupo) > 0){
            $data = [
                'estado' => true,
                'cod' => 200,
                'datosGrupo' => $datosGrupo
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

    public function matriculaRegistro(REQUEST $dato){
        $auxIdAl         =$dato->auxIdAl;
        $txtDni_Al        =$dato->txtDni_Al;
        $txtApellidoPaAl =$dato->txtApellidoPaAl;
        $txtApellidoMaAl =$dato->txtApellidoMaAl;
        $txtNombreAl     =$dato->txtNombreAl;
        $cboGeneroAl     =$dato->cboGeneroAl;
        $txtDireccionAl  =$dato->txtDireccionAl;
        $txtCelularAl    =$dato->txtCelularAl;
        $txtFechaNaAl    =$dato->txtFechaNaAl;
        if ($auxIdAl == ''){
            $datos = DB::select("call registrarAlumno(?,?,?,?,?,?,?,?)",array($txtDni_Al,$txtNombreAl,$txtApellidoPaAl,$txtApellidoMaAl,$cboGeneroAl,$txtCelularAl,$txtFechaNaAl,$txtDireccionAl));
            $Alumno = DB::select("call buscarAlumnodni(?)", array($txtDni_Al));
            $auxIdAl = $Alumno[0]->idAlumno;
        }
        
        $auxIdApoderado   =$dato->auxIdApoderado;
        $txtDni_AP        =$dato->txtDni_AP;
        $txtApellidopa_Ap =$dato->txtApellidopa_Ap;
        $txtApellidoMa_AP =$dato->txtApellidoMa_AP;
        $txtNombre_AP     =$dato->txtNombre_AP;
        $txtDireccion_AP  =$dato->txtDireccion_AP;
        $txtCelular_AP    =$dato->txtCelular_AP;
        $txtParentesco_AP =$dato->txtParentesco_AP;

        if ($auxIdApoderado == ''){
            $datosAp = DB::select("call registrarApoderado(?,?,?,?,?,?,?)",array($txtDni_AP,$txtNombre_AP,$txtApellidopa_Ap,$txtApellidoMa_AP,$txtCelular_AP,$txtDireccion_AP,$txtParentesco_AP));
            $Apoderado = DB::select("call buscarApoderado(?)", array($txtDni_AP));
            $auxIdApoderado = $Apoderado[0]->idApoderado;
        }

        //$Matricula = DB::select("call RegistroMatricula(?,?,?,?)", array(NULL,$auxIdApoderado,$auxIdAl,NULL));
        for ($i=0; $i <count($dato->cursos) ; $i++) { 

           // $nuevo = $dato->cursos[$i]["idCurso"];
            $Matricula = DB::select("call RegistroMatricula(?,?,?,?)", array($dato->cursos[$i]["idCurso"],$auxIdApoderado,$auxIdAl,NULL));
        }
        
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

    public function buscarMontoMatricula(REQUEST $request){
        $concepto01 = "Matricula";
        $concepto02 = "Mensualidad";
        $montoMatricula = DB::select("call montoPagoConcepto(?)",array( $concepto01));
        $montoMensualidad = DB::select("call montoPagoConcepto(?)",array( $concepto02));

        if(count($montoMatricula) > 0){
            $dataMatricula = [
                'estado' => true,
                'cod' => 200,
                'datosMa' => $montoMatricula
            ];
            $dataMensualidad = [
                'estado' => true,
                'cod' => 200,
                'datosMe' => $montoMensualidad
            ];
            $dataMatricula += $dataMensualidad;

            return response()->json($dataMatricula);
        }else{
            
            $data = [
                'estado' => false,
                'cod' => 101
            ];
            return response()->json($data);
        }
    }

    //********************FIN_Matricula********************* */
    public function Pagos(REQUEST $request)
    {
        return view('Mantenedor.Pagos');
    }
}
