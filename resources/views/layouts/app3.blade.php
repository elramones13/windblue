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

    <style>
        body {
            margin: 40px;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 0px 30px;
            border: 1px solid lightgrey;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 0.5em;
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
            width: 10%;
            height: 10%;
            margin: 0 auto;
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
            box-shadow: 1px 2px 5px grey;
            border-radius: 10px;
            padding: 5px;
        }

        .style-2 a:hover {
            box-shadow: 1px 2px 5px black;
            border-radius: 10px;
            transition: 1.5s;

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
            animation: show 0.2s 1.1s ease 1 both;
        }

        .style-2 a:nth-child(2) {
            animation: show 0.2s 1.2s ease 1 both;
        }

        .style-2 a:nth-child(3) {
            animation: show 0.2s 1.3s ease 1 both;
        }

        .style-2 a:nth-child(4) {
            animation: show 0.2s 1.4s ease 1 both;
        }

        .style-2 a:nth-child(5) {
            animation: show 0.2s 1.5s ease 1 both;
        }

        table {
            table-layout: fixed;
        }

        table td {
            word-wrap: break-word;
            max-width: 400px;
        }
    </style>
</head>

<body>
    <div>
        <div class="logo"><img src="https://windbluesports.com/images/buceo/logos/logo-windblue-nuevo.png" width="300px" height="150px"></div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @yield("contenido")
</body>

</html>