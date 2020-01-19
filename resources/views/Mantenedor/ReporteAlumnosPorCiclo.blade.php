

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
       
        <div class="card-body table-responsive no-padding">
            <div class="row">
                <div class="col-md-7 ">
                    <canvas id="myChart" width="0" height="400"></canvas>                   
                </div>
                <div class="col-md-5">
                    <table class="mb-0 table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ciclo</font></font></th>
                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Matriculados</font></font></th>
                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Curso</font></font></th>
                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Grupo</font></font></th>
                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Retirados</font></font></th>
                            </tr>
                        </thead>
                        <tbody id="tblReporte3">
                            
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>

    <canvas id="myChart" width="400" height="400"></canvas>

@endsection

@section('js')
    <script>

        function listado(){
            var url = "listado";
            $.ajax({
                type: "post",
                url: url,
                dataType: "json",
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    console.log(response);
                    var arrayCiclo = [];
                    var arrayMatriculados = []
                    
                    var arrayRetirados = []
                    for(var i=0;i < response.datos.length;i++)
                    {
                      arrayCiclo.push(response.datos[i].nombre)
                    arrayMatriculados.push(response.datos[i].Matriculados)
                    arrayRetirados.push(response.datos[i].Retirados)
                    }

                    var ctx = document.getElementById('myChart');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            /*labels: ['Ciclo 2020-I', 'Ciclo 2019-III', 'Ciclo 2019-II', 'Ciclo 2019-I', 'Ciclo 2018-III', 'Ciclo 2018-I'],*/
                            labels: arrayCiclo,
                            datasets: [{
                                label: '# Matriculados',
                                /*data: [12, 19, 3, 5, 2, 3],*/
                                data:   arrayMatriculados ,                                      
                                backgroundColor: [
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(54, 162, 235, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(54, 162, 235, 1)',
                                ],
                                borderWidth: 1
                                
                            },{
                                label: '# Retirados',
                                data:   arrayRetirados,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(255, 99, 132, 0.2)',
                                    
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(255, 99, 132, 1)',
                                    
                                ],
                                borderWidth: 1
                            },{
                                label: 'Utilidades',
                                data: [20],
                                type: 'line',
                                borderColor: 'rgb(75, 192, 192)',
                                borderWidth: 2,
                                fill: false,  
                            }]
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

                    // var valores = eval(datos);

                    // var Datos = {
                    //     labels : arrayCiclo
                    //     datasets : [
                    //         {
                    //             label: '# Matriculados',
                    //             fillColor : 'rgba(91,228,146,0,6)',
                    //             strokeColor : 'rgba(57,194,112,0,7)',
                    //             highlightFill : 'rgba(73,206,180,0,6)',
                    //             highlighttroke : 'rgba(66,196,157,0,7)',
                    //             data: [12, 19, 3, 5, 2, 3],
                                
                                
                    //         },{
                    //             label: '# Retirados',
                    //             fillColor : 'rgba(91,228,146,0,6)',
                    //             strokeColor : 'rgba(57,194,112,0,7)',
                    //             highlightFill : 'rgba(73,206,180,0,6)',
                    //             highlighttroke : 'rgba(66,196,157,0,7)',
                    //             data: [12, 19, 3, 5, 2, 3],
                    //         }
                    //     ]
                        
                    // }

                    // var contexto = document.getElementById('myChart').getContext('2d');
                    // window.Barra = new Chart(contexto).Bar(Datos,{responsive : true});

                }
            });



        }

        listado();


    </script>



@endsection


