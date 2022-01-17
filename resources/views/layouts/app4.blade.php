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
      margin: 0 auto;
      padding: 0px;
      font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
      font-size: 0.6em;
    }

    html {
      background-color:white;
    }

    th {
      text-align: center;
      font-size: 1em;
      background-color: lightblue;
    }

    #titulot {
      text-align: center;
      text-decoration: underline;
    }

    .logo {
      text-align: center;
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
  <div class="logo"><img src="https://windbluesports.com/images/buceo/logos/logo-windblue-nuevo.png" width="300px" height="150px"></div>
  @yield("contenido")
</body>

</html>