@extends('layouts.app')

@section('url')
<script type="text/javascript" src="{{asset('chartjs/dist/Chart.js')}}"></script>
<script type="text/javascript" src="{{asset('chartjs/dist/Chart.min.js')}}"></script>
<script type="text/javascript" src="{{asset('chartjs/dist/Chart.bundle.js')}}"></script>
<script type="text/javascript" src="{{asset('chartjs/dist/Chart.bundle.min.js')}}"></script>
<style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
</style>
@endsection
@section('content')
<div class="modal-header">
    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">RESUMEN POR CICLOS</h5>
</div>
<div class="card">
    <div class="card-header">
        <i class="metismenu-icon pe-7s-graph3"></i>Población de alumnos
    </div>
    <canvas id="myChart"></canvas>
    <div class="btnPDF d-flex justify-content-around m-3">
        <button type="button" class="btn btn-primary" onclick="generarPDF()">PDF</button>
        <button type="button" class="btn btn-primary">Excel</button>

    </div>
    @section('js')
    <script src="chart.js"></script>

    <script>
        function cantidadEgresados(curso, data) {
            var total = [];
            data.forEach(element => {
                if (element.curso == curso) {
                    total.push(element.totalEgresados);
                }
            });
            return total;
        }
        var cursos = [];

        function cargarCursos() {
            $.ajax({
                type: "get",
                url: "cursos",
                dataType: "json",

                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    response.forEach(element => {
                        cursos.push(element.nombre)
                    });
                    console.log(cursos)
                }
            });
        }
        var ciclos = []

        function cargarCiclos() {
            $.ajax({
                type: "get",
                url: "ciclos",
                dataType: "json",

                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    response.forEach(element => {
                        ciclos.push(element.nombre)
                    });
                    console.log(ciclos)
                }
            });
        }
        cargarCursos();
        cargarCiclos();

        function listado() {
            var url = "egresadosPorCurso";
            $.ajax({
                type: "get",
                url: url,
                dataType: "json",
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                    var dataSets = [];
                    cursos.forEach(element => {
                        dataSets.push({
                            label: element,
                            data: cantidadEgresados(element, response),
                            backgroundColor: 'rgb(' + Math.round(Math.random() * 255) + ',' + Math.round(Math.random() * 255) + ',' + Math.round(Math.random() * 255) + ')',
                            fill: 'false',
                        });
                    });
                    console.log(dataSets)
                    var ctx = document.getElementById('myChart');
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ciclos,
                            datasets: dataSets
                        },
                        options: {
                            responsive: true,
                        }
                    });


                }
            });



        }
        listado()
    </script>
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>

    <script>
        function generarPDF() {
            Canvas = document.getElementById("myChart");
            Context = Canvas.getContext("2d");

            var imgData = Canvas.toDataURL('image/png');
            var pdf = new jsPDF('landscape');
            pdf.addImage(imgData, 'PNG', 30, 30, 240, 140);
            pdf.save('download.pdf');
        }
    </script>
    @endsection
</div>
@endsection