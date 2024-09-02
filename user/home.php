<?php

include '../utils/autoload.php';
include '../utils/functions/loadHead_resources.php';

user::getCookie("../");

if(isset($_POST['logout'])){
    user::destroyCookie();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo load_resources("../assets/css/user_styles");?>
    <title>Organiza</title>
</head>
<body>
    <div class="container-viewport">
        <?php include 'ui/sidebar.php';?>

        <div id="containerPrincipal-data">
            <?php include 'ui/header.php';?>
            <div id="content">
                <!--en este apartado siempre ira el contenido-->
            </div>
        </div>
        
    </div>
</body>
</html>