<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo "senha" foi preenchido
    if (isset($_POST["resposta"])) {
        $Resposta = $_POST["resposta"];
        $Pergunta = $_POST['2faClientenumber'];

        require 'connection.php';
        $Connection = new mysqldbUsuario();
        if($Connection->twoFA($Pergunta, $Resposta)){
            header('location: http://localhost:8080/projeto');
            exit;
        }
    }

} 
else {
    //Xampp
    // header('location: /projeto-telecall');
    // exit; 
    /* header('location: http://localhost:8080/projeto/erro-login.php'); */
    header('location: http://localhost:8080/projeto/erro-login.php');
    exit;
}


?>