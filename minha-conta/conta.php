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
            <li><a href="./perfil.php"><i class="fas fa-solid fa-user"></i>Editar Dados</a></li>
            <li><a href="../Include/desconectar.php"><i class="fas fa-solid fa-door-open"></i> Sair</a></li>
            <li><button class="delete-btn" onclick="confirmDelete(<?php echo $row['cpf']; ?>)"><i class="fas fa-solid fa-trash"></i>Apagar Conta</button></li>
          </ul>
        </div>
        <div class="admin-painel">
          <div class="painel-content">

            <div class="header-painel">
              <h2>Configurações de Conta</h2>
            </div>

            <table class="adimn-usuarios-table">
              <tr>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Sexo</th>
                <th>Nome Materno</th>
                <th>CPF</th>
                <th>Celular</th>
              </tr>

              <?php
              include_once '../Include/connection.php';

              $Sql = new Conn(HOST, USER, PASS, "Telecall");

              $result = $Sql->getQueryAdmin();

              $resultcheck = mysqli_num_rows($result);
              if ($resultcheck >= 1) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                  <tr>
                    <!-- Exemplo de dados (substitua com dados reais do seu banco de dados) -->
                    <td class="editable" contenteditable="true" data-column="Nome"><? echo $row['nome']; ?></td>
                    <td class="editable" contenteditable="true" data-column="DataNascimento"><? echo $row['data_nascimento']; ?></td>
                    <td class="editable" contenteditable="true" data-column="Sexo"><? echo $row['sexo']; ?></td>
                    <td class="editable" contenteditable="true" data-column="NomeMaterno"><? echo $row['nome_materno']; ?></td>
                    <td class="editable" contenteditable="true" data-column="CPF"><? echo $row['cpf']; ?></td>
                    <td class="editable" contenteditable="true" data-column="Celular"><? echo $row['telefone_celular']; ?></td>
                  </tr>

              <?php }
              } ?>
            </table>
            <table class="adimn-usuarios-table">
              <tr>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Complemento</th>
                <th>Login</th>
                <th>Senha</th>
              </tr>

              <?php
              include_once '../Include/connection.php';

              $Sql = new Conn(HOST, USER, PASS, "Telecall");

              $result = $Sql->getQueryAdmin();

              $resultcheck = mysqli_num_rows($result);
              if ($resultcheck >= 1) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                  <tr>
                    <td class="editable" contenteditable="true" data-column="Telefone"><? echo $row['telefone_fixo']; ?></td>
                    <td class="editable" contenteditable="true" data-column="Endereco"><? echo $row['endereco']; ?></td>
                    <td class="editable" contenteditable="true" data-column="Complemento"><? echo $row['complemento']; ?></td>
                    <td class="editable" contenteditable="true" data-column="Login"><? echo $row['login']; ?></td>
                    <td class="editable" contenteditable="true" data-column="Senha"><? echo $row['senha']; ?></td>
                  </tr>
                <?php }
              } ?>
            </table>
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