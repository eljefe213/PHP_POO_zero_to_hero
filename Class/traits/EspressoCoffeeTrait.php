<?php 

namespace AppClass\Traits;

trait EspressoCoffeeTrait
{

    public function makeEspresso(): string
    {
        return static::class . ': is Making espresso...';
    }
}