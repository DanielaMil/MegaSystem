@extends('layouts.app')
@section('content')
<div class="card aligne">
    <div class="card-body">
        <h5 class="card-title">Búsqueda</h5>
        <div class="form-row">
            <div class="col-md-4 offset-md-4 col-sm-6 offset-sm-3">
                <div class ="form-inline">                     
                    <div class="input-group">
                       <input type="text" class="form-control" placeholder="DNI Alumno" maxlength="8" id="dniAlumno" name="dniAlumno">
                        <div class="input-group-append">
                            <button class="btn btn-primary" id="btnBuscar">Buscar</button>
                            <input type="hidden" id="urlAJAX_AL" value="{{route('buscarAlumnos')}}">
                            
                        </div>
                    </div>
                    <div class="load" id ="load" style="display: none">Cargando....</div>
                </div>
            </div>
        </div>
        <br>
        <form class="form-row">
        <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2">
            Nombre del Alumno
            <input type="text" class="form-control" placeholder="Nombre del Alumno" id="nombreCompleto" name="nombreCompleto" disabled>   
        </div>
    </form>
    </div> 
    <div class="card-body" id="tablaCursos">
        <div class="table-responsive">
            <table class="table">
                <h5 class="card-title">Lista de Cursos</h5>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cursos</th>
                        <th scope="col">Grupos</th>
                        <th scope="col">Pagos</th>
                        <th scope="col">Costo Adicional</th>
                    </tr>
                </thead>
                <tbody id="tbCursos">         
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('modal')
<div class="modal fade bd-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false" id="zancu">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Ingreso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <label for="exampleSelect" class="">Concepto</label>
                        <select name="select" id="opciones" class="form-control">
                        </select>
                        <label for="examplePassword" class="">Importe</label>
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend"><span class="input-group-text">S/</span>
                            </div>
                            <input placeholder="00" step="1" id="txtPago" type="number" min="0" class="form-control" onkeypress="return filterFloat(event,this);" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"maxlength = "5">
                            
                        </div>
                        <label for="examplePassword" class="">Descuento</label>
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend"><span class="input-group-text">S/</span>
                            </div>
                            <input placeholder="00" step="1" id="txtDescuento" type="number"  min="0" class="form-control" onkeypress="return filterFloat(event,this);" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"maxlength = "5">
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label for="form-control" class="">N° de Recibo</label>
                        <input placeholder="0000014" name="text" id="txtNuroRecibo" type="text" class="form-control" maxlength="7" onkeypress="return filterFloat(event,this);" >
                        <label for="examplePassword" class="">Costo Total</label>
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend"><span class="input-group-text">S/</span>
                            </div>
                            <input placeholder="00" step="1" id="txtMonto" type="number" min="0" class="form-control"onkeypress="return filterFloat(event,this);" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"maxlength = "5">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Observación</label>
                        <textarea name="text" id="txtObservacion" class="form-control"></textarea>
                </div>
            </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id ="Cancelar2" >
                    Cancelar
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" id="btnRegistrarModal" >Registrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="RegPago" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Mensaje del sistema</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ¿Desea registrar el Pago?
        </div>
        <div class="modal-footer">
            <!--<button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarMatricula">SI</button>-->
            <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnRegistrarPago2" >SÍ</button> 
            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelarMatricula">No</button>
        </div>
        </div>
    </div>
</div>

<div class="modal fade " id="asd" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Mensaje del sistema</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ¿Desea registrar el costo adicional?
        </div>
        <div class="modal-footer">
            <!--<button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarMatricula">SI</button>-->
            <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnAdicional" >SÍ</button> 
            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelarMatricula">No</button>
        </div>
        </div>
    </div>
</div>
<!-- --------daniela-------------->

<div class="modal fade bd-pagos-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <input type="hidden" name="" id="urlAJAXListarCuotas" value="{{route('listarCuotas')}}">
                    <h5 class="modal-title" id="exampleModalLabel">Pagos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="main-card mb-3 card">  
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">#</font></font></th>
                                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Concepto</font></font></th>
                                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Monto</font></font></th>
                                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Saldo</font></font></th>
                                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">F. Venc.</font></font></th>
                                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Estado</font></font></th>
                                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pagar</font></font></th>
                                            </tr>
                                        </thead>
                                        <tbody id="tblCuotas">
                                                                                       
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-md-3" style="    padding-left: 0px;">
                            <div class="main-card mb-3 card" style="padding: 10px;" >
                                <h3 class="titleConcepto" style="font-size: 20px;
                                text-transform: uppercase;
                                font-weight: bold;
                                text-align: center;"></h3>
                                <hr style="margin-top:0">
                                <form action="">
                                    <input type="hidden" name="" id="urlAJAXregistrarPago" value="{{route('registrarPagos')}}">
                                    <label for="form-control-sm" class="" style="font-weight: bold">N° de Recibo</label>
                                    <input name="text" id="txtNroRecibo" type="text" class="form-control form-control-sm"  maxlength="8"  placeholder="Serie">
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
                                        <input placeholder="Importe" step="1" id="numbImporte" type="number" min="0" class="form-control" onkeypress="return filterFloat(event,this);" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"maxlength = "5">
                                    </div>
                                </form>
                                <hr style="margin-top:0">
                                <div class="d-block text-center card-footer">
                                        {{-- <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button> --}}
                                        <button class="btn-wide btn btn-success" data-toggle="modal" id="btnRegistrarPago" data-target="#RegPago" disabled ><font ><font style="vertical-align: inherit;">REGISTRAR</font></font></button>
                                    </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                <button type="button" id="btnCancelar" class="btn btn-secondary" data-dismiss="modal" >
                    Cancelar
                </button>
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection

@section('js')

<script type="text/javascript" src="{{asset('template/architectui-html-free//assets/scripts/main.js')}}"></script>
<script type="text/javascript" src="{{asset('template/architectui-html-free//assets/scripts/toastr.js')}}"></script>

<script>
function filterFloat(evt,input){
    // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
    var key = window.Event ? evt.which : evt.keyCode;    
    var chark = String.fromCharCode(key);
    var tempValue = input.value+chark;
    if(key >= 48 && key <= 57){
        if(filter(tempValue)=== false){
            return false;
        }else{       
            return true;
        }
    }else{
          if(key == 8 || key == 13 || key == 0) {     
              return true;              
          }else if(key == 46){
                if(filter(tempValue)=== false){
                    return false;
                }else{       
                    return true;
                }
          }else{
              return false;
          }
    }
}
function filter(__val__){
    var preg = /^([0-9]+\.?[0-9]{0,2})$/; 
    if(preg.test(__val__) === true){
        return true;
    }else{
       return false;
    }
    
}
    $(document).ready(function() {
            var idConcepto;
            var idMatricula;
            var descripConcepto;
            // var idAux;
            var idcuota;
            var saldoDeuda;
            var band = false;
            var modal = false;
            function limpiarModalIngreso(){
                $('.btnRegistrarIngreso').click(function(){
                    $('#txtNuroRecibo').val('');
                    $('#txtObservacion').val('');
                });
            }
            function buscarAlumno() {
                var urlAJAX_AL = $('#urlAJAX_AL').val();
                var DNI = $('#dniAlumno').val();   
                $.ajax({
                    type: "post",
                    url: urlAJAX_AL,
                    data:{
                        DNI :DNI
                    },
                    dataType: 'json',
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function (response) {
                        $('.load').css({display:'block'});
                    },
                    success: function (response) {
                        if(response.estado == true){
                            toastr["success"]("Alumno encontrado", "Éxito!")
                            toastr.options = {
                                "closeButton": false,
                                "debug": true,
                                "newestOnTop": false,
                                "progressBar": true,
                                "positionClass": "toast-top-right",
                                "preventDuplicates": false,
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
                            $('#nombreCompleto').attr('disabled',true);
                            $('#nombreCompleto').val(alu.nombreCompleto); 
                            var html = '';
                            for (var i = 0; i < response.datos.length; i++) {
                                html = html + '<tr>'
                                +'<th scope="row">'+ (i+1) +'</th>'
                                +'<td>' + response.datos[i].nombre + '</td>'
                                +'<td>' + response.datos[i].descripcion + '</td>'
                                +'<td><button type="button" value="'+response.datos[i].idMatricula+'" data-toggle="modal" data-target=".bd-pagos-modal-lg" class="btn btn-primary pagosCuotas"><i class="metismenu-icon pe-7s-cash"></i>'
                                +'</button>'
                                +'</td>'
                                +'<td>'
                                +'<button type="button" class="btn btnRegistrarIngreso btn-primary" value="'+response.datos[i].idMatricula+'" data-toggle="modal" data-target=".bd-example-modal-md">'
                                +'<i class="metismenu-icon pe-7s-graph1"></i>'
                                +'</button>'
                                +'</td>'
                                +'</tr>'
                            }   
                            $('#tbCursos').html(html);
                            obtenerMatricula();
                            limpiarModalIngreso();
                            ListarCursoXMatricula();
                        }else{
                            toastr["error"]("Alumno no encontrado", "Error")
                            toastr.options = {
                                "closeButton": false,
                                "debug": true,
                                "newestOnTop": false,
                                "progressBar": true,
                                "positionClass": "toast-top-right",
                                "preventDuplicates": false,
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
                            var nada = '';
                            $('#tbCursos').html(nada);
                            $('#nombreCompleto').val(''); 
                        }
                        $('.load').css({display:'none'});
                    },
                    error:function (error) {  
                        toastr["warning"]("Algo salió mal, por favor consulte con el administrador.", "Alerta!")
                        toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
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
                    },
                    complete:function () {  
                    }
                });
            }
            function llenarCombo() {
                var urlAJAX_AL = '/pagos/llenarCombo'  
                $.ajax({
                    type: "post",
                    url: urlAJAX_AL,
                    data:{
                    },
                    dataType: 'json',
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function (response) {
                    },
                    success: function (response) {
                        if(response.estado == true){
                            var alu = response.datos[0];
                            var html = '';
                            for (var i = 0; i < response.datos.length; i++) {
                                html = html + '<option value="'+ response.datos[i].idConcepto+'" monto="'+ response.datos[i].moTotal+'"> '+
                                    response.datos[i].descripcion 
                                +'</option>'
                            }   
                            var aux = '';
                            aux = response.datos[0].moTotal;
                            $("#txtPago").val(aux);
                            $("#txtMonto").val(aux);
                            $("#txtDescuento").val(0);
                            idConcepto = response.datos[0].idConcepto;
                            $('#txtMonto').attr('disabled',true);
                            $('#opciones').html(html);
                            seleccionar();
                            
                        }else{
                            if(response.cod == 101){
                                alert('nay');
                            }
                        }
                    },
                    error:function (error) {  
                    
                    },
                    complete:function () {  
                        
                    }
                });

            }
            function cerrarModal(){
                $('#zancu').modal("hide");
            }
            function registrarCuota() {
                var monto = $('#txtMonto').val();
                var concepto = idConcepto;
                var matricula = idMatricula;
                var feVencimiento = null;
                var pago = $('#txtPago').val();
                var descuento = $('#txtDescuento').val();
                var razon = $('#txtObservacion').val();
                var saldo = ((monto - descuento) - pago);
                var pagado = 1;
                var importe= $('#txtPago').val();
                var recibo = $('#txtNuroRecibo').val();
                if(saldo == 0){
                    pagado = 1;
                }else{
                    pagado = 0;
                }
                $.ajax({
                    type: "post",
                    url: '/pagos/registrarCuota',
                    data:{
                        monto:monto,
                        concepto:concepto,
                        matricula:matricula,
                        feVencimiento:feVencimiento,
                        descuento:descuento,
                        razon:razon,
                        saldo:saldo,
                        pagado:pagado,
                        importe:importe,
                        recibo:recibo
                    },
                    dataType: 'json',
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function (response) {
                    },  
                    success: function (response) {
                        //error no cierra el modal cuando registra 
                        //cerrarModal();
                        $('#zancu').removeClass('show');
                        $('.modal-backdrop').removeClass('show');
                        $('.modal-backdrop').removeClass('fade');
                        $('.modal-backdrop').removeClass('modal-backdrop');
                        toastr["success"]("Se registró el ingreso con éxito.", "Éxito!");
                        toastr.options = {
                        "closeButton": false,   
                        "debug": true,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
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
                    },
                    error:function (response) {  
                    },
                    complete:function (response) {  

                    }
                });

            }
            //CREATE PROCEDURE `pagosIngreso`(IN `importe` FLOAT(6,2), IN `nuRecibo` VARCHAR(12)) NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER BEGIN DECLARE aux int DEFAULT 0; SELECT cuota.idCuota into aux from cuota ORDER by idCuota DESC limit 1 ; INSERT INTO pago(importe,feEmision,nuRecibo,idCuota) VALUES(importe,NOW(),nuRecibo,aux); END
            // {function sacaridCuota(){
            //     $.ajax({
            //         type: "post",
            //         url: '/pagos/id',
            //         data:{
            //         },
            //         dataType: 'json',
            //         headers: {
            //             'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            //         },
            //         beforeSend: function (response) {
            //         },  
            //         success: function (response) {
                        
            //         },
            //         error:function () {  
            //             console.log('Error');
            //         },
            //         complete:function (response) {  
                        
            //         }
            //     });
            // }}
            function pagar(){
                $.ajax({
                    type: "post",
                    url: '/pagos/pagosIngresos',
                    data: {
                        importe: $('#txtPago').val(),
                        recibo: $('#txtNuroRecibo').val()
                    },
                    dataType: "json",
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        alert('se Registro el Pago con éxito');
                        cerrarModal();
                    },error:function (error) {  
                        toastr["error"]("No se puede repetir el número de recibo", "Error")
                        toastr.options = {
                        "closeButton": false,   
                        "debug": true,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
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
                });
            }
            
            
            function abrirModal(){
                
            }
            var aux1=0;
            function validacionTediosa(){
                var recibo = $('#txtNuroRecibo').val();
                var monto = $('#txtMonto').val();
                var descuento = $('#txtDescuento').val();
                var pago = $('#txtPago').val();
                aux1 = 0;
                band = false;
                if(pago!=''){
                    band = true;
                    if (pago == '0'){
                        band = false;
                    }else{
                        band = true;
                    }
                }else{
                    pago=0;
                    $('#txtPago').val('0');
                    band = false;
                    toastr["error"]("Por favor ingrese el importe", "Error")
                        toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
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
                var verification = $('#txtNuroRecibo').val();
                var niu = 0;
/*
                if(recibo=='' && band == true){
                    toastr["error"]("Se requiere de número de recibo para concretar el pago", "Error")
                        toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
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
                    aux1++;
                }
*/
                if (monto == 0){
                    toastr["error"]("Por favor ingrese el monto", "Error")
                        toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
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
                    aux1++;
                }
                if(monto!=''){
                       
                    }else{
                        monto = 0;
                        toastr["error"]("Por favor ingrese el monto", "Error")
                        toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
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
                    aux1++;
                }
                if(descuento!=''){


                }else{
                    descuento=0;
                    toastr["error"]("Por favor ingrese el descuento.", "Error")
                        toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
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
                    aux1++;
                }
                //alert(monto);
                
                //alert(descuento);
                aux = parseFloat( monto - descuento); 
                //alert(aux);
                if(parseFloat(pago) <= aux){
                        
                }else{
                    //error mensaje .-.
                    toastr["error"]("El pago no puede ser mayor que "+ aux, "Error")
                        toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
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
                    aux1++;
                }
                
                var suma = parseInt(pago) + parseInt(descuento);
                if (parseFloat(monto) == suma ){
                    
                }else{
                    aux1++;
                    toastr["error"]("Todo se paga en una sola cuota", "Error")
                        toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
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
                if(parseFloat(descuento) <= parseFloat(monto)){
                    
                  //  alert(descuento + 'y ' + monto);
                    }else{
                        //alert(descuento + 'y ' + monto);
                        //mostarle el monto
                    toastr["error"]("El descuento no puede ser mayor que " + monto, "Error")
                        toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
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
                    aux1++;
                }        
                if (verification.length != 7) {
                    aux1++;
                    toastr["error"]("El número recibo es de 8 dígitos", "Error")
                        toastr.options = {
                            "closeButton": false,
                            "debug": true,
                            "newestOnTop": false,
                            "progressBar": false,
                            "positionClass": "toast-top-right",
                            "preventDuplicates": false,
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
                    $.ajax({
                        type: "post",
                        url: '/pagos/duplicado',
                        data: {
                            recibo: $('#txtNuroRecibo').val()
                        },
                        dataType: "JSON",
                        headers: {
                            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            var info = JSON.parse(JSON.stringify(response));
                            console.log(info.datos[0].numero);
                            var niu = info.datos[0].numero;
                            if (niu == 1){
                                aux++;
                                    //alert('Error, No puedes hacerlo');
                                    toastr["error"]("Error, número de documento duplicado ", "Error");
                                    toastr.options = {
                                    "closeButton": false,   
                                    "debug": true,
                                    "newestOnTop": false,
                                    "progressBar": true,
                                    "positionClass": "toast-top-right",
                                    "preventDuplicates": false,
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
                            }
                            if(aux1 == 0){
                                asignarAtributo();
                            }else{
                                quitarAtributo();
                            }
                        }
                    });
                }
                
            }
            $('#btnAdicional').click(function(){
                registrarCuota();            
            });
            function asignarAtributo(){
                $("#btnRegistrarModal").attr("data-target", "#asd");
            }
            function quitarAtributo(){
                $("#btnRegistrarModal").removeAttr("data-target");
            }
            $('#btnRegistrarModal').click(function(){
                validacionTediosa();
            });
            $('#btnBuscar').click(function(){
                var verification = $('#dniAlumno').val();
                if (verification.length == 8) {
                    buscarAlumno();    
                }else{
                    var nada = '';
                    $('#tbCursos').html(nada);
                    $('#nombreCompleto').val(''); 
                    toastr["error"]("DNI contiene 8 caracteres" , "Error")
                    toastr.options = {
                        "closeButton": false,
                        "debug": true,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
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
            });
            $('#dniAlumno').on('input', function () { 
                this.value = this.value.replace(/[^0-9]/g,'');
            });
            $('#txtNroRecibo').on('input', function () { 
                this.value = this.value.replace(/[^0-9]/g,'');
            });
            $('#txtNuroRecibo').on('input', function () { 
                this.value = this.value.replace(/[^0-9]/g,'');
            });
            
            llenarCombo();
            function obtenerMatricula(){
                $('#tbCursos button').click(function(){
                    idMatricula = $(this).val();
                });
            }
            
            function validar(){
                if ($('#txtMonto').val() == 0) {
                    $('#txtMonto').attr('disabled',false);
                }else{
                    $('#txtMonto').attr('disabled',true);
                }
            }
            function seleccionar(){
                $('#opciones').change(function (e) { 
                    $("#txtMonto").val($('#opciones option[value='+$('#opciones').val()+']').attr('monto'));
                    $("#txtPago").val($('#opciones option[value='+$('#opciones').val()+']').attr('monto'));
                    $("#txtDescuento").val(0);
                    idConcepto = $('#opciones option[value='+$('#opciones').val()+']').attr('value');
                    validar();
                });
            }
            
            function ListarCursoXMatricula() {
                $(".pagosCuotas").click(function () {  
                    idMatricula = $(this).val();
                    listarCuotas(idMatricula);
                    $('#btnRegistrarPago').attr('disabled',true);
                    $('.titleConcepto').html('');
                    $('tr').css('background-color', '');
                 });
            }
            function listarCuotas(idMatricula) {
                
                    // alert(idMatricula)
                    $.ajax({
                    type: "post",
                    url: $('#urlAJAXListarCuotas').val(),
                    data: {
                        idMatricula: idMatricula
                    },
                    dataType: "json",
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        if(response.estado == true){
                            $('#txtNroRecibo').val(''); 
                            $('#numbImporte').val(''); 
                            var alu = response.datos[0];
                            
                            var html = '';
                            var fecha = '';
                            for (var i = 0; i < response.datos.length; i++) {
                                if(response.datos[i].feVencimiento == null){
                                    fecha = 'No Aplica'
                                }else{
                                    fecha = response.datos[i].feVencimiento
                                }
                                html = html + '<tr class="'+fecha+'">'
                                    +'<th scope="row">'+ (i+1) +'</th>'
                                    +'<td>' + response.datos[i].descripcion + '</td>'
                                    +'<td class="text-center">' + Number(response.datos[i].monto).toFixed(2) + '</td>'
                                    +'<td class="text-center">'+ Number(response.datos[i].saldo).toFixed(2) +'</td>'
                                    +'<td class="text-center">'+ fecha +'</td>'
                                    +'<td class="text-center"><div class="badge '+((response.datos[i].pagado==0)?"badge-danger":"badge-success")+'"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">'+((response.datos[i].pagado==0)?"PENDIENTE":"PAGADO")+'</font></font></div></td>'
                                    +'<td class="text-center">'
                                        +'<button type="button"  class="btn mr-2 mb-2 btn-primary btnPagarCuota "'+((response.datos[i].pagado==0)?"":"disabled")+' saldoDeuda='+response.datos[i].saldo+' descripcion="'+response.datos[i].descripcion+'" value="'+response.datos[i].idCuota+'" aux="'+fecha+'" debe = "'+response.datos[i].suma+'" pos="'+response.datos[i].pos+'">'
                                    +'<i class="metismenu-icon pe-7s-graph1"></i>'
                                    +'</button>'
                                    +'</td>'
                                    +'</tr>'
                            }   
                            $('#tblCuotas').html(html);
                            $('.titleConcepto').html('');
                            $('#txtNroRecibo').attr('disabled',true);
                            $('#numbImporte').attr('disabled',true);
                            formularioPagar();
                        }else{
                            var nada = '';
                            $('#tblCuotas').html(nada);
                            $('#nombreCompleto').val(''); 
                        }
                        $('.load').css({display:'none'});
                    }
                });
                
            }
            $('.pagosCuotas').click(function () {  
            });

           function formularioPagar() {
                $('.btnPagarCuota').click(function () {
                    debe = 0;
                    saldoDeuda = 0;
                    pos = 0;
                    pos = $(this).attr('pos');
                    debe = $(this).attr('debe');
                    if(pos==1){
                        $('#txtNroRecibo').attr('disabled',false);
                        $('#numbImporte').attr('disabled',false);
                        $('#txtNroRecibo').val(''); 
                        $('#numbImporte').val(''); 
                        descripConcepto = $(this).attr('descripcion');
                        idcuota = $(this).val();
                        fecha = $(this).attr('aux');
                        saldoDeuda = $(this).attr('saldoDeuda');
                        $('#numbImporte').val(saldoDeuda); 
                        $('#btnRegistrarPago').attr('disabled',false);
                        $('.titleConcepto').html(descripConcepto);
                        $('tr').css('background-color', '');
                        $('.'+fecha+'').css('background-color', '#FADBD8');
                    }else{
                        saldoDeuda = $(this).attr('saldoDeuda');
                        if((parseFloat(debe) <= parseFloat(saldoDeuda))){
                            $('#txtNroRecibo').attr('disabled',false);
                            $('#numbImporte').attr('disabled',false);
                            $('#txtNroRecibo').val(''); 
                            $('#numbImporte').val(''); 
                            descripConcepto = $(this).attr('descripcion');
                            idcuota = $(this).val();
                            fecha = $(this).attr('aux');
                            saldoDeuda = $(this).attr('saldoDeuda');
                            $('#numbImporte').val(saldoDeuda); 
                            $('#btnRegistrarPago').attr('disabled',false);
                            $('.titleConcepto').html(descripConcepto);
                            $('tr').css('background-color', '');
                            $('.'+fecha+'').css('background-color', '#FADBD8');
                        }else{
                            toastr["error"]("Aún tiene deudas pendientes", "Error")
                                toastr.options = {
                                "closeButton": false,   
                                "debug": true,
                                "newestOnTop": false,
                                "progressBar": true,
                                "positionClass": "toast-top-right",
                                "preventDuplicates": false,
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
                    }
                });
           }
           $('#RegPago').css('z-index', '9999999');
           $('#btnRegistrarPago2').click(function () {
                $('#RegPAgo').css('background-color', '');
               if( parseFloat( $('#numbImporte').val()) > saldoDeuda ){
                //alert
                toastr["error"]("No debe ingresar un monto mayor a "+saldoDeuda, "Error")
                                toastr.options = {
                                "closeButton": false,   
                                "debug": true,
                                "newestOnTop": false,
                                "progressBar": true,
                                "positionClass": "toast-top-right",
                                "preventDuplicates": false,
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
                //    alert($('#numbImporte').val())
                valida  = $('#txtNroRecibo').val();
                    if (($('#txtNroRecibo').val() != ''  &&  $('#numbImporte').val() != '')) {
                        if(valida.length==8){
                            $.ajax({
                            type: "post",
                            url: $('#urlAJAXregistrarPago').val(),
                            data: {
                                importe: $('#numbImporte').val(),
                                recibo: $('#txtNroRecibo').val(),
                                idcuota: idcuota
                            },
                            dataType: "json",
                            headers: {
                                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function (response) {
                                //aquí va el sí o no :( 
                                toastr["success"]("Se registró el pago con éxito.", "Éxito!");
                                toastr.options = {
                                "closeButton": false,   
                                "debug": true,
                                "newestOnTop": false,
                                "progressBar": true,
                                "positionClass": "toast-top-right",
                                "preventDuplicates": false,
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
                                listarCuotas(idMatricula);
                                $('#btnRegistrarPago').attr('disabled',true)
                            },error:function (error) {  
                                toastr["error"]("No se puede repetir el número de recibo", "Error")
                                toastr.options = {
                                "closeButton": false,   
                                "debug": true,
                                "newestOnTop": false,
                                "progressBar": true,
                                "positionClass": "toast-top-right",
                                "preventDuplicates": false,
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
                        });
                        }else{
                            toastr["error"]("El número de recibo es de 7 dígitos", "Error")
                                toastr.options = {
                                "closeButton": false,   
                                "debug": true,
                                "newestOnTop": false,
                                "progressBar": true,
                                "positionClass": "toast-top-right",
                                "preventDuplicates": false,
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
                    }else{
                        toastr["error"]("Por favor ingrese los datos correspondientes", "Error")
                        toastr.options = {
                        "closeButton": false,   
                        "debug": true,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
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
               }
           });

           var banResponsive = 0;

            $('.hamburger').click(function () {  
                if (banResponsive == 0) {
                    $('.app-theme-white').addClass('closed-sidebar');
                    $('.hamburger').addClass('is-active');
                    banResponsive = 1;
                }else{
                    $('.app-theme-white').removeClass('closed-sidebar');
                    $('.hamburger').removeClass('is-active');
                    banResponsive = 0;
                }
            });

            // ================================

            function filterFloat(evt,input){
    // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
    var key = window.Event ? evt.which : evt.keyCode;    
    var chark = String.fromCharCode(key);
    var tempValue = input.value+chark;
    if(key >= 48 && key <= 57){
        if(filter(tempValue)=== false){
            return false;
        }else{       
            return true;
        }
    }else{
          if(key == 8 || key == 13 || key == 0) {     
              return true;              
          }else if(key == 46){
                if(filter(tempValue)=== false){
                    return false;
                }else{       
                    return true;
                }
          }else{
              return false;
          }
    }
}
function filter(__val__){
    var preg = /^([0-9]+\.?[0-9]{0,2})$/; 
    if(preg.test(__val__) === true){
        return true;
    }else{
       return false;
    }
    
}

    })
</script>
@endsection

