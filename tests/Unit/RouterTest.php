<?php

use PHPUnit\Framework\TestCase;
use Router\Router;

class RouterTest extends TestCase
{
    /** @test */
    public function it_registers_routes(): void
    {
        $router = new Router();

        $router->register('/', ['Controllers\HomeController', 'index']);

        $this->assertEquals(
            ['/' => ['Controllers\HomeController', 'index']],
            $router->getRoutes()
        );
    }
}
