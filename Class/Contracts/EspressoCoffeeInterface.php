<?php 

namespace AppClass\Contracts;

interface EspressoCoffeeInterface
{
    public function makeEspresso() : string;
}