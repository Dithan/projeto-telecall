<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telecall - Número Máscara</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/media/Icons/favicon.ico" type="image/x-icon">
    <script src="./assets/JavaScript/numeromascara.js"></script>
</head>

<body>
    <!-- Inclui Header -->
    <?php include('./estrutura/header.php')?>

    <section class="numero-mascara container">
        <h1 class="titulo">Número Máscara</h1>
        <h2>Proteja identidades profissionais</h2>
        <img class="numero-mascara-img" src="./assets/media/SVG/mobile.svg" alt="">
        <p>Garanta aos seus clientes a capacidade de fazer chamadas e enviar mensagens sem expor seus números de
            telefone pessoais.</p>
        <ul>
            <li><strong>Mascare</strong> um número de telefone para interações com mais privacidade.</li>
            <li><strong>Permite</strong> que empresas façam negócios usando menos números de telefone.</li>
            <li><strong>Oferece</strong> uma experiência mais segura e profissional.</li>
        </ul>
    </section>

    <section class="como-funciona-2fa como-funciona-numero container">
        <h2 class="titulo">Como Funciona</h2>
        <div class="passo1">
            <p>Usuário faz uma chamada através de um aplicativo.</p>
            <img src="./assets/media/SVG/Businessman-pana.svg" alt="">
            <p>Ex: usuário liga para o entregador ou motorista de taxi ou entra em contato com a central de atendimento.
            </p>
        </div>

        <div class="passo2">
            <p>Plataforma mascara o número original.</p>
            <img src="./assets/media/SVG/Cloud hosting-rafiki.svg" alt="">
            <p>A plataforma recebe a chamada e mascara o número antes de conectar com o destinatário.</p>
        </div>

        <div class="passo3">
            <p>Ambas as partes são conectadas.</p><br>
            <img src="./assets/media/SVG/Get in touch-bro.svg" alt="">
            <p>A plataforma conecta ambas as partes mantendo a privacidade dos dois.</p>
        </div>
    </section>

    <section class="quem-usa2 container">
        <div class="quem-usa2-h2">
            <h2 class="titulo">Quem Usa ?</h2>
        </div>
        <div class="quem-usa quem-usa-numero">
            <div class="lista-quem-usa-2fa">
                <h3>Apps de Transporte</h3>
                <p>Permite que motorista e passageiro se comuniquem sem compartilhar seus números pessoais.</p>
                <span class="img-quem-usa">
                    <img src="./assets/media/Quem usa/apptransporte/uber.PNG" alt="Uber">
                    <img src="./assets/media/Quem usa/apptransporte/99.PNG" alt="99">
                </span>
            </div>

            <div class="lista-quem-usa-2fa">
                <h3>Apps de Relacionamento</h3>
                <p>Permite uma maneira privada e segura para usuários interagirem sem expor contatos pessoais.</p>
                <span class="img-quem-usa">
                    <img src="./assets/media/Quem usa/apprelacionamento/happn.PNG" alt="Happn">
                    <img src="./assets/media/Quem usa/apprelacionamento/tinder.PNG" alt="Tinder">
                </span>
            </div>

            <div class="lista-quem-usa-2fa">
                <h3>E-Commerce</h3>
                <p>Permite que clientes entrem em contato através do aplicativo. Podem também integrar chamadas
                    internacionais.</p>
                <span class="img-quem-usa">
                    <img src="./assets/media/Quem usa/appecormmerce/ebay.PNG" alt="Ebay">
                </span>
            </div>

            <div class="lista-quem-usa-2fa">
                <h3>Entregas & Logística</h3>
                <p>Mantenha seu cliente informado sobre entregas e serviços, tire dúvidas, etc</p>
                <span class="img-quem-usa">
                    <img src="./assets/media/Quem usa/appentrega/rappi.PNG" alt="Rappi">
                    <img src="./assets/media/Quem usa/appentrega/ifood.PNG" alt="Ifood">
                </span>
            </div>
        </div>
    </section>

    <section class="quem-pode-usar container">
        <h2 class="titulo">Quem Mais Pode Usar ?</h2>
        <div class="p1">
            <p>43% das empresas brasileiras adotaram o Home
                Office como padrão.</p>
            <p>Mesmo após o fim da pandemia, estatísticas
                indicam que o modelo de trabalho Home
                Office deve crescer cerca de 30%.</p>
        </div>

        <div class="p2">
            <p>Funcionários que não possuem celular empresarial ou ramal virtual podem se beneficiar do uso de um número
                máscara permanente do trabalho vinculado ao seu telefone celular, assim protegendo seus número pessoais.
            </p>
        </div>
    </section>
    <section class="recursos-avancados container">
        <h2 class="titulo">Recursos Avançados</h2>
        <ul>
            <li><strong>SMS</strong> - Número máscara é totalmente funcional para chamadas de voz e SMS.</li>
            <li><strong>Geo Match</strong> - Combine o código do país do número mascarado com o da chamada de origem
                passando pro cliente a impressão de que vocês estão na mesma região. </li>
            <li><strong>Gestão de Sessões</strong> - Habilite números máscara permanentes, bloqueie chamadas
                indesejadas, validade de sessão e etc.</li>
            <li><strong>Relatórios</strong> - Acesso direto do cliente à relatórios detalhados.</li>
            <li><strong>Números Simultâneos</strong> - Use o mesmo número máscara em várias ligações simultâneas.
            </li>
            <li><strong>Triagem de Conteúdo</strong> - Recurso SMS onde você pode sinalizar conteúdos sensíveis para
                proteger dados do cliente.</li>
            <li><strong>Escalabilidade Ilimitada</strong> - Compre e adicione números conforme necessário.</li>
        </ul>
    </section>
    <script src="./assets/JavaScript/Darkmode.js"></script>

</body>
<!-- Inclui Footer -->
<?php include('./estrutura/footer.php')?>

</html>