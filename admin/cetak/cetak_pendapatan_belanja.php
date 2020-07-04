<?php
require '../lib/html2pdf/vendor/autoload.php';

$tahun = $_GET['tahun'];

$filename = "pendapatan_belanja_tahun_" . $tahun . ".pdf";

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

try {
    ob_start();
    include 'pendapatan_belanja.php';
    $content = ob_get_clean();
    $html2pdf = new Html2Pdf('P', 'A4', 'en', false, 'UTF-8', array(2, 10, 2, 10));
    $html2pdf->setDefaultFont('Times');
    $html2pdf->writeHTML($content);
    $html2pdf->output($filename);
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}
