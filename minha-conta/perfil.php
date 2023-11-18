<?php
session_start();
if (isset($_SESSION["Usuario"])) { 
?>
  <!DOCTYPE html>
    <html lang="pt-br">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin - Tellecal</title>
      <link rel="stylesheet" href="../assets/css/style.css">
      <link rel="shortcut icon" href="../assets/media/Icons/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </head>

    <body class="admin-body">
      <div class="admin-content">
        <div class="admin-menu">
          <figure class="logo-admin"><img src="../assets/media/imagens/logo_telecall_branco_vermelho_p.png" alt=""></figure>
          <h1 class="admin-tit">Bem Vindo <?php if (isset($_SESSION["Usuario"])) {echo $_SESSION["Usuario"];} ?></h1>
          <ul class="admin-menu-list">
            <li><a href="./conta.php"><i class="fas fa-solid fa-wrench"></i>Configurações</a></li>
            <li><a href="../Include/desconectar.php"><i class="fas fa-solid fa-door-open"></i> Sair</a></li>
          </ul>
        </div>
        <div class="admin-painel">
          <div class="painel-content">

            <div class="header-painel">
              <h2>Editar Dados</h2>
            </div>

            <form class="form-usuario" action="">

              <div class="row-form">
                <div>
                  <label for="nome">Nome</label>
                  <input type="text" id="nome" name="nome" value="Thiago">
                </div>

                <div>
                  <label for="nasc">Data de Nascimento</label>
                  <input type="text" id="nasc" name="nasc" value="13-11-2000">
                </div>
              </div>

              <div class="row-form">
                <div>
                  <label for="sexo">Sexo</label>
                  <input type="text" id="sexo" name="sexo" value="Masculino">
                </div>

                <div>
                  <label for="nome-materno">Nome Materno</label>
                  <input type="text" id="nome-materno" name="nome-materno" value="Maria">
                </div>
              </div>

              <div class="row-form">
                <div>
                  <label for="cel">Celular</label>
                  <input type="tel" id="cel" name="cel" value="21 9999-9999">
                </div>

                <div>
                  <label for="tel">Telefone</label>
                  <input type="text" id="tel" name="tel" value="21 8888-8888">
                </div>
              </div>

              <div class="row-form">
                <div>
                  <label for="endereco">Endereço</label>
                  <input type="text" id="endereco" name="endereco" value="Rua Gastão Rangel">
                </div>

                <div>
                  <label for="complemento">Complemento</label>
                  <input type="text" id="complemento" name="complemento" value="apartamento 00"> 
                </div>
              </div>

              <div class="btn-container">
                <button class="btn-primario">Salvar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <script>
      </script>
    </body>

  </html>
  <?php
} else {
  header('location: ' . URL);
  exit;
}
?>