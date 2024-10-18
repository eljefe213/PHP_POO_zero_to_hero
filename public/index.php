<?php

use AppClass\BasicPDF;
use AppClass\PDFDownloaderService;
use AppClass\PremiumPDF;

require '../vendor/autoload.php';

// $basicPDF = new BasicPDF();
$premiumPDF = new PremiumPDF();
// var_dump($basicPDF->downloadPDF());

$PDFDownloaderService = new PDFDownloaderService();
var_dump($PDFDownloaderService->downloadPDF($premiumPDF));
