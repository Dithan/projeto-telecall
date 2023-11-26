<?php
session_start();
if (isset($_SESSION["Usuario"])) {
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conta - Tellecal</title>
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
      </ul>
    </div>
    <div class="admin-painel">
      <div class="painel-content">

        <div class="header-painel">
          <h2>Configurações de Conta</h2>
        </div>
        <form class="form-usuario" action="../Include/Atualizarconta.php" id="formulario" method="post">
          <div class="row-form">
            <div>
              <label for="login">Login</label>
              <input type="text" value="<?php echo $_SESSION['Login']; ?>" name="login">
            </div>

            <div>
              <label for="senha">Senha</label>
              <input type="password" name="senha">
            </div>
          </div>

          <div class="row-form">
            <div>
              <input type="number" value="<?php echo $_SESSION['Cpf']; ?>" name="cpf" hidden>
            </div>
          </div>

          <div class="btn-container">
            <button class="btn-primario btn-cliente" id="update_button" disabled><i class="fas fa-solid fa-retweet"></i>Salvar</button>
          </div>
        </form>

        <div class="encerrar">
          <h2>Encerrar Conta</h2>
          <li><button class="delete-btn" onclick="confirmDelete(<?php echo $_SESSION['Cpf']; ?>)"><i class="fas fa-solid fa-trash"></i>Encerrar</button></li>
        </div>
      </div>
    </div>
  </div>
  <script>
  formulario.addEventListener("keyup", function() {
    // Quando algo muda no formulário, ativa o botão de atualização
    document.getElementById("update_button").disabled = false;


  });

  function confirmDelete(cpfUsuario) {
    var resposta = confirm("Tem certeza que deseja excluir este usuário?");
    if (resposta) {
      // Se o usuário confirmar, redirecione para um script PHP que lida com a exclusão
      window.location.href = "../Include/deletar.php?cpf=" + cpfUsuario;
    } else {
      // Caso contrário, não faça nada
      alert("Usuário não excluído.");
    }
  }
  </script>
</body>

</html>
<?php
} else {
  header('location: ' . URL);
  exit;
}
?>