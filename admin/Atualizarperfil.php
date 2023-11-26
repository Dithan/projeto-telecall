<?php

session_start();

require '../Include/connection.php';

// Verifica se a sessão está definida
if (isset($_SESSION["Cpf"])) {
    // Verifica se os campos obrigatórios foram preenchidos
    if (isset($_POST["nome"],  $_POST["cpf"])) {
        $nome = $_POST["nome"];

        $cpf = strtr($_POST["cpf"], array('.' => '', '-' => ''));
      

        $Connection = new mysqldb();

        // Atualiza o perfil do usuário
        if ($Connection->Update_GerenciaPerfil($nome, $cpf)) {
            // Redireciona em caso de sucesso
            redirectTo('/minha_conta/perfil.php');
        } else {
            // Redireciona em caso de falha
            redirectTo('/erro-login.php');
        }
    } else {
        // Redireciona se campos obrigatórios não foram preenchidos
        redirectTo('/erro-login.php');
    }
} 
else {
    // Redireciona se a sessão não está definida
    redirectTo('/erro-login.php');
}

// Função para lidar com o redirecionamento
function redirectTo($location)
{
    header('Location: ' . URL . $location);
    exit;
}
