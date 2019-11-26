@extends('layouts.app')
@section('css')

@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <form class="form-inline">
            <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target="#exampleModal">
                Nuevo
            </button>
        </form>
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
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrar Nueno Ingreso</h5>
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