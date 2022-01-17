@extends("layouts.app2")

@section("contenido")
<h3>Editar inmersiones </h3>
<form action="{{url('/inmersiones/')}}/{{$inmersiones->id}}" method="post">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label for="localizacion_id">Lugar</label>
        <select class="form-control" id="select_localizacion" name="localizacion_id">
        @foreach($localizaciones as $localizacion)
                <option type="text" class="form-control" id="localizacion_id" name="localizacion_id" value="{{$localizacion->id}}">{{$localizacion->id}} - {{$localizacion->nombre}}</option>
            @endforeach
        </select>    
    </div>
    <div class="form-group">
        <label for="fecha">Fecha</label>
        <input type="text" class="form-control" id="fecha" name="fecha" placeholder="fecha" value="{{$inmersiones->fecha}}">
    </div>
    <div class="form-group">
        <label for="t_total">Tiempo Total</label>
        <input type="text" class="form-control" id="t_total" name="t_total" placeholder="t_total" value="{{$inmersiones->t_total}}">
    </div>
    <div class="form-group">
        <label for="temperatura">Temperatura</label>
        <input type="text" class="form-control" id="temperatura" name="temperatura" placeholder="temperatura" value="{{$inmersiones->temperatura}}">
    </div>
    <div class="form-group">
        <label for="consumo">Consumo</label>
        <input type="text" class="form-control" id="consumo" name="consumo" placeholder="consumo" value="{{$inmersiones->consumo}}">
    </div>
    <div class="form-group">
        <label for="lastre">Lastre</label>
        <input type="text" class="form-control" id="lastre" name="lastre" placeholder="lastre" value="{{$inmersiones->lastre}}">
    </div>
    <div class="form-group">
        <label for="litros_bot">Litros Botella</label>
        <input type="text" class="form-control" id="litros_bot" name="litros_bot" placeholder="litros_bot" value="{{$inmersiones->litros_bot}}">
    </div>
    <div class="form-group">
        <label for="prof_max">Profundidad Máxima</label>
        <input type="text" class="form-control" id="prof_max" name="prof_max" placeholder="prof_max" value="{{$inmersiones->prof_max}}">
    </div>
    <div class="form-group">
        <label for="instructor_id">Instructor</label>
        <select class="form-control" id="select_instructor" name="instructor_id">
        @foreach($instructores as $instructor )
                <option type="text" class="form-control" id="instructor_id" name="instructor_id" value="{{$instructor->id}}">{{$instructor->id}} - {{$instructor->nombre}} {{$instructor->apellido1}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="num_buceadores">Numero de Buceadores</label>
        <input type="text" class="form-control" id="num_buceadores" name="num_buceadores" placeholder="num_buceadores" value="{{$inmersiones->num_buceadores}}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{url('/inmersiones')}}" class="btn btn-secondary">Cancelar</a>
    @endsection