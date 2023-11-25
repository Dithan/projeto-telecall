<?php
include(__DIR__ . '/../conf.php');
session_start();

session_destroy();

header('location: '. URL);

exit;