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
<<<<<<< HEAD

} 
else {
    //Xampp
    // header('location: /projeto-telecall');
    // exit; 
    /* header('location: http://localhost:8080/projeto/erro-login.php'); */
    header('location: http://localhost:8080/projeto/erro-login.php');
=======
} else {
    header('location: '. URL .'erro-login.php');
>>>>>>> 840b645e1e8e69e35a451ef94fbb3b4bd9d24593
    exit;
}
