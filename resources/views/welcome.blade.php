@extends('layout.plantilla')
@section('name')
    <div class="carousel slide mb-5" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/presentacion/home-slider-6.jpg') }}" class="d-block w-100" alt="page not Found">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/presentacion/home-slider-6.jpg') }}" class="d-block w-100" alt="page not Found">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/presentacion/home-slider-6.jpg') }}" class="d-block w-100" alt="page not Found">
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
    <div class="container-fluid text-center">
        <div class="text-center text-muted">
            <h1>Nuestro Equipo</h1>
        </div>
        <div class="jumbotron">
            <p class="lead">Somos una agencia especializada en la producción de contenidos audiovisuales,
                servicios de transmisión por internet (streaming), desarrollo de campañas online y operación logística de
                eventos.Con más de 40 años de experiencia conjunta, nuestros profesionales poseen la capacidad para crear
                campañas y productos de alto impacto, dirigidos a públicos específicos o a audiencias masivas, pensando
                siempre en la naturaleza de la marca, sus objetivos estratégicos y los gustos de sus públicos, aplicando lo
                mejor de las últimas tendencias de la publicidad y la comunicación.</p>
        </div>
        <hr>
        <div class="text-center">
            <h1 class="text-danger">Bridge</h1>
            <h1 style="color: #034959">CREATIVE HOUSE</h1>
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
                    <h5 class="card-title text-danger">Creative House</h5>
                    <p class="card-text text-dark"><strong>BTL</strong></p>
                    <a href="#" data-toggle="modal" data-target="#CREATIVEHOUSE" class="stretched-link"></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-danger">Creative House</h5>
                    <p class="card-text text-dark"><strong>ARQUITECTURA EFÌMERA</strong></p>
                    <a href="#" data-toggle="modal" data-target="#ARQUITECTURA" class="stretched-link"></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-danger">Creative House</h5>
                    <p class="card-text text-dark"><strong>CAMPAÑAS</strong></p>
                    <a href="#" data-toggle="modal" data-target="#CAMPAÑAS" class="stretched-link"></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-danger">Creative House</h5>
                    <p class="card-text text-dark"><strong>MATERIAL PROMOCIONAL</strong></p>
                    <a href="#" data-toggle="modal" data-target="#MATERIAL" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <h1 class="text-danger">Bridge</h1>
            <h1 style="color: #0468BF">TI SOLUTIONS</h1>
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
                    <h5 class="card-title text-danger">TI SOLUTIONS</h5>
                    <p class="card-text text-dark"><strong>INTERNET DEDICADO</strong></p>
                    <a href="#" data-toggle="modal" data-target="#INTERNET_DEDICADO" class="stretched-link"></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-danger">TI SOLUTIONS</h5>
                    <p class="card-text text-dark"><strong>VIDEO STREAMING</strong></p>
                    <a href="#" data-toggle="modal" data-target="#VIDEO_STREAMING" class="stretched-link"></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-danger">TI SOLUTIONS</h5>
                    <p class="card-text text-dark"><strong>VIDEO CONFERENCIA</strong></p>
                    <a href="#" data-toggle="modal" data-target="#VIDEO_CONFERENCIA" class="stretched-link"></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-danger">TI SOLUTIONS</h5>
                    <p class="card-text text-dark"><strong>SOFTWARE DE REGISTRO</strong></p>
                    <a href="#" data-toggle="modal" data-target="#SOFTWARE" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <h1 class="text-danger">Bridge</h1>
            <h1 style="color: #034959">OPC LOGÌSTICA</h1>
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
                    <h5 class="card-title text-danger">OPC LOGÌSTICA</h5>
                    <p class="card-text text-dark"><strong>OPERACIÒN LOGÌSTICA</strong></p>
                    <a href="#" data-toggle="modal" data-target="#OPERACION_LOGISTICA" class="stretched-link"></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-danger">OPC LOGÌSTICA</h5>
                    <p class="card-text text-dark"><strong>DESARROLLO Y PARTICIPACIÒN DE EVENTOS MASIVOS</strong></p>
                    <a href="#" data-toggle="modal" data-target="#DESARROLLO_PARTICIPACION" class="stretched-link"></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-danger">OPC LOGÌSTICA</h5>
                    <p class="card-text text-dark"><strong>EVENTOS COORPORATIVOS</strong></p>
                    <a href="#" data-toggle="modal" data-target="#EVENTOS_COORPORATIVOS" class="stretched-link"></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-danger">OPC LOGÌSTICA</h5>
                    <p class="card-text text-dark"><strong>PRODUCCION AUDIOVISUAL</strong></p>
                    <a href="#" data-toggle="modal" data-target="#PRODUCCION_AUDIOVISUAL" class="stretched-link"></a>
                </div>
            </div>
        </div>

        <div class="text-center text-muted">
            <h1>Quiènes Somos</h1>
        </div>
        <div class="jumbotron">
            <p class="lead">Somos un grupo integral comprometido con las
                nuevas ideas, la creatividad y la cultura.</p>
            <p class="lead">Gracias a nuestra amplia experiencia en manejo de
                eventos, estamos siempre a la vanguardia con las
                exigencias y necesidades de nuestros clientes.</p>
            <p class="lead">Teniendo presente el entorno, vamos creando
                soluciones a su realidad empresarial.</p>
        </div>

        <div class="text-center text-muted">
            <h1>Contacto</h1>
        </div>
        {!! Form::open(['url' => 'Contacto']) !!}
        <div class="row text-capitalize">
            <div class="col-6">
                <div class="form-group">
                    <label>nombre y apellido <span style="color: red">*</span></label>
                    <input type="text" name="nombre_completo" class="form-control" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label>telefono <span style="color: red">*</span></label>
                    <input type="number" min="0" name="telefono" class="form-control" required>
                </div>
            </div>
            <div class="col-6">
                <label>Correo <span style="color: red">*</span></label>
                <input type="text" name="" class="form-control" required>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label>Seleccione nuestro servicios <span style="color: red">*</span></label>
                    <select name="servicio" class="form-control" required>
                        <option value="" selected disabled>Seleccione</option>
                        <option value="PRODUCCION AUDIOVISUAL">PRODUCCIÒN AUDIOVISUAL</option>
                        <option value="DESARROLLO DE CAMPAÑAS ONLINE">DESARROLLO DE CAMPAÑAS ONLINE</option>
                        <option value="PRODUCCIÒN MULTIPLATAFORMA">PRODUCCIÒN MULTIPLATAFORMA</option>
                        <option value="PRODUCCION CINE">PRODUCCIÒN CINE</option>
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Mensaje</label>
                    <textarea name="observaciones" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Enviar Mensaje</button>
        {!! Form::close() !!}




    </div>
@endsection
