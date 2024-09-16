<?php

include '../utils/autoload.php';
include '../utils/functions/msg.php';

if(isset($_POST['login'])){

    $connectDB = new conection();
    $conn = $connectDB->conectar();

    echo $email = mysqli_real_escape_string($conn, $_POST['emailLog']);
    echo $password = mysqli_real_escape_string($conn, md5($_POST['passwordLog']));

    if(empty($email) || empty($password)){
        echo msg("push", "error", "you must put the email and password");
    }else{
        $user = new user(null, $email, $password);
        
        if(mysqli_num_rows($user->getUser($password)) > 0)
        {
            if($user->generateCookie()){
                echo msg("push", "success", "Bienvenido");
                header("refresh:1; url='../user/home.php' ");
            }
        }
        else{
            msg("push", "error", "user or password incorrect");
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/variables_css/style.css">
    <link rel="stylesheet" href="../assets/css/messages_styles/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!--link rel="stylesheet" href="../assets/css/authentication_styles/style.css"-->
    <title>Organiza</title>
</head>
<body>
    <div class="container_all">
    <!--bienvenida -->
        <div class="welcome_content">
            <h2>Welcome to <span id="programName">organiza</span></h2>
        </div>

    <!-- login and register form -->
     <div class="container_forms">
        <form action="" method="post" id="login">
            <div class="box">
                <span>email: </span>
                <input type="email" name="emailLog" id="">
            </div>

            <div class="box">
                <span>password: </span>
                <input type="password" name="passwordLog" id="">
            </div>

            <button type="submit" name="login">iniciar sesion</button>
        </form>
     </div>



    </div>
</body>
</html>