@extends("layouts.app4")

@section("contenido")
    <h1 id="titulot">Logs de Inmersiones del Instructor {{$instructores->nombre}} con ID {{$instructores->id}}</h1>
    <form action="{{url('/instructorespdf/')}}/{{$instructores->id}}" method="post">
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
                    <th>Número de Buceadores</th>
                </tr>
            </thead>
            <tbody>
            @foreach($instructores->inmersiones as $inmersion)
                    <tr data-id='{{$inmersion->id}}'>
                    <td>{{$inmersion->id}}</td>
                    <td><a href="{{url('https://8000-elramones13-windblue-9slx635dzm2.ws-eu27.gitpod.io/localizaciones')}}/{{$inmersion->localizacion_id}}/mostrar">{{$inmersion->localizacion_id}}</a></td>
                    <td>{{$inmersion->fecha}}</td>
                    <td>{{$inmersion->t_total}}</td>
                    <td>{{$inmersion->temperatura}}</td>
                    <td>{{$inmersion->consumo}}</td>
                    <td>{{$inmersion->lastre}}</td>
                    <td>{{$inmersion->litros_bot}}</td>
                    <td>{{$inmersion->prof_max}}</td>
                    <td>{{$inmersion->num_buceadores}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h1>No existen registros para inmersiones</h1>
    @endif

@endsection