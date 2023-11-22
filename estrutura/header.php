<header class="menu-bg">
    <div class="container">
        <div class="menu">
            <div class="menu-logo">
                <a href="index.php"><img class="logo-telecall" src="./assets/media/imagens/logo_telecall_branco_vermelho_p.png" alt="Telecall"></a>
            </div>
            <nav class="menu-nav">
                <div class="nav-list">
                    <ul>
                        <li><a href="2fa.php">2FA</a></li>
                        <li><a href="numeromascara.php">Número Máscara</a></li>
                        <li><a href="google.php">Google Verified Calls</a></li>
                        <li><a href="sms.php">SMS Programável</a></li>
                        <?php
                        if (isset($_SESSION["Usuario"])) {
                        ?> <li class="dropdown">Bem Vindo <?php echo $_SESSION["Usuario"] ?>
                                <ul class="fdx-menu-2-level">
                                     <? if (isset($_SESSION["admin"])) {
                                    ?>
                                        <li><a href="./admin/admin.php">Admin</a></li>
                                        <li><a href="./admin/minha-conta/perfil.php">Meus Dados</a></li>

                                    <?
                                    } else{

                                        ?>
                                        <li><a href="./minha-conta/perfil.php">Meus Dados</a></li>
                                        <?php
                                    }?>
                                    
                                   
                                    <li><a href="./Include/desconectar.php">Sair</a></li>
                                </ul>
                            </li>
                        <?php
                        } else {
                            echo "<li class='log'><a href='./log.php'>Já é cliente?</a></li>";
                        }
                        ?>


                        <div class="dark" id="dark">
                            <button><img src="./assets/media/Icons/dark_mode_FILL0_wght400_GRAD0_opsz48.svg" alt="Modo Escuro" title="Modo Escuro"></button>
                        </div>
                    </ul>
                </div>
            </nav>
            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><span class="btn-mobile" id="hamburguer"></span></button>
            </div>
        </div>

        <div class="mobile-menu">
            <ul>
                <li><a href="2fa.php">2FA</a></li>
                <li><a href="numeromascara.php">Número Máscara</a></li>
                <li><a href="google.php">Google Verified Calls</a></li>
                <li><a href="sms.php">SMS Programável</a></li>
                <?php
                if (isset($_SESSION["Usuario"])) {
                    echo '<li><a href="./admin/admin.php">Meus Dados</a></li>
                            <li><a href="./Include/desconectar.php">Sair</a></li>';
                } else {
                    echo "<li class='log'><a href='log.php'>Já é cliente?</a></li>";
                }
                ?>
                <div class="dark">
                    <button><img src="./assets/media/Icons/dark_mode_FILL0_wght400_GRAD0_opsz48.svg" alt="Modo Escuro" title="Modo Escuro" id="dark2"></button>
                </div>
            </ul>
        </div>
    </div>
</header>