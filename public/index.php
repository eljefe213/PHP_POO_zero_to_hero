<?php

use Class\BasicPDF;
use Class\PDFDownloaderService;

require '../vendor/autoload.php';

$basicPDF = new BasicPDF();
// var_dump($basicPDF->downloadPDF());

$PDFDownloaderService = new PDFDownloaderService();
var_dump($PDFDownloaderService->downloadPDF($basicPDF));
