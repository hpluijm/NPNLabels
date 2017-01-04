<?php


$ordernummer=$_POST["element_1"];
$omschrijving=$_POST["element_2"];
$hoeveelheid=$_POST["element_3"];


require('code39.php');

$pdf = new PDF_Code39();
$pdf->AddPage();

$pdf->Code39(120, 70, $ordernummer);

$pdf->SetFont('Arial','B',20);
$pdf->Text(35, 30, "NPN drukkers");
$pdf->Text(35, 38, "Minervum 7250");
$pdf->Text(35, 46, "4817ZM  Breda");
$pdf->SetFont('Arial','B',26);
$pdf->Text(35, 83, "Ordernummer:");
$pdf->Text(35, 174, "Qty: ".$hoeveelheid);
$pdf->Code39(120, 26, '12089');

$pdf->SetFont('Arial','B',35);
$pdf->Text(35, 132, $omschrijving);


$pdf->Code39(120, 160, $hoeveelheid);
$pdf->Output();


?>