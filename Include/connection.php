<?php
// Criando conexao com o Banco 

class mysql
{
    public static $servername = "172.22.0.3";
    public static $username = "root";
    public static $password = "root";
    
  

    public function connect()
    {
        $conn = new mysqli(self::$servername, self::$username, self::$password);
        
        $result = $conn->query("
        CREATE DATABASE IF NOT EXISTS Gerencia;
        ");

        
        //conectando no banco
        if ($conn->connect_error) {
        die("connect erro " . $conn->connect_error);
        //verificando se deu tudo certo
        }
        //echo "sucesso";
        // deu certo 
    }
        public static $database = 'Gerencia';

    public function create()
    {
        $conn = new mysqli(self::$servername, self::$username, self::$password, self::$database);
        $result = $conn->query("
        CREATE TABLE IF NOT EXISTS Usuario(
            nome varchar(100),
            usuario varchar(100),
            senha varchar(100),
            cpf int primary key not null
            );
        ");
    }

    public function search($emailUsuario,$senhaUsuario)
    {
        $conn = new mysqli(self::$servername, self::$username, self::$password, self::$database);
        $result = $conn->query("
        SELECT nome,cpf FROM Usuario WHERE '$emailUsuario' = usuario AND md5('$senhaUsuario') = senha;
        ");
        $resultcheck = mysqli_num_rows($result);
        if ($resultcheck == 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION["Usuario"] = $row['nome'];
                header('location: http://localhost:8080/projeto-telecall');
                exit;
            }
        }
        else{
            echo'Usuario nao encontrado';
        }
    }

}




$minhaConexao = new mysql();
$minhaConexao->connect();
