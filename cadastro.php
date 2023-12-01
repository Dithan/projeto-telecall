<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Telecall - Cadastro</title>
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="shortcut icon" href="./assets/media/Icons/favicon.ico" type="image/x-icon">
</head>

<body>
  <!-- Inclui Header -->
  <?php include('./estrutura/header.php');
     include_once 'Include/connection.php';
     $Sql = new mysqldbUsuario();
   
     
     ?>

  <main class="cadastro-section container">
    <div class="conteudo-cadastro">
      <div class="form-image">
        <img src="./assets/media/SVG/undraw_learning_re_32qv.svg" alt="">
      </div>

      <div class="form">
        <form id="registrationForm" method="POST" action="Include/Cadastro.php">
          <div class="form-header">
            <div class="title">
              <h1>CADASTRE-SE</h1>
            </div>
          </div>

          <div class="input-group">
            <div class="group">

              <div class="input-box1">

                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" required minlength="10" maxlength="80" pattern="[A-Za-z ]+" name="nome" />

                <label for="login">Login:</label>
                <input type="text" id="login" required minlength="4" maxlength="6" pattern="[A-Za-z0-9]+" name="login" />

                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" required minlength="11" maxlength="11" placeholder="xxx.xxx.xxx-xx" pattern="[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}" name="cpf" />

                <label for="nomeMaterno">Nome Materno:</label>
                <input type="text" id="nomeMaterno" required name="nomeMaterno" />

                <label for="senha">Senha:</label>
                <input type="password" id="senha" required minlength="8" name="senha" />

                <label for="confirmSenha">Confirmação da Senha:</label>
                <input type="password" id="confirmSenha" required minlength="8" />
              </div>

              <div class="input-box2">
                <div class="birth">
                  <div class="birth-input1">
                    <label for="dataNascimento">Data de Nascimento:</label>
                    <input type="date" id="dataNascimento" required name="dataNascimento" />
                  </div>
                </div>

                <label for="telefoneFixo">Telefone Fixo:</label>
                <input type="text" id="telefoneFixo" placeholder="(55) xx-xxxxxxxx" required pattern="\+[0-9]{2}\[0-9]{2}-[0-9]{8}" name="telefoneFixo" minlength="12" maxlength="13" />

                <label for="telefoneCelular">Telefone Celular:</label>
                <input type="text" id="telefoneCelular" placeholder="(55) xx-xxxxxxxx" required pattern="\+[0-9]{2}\[0-9]{2}-[0-9]{8}" name="telefoneCelular" minlength="13" maxlength="13" />

                <label for="endereco">Endereço Completo:</label>
                <input type="text" id="endereco" required name="endereco" />

                <label for="complemento">Complemento: </label>
                <input type="text" id="complemento" placeholder="Casa, Apartamento, etc. " required name="complemento">

                <label for="sexo">Sexo:</label>
                <select class="sexo" id="sexo" required name="sexo">
                  <option value="masculino">Masculino</option>
                  <option value="feminino">Feminino</option>
                  <option value="Outros">Outros</option>
                  <option value="PrefiroNaoDizer">Prefiro Nao Dizer</option>
                </select>
              </div>
            </div>
          </div>
          <div class="cadastrar-btns">
            <button class="btn-primario" type="submit" value="CADASTRAR" id="enviarButton">Cadastrar</button>
            <button class="btn-secundario" type="submit" value="Limpar" id="limparButton">Limpar</button>
          </div>
        </form>
      </div>
    </div>
  </main>

  <script>
  // Função para formatar o CPF
  function formatarCPF(cpf) {
    return cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
  }

  // Função para formatar o telefone (celular e fixo)
  function formatarTelefone(telefone) {
    return telefone.replace(/(\+\d{2})(\d{2})(\d{8})/, '$1 $2-$3');
  }

  // Função para formatar campos enquanto o usuário digita
  function formatarCampos() {
    const cpfInput = document.getElementById("cpf");
    const telefoneCelularInput = document.getElementById("telefoneCelular");
    const telefoneFixoInput = document.getElementById("telefoneFixo");

    cpfInput.value = formatarCPF(cpfInput.value);
    telefoneCelularInput.value = formatarTelefone(telefoneCelularInput.value);
    telefoneFixoInput.value = formatarTelefone(telefoneFixoInput.value);
  }


  document.getElementById("cpf").addEventListener("input", formatarCampos);
  document.getElementById("telefoneCelular").addEventListener("input", formatarCampos);
  document.getElementById("telefoneFixo").addEventListener("input", formatarCampos);

  document.getElementById("enviarButton").addEventListener("click", function() {
    if (document.getElementById("senha").value !== document.getElementById("confirmSenha").value) {
      alert("As senhas não coincidem.");
    }
  });


  document.getElementById("limparButton").addEventListener("click", function() {
    document.getElementById("registrationForm").reset();
  });
  </script>
  <script src="./assets/JavaScript/Darkmode.js"></script>

</body>

<!-- Inclui Footer -->
<?php include('./estrutura/footer.php')?>

</html>
