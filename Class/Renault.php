<?php 

namespace Class;

class Renault extends Vehicule {
    public function marque(): string {
        return 'Je suis un vehicule moderne et je suis une ' . $this->marque . '.';
    }
}