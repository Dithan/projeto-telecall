<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo "senha" foi preenchido
    if (isset($_POST["senha"])) {
        $login = $_POST["login"];
        $senha = $_POST['senha'];

        require '../Include/connection.php';
        $Connection = new mysqldb();
        $Connection->SearchLogin_Gerencia($login, $senha);
    }

} else {
    //Xampp
    // header('location: /projeto-telecall');
    // exit; 
    header('location: http://localhost:8080/projeto');
    exit;
}

?>