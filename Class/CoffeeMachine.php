<?php

namespace Class;

class CoffeeMachine
{
    protected int $cups;



    public function select(string $selection)
    {
        $result = match ($selection) {
            'espresso' => $this->makeEspresso(),
            default => 'erreur'
        };

        return $result;
    }

    protected function makeEspresso()
    {
        for ($i = 0; $i < $this->cups; $i++) {
            echo 'Café Espresso n°' . $i + 1 . ' servi !';
        }
    }
}
