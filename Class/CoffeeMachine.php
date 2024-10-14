<?php

namespace Class;

class CoffeeMachine
{
    public int $cups = 1;

    public function select(string $selection)
    {
        $result = match ($selection) {
            'espresso' => $this->makeEspresso(),
            default => 'erreur'
        };

        return $result;
    }

    public function makeEspresso()
    {
        for ($i = 0; $i < $this->cups; $i++) {
            echo 'Café Espresso n°' . $i + 1 . ' servi !';
        }
    }
}
