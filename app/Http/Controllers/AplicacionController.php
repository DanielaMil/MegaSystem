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
    //********************Matricula************************* */
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
        $txtIdGrupo = $dato->auxIdGrupo01;
        //$txtIdGrupo = 5;
        
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

        
        //Registro de Matricula y Cuotas
        /*registrarPagos
        idCurso:    e.attr('Key'),
        idGrupo:    selectGrupo.eq(index).val(),
        importe:    0.00,
        pagoMens:   parseFloat(mensualidadGeneral),
        pagoMatr:   parseFloat(matricula.val()),
        razon:      "",
        descuento:  0.00
        ultimo
        */
        $txtRecibo = $dato->txtRecibo;
        $txtDniPromotor = $dato->txtDniPromotor;

        if ($txtDniPromotor == '') {
            $idPromotor = NULL;
        }else{
            $datosPromotor =  DB::select("call buscarPromotor(?)", array($txtDniPromotor));
            $idPromotor = $datosPromotor[0]->idPromotor;
        }
                
        //***********************************INICIO DE MATRICULA CUOTAS  PAGOS DE LA MATRICULA ************************* */
        
        for ($i=0; $i <count($dato->cursos) ; $i++) { 
            $auxImporte = 0.00;
            
            $Matricula = DB::select("call registroMatricula(?,?,?,?)", array($dato->cursos[$i]["idGrupo"],$auxIdApoderado,$auxIdAl,$idPromotor)); //SE REGISTRA LA MATRICULA 

            $idMatricula01 = DB::select("call ultimaMatricula()",array());  //EXTRAE EK ID DE LA ULTIMA MATRICULA 
            $datosGrupo = DB::select("call mostrarMesesPagos(?)",array($dato->cursos[$i]["idGrupo"])); //SE MUESTRA LOS DATOS DEL GRUPO ENVIANDO EL ID 

           
            $auxSaldo = (($dato->cursos[$i]["pagoMatr"]) - ($dato->cursos[$i]["importe"]));
            //return response()->json($auxSaldo);
            if ($auxSaldo == 0.00) {
                $estado = 1;
            }else{
                $estado = 0;
            }
            
            $dataMensualidad01 = DB::select("call registroCuotas(?,?,?,?,?,?,?,?,?)",array(($dato->cursos[$i]["pagoMatr"]),$datosGrupo[0]->feInicio,2,$idMatricula01[0]->idMatricula,$dato->cursos[$i]["pagoMatr"],$estado,NULL,0.00,0));    
           
            $ultimaCuotaMatricula = DB::select("call ultimaCuotaMatricula()",array());
            
            
            $pago01  = DB::select("call registrarPago(?,?,?)",array(($dato->cursos[$i]["importe"]),$txtRecibo,$ultimaCuotaMatricula[0]->idCuota));
            /*if($i == 1){
                return response()->json($pago01);
            }*/
            $cantidadMeses = 0; 
            for($j=0;$j < ($datosGrupo[0]->duMeses) ; $j++ ){
                
                $cantidadMeses = $cantidadMeses + 1;
                //Para registrar la mensualidad
                $idMatricula = DB::select("call ultimaMatricula()",array());
               
                $dataMensualidad = DB::select("call registroCuotas(?,?,?,?,?,?,?,?,?)",array($dato->cursos[$i]["pagoMatr"],$datosGrupo[0]->feInicio,3,$idMatricula[0]->idMatricula,$dato->cursos[$i]["pagoMens"],0,$dato->cursos[$i]["razon"],$dato->cursos[$i]["descuento"],$cantidadMeses));
                
            }
        }
        
        if($dataMensualidad){
            $datas = [
                'estado' => true,
                'cod' => 200,
                'datos' => $dataMensualidad
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

    public function buscarPromotor(REQUEST $dato)
    {
        $txtDniPromotor = $dato->txtDniPromotor;
        $_numcade = strlen($txtDniPromotor);

        if ($_numcade == 8) {
            $datos = DB::select("call buscarPromotor(?)", array($txtDniPromotor));
            
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

    //********************FIN_Matricula********************* */
    public function Pagos(REQUEST $request)
    {
        return view('Mantenedor.Pagos');
    }
}
