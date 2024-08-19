<?php

//este archivo redireccionara o al login si no hay sesion
//o a la carpeta user


include 'utils/class/conection.php';

$conect = new conection();
$conn = $conect->conectar();


$query = "SELECT * FROM users";
$execute = mysqli_query($conn, $query);

function showUsers($executeQuery){
    if($executeQuery){
        return "hay usuarios en la db";
    }
    else{
        return "no hay usuarios en la db";
    }
}

echo showUsers($execute);

?>