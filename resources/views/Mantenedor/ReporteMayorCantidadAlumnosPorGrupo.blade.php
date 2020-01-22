@extends('layouts.app')

@section('url')
    <script type="text/javascript" src="{{asset('chartjs/dist/Chart.js')}}"></script>
    <script type="text/javascript" src="{{asset('chartjs/dist/Chart.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('chartjs/dist/utils.js')}}"></script>
   <script type="text/javascript" src="{{asset('chartjs/dist/Chart.bundle.js')}}"></script>
    <script type="text/javascript" src="{{asset('chartjs/dist/Chart.bundle.min.js')}}"></script>
	<style>
	
	</style>
@endsection

@section('content')   
    <div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">MAYOR CANTIDAD DE ALUMNOS POR GRUPO</h5>
    </div>

    <div class="card">
        <div class="card-header">
            <i class="metismenu-icon pe-7s-graph2"></i>Cantidad de alumnos           
        </div>

        
        <div class="card-body table-responsive no-padding">
            <div class="col-md-7 ">
                <canvas id="myChart" width="0" height="400"></canvas>
                
            </div>
            <div class="col-md-5">
            </div>
        </div>
    </div>
    <div>
        <select name="" id="">
            @foreach ($curso as $c)
                <option value="{{$c->idCurso}}">{{$c->nombre}}</option>
            @endforeach
        </select>
    </div>

    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
    labels: ['Ciclo 2018-I','Ciclo 2018-II','Ciclo 2019-I','Ciclo 2019-II','Ciclo 2020-I','Ciclo 2020-II',],
    datasets: [{ 
        data: [86,114,106,106,,107],
        label: "Ofimatica",
        borderColor: "#3e95cd",
        fill: false
      }, { 
        data: [282,350,411,502,635,809],
        label: "Barbería",
        borderColor: "#8e5ea2",
        fill: false
      }, { 
        data: [168,170,178,190,203,276],
        label: "Diseño Gráfico",
        borderColor: "#3cba9f",
        fill: false
      }, { 
        data: [40,20,10,16,24,38],
        label: "Cosmetología",
        borderColor: "#e8c3b9",
        fill: false
      }, { 
        data: [6,3,2,2,7,26],
        label: "Excel",
        borderColor: "#c45850",
        fill: false
      }
    ]
  },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    
@endsection
