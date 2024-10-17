<?php

namespace Class;

interface PDFDownloader
{
    public function __construct();
    public function  downloadPDF(?int $size = null): string;
}
