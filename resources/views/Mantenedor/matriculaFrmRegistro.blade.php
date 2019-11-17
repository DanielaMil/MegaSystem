@extends('layouts.app')
@section('css')

@endsection
@section('url')

@endsection

@section('content')

@foreach ($datos as $item)

@endforeach
<div class="card">
    <div class="card-body mx-auto" style="width: 500px;">
        <form class="form-inline" action="/matricula" method="POST">
            <!-- <form class="form-inline" >-->
            @csrf
            <div class="mb-2 mr-sm-2 mb-sm-0 position-relative form-group">
                <label class="mr-sm-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">DNI</font>
                    </font>
                </label><input name="txtDni" type="text" class="form-control" value={{$item->dni}}>
            </div>
            <!-- <button type="submit" class="btn btn-primary" >Buscar</button>-->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" aria-selected="">
                Buscar
            </button>
        </form>
    </div>
</div>

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

                                    @foreach ($datos as $item)
                                    <div class="row m-3 ">
                                        <div class="column m-3" style="width: 20em;">
                                            <div class="position-relative form-group">
                                                <label for="form-control" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Apellido Paterno</font>
                                                    </font>
                                                </label><input name="text" id="apMaterno" type="text" class="form-control" value={{$item->apPaterno}}></div>
                                            <div class="position-relative form-group">
                                                <label for="examplePassword" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Apellido Materno</font>
                                                    </font>
                                                </label><input name="text" id="apMaterno" type="text" class="form-control" value={{$item->apMaterno}}></div>
                                            <div class="position-relative form-group">
                                                <label for="examplePassword" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Nombre</font>
                                                    </font>
                                                </label><input name="text" id="nombre" type="text" class="form-control" value={{$item->nombre}}></div>
                                            <div class="position-relative form-group">
                                                <label for="exampleSelect" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Genero</font>
                                                    </font>
                                                </label>
                                                <select name="select" id="exampleSelect" class="form-control">
                                                    <option selected>Masculino</option>
                                                    <option>Femenino</option>
                                                </select></div>
                                        </div>
                                        <div class="column m-3" style="width: 20em;">
                                            <div class="position-relative form-group"><label for="form-control" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Direccion</font>
                                                    </font>
                                                </label><input name="text" id="apMaterno" type="text" class="form-control" value={{$item->direccion}}></div>
                                            <div class="position-relative form-group"><label for="examplePassword" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">celular</font>
                                                    </font>
                                                </label><input name="text" id="apMaterno" type="text" class="form-control" value={{$item->celular}}></div>
                                            <div class="position-relative form-group"><label for="examplePassword" class="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Fecha Nacimiento</font>
                                                    </font>
                                                </label><input name="text" id="nombre" type="date" class="form-control" value={{$item->feNacimiento}}></div>
                                        </div>
                                    </div>
                                    <button class="mt-2 btn btn-primary">
                                        <font style="vertical-align: center;">
                                            <font style="vertical-align: center;">Registrar</font>
                                        </font>
                                    </button>
                                    <!--</form>-->
                                    @endforeach
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
                                <div class="row m-3">
                                    <div class="column m-3" style="width: 20em;">
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
                                    <div class="column m-3" style="width: 20em;">
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
                                        <div class="position-relative form-group"><label for="exampleSelect" class="">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Parentesco</font>
                                                </font>
                                            </label><select name="select" id="exampleSelect" class="form-control">
                                                <option>
                                                </option>
                                            </select></div>
                                    </div>
                                </div>
                                <button class="mt-1 btn btn-primary">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Registrar</font>
                                    </font>
                                </button>
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
                                        <div class="position-relative form-group"><label for="examplePassword" class="">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Fecha</font>
                                                </font>
                                            </label><input name="text" id="nombre" type="date" class="form-control"></div>
                                        <div class="position-relative form-group"><label for="form-control" class="">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Promotor</font>
                                                </font>
                                            </label><input name="text" id="apMaterno" type="text" class="form-control"></div>
                                        <div class="position-relative form-group"><label for="examplePassword" class="">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Nº Recibo</font>
                                                </font>
                                            </label><input name="text" id="apMaterno" type="text" class="form-control"></div>
                                        <div class="position-relative form-group"><label for="examplePassword" class="">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Importe</font>
                                                </font>
                                            </label><input name="text" id="nombre" type="text" class="form-control"></div>
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
                                            </label><input name="text" id="apMaterno" type="text" class="form-control"></div>
                                        <div class="position-relative form-group"><label for="exampleText" class="">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Observacion</font>
                                                </font>
                                            </label><textarea name="text" id="exampleText" class="form-control"></textarea></div>
                                    </div>
                                </div>
                                <button class="mt-1 btn btn-primary">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Registrar</font>
                                    </font>
                                </button>
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