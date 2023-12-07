
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
    <?php include('./estrutura/header.php');
    $cpf = $_GET["cpf"];
    ?>

   
   <section class="container-redefinir">
        <div class="conteudo-redefinir2">
            <h1>Confime seus dados</h1>
            <p>Responda abaixo para confirmar sua identidade</p>

            <form action="redefinir-senha.php" method="post">
            <input type="hidden" name="cpf" value="<?= $cpf ?>">

                <label for="nome_materno">Nome da Mãe</label>
                <input type="text" id="nome-mat" name="nome_materno" required>

                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" id="data-nasc" name="data_nascimento" required>
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