<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telecall - SMS Programável </title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/media/Icons/favicon.ico" type="image/x-icon">
    <script src="./assets/JavaScript/sms.js"></script>
</head>

<body>
   <!-- Inclui Header -->
   <?php include('./estrutura/header.php')?>
   
    <section class="sms container">
        <h1 class="titulo">SMS Programável</h1>
        <h2 class="h2-azul">Conecte-se com seus clientes.</h2>
        <p>É muito provável que você já tenha recebido uma mensagem de texto de uma empresa ou organização.</p>
        <p>Com uma API, qualquer empresa pode enviar mensagens de texto e impactar clientes, prospects ou fornecedores
            como parte de seu processo comercial.</p>
        <p>Com essa ferramenta você envia mensagens de SMS com as informações que o seu cliente precisa e com a
            segurança, a velocidade e a confiabilidade que você espera.</p>
        <div class="sms-img">
            <img src="./assets/media/SVG/Cell phone-amico.svg" alt="">
        </div>
    </section>

    <section class="info container">
        <div class="principal">
            <p>SMS é a forma mais rápida, eficiente e de baixo custo para se comunicar com seus clientes.</p>
        </div>
        <div class="grid">
            <p><strong>98%</strong><br>de taxa de abertura</p>
        </div>
        <div class="grid">
            <p><strong>90%</strong><br>dos SMS são lidos em até 3 minutos.</p>
        </div>
        <div class="grid">
            <p><strong>80%</strong><br>das pessoas interagem com SMS comerciais.</p>
        </div>
        <div class="grid">
            <p><strong>35x</strong><br>maior a probabilidade de um cliente abrir um SMS do que um e-mail.</p>
        </div>
    </section>
    <section class="container">
        <h2 class="titulo">Quem usa?</h2>
        <h3>São muitos os casos de uso, veja alguns exemplos:</h3>

        <div class="img-div">
            <div class="exe">
                <img src="./assets/media/exemplos/Divulgacao_fix.PNG" alt="">
                <p>Divulgação</p>
            </div>
            <div class="exe">
                <img src="./assets/media/exemplos/transacoes_fix.PNG" alt="">
                <p>Transações</p>
            </div>
            <div class="exe">
                <img src="./assets/media/exemplos/seguranca_fix.PNG" alt="">
                <p>Segurança</p>
            </div>
            <div class="exe">
                <img src="./assets/media/exemplos/suporte_fix.PNG" alt="">
                <p>Suporte ao Cliente</p>
            </div>
            <div class="exe">
                <img src="./assets/media/exemplos/notificacoes_fix.PNG" alt="">
                <p>Notificações</p>
            </div>
        </div>
    </section>
    <section class="jornada-cliente container">
        <h2 class="titulo">Jornada do cliente</h2>
        <h3>Ofereça uma melhor experiência ao cliente acompanhando a sua jornada de compra.</h3>
        <img src="./assets/media/imagens/diagrama.PNG" alt="Diagrama">
        <p>Envio de SMS</p>
    </section>
    <section class="beneficios-sms container">
        <h2 class="titulo">Benefícios</h2>
        <ul>
            <li>Comunicação rápida, efetiva e escalável.</li>
            <li>Baixo custo.</li>
            <li>Alta taxa de entrega e leitura.</li>
            <li>Personalização de data, hora e conteúdo.</li>
            <li>Agendamento de campanhas.</li>
            <li>Interação bidirecional: recebimento de respostas.</li>
            <li>Plataforma user-friendly.</li>
            <li>Acompanhamento de métricas e relatórios.</li>
        </ul>
    </section>

    <script src="./assets/JavaScript/Darkmode.js"></script>

</body>

<!-- Inclui Footer -->
<?php include('./estrutura/footer.php')?>

</html>