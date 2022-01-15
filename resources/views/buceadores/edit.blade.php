@extends("layouts.app2")

@section("contenido")
<h3>Editar buceadores </h3>
<form action="{{url('/buceadores/')}}/{{$buceadores->id}}" method="post">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label for="dni">DNI</label>
        <input type="text" class="form-control" id="dni" name="dni" placeholder="dni" value="{{$buceadores->dni}}">
    </div>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{$buceadores->nombre}}">
    </div>
    <div class="form-group">
        <label for="apellido1">Apellido1</label>
            <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="apellido1" value="{{$buceadores->apellido1}}">
    </div>
    <div class="form-group">
        <label for="apellido2">Apellido2</label>
        <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="apellido2" value="{{$buceadores->apellido2}}">
    </div>
    <div class="form-group">
        <label for="f_nacimiento">Fecha Nacimiento</label>
        <input type="text" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="f_nacimiento" value="{{$buceadores->f_nacimiento}}">
    </div>
    <div class="form-group">
        <label for="t_buceo">Título de Buceo</label>
            <input type="text" class="form-control" id="t_buceo" name="t_buceo" placeholder="t_buceo" value="{{$buceadores->t_buceo}}">
    </div>
    <div class="form-group">
        <label for="cert_buceo">Certificación de Buceo</label>
        <input type="text" class="form-control" id="cert_buceo" name="cert_buceo" placeholder="cert_buceo" value="{{$buceadores->cert_buceo}}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{$buceadores->email}}">
    </div>
    <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="{{$buceadores->telefono}}">
    </div>
    <div class="form-group">
        <label for="pais">País</label>
        <input type="text" class="form-control" id="pais" name="pais" placeholder="pais" value="{{$buceadores->pais}}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{url('/buceadores')}}" class="btn btn-secondary">Cancelar</a>
    @endsection