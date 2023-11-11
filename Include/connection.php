<?php
// Criando conexao com o Banco 
//Classe Gerencia 
class mysqldb
{   //Docker
    public static $servername = "172.22.0.4";
    public static $username = "root";
    public static $password = "root";

    //Xammp
    // public static $servername = "localhost";
    // public static $username = "root";
    // public static $password = " ";
    
  

    public function Create_Db()
    {
        $conn = new mysqli(self::$servername, self::$username, self::$password);
        
        $result = $conn->query("
        CREATE DATABASE IF NOT EXISTS Gerencia;
        ");
        
        $result = $conn->query("
        CREATE DATABASE IF NOT EXISTS Telecall;
        ");

        
        //conectando no banco
        if ($conn->connect_error) {
        die("connect erro " . $conn->connect_error);
        //verificando se deu tudo certo
        }
        //echo "sucesso";
        // deu certo 
    }
        
    public static $databaseG = 'Gerencia';


    public function create_Table_Gerencia()
    {
        $conn = new mysqli(self::$servername, self::$username, self::$password, self::$databaseG);
        $result = $conn->query("
        CREATE TABLE IF NOT EXISTS Usuario(
            nome varchar(100),
            usuario varchar(100),
            senha varchar(100),
            cpf int primary key not null
            );
        ");
        // Criacao de admin
        // $result = $conn->query("
        // Insert INTO Usuario values ('Alexandre S.', 'admin@gamil.com',md5('admin'), '12345678')
        // ");
    }

    

    public function SearchLogin_Gerencia($NomeUsuarioGerente,$SenhaUsuarioGerente)
    {
        $conn = new mysqli(self::$servername, self::$username, self::$password, self::$databaseG);
        
        $result = $conn->query("
        SELECT nome,cpf FROM Usuario WHERE '$NomeUsuarioGerente' = usuario AND md5('$SenhaUsuarioGerente') = senha;
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
            // //Xampp
            // header('location: http://localhost:8080/projeto-telecall');
            // exit;
            header('location: http://localhost:8080/projeto-telecall');
            exit;
        }
    }

    public function create_Table_Usuario(){
            $conn = new mysqli(self::$servername, self::$username, self::$password, self::$databaseU);
            $result = $conn->query("
            CREATE TABLE IF NOT EXISTS Usuarios(
            nome varchar(100) not null, 
            data_nascimento date not null , 
            sexo varchar(100) not null, 
            nome_materno varchar(100), 
            cpf varchar(11) primary key not null , 
            telefone_celular varchar(17) not null, 
            telefone_fixo varchar(17) not null, 
            endereco varchar(255) not null, 
            complemento varchar(255) not null, 
            login varchar(6) not null , 
            senha varchar(100) not null
            );
        ");
    }


    

}


//Classe Usuario 

class mysqldbUsuario extends mysqldb {

    public static $databaseU = 'Telecall';

    public function Login_Usuario($NomeUsuario,$SenhaUsuario){
        $conn = new mysqli(self::$servername, self::$username, self::$password, self::$databaseU);
        
        $result = $conn->query("
        SELECT nome,cpf FROM Usuarios WHERE '$NomeUsuario' = nome AND md5('$SenhaUsuario') = senha;
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
            $minhaConexao = new mysqldb();
            $minhaConexao ->SearchLogin_Gerencia($NomeUsuario,$SenhaUsuario);
            // header('location: http://localhost:8080/projeto-telecall');
            // exit;
        }
    }

    public function Register_Usuario($nome ,$dataNascimento ,$sexo ,$nomeMaterno ,$cpf ,$telefoneCelular ,$telefoneFixo ,$endereco ,$complemento ,$login ,$senha){

        $conn = new mysqli(self::$servername, self::$username, self::$password, self::$databaseU);

        $result = "INSERT INTO Usuarios 
        (nome, data_nascimento, sexo, nome_materno, cpf, telefone_celular, telefone_fixo, endereco, complemento, login, senha) 
        VALUES 
        ('$nome', '$dataNascimento', '$sexo', '$nomeMaterno', '$cpf', '$telefoneCelular', '$telefoneFixo', '$endereco', '$complemento' ,'$login', '$senha')";

        if ($conn->query($result) === TRUE) {
            header('location: http://localhost:8080/projeto-telecall/log.php');
            exit;
            //Xampp
            // header('location: /projeto-telecall/log.php');
            // exit;
        } else {
            echo 'Erro 404 Tente novamento mais Tarde';
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }

    }

}

