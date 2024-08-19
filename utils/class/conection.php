<?php

declare(strict_types=1);

//la conexion sera nula al principio luego de conectarse se va a retornar

class conection{
    private $host = "localhost"; 
    private $user = "root"; 
    private $pass = "";
    private $db = "organiza";
    public $conn;

    public function conectar(){
        $this->conn = mysqli_connect($this->host, $this->user,
        $this->pass, $this->db,);

        if(!$this->db){
            echo "error al conectar" . mysqli_error($this->conn);
        }
        
        return $this->conn;
    }

}

?>