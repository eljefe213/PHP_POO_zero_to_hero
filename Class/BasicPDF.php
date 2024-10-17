<?php

namespace Class;

class BasicPDF  implements PDFDownloader
{
    public function  downloadPDF(): string
    {
        return 'PDF téléchargé (Basic)';
    }
}
