<?php

include '../utils/autoload.php';

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
    <title>Organiza</title>
</head>
<body>
    <form action="" method="post">
        <button type="submit" name="logout">logout</button>
    </form>
</body>
</html>