<?php

namespace Class;

use Class\BasicPDF;

class PDFDownloaderService
{
    public function downloadPDF(BasicPDF $basicPDF)
    {
        return $basicPDF->downloadPDF();
    }
}
