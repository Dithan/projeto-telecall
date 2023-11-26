<?php
// Inclua a biblioteca TCPDF
require_once(__DIR__ .'/tcdpf/tcpdf.php');

// Crie uma instância do TCPDF
$pdf = new TCPDF();

// Adicione uma página ao PDF
$pdf->AddPage();

// Adicione conteúdo ao PDF
$pdf->SetFont('dejavusansi', 'B', 8);

include_once '../Include/connection.php';

$Sql = new Conn(HOST, USER, PASS, "Telecall");

$result = $Sql->getQueryAdmin();
$resultcheck = mysqli_num_rows($result);

// Inicialize a matriz $data fora do loop
$data = array();

if ($resultcheck >= 1) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Adicione uma linha para cada usuário
        $data[] = array(
            $row['nome'],
            $row['sexo'],
            $row['cpf'],
            $row['endereco'],
            $row['complemento'],
        );
    }
}

$colWidths = array(50, 30, 34, 34, 38);

$pdf->Cell($colWidths[0], 10, 'Nome', 1);
$pdf->Cell($colWidths[1], 10, 'Sexo', 1);
$pdf->Cell($colWidths[2], 10, 'CPF', 1);
$pdf->Cell($colWidths[3], 10, 'Endereço', 1);
$pdf->Cell($colWidths[4], 10, 'Complemento', 1);
$pdf->Ln(); 

// Loop pelos dados e adiciona ao PDF
foreach ($data as $row) {
    for ($i = 0; $i < count($row); $i++) {
        // Adiciona célula na linha
        $pdf->Cell($colWidths[$i] ?? 0, 10, $row[$i] ?? '', 1);
    }
    // Adiciona quebra de linha após cada linha
    $pdf->Ln();
}

// Saída do PDF para o navegador
$pdf->Output('arquivo.pdf', 'I');
?>