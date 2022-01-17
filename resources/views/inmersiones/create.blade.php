@extends("layouts.app2")

@section("contenido")
<script>

</script>

<h3>Editar inmersiones </h3>
<form action="{{route('inmersiones.store')}}" method="post">
    @csrf
    @method("POST")
    <div class="form-group">
    <label for="prof_max">Localización</label>
    <select class="form-control" id="select_localizacion" name="localizacion_id">
        @foreach($localizaciones as $localizacion )
          <option value="{{$localizacion->id}}">{{$localizacion->id}} - {{$localizacion->nombre}}</option>
        @endforeach
    </select>
    </div>
    <div class="form-group">
        <label for="fecha">Fecha</label>
        <input type="text" class="form-control" id="fecha" name="fecha" placeholder="FECHA">
    </div>
    <div class="form-group">
        <label for="t_total">Tiempo Total</label>
        <input type="text" class="form-control" id="t_total" name="t_total" placeholder="TIEMPO TOTAL">
    </div>
    <div class="form-group">
        <label for="temperatura">Temperatura</label>
        <input type="text" class="form-control" id="temperatura" name="temperatura" placeholder="TEMPERATURA">
    </div>
    <div class="form-group">
        <label for="consumo">Consumo</label>
        <input type="text" class="form-control" id="consumo" name="consumo" placeholder="CONSUMO">
    </div>
    <div class="form-group">
        <label for="lastre">Lastre</label>
        <input type="text" class="form-control" id="lastre" name="lastre" placeholder="LASTRE">
    </div>
    <div class="form-group">
        <label for="litros_bot">Litros Botella</label>
        <input type="text" class="form-control" id="litros_bot" name="litros_bot" placeholder="LITROS BOTELLA">
    </div>
    <div class="form-group">
        <label for="prof_max">Profundidad Máxima</label>
        <input type="text" class="form-control" id="prof_max" name="prof_max" placeholder="PROFUNDIDAD MAXIMA">
    </div>
    <div class="form-group">
    <label for="instructor_id">Instructor</label>
    <select class="form-control" id="select_instructor" name="instructor_id">
        @foreach($instructores as $instructor )
          <option value="{{$instructor->id}}">{{$instructor->id}} - {{$instructor->nombre}} {{$instructor->apellido1}}</option>
        @endforeach
    </select>
    </div>
    <div class="form-group">
        <label for="num_buceadores">Numero de Buceadores</label>
        <input type="text" class="form-control" id="num_buceadores" name="num_buceadores" placeholder="NUMERO DE BUCEADORES">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{url('/inmersiones')}}" class="btn btn-secondary">Cancelar</a>
    @endsection