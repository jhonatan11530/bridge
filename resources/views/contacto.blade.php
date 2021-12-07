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
    <div class="container">
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
