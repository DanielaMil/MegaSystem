@extends('layouts.app')
@section('css')

@endsection
@section('url')
fggf>jdk>fjkfjkj
@endsection

@section('content')   
    
            <!--<h5 class="msj_ALU" style="display: none">*No se encontro datos del Alumno</h5>-->
           <!-- <h5 class="msj_APO" style="display: none">*No se encontro datos del Apoderado</h5>-->
            <!--<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> -->
                <div class="modal-dialog modal-lg" style="    margin: 0!important;
                max-width: 1500px;" role="document">
                    <div class="modal-content">
                        <!--******************Encabezado*****************-->
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Registrar Matricula</h5>
                        </div>
                        <!--*******************FIN_Encabezado****************-->
                        <!--**************************************************Formulario*********************************************************-->
                        <div class="modal-body">
                            <div class="mb-3 card">
                                <div class="card-header card-header-tab-animation">
                                    <ul class="nav nav-justified">
                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg115-0" class="nav-link active show">
                                                Alumno
                                            </a></li>
                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg115-1" class="nav-link show">
                                                Apoderado
                                            </a></li>
                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg115-2" class="nav-link show">
                                                Matricula
                                            </a></li>
                                    </ul>
                                </div>
                                <!--Formularios de Alumno Apoderado Matricula--->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active show" id="tab-eg115-0" role="tabpanel">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    Ingresar Datos
                                                </h5>
                                                <div>
                                                    <!--**********Datos de Alumnos*************-->
                                                    <div class="card-body mx-auto style=width: 50px" > 
                                                        <div  class="form-inline">
                                                            <!-- <form class="form-inline" >-->
                                                            @csrf
                                                            <div class="mb-2 mr-sm-2 mb-sm-0 form-group" style="width: 15em;"></div>
                                                            <div class="mb-2 mr-sm-2 mb-sm-0 form-group">
                                                                <label class="mr-sm-2">
                                                                    DNI
                                                                </label>
                                                                <input name="txtDni_Al" id="txtDni_Al" type="text" class="form-control" maxlength="8" onkeypress="return soloNumeros(event)">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary" id="btn_buscarAJAX_AL" style="width: 80px">Buscar</button>
                                                            <input type="hidden" id="urlAJAX_AL" value="{{route('buscar_AL')}}">
                                                            <input type="hidden" id="auxIdAl" >  
                                                            <div class="load" style="display: none">Cargando....</div>
                                                        </div>
                                                    </div> 
                                                    <div class="row m-3 ">
                                                        <div class="column m-3" style="width: 18em;">
                                                            <div class="position-relative form-group">
                                                                <label for="form-control" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Apellido Paterno*</font>
                                                                    </font>
                                                                </label><input name="txtApellidoPa_Al" id="txtApellidoPaAl" type="text" class="form-control" onkeypress="return soloLetras(event)">
                                                            </div>
                                                            <div class="position-relative form-group"><label for="examplePassword" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Fecha Nacimiento</font>
                                                                    </font>
                                                                </label><input name="txtFechaNa_Al" id="txtFechaNaAl" type="date" class="form-control" style="width: 190px" onkeypress="return soloNumeros(event)">
                                                            </div>
                                                            <div class="position-relative form-group">
                                                                <label for="form-control" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Direccion</font>
                                                                    </font>
                                                                </label><input name="txtDireccionAl" id="txtDireccionAl" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="column m-3" style="width: 18em;">
                                                                <div class="position-relative form-group"><label for="form-control" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Apellido Materno*</font>
                                                                    </font>
                                                                    </label><input name="txtApellidoMa_Al" id="txtApellidoMaAl" type="text" class="form-control" onkeypress="return soloLetras(event)">
                                                                </div>
                                                                <div class="position-relative form-group">
                                                                    <label for="exampleSelect" class="">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">Genero</font>
                                                                        </font>
                                                                    </label>
                                                                    <select name="cboGenero_Al" id="cboGeneroAl"  class="form-control" style="width: 140px">
                                                                        <option selected value="0">Masculino</option>
                                                                        <option value="1">Femenino</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        <div class="column m-3" style="width: 18em;">
                                                            <div class="position-relative form-group">
                                                                <label for="examplePassword" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Nombre*</font>
                                                                    </font>
                                                                </label><input name="txtNombre_Al" id="txtNombreAl" type="text" class="form-control" onkeypress="return soloLetras(event)">
                                                            </div>
                                                            <div class="position-relative form-group">
                                                                <label for="examplePassword" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">celular</font>
                                                                    </font>
                                                                </label>
                                                                <INPUT type="text" SIZE=9 id="txtCelularAl" class="form-control" style="width: 170px" maxlength="9" onkeypress="return soloNumeros(event)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row m-3 ">
                                                        <div class="column m-3" style="width: 50em;">
                                                        </div>
                                                        <div class="column m-3" style="width: 5em;">

                                                         <button type="button" class="btn btn-primary" id="btn_sgte">Siguiente</button>
                                                        
                                                        <!--<a data-toggle="tab" href="#tab-eg115-1" class="nav-link show"><button type="button" class="btn btn-primary" id="btn_sgte">Siguiente</button></a>-->
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane show" id="tab-eg115-1" role="tabpanel">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Ingresar Datos</font>
                                                    </font>
                                                </h5>
                                                <div>
                                                    <!--**********Datos de Apoderado*************-->
                                                <div class="row m-3">
                                                    <div class="card-body mx-auto style=width: 50px" > 
                                                        <div  class="form-inline">
                                                            <!-- <form class="form-inline" >-->
                                                            @csrf  
                                                            <div class="mb-2 mr-sm-2 mb-sm-0 form-group" style="width: 15em;"></div>

                                                            <div class="mb-2 mr-sm-2 mb-sm-0 form-group">
                                                                <label class="mr-sm-2">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">DNI</font>
                                                                    </font>
                                                                </label>
                                                                <input name="txtDni_AP" id="txtDni_AP" type="text"  class="form-control" maxlength="8" onkeypress="return soloNumeros(event)">
                                                            </div>
                                                            
                                                            <button type="submit" class="btn btn-primary" id="btn_buscarAJAX_AP" style="width: 80px">Buscar</button>
                                                            <input type="hidden" id="urlAJAX_AP" value="{{route('buscar_AP')}}">
                                                            <input type="hidden" id="auxIdApoderado" value="">  
                                                            <div class="load" style="display: none">cargando....</div>
                                                        </div>
                                                    </div> 
                                                            
                                                    <div class="row m-3 ">
                                                        <div class="column m-3" style="width: 17em;">
                                                            <div class="position-relative form-group">
                                                                <label for="form-control" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Apellido Paterno*</font>
                                                                    </font>
                                                                </label><input name="txtApellidopa_Ap" id="txtApellidopa_Ap" type="text" class="form-control" onkeypress="return soloLetras(event)">
                                                            </div>
                                                            <div class="position-relative form-group">
                                                                    <label for="form-control" class="">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">Parentesco</font>
                                                                        </font>
                                                                    </label><input name="txtParentesco_AP" id="txtParentesco_AP" type="text" class="form-control" onkeypress="return soloLetras(event)">
                                                            </div>
                                                            <div class="position-relative form-group">
                                                                    <label for="form-control" class="">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">Direccion</font>
                                                                        </font>
                                                                    </label><input name="txtDireccion_AP" id="txtDireccion_AP" type="text" class="form-control">
                                                            </div>

                                                        </div>
                                                        <div class="column m-3" style="width: 17em;">
                                                            <div class="position-relative form-group"><label for="form-control" class="">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Apellido Materno*</font>
                                                                </font>
                                                                </label><input name="txtApellidoMa_AP" id="txtApellidoMa_AP" type="text" class="form-control" onkeypress="return soloLetras(event)">
                                                            </div>
                                                            <div class="position-relative form-group"><label for="examplePassword" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Celular</font>
                                                                    </font>
                                                                </label><input name="txtCelular_AP" id="txtCelular_AP" type="text" class="form-control" style="width: 170px" maxlength="9" onkeypress="return soloNumeros(event)">
                                                            </div>
                                                        </div>
                                                        <div class="column m-3" style="width: 17em;">
                                                            <div class="position-relative form-group">
                                                                <label for="examplePassword" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Nombre*</font>
                                                                    </font>
                                                                </label><input name="txtNombre_AP" id="txtNombre_AP" type="text" class="form-control" onkeypress="return soloLetras(event)">
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row m-3 ">
                                                        <div class="column m-3" style="width: 45em;">
                                                        </div>
                                                        <div class="column m-3" style="width: 3em;">
                                                                <button type="button" class="btn btn-primary" id="btn_limpiarAP" >Nuevo</button>
                                                            </div>
                                                        <div class="column m-3" style="width: 3em;">
                                                            <button type="button" class="btn btn-primary" id="btn_sgte" >Siguiente</button>
                                                        </div>
                                                    </div>
                                            </div>
                                            
                                        </div>

                                        <div class="tab-pane show" id="tab-eg115-2" role="tabpanel">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Ingresar Datos</font>
                                                    </font>
                                                </h5>
                                                <div>
<!--**************************************************************************Datos de Matricula****************************************************************-->
                                               
                                                <div class="row m-3 ">
                                                    <div class="column m-3" style="width: 30em;">
                                                        <div class="column m-3" style="width: 25em;">
                                                            <div class="mt-3 position-relative form-check">
                                                                <div class="mb-2 mr-sm-2 mb-sm-0 form-group">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <th></th>
                                                                            <th>CURSO</th>
                                                                            <th>GRUPO</th>
                                                                            <th>PAGO</th>
                                                                        </thead>
                                                                        <tbody id="tbody">
                                                                            
                                                                        </tbody>
                                                                        <input type="hidden" id="urlAJAX_ListarGrupo" value="{{route('listarGrupo')}}"> 
                                                                        
                                                                    </table>
                                                                    <div class="row m-7 ">
                                                                            <div class="column m-3" style="width: 15em;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font style="vertical-align: inherit;">N° Recibo*</font>
                                                                                </font>
                                                                                <input name="txtRecibo" id="txtRecibo" type="text" class="form-control">
                                                                            </div>
                                                                            <div class="column m-3" style="width: 10em;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font style="vertical-align: inherit;">DNI_Promotor</font>
                                                                                </font>
                                                                                <input name="txtDniPromotor" id="txtDniPromotor" type="text" class="form-control" maxlength="8" onkeypress="return soloNumeros(event)">
                                                                            </div>
                                                                            <div class="column m-3" style="width: 30em;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font style="vertical-align: inherit;">Nombre</font>
                                                                                </font>
                                                                                <input name="txtNombrePromotor" id="txtNombrePromotor" type="text" class="form-control" onkeypress="return soloLetras(event)">
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                                                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="column m-3" style="width: 25em;">
                                                        <label>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Pago de Matricula</font>
                                                            </font>
                                                        </label>
                                                        <input name="txt" id="txtMatricula" type="text" style="width: 80px" ><br>
                                                        <input type="hidden" id="urlAJAX_montoMatricula" value="{{route('buscarMontoMatricula')}}">        
                                                        <label>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Importe</font>
                                                            </font>
                                                        </label>
                                                        <input name="txt" id="txtImporte" type="text" class="form-control" style="width: 25%" placeholder="50.00" onkeypress="return montos(event)">
                                                        
                                                        <br/>
                                                        <label>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Pago de Mensualidad</font>
                                                            </font>
                                                        </label>
                                                        <input name="txt" id="txtMensualidad" type="text" style="width: 80px" ><br>
                                                                    
                                                        <label>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Razón del descuento</font>
                                                            </font>
                                                        </label>
                                                        <textarea name="txtComentario" id="txtComentario" rows="3" cols="1" class="form-control" placeholder="Escribe aquí tus comentarios"></textarea>
                                                        <label>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Descuetno</font>
                                                            </font>
                                                        </label>
                                                        <input name="txt" id="txtDescuento" type="text" class="form-control" style="width: 25%" placeholder="00.00" onkeypress="return montos(event)">
<!--------------------------------------------------------------------------- Mara el listado de las mensualidades-->
                                                        <div class="column m-3" style="width: 50em;">
                                                            <div class="mb-2 mr-sm-2 mb-sm-0 form-group">
                                                                <table class="table02">
                                                                    <thead>
                                                                        <th>MES</th>
                                                                        <th>MONTO</th>
                                                                        <th>FECHA VENCIMIENTO</th>
                                                                    </thead>
                                                                    <tbody id="tbody02">
                                                                        
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="row m-3 ">
                                                            <div class="column m-3" style="width: 25em;">
                                                            </div>
                                                            <div class="column m-3" style="width: 5em;">
                                                            </div>
                                                            <div class="column m-3" style="width: 10em;">
                                                                <button type="button" class="btn btn-primary" id="btnGuardarTablaAjax">Generar</button>
                                                                <input type="hidden" id="urlAJAX_ListarMensualidad" value="{{route('listarMensualidad')}}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    
                                                </div>
                                                <div class="row m-3 ">
                                                    <div class="column m-3" style="width: 25em;">
                                                    </div>
                                                    <div class="column m-3" style="width: 5em;">
                                                        <!--sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss-->
                                                      
                                                        <!-- Button trigger modal -->


                                                        <!--sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss-->

                                                        <button type="button" class="btn btn-primary" id="btn_registrarAjax">Registrar</button>
                                                        <input type="hidden" name="urlregistroAJAX" id="urlregistroAJAX" url="{{route('matriculaRegistro')}}">
                                                    </div>
                                                    <div class="column m-3" style="width: 10em;">
                                                        <button type="button" class="btn btn-primary" id="btnCancelar">Cancelar</button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--**************************************************FIN_Formulario*********************************************************-->
                    </div>
                </div>
            <!--</div> -->

@endsection

@section('js')
<!--<script type="text/javascript" src="./assets/scripts/main.js"></script></body>-->
<script type="text/javascript" src="{{asset('template/architectui-html-free//assets/scripts/main.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

    <script>

        function soloLetras(e){
            key = e.keyCode || e.which;
            tecla = String.fromCharCode(key).toLowerCase();
            letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
            especiales = "8-37-39-46";

            tecla_especial = false
            for(var i in especiales){
                if(key == especiales[i]){
                    tecla_especial = true;
                    break;
                }
            }

            if(letras.indexOf(tecla)==-1 && !tecla_especial){
                return false;
            }
        }

        function soloNumeros(e){
            key = e.keyCode || e.which;
            tecla = String.fromCharCode(key).toLowerCase();
            letras = " 0123456789";
            especiales = "8-37-39-46";

            tecla_especial = false
            for(var i in especiales){
                if(key == especiales[i]){
                    tecla_especial = true;
                    break;
                }
            }

            if(letras.indexOf(tecla)==-1 && !tecla_especial){
                return false;
            }
        }

        function montos(e){
            key = e.keyCode || e.which;
            tecla = String.fromCharCode(key).toLowerCase();
            letras = " .0123456789";
            especiales = "8-37-39-46";
            tecla_especial = false


            for(var i in especiales){
                if(key == especiales[i]){
                    tecla_especial = true;
                    break;
                }
            }

            if(letras.indexOf(tecla)==-1 && !tecla_especial){
                return false;
            }
        }
    </script>
    <script type="text/javascript" src="{{asset('template/architectui-html-free//assets/scripts/main.js')}}"></script>
    <!--Listado de grupos-->
    <script>
        
        var arrayCursosMatriculados = [];
        var UbicacionPago = -1;
        var resultado = document.getElementById("info");
        var mensualidadGeneral = 0.00;
        var auxIdGrupo = 0 ;
        var auxMonto = 60.00;

        var numero = document.getElementById('numero');

        function calcular() {
        //la fecha
        var TuFecha = new Date('01/01/2018');
        
        //dias a sumar
        var dias = parseInt(numero.value);
        
        //nueva fecha sumada
        TuFecha.setDate(TuFecha.getDate() + dias);
        //formato de salida para la fecha
        resultado.innerText = TuFecha.getDate() + '/' +
            (TuFecha.getMonth() + 1) + '/' + TuFecha.getFullYear();
        }

        function tabla() {
            var urlAJAX_ListarGrupo = $('#urlAJAX_ListarGrupo').val();
        
            $.ajax({
                type: "post",
                url: urlAJAX_ListarGrupo,
                dataType: 'json',
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function (response) {
                    // $('.load').css({display:'block'});
                },
                success: function (response) {
                    console.log(response);
                    var tabla;
                    for(var i=0;i < response.datosC.length;i++){
                        tabla+='<tr><td><input name="check" ban=0 key="'+response.datosC[i].idCurso+'" type="checkbox" class="form-check-input checkCurso"></td>'

                                +'<td>'+response.datosC[i].nombre+'</td>'
                                +'<td><select name="estado" class="form-control codigoGrupo" style="width: 200px">'
                                        for(var j=0;j < response.datosG.length;j++){
                                            if ( response.datosC[i].idCurso ==  response.datosG[j].idCurso) {
                                                tabla+='<option value="'+response.datosG[j].idGrupo+'">'+response.datosG[j].descripcion+'</option>'
                                            }
                                        }
                            tabla+='</select></td>'
                                +'<td><button class="btnPagarCurso">pago</button></td></tr>';  
                    }
                    $('#tbody').html(tabla);
                    SeleccionarCuros();
                    SeleccionarGrupo();

                    PagarCurso();
                },
                error:function (error) {  
                },
                complete:function () {  
                }
            });
        }

        tabla();

        function tabla02() {
            var urlAJAX_ListarMensualidad = $('#urlAJAX_ListarMensualidad').val();
            var auxIdGrupo01 = auxIdGrupo;
            //$fecha_actual = date("10-10-2010");
            //echo date("d-m-Y",strtotime($fecha_actual."+ 1 days"));

            $.ajax({
                type: "post",
                url: urlAJAX_ListarMensualidad,
                data:{
                    auxIdGrupo01 :auxIdGrupo01
                },
                dataType: 'json',
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function (response) {
                    // $('.load').css({display:'block'}); alu.feInicio
                },
                success: function (response) {
                    console.log(response);
                    var tabla01;
                    var alu = response.datosGrupo[0];
                    for(var j=0;j < alu.duMeses;j++){
                        var fechaaux = alu.feInicio;

                        tabla01+='<tr><td>'+(j+1)+'°'+'</td>'
                        +'<td>'+auxMonto+'</td>'
                        +'<td>'+ fechaaux +'</td></tr>'      
                    }
                    $('#tbody02').html(tabla01);
                },
                error:function (error) {  
                },
                complete:function () {  
                }
            });
        }
        $('#btnGuardarTablaAjax').click(function () {  
            tabla02();
        });
        
        function bloquearMatricula() { 
            $('#txtImporte').attr('disabled',true);
            $('#txtComentario').attr('disabled',true);
            $('#txtDescuento').attr('disabled',true);
        }
        bloquearMatricula()
        function SeleccionarCuros() {
            var selectCurso = $('.checkCurso');
            var selectGrupo = $('.codigoGrupo');
            var mensualidad = $('#txtMensualidad');
            var matricula = $('#txtMatricula');
            var comentario = $('#txtComentario');

   
            
            selectCurso.each(function (index,element) {
                var e = $(this);

                e.click(function () {

                    if (e.attr('ban') == 1) {
                        var pos = -1;
                        for (var i = 0; i < arrayCursosMatriculados.length; i++) {
                            if (arrayCursosMatriculados[i].idCurso == e.attr('Key')) {
                                pos = i;
                                auxIdGrupo = arrayCursosMatriculados[i].idGrupo;
                                //alert(auxIdGrupo);
                            }
                        }
                        arrayCursosMatriculados.splice(pos,1);
                        console.log(arrayCursosMatriculados);
                        
                        e.attr('ban',0);
                    }else{
                            /*$('#txtImporte').attr('disabled',false);
                            $('#txtImporte').val('');
                           $('#txtComentario').attr('disabled',false);
                            $('#txtComentario').val('');
                            $('#txtDescuento').attr('disabled',false);
                            $('#txtDescuento').val('');*/

                        arrayCursosMatriculados.push(
                            {
                                idCurso:    e.attr('Key'),
                                idGrupo:    selectGrupo.eq(index).val(),
                                importe:    0.00,
                                pagoMens:   parseFloat(mensualidadGeneral),
                                pagoMatr:   parseFloat(matricula.val()),
                                razon:      "",
                                descuento:  0.00
                            }
                          
                            
                        );
                        auxIdGrupo = selectGrupo.eq(index).val();
                        //alert(auxIdGrupo);
                        console.log(arrayCursosMatriculados);
                        e.attr('ban',1);

                            
                    }
                    // alert(index);
                    
                    
                });
            });
        }

        function SeleccionarGrupo() {
            var selectCurso = $('.checkCurso');
            var selectGrupo = $('.codigoGrupo');
            
            

            selectGrupo.each(function (index,element) {
                var e = $(this);
              
                e.change(function () {
                    var pos = -1;
                    for (var i = 0; i < arrayCursosMatriculados.length; i++) {
                        if (arrayCursosMatriculados[i].idCurso == selectCurso.eq(index).attr('Key')) {
                            pos = i;
                        }
                    }

                    if (pos != -1) {
                        arrayCursosMatriculados[pos].idGrupo = e.val();
                        auxIdGrupo = e.val();
                    }
                    
                });
            });
        }

        function PagarCurso() {
            var btnPagar = $('.btnPagarCurso');
            var selectCurso = $('.checkCurso');

            $('#txtImporte').attr('disabled',false);
            $('#txtImporte').val('');
            $('#txtComentario').attr('disabled',false);
            $('#txtComentario').val('');
            $('#txtDescuento').attr('disabled',false);
            $('#txtDescuento').val('');

            btnPagar.each(function (index, element) {
                var e = $(this);
                
                e.click(function () {
                    
                    var pos = -1;
                    for (var i = 0; i < arrayCursosMatriculados.length; i++) {
                        if (arrayCursosMatriculados[i].idCurso == selectCurso.eq(index).attr('Key')) {
                            pos = i;
                            UbicacionPago = i;
                        }
                    }
                    // alert(pos)
                    if (pos != -1) {
                        $('#txtImporte').val(Number(arrayCursosMatriculados[pos].importe).toFixed(2));
                        $('#txtDescuento').val(Number(arrayCursosMatriculados[pos].descuento).toFixed(2));
                        $('#txtMensualidad').val(Number(arrayCursosMatriculados[pos].pagoMens).toFixed(2));
                        $('#txtComentario').val(arrayCursosMatriculados[pos].razon)
                        // $('#txtImporte').attr('value',arrayCursosMatriculados[pos].importe); 
                    }
                });
            });
        }


        function ActualizarImporte() {
            var IDImporte = $('#txtImporte');
            
            IDImporte.change(function () {
                // alert(UbicacionPago)
                arrayCursosMatriculados[UbicacionPago].importe = IDImporte.val();
            });
        }

        ActualizarImporte();

        function ActualizarDescueto() {
            var IDDescueto = $('#txtDescuento');
            var mensualidad = $('#txtMensualidad');
            var comentario =  $('#txtComentario');
            IDDescueto.change(function () {
                // alert(UbicacionPago)
                var newMenualidad = parseFloat(mensualidad.val()) - parseFloat(IDDescueto.val());
                mensualidad.val(Number(newMenualidad).toFixed(2));
                arrayCursosMatriculados[UbicacionPago].descuento = parseFloat(IDDescueto.val());
                arrayCursosMatriculados[UbicacionPago].pagoMens = newMenualidad;
                arrayCursosMatriculados[UbicacionPago].razon = comentario;
                console.log(arrayCursosMatriculados);

                auxMonto = newMenualidad;
                
            });
        }

        ActualizarDescueto();

        function ActualizarComentario() {
            var Comentario = $('#txtComentario');
            
            Comentario.change(function () {
                // alert(UbicacionPago)
                arrayCursosMatriculados[UbicacionPago].razon = Comentario.val();
              
            });
        }
        ActualizarComentario();


        //buscarAlumno
        function buscarAlumno() {
            
            var urlAJAX_AL = $('#urlAJAX_AL').val();
            var txtDNI = $('#txtDni_Al').val();
            
            $.ajax({
                type: "post",
                url: urlAJAX_AL,
                data:{
                    txtDni :txtDNI
                },
                dataType: 'json',
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function (response) {
                    // $('.load').css({display:'block'});
                },
                success: function (response) {
                    console.log(response);
                    
                    if(response.estado == true){
                        var alu = response.datos[0];
                        
                        $('#auxIdAl').val(alu.idAlumno);
                        $('#txtDni_Al').val(alu.dni);
                        $('#txtApellidoPaAl').val(alu.apPaterno);
                        $('#txtApellidoPaAl').attr('disabled',true);
                        $('#txtApellidoMaAl').val(alu.apMaterno);
                        $('#txtApellidoMaAl').attr('disabled',true);
                        $('#txtNombreAl').val(alu.nombre);
                        $('#txtNombreAl').attr('disabled',true);
                        $('#txtDireccionAl').val(alu.direccion);
                        $('#txtDireccionAl').attr('disabled',true);
                        $('#txtCelularAl').val(alu.celular);
                        $('#txtCelularAl').attr('disabled',true);
                        $('#txtFechaNaAl').attr('disabled',true);

                        $('#cboGeneroAl').attr('disabled',true);
                        var option = $('#cboGeneroAl option');
                        for (var i=0;i < option.length ;i++) {
                            var ban = (option.eq(i).val() == alu.genero)?true:false;
                            option.eq(i).attr('selected',ban);
                        }
                        $('#txtFechaNaAl').val(alu.feNacimiento);
                    }else{
                        
                        if(response.cod == 100){
                            alert('Cantidad de caracteres no valido')
                        }
                        if (response.cod == 101) {
                           // $('.msj_ALU').css({display:'block'});
                            alert("Alumno No encontrado");
                            LimpiarFormularioALU();
                        }
                    }
                    // $('.load').css({display:'none'});
                },
                error:function (error) {  
                   
                },
                complete:function () {  
                }
            });
        }

        function LimpiarFormularioALU() {  
            $('#auxIdAl').val('');
            $('#txtApellidoPaAl').val('');
            $('#txtApellidoPaAl').attr('disabled',false);
            $('#txtApellidoMaAl').val('');
            $('#txtApellidoMaAl').attr('disabled',false);
            $('#txtNombreAl').val('');
            $('#txtNombreAl').attr('disabled',false);
            $('#txtDireccionAl').val('');
            $('#txtDireccionAl').attr('disabled',false);
            $('#txtCelularAl').val('');
            $('#txtCelularAl').attr('disabled',false);
            $('#txtFechaNaAl').val('');
            $('#txtFechaNaAl').attr('disabled',false);
            //$('#cboGeneroAl').val('');
            $('#cboGeneroAl').attr('disabled',false);
        }

        $('#btn_buscarAJAX_AL').click(function () {  
            buscarAlumno();
        });

        function buscarApoderado() {
            
            var urlAJAX_AP = $('#urlAJAX_AP').val();
            var txtDNI = $('#txtDni_AP').val();
            
            $.ajax({
                type: "post",
                url: urlAJAX_AP,
                data:{
                    txtDni :txtDNI
                },
                dataType: 'json',
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function (response) {
                    // $('.load').css({display:'block'});
                },
                success: function (response) {
                    console.log(response);
                    //verificar los datos que recive del apoderado *************************************************************
                    if(response.estado == true){
                        var alu = response.datos[0];
                        $('#auxIdApoderado').val(alu.idApoderado);
                        $('#txtDni_AP').val(alu.dni);
                        //$('#txtDni_Al').attr('disabled',true);
                        $('#txtApellidopa_Ap').val(alu.apPaterno);
                        $('#txtApellidopa_Ap').attr('disabled',true);
                        $('#txtApellidoMa_AP').val(alu.apMaterno);
                        $('#txtApellidoMa_AP').attr('disabled',true);
                        $('#txtNombre_AP').val(alu.nombre);
                        $('#txtNombre_AP').attr('disabled',true);
                        $('#txtDireccion_AP').val(alu.direccion);
                        $('#txtDireccion_AP').attr('disabled',true);
                        $('#txtCelular_AP').val(alu.celular);
                        $('#txtCelular_AP').attr('disabled',true);
                        $('#txtParentesco_AP').val(alu.celular);
                        $('#txtParentesco_AP').attr('disabled',true);
                        
                    }else{
                        if(response.cod == 100){
                            alert('Cantidad de caracteres no valido')
                        }
                        if (response.cod == 101) {
                           // $('.msj_APO').css({display:'block'});
                            alert("Apoderado No encontrado");
                            LimpiarFormularioApoderado();
                        }
                    }
                    // $('.load').css({display:'none'});
                },
                error:function (error) {  
                },
                complete:function () {  
                }
            });
        }

        function LimpiarFormularioApoderado() {
            $('#auxIdApoderado').val('');  
            $('#txtApellidopa_Ap').val('');
            $('#txtApellidopa_Ap').attr('disabled',false);
            $('#txtApellidoMa_AP').val('');
            $('#txtApellidoMa_AP').attr('disabled',false);
            $('#txtNombre_AP').val('');
            $('#txtNombre_AP').attr('disabled',false);
            $('#txtDireccion_AP').val('');
            $('#txtDireccion_AP').attr('disabled',false);
            $('#txtCelular_AP').val('');
            $('#txtCelular_AP').attr('disabled',false);
            $('#txtParentesco_AP').val('');
            $('#txtParentesco_AP').attr('disabled',false);
        }

        $('#btn_limpiarAP').click(function () {  
            LimpiarFormularioApoderado();
        });

        $('#btn_buscarAJAX_AP').click(function () {  
            buscarApoderado();
        });


        function registrarAJAX() {
            //Datos de Alumno auxIdApoderado-auxIdAl
            
            var auxIdAl = $('#auxIdAl').val();

            var txtDni_Al = $('#txtDni_Al').val();
            var txtApellidoPaAl = $('#txtApellidoPaAl').val();
            var txtApellidoMaAl = $('#txtApellidoMaAl').val();
            var txtNombreAl = $('#txtNombreAl').val();
            var cboGeneroAl = $('#cboGeneroAl').val();
            var txtDireccionAl = $('#txtDireccionAl').val();
            var txtCelularAl = $('#txtCelularAl').val();
            var txtFechaNaAl = $('#txtFechaNaAl').val();

            //DAtos del Apoderado 
            var auxIdApoderado = $('#auxIdApoderado').val();

            var txtDni_AP = $('#txtDni_AP').val();
            var txtApellidopa_Ap = $('#txtApellidopa_Ap').val();
            var txtApellidoMa_AP = $('#txtApellidoMa_AP').val();
            var txtNombre_AP = $('#txtNombre_AP').val();
            var txtDireccion_AP = $('#txtDireccion_AP').val();
            var txtCelular_AP = $('#txtCelular_AP').val();
            var txtParentesco_AP = $('#txtParentesco_AP').val();
            var urlregistroAJAX = $('#urlregistroAJAX').val();

            //datos para las cuotas
            


            $.ajax({
                type: "post",
                url: urlregistroAJAX,
                data:{
                    
                    auxIdAl         :auxIdAl,
                    txtDni_Al       :txtDni_Al,
                    txtApellidoPaAl :txtApellidoPaAl,
                    txtApellidoMaAl :txtApellidoMaAl,
                    txtNombreAl     :txtNombreAl,
                    cboGeneroAl     :cboGeneroAl,
                    txtDireccionAl  :txtDireccionAl,
                    txtCelularAl    :txtCelularAl,
                    txtFechaNaAl    :txtFechaNaAl,
                    auxIdApoderado   :auxIdApoderado,
                    txtDni_AP        :txtDni_AP,
                    txtApellidopa_Ap :txtApellidopa_Ap,
                    txtApellidoMa_AP :txtApellidoMa_AP,
                    txtNombre_AP     :txtNombre_AP,
                    txtDireccion_AP  :txtDireccion_AP,
                    txtCelular_AP    :txtCelular_AP,
                    txtParentesco_AP :txtParentesco_AP,

                    cursos : arrayCursosMatriculados
                },
                dataType: 'json',
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(response){
                    console.log(response);
                    alert("Se registro los datos correctamente");
                   
                },

            });
        }
        $('#btn_registrarAjax').click(function () { 
            registrarAJAX();
        })

    
        function MontoMatricula() {
            
            var urlAJAX_montoMatricula = $('#urlAJAX_montoMatricula').val();

            $.ajax({
                type: "post",
                url: urlAJAX_montoMatricula,
                dataType: 'json',
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function (response) {
                    // $('.load').css({display:'block'});
                },
                success: function (response) {
                    console.log(response);
                    //$('#txtMatricula').val(mat.moTotal);
                    var alu01 = response.datosMa[0];
                    var alu02 = response.datosMe[0];
                    mensualidadGeneral = alu02.moTotal;
                    $('#txtMatricula').val(alu01.moTotal);
                    $('#txtMatricula').attr('disabled',true);
                    $('#txtMensualidad').val(alu02.moTotal);
                    $('#txtMensualidad').attr('disabled',true);
                },
                error:function (error) {  
                },
                complete:function () {  
                }
            });
        }

        MontoMatricula();
           
                
    </script>
    
 @endsection 