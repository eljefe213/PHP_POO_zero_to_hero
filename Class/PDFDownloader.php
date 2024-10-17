<?php

namespace Class;

interface PDFDownloader extends HTMLDownloader
{
    public function  downloadPDF(?int $size = null): string;
}
