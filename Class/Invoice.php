<?php 

namespace AppClass;

use AppClass\Traits\Mailable;

class Invoice
{
    use Mailable;
    public function download()
    {
        return 'download';
    }
}