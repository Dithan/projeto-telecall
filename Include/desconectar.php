<?php
session_start();

session_destroy();

header('location: http://localhost:8080/projeto');

//Descomentar para o xampp
// header('location: /projeto-telecall/log.php');

exit;