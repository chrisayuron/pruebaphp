<?php
//importar
require 'conexion.php';
$bd_conect=conect();

$nombres=true;
$nombresContent='';
$apellidos=true;
$apellidosContent='';
$username=true;
$usernameContent='';
$ciudad=true;
$ciudadContent='';
$departamentos = array("Boyaca","Antioquia","Valle del Cauca","Santader","Magdalena");
$departamento=true;
$departamentoContent='';
$direccion=true;
$direccionContent='';
$terminos=true;
$terminosContent=true;
if($_SERVER["REQUEST_METHOD"]=="POST"){

  if(empty($_POST["nombres"])){
    $nombres=false;
  } else {
    $nombresContent=$_POST['nombres'];
  } 
  if(empty($_POST["apellidos"])){
    $apellidos=false;
  } else {
    $apellidosContent=$_POST['apellidos'];
  } 
  if(empty($_POST["username"])){
    $username=false;
  } else{
    $usernameContent=$_POST['username'];
  }
  if(empty($_POST["ciudad"])){
    $ciudad=false;
  } else {
    $ciudadContent=$_POST['ciudad'];
  
  }
  if(empty($_POST["direccion"])){
    $direccion=false;
  } else {
  $direccionContent=$_POST['direccion'];
  }

  if(!isset($_POST["departamento"])){
    $departamento=false;
  } else{
    $departamentoContent= $_POST['departamento'];
  }

  if(!isset($_POST["terminos"])){
    $terminos=false;
  } else {
    $terminosContent=$_POST['terminos'];
    
    }

  
//QUERY PARAMS
  if(

  

    $nombres && $apellidos && $username && $ciudad && $departamento && $direccion && $terminos){
      $query = "INSERT INTO registro (nombres,apellidos,username,ciudad,departamento,direccion)
      VALUES ('${nombresContent}','${apellidosContent}','${usernameContent}','${ciudadContent}','${departamentoContent}','${direccionContent}')";
      mysqli_query($bd_conect,$query);


        // header('Location:index.php');
        header("Location:registro-exitoso.php?nombres=".$nombresContent."&apellidos=".$apellidosContent);
        exit();
      }
      
echo var_dump($_POST);
}
?>

<!DOCTYPE html>
<html lang="es-CO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO DE REGISTRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style="background-color: cadetblue;">
    <h1 style="text-shadow: 5px 5px 2px blue; text-align:center;">FORMULARIO DE REGISTRO - USUARIO NUEVO</h1>
    <div style="margin-top: 50px;" class="container w-75">
<form action="/registrarse.php" method="POST" class="row g-3">
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">Nombres</label>
    <input type="text" 
    class="form-control 
    <?php if(!$nombres) { echo "is-invalid";} ?>" id="validationServer01" 
    name="nombres"  
    value="<?php echo "$nombresContent";?>"
    >
    
    <div class="valid-feedback">
      Parece correcto
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Apellidos</label>
    <input type="text" class="form-control <?php if(!$apellidos) { echo "is-invalid";} ?>" id="validationServer02" name="apellidos"
    value="<?php echo "$apellidosContent";?>">
    <div class="valid-feedback">
    Parece correcto
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServerUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">@</span>
      <input type="text" class="form-control <?php if(!$username) { echo "is-invalid";} ?>" id="validationServerUsername" name="username" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback"
      value="<?php echo "$usernameContent";?>">
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
        Elige un nombre usuario.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationServer03" class="form-label">Ciudad</label>
    <input type="text" class="form-control <?php if(!$ciudad) { echo "is-invalid";} ?>" id="validationServer03" name="ciudad" aria-describedby="validationServer03Feedback"
    value="<?php echo "$ciudadContent";?>">
    <div id="validationServer03Feedback" class="invalid-feedback">
      Escoge un departamento
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationServer04" class="form-label">Departamento</label>
    <select class="form-select <?php if(!$departamento){ echo "is-invalid";} ?>" id="validationServer04" aria-describedby="validationServer04Feedback" name="departamento">
      <option selected disabled>selecciona</option>
        <?php   foreach ($departamentos as $departamento) { ?>
             <option <?php 
              if($departamento==$departamentoContent){
                echo "selected";
              }
              ?> value=" <?php echo $departamento; ?>">
              <?php echo $departamento; ?>
            </option>
        <?php } ?>
    </select>
    <div id="validationServer04Feedback" class="invalid-feedback">
      Por favor seleccione un dpto valido
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationServer05" class="form-label">Dirección</label>
    <input type="text" class="form-control <?php if(!$direccion) { echo "is-invalid";} ?>" id="validationServer05" aria-describedby="validationServer05Feedback" name="direccion"
    value="<?php echo "$direccionContent";?>">
    <div id="validationServer05Feedback" class="invalid-feedback">
     Dirección
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input <?php if(!$terminos){
        echo "is-invalid";} ?>" value="<?php echo $terminosContent; ?>" type="checkbox"  id="invalidCheck3" aria-describedby="invalidCheck3Feedback" name="terminos" value="<?php if($terminos==true){echo "on";}?>">
      <label class="form-check-label" for="invalidCheck3">
        Acepto los terminos
      </label>
      <div id="invalidCheck3Feedback" class="invalid-feedback">
        Debe aceptar los terminos al registrarse
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Registrarse</button>
  </div>
</form> 
</div>
</body>
</html>