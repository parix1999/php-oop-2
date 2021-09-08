<?php

require_once 'utente.php';


class Eshop {
    // Nome dello shop:
    public $name;
    // Indirizzo, entrabi pubblici perchè tutti possono vederli:
    public $adress;

    // UTENTI; Collgegati dal collegamento:
    private $utenti = [];

    // Li assegno gli argomenti che voglio io:
    public function __construct(string $nomeShop, string $indirizzo) {
        $this->name = $nomeShop;
        $this->adress = $indirizzo;
    }

    // Va messo dentro agli argomenit la classe del collegamento degli oggetti che si vogliono aggiungere:
    public function addClient(Utente $utente) {
        $this->utenti[] = $utente ;
    }

}

// Assegno ad una variabile il mio oggetto con dentro nelle parentesi gli argomenti che li voglio passare:
$shop = new Eshop('TuttoPerTutti', 'Via della Grazia');
var_dump($shop);


// Ora vediamo se gli oggetti sono passati dall'altro file in questa array:
$primoUtente = new Utente1();
var_dump($primoUtente);

$secondoUtente = new Utente2();
var_dump($secondoUtente);