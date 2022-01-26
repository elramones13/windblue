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
<form action="{{url('/instructores/')}}/{{$instructores->id}}" method="post">
    <h1 id="titulot"> Información de {{$instructores->nombre}} con ID {{$instructores->id}}</h1>
    <a href=" {{url('/inmersiones')}}" class="btn btn-success fas fa-step-backward" padding="10px"></a>
    <table id="tabla_instructores" class="table table-striped table-bordered">
        <thead>
            <tr>
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
            <tr data-id="{{$instructores->id}}">
                <td>{{$instructores->dni}}</td>
                <td>{{$instructores->nombre}}</td>
                <td>{{$instructores->apellido1}} {{$instructores->apellido2}}</td>
                <td>{{$instructores->f_nacimiento}}</td>
                <td>{{\Carbon\Carbon::parse($instructores->f_nacimiento)->diff(\Carbon\Carbon::now())->format('%y');}}</td>
                <td>{{$instructores->email}}</td>
                <td>{{$instructores->telefono}}</td>
                <td>{{$instructores->pais}}</td>
                <td>{{$instructores->cert_instructor}}</td>
                <td><a href="{{url('/instructores')}}/{{$instructores->id}}/recuento" class='btn btn-success btn-sm '>{{$instructores->inmersiones->count()}}</a></td>
                <td>
                    <a href="{{url('/instructores')}}/{{$instructores->id}}/edit" class='btn btn-info btn-sm edit fas fa-edit'></a>
                </td>
                <td>
                    <a href="#" class='btn btn-danger btn-sm borrar fas fa-trash'></a>
                </td>
            </tr>
        </tbody>
    </table>
    @endsection