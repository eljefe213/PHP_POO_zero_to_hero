<?php 


namespace Class;

class PremiumPDF implements PDFDownloader
{
    public function downloadPDF(?int $size = null): string
    {
        return 'PDF Téléchargé (Premium)';
    }
}