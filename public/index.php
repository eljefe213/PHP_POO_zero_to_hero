<?php

use Class\BasicPDF;
use Class\PDFDownloaderService;
use Class\PremiumPDF;

require '../vendor/autoload.php';

// $basicPDF = new BasicPDF();
$premiumPDF = new PremiumPDF();
// var_dump($basicPDF->downloadPDF());

$PDFDownloaderService = new PDFDownloaderService();
var_dump($PDFDownloaderService->downloadPDF($premiumPDF));
