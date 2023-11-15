<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telecall - Login</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/media/Icons/favicon.ico" type="image/x-icon">
</head>

<body>
    <!-- Inclui Header -->
    <?php include('./estrutura/header.php');
     include_once 'Include/connection.php';
     $Connection = new mysqldb();

     $Connection->Create_Db();
     $Connection->create_Table_Gerencia();
    ?>


    <section class="login-section container">
        <div class="login-content">
            <div class="bem-vindo-fundo">
                <div class="bem-vindo">
                    <h1>Bem Vindo(a)!</h1>
                    <p>Continue conosco fazendo login em sua conta.</p>
                    <p class="ou">ou</p>
                    <a class="bem-vindo-a" href="cadastro.php">CADASTRE-SE</a>
                </div>
            </div>
            <div class="login-fundo">
                <div class="login">
                    <h1>Fazer Login</h1>
                    <form action="Include/Login.php" method="post" id="formulario">

                        <label for="login">Login</label>
                        <input type="text" id="login" name="login" required>

                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" required>

                        <div class="checkbox">
                            <a href="redefinir.php">Esqueceu sua senha?</a>
                            <input type="checkbox" id="lembrar-senha" name="lembrar-senha" value="aceito">
                            <label for="lembrar-senha">Lembrar Senha</label>
                        </div>

                        <button class="btn-primario" type="submit">ENVIAR</button>
                        
                        <div class="cadastroii">

                    </form>
                </div>
            </div>
        </div>
    </section>
    </div>
    <script src="./assets/JavaScript/Darkmode.js"></script>
    </script>

</body>
<!-- Inclui Footer -->
<?php include('./estrutura/footer.php')?>

</html>