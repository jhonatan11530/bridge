@extends('layout.plantilla')
@section('name')
    <style>
        .asociaciones {
            background-image: url("/img/OPERACION_LOGISTICA2.jpeg");
            min-height: 150px;
            justify-content: center;
            align-items: center;
            display: flex;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>

    <div class="container-fluid text-center mb-5">
        <div class="asociaciones mb-5">
            <div class="text-center center-block" style="color: white;">
                <h1>
                    <b><span class="text-danger">BRIDGE </span><span style="color: #034959">CREATIVE HOUSE</span></b>
                </h1>
            </div>
        </div>
        <h5>
            Con 7 años de experiencia en el
            mercado, hemos estamos uniendo
            conceptos de mercadeo, eventos y
            comunicación.
            En nuestra casa matriz,
            vamos
            creando estrategias efectivas y
            novedosas que hacen que nuestra
            agencia esté bien posicionada,
            dando siempre
            las mejores
            soluciones.
        </h5>
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('img/BRIDGE-LOGO-COLOR.png') }}" style="width: 150px;height: 150px;"
                        alt="Image page not found">
                    <p class="card-text text-dark"><strong>BTL</strong></p>
                    <a href="#" data-toggle="modal" data-target="#CREATIVEHOUSE" class="stretched-link"></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('img/BRIDGE-LOGO-COLOR.png') }}" style="width: 150px;height: 150px;"
                        alt="Image page not found">
                    <p class="card-text text-dark"><strong>ARQUITECTURA EFÌMERA</strong></p>
                    <a href="#" data-toggle="modal" data-target="#ARQUITECTURA" class="stretched-link"></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('img/BRIDGE-LOGO-COLOR.png') }}" style="width: 150px;height: 150px;"
                        alt="Image page not found">
                    <p class="card-text text-dark"><strong>CAMPAÑAS</strong></p>
                    <a href="#" data-toggle="modal" data-target="#CAMPAÑAS" class="stretched-link"></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('img/BRIDGE-LOGO-COLOR.png') }}" style="width: 150px;height: 150px;"
                        alt="Image page not found">
                    <p class="card-text text-dark"><strong>MATERIAL PROMOCIONAL</strong></p>
                    <a href="#" data-toggle="modal" data-target="#MATERIAL" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="asociaciones mb-5">
            <div class="text-center center-block" style="color: white;">
                <h1>
                    <b><span class="text-danger">BRIDGE </span><span style="color: #034959">TI SOLUTIONS</span></b>
                </h1>
            </div>
        </div>
        <h5>
            <p>Tenemos para su empresa la mejor
                plataforma tecnológica.</p>
            <p>
                Ofrecemos varias soluciones
                tecnológicas, que van desde la
                cobertura de internet en lugares de
                difícil acceso, hasta la creación de
                software para registros y
                acreditaciones en eventos masivos.</p>
        </h5>
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('img/BRIDGE-LOGO-COLOR.png') }}" style="width: 150px;height: 150px;"
                        alt="Image page not found">
                    <p class="card-text text-dark"><strong>INTERNET DEDICADO</strong></p>
                    <a href="#" data-toggle="modal" data-target="#INTERNET_DEDICADO" class="stretched-link"></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('img/BRIDGE-LOGO-COLOR.png') }}" style="width: 150px;height: 150px;"
                        alt="Image page not found">
                    <p class="card-text text-dark"><strong>VIDEO STREAMING</strong></p>
                    <a href="#" data-toggle="modal" data-target="#VIDEO_STREAMING" class="stretched-link"></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('img/BRIDGE-LOGO-COLOR.png') }}" style="width: 150px;height: 150px;"
                        alt="Image page not found">
                    <p class="card-text text-dark"><strong>VIDEO CONFERENCIA</strong></p>
                    <a href="#" data-toggle="modal" data-target="#VIDEO_CONFERENCIA" class="stretched-link"></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('img/BRIDGE-LOGO-COLOR.png') }}" style="width: 150px;height: 150px;"
                        alt="Image page not found">
                    <p class="card-text text-dark"><strong>SOFTWARE DE REGISTRO</strong></p>
                    <a href="#" data-toggle="modal" data-target="#SOFTWARE" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="asociaciones mb-5">
            <div class="text-center center-block" style="color: white;">
                <h1>
                    <b><span class="text-danger">BRIDGE </span><span style="color: #034959">OPC LOGÌSTICA</span></b>
                </h1>
            </div>
        </div>
        <h5>
            <p>Más que una empresa prestadora
                de servicios somos CULTURA,
                apoyamos el talento de nuestro
                país y por más de 6 años hemos
                estado acompañando a diferentes
                instituciones gubernamentales en
                todo el territorio nacional, con el
                gran compromiso de obtener la
                mejor
                respuesta
                dirigida
                a
                nuestros clientes.</p>
        </h5>
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('img/BRIDGE-LOGO-COLOR.png') }}" style="width: 150px;height: 150px;"
                        alt="Image page not found">
                    <p class="card-text text-dark"><strong>OPERACIÒN LOGÌSTICA</strong></p>
                    <a href="#" data-toggle="modal" data-target="#OPERACION_LOGISTICA" class="stretched-link"></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('img/BRIDGE-LOGO-COLOR.png') }}" style="width: 150px;height: 150px;"
                        alt="Image page not found">
                    <p class="card-text text-dark"><strong>DESARROLLO Y PARTICIPACIÒN DE EVENTOS MASIVOS</strong></p>
                    <a href="#" data-toggle="modal" data-target="#DESARROLLO_PARTICIPACION" class="stretched-link"></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('img/BRIDGE-LOGO-COLOR.png') }}" style="width: 150px;height: 150px;"
                        alt="Image page not found">
                    <p class="card-text text-dark"><strong>EVENTOS COORPORATIVOS</strong></p>
                    <a href="#" data-toggle="modal" data-target="#EVENTOS_COORPORATIVOS" class="stretched-link"></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('img/BRIDGE-LOGO-COLOR.png') }}" style="width: 150px;height: 150px;"
                        alt="Image page not found">
                    <p class="card-text text-dark"><strong>PRODUCCION AUDIOVISUAL</strong></p>
                    <a href="#" data-toggle="modal" data-target="#PRODUCCION_AUDIOVISUAL" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="asociaciones mb-5">
            <div class="text-center center-block" style="color: white;">
                <h1>
                    <b><span class="text-danger">BRIDGE </span><span style="color: #034959">SOCIAL MEDIA</span></b>
                </h1>
            </div>
        </div>
        <h5>
            <p>Somos una division especializada
                ejecución de pautas, desarrollo de
                campañas online y producción de
                contenidos multiplataforma.</p>
            <p>Con más de 40 años de experiencia
                conjunta,
                nuestros
                profesionales
                poseen la capacidad para crear
                campañas
                publicitarias
                de
                alto
                impacto, sea con público específico o
                para grandes audiencias. Todo esto,
                estudiando de la mejor manera cada
                proyecto y poniendo a disposición del
                cliente infraestructura superior y las
                últimas tendencias del marketing
                publicitario.</p>
        </h5>
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('img/BRIDGE-LOGO-COLOR.png') }}" style="width: 150px;height: 150px;"
                        alt="Image page not found">
                    <p class="card-text text-dark"><strong>DESARROLLO DE CAMPAÑAS ONLINE</strong></p>
                    <a href="#" data-toggle="modal" data-target="#DESARROLLO_CAMPAÑAS" class="stretched-link"></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('img/BRIDGE-LOGO-COLOR.png') }}" style="width: 150px;height: 150px;"
                        alt="Image page not found">
                    <p class="card-text text-dark"><strong>SOCIAL MEDIA</strong></p>
                    <a href="#" data-toggle="modal" data-target="#SOCIAL_MEDIA" class="stretched-link"></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('img/BRIDGE-LOGO-COLOR.png') }}" style="width: 150px;height: 150px;"
                        alt="Image page not found">
                    <p class="card-text text-dark"><strong>PRODUCCIÒN MULTIPLATAFORMA NARRATIVA TRANSMEDIA</strong></p>
                    <a href="#" data-toggle="modal" data-target="#PRODUCCION_MULTIPLATAFORMA" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="text-center mb-3">
            <h3>CONOCE NUESTRO BROCHURE</h3>
            <a href="{{ asset('BROCHURE/BROCHURE -BRIDGE 2021.pdf') }}" target="_blank">
                <img src="{{ asset('img/pdf.png') }}" alt="">
            </a>
        </div>
    </div>
@endsection
