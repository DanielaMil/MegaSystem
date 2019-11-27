<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>MEGASYSTEM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('template/architectui-html-free/main.css')}}" rel="stylesheet">
</head>


<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <!--Todo lo que va al lado del menu amborguesa-->
            </div>
        </div>        
               <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="index.html" class="mm-active">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboard Example 1
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">UI Components</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-study"></i>
                                        CETPRO
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{url('/matricula')}}">
                                                <i class="metismenu-icon"></i>
                                                Matricula
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon">
                                                </i>Alumnos
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-cash"></i>
                                        Tesoreria
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{url('/ingresos')}}">
                                                <i class="metismenu-icon">
                                                </i>Ingresos
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    <div class="app-main__outer">
                    <div class="app-main__inner">
                        
                        <!--Aqui va todo lo que está dentro -->
                        @yield('content')
                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 1
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 2
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 3
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <div class="badge badge-success mr-1 ml-0">
                                                    <small>NEW</small>
                                                </div>
                                                Footer Link 4
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>    </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
    <script type="text/javascript" src="{{asset('template/architectui-html-free//assets/scripts/main.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</html>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrar Nueno Ingreso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="">
                    <div class="row m-3">
                        <div class="column m-3 w-50">
                            <div class="position-relative form-group">
                                <label for="form-control" class="">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Persona</font>
                                    </font>
                                </label><input name="text" id="txtPaterno" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="exampleSelect" class="">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Concepto</font>
                                    </font>
                                </label>
                                <select name="select" id="cboConcepto" class="form-control">
                                    <option>

                                    </option>
                                </select>
                            </div>
                            <div class="position-relative form-group">
                                <label for="examplePassword" class="">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Fecha </font>
                                    </font>
                                </label><input name="text" id="txtFecha" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="column m-3">
                            <div class="position-relative form-group">
                                <label for="form-control" class="">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">N° de Recibo</font>
                                    </font>
                                </label><input name="text" id="txtNuroRecibo" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group">
                                <label for="examplePassword" class="">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Monto</font>
                                    </font>
                                </label><input name="text" id="txtMonto" type="text" class="form-control">
                            </div>
                            <div class="position-relative form-group"><label for="exampleText" class="">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Observacion</font>
                                    </font>
                                </label><textarea name="text" id="txtObservacion" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                   
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Cancelar</font>
                    </font>
                </button>
                <button type="button" class="btn btn-primary">
                    <font style="vertical-align-center: inherit;">
                        <font style="vertical-align center: inherit;">Registrar</font>
                    </font>
                </button>
            </div>
        </div>
    </div>
</div>
