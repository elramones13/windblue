@extends("layouts.app2")
@section("contenido")
<script>
    $(document).ready(function() {
        $('#tabla_instructores').DataTable({
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

<body>
    <h1 id="titulot"> Tabla de instructores</h1>
    @if(count($instructores))
    <a href=" {{url('/instructores/create')}}" class="btn btn-primary" padding="10px">Nuevo instructor</a>
    <a href=" {{url('/dashboard')}}" class="btn btn-success" padding="10px">Inicio</a>
    <table id="tabla_instructores" class="table table-striped table-bordered ">
        <thead>
            <tr>
                <th>Id</th>
                <th>Dni</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha Nacimiento</th>
                <th>Edad</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>País</th>
                <th>Certificación de Instructor</th>
                <th>Numero de buceos</th>
                <th>Editar Instructor</th>
                <th>Eliminar Instructor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($instructores as $instructor)
            <tr data-id="{{$instructor->id}}">
                <td>{{$instructor->id}}</td>
                <td>{{$instructor->dni}}</td>
                <td>{{$instructor->nombre}}</td>
                <td>{{$instructor->apellido1}} {{$instructor->apellido2}}</td>
                <td>{{$instructor->f_nacimiento}}</td>
                <td>{{\Carbon\Carbon::parse($instructor->f_nacimiento)->diff(\Carbon\Carbon::now())->format('%y');}}</td>
                <td>{{$instructor->email}}</td>
                <td>{{$instructor->telefono}}</td>
                <td>{{$instructor->pais}}</td>
                <td>{{$instructor->cert_instructor}}</td>
                <td>{{$instructor->inmersion->count()}}</td>
                <td>
                    <a href="{{url('/instructores')}}/{{$instructor->id}}/edit" class='btn btn-info btn-sm edit'>Editar</a>
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