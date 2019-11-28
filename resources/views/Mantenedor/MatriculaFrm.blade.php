@extends('layouts.app')
@section('css')

@endsection
@section('url')
fggf>jdk>fjkfjkj
@endsection

@section('content')   
    
            <h5 class="msj_ALU" style="display: none">*No se encontro datos de Alumno</h5>
            <!--<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> -->
                <div class="modal-dialog modal-lg" style="    margin: 0!important;
                max-width: 1500px;" role="document">
                    <div class="modal-content">
                        <!--******************Encabezado****************-->
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
                                                                <input name="txtDni_Al" id="txtDni_Al" type="text"  class="form-control">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary" id="btn_buscarAJAX_AL" style="width: 80px">Buscar</button>
                                                            <input type="hidden" id="urlAJAX_AL" value="{{route('buscar_AL')}}">
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
                                                                </label><input name="txtApellidoPa_Al" id="txtApellidoPaAl" type="text" class="form-control">
                                                            </div>
                                                            <div class="position-relative form-group"><label for="examplePassword" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Fecha Nacimiento</font>
                                                                    </font>
                                                                </label><input name="txtFechaNa_Al" id="txtFechaNaAl" type="date" class="form-control" style="width: 190px">
                                                            </div>
                                                            <div class="position-relative form-group">
                                                                    <label for="form-control" class="">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">Direccion*</font>
                                                                        </font>
                                                                    </label><input name="txtDireccionAl" id="txtDireccionAl" type="text" class="form-control">
                                                                </div>
                                                        </div>
                                                        <div class="column m-3" style="width: 18em;">
                                                                <div class="position-relative form-group"><label for="form-control" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Apellido Materno*</font>
                                                                    </font>
                                                                    </label><input name="txtApellidoMa_Al" id="txtApellidoMaAl" type="text" class="form-control">
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
                                                                    </label><input name="txtNombre_Al" id="txtNombreAl" type="text" class="form-control">
                                                                </div>
                                                            <div class="position-relative form-group">
                                                                <label for="examplePassword" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">celular</font>
                                                                    </font>
                                                                </label>
                                                                <!--<input name="txtCelular_Al" id="txtCelularAl" type="text" class="form-control" style="width: 170px">-->
                                                                <INPUT type="text" SIZE=9 id="txtCelularAl" class="form-control" style="width: 170px" onChange="validarSiNumero(value);">
                                                            </div>
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
                                                                <input name="txtDni_AP" id="txtDni_AP" type="text"  class="form-control">
                                                            </div>
                                                            
                                                            <button type="submit" class="btn btn-primary" id="btn_buscarAJAX_AP" style="width: 80px">Buscar</button>
                                                            <input type="hidden" id="urlAJAX_AP" value="{{route('buscar_AP')}}">
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
                                                                </label><input name="txtApellidopa_Ap" id="txtApellidopa_Ap" type="text" class="form-control">
                                                            </div>
                                                            <div class="position-relative form-group">
                                                                    <label for="form-control" class="">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">parentesco</font>
                                                                        </font>
                                                                    </label><input name="txtParentesco_AP" id="txtParentesco_AP" type="text" class="form-control">
                                                            </div>
                                                            <div class="position-relative form-group">
                                                                    <label for="form-control" class="">
                                                                        <font style="vertical-align: inherit;">
                                                                            <font style="vertical-align: inherit;">Direccion*</font>
                                                                        </font>
                                                                    </label><input name="txtDireccion_AP" id="txtDireccion_AP" type="text" class="form-control">
                                                            </div>

                                                        </div>
                                                        <div class="column m-3" style="width: 17em;">
                                                            <div class="position-relative form-group"><label for="form-control" class="">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Apellido Materno*</font>
                                                                </font>
                                                                </label><input name="txtApellidoMa_AP" id="txtApellidoMa_AP" type="text" class="form-control">
                                                            </div>
                                                            <div class="position-relative form-group"><label for="examplePassword" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">celular</font>
                                                                    </font>
                                                                </label><input name="txtCelular_AP" id="txtCelular_AP" type="text" class="form-control" style="width: 170px">
                                                            </div>
                                                        </div>
                                                        <div class="column m-3" style="width: 17em;">
                                                            <div class="position-relative form-group">
                                                                <label for="examplePassword" class="">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Nombre*</font>
                                                                    </font>
                                                                </label><input name="txtNombre_AP" id="txtNombre_AP" type="text" class="form-control">
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
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
                                                    <!--**********Datos de Matricula*************-->
                                                <div class="row m-3 ">
                                                    <div class="column m-3" style="width: 9em;">
                                                        <div class="mt-3 position-relative form-check">
                                                            <br>
                                                            <button type="button" onclick="ajax_get_json()">Mostrar Datos</button>
                                                            <div id="info">


                                                            </div>
                                                            <br>

                                                            <label for="exampleCheck" class="form-check-label">
                                                                <input name="check" id="exampleCheck" type="checkbox" class="form-check-input">    
                                                                    EXCEL  
                                                            </label>
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                </div>

                                                <button type="button" class="btn btn-primary" id="btn_registrarAjax">Registrar</button>
                                                <input type="hidden" id="urlregistroAJAX" value="{{route('matriculaRegistro')}}"> 

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
        function validarSiNumero(numero){
            if (!/^([0-9])*$/.test(numero))
            alert("El valor " + numero + " no es un número");
        }

    </script>
    <script type="text/javascript" src="{{asset('template/architectui-html-free//assets/scripts/main.js')}}"></script>

    <script>
        $(document).ready(function() {

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
                            $('#txtDni_Al').val(alu.dni);
                            //$('#txtDni_Al').attr('disabled',true);
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
                            $('#celular_AL').attr('disabled',true);

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

            $('#btn_buscarAJAX_AL').click(function () {  
                buscarAlumno();
            });

            function buscarApoderado(){
            }

            function registrarAJAX() {
                //Datos de Alumno
                var txtDni_Al = $('#txtDni_Al').val();
                var txtApellidoPaAl = $('#txtApellidoPaAl').val();
                var txtApellidoMaAl = $('#txtApellidoMaAl').val();
                var txtNombreAl = $('#txtNombreAl').val();
                var cboGeneroAl = $('#cboGeneroAl').val();
                var txtDireccionAl = $('#txtDireccionAl').val();
                var txtCelularAl = $('#txtCelularAl').val();
                var txtFechaNaAl = $('#txtFechaNaAl').val();

                //DAtos del Apoderado 
                var txtDni_AP = $('#txtDni_AP').val();
                var txtApellidopa_Ap = $('#txtApellidopa_Ap').val();
                var txtApellidoMa_AP = $('#txtApellidoMa_AP').val();
                var txtNombre_AP = $('#txtNombre_AP').val();
                var txtDireccion_AP = $('#txtDireccion_AP').val();
                var txtCelular_AP = $('#txtCelular_AP').val();
                var txtParentesco_AP = $('#txtParentesco_AP').val();
                var urlregistroAJAX = $('#urlregistroAJAX').val();
                $.ajax({
                    type: "post",
                    url: urlregistroAJAX,
                    data:{
                        txtDni_Al       :txtDni_Al,
                        txtApellidoPaAl :txtApellidoPaAl,
                        txtApellidoMaAl :txtApellidoMaAl,
                        txtNombreAl     :txtNombreAl,
                        cboGeneroAl     :cboGeneroAl,
                        txtDireccionAl  :txtDireccionAl,
                        txtCelularAl    :txtCelularAl,
                        txtFechaNaAl    :txtFechaNaAl,

                        txtDni_AP        :txtDni_AP,
                        txtApellidopa_Ap :txtApellidopa_Ap,
                        txtApellidoMa_AP :txtApellidoMa_AP,
                        txtNombre_AP     :txtNombre_AP,
                        txtDireccion_AP  :txtDireccion_AP,
                        txtCelular_AP    :txtCelular_AP,
                        txtParentesco_AP :txtParentesco_AP

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