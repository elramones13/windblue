@extends("layouts.app2")
@section("contenido")
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
</head>
 
<body>
<h3 id="titulot">Gráfica del número de inmersiones por Instructores</h3>
<a href=" {{url('/dashboard')}}" class="btn btn-success fas fa-home" padding="10px"></a>
<a href=" {{url('/instructores')}}" class="btn btn-primary fas fa-step-backward" padding="10px"></a>
<canvas id="bar-chart" height="100px"></canvas>
<script>
    new Chart(document.getElementById("bar-chart"), {
        type: 'doughnut',
        data: {
            labels: ['{!! $nombreInstructores !!}'],
            datasets: [{
                backgroundColor: [{!! $colores !!}],
                data: [{!! $cantidadInmersiones !!}],
                hoverBorderColor:[{!! $colores !!}],
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Número de Inmersiones/as por Instructor'
            }
        }
    });
</script>
@endsection