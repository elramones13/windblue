<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Windblue Sports</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <script src='https://kit.fontawesome.com/edb8698070.js' crossorigin='anonymous'></script>  
  <style>
    body {
      margin: 40px;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0px 0px 30px;
      border: 1px solid lightgrey;
      font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
      font-size: 1em;
    }

    .fas {
      font-size: 25px;
    }
    #logout {
      margin: 20px;
    }

    html {
      background-image: url("http://www.dinpattern.com/tiles/presence-ii.png");
    }


    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter,
    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_processing,
    .dataTables_wrapper .dataTables_paginate {
      color: black;
    }

    .dataTables_wrapper .dataTables_length select {
      background-color: white;
    }

    .dataTables_wrapper .dataTables_filter input {
      background-color: white;
    }

    th.sorting {
      background-color: lightgrey;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
      padding: 0em;
      margin: 0em;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
      color: white !important;
      background-color: none;
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #585858), color-stop(100%, #111));
      background: -webkit-linear-gradient(top, #585858 0%, #111 100%);
      background: -moz-linear-gradient(top, #585858 0%, #111 100%);
      background: -ms-linear-gradient(top, #585858 0%, #111 100%);
      background: -o-linear-gradient(top, #585858 0%, #111 100%);
      background: linear-gradient(to bottom, #585858 0%, #111 100%);
    }

    #login {
      margin: 0 auto;
    }

    th {
      text-align: center;
    }

    #titulot {
      text-align: center;
      text-decoration: underline;
    }

    .logo {
      text-align: center;
    }
    .visible_menu span:nth-child(1){
	transform: rotate(45deg) translate(-2px,1px); 
}
 
.visible_menu span:nth-child(2){
	opacity: 0;
}
 
.visible_menu span:nth-child(3){
	transform: rotate(-45deg) translate(-3px,3px); 
}
.visible_menu nav{
	left: 0;
	opacity: 1;
}
.visible_menu #content{
      transform: translateX(260px);
}
    .style-2 {
      width: 100%;
      text-align: center;
      margin-top: 10px;
      margin-bottom: 5%;
    }

    .style-2 a {
      font-family: "Oswald", sans-serif;
      font-weight: 500;
      text-transform: uppercase;
      text-decoration: none;
      color: #212121;
      margin: 0 15px;
      letter-spacing: 1px;
      position: relative;
      display: inline-block;
      font-size: 2em;
      padding: 5px;
      background-color: white;

    }

    .style-2 a:hover {
      transition: 1.5s;
      text-decoration: none;
    }

    .style-2 a:before {
      content: "";
      position: absolute;
      width: 100%;
      height: 3px;
      background: #fff;
      background-image: linear-gradient(to top, #00c6fb 0%, #005bea 100%);
      top: 47%;
      animation: out 0.4s cubic-bezier(1, 0, 0.58, 0.97) 1 both;
    }

    .style-2 a:hover:before {
      animation: in 0.4s cubic-bezier(1, 0, 0.58, 0.97) 1 both;
    }

    @keyframes in {
      0% {
        width: 0;
        left: 0;
        right: auto;
      }

      100% {
        left: 0;
        right: auto;
        width: 100%;
      }
    }

    @keyframes out {
      0% {
        width: 100%;
        left: auto;
        right: 0;
      }

      100% {
        width: 0;
        left: auto;
        right: 0;
      }
    }

    @keyframes show {
      0% {
        opacity: 0;
        transform: translateY(-10px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .style-2 a:nth-child(1) {
      animation: show 0.5s 0.1s ease 1 both;
    }

    .style-2 a:nth-child(2) {
      animation: show 0.5s 0.2s ease 1 both;
    }

    .style-2 a:nth-child(3) {
      animation: show 0.5s 0.3s ease 1 both;
    }

    .style-2 a:nth-child(4) {
      animation: show 0.5s 0.4s ease 1 both;
    }

    .style-2 a:nth-child(5) {
      animation: show 0.5s 0.5s ease 1 both;
    }

    .style-2 a:nth-child(6) {
      animation: show 0.5s 0.6s ease 1 both;
    }

    table {
      table-layout: fixed;
    }

    table td {
      word-wrap: break-word;
      max-width: 400px;
      text-align: center;
    }

    #titulot {
      text-align: center;
      text-decoration: underline;
    }

@media (max-width: 810px) {
  #hamburguesa{
    display:none;
  }
}

@media (max-width: 1523px) {
  .style-2 a {
    font-size:2em !important;
  }
  body{
    font-size:.5em;
  }
}
@media (max-width: 1359px) {
  .style-2 a {
    font-size:1.5em !important;
  }
}
@media (max-width: 1112px) {
  .style-2 a {
    font-size:1.2em !important;
  }
}
@media (max-width: 999px) {
  .style-2 a {
    font-size:1em !important;
  }
}
@media (max-width: 897px) {
  .style-2 a {
    font-size:.8em !important;
  }
}
  </style>
</head>

<body>
  <div class="logo"><img src="https://windbluesports.com/images/buceo/logos/logo-windblue-nuevo.png" width="300px" height="150px"></div>
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <div class="menu">
      <nav class="style-2">
        <a href=" {{url('/dashboard')}}" class="">Inicio</a>
        <a href="{{ route('buceadores.index') }}" class="">Buceadores</a>
        <a href="{{ route('instructores.index') }}" class="">Instructores</a>
        <a href="{{ route('localizaciones.index') }}" class="">Localizaciones</a>
        <a href="{{ route('inmersiones.index') }}" class="">Inmersiones</a>
        <a id="logout" href="route('logout')" onclick="event.preventDefault();
        this.closest('form').submit();">Log out</a>
      </nav>
    </div>
  </form>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <div class="card-body">
    @if(session('info'))
    <div class="alert alert-success">
      {{session('info')}}
    </div>
    @endif
  </div>

  @yield("contenido")
</body>

</html>