@extends('layouts.app')
@section('css')

@endsection
@section('url')
@endsection
@section('content')
<div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section-block" id="basicform">
                <h3 class="section-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elementos básicos de forma</font></font></h3>
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Use estilos de botones personalizados para acciones en formularios, cuadros de diálogo y más con soporte para múltiples tamaños, estados y más.</font></font></p>
            </div>
            <div class="card">
                <h5 class="card-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Forma básica</font></font></h5>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Texto de entrada</font></font></label>
                            <input id="inputText3" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dirección de correo electrónico</font></font></label>
                            <input id="inputEmail" type="email" placeholder="name@example.com" class="form-control">
                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nunca compartiremos su correo electrónico con nadie más.</font></font></p>
                        </div>
                        <div class="form-group">
                            <label for="inputText4" class="col-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Entrada de número</font></font></label>
                            <input id="inputText4" type="number" class="form-control" placeholder="Numbers">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contraseña</font></font></label>
                            <input id="inputPassword" type="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Entrada de archivo</font></font></label>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ejemplo textarea</font></font></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="card-body border-top">
                    <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dimensionamiento</font></font></h3>
                    <form>
                        <div class="form-group">
                            <label for="inputSmall" class="col-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pequeña</font></font></label>
                            <input id="inputSmall" type="text" value=".form-control-sm" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="inputDefault" class="col-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Defecto</font></font></label>
                            <input id="inputDefault" type="text" value="Default input" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputLarge" class="col-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Grande</font></font></label>
                            <input id="inputLarge" type="text" value=".form-control-lg" class="form-control form-control-lg">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script src="jsjdjha"></script>
    <script>
        $(document).ready(function () {
            
        });
    </script>    
@endsection