@extends("layouts.app2")
@section("contenido")
<h3>Insertar Instructor </h3>
<form action="{{route('instructores.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="dni">Dni</label>
        <input type="text" class="form-control" id="dni" name="dni" placeholder="12345678A">
    </div>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Juan">
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
        <input type="text" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="30-12-2020">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="email@email.com">
    </div>
    <div class="form-group">
        <label for="telefono">Telefono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="(+34) 612345678">
    </div>
    <div class="form-group">
        <label for="pais">País</label>
        <input type="text" class="form-control" id="pais" name="pais" placeholder="España">
    </div>
    <div class="form-group">
        <label for="cert_buceo">Certificación de buceo</label>
        <input type="text" class="form-control" id="cert_buceo" name="cert_buceo" placeholder="658714">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{url('/instructores')}}" class="btn btn-secondary">Volver</a>
</form>
@endsection