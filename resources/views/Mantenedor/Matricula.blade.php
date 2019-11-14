@extends('layouts.app')
@section('css')

@endsection
@section('url')
fggf>jdk>fjkfjkj
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <form class="form-inline">
            <div class="mb-2 mr-sm-2 mb-sm-0 position-relative form-group"><label class="mr-sm-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">DNI</font>
                    </font>
                </label><input name="dni" id="dni" type="number" class="form-control"></div>
            <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target="#exampleModal">
                Buscar
            </button>
        </form>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript" src="{{asset('template/architectui-html-free//assets/scripts/main.js')}}"></script>
<script>
    $(document).ready(function() {

    });
</script>
@endsection
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrar Matricula</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
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
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-eg115-0" role="tabpanel">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Dato Alumno</font>
                                        </font>
                                    </h5>
                                    <form class="">
                                        <div class="row m-3 ">
                                            <div class="column m-3">
                                                <div class="position-relative form-group"><label for="form-control" class="">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Apellido Paterno</font>
                                                        </font>
                                                    </label><input name="text" id="apMaterno" type="text" class="form-control"></div>
                                                <div class="position-relative form-group"><label for="examplePassword" class="">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Apellido Materno</font>
                                                        </font>
                                                    </label><input name="text" id="apMaterno" type="text" class="form-control"></div>
                                                <div class="position-relative form-group"><label for="examplePassword" class="">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Nombre</font>
                                                        </font>
                                                    </label><input name="text" id="nombre" type="text" class="form-control"></div>
                                                <div class="position-relative form-group"><label for="exampleSelect" class="">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Genero</font>
                                                        </font>
                                                    </label><select name="select" id="exampleSelect" class="form-control">
                                                        <option>
                                                        </option>
                                                    </select></div>
                                            </div>
                                            <div class="column m-3">
                                                <div class="position-relative form-group"><label for="form-control" class="">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Direccion</font>
                                                        </font>
                                                    </label><input name="text" id="apMaterno" type="text" class="form-control"></div>
                                                <div class="position-relative form-group"><label for="examplePassword" class="">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">celular</font>
                                                        </font>
                                                    </label><input name="text" id="apMaterno" type="text" class="form-control"></div>
                                                <div class="position-relative form-group"><label for="examplePassword" class="">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Fecha Nacimiento</font>
                                                        </font>
                                                    </label><input name="text" id="nombre" type="date" class="form-control"></div>
                                            </div>
                                        </div>
                                        <button class="mt-1 btn btn-primary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Enviar</font>
                                            </font>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane show" id="tab-eg115-1" role="tabpanel">
                                <p>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Como Aldus PageMaker, incluidas las versiones de Lorem. </font>
                                        <font style="vertical-align: inherit;">Ha sobrevivido no solo cinco siglos, sino también el salto a la composición electrónica, permaneciendo esencialmente sin cambios.</font>
                                    </font>
                                </p>
                            </div>
                            <div class="tab-pane show" id="tab-eg115-2" role="tabpanel">
                                <p>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Lorem Ipsum ha sido el texto ficticio estándar de la industria desde el año 1500, cuando una impresora desconocida tomó una galera de tipo y la mezcló para hacer un libro de muestras. </font>
                                        <font style="vertical-align: inherit;">Ha sobrevivido no solo cinco siglos, sino también el salto a la composición electrónica, permaneciendo esencialmente sin cambios.</font>
                                    </font>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>