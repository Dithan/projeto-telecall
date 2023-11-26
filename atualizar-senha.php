<?php
// atualizar-senha.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cpf = $_POST["cpf"];
      $nova_senha = $_POST["nova_senha"];
    require './Include/connection.php';

    $result = new mysqldbUsuario();
    

    if ($result->Recover_Senha($cpf,$nova_senha )) {
        // Se a atualização for bem-sucedida, redirecione para a página de login
        header("Location:".URL."/log.php");
        exit;
    } //
} else {
    // Se o formulário não foi enviado por POST, redirecione para a página de solicitação
    header("Location: ".URL."index.php");
    exit;
}
?>
