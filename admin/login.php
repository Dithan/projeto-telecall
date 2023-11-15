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
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/media/Icons/favicon.ico" type="image/x-icon">
</head>

<body class="admin-login">
    <!-- Inclui Header -->
    <?php
     include_once '../Include/connection.php';
     $Sql = new mysqldb();

     $Sql->Create_Db();
     $Sql->create_Table_Gerencia();
    ?>


    <section class="login-section container">
        <div class="">
            <div class="login-fundo login-fundo-admin">
                <div class="login">
                    <figure class="logo-admin"><img src="../assets/media/imagens/telecall_logo_pq.png" alt=""></figure>

                    <h1>Acesso Restrito</h1>
                    <form action="LoginAdm.php" method="post" id="formulario">

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
                    <button class="btn-primario" ><a href="../log.php">Voltar</a></button>

                </div>
            </div>
        </div>
    </section>
    </div>
    <script src="../assets/JavaScript/Darkmode.js"></script>
    </script>

</body>
<!-- Inclui Footer -->
<?php include('../estrutura/footer.php')?>
</html>