<?php
//este archivo redireccionara o al login si no hay sesion
//o a la carpeta user
if(isset($_COOKIE['user'])){
    header("location:user/home.php");
}else{
    header("location:authentication/account.php");
}
?>