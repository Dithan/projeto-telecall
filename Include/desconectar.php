<?php
include(__DIR__ . '/../conf.php');
session_start();

session_destroy();

/* header('location: http://localhost:8080/projeto'); */
header('location: '. URL);

//Descomentar para o xampp
// header('location: /projeto-telecall/log.php');

exit;