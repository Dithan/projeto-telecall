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
            <h1>Altere sua senha</h1>
            <p>Insira sua nova senha</p>

      
            <form action="atualizar-senha.php" method="post">
    
  
                <label for="senha">Nova Senha</label>
                <input type="hidden" name="cpf" value="<?= $_GET["cpf"] ?>">

                <input type="password" id="senha" required minlength="8" name="nova_senha" />

                <br>
                <!--Definir botão para submit-->
                <div class="enviar">
                    <button class="btn-primario" type="submit" class="botao" >Enviar</button>
                </div>
            </form>
        </div>
    </section>

</body>

<!-- Inclui Footer -->
<?php include('./estrutura/footer.php')?>

</html>