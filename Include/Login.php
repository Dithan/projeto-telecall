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
    //Xampp
    // header('location: /projeto-telecall');
    // exit; 
    /* header('location: http://localhost:8080/projeto/erro-login.php'); */
    header('location: http://localhost:8080/projeto/erro-login.php');
    exit;
}
