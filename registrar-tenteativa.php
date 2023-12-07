<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifique se a variável de tentativas está definida
    if (!isset($_SESSION['attempts'])) {
        $_SESSION['attempts'] = 0;
    }

    // Aumente o contador de tentativas
    $_SESSION['attempts']++;

    // Verifique se excedeu o número máximo de tentativas permitidas (por exemplo, 3)
    if ($_SESSION['attempts'] >= 3) {
        // Excedeu o número máximo de tentativas, faça logout e redirecione
        session_destroy();
        echo json_encode(['status' => 'excedeu_max_tentativas']);
        exit;
    } else {
        // Ainda dentro do limite de tentativas, retorne um status indicando a tentativa
        echo json_encode(['status' => 'tentativa_registrada']);        exit;
    }
}
?>
