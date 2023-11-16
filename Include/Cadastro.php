<?php
// Verifique se a solicitação é um POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recolha os dados do formulário
    $nome = $_POST["nome"];
    $dataNascimento = $_POST["dataNascimento"];
    $sexo = $_POST["sexo"];
    $nomeMaterno = $_POST["nomeMaterno"];
    $cpf = strtr($_POST["cpf"], array('.' => '', '-' => ''));
    $telefoneCelular = $_POST["telefoneCelular"];
    $telefoneFixo = $_POST["telefoneFixo"];
    $endereco = $_POST["endereco"];
    $complemento = $_POST["complemento"];
    $login = $_POST["login"];
    $senha = md5($_POST["senha"]);



    require 'connection.php';

    $Sql = new mysqldbUsuario();
    $Sql->Register_Usuario($nome, $dataNascimento, $sexo, $nomeMaterno, $cpf, $telefoneCelular, $telefoneFixo, $endereco, $complemento, $login, $senha);
} else {
    //Xampp
    // header('location: /projeto-telecall');
    // exit; 
    header('location: http://localhost:8080/projeto/erro-login.php');
    exit;
}
