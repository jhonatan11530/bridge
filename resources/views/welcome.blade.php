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
                <img src="{{ asset('img/home-slider-6.jpg') }}" class="d-block w-100" alt="page not Found">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/home-slider-6.jpg') }}" class="d-block w-100" alt="page not Found">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/home-slider-6.jpg') }}" class="d-block w-100" alt="page not Found">
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

        <div class="text-center text-muted">
            <h1>Quiènes Somos</h1>
        </div>
        <div class="jumbotron">
            <p class="lead">Somos un grupo integral comprometido con las
                nuevas ideas, la creatividad y la cultura.</p>
            <hr class="my-4">
            <p class="lead">Gracias a nuestra amplia experiencia en manejo de
                eventos, estamos siempre a la vanguardia con las
                exigencias y necesidades de nuestros clientes.</p>
            <hr class="my-4">
            <p class="lead">Teniendo presente el entorno, vamos creando
                soluciones a su realidad empresarial.</p>
        </div>
        <div class="text-center">
            <h1 class="text-danger">Bridge</h1>
            <h1 class="text-danger">Creative House</h1>
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
                    <a href="#" data-toggle="modal" data-target="#CreativeHouse" class="stretched-link"></a>
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
        <button type="submit" class="btn btn-primary mb-5">Enviar</button>
        {!! Form::close() !!}
    </div>

    <div class="modal fade" id="CreativeHouse" tabindex="-1" aria-labelledby="CreativeHouse" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreativeHouse">BTL</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="ARQUITECTURA" tabindex="-1" aria-labelledby="ARQUITECTURA" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ARQUITECTURA">ARQUITECTURA EFÌMERA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Las mejores ideas
                    estructurales para
                    tus eventos
                    empresariales .
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="CAMPAÑAS" tabindex="-1" aria-labelledby="CAMPAÑAS" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CAMPAÑAS">CAMPAÑAS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Las mejores
                    ideas
                    vanguardistas
                    para impulsar
                    su marca
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
