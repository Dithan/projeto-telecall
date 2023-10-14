<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telecall - Cadastro</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/media/Icons/favicon.ico" type="image/x-icon">
</head>
<body>
    <!-- Inclui Header -->
    <?php include('./estrutura/header.php')?>

    <main class="cadastro-section container">
        <div class="conteudo-cadastro">
            <div class="form-image">
                <img src="./assets/media/SVG/undraw_learning_re_32qv.svg" alt="">
            </div>

            <div class="form">
                <form action="./">
                    <div class="form-header">
                        <div class="title">
                            <h1>CADASTRE-SE</h1>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="group">
                            <div class="input-box1">
                                <label for="nome">Nome completo</label>
                                <input type="text" id="nome" name="nome" required>

                                <label for="cpf">CPF</label>
                                <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required onblur="mascaraCpf(this)">


                                <label for="nomematerno">Nome Materno</label>
                                <input type="text" id="nomematerno" name="nomematerno" required>

                                <label for="endereco">Endereço</label>
                                <input type="text" id="endereco" name="endereco" required>
                            
                                <label for="fixo">Telefone Fixo</label>
                                <input type="tel" id="fixo" name="fixo" placeholder="(xx) xxxx-xxxx" onblur="mascaraTele(this)" onfocus="tiraHifen(this)">
                            </div>
                            <div class="input-box2">
                                <label for="celular">Telefone Celular</label>
                                <input type="text" id="celular" name="celular"
                                placeholder="(xx) xxxxx-xxxx" onblur="mascaraCell(this)" onfocus="tiraHifen(this)">

                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" required>

                                <label for="senha">Senha</label>
                                <input type="password" id="senha" name="senha" required>

                                <label for="confirme">Confirme sua senha</label>
                                <input type="password" id="confirme" name="confirme" required>

                                <div class="birth">
                                    <div class="birth-input1">
                                        <label for="nasc">Data de Nascimento</label>
                                        <input type="date" id="nasc" name="nasc" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gender-inputs">
                        <div class="gender-itens">

                            
                            <p>Gênero:</p>
                            <div class="gender-box1">
                                
                                <div class="gender-input">
                                    <label for="famele">Feminino</label>
                                    <input type="radio" id="famele" name="gender">
                                </div>

                                <div class="gender-input">
                                    <label for="mele">Masculino</label>
                                    <input type="radio" id="mele" name="gender">
                                </div>
                            </div>
                            <div class="gender-box2">
                                <div class="gender-input">
                                    <label for="others">Outro</label>
                                    <input type="radio" id="others" name="gender">
                                </div>

                                <div class="gender-input">
                                    <label for="none">Prefiro não dizer</label>
                                    <input type="radio" id="none" name="gender">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cadastrar">
                        <input type="submit" value="CADASTRAR" onclick="verificar(this.form)">
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="JavaScript/Cadastro.js"></script>
    <script src="./assets/JavaScript/Darkmode.js"></script>

</body>

<!-- Inclui Footer -->
<?php include('./estrutura/footer.php')?>

</html>