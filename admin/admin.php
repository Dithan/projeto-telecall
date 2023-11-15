<!DOCTYPE html>
<html lang="en">
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
      <h1 class="admin-tit">Bem Vindo [Nome]</h1>
      <ul class="admin-menu-list">
        <li><a href="#"><i class="fas fa-solid fa-download"></i> Baixar Lista PDF</a></li>
        <li><a href="#"><i class="fas fa-solid fa-door-open"></i> Sair</a></li>
      </ul>
    </div>
    <div class="admin-painel">
      <div class="painel-content">

      <div class="header-painel">
        <h2>Lista de Usuários</h2>

        <input type="text" id="pesquisa-usuario" onkeyup="buscaProduto()" placeholder="Buscar Usuário" class="campo" title="Buscar Usuário" data-aos="fade-up" data-aos-offset="0">
        <label class="icon-tabela" for="pesquisa-usuario"><i class="fas fa-search"></i></label>
      </div>

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
            <th>Excluir</th>
          </tr>

          <?php
            for($i = 0; $i < 10; $i++) { ?>
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
                <td><button class="delete-btn"><i class="fas fa-solid fa-trash"></i></button></td>
              </tr>
              
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
  
</body>
</html>