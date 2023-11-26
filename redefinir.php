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
        <div class="conteudo-redefinir1">
            <h1 style="margin-bottom: 20px;">Redefinir Senha</h1>
            <p style="margin-bottom: 20px;">Por favor, informe seu CPF</p>

            <div class="container-form">
                <form action="verificar-usuario.php" method="post">
                    <label for="redefinir">CPF</label>
                    <input type="text" id="redefinir" name="cpf" required minlength="11" maxlength="11" placeholder="xxx.xxx.xxx-xx"  required>
                    <br>
                    <!--Definir botão para submit-->
                    <div class="enviar">
                        <button class="btn-primario"  type="submit" class="botao" >Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<script src="./assets/JavaScript/Redefinir.js"></script>

</body>

<!-- Inclui Footer -->
<?php include('./estrutura/footer.php')?>

</html>