<!DOCTYPE html>
<html lang="es-CO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Mi primer PHP</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <?php
            $perfil='administrador';
            if($perfil=='administrador'){
                ?>
          <a class="btn btn-dark" href="/registrarse.php">Iniciar Sesión
            
          </a>
        <?php }else{
            ?>
           <a class="btn btn-dark disabled" href="/registrarse.php">Iniciar Sesión
        <?php
        }
        ?>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <?php   
        $esCliente=false;
        if($esCliente){

        ?>
        <button class="btn btn-outline-success" type="submit">iniciar sesion</button>
        <?php }?>
      </form>
    </div>
  </div>
</nav>
<section>
    <h1 style='text-align:center;'>Bievenido a su tienda de productos</h1>
</section>
<?php
$productos=array("Pan","Granola","Avena","Frutos","Secos","Salvado"); 

?>
<ul class="list-group">
<?php
for($i = 0; $i < count($productos); $i++) { ?>
  <li class="list-group-item"> <?php echo $productos[$i] ?>  </li>
<?php } ?>
</ul>

  <!--   <?php
    $anio=2022;
    $nombre = "Ronald";
    $realy = false;
    print ('Hola mundo');?><br>
    <?php  echo "Desde php";?><br>
    <?php echo "Hola " . $nombre . " desde el " .$anio . " pero es" . var_dump($realy);
    // las variables booleanas no son visibles en el documento
    //para mostrarla usamos la función var_dump()
    ?> -->
    <!-- <?php
    $numero1=rand(1,100);
    $numero2=rand(1,100);
    if ($numero1 > $numero2){
        print("Entre ". $numero1. " es mayor que ".$numero2." el mayor es ".$numero1);
    } else{
        print("Entre ". $numero1. " es mayor que ".$numero2." el mayor es ".$numero2);
    }

    ?> -->
    <!-- <?php
    
    $numero1=rand(1,100);
    $numero2=rand(1,100);
    $numero3=rand(1,100);
    echo "<p style='text-align:center;'>El mayor de los siguientes numeros es: $numero1, $numero2, $numero3</p>";    
    if($numero1>$numero2 && $numero1>$numero3){
        echo "<div style='background-color:yellow;height:50px;'>NUMERO 1</div>";
        echo "<h2 style='color:red;'>Mayor: ".$numero1."</h2>";
        echo('El mayor entre '.$numero1.", ".$numero2." y ".$numero3." es ".$numero1);
    }else if($numero2>$numero1 && $numero2>$numero3){
        echo "<div style='background-color:yellow;height:50px;'>NUMERO 2</div>";
        echo "<h2 style='color:red;'>Mayor: ".$numero2."</h2>";
        echo('El mayor entre '.$numero1.", ".$numero2." y ".$numero3." es ".$numero2);
    }else if($numero3>$numero1 && $numero3>$numero2){
        echo "<div style='background-color:yellow;height:50px;'>NUMERO 3</div>";
        echo "<h2 style='color:red;'>Mayor: ".$numero3."</h2>";
        echo('El mayor entre '.$numero1.", ".$numero2." y ".$numero3." es ".$numero3);
    }
    ?> -->

    <!-- <main>
        <header>MI PAGINA DESDE PHP</header>
        <div class="content">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum, pariatur?</p>
            <?php
            if ($numero1>50) { ?>
            <h3>Soy el número <?php echo $numero1 ?> mayor de 50</h3>
            <?php } else {?>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, atque.</p>
            <?php } ?>
        </div>
    </main> -->

<form action="/envioformulario.php" method="POST">
  <div class="mb-3">
    <label for="email" class="form-label">Correo Electrónico</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="correo">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="contrasena" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="contrasena" name="pass">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="recordar" name="remember">
    <label class="form-check-label" for="recordar">Recordarme</label>
  </div>
  <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
</form>
</body>
</html>