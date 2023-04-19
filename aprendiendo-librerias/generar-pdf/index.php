<?php 

require_once '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new html2pdf();

//recoger la vista a imprimir 
ob_start();
require_once 'pdf_para_generar.php';
$html=ob_get_clean();


$html2pdf->writeHtml($html);
$html2pdf->output('pdf_generado.pdf');


?>