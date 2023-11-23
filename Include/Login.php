<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo "senha" foi preenchido
    if (isset($_POST["senha"])) {
        $NomeUsuario = $_POST["login"];
        $SenhaUsuario = $_POST['senha'];

        require 'connection.php';
        $Connection = new mysqldbUsuario();
        $Connection->Login_Usuario($NomeUsuario, $SenhaUsuario);
    }
} else {
    header('location: '. URL .'erro-login.php');
    exit;
}
