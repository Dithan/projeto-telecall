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
        <li><a href="./perfil.php"><i class="fas fa-solid fa-user"></i>Editar Dados</a></li>
        <li><a href="../../Include/desconectar.php"><i class="fas fa-solid fa-door-open"></i> Sair</a></li>
      </ul>
    </div>
    <div class="admin-painel">
      <div class="painel-content">

        <div class="header-painel">
          <h2>Configurações de Conta</h2>
        </div>
        <form action="../Atualizarconta.php" id="formulario" method="post">
          <table class="adimn-usuarios-table usuarios-table">
            <tr>
              <th>Login</th>
              <th>Senha</th>
              <th>CPF</th>

            </tr>

            <tr>
              <td class="editable" contenteditable="true" data-column="Login"><input type="text" value="<?php echo $_SESSION['Login']; ?>" name="login"></td>
              <td class="editable" contenteditable="true" data-column="Senha"><input type="password" name="senha"></td>
              <td class="editable" contenteditable="true" data-column="CPF"><input type="number " value="<?php echo $_SESSION['Cpf']; ?>" name="cpf"></td>

            </tr>

          </table>
          <div class="encerrar">
            <h2>Encerrar Conta</h2>
            <li><button class="delete-btn" onclick="confirmDelete(<?php echo $_SESSION['Cpf']; ?>)"><i class="fas fa-solid fa-trash"></i>Encerrar</button></li>
          </div>
          <div class="encerrar">
            <li>
              <button class="delete-btn" id="update_button" disabled>
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                  <path d="M463.5 224H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1c-87.5 87.5-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5z" />
                </svg>
                Atualizar
              </button>
            </li>
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

  function confirmDelete(cpfUsuario) {
    var resposta = confirm("Tem certeza que deseja excluir este usuário?");
    if (resposta) {
      // Se o usuário confirmar, redirecione para um script PHP que lida com a exclusão
      window.location.href = "../admin/deletar.php?cpf=" + cpfUsuario;
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