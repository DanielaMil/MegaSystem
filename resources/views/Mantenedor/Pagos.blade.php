@extends('layouts.app')
@section('css')

@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Búsqueda</font>
            </font>
        </h5>
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
                    <input name="txtDni_Al" id="txtDni_Al" type="text"  class="form-control">
                </div>
                    
                <button type="submit" class="btn btn-primary" id="btn_buscarAJAX_AL" style="width: 80px">Buscar</button>
            </div>  
        </div>   
        <div class="card-body mb">
            <input name="txtNombre_Al" id="txtNombre_Al" type="label"  class="form-control" style="width: 30em" readonly="false">
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <table class="mb-0 table table-hover">
                        <thead>
                            <tr>
                                <th style="width: 3em">#</th>
                                <th style="width: 10em">Curso</th>
                                <th style="width: 10em">Grupo</th>
                                <th style="width: 10em">Pagos</th>
                                <th style="width: 10em">Costo Adicional</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <th scope="row"> </th>
                                    <td> </td>
                                    <td> 

                                    </td>   
                                    <td>
                                        <button type="submit" class="btn btn-primary" id="btn_buscarAJAX_AL">
                                            <i class="metismenu-icon pe-7s-cash"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ingresosModal">
                                            <i class="metismenu-icon pe-7s-graph1"></i>
                                        </button>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>   
</div>
@endsection
@section('js')
<script type="text/javascript" src="{{asset('template/architectui-html-free//assets/scripts/main.js')}}"></script>
<script>
    $(document).ready(function() {
        var urlAJAX_AL = $('#urlAJAX_AL').val();

        $.ajax({
            type:"post",
            url:AJAX_AL
        })
    })
</script>
@endsection
<div class="modal fade bd-example-modal-lg" id="ingresosModal" tabindex="-1" role="dialog" aria-labelledby="ingresosModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ingresosModalLabel">Registrar Nueno Ingreso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="">
                    <div class="row m-3">
                        <div class="column m-3 w-50">
                            <div class="position-relative form-group">
                                <label for="form-control" class="">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Persona</font>
                                    </font>
                                </label><input name="text" id="txtPaterno" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="exampleSelect" class="">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Concepto</font>
                                    </font>
                                </label>
                                <select name="select" id="cboConcepto" class="form-control">
                                    <option>

                                    </option>
                                </select>
                            </div>
                            <div class="position-relative form-group">
                                <label for="examplePassword" class="">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Fecha </font>
                                    </font>
                                </label><input name="text" id="txtFecha" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="column m-3">
                            <div class="position-relative form-group">
                                <label for="form-control" class="">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">N° de Recibo</font>
                                    </font>
                                </label><input name="text" id="txtNuroRecibo" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="examplePassword" class="">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Monto</font>
                                    </font>
                                </label><input name="text" id="txtMonto" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group"><label for="exampleText" class="">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Observacion</font>
                                    </font>
                                </label><textarea name="text" id="txtObservacion" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="mt-1 btn">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Cancelar</font>
                        </font>
                    </button>
                    <button class="mt-1 btn btn-primary">
                        <font style="vertical-align-center: inherit;">
                            <font style="vertical-align center: inherit;">Registrar</font>
                        </font>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>