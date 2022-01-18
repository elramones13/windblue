@extends("layouts.app2")

@section("contenido")
<h3>Editar Localizacion </h3>
<form action="{{url('/localizaciones/')}}/{{$localizaciones->id}}" method="post">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{$localizaciones->nombre}}">
    </div>
    <div class="form-group">
        <label for="latitud">Latitud</label>
        <input type="text" class="form-control" id="latitud" name="latitud" placeholder="latitud" value="{{$localizaciones->latitud}}">
    </div>
    <div class="form-group">
        <label for="longitud">Longitud</label>
        <input type="text" class="form-control" id="longitud" name="longitud" placeholder="longitud" value="{{$localizaciones->longitud}}">
    </div>
    <label for="pais">País</label>
    <input type="text" class="form-control" id="pais" name="pais" placeholder="pais" value="{{$localizaciones->pais}}">
    </div>
    <div class="form-group">
        <label for="localidad">Localidad</label>
        <input type="text" class="form-control" id="localidad" name="localidad" placeholder="localidad" value="{{$localizaciones->localidad}}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{url('/localizaciones')}}" class="btn btn-secondary">Cancelar</a>
    @endsection