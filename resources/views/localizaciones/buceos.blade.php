@extends("layouts.app2")
@section("contenido")
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

<body></body>
<form action="{{url('/localizaciones/')}}/{{$localizaciones->id}}" method="post">
    <h1 id="titulot"> Recuento de Inmersiones {{$localizaciones->nombre}} ID {{$localizaciones->id}}</h1>
    <a href=" {{url('/localizaciones')}}" class="btn btn-success fas fa-step-backward" padding="10px"></a>
    @if(count($inmersiones)>0)
    <table id="tabla_inmersiones" class="table table-striped table-bordered ">
        <thead>
            <tr>
                <th>Id</th>
                <th>Fecha</th>
                <th>Tiempo Total</th>
                <th>Temperatura</th>
                <th>Consumo</th>
                <th>Lastre</th>
                <th>Litros de la botella</th>
                <th>Profundidad Máxima</th>
                <th>Instructor ID</th>
                <th>Nº Buceadores</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($localizaciones->inmersiones as $inmersion)
            <tr data-id="{{$inmersion->id}}">
                <td>{{$inmersion->id}}</a></td>
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
    <h1>No hay localizaciones</h1>
    @endif
    @endsection