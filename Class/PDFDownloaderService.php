<?php

namespace Class;

use Class\BasicPDF;

class PDFDownloaderService
{
    public function downloadPDF(PDFDownloader $basicPDF)
    {
        return $basicPDF->downloadPDF();
    }
}
