<?php
require('code39.php');

$pdf = new PDF_Code39();
$pdf->AddPage();
$pdf->Code39(60, 30, '123456');
$pdf->Output();
?>
