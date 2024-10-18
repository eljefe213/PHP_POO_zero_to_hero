<?php

namespace AppClass;

class BasicPDF  implements PDFDownloader
{
    public function  downloadPDF(?int $size = null): string
    {
        return 'PDF téléchargé (Basic)';
    }
}
