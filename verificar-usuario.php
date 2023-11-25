<?php
// verificar-usuario.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = $_POST["cpf"];
    require './Include/connection.php';
    $result  = new Conn(HOST, USER, PASS,"Telecall");
    if($result -> CpfExist($cpf) == true){
        header("Location: verificar-dados.php?cpf=$cpf");
        exit;
    } else {
        // Se o formulário não foi enviado por POST, redirecione para a página de solicitação
        header("Location: ".URL."nao-encontrado.php");
        exit;
    }
 
    
} else {
    // Se o formulário não foi enviado por POST, redirecione para a página de solicitação
    header("Location: ".URL."nao-encontrado.php");
    exit;
}
?>
