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
            <h1>Redefinir Senha</h1>
            <p>Informe seu email cadastrado.</p>

            <div class="container-form">
                <form>
                    <label for="redefinir">Email</label>
                    <input type="email" id="redefinir" name="redefinir" required>
                    <br>
                    <!--Definir botão para submit-->
                    <div class="enviar">
                        <button class="btn-primario" onclick="validarEmail(this.form)" class="botao" >Enviar um email de redefinição de senha</button>
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