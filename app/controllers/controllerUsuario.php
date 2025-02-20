<?php
require_once "app/models/Usuario.php";

class controllerUsuario {
    private $usuarioModel; // Atributo para armazenar o objeto UsuarioModel

    public function __construct(){
        $this->usuarioModel = new Usuario(); // Instanciando o objeto UsuarioModel
    }
}

    public function listar() {
       $usuarios = $this->usuarioModel->listarUsarios();
       include "viewss/usuarios/index.php";
    }

    public function cadastrar() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $telefone_contato = $_POST["telefone_contato"] ?? null;
            $telefone_celular = $_POST["telefone_celular"] ?? null;
            $profissao = $_POST["profissao"];

            if ($this->usuarioModel->cadastrarUsuario($nome, $email, $senha, $telefone_celular, $telefone_contato, $profissao)) {
                header("Location: index.php?classe=controllerUsuario&metodo=listar"); // Redireciona após o cadastro.
                exit(); 
            } else  {
                echo "Erro ao cadastrar o usuário";
            }
        }
    }

?>