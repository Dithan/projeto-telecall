<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Telecalln</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/media/Icons/favicon.ico" type="image/x-icon">
</head>

<body class="admin-login">
    <?php
    include_once '../Include/connection.php';

    $Sql = new Conn(HOST, USER, PASS);

    // Cria o banco de dados e a tabela
    $Sql->Create_Dbs();
    $Sql->Create_Table_Gerencia();
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

                        <div class="btn-container">
                            <button class="btn-primario" type="submit">ENVIAR</button>
                            <a class="btn-secundario" href="../log.php">VOLTAR</a>
                        </div>
                    </form>
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