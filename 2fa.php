<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telecall - 2FA</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/JavaScript/2fa.js"></script>
    <link rel="shortcut icon" href="./assets/media/Icons/favicon.ico" type="image/x-icon">
</head>

<body>
    <!-- Inclui Header -->
    <?php include('./estrutura/header.php')?>

    <section>
        <div class="container">
            <div class="info-2fa-bg">
                <h2 class="titulo">2FA</h2>
                <div class="info-2fa">
                    <h2 class="h2-azul">Two-Factor Authentication</h2>
                    <h2 class="h2-2">Autenticação de dois fatores</h2>
                    <p>O 2FA é um procedimento de segurança que garante que serão necessários 2 fatores únicos para liberação de
                        uma ação. O
                        primeiro fator é a senha que o usuário e o segundo pode ser
                        autenticado via token, via detecção de impressão digital,
                        reconhecimento facial, código enviado via sms, entre outros.</p>
                </div>
                <div class="info-2fa-img">
                    <img src="./assets/media/SVG/two-factor-authentication-animate.svg" alt="">
                </div>

                <div class="funcao">
                    <h2>O 2FA permite que você:</h2>
                    <ul>
                        <li><strong>Envie</strong> uma senha via SMS, voz ou e-mail para autenticação do usuário.</li>
                        <li><strong>Adicione</strong> uma camada extra de segurança além da senha pessoal.</li>
                        <li><strong>Ofereça</strong> maior segurança para usuários.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="info2-2fa">
        <div class="container">
            <div class="info2-2fa-div">
                <h2 class="h2-2">Fortaleça a estratégia de segurança de seu negócio.</h2>
                <p>Adicionar um número de telefone de recuperação a uma conta individual pode bloquear até:</p>
                <p class="diferente"><strong>100%</strong> dos bots automatizados</p>
                <p class="diferente"><strong>99%</strong> dos ataques de phishing em massa</p>
                <p class="diferente"><strong>66%</strong> dos ataques direcionados.</p>
            </div>
        </div>
    </section>

    <section class="como-funciona-section">
        <div class="container">
            <div class="como-funciona-2fa">
                <h2 class="titulo">Como Funciona</h2>
                <div class="passo1">
                    <img src="./assets/media/SVG/Tablet login-amico.svg" alt="">
                    <p>Usuário acessa seu site ou aplicativo e digita a senha cadastrada para entrar em seu perfil ou completar
                        uma transação.</p>
                </div>

                <div class="passo2">
                    <img src="./assets/media/SVG/Warning-rafiki.svg" alt="">
                    <p>A Telecall recebe a tentativa de login e solicita que o usuário insira seu número de telefone para
                        autorizar o acesso.</p>
                </div>

                <div class="passo3">
                    <img src="./assets/media/SVG/Enter OTP-bro (2).svg" alt="">
                    <p>Após inserir seu número, a Telecall envia para o usuário por SMS, chamada ou e-mail um código PIN (One
                        Time Password [OTP]) de uso único.</p>
                </div>

                <div class="passo4">
                    <img src="./assets/media/SVG/Enter OTP-pana.svg" alt="">
                    <p>O usuário insere o código no site ou aplicativo para concluir o processo de verificação.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="beneficios-section">
        <div class="container">
            <div class="beneficios-2fa">
                <div class="funcao">
                    <h2 class="titulo">Beneficios</h2>
                    <ul>
                        <li>Ofereça <strong>segurança aprimorada</strong> para seus clientes.</li>
                        <li>Reduza casos de <strong>fraude e invasões</strong> e evite o acesso a dados por invasores.</li>
                        <li>Envio de OTP por meio de <strong>vários canais</strong>, incluindo SMS, voz ou e-mail.</li>
                        <li><strong>Flexibilidade</strong> de canais garante que o usuário conseguirá completar a tarefa
                            desejada mesmo quando tiver problema com um deles. Exemplo: Enviar OTP por SMS, em caso de falha,
                            enviar OTP por chamada de voz, em caso de outra falha, enviar por e-mail.</li>
                        <li>API simples e de <strong>rápida implementação.</strong></li>
                        <li><strong>Plataforma intuitiva</strong> que permite visualizar relatórios de uso por dia, mês ou ano e
                            pesquisar usando diversos critérios de filtro.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="quem-usa2-section">
        <div class="container">
            <div class="quem-usa2">
                <div class="quem-usa2-h1">
                    <h2 class="titulo">Quem Usa ?</h2>
                </div>
                <div class="quem-usa">

                    <div class="lista-quem-usa-2fa">
                        <h3>Finanças</h3>
                        <ul>
                            <li>Acesso ao portal/app</li>
                            <li>Autenticação para transações bancárias</li>
                            <li>Pagamentos Online (PicPay, PayPal)</li>
                            <li>Digital Wallets (Google Pay, Apple Pay, Samsung Pay)</li>
                        </ul>
                        <span class="img-quem-usa">
                            <img src="./assets/media/Quem usa/Financas/bradesco.PNG" alt="bradesco">
                            <img src="./assets/media/Quem usa/Financas/mercadopago.PNG" alt="Mercado Pago">
                            <img src="./assets/media/Quem usa/Financas/picpay.PNG" alt="PicPay">
                        </span>
                    </div>

                    <div class="lista-quem-usa-2fa">
                        <h3>Saúde</h3>
                        <ul>
                            <li>Acesso ao portal/app</li>
                            <li>Agendamentos</li>
                            <li>Tokens de autorização</li>
                            <li>Telemedicina</li>
                        </ul>
                        <span class="img-quem-usa">
                            <img src="./assets/media/Quem usa/saude/amil.PNG" alt="Amil Saúde">

                        </span>
                    </div>

                    <div class="lista-quem-usa-2fa">
                        <h3>Turismo</h3>
                        <ul>
                            <li>Acesso ao portal/app</li>
                            <li>Gestão de Reservas</li>
                            <li>Acesso ao histórico</li>
                            <li>Salvar dados de pagamentos</li>
                            <li>Recuperação de Senha</li>
                        </ul>
                        <span class="img-quem-usa">
                            <img src="./assets/media/Quem usa/turismo/airbnb.PNG" alt="Airbnb">
                        </span>
                    </div>

                    <div class="lista-quem-usa-2fa">
                        <h3>Varejo</h3>
                        <ul>
                            <li>Acesso ao portal/app</li>
                            <li>Salvar dados de pagamentos</li>
                            <li>Acesso ao histórico</li>
                            <li>Recuperação de Senha</li>
                            <li>Recibo Eletrônico</li>
                        </ul>
                        <span class="img-quem-usa">
                            <img src="./assets/media/Quem usa/varejo/amazon.PNG" alt="Amazon">
                            <img src="./assets/media/Quem usa/varejo/appstore.PNG" alt="App Store">
                            <img src="./assets/media/Quem usa/varejo/mercadolivre.PNG" alt="Mercado Livre">
                        </span>
                    </div>

                    <div class="lista-quem-usa-2fa">
                        <h3>Governo</h3>
                        <ul>
                            <li>Acesso ao portal/app</li>
                            <li>Gestão de informações</li>
                            <li>Agendamentos</li>
                            <li>Recuperação de Senha</li>
                        </ul>
                        <span class="img-quem-usa">
                            <img src="./assets/media/Quem usa/governo/cnh.PNG" alt="CNH Digital">
                            <img src="./assets/media/Quem usa/governo/governo.PNG" alt="">
                            <img src="./assets/media/Quem usa/governo/governo2.PNG" alt="Receita Federal">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="./assets/JavaScript/Darkmode.js"></script>

</body>

<!-- Inclui Footer -->
<?php include('./estrutura/footer.php')?>

</html>