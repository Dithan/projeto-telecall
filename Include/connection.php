<?php
// Criando conexao com o Banco
class Conn
{
    private $servername;
    private $username;
    private $password;
    private $database;
    private $conn; // Propriedade para armazenar a conexão

    public function __construct($servername, $username, $password, $database = null)
    {

        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        // Inicializar a conexão no construtor se o banco de dados foi fornecido
        if (!empty($database)) {
            $this->Create_Dbs();
        }
    }

    public function Create_Dbs()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        $this->conn->query("
            CREATE DATABASE IF NOT EXISTS Gerencia;
        ");

        $this->conn->query("
            CREATE DATABASE IF NOT EXISTS Telecall;
        ");

        //conectando no banco
        if ($this->conn->connect_error) {
            header('location: ' . URL . 'nao-encontrado.php');
            exit;
        }
    }
    public function Create_Table_Usuario()
    {
        $this->database = 'Telecall';

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
        $this->conn->query("
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
            login varchar(255) not null , 
            senha varchar(100) not null
            );
        ");
        if ($this->conn->connect_error) {
            header('location: ' . URL . 'nao-encontrado.php');
            exit;
        }
    }

    public function Create_Table_Gerencia()
    {

        $this->database = 'Gerencia';

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);


        $result = $this->conn->query("
        CREATE TABLE IF NOT EXISTS Usuario(
            nome varchar(100),
            usuario varchar(100),
            senha varchar(100),
            admin bool,
            cpf int primary key not null

            );
        ");

        $resultdb = $this->conn->query("
        SELECT * FROM Usuario;
        ");

        $resultcheck = mysqli_num_rows($resultdb);

        if ($resultcheck == 0) {
            // Criacao de admin
            $result = $this->conn->query("
            Insert INTO Usuario values ('Alexandre S.', 'admin',md5('admin'),1, '12345678')
            ");
        }
    }
    public function getQueryAdmin()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
        return $result = $this->conn->query("SELECT * FROM Usuarios");
    }

    public function deleteUser($CpfUsuario)
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
        return $result = $this->conn->query("DELETE FROM Usuarios WHERE cpf = '$CpfUsuario'");
    }

    public function getServerName()
    {
        return $this->servername;
    }

    public function getUserName()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setDatabase($database)
    {
        $this->database = $database;
    }
    public function getDatabase()
    {
        return $this->database;
    }

    // Adicionar métodos adicionais conforme necessário para manipular a conexão
}

//Classe Gerencia 
class mysqldb
{

    private $connection; // Propriedade para armazenar a instância de Conn

    public function __construct()
    {
        // Crie uma instância de Conn ao instanciar a classe Gerencia
        $this->connection = new Conn(HOST, USER, PASS, "Gerencia");
    }
    public function Update_GerenciaPerfil($nome, $cpf)
    {
        $conn = new mysqli($this->connection->getServerName(), $this->connection->getUserName(), $this->connection->getPassword(), $this->connection->getDatabase());

        // Verifique a conexão
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        // Use instruções preparadas para evitar injeção de SQL
        $stmt = $conn->prepare("UPDATE Usuario SET nome=? WHERE cpf=?");

        // Verifique se a preparação da instrução foi bem-sucedida
        if (!$stmt) {
            die("Erro na preparação da instrução: " . $conn->error);
        }

        // Bind dos parâmetros
        $stmt->bind_param("ss", $nome, $cpf);

        // Execução da consulta
        $stmt->execute();

        // Verifique se a execução foi bem-sucedida
        if ($stmt->affected_rows > 0) {
            // Atualização bem-sucedida, redirecione
            $result = $conn->query("SELECT * FROM Usuario WHERE cpf='$cpf'");

            if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Dados encontrados, você pode processar ou exibir os dados como necessário
                    $_SESSION["Usuario"] = $row['nome'];
                    $_SESSION["Cpf"] = $row['cpf'];
                }
            }
            header('Location: ' . URL . 'admin/minha-conta/perfil.php');
            exit;
        } else {
            // Erro na atualização
            header('Location: ' . URL . 'erro-login.php');
            exit;
        }

        // Fechamento do statement
        $stmt->close();
        $conn->close();
    }
    public function Update_GerenciaConta($login, $senha, $cpf)
    {
        $conn = new mysqli($this->connection->getServerName(), $this->connection->getUserName(), $this->connection->getPassword(), $this->connection->getDatabase());

        // Use instruções preparadas para evitar injeção de SQL
        $stmt = $conn->prepare("UPDATE Usuario SET usuario=?, senha=MD5(?), cpf=? WHERE cpf=?");

        // Verifique se a preparação da instrução foi bem-sucedida
        if (!$stmt) {
            die("Erro na preparação da instrução: " . $conn->error);
        }

        // Bind dos parâmetros
        $stmt->bind_param("ssss", $login, $senha, $cpf, $cpf);

        // Execução da consulta
        $stmt->execute();

        // Verifique se a execução foi bem-sucedida
        if ($stmt->affected_rows > 0) {
            // Atualização bem-sucedida, redirecione
            $result = $conn->query("SELECT * FROM Usuario WHERE cpf='$cpf'");

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                // Atualize as variáveis de sessão com os novos dados
                $_SESSION["Usuario"] = $row['nome'];
                $_SESSION["Login"] = $row['usuario'];
                $_SESSION["Cpf"] = $row['cpf'];
                

                // Redirecione para a página de perfil
                header('Location: ' . URL . 'admin/minha-conta/conta.php');
                exit;
            } 
            else {
                // Se os dados não puderem ser recuperados após a atualização, redirecione para a página de erro
                header('Location: ' . URL . 'erro-login.php');
                exit;
            }
        } 
        else {
            // Erro na atualização
            header('Location: ' . URL . 'erro-login.php');
            exit;
        }

        // Fechamento do statement
        $stmt->close();
    }
    public function SearchLogin_Gerencia($NomeUsuarioGerente, $SenhaUsuarioGerente)
    {
        $this->connection->setDatabase('Gerencia');

        $conn = new mysqli($this->connection->getServerName(), $this->connection->getUserName(), $this->connection->getPassword(), $this->connection->getDatabase());

        $result = $conn->query("
        SELECT nome,cpf,admin,usuario FROM Usuario WHERE '$NomeUsuarioGerente' = usuario AND md5('$SenhaUsuarioGerente') = senha;
        ");
        $resultcheck = mysqli_num_rows($result);
        if ($resultcheck == 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION["Usuario"] = $row['nome'];
                $_SESSION["Login"] = $row['usuario'];
                $_SESSION["Cpf"] = $row['cpf'];
                $_SESSION["admin"] = $row['admin'];
                header('location: ' . URL);
                exit;
            }
        } else {
            header('location: ' . URL . 'erro-login.php');
            exit;
        }
    }
}


//Classe Usuario 
include(__DIR__ . '/../conf.php');
class mysqldbUsuario
{
    private $connection; // Propriedade para armazenar a instância de Conn

    public function __construct()
    {
        // Crie uma instância de Conn ao instanciar a classe Gerencia
        $this->connection = new Conn(HOST, USER, PASS, "Telecall");
    }



    public function Login_Usuario($NomeUsuario, $SenhaUsuario)
    {
        $conn = new mysqli($this->connection->getServerName(), $this->connection->getUserName(), $this->connection->getPassword(), $this->connection->getDatabase());

        $result = $conn->query("
        SELECT * FROM Usuarios WHERE '$NomeUsuario' = login AND md5('$SenhaUsuario') = senha;
        ");
        $resultcheck = mysqli_num_rows($result);
        if ($resultcheck) {
            if ($resultcheck == 1) {
                while ($row = mysqli_fetch_assoc($result)) {
                    session_start();
                    $_SESSION["Usuario"] = $row['nome'];
                    $_SESSION["Login"] = $row['login'];
                    $_SESSION["Cpf"] = $row['cpf'];
                    $_SESSION["Sexo"] = $row['sexo'];
                    $_SESSION["nome_materno"] = $row['nome_materno'];
                    $_SESSION["data_nascimento"] = $row['data_nascimento'];;
                    $_SESSION['telefone_celular'] = $row['telefone_celular'];
                    $_SESSION["telefone_fixo"] = $row['telefone_fixo'];;
                    $_SESSION['endereco'] = $row['endereco'];;
                    $_SESSION['complemento'] = $row['complemento'];;
                    header('location: ' . URL.'autenticacao.php');
                    exit;
                }
            }
        } else {
            header('location: ' . URL . 'erro-login.php');
            exit;
        }
    }

    public function Register_Usuario($nome, $dataNascimento, $sexo, $nomeMaterno, $cpf, $telefoneCelular, $telefoneFixo, $endereco, $complemento, $login, $senha)
    {
        $conn = new mysqli($this->connection->getServerName(), $this->connection->getUserName(), $this->connection->getPassword(), $this->connection->getDatabase());

        // Verifique a conexão
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        // Use instruções preparadas para evitar injeção de SQL
        $stmt = $conn->prepare("INSERT INTO Usuarios (nome, data_nascimento, sexo, nome_materno, cpf, telefone_celular, telefone_fixo, endereco, complemento, login, senha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        // Verifique se a preparação da instrução foi bem-sucedida
        if (!$stmt) {
            die("Erro na preparação da instrução: " . $conn->error);
        }

        // Bind dos parâmetros
        $stmt->bind_param("sssssssssss", $nome, $dataNascimento, $sexo, $nomeMaterno, $cpf, $telefoneCelular, $telefoneFixo, $endereco, $complemento, $login, $senha);

        // Execução da consulta
        $stmt->execute();

        // Verifique se a execução foi bem-sucedida
        if ($stmt->affected_rows > 0) {
            // Registro bem-sucedido, redirecione
            header('Location: ' . URL . 'log.php');
            exit;
        } else {
            // Erro no registro
            header('Location: ' . URL . 'erro-cadastro.php');
            exit;
        }

        // Fechamento do statement
        $stmt->close();
        $conn->close();
    }



    public function Update_UsuarioPerfil($nome, $dataNascimento, $sexo, $nomeMaterno, $telefoneCelular, $telefoneFixo, $endereco, $complemento, $cpf)
    {
        $conn = new mysqli($this->connection->getServerName(), $this->connection->getUserName(), $this->connection->getPassword(), $this->connection->getDatabase());

        // Verifique a conexão
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        // Use instruções preparadas para evitar injeção de SQL
        $stmt = $conn->prepare("UPDATE Usuarios SET nome=?, data_nascimento=?, sexo=?, nome_materno=?, telefone_celular=?, telefone_fixo=?, endereco=?, complemento=? WHERE cpf=?");

        // Verifique se a preparação da instrução foi bem-sucedida
        if (!$stmt) {
            die("Erro na preparação da instrução: " . $conn->error);
        }

        // Bind dos parâmetros
        $stmt->bind_param("sssssssss", $nome, $dataNascimento, $sexo, $nomeMaterno, $telefoneCelular, $telefoneFixo, $endereco, $complemento, $cpf);

        // Execução da consulta
        $stmt->execute();

        // Verifique se a execução foi bem-sucedida
        if ($stmt->affected_rows > 0) {
            // Atualização bem-sucedida, redirecione
            $result = $conn->query("SELECT * FROM Usuarios WHERE cpf='$cpf'");

            if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Dados encontrados, você pode processar ou exibir os dados como necessário
                    $_SESSION["Usuario"] = $row['nome'];
                    $_SESSION["Login"] = $row['login'];
                    $_SESSION["Cpf"] = $row['cpf'];
                    $_SESSION["Sexo"] = $row['sexo'];
                    $_SESSION["nome_materno"] = $row['nome_materno'];
                    $_SESSION["data_nascimento"] = $row['data_nascimento'];;
                    $_SESSION['telefone_celular'] = $row['telefone_celular'];
                    $_SESSION["telefone_fixo"] = $row['telefone_fixo'];;
                    $_SESSION['endereco'] = $row['endereco'];;
                    $_SESSION['complemento'] = $row['complemento'];;
                    // Faça o que precisar com $dadosAtualizados
                }
            }
            header('Location: ' . URL . 'minha-conta/perfil.php');
            exit;
        } else {
            // Erro na atualização
            header('Location: ' . URL . 'erro-login.php');
            exit;
        }

        // Fechamento do statement
        $stmt->close();
        $conn->close();
    }

    public function Update_UsuarioConta($login, $senha, $cpf)
    {
        $conn = new mysqli($this->connection->getServerName(), $this->connection->getUserName(), $this->connection->getPassword(), $this->connection->getDatabase());

        // Use instruções preparadas para evitar injeção de SQL
        $stmt = $conn->prepare("UPDATE Usuarios SET login=?, senha=MD5(?), cpf=? WHERE cpf=?");

        // Verifique se a preparação da instrução foi bem-sucedida
        if (!$stmt) {
            die("Erro na preparação da instrução: " . $conn->error);
        }

        // Bind dos parâmetros
        $stmt->bind_param("ssss", $login, $senha, $cpf, $cpf);

        // Execução da consulta
        $stmt->execute();

        // Verifique se a execução foi bem-sucedida
        if ($stmt->affected_rows > 0) {
            // Atualização bem-sucedida, redirecione
            $result = $conn->query("SELECT * FROM Usuarios WHERE cpf='$cpf'");

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                // Atualize as variáveis de sessão com os novos dados
                $_SESSION["Usuario"] = $row['nome'];
                $_SESSION["Login"] = $row['login'];
                $_SESSION["Cpf"] = $row['cpf'];
                $_SESSION["Sexo"] = $row['sexo'];
                $_SESSION["nome_materno"] = $row['nome_materno'];
                $_SESSION["data_nascimento"] = $row['data_nascimento'];
                $_SESSION['telefone_celular'] = $row['telefone_celular'];
                $_SESSION["telefone_fixo"] = $row['telefone_fixo'];
                $_SESSION['endereco'] = $row['endereco'];
                $_SESSION['complemento'] = $row['complemento'];

                // Redirecione para a página de perfil
                header('Location: ' . URL . 'minha-conta/perfil.php');
                exit;
            } else {
                // Se os dados não puderem ser recuperados após a atualização, redirecione para a página de erro
                header('Location: ' . URL . 'erro-login.php');
                exit;
            }
        } else {
            // Erro na atualização
            header('Location: ' . URL . 'erro-login.php');
            exit;
        }

        // Fechamento do statement
        $stmt->close();
    }

    public function twoFA($numeroRandomico,$userAnswer){
       
        session_start();

    // Função para verificar a resposta da pergunta
    function verifySecurityAnswer($numeroRandomico, $userAnswer)
    {
        // Lógica para verificar se a resposta está correta
        // Substitua isso com a lógica real da sua aplicação
        $answers = [
            1 => $_SESSION["nome_materno"],
            2 => $_SESSION["data_nascimento"],
            3 => $_SESSION["telefone_fixo"]
        ];

        return $userAnswer === $answers[$numeroRandomico];
    }
    if(verifySecurityAnswer($numeroRandomico,$userAnswer)){
        header('location: ' . URL);
        exit;
    }
    else {
<<<<<<< HEAD
        //Xampp
        // header('location: /projeto-telecall');
        // exit; 
        /* header('location: http://localhost:8080/projeto/Include/desconectar.php'); */
        header('location: http://localhost:8080/projeto/Include/desconectar.php');
=======
        header('location: '. URL . '/Include/desconectar.php');
>>>>>>> ede32791a95f44cfc4572c0dfe7fedcc09c16e5f
        exit;
    }
    
    

    }
}
