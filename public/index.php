<?php

use Class\BasicPDF;


require '../vendor/autoload.php';

$basicPDF = new BasicPDF();
var_dump($basicPDF->downloadPDF(), $basicPDF->downloadHTML());
