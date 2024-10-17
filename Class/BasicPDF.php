<?php

namespace Class;

class BasicPDF  implements PDFDownloader
{
    public function __construct()
    {
        echo 'OK';
    }
    public function  downloadPDF(?int $size = null): string
    {
        return 'PDF téléchargé (Basic)';
    }
}
