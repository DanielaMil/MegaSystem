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
    <script src="chart.js"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                datasets: [{
                    data: [60, 18, 10, 8, 4],
                    label: 'Comparacion de navegadores'
                }],
                labels: ['Google Chrome', 'Safari', 'Edge', 'Firefox', 'Opera']
            },
            options: {
                responsive: true
            }
        });
    </script>
</div>
@endsection