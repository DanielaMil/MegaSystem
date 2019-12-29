@extends('layouts.app')
@section('css')

@endsection
@section('url')
PATRICIA
@endsection

@section('content')   
        <!--*******************Encabezado*****************-->
        <div class="modal-header">
            <h5 class="modal-title font-weight-bold" id="exampleModalLabel">REGISTRAR</h5>
        </div>
        <!--*******************FIN_Encabezado****************--->
        <!--****************************************Formulario****************************************-->
        <div class="card">
            <div class="card-body">
                <ul class="tabs-animated-shadow nav-justified tabs-animated nav">
                    <li class="nav-item">
                        <a role="tab" class="nav-link show active" id="tab-c1-0" data-toggle="tab" href="#tab-animated1-alumno" >
                            <span class="nav-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ALUMNO</font></font></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" class="nav-link show" id="tab-c1-1" data-toggle="tab" href="#tab-animated1-apoderado" >
                            <span class="nav-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">APODERADO</font></font></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" class="nav-link show " id="tab-c1-2" data-toggle="tab" href="#tab-animated1-matricula" >
                            <span class="nav-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MATRÍCULA</font></font></span>
                        </a>
                    </li>
                </ul>

                <hr style="margin-top:0">

                <div class="tab-content">
                    <div class="tab-pane show  active" id="tab-animated1-alumno" role="tabpanel">
                        <h5 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">DATOS</font></font></h5>          
                        <form class="form-inline">   
                            @csrf      
                            <div class="mx-auto">
                                <div class="mb-2 mr-sm-2 mb-sm-0 position-relative form-group">
                                    <label for="examplePassword22" class="mr-sm-2" style="font-weight: bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">DNI</font></font></label>
                                    <input name="txtDni_Al" id="txtDni_Al" type="text" class="form-control" maxlength="8" autocomplete="off" onkeypress="return soloNumeros(event)">
                                    <button type="submit" id="btn_buscarAJAX_AL" class="btn btn-info" style="width: 80px">BUSCAR</button>
                                </div>

                                <input type="hidden" id="urlAJAX_AL" value="{{route('buscar_AL')}}">                                 
                                <input type="hidden" id="auxIdAl" >  
                                <div class="load" style="display: none">Cargando....</div>
                            </div>                  
                           
                        </form>
                        <br><br>    
                        <form class="needs-validation " novalidate="" >
                            @csrf 
                            <div class="form-row">
                                <div class="col-md-3 mb-4 mx-auto ">
                                    <label for="txtApellidoPaAl" style="font-weight: bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apellido Paterno</font></font></label>
                                    <input type="text" class="form-control" placeholder="" value="" required="" name="txtApellidoPa_Al" id="txtApellidoPaAl"  maxlength="20" autocomplete="off" onkeypress="return soloLetras(event)" disabled="true">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4 mx-auto ">
                                    <label for="txtApellidoMaAl" style="font-weight: bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apellido Materno</font></font></label>
                                    <input name="txtApellidoMa_Al" id="txtApellidoMaAl" type="text" maxlength="20" autocomplete="off" class="form-control" onkeypress="return soloLetras(event)" disabled="true">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4 mx-auto ">
                                    <label for="txtNombreAl" style="font-weight: bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombres</font></font></label>                                                                      
                                    <input name="txtNombre_Al" id="txtNombreAl" type="text" maxlength="20" autocomplete="off" class="form-control" onkeypress="return soloLetras(event)" disabled="true">
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>                                    
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-4 mx-auto ">
                                    <label for="txtFechaNaAl" style="font-weight: bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecha Nacimiento</font></font></label>
                                    <input name="txtFechaNa_Al" id="txtFechaNaAl" type="date" class="form-control" style="width: 190px"  onkeypress="return soloNumeros(event)" disabled="true">
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4 mx-auto ">
                                    <label for="cboGeneroAl" style="font-weight: bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Género</font></font></label>
                                    <select name="cboGenero_Al" id="cboGeneroAl"  class="form-control" style="width: 140px" disabled="true">
                                        <option selected value="-1">-Seleccione-</option>
                                        <option value="1">Masculino</option>
                                        <option value="0">Femenino</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4 mx-auto ">
                                    <label for="txtCelularAl" style="font-weight: bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Celular</font></font></label>
                                    <input type="text" SIZE=9 id="txtCelularAl" class="form-control" autocomplete="off" style="width: 170px" maxlength="9" onkeypress="return soloNumeros(event)" disabled="true">
                                    <input type="hidden" id="urlAJAX_cantidadAL" value="{{route('cantidadCelularAP')}}">
                                    <div class="invalid-feedback">
                                        Please provide a valid zip.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-4 ml-5 ">
                                    <label for="txtDireccionAl" style="font-weight: bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dirección</font></font></label>
                                    <input name="txtDireccionAl" id="txtDireccionAl" maxlength="40" type="text" autocomplete="off" class="form-control" disabled="true">
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                                
                            </div>
                            <hr style="margin-top:1em">
                            <div class="text-center ">
                                <button class="btn-wide btn btn-secondary" type="button" disabled="true" id="btnLimpiarAlumno">LIMPIAR</button>
                                <input type="hidden" id="urlAJAX_Guardar_Datos_Alumno" value="{{route('guardar_Alumno')}}">
                                <button class="btn-wide btn btn-success" type="button" disabled="true"  id="btn_guardar_Alumno">REGISTRAR</button>
                            </div>
                        </form>
                       
                    </div>

                    <div class="tab-pane show" id="tab-animated1-apoderado" role="tabpanel">
                        <h5 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">DATOS</font></font></h5>          
                        <form class="form-inline">   
                            @csrf      
                            <div class="mx-auto">
                                <div class="mb-2 mr-sm-2 mb-sm-0 position-relative form-group">
                                    <label for="examplePassword22" class="mr-sm-2" style="font-weight: bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">DNI</font></font></label>
                                    <input name="txtDni_AP" id="txtDni_AP" type="text" autocomplete="off" class="form-control" maxlength="8" onkeypress="return soloNumeros(event)">
                                    <button type="submit" class="btn btn-info" id="btn_buscarAJAX_AP" style="width: 80px">BUSCAR</button>
                                </div>

                                
                                <input type="hidden" id="urlAJAX_AP" value="{{route('buscar_AP')}}">
                                <input type="hidden" id="auxIdApoderado" value="">  
                                <div class="load" style="display: none">cargando....</div>
                            </div>                  
                           
                        </form>
                        <br><br>    
                        <form class="needs-validation " novalidate="" >
                            @csrf 
                            <div class="form-row">
                                <div class="col-md-3 mb-4 mx-auto ">
                                    <label for="txtApellidopa_Ap" style="font-weight: bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apellido Paterno</font></font></label>
                                    <input name="txtApellidopa_Ap" id="txtApellidopa_Ap" type="text" autocomplete="off" class="form-control" onkeypress="return soloLetras(event)" disabled="true">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4 mx-auto ">
                                    <label for="txtApellidoMa_AP" style="font-weight: bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apellido Materno</font></font></label>
                                    <input name="txtApellidoMa_AP" id="txtApellidoMa_AP" type="text" autocomplete="off" class="form-control" onkeypress="return soloLetras(event)"disabled="true">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4 mx-auto ">
                                    <label for="txtNombreAl" style="font-weight: bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombres</font></font></label>                                                                      
                                    <input name="txtNombre_AP" id="txtNombre_AP"  autocomplete="off" type="text" class="form-control" onkeypress="return soloLetras(event)" disabled="true">
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>                                    
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-4 ml-5 mr-4">
                                    <label for="txtParentesco_AP" style="font-weight: bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Parentesco</font></font></label>
                                    <input name="txtParentesco_AP" id="txtParentesco_AP" type="text" autocomplete="off" class="form-control" onkeypress="return soloLetras(event)" disabled="true">
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                                
                                <div class="col-md-3 mb-4 ml-5">
                                    <label for="txtCelular_AP" style="font-weight: bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Celular</font></font></label>
                                    <input name="txtCelular_AP" id="txtCelular_AP" autocomplete="off" type="text" class="form-control" style="width: 170px" maxlength="9" onkeypress="return soloNumeros(event)" disabled="true">
                                    <input type="hidden" id="urlAJAX_cantidadCelularAP" value="{{route('cantidadCelularAP')}}">
                                    <div class="invalid-feedback">
                                        Please provide a valid zip.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-4 ml-5 ">
                                    <label for="txtDireccion_AP" style="font-weight: bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dirección</font></font></label>
                                    <input name="txtDireccion_AP" id="txtDireccion_AP" type="text"  autocomplete="off" class="form-control" disabled="true">
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                                
                            </div>
                            <hr style="margin-top:1em">
                            <div class="text-center ">
                                <button class="btn-wide btn btn-secondary" type="button" disabled="true" id="btnLimpiarApoderado">LIMPIAR</button>
                                <input type="hidden" id="urlAJAX_Guardar_Datos_Apoderado" value="{{route('guardar_Apoderado')}}">
                                <button class="btn-wide btn btn-success" type="button" disabled="true"  id="btn_guardar_Apoderado">REGISTRAR</button>
                            </div>
                        </form>
                    </div>
                    
                    <div class="tab-pane show" id="tab-animated1-matricula" role="tabpanel">
                        <h5 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">DATOS</font></font></h5>
                        <div class="row">
                            <input type="hidden" id="urlAJAX_ListarGrupo" value="{{route('listarGrupo')}}"> 
                            <div class="col-md-9">
                                <div class="main-card mb-3 card">  
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">#</font></font></th>
                                                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Curso</font></font></th>
                                                    <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Grupo</font></font></th>
                                                    <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Datos de Pago</font></font></th>
                                                </tr>
                                            </thead>
                                            <tbody id="tblCursos">
                                                                                           
                                            </tbody>
                                        </table>
                                    </div>     
                                </div>
                            </div>
    
                            <div class="col-md-3" style="    padding-left: 0px;">
                                <div class="main-card mb-3 card" style="padding: 10px;" >
                                    <h3 class="titleCurso" style="font-size: 20px;
                                    text-transform: uppercase;
                                    font-weight: bold;
                                    text-align: center;"></h3>
                                    <hr style="margin-top:0">
                                    <form action="">
                                        <input type="hidden" name="" id="urlAJAXregistrarPago" value="{{route('registrarPagos')}}">
                                        <label for="form-control-sm" class="" style="font-weight: bold">N° Recibo</label>
                                        <input name="text" id="txtNroRecibo" type="text" class="form-control form-control-sm">
                                        <br>
                                        <label for="form-control" class="" style="font-weight: bold">Importe</label>
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-prepend"><span class="input-group-text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                        S/
                                                    </font>
                                                </font></span>
                                            </div>
                                            <input placeholder="00" step="1" id="numbImporte" type="number" min="0" class="form-control">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                            .00
                                                        </font>
                                                    </font>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                    <hr style="margin-top:0">
                                    <div class="d-block text-center card-footer">
                                            {{-- <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button> --}}
                                            <button class="btn-wide btn btn-success" id="btnRegistrarPago" disabled ><font ><font style="vertical-align: inherit;">REGISTRAR</font></font></button>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card card">
                                    <div class="form-row">
                                        <div class="col-md-3 mb-4 mx-auto mt-3">
                                            <label for="txtRecibo" style="font-weight: bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">N° Recibo</font></font></label>
                                            <input name="txtRecibo" id="txtRecibo" autocomplete="off" type="text" maxlength="8" class="form-control">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-4 pr-0 mt-3">
                                            <label for="txtDniPromotor" style="font-weight: bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Promotor</font></font></label>
                                            <input name="txtDniPromotor" id="txtDniPromotor" autocomplete="off" type="text"  placeholder="DNI" class="form-control" maxlength="8" onkeypress="return soloNumeros(event)">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                                                                                                                  
                                        </div>
                                        <div class="col-md-1 mt-5 pt-0 pl-0">
                                            <button type="submit" class="btn btn-info" id="btnBuscarPromotor" >Buscar</button>                                                                                  
                                            <input type="hidden" id="urlAJAX_Promotor" value="{{route('buscar_Promotor')}}">
                                        </div>
                                        <div class="col-md-3 mb-2 mx-auto mt-4">
                                            <label for="txtNombreAl" style="font-weight: bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></label>                                                                      
                                            <input name="txtNombre_Al" id="txtNombreAl" type="text" maxlength="20" placeholder="Nombre" autocomplete="off" class="form-control" onkeypress="return soloLetras(event)" disabled="true">
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>                                    
                                        </div>
                                    </div>  
                                </div>
                            </div>     
                        </div>
                        
                        <hr style="margin-top:1em">
                        <div class="text-center ">
                            <button class="btn-wide btn btn-secondary" type="button" disabled="true" id="btnLimpiarApoderado">CANCELAR</button>
                            <input type="hidden" id="urlAJAX_Guardar_Datos_Apoderado" value="{{route('guardar_Apoderado')}}">
                            <button class="btn-wide btn btn-success" type="button" disabled="true"  id="btn_guardar_Apoderado">REGISTRAR</button>
                        </div>
                    </div>
                </div>
            </div>         
        </div>
        
        <!--*************************************FIN_Formulario*****************************************-->

        
@endsection

@section('modal')
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            ¿Desea registrar Matrícula?
        </div>
        <div class="modal-footer">
          <!--<button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarMatricula">SI</button>-->
           <button type="button" class="btn btn-primary" id="btn_registrarAjax"  >Registrar</button>
          <input type="hidden" name="urlregistroAJAX" id="urlregistroAJAX" url="{{route('matriculaRegistro')}}">
          
          <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelarMatricula">NO</button>

        </div>
      </div>
    </div>
  </div>
@endsection


@section('js')
<!--<script type="text/javascript" src="./assets/scripts/main.js"></script></body>-->
<script type="text/javascript" src="{{asset('template/architectui-html-free//assets/scripts/main.js')}}"></script>

<script type="text/javascript" src="{{asset('template/architectui-html-free//assets/scripts/toastr.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

    <script>
        function confirmationM() 
        {
            if(confirm("Seguro que desea registrar Matrícula?")){
                registrarAJAX();
                LimpiarFormularioALU_dni02();
                LimpiarFormularioApoderado_dni();
                MontoMatricula();
                tabla(null);



                return true;
                
            }else{
                return false;
            }
        }

        $('#btn_registrarAjax').click(function () {  
            confirmationM();
        });

        function confirmationC() 
        {
            if(confirm("Seguro que desea cancelar el Proceso?")){
                
                return true;
            }else{
                return false;
            }
        }

        $('#btnCancelar').click(function () {  
            confirmationC();
        });

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

        //--------------Tablas---------------------------------

        function tabla(auxdeni) {
            var urlAJAX_ListarGrupo = $('#urlAJAX_ListarGrupo').val();
           
            $.ajax({
                type: "post",
                url: urlAJAX_ListarGrupo,
                data:{
                    auxdeni :auxdeni
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
                    var tabla;
                    var estado ;
                    var estadoc;
                    var estadop;

                    for(var i=0;i < response.datosC.length;i++){
                        estadoc =0;
                        estadop=0;
                        for(var j=0;j < response.datosG.length;j++){
                            
                            if ( response.datosC[i].idCurso ==  response.datosG[j].idCurso) {
                                for(var p=0;p < response.datosGND.length;p++){
                                    if(response.datosG[j].idCurso ==  response.datosGND[p].idCurso){
                                        estadop = 1;
                                    }

                                    /*if(response.datosG[j].vacante < 1){
                                        estadop = 1;
                                    }*/
                                }
                                /*if(response.datosG[j].vacante == 0){
                                        estadop = 1;
                                }*/
                            }
                        }
                        if (estadop==0) {

                        tabla+='<tr><td><input name="check" ban=0 key="'+response.datosC[i].idCurso+'" type="checkbox" class="form-check-input checkCurso"></td>'

                                +'<td>'+response.datosC[i].nombre+'</td>'
                                +'<td><select name="estado" class="form-control codigoGrupo" style="width: 250px">'
                                for(var j=0;j < response.datosG.length;j++){
                                    estado=0;
                                    if ( response.datosC[i].idCurso ==  response.datosG[j].idCurso) {
                                        for(var p=0;p < response.datosGND.length;p++){
                                            if(response.datosG[j].idGrupo ==  response.datosGND[p].idGrupo){
                                                estado = 1;
                                            }
                                        }
                                        if (estado==0) {
                                            tabla+='<option value="'+response.datosG[j].idGrupo+'">'+response.datosG[j].descripcion+'vac:'+response.datosG[j].vacante+'</option>'
                                        }
                                    }
                                }
                            tabla+='</select></td>'
                                +'<td><button class="btnPagarCurso">pago</button></td></tr>';  
                            }
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
                        //*******
                        var e = new Date(alu.feInicio);
                        e.setMonth(e.getMonth() + (j+1));

                        //********
                        //var fechaaux = alu.feInicio;

                        tabla01+='<tr><td>'+(j+1)+'°'+'</td>'
                        +'<td>'+auxMonto+'</td>'
                        +'<td>'+"fecha: "+e.getFullYear() +"-"+ (e.getMonth()+1) +"-"+ e.getDate() +'</td></tr>'      
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

        function desbloquearMatricula(){
            $('#txtImporte').attr('disabled',false);
            $('#txtComentario').attr('disabled',false);
            $('#txtDescuento').attr('disabled',false);
        }

        //----------------VALIDAR/CANTIDAD DE DATOS------------------------
        function cantidadDni_AL() {
            var txtDni_Al = $('#txtDni_Al');
            
            txtDni_Al.change(function () {
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
                            //encotro dni del alumno
                        }else{
                            if(response.cod == 100){
                                //cantidad de caracteres menor al de 8
                                toastr["warning"]("en el DNI del alumno", "Cantidad de caracteres inválido")

                                toastr.options = {
                                "closeButton": false,
                                "debug": true,
                                "newestOnTop": false,
                                "progressBar": true,
                                "positionClass": "toast-top-right",
                                "preventDuplicates": true,
                                "onclick": null,
                                "showDuration": "300",
                                "hideDuration": "1000",
                                "timeOut": "5000",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                                }
                            }
                            if (response.cod == 101) {
                                 // No se encuentra el dni del alumno
                           
                            }
                        }
                        // $('.load').css({display:'none'});
                    },
                    error:function (error) {  
                    
                    },
                    complete:function () {  
                    }
                });


            });
        }

        cantidadDni_AL();

        function cantidadDni_AP() {
            var txtDni_Al = $('#txtDni_AP');
            
            txtDni_Al.change(function () {
                var urlAJAX_AL = $('#urlAJAX_AP').val();
                var txtDNI = $('#txtDni_AP').val();
                
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
                            //encotro dni del alumno
                        }else{
                            if(response.cod == 100){
                                //cantidad de caracteres menor al de 8
                                toastr["warning"]("en el DNI del apoderado", "Cantidad de caracteres inválido")

                                toastr.options = {
                                "closeButton": false,
                                "debug": true,
                                "newestOnTop": false,
                                "progressBar": true,
                                "positionClass": "toast-top-right",
                                "preventDuplicates": true,
                                "onclick": null,
                                "showDuration": "300",
                                "hideDuration": "1000",
                                "timeOut": "5000",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                                }
                            }
                            if (response.cod == 101) {
                                 // No se encuentra el dni del alumno
                           
                            }
                        }
                        // $('.load').css({display:'none'});
                    },
                    error:function (error) {  
                    
                    },
                    complete:function () {  
                    }
                });


            });
        }

        cantidadDni_AP();

        function cantidadDni_CEL() {
            var txtCelularAP = $('#txtCelular_AP');
            
            txtCelularAP.change(function () {
                var urlAJAXCEL = $('#urlAJAX_cantidadCelularAP').val();
                var txtCel = $('#txtCelular_AP').val();
                
                $.ajax({
                    type: "post",
                    url: urlAJAXCEL,
                    data:{
                        txtCel :txtCel
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
                        
                        
                        if(response.cod == 100){
                            //cantidad de caracteres menor al de 8
                            toastr["warning"]("en el celular", "Cantidad de caracteres inválido")

                            toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                        }
                        
                        // $('.load').css({display:'none'});
                    },
                    error:function (error) {  
                    
                    },
                    complete:function () {  
                    }
                });


            });
        }

        cantidadDni_CEL();

        function cantidadDni_CEL01() {
            var txtCelularAl = $('#txtCelularAl');
            
            txtCelularAl.change(function () {
                var urlAJAXCEL = $('#urlAJAX_cantidadAL').val();
                var txtCel = $('#txtCelularAl').val();
                
                $.ajax({
                    type: "post",
                    url: urlAJAXCEL,
                    data:{
                        txtCel :txtCel
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
                        
                        
                        if(response.cod == 100){
                            //cantidad de caracteres menor al de 8
                            toastr["warning"]("en el celular", "Cantidad de caracteres inválido")

                            toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                        }
                        
                        // $('.load').css({display:'none'});
                    },
                    error:function (error) {  
                    
                    },
                    complete:function () {  
                    }
                });


            });
        }

        cantidadDni_CEL01();

        function validarImporte() {
            var txtImporte = $('#txtImporte');
            
            txtImporte.change(function () {
                var urlAJAXVal = $('#urlAJAX_monto').val();
                var monImporte = $('#txtImporte').val();
                var monMatricula = $('#txtMatricula').val();
                
                $.ajax({
                    type: "post",
                    url: urlAJAXVal,
                    data:{
                        monImporte :monImporte,
                        monMatricula :monMatricula
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
                                                
                        if(response.cod == 101){
                            //cantidad de caracteres menor al de 8
                            toastr["error"]("mayor al pago de la Matrícula", "Importe")

                            toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                            //$('#txtImporte').attr('disabled',false);
                            $('#txtImporte').val('');
                           // $('#txtImporte').attr('disabled',true);
                        }
                        
                        // $('.load').css({display:'none'});
                    },
                    error:function (error) {  
                    
                    },
                    complete:function () {  
                    }
                });


            });
        }

        validarImporte();

        function validarDescuento() {
            var txtDescuento = $('#txtDescuento');
            
            txtDescuento.change(function () {
                var urlAJAXVal = $('#urlAJAX_desc').val();
                var monDescuento = $('#txtDescuento').val();
                var monMensual = $('#txtMensualidad').val();
                
                $.ajax({
                    type: "post",
                    url: urlAJAXVal,
                    data:{
                        monDescuento :monDescuento,
                        monMensual :monMensual
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
                                                
                        if(response.cod == 101){
                            //cantidad de caracteres menor al de 8
                            toastr["error"]("mayor al pago de la Mensualidad", "Descuento")

                            toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                            //$('#txtImporte').attr('disabled',false);
                            $('#txtDescuento').val('');
                           // $('#txtImporte').attr('disabled',true);
                        }
                        
                        // $('.load').css({display:'none'});
                    },
                    error:function (error) {  
                    
                    },
                    complete:function () {  
                    }
                });


            });
        }

        validarDescuento();

        //--------------SELECCIONAR DATOS----------------------- sdfsdfsf
        function SeleccionarCuros() {
            var selectCurso = $('.checkCurso');
            var selectGrupo = $('.codigoGrupo');
            var mensualidad = $('#txtMensualidad');
            var matricula = $('#txtMatricula');
            var comentario = $('#txtComentario');

   
            
            selectCurso.each(function (index,element) {
                var e = $(this);
                e.click(function () {
                    //desbloquearMatricula();

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
            //$('#txtImporte').attr('disabled',false);
            $('#txtImporte').val('');
           // $('#txtComentario').attr('disabled',false);
            $('#txtComentario').val('');
           // $('#txtDescuento').attr('disabled',false);
            $('#txtDescuento').val('');

            btnPagar.each(function (index, element) {
               // desbloquearMatricula();
                var e = $(this);
                
                e.click(function () {
                    desbloquearMatricula();
                    
                    $('#tbody02').html('');
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
        //--------------ACTUALIZACIONES-------------------------
        function ActualizarImporte() {
            var IDImporte = $('#txtImporte');
            
            IDImporte.change(function () {
                // alert(UbicacionPago)
               // arrayCursosMatriculados[UbicacionPago].importe = IDImporte.val();
               arrayCursosMatriculados[UbicacionPago].importe = parseFloat(IDImporte.val());
                
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
                if (newMenualidad>=0){
                    mensualidad.val(Number(newMenualidad).toFixed(2));
                    arrayCursosMatriculados[UbicacionPago].descuento = parseFloat(IDDescueto.val());
                    arrayCursosMatriculados[UbicacionPago].pagoMens = newMenualidad;
                    arrayCursosMatriculados[UbicacionPago].razon = comentario.val();
                    console.log(arrayCursosMatriculados);

                    auxMonto = newMenualidad;
                }
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

        //-----------------ALUMNO----------------------
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
                        toastr["success"]("encontrado", "Alumno")

                        toastr.options = {
                        "closeButton": false,
                        "debug": true,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": true,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                        }

                        var alu = response.datos[0];
                        
                        $('#auxIdAl').val(alu.idAlumno);
                        $('#txtDni_Al').val(alu.dni);
                        $('#txtDni_Al').attr('disabled',true);
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
                        $('#btn_guardar_Alumno').attr('disabled',true);
                        
                        $('#btnLimpiarAlumno').attr('disabled',false);

                        $('#btn_registrarAjax').attr('disabled',false);
                        $('#btnGuardarTablaAjax').attr('disabled',false);
                        $('#btnCancelar').attr('disabled',false);

                        tabla(alu.dni);
                        bloquearMatricula();
                    }else{
                        
                        if(response.cod == 100){
                            toastr["warning"]("en el DNI del alumno", "Cantidad de caracteres inválido")

                            toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                            //LimpiarFormularioALU();
                        }
                        if (response.cod == 101) {
                            tabla(null);
                           // $('.msj_ALU').css({display:'block'});
                           toastr["error"]("No se encuentra registrado", "Alumno")

                            toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                            LimpiarFormularioALU();
                            $('#btn_guardar_Alumno').attr('disabled',false);
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

        //--------------------PROMOTOR---------------------
        function buscarPromotor01(){
            var urlAJAX_Promotor = $('#urlAJAX_Promotor').val();
            var txtDniPromotor = $('#txtDniPromotor').val();

            $.ajax({
                type: "post",
                url: urlAJAX_Promotor,
                data:{
                    txtDniPromotor :txtDniPromotor
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
                        toastr["success"]("encontrado", "Promotor")

                        toastr.options = {
                        "closeButton": false,
                        "debug": true,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": true,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                        }
                        var alu = response.datos[0];
                        $('#txtNombrePromotor').val(alu.nombre+' '+alu.apPaterno+' '+alu.apMaterno);
                                            
                    }else{
                        if(response.cod == 100){
                           toastr["warning"]("en el DNI del promotor", "Cantidad de caracteres inválido")

                            toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                            $('#txtNombrePromotor').attr('disabled',false);
                            $('#txtNombrePromotor').val('');
                            $('#txtNombrePromotor').attr('disabled',true);
                        }
                        if (response.cod == 101) {
                           // $('.msj_APO').css({display:'block'});
                           toastr["error"]("No se encuentra registrado", "Promotor")

                            toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }

                            $('#txtNombrePromotor').attr('disabled',false);
                            $('#txtNombrePromotor').val('');
                            $('#txtNombrePromotor').attr('disabled',true);
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

        $('#btnBuscarPromotor').click(function () {  
            buscarPromotor01();
        });

        //------------------APODERADO-----------------
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
                        toastr["success"]("encontrado", "Apoderado")

                        toastr.options = {
                        "closeButton": false,
                        "debug": true,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": true,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                        }
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
                        
                        $('#btnLimpiarApoderado').attr('disabled',false);
                    }else{
                        if(response.cod == 100){
                            toastr["warning"]("en el DNI del apoderado", "Cantidad de caracteres inválido")

                            toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                            //LimpiarFormularioApoderado();
                        }
                        if (response.cod == 101) {
                           // $('.msj_APO').css({display:'block'});
                           toastr["error"]("No se encuentra registrado", "Apoderado")

                            toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }

                            $('#btnLimpiarApoderado').attr('disabled',false);
                            $('#btn_guardar_Apoderado').attr('disabled',false);

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

        function LimpiarFormularioApoderado_dni() {
            $('#auxIdApoderado').val('');  
            $('#txtApellidopa_Ap').val('');
            $('#txtApellidopa_Ap').attr('disabled',true);
            $('#txtApellidoMa_AP').val('');
            $('#txtApellidoMa_AP').attr('disabled',true);
            $('#txtNombre_AP').val('');
            $('#txtNombre_AP').attr('disabled',true);
            $('#txtDireccion_AP').val('');
            $('#txtDireccion_AP').attr('disabled',true);
            $('#txtCelular_AP').val('');
            $('#txtCelular_AP').attr('disabled',true);
            $('#txtParentesco_AP').val('');
            $('#txtParentesco_AP').attr('disabled',true);
        }

        $('#btnLimpiarApoderado').click(function () {  
            LimpiarFormularioApoderado_dni();

            $('#txtDni_AP').val('');
            $('#txtDni_AP').attr('disabled',false);

        });

        $('#btn_buscarAJAX_AP').click(function () {  
            buscarApoderado();
        });

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

        /*function registrarAJAX() {
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
            var txtRecibo = $('#txtRecibo').val();
            var txtDniPromotor = $('#txtDniPromotor').val(); 

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

                    txtRecibo        :txtRecibo,
                    txtDniPromotor   :txtDniPromotor,

                    cursos : arrayCursosMatriculados
                },
                dataType: 'json',
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(response){
                    console.log(response);
                    alert("Se registro los datos correctamente");
                   LimpiarFormularioALU();
                   LimpiarFormularioApoderado();
                },

            });
        }*/

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
            var txtRecibo = $('#txtRecibo').val();
            var txtDniPromotor = $('#txtDniPromotor').val(); 

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

                    txtRecibo        :txtRecibo,
                    txtDniPromotor   :txtDniPromotor,

                    cursos : arrayCursosMatriculados
                },
                dataType: 'json',
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(response){
                    console.log(response);
                    if(response.cod == 101){

                        Command: toastr["success"]("registrada correctamente", "Matrícula")

                        toastr.options = {
                        "closeButton": false,
                        "debug": true,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-top-center",
                        "preventDuplicates": true,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                        }
                    }else{
                        
                        if(response.cod == 100){
                            toastr["warning"]("en el recibo de la Matrícula", "Cantidad de caracteres inválido")

                            toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                            //LimpiarFormularioALU();
                        }

                    }
                   //LimpiarFormularioALU();
                   //LimpiarFormularioApoderado();
                },
                error:function (error) {  
                    alert("Debe seleccionar almenos un curso");
                },
                complete:function () {  
                }

            });

       
        }

       /* $('#btn_registrarAjax').click(function () { 
            registrarAJAX();
        })*/

        function registrar_Alumno() {
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

            var urlAJAX_Guardar_Datos_Alumno = $('#urlAJAX_Guardar_Datos_Alumno').val();
            

            $.ajax({
                type: "post",
                url: urlAJAX_Guardar_Datos_Alumno,
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

                },
                dataType: 'json',
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(response){
                    console.log(response);
                    if(response.estado == true){
                        toastr["success"]("correctamente", "Se registro Alumno")

                        toastr.options = {
                        "closeButton": false,
                        "debug": true,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-top-center",
                        "preventDuplicates": true,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                        }

                        var alu = response.datos[0];
                        
                        $('#txtApellidoPaAl').attr('disabled',true);
                        $('#txtApellidoMaAl').attr('disabled',true);
                        $('#txtNombreAl').attr('disabled',true);
                        $('#txtDireccionAl').attr('disabled',true);
                        $('#txtCelularAl').attr('disabled',true);
                        $('#txtFechaNaAl').attr('disabled',true);
                        $('#txtDni_Al').attr('disabled',true);
                        $('#cboGeneroAl').attr('disabled',true);
                       
                        $('#btn_guardar_Alumno').attr('disabled',true);
                        $('#btnLimpiarAlumno').attr('disabled',false);

                        $('#btn_registrarAjax').attr('disabled',false);
                        $('#btnGuardarTablaAjax').attr('disabled',false);
                        $('#btnCancelar').attr('disabled',false);

                        tabla(alu.dni);
                    }else{
                        tabla(null);
                        if(response.cod == 100){
                            toastr["warning"]("en datos del alumno", "Cantidad de caracteres inválido")

                            toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                            //LimpiarFormularioALU();
                        }
                        if (response.cod == 101) {
                           // $('.msj_ALU').css({display:'block'});
                           toastr["error"]("Falta llenar campos obligatorios", "Error!!")

                            toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                            //LimpiarFormularioALU();
                            $('#btn_guardar_Alumno').attr('disabled',false);
                        }
                    }
                   //LimpiarFormularioALU();
                   //LimpiarFormularioApoderado();
                },

            });
        }

        $('#btn_guardar_Alumno').click(function () { 
            registrar_Alumno();
        })

        function LimpiarFormularioALU_dni() {  

            $('#auxIdAl').val('');
            $('#txtApellidoPaAl').val('');
            $('#txtApellidoPaAl').attr('disabled',true);
            $('#txtApellidoMaAl').val('');
            $('#txtApellidoMaAl').attr('disabled',true);
            $('#txtNombreAl').val('');
            $('#txtNombreAl').attr('disabled',true);
            $('#txtDireccionAl').val('');
            $('#txtDireccionAl').attr('disabled',true);
            $('#txtCelularAl').val('');
            $('#txtCelularAl').attr('disabled',true);
            $('#txtFechaNaAl').val('');
            $('#txtFechaNaAl').attr('disabled',true);
            //$('#cboGeneroAl').val('');
            $('#cboGeneroAl').attr('disabled',true);

            
        }

        function LimpiarFormularioALU_dni02() {  

            $('#auxIdAl').val('');
            $('#txtApellidoPaAl').val('');
            $('#txtApellidoPaAl').attr('disabled',true);
            $('#txtApellidoMaAl').val('');
            $('#txtApellidoMaAl').attr('disabled',true);
            $('#txtNombreAl').val('');
            $('#txtNombreAl').attr('disabled',true);
            $('#txtDireccionAl').val('');
            $('#txtDireccionAl').attr('disabled',true);
            $('#txtCelularAl').val('');
            $('#txtCelularAl').attr('disabled',true);
            $('#txtFechaNaAl').val('');
            $('#txtFechaNaAl').attr('disabled',true);
            //$('#cboGeneroAl').val('');
            $('#cboGeneroAl').attr('disabled',true);

            $('#txtDni_Al').val('');
            $('#txtDni_Al').attr('disabled',false);
        }


        $('#btnLimpiarAlumno').click(function () { 
            LimpiarFormularioALU_dni();
            
            $('#txtDni_Al').val('');
            $('#txtDni_Al').attr('disabled',false);

            //$('#btnLimpiarAlumno').attr('disabled',true);
        }) 

        function registrar_Apoderado() {
            //Datos de Alumno auxIdApoderado-auxIdAl
            
            var auxIdApoderado = $('#auxIdApoderado').val();

            var txtDni_AP = $('#txtDni_AP').val();
            var txtApellidopa_Ap = $('#txtApellidopa_Ap').val();
            var txtApellidoMa_AP = $('#txtApellidoMa_AP').val();
            var txtNombre_AP = $('#txtNombre_AP').val();
            var txtDireccion_AP = $('#txtDireccion_AP').val();
            var txtCelular_AP = $('#txtCelular_AP').val();
            var txtParentesco_AP = $('#txtParentesco_AP').val();

            var urlAJAX_Guardar_Datos_Apoderado = $('#urlAJAX_Guardar_Datos_Apoderado').val();
            

            $.ajax({
                type: "post",
                url: urlAJAX_Guardar_Datos_Apoderado,
                data:{
                    
                    auxIdApoderado   :auxIdApoderado,
                    txtDni_AP        :txtDni_AP,
                    txtApellidopa_Ap :txtApellidopa_Ap,
                    txtApellidoMa_AP :txtApellidoMa_AP,
                    txtNombre_AP     :txtNombre_AP,
                    txtDireccion_AP  :txtDireccion_AP,
                    txtCelular_AP    :txtCelular_AP,
                    txtParentesco_AP :txtParentesco_AP,

                },
                dataType: 'json',
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(response){
                    console.log(response);
                    if(response.estado == true){
                        toastr["success"]("correctamente", "Se registro Apoderado")

                        toastr.options = {
                        "closeButton": false,
                        "debug": true,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-top-center",
                        "preventDuplicates": true,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                        }

                        var alu = response.datos[0];
                        
                        $('#txtApellidopa_Ap').attr('disabled',true);
                        $('#txtApellidoMa_AP').attr('disabled',true);
                        $('#txtNombre_AP').attr('disabled',true);
                        $('#txtDireccion_AP').attr('disabled',true);
                        $('#txtCelular_AP').attr('disabled',true);
                        $('#txtDni_AP').attr('disabled',true);
                        $('#txtParentesco_AP').attr('disabled',true);
                        

                        $('#btn_guardar_Apoderado').attr('disabled',true);
                        
                        $('#btnLimpiarApoderado').attr('disabled',false);

                        tabla(alu.dni);
                    }else{
                        tabla(null);
                        if(response.cod == 100){
                            toastr["warning"]("en datos del Apoderado", "Cantidad de caracteres inválido")

                            toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                            //LimpiarFormularioALU();
                        }
                        if (response.cod == 101) {
                           // $('.msj_ALU').css({display:'block'});
                           toastr["error"]("Falta llenar campos obligatorios", "Error!!")

                            toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                            }
                            //LimpiarFormularioALU();
                            $('#btn_guardar_Apoderado').attr('disabled',false);
                        }
                    }
                   //LimpiarFormularioALU();
                   //LimpiarFormularioApoderado();
                },

            });
        }
        $('#btn_guardar_Apoderado').click(function () { 
            registrar_Apoderado();
        })   

        
        
       /* $('#btnLimpiarApoderado').click(function () { 
            LimpiarFormularioApoderado();
            
            $('#txtDni_AP').val('');
            $('#txtDni_AP').attr('disabled',false);
        }) */
    </script>
    
 @endsection 