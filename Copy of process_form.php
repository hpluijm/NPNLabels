<?php


$ordernummer=$_POST["element_1"];
$omschrijving=$_POST["element_2"];
$hoeveelheid=$_POST["element_3"];


require('code39.php');

$pdf = new PDF_Code39();
$pdf->AddPage();

$pdf->Code39(135, 90, $ordernummer);

$pdf->SetFont('Arial','B',20);
$pdf->Text(25, 50, "NPN drukkers");
$pdf->Text(25, 58, "Minervum 7250");
$pdf->Text(25, 66, "4817ZM  Breda");
$pdf->SetFont('Arial','B',22);
$pdf->Text(25, 103, "Ordernummer: ".$ordernummer);
$pdf->Text(25, 194, "Qty: ".$hoeveelheid);
$pdf->Code39(135, 46, '12089');

$pdf->SetFont('Arial','B',22);
$pdf->Text(25, 152, $omschrijving);


$pdf->Code39(135, 180, $hoeveelheid);
$pdf->Output();


?>