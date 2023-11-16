<?php

$servername = "172.22.0.4";
$username = "root";
$password = "root"; 
$databaseU = 'Telecall';
$conn = new mysqli($servername, $username, $password, $databaseU);

$idUsuario = $_GET['id'];;

$sql = "DELETE FROM Usuarios WHERE cpf = $idUsuario";

if ($conn->query($sql) === TRUE) {
    header('location: /projeto/admin/admin.php');
    exit;
} else {
    header('location: /projeto/erro-login.php');
    exit;
}


?>
