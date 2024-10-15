<?php 

namespace Class;

class Vehicule {
    public function __construct(protected string $marque) {
        
    }

    public function rouler() : string {
        return 'roule';
    }

    public function marque() : string {
        return 'Je roule en' . $this->marque . '.';
    }
}