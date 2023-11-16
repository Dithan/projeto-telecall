<?php
session_start();

if (isset($_SESSION["Usuario"])) {

    include_once '../Include/connection.php';

    $Sql = new Conn("172.22.0.4", "root", "root", "Telecall");

    $CpfUsuario = $_GET['cpf'];
 if ($Sql->deleteUser($CpfUsuario)=== TRUE) {
    header('location: /projeto/admin/admin.php');
    exit;  // Certifique-se de encerrar a execução do script após o redirecionamento
} else {
    header('location: /projeto/erro-login.php');
    exit;
}
}
