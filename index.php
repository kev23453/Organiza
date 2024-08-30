<?php

//este archivo redireccionara o al login si no hay sesion
//o a la carpeta user

include 'utils/class/conection.php';
include 'utils/class/user.php';
include 'utils/messages/msg.php';

if(isset($_POST['send'])){

    $newConn = new conection();
    $conn = $newConn->conectar();

    echo $name = mysqli_real_escape_string($conn, $_POST['username']);
    echo $email = mysqli_real_escape_string($conn, $_POST['email']);
    echo $password = mysqli_real_escape_string($conn, md5($_POST['password']));

    //nuevo usuario
    $user = new user($name, $email, $password);

    if( mysqli_num_rows($user->getUser($email)) > 0 ){
        echo msg("push", "error", "el usuario que ingresaste ya existe");
    }else{
        if($user->createUser()){
            echo msg("push", "success", "usuario creado exitosamente");
        }else{
            echo msg("push", "error", "error al insertar ".mysqli_error($conn)." ");
        }
    }

    
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/messages_styles/style.css">
    <title>Organiza</title>
</head>
<body>
    <!--?php msg("push", "success", "comentario")?-->

    <form action="" method="post">
        <input type="text" name="username" placeholder="escribe...">
        <input type="email" name="email" placeholder="escribe...">
        <input type="password" name="password" placeholder="escribe...">
        <button name="send">enviar</button>
    </form>
</body>
<script src="assets/js/scripts_message/script.js"></script>
</html>