<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo "senha" foi preenchido
    if (isset($_POST["resposta"])) {
        $Resposta = $_POST["resposta"];
        $Pergunta = $_POST['2faClientenumber'];

        require 'connection.php';
       
        $Connection = new mysqldbUsuario();
        
        $Connection->twoFA($Pergunta, $Resposta);
        
    }

} 

?>