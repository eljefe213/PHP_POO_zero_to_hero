<?php

namespace Controllers;

use Source\Renderer;

class HomeController
{
    public function index()
    {
        $renderer = new Renderer('home/index');
        return $renderer->view();
    }
}
