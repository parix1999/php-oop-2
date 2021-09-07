<?php

class Eshop {
    // Nome dello shop:
    public $name;
    // Indirizzo, entrabi pubblici perchè tutti possono vederli:
    public $adress;

    // Li assegno gli argomenti che voglio io:
    public function __construct(string $nomeShop, string $indirizzo) {
        $this->name = $nomeShop;
        $this->adress = $indirizzo;
    }

}

// Assegno ad una variabile il mio oggetto con dentro nelle parentesi gli argomenti che li voglio passare:
$shop = new Eshop('TuttoPerTutti', 'Via della Grazia');
var_dump($shop);