@extends("layouts.app2")
@section("contenido")
<h3>Insertar Instructor </h3>
<form action="{{route('localizaciones.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
    </div>
    <div class="form-group">
        <label for="latitud">Latitud</label>
        <input type="text" class="form-control" id="latitud" name="latitud" placeholder="Latitud">
    </div>
    <div class="form-group">
        <label for="longitud">Longitud</label>
        <input type="text" class="form-control" id="longitud" name="longitud" placeholder="Longitud">
    </div>
    <label for="pais">País</label>
    <input type="text" class="form-control" id="pais" name="pais" placeholder="Pais">
    </div>
    <div class="form-group">
        <label for="localidad">Localidad</label>
        <input type="text" class="form-control" id="localidad" name="localidad" placeholder="Localidad">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{url('/instructores')}}" class="btn btn-secondary">Volver</a>
</form>
@endsection