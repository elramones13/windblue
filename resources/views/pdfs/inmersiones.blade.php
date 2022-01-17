@extends("layouts.app4")

@section("contenido")
    <h1 id="titulot">Logs de Inmersiones</h1>

    @if(count($inmersiones)>0)
        <table id="tabla_inmersiones" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID Localizacion</th>
                    <th>Fecha</th>
                    <th>Tiempo Total</th>
                    <th>Temperatura</th>
                    <th>Consumo</th>
                    <th>Lastre</th>
                    <th>Litros Botella</th>
                    <th>Profundidad Máxima</th>
                    <th>ID Instructor</th>
                    <th>Número de Buceadores</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inmersiones as $inmersion)
                    <tr data-id='{{$inmersion->id}}'>
                        <td>{{$inmersion->id}}</td>
                        <td>{{$inmersion->localizacion_id}}</td>
                        <td>{{$inmersion->fecha}}</td>
                        <td>{{$inmersion->t_total}}</td>
                        <td>{{$inmersion->temperatura}}</td>
                        <td>{{$inmersion->consumo}}</td>
                        <td>{{$inmersion->lastre}}</td>
                        <td>{{$inmersion->litros_bot}}</td>
                        <td>{{$inmersion->prof_max}}</td>
                        <td>{{$inmersion->instructor_id}}</td>
                        <td>{{$inmersion->num_buceadores}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h1>No existen registros para inmersiones</h1>
    @endif

@endsection