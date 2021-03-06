@extends("layouts.app2")
@section("contenido")
<script>
    $(document).ready(function() {
        $('#tabla_buceadores').DataTable({
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
                        url: "{{url('/buceadores')}}/" + id,
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
    <h1 id="titulot"> Tabla de Buceadores</h1>
    @if(count($buceadores))
    <a href=" {{url('/dashboard')}}" class="btn btn-success fas fa-home" padding="10px"></a>
    <a href=" {{url('/buceadores/create')}}" class="btn btn-primary fas fa-user-plus" padding="10px"></a>
    <table id="tabla_buceadores" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Dni</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha Nacimiento</th>
                <th>Edad</th>
                <th>Titulo de buceo</th>
                <th>Certificación de buceo</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>País</th>
                <th>Editar Buceador</th>
                <th>Eliminar Buceador</th>
            </tr>
        </thead>
        <tbody>
            @foreach($buceadores as $buceador)
            <tr data-id="{{$buceador->id}}">
                <td>{{$buceador->id}}</td>
                <td>{{$buceador->dni}}</td>
                <td>{{$buceador->nombre}}</td>
                <td>{{$buceador->apellido1}} {{$buceador->apellido2}}</td>
                <td>{{$buceador->f_nacimiento}}</td>
                <td>{{\Carbon\Carbon::parse($buceador->f_nacimiento)->diff(\Carbon\Carbon::now())->format('%y');}}</td>
                <td>{{$buceador->t_buceo}}</td>
                <td>{{$buceador->cert_buceo}}</td>
                <td>{{$buceador->email}}</td>
                <td>{{$buceador->telefono}}</td>
                <td>{{$buceador->pais}}</td>
                <td>
                    <a href="{{url('/buceadores')}}/{{$buceador->id}}/edit" class='btn btn-info btn-sm fas fa-edit'></a>
                </td>
                <td>
                    <a href="#" class='btn btn-danger btn-sm borrar fas fa-trash'></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <h1>No hay buceadores</h1>
    @endif
    @endsection