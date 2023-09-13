<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telecall - Login</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="media/Icons/favicon.ico" type="image/x-icon">
</head>

<body>
    <!-- Inclui Header -->
    <?php include('./estrutura/header.php')?>

    <div class="log">
        <div class="bem-vindo-fundo">
            <div class="dark" id="dark">
                <button><img src="media/Icons/dark_mode_FILL0_wght400_GRAD0_opsz48.svg" alt="Modo Escuro" title="Modo Escuro" ></button>
            </div>
            <div class="bem-vindo">
                <a href="index.php"><img src="./media/Icons/telecall_icone_p.png" alt="Telecall"></a>
                <h1>Bem Vindo(a)!</h1>
                <p>Continue conosco fazendo login em sua conta.</p>
                <p class="ou">ou</p>
                <a class="bem-vindo-a" href="cadastro.php">CADASTRE-SE</a>
            </div>
        </div>

        <div class="login-fundo">
            <div class="login">
                <h1>Fazer Login</h1>
                <form>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>

                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" required>



                    <div class="checkbox">
                        <a href="redefinir.php">Esqueceu sua senha?</a>
                        <input type="checkbox" id="lembrar-senha" name="lembrar-senha" value="aceito">
                        <label for="lembrar-senha">Lembrar Senha</label>
                    </div>
                    <button onclick="validar(this.form)">ENVIAR</button>
                    <div class="cadastroii">
                </form>

            </div>
        </div>
    </div>
    </div>
    <script src="JavaScript/Darkmode.js"></script>
    <script src="JavaScript/Login.js"></script>

</body>
<!-- Inclui Footer -->
<?php include('./estrutura/footer.php')?>

</html>