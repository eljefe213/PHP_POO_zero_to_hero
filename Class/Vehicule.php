<?php

namespace Class;

abstract class Vehicule
{
    public function __construct(protected string $marque) {}

    public function rouler(): string
    {
        return 'Je roule';
    }

    public function marque(): string
    {
        return 'Je roule en' . $this->marque . '.';
    }
}
