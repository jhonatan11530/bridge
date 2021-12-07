@extends('layout.plantilla')
@section('name')
    <div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel">
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


    </div>

@endsection
