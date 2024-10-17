<?php

namespace Class;

interface PDFDownloader
{
    public function  downloadPDF(?int $size = null): string;
}
