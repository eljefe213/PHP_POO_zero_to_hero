<?php

namespace Class;

use Class\BasicPDF;

class PDFDownloaderService
{
    public function downloadPDF(PDFDownloader $PDFDownloader)
    {
        return $PDFDownloader->downloadPDF();
    }
}
