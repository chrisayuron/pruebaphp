<!DOCTYPE html>
<html lang="es-CO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h1>FORMULARIO ENVIADO</h1>
    <div class="card text-center">
        <div class="card-header">
           USUARIO REGISTRADO
           <?php 
           date_default_timezone_set('America/Bogota');
           
           ?>
        </div>
        <div class="card-body">
            <h5 class="card-title">Gracias por tu registro</h5>
            <p class="card-text">En unos minutos recibirá un mensaje de confirmación a <?php  echo $_POST['correo']?></p>
            <a href="#" class="btn btn-primary">Volver a la pagina de inicio</a>
         </div>
         <div class="card-footer text-muted">
           <?php
                $fechaActual = date('d/m/y'.' : '.'h:i:s') ;
                echo $fechaActual;
           ?>
         </div>
    </div>
    <!-- <?php
        var_dump($_POST)
        // Comando var_dump muestra el typo de dato
    ?> -->
</body>
</html>