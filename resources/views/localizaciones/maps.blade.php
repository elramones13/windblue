@extends("layouts.app2")
@section("contenido")
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>    
    <style>#map {height:20%;width:100%;padding:20%;}</style>
    
</head>
<form action="{{url('/localizaciones/')}}/{{$localizaciones->id}}" method="post">
    <h1 style="text-align:center;text-decoration:underline;">Mapa de {{$localizaciones->nombre}}</h1>

    <a style="margin:20px;"href="{{url('/localizaciones')}}" class="btn btn-success fas fa-step-backward" padding="10px"></a>
<div id="map"></div>
<script>
        var greenIcon = L.icon({
            iconUrl:"https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimage.flaticon.com%2Ficons%2Fpng%2F512%2F1499%2F1499879.png&f=1&nofb=1",
            iconSize:[60,70],
        })
        var map = L.map('map').setView([30,0],5);
        L.tileLayer('https://api.maptiler.com/maps/pastel/256/{z}/{x}/{y}@2x.png?key=wwBzr5XWq3YBtWNoVQwH',{
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a> <a href="https://www.maptiler.com/copyright/" target="_blank">&copy;MapTiler</a><a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
        }).addTo(map);
        var marker = L.marker(['{{$localizaciones->latitud}}','{{$localizaciones->longitud}}'],{icon:greenIcon}).addTo(map);
    </script>
@endsection