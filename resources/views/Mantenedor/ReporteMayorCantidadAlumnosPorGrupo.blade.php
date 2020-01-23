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

        
        <div class="card-body table-responsive row no-padding" style="display: flex">
            <div class="col-md-7 ">
                <canvas id="myChart" width="0" height="400"></canvas>
                
            </div>
            <div class="col-md-5">
                <select name="" class="form-control" id="cursosCombo">
                    @foreach ($curso as $c)
                        <option value="{{$c->idCurso}}">{{$c->nombre}}</option>
                    @endforeach
                </select>
                <div class=" card-footer btnPDF d-flex justify-content-around m-3">
                    <button type="button" class="btn btn-primary" onclick="generarPDF()">PDF</button>
                    <button type="button" class="btn btn-primary" onclick="guardarExcel()">Excel</button>
            
                </div>
            </div>
        </div>
    </div>
    <div>
       
    </div>

    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
    labels: ['Ciclo 2018-I','Ciclo 2018-II','Ciclo 2019-I','Ciclo 2019-II','Ciclo 2020-I',],
    datasets: [{ 
        data: [86,114,106,106,,107],
        label: "GRUPO A",
        borderColor: "#3e95cd",
        fill: false
      }, { 
        data: [282,350,411,502,635,809],
        label: "GRUPO B",
        borderColor: "#8e5ea2",
        fill: false
      }, { 
        data: [168,170,178,190,203,276],
        label: "GRUPO C",
        borderColor: "#3cba9f",
        fill: false
      }, 
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
    </script>
@endsection

@section('js')
    <script>
        var ciclos = []
        var grupo = []
      $(document).ready(function () {
            $("#cursosCombo").change(function (e) { 
                $.ajax({
                    type: "post",
                url: "CantidadPorGrupoCurso",
                dataType: "json",
                data:{
                    id :$("#cursosCombo").val(),
                },
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    
                   console.log(response);
                   response.forEach(element => {
                       console.log(element.ciclo);
                       if (ciclos.indexOf(element.ciclo) == -1) {
                            ciclos.push(element.ciclo)   
                       }
                       if (grupo.indexOf(element.cursoNombre) == -1) {
                           grupo.push(element.cursoNombre)
                       }
                   });

                   var dataAux = []
                   for (let i = 0; i < grupo.length; i++) {
                       dataAux.push({
                            data: [86,90],
                            label: grupo[i],
                            borderColor: "#3e95cd",
                            fill: false
                       })
                   }
                   console.log(ciclos);
                    var ctx = document.getElementById('myChart');
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ciclos,
                            datasets: dataAux
                        },
                        options: {
                            responsive: true,
                        }
                    });

                }
                });
            });


            
        });


    </script>
@endsection
