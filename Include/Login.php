<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo "senha" foi preenchido
    if (isset($_POST["senha"])) {
        $login = $_POST["login"];
        $senha = $_POST['senha'];

        require 'connection.php';
        $minhaConexao = new mysqldbUsuario();
        $minhaConexao->Login_Usuario($login, $senha);
    }

} else {
    //Xampp
    // header('location: /projeto-telecall');
    // exit; 
    header('location: http://localhost:8080/projeto-telecall');
    exit;
}

require 'connection.php';
$minhaConexao = new mysqldbUsuario();
$minhaConexao->Login_Usuario($nome, $senha);

?>