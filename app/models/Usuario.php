<?php
require_once "config/database.php";
//Classe Usuario
//A linha de código abaixo cria a classe Usuario
//A classe Usuario é a classe que contém os métodos para manipular os dados dos usuários
//utilizando $table_name para referenciar o nome da tabela, foi feito com o intuito para caso precise alterar o nome da tabela, não precisar alterar em todos os lugares
class Usuario {
    private $conn;
    private $table_name = "usuarios";


    public function __construct() {
        $database = new Database();
        $this->conn =$database->getConnection();
    }

    //Metodo para listar todos os usuarios
    public function listartable_name(){
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }

    //Metodo para cadastrar um usuario
    public function cadastrarUsuario($nome, $email, $senha){
        $query = "INSERT INTO" . $this->table_name . "(nome, email, senha, criado_em, telefone_contato, telefone_celular, profissao)  VALUES (:nome, :email, :senha, NOW())";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":senha", password_hash($senha, PASSWORD_DEFAULT)); // Senha criptografada
        return $stmt->execute();
    }
}
?>