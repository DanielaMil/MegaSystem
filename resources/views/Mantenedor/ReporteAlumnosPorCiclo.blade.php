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
                <div class="col-lg-6">
                    <div class="form-inline">
                        <div class="mb-2 mr-sm-2 mb-sm-2 position-relative form-group" id="example_length">
                            <label class="mr-sm-2">Ver </label>
                                <input placeholder="3" name="txt" id="txtNroCiclos" type="number" autocomplete="off" class="form-control form-control-sm" min="1" step="1" max="3" style="width: 58px;"> 
                                <input type="hidden" id="urlAJAX_nroCiclos" value="{{route('validarNroCiclos')}}">
                            <label class="ml-sm-2">últimos ciclos de
                                <input name="txt" id="txtTotalCiclos" class="form-control" type="text" style="width: 4em; border: 0; background-color: #fff; font-weight: bold; color:lightseagreen" >
                                <input type="hidden" id="urlAJAX_totalCiclos" style="width: 4em; border: 0;" value="{{route('verTotalCiclos')}}">
                            </label>

                            <button type="button" id="btn_verAJAX" class="btn btn-info" >
                                <i class="fa fa-fw" aria-hidden="true" title="Copy to use eye"></i>
                                VER
                            </button>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-inline">
                        <div class="mb-2 mr-sm-2 mb-sm-2 position-relative form-group" id="example_length">
                            <label class="mr-sm-2">Exportar a </label>
                            <a href="{{route('imprimir')}}" style="color: white; text-decoration:none;" target="_blank" >
                                <button type="button" id="btnPDF" class="btn btn-danger mr-sm-2">
                                    <i class="fa fa-fw" aria-hidden="true" title="Copy to use file-pdf-o"></i>
                                    PDF
                                </button>
                            </a>
                            <button type="button" id="btn_verAJAX" class="btn btn-success mr-sm-2" >
                                <i class="fa fa-fw" aria-hidden="true" title="Copy to use file-excel-o"></i>
                                EXCEL
                            </button> 
                        </div>
                        
                    </div>
                </div>
                
            </div>

            <div class="divider"></div>
            <div class="row">
                <div class="col-md-7 card " id="prueba">
                        {{-- <canvas id="myChart" width="0" height="400"></canvas> --}}
                                                           
                </div>
                <div class="col-md-5">
                    <table class="mb-0 table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ciclo</font></font></th>
                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"># Matriculados</font></font></th>
                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"># Cursos</font></font></th>
                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"># Grupos</font></font></th>
                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"># Retirados</font></font></th>
                            </tr>
                        </thead>
                        <tbody id="tblReporte3">
                            
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>


@endsection

@section('js')

<script type="text/javascript" src="{{asset('template/architectui-html-free//assets/scripts/main.js')}}"></script>

<script type="text/javascript" src="{{asset('template/architectui-html-free//assets/scripts/toastr.js')}}"></script>
    <script>
         

        function listado(){
            var url = "listado";
            var nroCiclos = $('#txtNroCiclos').val();

            $.ajax({
                type: "post",
                url: url,
                data:{
                    nroCiclos :nroCiclos,
                },
                dataType: "json",
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    console.log(response);
                    var arrayCiclo = [];
                    var arrayMatriculados = [] ;                   
                    var arrayRetirados = [];
                    var html='';     

                    for(var i=0;i < response.datos.length;i++)
                    {
                        arrayCiclo.push(response.datos[i].nombre)
                        arrayMatriculados.push(response.datos[i].Matriculados)
                        arrayRetirados.push(response.datos[i].Retirados)

                        html = html + '<tr>'
                                    +'<td>' + response.datos[i].nombre + '</td>'
                                    +'<td class="text-center">' + response.datos[i].Matriculados + '</td>'
                                    +'<td class="text-center">'+ response.datos[i].nombre +'</td>'
                                    +'<td class="text-center">'+ response.datos[i].nombre +'</td>'
                                    +'<td class="text-center">'+ response.datos[i].Retirados +'</td>'
                                    +'</tr>'

                    }
                    $('#tblReporte3').html(html);
                    $('#prueba').html('<canvas id="myChart" width="450" height="225" class="chartjs-render-monitor" style="display: block; width: 450px; height: 225px;"></canvas>  ')
                    
                    var ctx = document.getElementById('myChart');
                    ctx.width=ctx.width;
                new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: arrayCiclo,
                            datasets: [{
                                label: '# Matriculados',
                                data:   arrayMatriculados ,                                                            
                                backgroundColor:'rgba(54, 162, 235, 0.2)',
                                borderColor: 'rgba(54, 162, 235, 1)',
                                borderWidth: 1,
                                
                            },{
                                label: '# Retirados',
                                data:   arrayRetirados,
                                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                borderColor: 'rgba(255, 99, 132, 1)',                                  
                                borderWidth: 1,
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
                   
                }
            });

        }
        
        
        $("#myChart").hover(function(event) {
  event.preventDefault();
}); 

        $('#btn_verAJAX').click(function () { 
            listado();
        })
         listado();

        function validarNroCiclos() {
            var txtNroCiclos = $('#txtNroCiclos');

            txtNroCiclos.change(function () {
                var urlAJAXVal = $('#urlAJAX_nroCiclos').val();
                var nroCiclos = $('#txtNroCiclos').val();
                $.ajax({
                    type: "post",
                    url: urlAJAXVal,
                    data:{
                        nroCiclos :nroCiclos,
                    },
                    dataType: 'json',
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function (response) {
                        // $('.load').css({display:'block'});
                    },
                    success: function (response) {
                        console.log(response);
                                                
                        if(response.cod == 100){
                            //cantidad de caracteres menor al de 8
                            toastr["warning"]("inválido", "Número de ciclos")

            toastr.options = {
            "closeButton": true,
            "debug": true,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            }
                            //$('#txtImporte').attr('disabled',false);
                            $('#txtNroCiclos').val('');
                           // $('#txtImporte').attr('disabled',true);
                        }
                        
                        // $('.load').css({display:'none'});
                    },
                    error:function (error) {  
                    
                    },
                    complete:function () {  
                    }
                });


            });
        }

        validarNroCiclos();

        function totalCiclos() {
            
            var urlAJAX_totalCiclos = $('#urlAJAX_totalCiclos').val();

            $.ajax({
                type: "post",
                url: urlAJAX_totalCiclos,
                dataType: 'json',
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function (response) {
                    // $('.load').css({display:'block'});
                },
                success: function (response) {
                    console.log(response);

                    var total = response.datos[0];
                    
                    $('#txtTotalCiclos').attr('disabled',true);
                    $('#txtTotalCiclos').val(total.nroCiclos);
                },
                error:function (error) {  
                },
                complete:function () {  
                }
            });
        }

        totalCiclos();
        

        


    </script>

    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>

    {{-- <script>
        function generarPDF(){
            Canvas = document.getElementById("myChart");
            Context = Canvas.getContext("2d");

            var imgData = Canvas.toDataURL('image/png');
            var pdf = new jsPDF('landscape');

            pdf.addImage(imgData, 'PNG', 30,30 , 140,70);
            pdf.save('ReporteAlumnosCiclo.pdf');
        }
    </script>
    --}}



@endsection


