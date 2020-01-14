<?php 
    $con=mysqli_init(); 
    mysqli_ssl_set($con, NULL, NULL, NULL, NULL, NULL); 
    mysqli_real_connect($con, "servidortpi.mysql.database.azure.com", "patricia15@servidortpi", "PatriciaDanielaMilLimo15", "bd_megasystem", 3306);
?>

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

    <script>
       var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                /*labels: ['Ciclo 2020-I', 'Ciclo 2019-III', 'Ciclo 2019-II', 'Ciclo 2019-I', 'Ciclo 2018-III', 'Ciclo 2018-I'],*/
                labels: [
                    <?php
                        $sql = "SELECT *FROM ciclo";
                        $result = mysqli_query($con, $sql); 
                        while ($registros = mysqli_fetch_array($result))
                        {
                        ?>        
                        '<?php echo $registros["nombre"] ?>',
                        <?php    
                        }
                    ?>
                ],
                datasets: [{
                    label: '# Matriculados',
                    /*data: [12, 19, 3, 5, 2, 3],*/
                    data:   
                        <?php
                            $sql = "SELECT COUNT(*) as cantidad FROM matricula WHERE estado<>'R'";
                            $result = mysqli_query($con, $sql); 
                        ?>
                        [<?php while ($registros = mysqli_fetch_array($result)){ ?><?php echo $registros["cantidad"] ?>, 
                        <?php } ?>],
                            
                    
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
                    data:   
                        <?php
                            $sql = "SELECT COUNT(*) as cantidad FROM matricula WHERE estado='R'";
                            $result = mysqli_query($con, $sql); 
                        ?>
                        [<?php while ($registros = mysqli_fetch_array($result)){ ?><?php echo $registros["cantidad"] ?>, 
                        <?php } ?>],
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
    </script>
    
@endsection
