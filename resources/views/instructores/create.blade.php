@extends("layouts.app2")
@section("contenido")
<h3>Insertar Instructor </h3>
<form action="{{route('instructores.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="dni">Dni</label>
        <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI">
    </div>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
    </div>
    <div class="form-group">
        <label for="apellido1">Apellido 1</label>
        <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="Primer Apellido">
    </div>
    <div class="form-group">
        <label for="apellido2">Apellido 2</label>
        <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="Segundo Apellido">
    </div>
    <div class="form-group">
        <label for="f_nacimiento">Fecha Nacimiento</label>
        <input type="text" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="Fecha Nacimiento">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="telefono">Telefono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="(extensión) Número de teléfono ">
    </div>
    <div class="form-group">
        <label for="pais">País</label>
        <input type="text" class="form-control" id="pais" name="pais" placeholder="País">
    </div>
    <div class="form-group">
        <label for="cert_instructor">Certificación de Instructor</label>
        <input type="text" class="form-control" id="cert_instructo" name="cert_instructor" placeholder="Nº de certificación de Instructor">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{url('/instructores')}}" class="btn btn-secondary">Volver</a>
</form>
@endsection