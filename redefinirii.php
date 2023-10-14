<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telecall- Redefinir Senha</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/media/Icons/favicon.ico" type="image/x-icon">
</head>

<body>
    <!-- Inclui Header -->
    <?php include('./estrutura/header.php')?>

    <section class="container-redefinir">
        <div class="conteudo-redefinir2">
            <h1>Email enviado!</h1>
                <p>Enviamos um e-mail de redefinição. Se esse e-mail estiver conectado a uma conta Telecall, você poderá redefinir sua senha.</p>
            <div class="button-1">
                <a class="btn-primario" href="log.php">Voltar para login</a>
            </div>
            <div class="button-2">
                <a href="redefinir.php">Tente novamente</a>
            </div>
        </div>
    </section>

</body>

<!-- Inclui Footer -->
<?php include('./estrutura/footer.php')?>

</html>