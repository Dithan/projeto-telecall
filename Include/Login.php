<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo "senha" foi preenchido
    if (isset($_POST["senha"])) {
        $login = $_POST["login"];
        $senha = $_POST['senha'];

        require 'connection.php';
        $minhaConexao = new mysqldb();
        $minhaConexao->SearchLogin_Usuario($login, $senha);
    }

} else {
    // REDIRECIONAR PARA PAGINA DE ERRO
    /* header('Location: /projeto-telecall'); */
    echo "Deu erro";
    exit;
}

require 'connection.php';
$minhaConexao = new mysql();
$minhaConexao->search($email, $senha);

?>