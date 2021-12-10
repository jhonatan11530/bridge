@extends('layout.plantilla')
@section('name')
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
                    <input type="number" min="0" name="telefono" class="form-control"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                </div>
            </div>
            <div class="col-6">
                <label>Correo <span style="color: red">*</span></label>
                <input type="email" name="Correo" class="form-control" required>
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
                    <textarea name="Mensaje" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Enviar Mensaje</button>
        {!! Form::close() !!}
    </div>
@endsection
