<?php
session_start();

if (isset($_SESSION["admin"])) {

    include_once '../Include/connection.php';

    $Sql = new Conn(HOST, USER, PASS,"Telecall");

    $CpfUsuario = $_GET['cpf'];
 if ($Sql->deleteUser($CpfUsuario)=== TRUE) {
    header('location: /projeto/admin/admin.php');
    exit;  // Certifique-se de encerrar a execução do script após o redirecionamento
} else {
    header('location: /projeto/erro-login.php');
    exit;
}
}
