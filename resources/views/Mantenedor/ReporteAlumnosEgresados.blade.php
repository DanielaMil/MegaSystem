@extends('layouts.app')

@section('url')
<script type="text/javascript" src="{{asset('chartjs/dist/Chart.js')}}"></script>
<script type="text/javascript" src="{{asset('chartjs/dist/Chart.min.js')}}"></script>
<script type="text/javascript" src="{{asset('chartjs/dist/Chart.bundle.js')}}"></script>
<script type="text/javascript" src="{{asset('chartjs/dist/Chart.bundle.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/file-saver@2.0.2/dist/FileSaver.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.14.0/xlsx.full.min.js"></script>
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
        <i class="metismenu-icon pe-7s-graph3"></i>Población de Egresados
    </div>
    <canvas id="myChart"></canvas>
    <div class=" card-footer btnPDF d-flex justify-content-around m-3">
        <button type="button" class="btn btn-primary" onclick="generarPDF()">PDF</button>
        <button type="button" class="btn btn-primary" onclick="guardarExcel()">Excel</button>

    </div>
    @section('js')
    <script src="chart.js"></script>

    <script>
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

        function calcularCiclo(total, ciclo, totalEgresados) {
            for (let i = 0; i < ciclos.length; i++) {
                if (ciclo == ciclos[i]) {
                    total[i] = totalEgresados
                    break
                }

            }
        }

        function cantidadEgresados(curso, data) {
            var total = [];
            ciclos.forEach(element => {
                total.push(0);
            });
            data.forEach(element => {
                if (element.curso == curso) {
                    calcularCiclo(total, element.ciclo, element.totalEgresados)
                }
            });
            for (let i = 0; i < total.length; i++) {
                if (total[i] == 0) {
                    total[i] = null;

                } else {
                    break
                }

            }
            return total;
        }
        var data

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
                    data = response
                    var dataSets = [];
                    cursos.forEach(element => {
                        var r = Math.round(Math.random() * 255);
                        var g = Math.round(Math.random() * 255);
                        var b = Math.round(Math.random() * 255);
                        dataSets.push({
                            label: element,
                            data: cantidadEgresados(element, response),
                            backgroundColor: 'rgb(' + r + ',' + g + ',' + b + ')',
                            borderColor: 'rgb(' + r + ',' + g + ',' + b + ')',
                            fill: 'false',
                            radius: 4,
                            borderWidth: 2,
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
            pdf.save('ReporteEgresado.pdf');
        }

        function s2ab(s) {

            var buf = new ArrayBuffer(s.length);
            var view = new Uint8Array(buf);
            for (var i = 0; i < s.length; i++) view[i] = s.charCodeAt(i) & 0xFF;
            return buf;

        }

        function guardarExcel() {
            var wb = XLSX.utils.book_new();
            wb.Props = {
                Title: "SheetJS Tutorial",
                Subject: "Test",
                Author: "Red Stapler",
                CreatedDate: new Date()
            };

            wb.SheetNames.push("ReporteEgresado");
            var ws_data = [
                ['Ciclos', 'Cursos', 'Egresados']
            ];

            data.forEach(element => {
                ws_data.push([element.ciclo, element.curso, element.totalEgresados]);
            });

            var ws = XLSX.utils.aoa_to_sheet(ws_data);
            wb.Sheets["ReporteEgresado"] = ws;
            var wbout = XLSX.write(wb, {
                bookType: 'xlsx',
                type: 'binary'
            });
            saveAs(new Blob([s2ab(wbout)], {
                type: "application/octet-stream"
            }), 'ReporteEgresado.xlsx');
        }
    </script>
    @endsection
</div>
@endsection