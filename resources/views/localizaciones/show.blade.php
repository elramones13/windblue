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
<form action="{{url('/localizaciones/')}}/{{$localizaciones->id}}" method="post">
    <h1 id="titulot"> Información de {{$localizaciones->nombre}} ID {{$localizaciones->id}}</h1>
    <a href=" {{url('/inmersiones')}}" class="btn btn-success fas fa-step-backward" padding="10px"></a>
    <table id="tabla_localizaciones" class="table table-striped table-bordered">
        <thead>
            <tr>
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
            <tr data-id="{{$localizaciones->id}}">
                <td>{{$localizaciones->nombre}}</td>
                <td>{{$localizaciones->latitud}}</td>
                <td>{{$localizaciones->longitud}}</td>
                <td>{{$localizaciones->pais}}</td>
                <td>{{$localizaciones->localidad}}</td>
                <td><a href="{{url('/localizaciones')}}/{{$localizaciones->id}}/buceos" class='btn btn-warning btn-sm'>{{$localizaciones->inmersiones->count()}}</a></td>
                <td>
                    <a href="{{url('/localizaciones')}}/{{$localizaciones->id}}/mapas" class='btn btn-info btn-sm fas fa-map-marked-alt'></a>
                </td>
                <td>
                    <a href="{{url('/localizaciones')}}/{{$localizaciones->id}}/edit" class='btn btn-info btn-sm fas fa-edit'></a>
                </td>
                <td>
                    <a href="#" class='btn btn-danger btn-sm borrar fas fa-trash'></a>
                </td>
            </tr>
        </tbody>
    </table>
    @endsection