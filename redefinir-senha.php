<?php 


// redefinir-senha.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
     $cpf = $_POST["cpf"];
     $data_nascimento = $_POST["data_nascimento"];
     $nome_mae = $_POST["nome_materno"];
       
       require './Include/connection.php';
       $result  = new Conn(HOST, USER, PASS, "Telecall");
   
   
      if( $result->verifyCpf($cpf,$data_nascimento,$nome_mae)){
       header("Location: " . URL . "/nova-senha.php?cpf=$cpf");
      exit;
      }
   
} else {
    // Se o formulário não foi enviado por POST, redirecione para a página de solicitação
    header("Location: " . URL);
    exit;
}
