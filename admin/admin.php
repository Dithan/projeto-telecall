<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Tellecal</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="shortcut icon" href="../assets/media/Icons/favicon.ico" type="image/x-icon">
</head>
<body class="admin-body">
  <div class="admin-content">
    <div class="admin-menu">
      <figure class="logo-admin"><img src="../assets/media/imagens/logo_telecall_branco_vermelho_p.png" alt=""></figure>
      <h1 class="admin-tit">Bem Vindo [Nome]</h1>
    </div>
    <div class="admin-painel">

    <h2>Lista de Usuários</h2>

    <table class="adimn-usuarios-table">
      <tr>
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>Sexo</th>
        <th>Nome Materno</th>
        <th>CPF</th>
        <th>Celular</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Complemento</th>
        <th>Login</th>
        <th>Senha</th>
      </tr>
      <tr>
        <!-- Exemplo de dados (substitua com dados reais do seu banco de dados) -->
        <td class="editable" contenteditable="true" data-column="Nome">João Silva</td>
        <td class="editable" contenteditable="true" data-column="DataNascimento">1990-01-01</td>
        <td class="editable" contenteditable="true" data-column="Sexo">Masculino</td>
        <td class="editable" contenteditable="true" data-column="NomeMaterno">Maria Silva</td>
        <td class="editable" contenteditable="true" data-column="CPF">123.456.789-00</td>
        <td class="editable" contenteditable="true" data-column="Celular">(11) 9 8765-4321</td>
        <td class="editable" contenteditable="true" data-column="Telefone">(11) 1234-5678</td>
        <td class="editable" contenteditable="true" data-column="Endereco">Rua Exemplo, 123</td>
        <td class="editable" contenteditable="true" data-column="Complemento">Apt 4</td>
        <td class="editable" contenteditable="true" data-column="Login">joao.silva</td>
        <td class="editable" contenteditable="true" data-column="Senha">*******</td>
      </tr>
      <!-- Adicione mais linhas conforme necessário -->
    </table>

    </div>
  </div>
  
</body>
</html>