<?php   
// function sumar($numero1,$numero2){
//     echo $numero1+$numero2;
// }

// sumar(1,2)

function conect(){
//  mysqli_conecct
//1. host
//2. user_name
//3. password
//4. name-database
    $conexion=mysqli_connect('127.0.0.1','root','','diplomado');
    if(!$conexion){
        echo "ERROR: No fue posible la conexión";
        exit;
    }
    return $conexion;
}


?>