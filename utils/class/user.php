<?php

declare(strict_types=1);

class user{
    //propiedades

    private $name = null;
    private $email = null;
    private $password = null;
    private $conn;
    private $conectDB;


    //constructor
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;

        $this->conectDB = new conection();
        $this->conn = $this->conectDB->conectar();
    }
    
    //metodos

    //Seleccionar usuario
    public function getUser($ps = null){
        if($ps != null){
            $query = "SELECT * FROM users WHERE 
            email = '".$this->email."' AND password = '".$ps."' ";
            
            $exect = mysqli_query($this->conn, $query);
            return $exect;
        }else{
            $query = "SELECT * FROM users WHERE email = '".$this->email."' ";
            $exect = mysqli_query($this->conn, $query);
            return $exect;
        }
    }

    //registrar usuario
    public function createUser(){
        $query = "INSERT INTO users(username, email, password)
        VALUES('".$this->name."', '".$this->email."', '".$this->password."')";

        $exect = mysqli_query($this->conn, $query);
        return $exect;
    }

    //actualizar usuario
    public function updateUser()
    {

    }



    //eliminar usuario

    public function deleteUser()
    {

    }








    //generar sesion del usuario

    public function generateCookie(){
        $sql = 
        "SELECT * FROM users WHERE email = '".$this->email."'
         AND password = '".$this->password."' ";

         $exect = mysqli_query($this->conn, $sql);

         if(mysqli_num_rows($exect) > 0)
         {
            $fetch = mysqli_fetch_assoc($exect);
            //cookie
            return setcookie("user", $fetch['idUser'], time() + 60*60*24*15, "/");
         }
    }







    //comprobar si existen cookies del usuario

    public static function getCookie(string $root)
    {
        if(isset($_COOKIE['user'])){ 
            echo $user_id = $_COOKIE['user'];
        }else{   
            $user_id = '';
            return header("location:$root"."authentication/account.php");
        }
    }






    //destruir cookies

    public static function destroyCookie(){
        setcookie("user", "", time() - 1, "/");
        return header("refresh:1");
    }


}
?>