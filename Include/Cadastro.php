<?php
// Verifique se a solicitação é um POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recolha os dados do formulário
    echo$nome = $_POST["nome"];
    echo$dataNascimento = $_POST["dataNascimento"];
    echo$sexo = $_POST["sexo"];
    echo$nomeMaterno = $_POST["nomeMaterno"];
    
    echo$cpf = strtr($_POST["cpf"], array('.' => '', '-' => ''));
    echo$telefoneCelular = $_POST["telefoneCelular"];
    echo$telefoneFixo = $_POST["telefoneFixo"];
    echo$endereco = $_POST["endereco"];
    echo$complemento = $_POST["complemento"];
    echo$login = $_POST["login"];
    echo$senha = md5($_POST["senha"]);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databaseU = 'Telecall';

    $conn = new mysqli($servername, $username, $password,$databaseU);

    $sql = "INSERT INTO Usuarios 
    (nome, data_nascimento, sexo, nome_materno, cpf, telefone_celular, telefone_fixo, endereco, complemento, login, senha) 
    VALUES 
    ('$nome', '$dataNascimento', '$sexo', '$nomeMaterno', '$cpf', '$telefoneCelular', '$telefoneFixo', '$endereco', '$complemento' ,'$login', '$senha')";

    /* if ($conn->query($sql) === TRUE) {
        header('location: http://localhost:8080/projeto-telecall');
        exit;
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    } */

    if ($conn->query($sql) === TRUE) {
        header('Location: /projeto-telecall');
        exit;
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
    
}