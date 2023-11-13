<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo "senha" foi preenchido
    if (isset($_POST["senha"])) {
        $login = $_POST["login"];
        $senha = $_POST['senha'];

        require 'connection.php';
        $minhaConexao = new mysqldbUsuario();
        $minhaConexao->Login_Usuario($login, $senha);
    }

} else {
<<<<<<< HEAD
    //Xampp
    // header('location: /projeto-telecall');
    // exit; 
    header('location: http://localhost:8080/projeto-telecall');
    exit;
}

require 'connection.php';
$minhaConexao = new mysqldbUsuario();
$minhaConexao->Login_Usuario($nome, $senha);





=======
    // REDIRECIONAR PARA PAGINA DE ERRO
    header('Location: /projeto-telecall/erro-login.php');
    exit;
}
>>>>>>> 19647ce3ce6c9e2c52a0bdae9c307b9a04a6d294
?>