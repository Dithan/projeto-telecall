<?php

session_start();

require 'connection.php';

// Verifica se a sessão está definida
if (isset($_SESSION["Cpf"])) {
    // Verifica se os campos obrigatórios foram preenchidos
    if (isset($_POST["nome"], $_POST["datansc"], $_POST["sexo"], $_POST["nomeM"], $_POST["cpf"], $_POST["celular"], $_POST["teleF"], $_POST["endereco"], $_POST["complemento"])) {
        $nome = $_POST["nome"];
        $dataNascimento = $_POST["datansc"];
        $sexo = $_POST["sexo"];
        $nomeMaterno = $_POST["nomeM"];
        $cpf = strtr($_POST["cpf"], array('.' => '', '-' => ''));
        $telefoneCelular = $_POST["celular"];
        $telefoneFixo = $_POST["teleF"];
        $endereco = $_POST["endereco"];
        $complemento = $_POST["complemento"];

        $Connection = new mysqldbUsuario();

        // Atualiza o perfil do usuário
        if ($Connection->Update_UsuarioPerfil($nome, $dataNascimento, $sexo, $nomeMaterno, $telefoneCelular, $telefoneFixo, $endereco, $complemento, $cpf)) {
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
} else {
    // Redireciona se a sessão não está definida
    redirectTo('/erro-login.php');
}

// Função para lidar com o redirecionamento
function redirectTo($location)
{
    header('Location: ' . URL . $location);
    exit;
}
