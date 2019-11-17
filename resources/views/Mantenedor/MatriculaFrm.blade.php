@extends('layouts.app')
@section('css')

@endsection
@section('url')
fggf>jdk>fjkfjkj
@endsection

@section('content')
<div class="card">
    <div class="card-body mx-auto" style="width: 500px;">
        <form class="form-inline" action="/matricula" method="POST">
            <!-- <form class="form-inline" >-->
            @csrf
            <div class="mb-2 mr-sm-2 mb-sm-0 form-group">
                <label class="mr-sm-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">DNI</font>
                    </font>
                </label><input name="txtDni" type="text" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
            <!-- <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Buscar
                </button> -->
        </form>
    </div>
    @endsection
    @section('js')
    <script type="text/javascript" src="{{asset('template/architectui-html-free//assets/scripts/main.js')}}"></script>
    <script>
        $(document).ready(function() {

        });
    </script>
    @endsection -->