<?php 
require('fpdf/fpdf.php');

$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$informe = $_POST['informe'];
$imag = $_POST['imag'];
$publi = $_POST['publi'];

$pdf = new FPDF();
$pdf ->AddPage();
$pdf -> setFont('Arial', 'B', 25);

$pdf -> Cell(0, 10, 'SOLICITUD DE NOTICIA', 0, 1, 'C');

$pdf -> setFont('Arial', 'B', 16);
$pdf -> setTextColor(255, 255, 255);
$pdf -> SetFillColor(0, 0, 0);  // Color de fondo de las celdas de la cabecera
$pdf -> Cell(95, 10, 'N', 1, 0, 'C', true);
$pdf -> Cell(95, 10, 'INFORME', 1, 1, 'C', true);

$pdf -> setFont('Arial', '', 12);
$pdf -> setTextColor(0, 0, 0);  // Color del texto de las celdas
$pdf -> SetFillColor(255, 255, 255);  // Color de fondo de las celdas

$pdf -> Cell(190, 10, 'Autor :', 1, 1, 'L', true);
$pdf -> MultiCell(190, 10, "$autor", 1, 'L', true);

$pdf -> Cell(190, 10, 'Titulo :', 1, 1, 'L', true);
$pdf -> MultiCell(190, 10, "$titulo", 1, 'L', true);

$pdf -> Cell(190, 10, 'Informe :', 1, 1, 'L', true);
$pdf -> MultiCell(190, 10, "$informe", 1, 'L', true);

$pdf -> Cell(190, 10, 'Link de IMGs :', 1, 1, 'L', true);
$pdf -> MultiCell(190, 10, "$imag", 1, 'L', true);

$pdf -> Cell(190, 10, 'Fecha para publicacion :', 1, 1, 'L', true);
$pdf -> MultiCell(190, 10, "$publi", 1, 'L', true);

$pdf -> Output('D', 'Informe_de_noticia.pdf');
?>
