<?php
 class Database {
    private $host = "localhost"; //Server MySQL -> Define que estou rodando o banco de dados localmente no XAMPP.
    private $db_name = "crud_mvc" // Nama Database -> Nome do banco de dados que criei no XAMPP.
    private $username = "root"; // Username MySQL ( Pattern XAMPP) -> User padrão do MySQL no XAMPP.
    private $password = ""; // Password MySQL ( Pattern XAMPP) -> Normalmente, o XAMPP não existe senha por padrão.
    public $conn;

    //Metodo para fazer a conexão com o banco de dados

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE+EXCEPTION);    
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }

 }
?>