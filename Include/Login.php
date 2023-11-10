<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo "senha" foi preenchido
    if (isset($_POST["senha"])) {
         $email = $_POST["email"];
         $senha = $_POST['senha'];
    }
} else {
    header('location: http://localhost:8080/projeto-telecall');
    exit;
}

require 'connection.php';
$minhaConexao = new mysql();
$minhaConexao->search($email, $senha);

?>