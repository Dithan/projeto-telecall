<?php include('./conf.php');
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telecall - Google Verified</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/media/Icons/favicon.ico" type="image/x-icon">
</head>

<body>
  <!-- Inclui Header -->
  <?php include('./estrutura/header.php')?>

  <main class="container erro-login">
    <h1 class="titulo">Ops, Login Não Encontrado</h1>
    <p class="texto-erro">Erro de Login, verifique seu Login e Senha e tente novamente</p>
    <a href="./log.php" class="btn-primario" type="submit">VOLTAR</a>
  </main>


  <!-- Inclui Footer -->
  <?php include('./estrutura/footer.php')?>

</html>