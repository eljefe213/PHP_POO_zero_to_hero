<?php

namespace Class;

class BasicPDF  implements PDFDownloader, HTMLDownloader
{
    public function  downloadPDF(?int $size = null): string
    {
        return 'PDF téléchargé (Basic)';
    }

    public function downloadHTML(?int $size = null): string
    {
        return 'HTML file téléchargé (Basic)';
    }
}
