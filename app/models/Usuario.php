<?php
require_once "config/database.php";

class Usuario {
    private $conn;
    private $table_name = "usuarios";

    public function __construct() {
        $database = new Database();
        $this->conn =$database->getConnection();
    }

    //Metodo para listar todos os usuarios
    public function listarUsuarios(){
        $query = ""
    }
    }
}
?>