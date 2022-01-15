@extends("layouts.app2")

@section("contenido")
<h3>Editar Instructor </h3>
<form action="{{url('/instructores/')}}/{{$instructores->id}}" method="post">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label for="dni">DNI</label>
        <input type="text" class="form-control" id="dni" name="dni" placeholder="dni" value="{{$instructores->dni}}">
    </div>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{$instructores->nombre}}">
    </div>
    <div class="form-group">
        <label for="apellido1">Apellido1</label>
        <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="apellido1" value="{{$instructores->apellido1}}">
    </div>
    <div class="form-group">
        <label for="apellido2">Apellido2</label>
        <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="apellido2" value="{{$instructores->apellido2}}">
    </div>
    <div class="form-group">
        <label for="f_nacimiento">Fecha Nacimiento</label>
        <input type="text" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="f_nacimiento" value="{{$instructores->f_nacimiento}}">
    </div>
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{$instructores->email}}">
    </div>
    <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="{{$instructores->telefono}}">
    </div>
    <div class="form-group">
        <label for="pais">País</label>
        <input type="text" class="form-control" id="pais" name="pais" placeholder="pais" value="{{$instructores->pais}}">
    </div>
    <div class="form-group">
        <label for="cert_instructor">Certificación de Instructor</label>
        <input type="text" class="form-control" id="cert_instructor" name="cert_instructor" placeholder="cert_instructor" value="{{$instructores->cert_instructor}}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{url('/instructores')}}" class="btn btn-secondary">Cancelar</a>
    @endsection