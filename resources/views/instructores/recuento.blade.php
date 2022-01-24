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
                        url: "{{url('/instructores')}}/" + id,
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
<form action="{{url('/instructores/')}}/{{$instructores->id}}" method="post">
    <h1 id="titulot"> Recuento de Inmersiones de {{$instructores->nombre}} con ID {{$instructores->id}}</h1>
    <a href=" {{url('/instructores')}}" class="btn btn-success" padding="10px">Volver</a>
    <a href=" {{url('/instructorespdf')}}/{{$instructores->id}}" class="btn btn-danger fas fa-file-pdf" padding="10px"></a>
    @if(count($inmersiones)>0)
    <table id="tabla_inmersiones" class="table table-striped table-bordered ">
        <thead>
            <tr>
                <th>Id</th>
                <th>Localizacion ID</th>
                <th>Fecha</th>
                <th>Tiempo Total</th>
                <th>Temperatura</th>
                <th>Consumo</th>
                <th>Lastre</th>
                <th>Litros de la botella</th>
                <th>Profundidad Máxima</th>
                <th>Nº Buceadores</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($instructores->inmersiones as $inmersion)
            <tr data-id="{{$inmersion->id}}">
                <td>{{$inmersion->id}}</a></td>
                <td><a href="{{url('/localizaciones')}}/{{$inmersion->localizacion_id}}/mostrar" class='btn btn-warning btn-sm'>{{$inmersion->localizacion_id}}</a></td>
                <td>{{$inmersion->fecha}}</td>
                <td>{{$inmersion->t_total}}</td>
                <td>{{$inmersion->temperatura}}</td>
                <td>{{$inmersion->consumo}}</td>
                <td>{{$inmersion->lastre}}</td>
                <td>{{$inmersion->litros_bot}}</td>
                <td>{{$inmersion->prof_max}}</td>
                <td>{{$inmersion->num_buceadores}}</td>
                <td>
                    <a href="{{url('/inmersiones')}}/{{$inmersion->id}}/edit" class='btn btn-info btn-sm edit'>Editar</a>
                </td>
                <td>
                    <a href="#" class='btn btn-danger btn-sm borrar'>Borrar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <h1>No hay instructores</h1>
    @endif
    @endsection