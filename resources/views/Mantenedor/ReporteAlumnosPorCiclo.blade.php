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
    <script type="text/javascript" src="{{asset('jsPDF/jspdf.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('jsPDF/html2canvas.js')}}"></script>
    <script>
        function generarPDF(){
            html2canvas(document.getElementById("capturaPDF"),{
                onrendered: function (canvas) {
                    var img = canvas.toDataURL(image/png);
                    var pdf = new jsPDF();
                    pdf.text(20,20,'Holaa');
                    pdf.addImage(img, 'JPG', 20, 20);
                    pdf.save(prueba.pdf);
                }
            });  
        }
    </script>   

@endsection

@section('content')   
    <div class="modal-header" id="encabezado">
        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">RESUMEN POR CICLOS</h5>
    </div>

    <div class="card">
        <div class="card-header" id="encabezado2">
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
                            {{-- <a href="{{route('imprimir')}}" style="color: white; text-decoration:none;" target="_blank" > --}}
                            {{-- <a href="javascript:generarPDF()" style="color: white; text-decoration:none;" > --}}

                                <button type="button" id="btnPDF" class="btn btn-danger mr-sm-2" onclick="generarPDF()">
                                    <i class="fa fa-fw" aria-hidden="true" title="Copy to use file-pdf-o"></i>
                                    PDF
                                </button>
                            {{-- </a> --}}
                            <button type="button" id="btn_verAJAX" class="btn btn-success mr-sm-2"  onclick="generarEXCEL()" >
                                <i class="fa fa-fw" aria-hidden="true" title="Copy to use file-excel-o"></i>
                                EXCEL
                            </button> 
                        </div>
                        
                    </div>
                </div>
                
            </div>

            <div class="divider"></div>
            <div id="division" style="display:none">
                <p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            </div>
            <div class="row" id="capturaPDF">
                <div class="col-md-7 card " id="prueba">
                        {{-- <canvas id="myChart" width="0" height="400"></canvas> --}}
                                                           
                </div>
                <div class="col-md-5" id="tabla">
                    <table class="mb-0 table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">N°</font></font></th>
                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ciclo</font></font></th>
                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"># Matriculados</font></font></th>
                                {{-- <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"># Cursos</font></font></th>
                                <th class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"># Grupos</font></font></th> --}}
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

    <script type="text/javascript" src="{{asset('jsPDF/jspdf.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('jsPDF/html2canvas.js')}}"></script>
    
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
                                    +'<td>' + (i+1) + '</td>'
                                    +'<td>' + response.datos[i].nombre + '</td>'
                                    +'<td class="text-center">' + response.datos[i].Matriculados + '</td>'
                                    // +'<td class="text-center">'+ response.datos[i].nombre +'</td>'
                                    // +'<td class="text-center">'+ response.datos[i].nombre +'</td>'
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

    <script>
        function generarPDF(){
            Canvas = document.getElementById("myChart");
            Context = Canvas.getContext("2d");  

            var imgData = Canvas.toDataURL('image/png');
            var pdf = new jsPDF('landscape');
            
            pdf.setDrawColor(0);           
            pdf.setFillColor(63, 106, 216);
            pdf.rect(20, 20, 10, 10, 'F');

            pdf.fromHTML($('#encabezado').get(0),35,20,{
                'width':500 });
            pdf.fromHTML($('#encabezado2').get(0),35,35,{
            'width':500 });
            pdf.fromHTML($('#division').get(0),20,45,{
            'width':500 });
            

            pdf.addImage(imgData, 'PNG', 60,65 , 180,90);

            var imgData = 'data:image/png;base64,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'
            pdf.addImage(imgData, 'JPEG', 200, 25, 55, 15)

            pdf.save('ReporteAlumnosCiclo.pdf');
        }

        function s2ab(s) {

            var buf = new ArrayBuffer(s.length);
            var view = new Uint8Array(buf);
            for (var i = 0; i < s.length; i++) view[i] = s.charCodeAt(i) & 0xFF;
            return buf;

        }

        function generarEXCEL() {
            var wb = XLSX.utils.book_new();
            wb.Props = {
            Title: "SheetJS Tutorial",
            Subject: "Test",
            Author: "Red Stapler",
            CreatedDate: new Date()
            };

            wb.SheetNames.push("ReporteAlumnosCiclo");
            var ws_data = [
                ['Ciclos', '#Matriculados', '#Retirados']
            ];

            data.forEach(element => {
                ws_data.push([arrayCiclo, arrayMatriculados, arrayRetirados]);
            });

            var ws = XLSX.utils.aoa_to_sheet(ws_data);
            wb.Sheets["ReporteAlumnosCiclo"] = ws;
            var wbout = XLSX.write(wb, {
            bookType: 'xlsx',
            type: 'binary'
            });
            saveAs(new Blob([s2ab(wbout)], {
            type: "application/octet-stream"
            }), 'ReporteAlumnosCiclo.xlsx');
        }
    </script>
   
   
    {{-- <script>
        function generarPDF(){
            html2canvas(document.getElementById("capturaPDF"),{
                onrendered: function (canvas) {
                    var img = canvas.toDataURL(image/png);
                    var pdf = new jsPDF();
                    pdf.text(20,20,'Holaa');
                    pdf.addImage(img, 'JPG', 20, 20);
                    pdf.save(prueba.pdf);
                }
            });  
        }
    </script>    --}}


@endsection


