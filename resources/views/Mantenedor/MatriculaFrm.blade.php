@extends('layouts.app')
@section('css')

@endsection
@section('url')
fggf>jdk>fjkfjkj
@endsection

@section('content')
    <div class="card">
        <div class="card-body mx-auto" style="width: 500px;">
            <div class="form-inline">
                <!-- <form class="form-inline" >-->
                @csrf
                                   
                <div class="mb-2 mr-sm-2 mb-sm-0 form-group">
                    <label class="mr-sm-2">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">DNI</font>
                        </font>
                    </label><input name="txtDni" id="txtDni1" type="text" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-primary" id="btn_buscarAJAX">Buscar</button>
                <!-- <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Buscar
                    </button> -->
                </div>
        </div>
    </div>    
    
    <input type="hidden" id="urlAJAX" value="{{route('matricula02')}}">
    <div class="load" style="display: none">cargando....</div>

            <h5 class="msj_ALU" style="display: none">*No se encontro datos de Alumno</h5>
            <!--<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> -->
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <!--******************Encabezado***************ss*-->
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Registrar Matricula</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <!--******************FIN_Encabezado****************-->
                        <!--**************************************************Formulario*********************************************************-->
                        <div class="modal-body">
                            <div class="mb-3 card">
                                <div class="card-header card-header-tab-animation">
                                    <ul class="nav nav-justified">
                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg115-0" class="nav-link active show">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Alumno</font>
                                                </font>
                                            </a></li>
                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg115-1" class="nav-link show">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Apoderado</font>
                                                </font>
                                            </a></li>
                                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg115-2" class="nav-link show">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Matricula</font>
                                                </font>
                                            </a></li>
                                    </ul>
                                </div>
            
                                <!--Formularios de Alumno Apoderado Matricula--->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active show" id="tab-eg115-0" role="tabpanel">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Ingresar Datos</font>
                                                    </font>
                                                </h5>
            
                                                <form class="">
                                                    @csrf
                                                    <!--**********Datos de Alumnos*************-->
                                                    <div class="row m-3 ">
                                                        <div class="column m-3" style="width: 20em;">
                                                            <div class="position-relative form-group">
                                                                <label for="form-control" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Dni</font>
                                                                    </font>
                                                                </label><input name="txtDniAl" id="txtDniAl" type="text" class="form-control"></div>
                                                            <div class="position-relative form-group">
                                                                <label for="form-control" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Apellido Paterno</font>
                                                                    </font>
                                                                </label><input name="txtApellidoPaAl" id="txtApellidoPaAl" type="text" class="form-control"></div>
                                                            <div class="position-relative form-group">
                                                                <label for="examplePassword" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Apellido Materno</font>
                                                                    </font>
                                                                </label><input name="txtApellidoMaAl" id="txtApellidoMaAl" type="text" class="form-control"></div>
                                                            <div class="position-relative form-group">
                                                                <label for="examplePassword" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Nombre</font>
                                                                    </font>
                                                                </label><input name="txtNombreAl" id="txtNombreAl" type="text" class="form-control"></div>
                                                            <div class="position-relative form-group">
                                                                <label for="exampleSelect" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Genero</font>
                                                                    </font>
                                                                </label>
                                                                <select name="cboGeneroAl" id="cboGeneroAl"  class="form-control" >
                                                                    <option selected value="0">Masculino</option>
                                                                    <option value="1">Femenino</option>
                                                                </select></div>
                                                        </div>
                                                        <div class="column m-3" style="width: 20em;">
                                                            <div class="position-relative form-group"><label for="form-control" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Direccion</font>
                                                                    </font>
                                                                </label><input name="txtDireccionAl" id="txtDireccionAl" type="text" class="form-control"></div>
                                                            <div class="position-relative form-group"><label for="examplePassword" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">celular</font>
                                                                    </font>
                                                                </label><input name="txtCelularAl" id="txtCelularAl" type="text" class="form-control"></div>
                                                            <div class="position-relative form-group"><label for="examplePassword" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Fecha Nacimiento</font>
                                                                    </font>
                                                                </label><input name="txtFechaNaAl" id="txtFechaNaAl" type="date" class="form-control"></div>
                                                        </div>
                                                    </div>
                                                    <!--<button class="mt-2 btn btn-primary">
                                                        <font style="vertical-align: center;">
                                                            <font style="vertical-align: center;">Registrar</font>
                                                        </font>
                                                    </button>-->
                                                    <!--</form>-->
                                            </div>
                                        </div>
                                        <div class="tab-pane show" id="tab-eg115-1" role="tabpanel">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Ingresar Datos</font>
                                                    </font>
                                                </h5>
                                                <!--<form class="">-->
                                                    <!--**********Datos de Apoderado*************-->
                                                <div class="row m-3">
                                                    <div class="column m-3" style="width: 20em;">
                                                        <div class="position-relative form-group"><label for="form-control" class="">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Apellido Paterno</font>
                                                                </font>
                                                            </label><input name="txtApellidoPaAp" id="apPaterno_AP" type="text" class="form-control"></div>
                                                        <div class="position-relative form-group"><label for="examplePassword" class="">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Apellido Materno</font>
                                                                </font>
                                                            </label><input name="txtApellidoMaAp" id="apMaterno_AP" type="text" class="form-control"></div>
                                                        <div class="position-relative form-group"><label for="examplePassword" class="">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Nombre</font>
                                                                </font>
                                                            </label><input name="txtNombreAp" id="nombre_AP" type="text" class="form-control"></div>
                                                        <div class="position-relative form-group"><label for="exampleSelect" class="">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Genero</font>
                                                                </font>
                                                            </label><select name="cboGeneroAl" id="genero_AP" class="form-control">
                                                                    <option selected value="0">Masculino</option>
                                                                    <option value="1">Femenino</option>
                                                            </select></div>
                                                    </div>
                                                    <div class="column m-3" style="width: 20em;">
                                                        <div class="position-relative form-group"><label for="form-control" class="">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Direccion</font>
                                                                </font>
                                                            </label><input name="txtDireccionAp" id="direccion_AP" type="text" class="form-control"></div>
                                                        <div class="position-relative form-group"><label for="examplePassword" class="">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">celular</font>
                                                                </font>
                                                            </label><input name="txtCelularAp" id="celular_AP" type="text" class="form-control"></div>
                                                        
                                                            <div class="position-relative form-group"><label for="examplePassword" class="">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">parentesco</font>
                                                                </font>
                                                            </label><input name="txtParentesco" id="parentesco_AP" type="text" class="form-control"></div>
                                                    </div>
                                                </div>
                                                <!--<button class="mt-1 btn btn-primary">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Registrar</font>
                                                    </font>
                                                </button>-->
                                                <!--</form>-->
                                            </div>
                                        </div>
                                        <div class="tab-pane show" id="tab-eg115-2" role="tabpanel">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Ingresar Datos</font>
                                                    </font>
                                                </h5>
                                                <!--<form class="">-->
                                                    <!--**********Datos de Matricula*************-->
                                                <div class="row m-3 ">
                                                    <div class="column m-3" style="width: 20em;">
                                                        <div class="position-relative form-group"><label for="exampleSelect" class="">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Curso</font>
                                                                </font>
                                                            </label><select name="select" id="exampleSelect" class="form-control">
                                                                <option>
                                                                </option>
                                                            </select></div>
                                                        
                                                        <div class="position-relative form-group"><label for="form-control" class="">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Promotor</font>
                                                                </font>
                                                            </label><input name="txtPromotor" id="apMaterno" type="text" class="form-control"></div>
                                                        <div class="position-relative form-group"><label for="examplePassword" class="">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Nº Recibo</font>
                                                                </font>
                                                            </label><input name="txtRecibo" id="apMaterno" type="text" class="form-control"></div>
                                                        <div class="position-relative form-group"><label for="examplePassword" class="">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Importe</font>
                                                                </font>
                                                            </label><input name="txtImporte" id="nombre" type="text" class="form-control"></div>
                                                    </div>
                                                    <div class="column m-3" style="width: 20em;">
                                                        <div class="position-relative form-group"><label for="exampleSelect" class="">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Grupo</font>
                                                                </font>
                                                            </label><select name="select" id="exampleSelect" class="form-control">
                                                                <option>
                                                                </option>
                                                            </select></div>
                                                        <div class="position-relative form-group"><label for="form-control" class="">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Costo Matricula</font>
                                                                </font>
                                                            </label><input name="txtCosto" id="apMaterno" type="text" class="form-control"></div>
                                                        <div class="position-relative form-group"><label for="exampleText" class="">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Observacion</font>
                                                                </font>
                                                            </label><textarea name="txtObservacion" id="exampleText" class="form-control"></textarea></div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-primary" id="btn_registrarAjax">Registrar</button>
                                                
                                                <input type="hidden" id="urlregistroAJAX" value="{{route('matriculaRegistro')}}"> 

                                            </form>
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
    <script type="text/javascript" src="{{asset('template/architectui-html-free//assets/scripts/main.js')}}"></script>
    
    <script>
        $(document).ready(function() {
            function consultaAJAX() {
                
                var urlAJAX = $('#urlAJAX').val();
                var txtDNI = $('#txtDni1').val();
                
                $.ajax({
                    type: "post",
                    url: urlAJAX,
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
                            $('#apPaterno_ALU').val(alu.apPaterno);
                            $('#apPaterno_ALU').attr('disabled',true);
                            $('#apMaterno_ALU').val(alu.apMaterno);
                            $('#apMaterno_ALU').attr('disabled',true);
                            $('#nombre_AL').val(alu.nombre);
                            $('#nombre_AL').attr('disabled',true);
                            $('#direccion_AL').val(alu.direccion);
                            $('#direccion_AL').attr('disabled',true);
                            $('#celular_AL').val(alu.celular);
                            $('#celular_AL').attr('disabled',true);
                            $('#fechaNacimiento_ALU').attr('disabled',true);
                            $('#celular_AL').attr('disabled',true);

                            $('#cboGeneroAl_ALU').attr('disabled',true);
                            var option = $('#cboGeneroAl_ALU option');
                            for (var i=0;i < option.length ;i++) {
                                var ban = (option.eq(i).val() == alu.genero)?true:false;
                                option.eq(i).attr('selected',ban);
                            }
                            $('#fechaNacimiento_ALU').val(alu.feNacimiento);
                        }else{
                            if(response.cod == 100){
                                alert('Cantidad de caracteres no valido')
                            }
                            if (response.cod == 101) {
                                $('.msj_ALU').css({display:'block'});
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
                
                $('#apPaterno_ALU').val('');
                $('#apPaterno_ALU').attr('disabled',false);
                $('#apMaterno_ALU').val('');
            }

            $('#btn_buscarAJAX').click(function () {  
                consultaAJAX();
            });

            function registrarAJAX() {
                var txtDniAl = $('#txtDniAl').val();
                var txtApellidoPaAl = $('#txtApellidoPaAl').val();
                var txtApellidoMaAl = $('#txtApellidoMaAl').val();
                var txtNombreAl = $('#txtNombreAl').val();
                var cboGeneroAl = $('#cboGeneroAl').val();
                var txtDireccionAl = $('#txtDireccionAl').val();
                var txtCelularAl = $('#txtCelularAl').val();
                var txtFechaNaAl = $('#txtFechaNaAl').val();
                var urlregistroAJAX = $('#urlregistroAJAX').val();
                $.ajax({
                    type: "post",
                    url: urlregistroAJAX,
                    data:{
                        txtDniAl        :txtDniAl,
                        txtApellidoPaAl :txtApellidoPaAl,
                        txtApellidoMaAl :txtApellidoMaAl,
                        txtNombreAl     :txtNombreAl,
                        cboGeneroAl     :cboGeneroAl,
                        txtDireccionAl  :txtDireccionAl,
                        txtCelularAl    :txtCelularAl,
                        txtFechaNaAl    :txtFechaNaAl

                    },
                    dataType: 'json',
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:function(response){
                        console.log(response);
                        
                    },

                });
            }

            $('#btn_registrarAjax').click(function () { 
                registrarAJAX();
            })
        });
    </script>
 @endsection 