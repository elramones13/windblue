@extends("layouts.app2")
@section("contenido")
<script>
    $(document).ready(function() {
        $('#tabla_localizaciones').DataTable({
            "order": [
                [0, 'asc']
            ],
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
        });
        $(".borrar").click(function() {
            const tr = $(this).closest("tr"); //guardamos el tr completo
            const id = tr.data("id");
            Swal.fire({
                title: '¿Quieres borrarlo?',
                showCancelButton: true,
                confirmButtonText: 'Eliminar',
                cancelButtonText: 'Cancelar',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        method: "POST",
                        url: "{{url('/localizaciones')}}/" + id,
                        data: {
                            _token: "{{csrf_token()}}",
                            _method: "delete",
                        },
                        success: function() {
                            tr.fadeOut();
                        }
                    });
                }
            })
        });
    });
</script>
</head>

<body>
    <h1 id="titulot"> Tabla de Localizaciones</h1>
    @if(count($localizaciones))
    <a href=" {{url('/dashboard')}}" class="btn btn-success" padding="10px">Inicio</a>
    <a href=" {{url('/localizaciones/create')}}" class="btn btn-primary" padding="10px">Nueva localización</a>
    <a href=" {{url('/localizaciones/grafica')}}" class="btn btn-warning" padding="10px">Gráfica</a>
    <table id="tabla_localizaciones" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Latitud</th>
                <th>Longitud</th>
                <th>País</th>
                <th>Localidad</th>
                <th>Número de Inmersiones</th>
                <th>Mapa</th>
                <th>Editar localizacion</th>
                <th>Eliminar localizacion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($localizaciones as $localizacion)
            <tr data-id="{{$localizacion->id}}">
                <td>{{$localizacion->id}}</td>
                <td>{{$localizacion->nombre}}</td>
                <td>{{$localizacion->latitud}}</td>
                <td>{{$localizacion->longitud}}</td>
                <td>{{$localizacion->pais}}</td>
                <td>{{$localizacion->localidad}}</td>
                <td><a href="{{url('/localizaciones')}}/{{$localizacion->id}}/buceos" class='btn btn-warning btn-sm'>{{$localizacion->inmersiones->count()}}</a></td>
                <td>
                    <a href="{{url('/localizaciones')}}/{{$localizacion->id}}/mapas" class='btn btn-info btn-sm edit'>Mapa</a>
                </td>
                <td>
                    <a href="{{url('/localizaciones')}}/{{$localizacion->id}}/edit" class='btn btn-info btn-sm edit'>Editar</a>
                </td>
                <td>
                    <a href="#" class='btn btn-danger btn-sm borrar'>Borrar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <h1>No hay localizaciones</h1>
    @endif
    @endsection