@extends("layouts.app2")
@section("contenido")
<style>
    body {
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-size: 12px;
    }

    #titulot {
        text-align: center;
        text-decoration: underline;
    }
</style>
<script>
    $(document).ready(function() {
        $('#tabla_buceadores').DataTable({
            "order": [
                [2, 'asc']
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
    <a href=" {{url('/buceadores/create')}}" class="btn btn-primary" padding="10px">Nuevo buceador</a>
    <a href=" {{url('/')}}" class="btn btn-success" padding="10px">Inicio</a>
    <table id="tabla_buceadores" class="table table-striped table-bordered ">
        <thead>
            <tr>
                <th>Id</th>
                <th>Dni</th>
                <th>Nombre</th>
                <th>Apellido 1</th>
                <th>Apellido 2</th>
                <th>Fecha Nacimiento</th>
                <th>Titulo de buceo</th>
                <th>Certificación de buceo</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>País</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($buceadores as $buceador)
            <tr data-id="{{$buceador->id_buceador}}">
                <td>{{$buceador->id_buceador}}</td>
                <td>{{$buceador->dni}}</td>
                <td>{{$buceador->nombre}}</td>
                <td>{{$buceador->apellido1}}</td>
                <td>{{$buceador->apellido2}}</td>
                <td>{{$buceador->f_nacimiento}}</td>
                <td>{{$buceador->t_buceo}}</td>
                <td>{{$buceador->cert_buceo}}</td>
                <td>{{$buceador->email}}</td>
                <td>{{$buceador->telefono}}</td>
                <td>{{$buceador->pais}}</td>
                <td><a href="#" class='btn btn-danger borrar'>Borrar</a></td>
                <td><a href="{{url('/buceadores')}}/{{$buceador->id}}/edit"><img width="32px" src="https://img.icons8.com/cotton/2x/000000/edit.png"></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <h1>No hay buceadores</h1>
    @endif
    @endsection