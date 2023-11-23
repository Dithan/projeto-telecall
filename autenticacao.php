<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telecall- Autenticação de Dois Fatores</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/media/Icons/favicon.ico" type="image/x-icon">
</head>

<body>
    <!-- Inclui Header -->
    <?php include('./estrutura/header.php');
    $numeroRandomico = mt_rand(1, 3);

    // Função para obter a pergunta de segurança de um usuário
    function getSecurityQuestion($num)
    {
        // Lógica para recuperar a pergunta do banco de dados ou de outra fonte
        // Substitua isso com a lógica real da sua aplicação
        $questions = [
            1 => 'Qual é o nome da Sua Mãe?', // if text 
            2 => 'Qual a data do seu nascimento?', // if date
            3 => 'Qual o Telefone Fixo do seu endereço?' // if number
        ];
        return $questions[$num];
    }
    ?>

    <section class="container-redefinir">
        <div class="conteudo-redefinir1">
            <h1>Autenticação de Dois Fatores</h1>
            <p>Informe o dado correto para prosseguir</p>

            <div class="container-form">
                <form method="post" action="Include/autenticacao.php">
                    <!-- Adicione campos ocultos para enviar o número e o CPF -->
                    <label for="pergunta"><?php echo getSecurityQuestion($numeroRandomico); ?></label>
                    <input type="text" name="2faClientenumber" value="<?php $numeroRandomico; ?>" hidden>
                    <?php if ($numeroRandomico == 1) {
                    ?>
                        <input type="text" id="resposta" name="resposta" required>
                    <?php
                    } elseif ($numeroRandomico == 2) {
                    ?>
                        <input type="date" id="resposta" name="resposta" required>
                    <?php
                    } else{
                        ?>
                        <input type="number" placeholder="(+21)xx-xxxxxxxx" id="resposta" name="resposta" required>
                    <?php
                    }?>

                    <br>
                    <!-- Definir botão para submit -->
                    <div class="enviar">
                        <button type="submit" class="btn-primario">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="./assets/JavaScript/Redefinir.js"></script>

</body>

<!-- Inclui Footer -->
<?php include('./estrutura/footer.php') ?>

</html>