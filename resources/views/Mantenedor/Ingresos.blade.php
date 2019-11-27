@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <form class="form-inline">
        <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Nuevo</button>
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
