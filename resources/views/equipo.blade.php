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
@endsection