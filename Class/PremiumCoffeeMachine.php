<?php

namespace Class;

class PremiumCoffeeMachine extends CoffeeMachine
{
    protected int $cups = 2;

    public function select(string $selection)
    {
        $result = match ($selection) {
            'espresso' => $this->makeEspresso(),
            'vanilla' => $this->makeVanilla(),

            default => 'erreur'
        };

        return $result;
    }

    protected function makeVanilla()
    {
        for ($i = 0; $i < $this->cups; $i++) {
            echo 'Café Vanille n°' . $i + 1 . ' servi !';
        }
    }
}
