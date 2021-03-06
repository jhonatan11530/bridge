<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BRIDGE ENTERTAINMENT</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5944715520754383"
        crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/BRIDGE-LOGO.png') }}" class="d-inline-block align-top" alt="page not Found">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto w-100 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="/">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/equipo">EQUIPO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/servicio">SERVICIOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/nosotros">NOSOTROS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacto">CONTACTO</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/presentacion/home-slider-6.jpg') }}" class="d-block w-100"
                    alt="page not Found">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/presentacion/home-slider-6.jpg') }}" class="d-block w-100"
                    alt="page not Found">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/presentacion/home-slider-6.jpg') }}" class="d-block w-100"
                    alt="page not Found">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    @yield('name')

    <div class="modal fade" id="CREATIVEHOUSE" tabindex="-1" aria-labelledby="CreativeHouse" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreativeHouse">BTL</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators0" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators0" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators0" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators0" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/btl.jpeg') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/btl1.jpeg') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/btl2.jpeg') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <p>...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ARQUITECTURA" tabindex="-1" aria-labelledby="ARQUITECTURA" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ARQUITECTURA">ARQUITECTURA EF??MERA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/arquitectura.jpeg') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/arquitectura1.jpeg') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/arquitectura2.jpeg') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <p>...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="CAMPA??AS" tabindex="-1" aria-labelledby="CAMPA??AS" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CAMPA??AS">CAMPA??AS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/CAMPA??AS1.jpeg') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/CAMPA??AS2.jpeg') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <p>...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="MATERIAL" tabindex="-1" aria-labelledby="MATERIAL PROMOCIONAL" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="MATERIAL">MATERIAL PROMOCIONAL</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/MATERIAL_PROMOCIONAL1.jpeg') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/MATERIAL_PROMOCIONAL2.png') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <p>...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="INTERNET_DEDICADO" tabindex="-1" aria-labelledby="INTERNET_DEDICADO"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="INTERNET_DEDICADO">INTERNET DEDICADO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active">
                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/INTERNET_DEDICADO.png') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <p>...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="VIDEO_STREAMING" tabindex="-1" aria-labelledby="VIDEO_STREAMING"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="VIDEO_STREAMING">INTERNET DEDICADO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators5" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators5" data-slide-to="0" class="active">
                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/VIDEO_STREAMING.jpeg') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <p>...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="VIDEO_CONFERENCIA" tabindex="-1" aria-labelledby="VIDEO_CONFERENCIA"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="VIDEO_CONFERENCIA">VIDEO CONFERENCIA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators6" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators6" data-slide-to="0" class="active">
                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/VIDEO_CONFERENCIA.jpeg') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <p>...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="SOFTWARE" tabindex="-1" aria-labelledby="SOFTWARE DE REGISTRO" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="SOFTWARE DE REGISTRO">SOFTWARE DE REGISTRO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators7" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators7" data-slide-to="0" class="active">
                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/SOFTWARE.jpeg') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <p>...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="OPERACION_LOGISTICA" tabindex="-1" aria-labelledby="OPERACION_LOGISTICA"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="OPERACION_LOGISTICA">OPERACI??N LOG??STICA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators8" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators8" data-slide-to="0" class="active">
                            </li>
                            <li data-target="#carouselExampleIndicators8" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/OPERACION_LOGISTICA1.jpeg') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/OPERACION_LOGISTICA2.jpeg') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <p>...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="DESARROLLO_PARTICIPACION" tabindex="-1" aria-labelledby="DESARROLLO_PARTICIPACION"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DESARROLLO_PARTICIPACION">DESARROLLO Y PARTICIPACI??N DE EVENTOS
                        MASIVOS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators9" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators9" data-slide-to="0" class="active">
                            </li>
                            <li data-target="#carouselExampleIndicators9" data-slide-to="1">
                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/DESARROLLO_PARTICIPACION1.jpeg') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/DESARROLLO_PARTICIPACION2.jpeg') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <p>...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="EVENTOS_COORPORATIVOS" tabindex="-1" aria-labelledby="EVENTOS_COORPORATIVOS"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EVENTOS_COORPORATIVOS">EVENTOS COORPORATIVOS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators10" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators10" data-slide-to="0" class="active">
                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/EVENTOS_COORPORATIVOS.jpeg') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <p>...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="PRODUCCION_AUDIOVISUAL" tabindex="-1" aria-labelledby="PRODUCCION_AUDIOVISUAL"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="PRODUCCION_AUDIOVISUAL">PRODUCCION AUDIOVISUAL</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators11" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators11" data-slide-to="0" class="active">
                            </li>
                            <li data-target="#carouselExampleIndicators11" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators11" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators11" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators11" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators11" data-slide-to="5"></li>
                            <li data-target="#carouselExampleIndicators11" data-slide-to="6"></li>
                            <li data-target="#carouselExampleIndicators11" data-slide-to="7"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/PRODUCCION_AUDIOVISUAL1.jpeg') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/PRODUCCION_AUDIOVISUAL2.png') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/PRODUCCION_AUDIOVISUAL3.png') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/PRODUCCION_AUDIOVISUAL4.png') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/PRODUCCION_AUDIOVISUAL5.png') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/PRODUCCION_AUDIOVISUAL6.png') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/PRODUCCION_AUDIOVISUAL7.png') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/PRODUCCION_AUDIOVISUAL8.png') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <p>...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="DESARROLLO_CAMPA??AS" tabindex="-1" aria-labelledby="DESARROLLO_CAMPA??AS"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DESARROLLO_CAMPA??AS">DESARROLLO DE CAMPA??AS ONLINE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators12" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators12" data-slide-to="0" class="active">
                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/DESARROLLO_CAMPA??AS.jpeg') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <span>Teniendo muy
                        presente que esta es
                        la era de las
                        estrategias digitales,
                        creamos y
                        desarrollamos las
                        t??cticas de campa??a
                        adecuadas para
                        posicionar su
                        empresa.<br>La digitalizaci??n sigue su
                        evoluci??n, la era de
                        la movilidad, del Internet
                        de las cosas seguir??n
                        transformando nuestro
                        entorno, por eso es
                        importante crear las
                        estrategias digitales
                        asertivamente y BRIDGE
                        ENTERTAINMENT lo hace
                        por su compa????a.</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="SOCIAL_MEDIA" tabindex="-1" aria-labelledby="SOCIAL_MEDIA" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="SOCIAL_MEDIA">DESARROLLO DE CAMPA??AS ONLINE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators12" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators12" data-slide-to="0" class="active">
                            </li>
                            <li data-target="#carouselExampleIndicators12" data-slide-to="1">
                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/SOCIAL_MEDIA.jpeg') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                            <div class="carousel-item ">
                                <img src="{{ asset('img/BRIDGE-LOGO-COLOR.png') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <p>Abarcamos mercados
                        influyentes en la actualidad y
                        las Redes Sociales no pod??an
                        ser la excepci??n.</p>
                    <p>La importancia de las redes
                        sociales en la actualidad es
                        innegable, cada vez hay m??s
                        redes sociales en internet
                        pero, tambi??n cada vez est??n
                        apareciendo redes sociales
                        m??s espec?????cas, con una red
                        social espec?????ca, accedemos
                        a mucha informaci??n
                        clasi???cada y segmentada por
                        el usuario.</p>
                    <p>Nuestras campa??as incluyen las
                        herramientas
                        como:</p>
                    <ul style="color: #034959">
                        <li>Miner??a de Datos</li>
                        <li>CRM</li>
                        <li>Growth Hacking</li>
                    </ul>
                    <span>Tenemos alianzas con Google y
                        Facebook para los an??lisis prospectivos
                        de resultados y la ejecuci??n de
                        campa??as que aprovechen t??cnicas como
                        el remarketing y el re direccionamiento
                        de contenidos.</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="PRODUCCION_MULTIPLATAFORMA" tabindex="-1" aria-labelledby="SOCIAL_MEDIA"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="PRODUCCION_MULTIPLATAFORMA">PRODUCCI??N MULTIPLATAFORMA NARRATIVA
                        TRANSMEDIA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators13" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators13" data-slide-to="0" class="active">
                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/PRODUCCION_MULTIPLATAFORMA.png') }}" class="d-block"
                                    style="width: 100%;height: 300px;" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <p>Tenemos la capacidad para englobar audiencias a trav??s de distntos medios.
                        Nuestro amplio recorrido experiencial, nos permite crear para usted y su empresa
                        el impacto medi?? o que precisa.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <footer class="bg-dark text-white text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-3 col-md-4 mb-1 mb-md-0">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                            class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                    </p>
                    <p>
                        <strong>AV 3H Norte #37N-45 of 101</strong>
                        <strong>Cali, Valle del Cauca</strong>
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                            class="bi bi-phone" viewBox="0 0 16 16">
                            <path
                                d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                    </p>
                    <p>
                        <strong>Telefono: <a href="tel:+576024837979" class="text-white">(602)4837979</a></strong>
                    </p>
                    <p>
                        <strong>Celular: <a href="tel:+573168303682" class="text-white">3168303682</a></strong>
                    </p>
                </div>
                <div class="col-lg-3 col-md-4 mb-1 mb-md-0">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                            class="bi bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                        </svg>

                    </p>
                    <p>
                        <strong>Email : <a href="mailto:info@bridge.com.co"
                                class="text-white">info@bridge.com.co</a></strong>
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                            class="bi bi-clock" viewBox="0 0 16 16">
                            <path
                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg>
                    </p>
                    <p>
                        <strong>Horario : Lunes a Viernes 8.00-18.00</strong>
                    </p>
                </div>
                <div class="col-lg-6 col-md-4 mb-1 mb-md-0">
                    <div class="container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.7762503131885!2d-76.5141262857302!3d3.4046708975217648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a795cdc9e50f%3A0xfa9179f9a684e86a!2sCra%2044A%20%23%2344-85%2C%20Cali%2C%20Valle%20del%20Cauca!5e0!3m2!1ses!2sco!4v1638564662544!5m2!1ses!2sco"
                            width="350" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    <a href="#" type="button" class="btn btn-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                    </a>
                    <a href="#" type="button" class="btn btn-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                    </a>
                    <a href="#" type="button" class="btn btn-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-youtube" viewBox="0 0 16 16">
                            <path
                                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                        </svg>
                    </a>
                    <a href="#" type="button" class="btn btn-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            ?? 2021 Copyright:
            <a class="text-white" href="#">###########</a>
        </div>
    </footer>
</body>

</html>
