@extends("layouts.app2")
@section("contenido")
<style>
    #titulot {
        text-align: center;
        text-decoration: underline;
    }
</style>
<script>
    $(document).ready(function() {
        $('#tabla_inmersiones').DataTable({
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
                        url: "{{url('/inmersiones')}}/" + id,
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
    <h1 id="titulot"> Tabla de Inmersiones</h1>
    @if(count($inmersiones))
    <a href=" {{url('/dashboard')}}" class="btn btn-success fas fa-home" padding="10px"></a>
    <a href=" {{url('/inmersiones/create')}}" class="btn btn-primary fas fa-plus-circle" padding="10px"></a>
    <a href=" {{url('/inmersionespdf')}}" class="btn btn-danger fas fa-file-pdf" padding="10px"></a>
    <table id="tabla_inmersiones" class="table table-striped table-bordered ">
        <thead>
            <tr>
                <th>Id</th>
                <th>Localizacion ID</th>
                <th>Fecha</th>
                <th>Tiempo Total (Minutos)</th>
                <th>Temperatura (ºC)</th>
                <th>Consumo (Bar)</th>
                <th>Lastre (Kg)</th>
                <th>Litros de la botella</th>
                <th>Profundidad Máxima (metros)</th>
                <th>Instructor ID</th>
                <th>Nº Buceadores</th>
                <th>Editar Inmersión</th>
                <th>Borrar Inmersión</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inmersiones as $inmersion)
            <tr data-id="{{$inmersion->id}}">
                <td>{{$inmersion->id}}</a></td>
                <td><a href="{{url('/localizaciones')}}/{{$inmersion->localizacion_id}}/mostrar" class='btn btn-success btn-sm'>{{$inmersion->localizacion_id}}</a></td>
                <td>{{$inmersion->fecha}}</td>
                <td>{{$inmersion->t_total}}</td>
                <td>{{$inmersion->temperatura}}</td>
                <td>{{$inmersion->consumo}}</td>
                <td>{{$inmersion->lastre}}</td>
                <td>{{$inmersion->litros_bot}}</td>
                <td>{{$inmersion->prof_max}}</td>
                <td><a href="{{url('/instructores')}}/{{$inmersion->instructor_id}}/mostrar" class='btn btn-primary btn-sm'>{{$inmersion->instructor_id}}</a></td>
                <td>{{$inmersion->num_buceadores}}</td>
                <td>
                    <a href="{{url('/inmersiones')}}/{{$inmersion->id}}/edit" class='btn btn-info btn-sm fas fa-edit'></a>
                </td>
                <td>
                    <a href="#" class='btn btn-danger btn-sm borrar fas fa-trash'></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <h1>No hay inmersiones</h1>
    @endif
    @endsection