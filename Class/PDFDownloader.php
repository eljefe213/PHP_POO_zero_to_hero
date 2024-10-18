<?php

namespace AppClass;

interface PDFDownloader
{
    public function  downloadPDF(?int $size = null): string;
}
