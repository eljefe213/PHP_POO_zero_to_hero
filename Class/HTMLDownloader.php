<?php

namespace Class;

interface HTMLDownloader
{
    public function downloadHTML(?int $size = null): string;
}
