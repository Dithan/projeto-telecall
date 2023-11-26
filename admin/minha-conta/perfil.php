<?php
session_start();
if (isset($_SESSION["Usuario"])) {
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil - Tellecal</title>
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="shortcut icon" href="../../assets/media/Icons/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body class="admin-body">
  <div class="admin-content">
    <div class="admin-menu">
      <figure class="logo-admin"><img src="../../assets/media/imagens/logo_telecall_branco_vermelho_p.png" alt=""></figure>
      <h1 class="admin-tit">Bem Vindo <?php if (isset($_SESSION["Usuario"])) {
                                          echo $_SESSION["Usuario"];
                                        } ?></h1>
      <ul class="admin-menu-list">
        <li><a href="./conta.php"><i class="fas fa-solid fa-wrench"></i>Configurações</a></li>
        <li><a href="../../Include/desconectar.php"><i class="fas fa-solid fa-door-open"></i> Sair</a></li>
      </ul>
    </div>
    <div class="admin-painel">
      <div class="painel-content">

        <div class="header-painel">
          <h2>Editar Dados</h2>
        </div>

        <form class="form-usuario" action="../Atualizarperfil.php" id="formulario" method="post">

          <table class="adimn-usuarios-table usuarios-table">
            <tr>

              <th>Nome</th>

            </tr>
            <tr>
              <!-- Exemplo de dados (substitua com dados reais do seu banco de dados) -->
              <td class="editable" contenteditable="true" data-column="Nome"> <input type="text" value="<?php echo $_SESSION['Usuario']; ?>" name="nome"></td>
              <input type="hidden" value="<?php echo $_SESSION['Cpf']; ?>" name="cpf">

            </tr>

          </table>
          <div class="btn-container">
            <button class="btn-primario btn-cliente" id="update_button" disabled><i class="fas fa-solid fa-retweet"></i>Salvar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
  formulario.addEventListener("keyup", function() {
    // Quando algo muda no formulário, ativa o botão de atualização
    document.getElementById("update_button").disabled = false;

  });
  </script>
</body>

</html>
<?php
} else {
  header('location: ' . URL);
  exit;
}
?>