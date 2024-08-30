<?php


class user{
    //propiedades

    private $name;
    private $email;
    private $password;
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
    public function getUser(){
        $query = "SELECT * FROM users WHERE email = '".$this->email."' ";
        $exect = mysqli_query($this->conn, $query);
        return $exect;
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
        
    }


}
?>