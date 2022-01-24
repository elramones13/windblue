@extends("layouts.app2")
@section("contenido")
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>

<body>
<h2 id="titulot">Gráfica del número de inmersiones por localizaciones</h2>
<canvas id="bar-chart" height="100px"></canvas>

<script>
    new Chart(document.getElementById("bar-chart"), {
        type: 'doughnut',
        data: {
            labels: ['{!! $nombreLocalizaciones !!}'],
            datasets: [{
                backgroundColor: [{!! $colores !!}],
                data: [{!! $cantidadInmersiones !!}],
                hoverBorderColor:[{!! $colores !!}],
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Número de Inmersiones/as por Localización'
            }
        }
    });
</script>

@endsection