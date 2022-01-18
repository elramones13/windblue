@extends("layouts.app2")
@section("contenido")
<h3>Dudas</h3>
<form action="{{route('dudas.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
    </div>
    <div class="form-group">
        <label for="apellidos">Apellidos</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="email@email.com">
    </div>
    <div class="form-group">
    <label for="duda">Duda</label>
        <textarea type="text-area" class="form-control" id="duda" name="duda" placeholder="Escriba su Duda aquí"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    <a href="{{url('/dashboard')}}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection