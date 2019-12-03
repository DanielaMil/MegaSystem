@extends('layouts.app')
@section('content')
    <div class="card aligne">
        <div class="card-body">
            <h5 class="card-title">Búsqueda</h5>
            <div class="form-row">
                <div class="col-md-4 offset-md-4 col-sm-6 offset-sm-3">
                    <div class ="form-inline">                     
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="DNI Alumno" id="dniAlumno" name="dniAlumno">
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
<div class="modal fade bd-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false">
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
                        <label for="examplePassword" class="">Pago</label>
                        <input name="text" id="txtPago" type="text" class="form-control">
                        <label for="examplePassword" class="">Descuento</label>
                        <input name="text" id="txtDescuento" type="text" class="form-control">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <label for="form-control" class="">N° de Recibo</label>
                        <input name="text" id="txtNuroRecibo" type="text" class="form-control">
                        <label for="examplePassword" class="">Costo Total</label>
                        <input name="text" id="txtMonto" type="text" class="form-control">
                    </div>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Cancelar
                    </button>
                    <button type="button" id="btnRegistrarModal" data-dismiss="" class="btn btn-primary" >
                        Registrar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- --------daniela------------ -->
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

                        <div class="col-md-3" style="padding-left: 0px;">
                            <div class="main-card mb-3 card" style="padding: 10px;" >
                                <h3 class="titleConcepto" style="font-size: 20px;
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
                                        <div class="input-group-prepend"><span class="input-group-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S/</font></font></span></div>
                                        <input placeholder="00" step="1" id="numbImporte" type="number" min="0" class="form-control">
                                        <div class="input-group-append"><span class="input-group-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">.00</font></font></span></div>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Cancelar</font>
                        </font>
                    </button>
                </div>
            </div>
        </div>
    </div>
 
@endsection

@section('js')
    {{-- <script type="text/javascript" src="{{asset('template/architectui-html-free//assets/scripts/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/architectui-html-free//assets/scripts/toastr.js')}}"></script> --}}
    <script type="text/javascript" src="{{asset('template/architectui-html-free//assets/scripts/main.js')}}"></script>
    
    <script type="text/javascript" src="{{asset('template/architectui-html-free//assets/scripts/toastr.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
                var idConcepto;
                var idMatricula;
                var descripConcepto;

                var idcuota;
                var saldoDeuda;
                var band = false;
                function LimpiarFormIngresos(){
                    $('.btnRgistrarIngresos').click(function () {  
                        $('#txtNuroRecibo').val('');
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
                                toastr["success"]("Se encontró al Alumno Identificado con el DNI: " + DNI + '.', "Éxito!")
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
                                        +'<button type="button" class="btn mr-2 mb-2 btnRgistrarIngresos btn-primary" value="'+response.datos[i].idMatricula+'" data-toggle="modal" data-target=".bd-example-modal-md">'
                                        +'<i class="metismenu-icon pe-7s-graph1"></i>'
                                        +'</button>'
                                        +'</td>'
                                        +'</tr>'
                                }   
                                $('#tbCursos').html(html);
                                obtenerMatricula();
                                LimpiarFormIngresos();
                                ListarCursoXMatricula();
                            }else{
                                toastr["error"]("No se Encontró al Alumno Identificado con el DNI: " + DNI + '.', "Error!")
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
                            toastr["warning"]("Algo salió mal, por favor consulte con el Administrador.", "Alerta!")
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
                                    +'<button type="button" class="btn btnRgistrarIngresos btn-primary" value="'+response.datos[i].idMatricula+'" data-toggle="modal" data-target=".bd-example-modal-md">'
                                    +'<i class="metismenu-icon pe-7s-graph1"></i>'
                                    +'</button>'
                                    +'</td>'
                                    +'</tr>'
                            }   
                            $('#tbCursos').html(html);
                            obtenerMatricula();
                            ListarCursoXMatricula();
                        }else{
                            toastr["error"]("No se Encontró al Alumno Identificado con el DNI: " + DNI + '.', "Error!")
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
                        band = false;
                    }
                    if(monto!=''){
                        band =  true;
                        }else{
                            toastr["error"]("Por Favor Ingrese el Monto.", "Error")
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
                        band = false;
                    }
                    if(descuento!=''){
                        band =  true;
                    }else{
                        toastr["error"]("Por Favor Ingrese el Descuento.", "Error")
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
                        band = false;
                    }
                    if(pago!=''){
                        band =  true;
                    }else{
                        toastr["error"]("Por Favor Ingrese el Pago.", "Error")
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
                        band = false;
                    }       
                    if(pago <= aux){
                        band = true ;
                    }else{
                        //alert('El Pago no puede ser mayor que el monto');
                        band = false;
                    }
                    if(descuento <= monto){
                        band = true;
                        }else{
                        //alert('El Descuento no puede ser mayor que el monto');
                        band = false;
                    }
                });

            }
            function registrarCuota() {
                var monto = $('#txtMonto').val();
                var concepto = idConcepto;
                var matricula = idMatricula;
                var feVencimiento = null;
                var descuento = $('#txtDescuento').val();
                var razon = $('#txtObservacion').val();
                var saldo = (monto - descuento);
                $.ajax({
                    type: "post",
                    url: '/pagos/registrar',
                    data:{
                        monto:monto,
                        concepto:concepto,
                        matricula:matricula,
                        feVencimiento:feVencimiento,
                        descuento:descuento,
                        razon:razon,
                        saldo:saldo
                    },
                    dataType: 'json',
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function (response) {
                    },  
                    success: function (response) {
                        toastr["success"]("Se Registró el Ingreso con éxito.", "Éxito!")

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
                    error:function (XMLHttpRequest, textStatus, errorThrown) {  
                        console.log('Error')
                    },
                    complete:function (response) {  
                        
                    }
                });

            }
            function registrarCta(){

            }
            
            function abrirModal(){
                $('#btnRegistrarModal').attr('data-dismiss','');
            }
            var aux1=0;
            function validacionTediosa(){
                var recibo = $('#txtNuroRecibo').val();
                var monto = $('#txtMonto').val();
                var descuento = $('#txtDesuento').val();
                var pago = $('#txtPago').val();
                aux1 = 0;
                if(recibo!= ''){
                    } else{
                        toastr["error"]("Por Favor Ingrese la Serie del Recibo.", "Error")
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
                        toastr["error"]("El número de Carácteres válidos es de 8 y Usted está ingresando "+ verification.length + ' Por Favor Ingrese una cántidad válida.' , "Error!")
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
                    aux1++;
                }
                if(descuento!=''){
                    descuento=0;
                }else{
                    toastr["error"]("Por Favor Ingrese el Descuento.", "Error")
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
                if(pago!=''){
                    
                }else{
                    toastr["error"]("Por Favor Ingrese el Pago.", "Error")
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
            
                aux = parseFloat( $('#txtMonto').val()) - parseFloat( $('#txtDescuento').val()); 
                alert(aux); 
                if(parseFloat( $('#txtPago').val()) <= aux){
                    
                }else{
                    toastr["error"]("El Pago no puede ser mayor que el monto restando el descuento.", "Error")
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
                if(descuento <= monto){
                    
                    }else{
                    toastr["error"]("El Descuento no puede ser mayor que el monto.", "Error")
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
                alert(aux1);
                     
            }
            function cerrarModal(){
                $('#btnRegistrarModal').attr('data-dismiss','modal');
            }
            $('#btnRegistrarModal').click(function(){
                abrirModal();
                validacionTediosa();
                if(aux1==0){
                    registrarCuota();
                    cerrarModal();
                }else{
                    
                }
            });
            
            $('#btnBuscar').click(function(){
                var verification = $('#dniAlumno').val();
                if (verification.length == 8) {
                    buscarAlumno();    
                }else{
                    var nada = '';
                    $('#tbCursos').html(nada);
                    $('#nombreCompleto').val(''); 
                    toastr["error"]("El número de Carácteres válidos es de 8 y Usted está ingresando "+ verification.length + ' Por Favor Ingrese una cántidad válida.' , "Error!")
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
            $('#txtMonto').on('input', function () { 
                this.value = this.value.replace(/[^0-9]/g,'');
            });
            $('#txtPago').on('input', function () { 
                this.value = this.value.replace(/[^0-9]/g,'');
            });
            $('#txtDescuento').on('input', function () { 
                this.value = this.value.replace(/[^0-9]/g,'');
            });
            llenarCombo();
            function obtenerMatricula(){
                $('#tbCursos button').click(function(){
                    idMatricula = $(this).val();
                });

            function formularioPagar() {
                    $('.btnPagarCuota').click(function () {
                        descripConcepto = $(this).attr('descripcion');
                        idcuota = $(this).val();
                        saldoDeuda = $(this).attr('saldoDeuda');
                        $('#btnRegistrarPago').attr('disabled',false);
                        $('.titleConcepto').html(descripConcepto);
                    });
            }

            $('#btnRegistrarPago').click(function () {

                if( parseFloat( $('#numbImporte').val()) > saldoDeuda ){
                    alert('no debe ingresar saldo mayor');
                }else{
                    //    alert($('#numbImporte').val())
                        if (($('#txtNroRecibo').val() != ''  &&  $('#numbImporte').val() != '')) {
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
                                    // if(response == true){

                                        listarCuotas(idMatricula);
                                        $('#btnRegistrarPago').attr('disabled',true)
                                        // alert('registar correctamente')
                                    // }else{
                                        
                                        
                                    // }
                                }
                            });
                        }else{
                            alert('Faltan Datos');
                        }
                }
            });

            
            // RESPONSIVE POR PROBLEMAS DE LIBRERIAS
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

        })
    </script>
@endsection