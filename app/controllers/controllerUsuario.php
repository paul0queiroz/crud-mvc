<?php
require_once "app/models/Usuario.php";

class controllerUsuario {
    public function index() {
        $usuario = new $Usuario();
        $usuarios = $usuario->listarUsuarios();
        include "app/views/usuarios/index.php";	
    }
}

?>