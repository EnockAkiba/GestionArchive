<?php

require_once '../dompdf/autoload.inc.php';
ob_start();
 require_once 'content.php';
 $html=ob_get_contents();
 ob_clean();
use Dompdf\Dompdf;
use Dompdf\Options;
$pdf= new Dompdf();
$pdf->setPaper("A4", "portrait");
$pdf->loadHtml($html);
$pdf->render();
$nom="ACTE DE MARIAGE";
$pdf->stream($nom, array('Attachment'=>0));

?>