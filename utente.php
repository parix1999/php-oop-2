<?php

// Denire le due classi utenti, premium e non, e inserire gli utenti:
// Sevono due oggetti che partono da qui:
// Poi li si aggiungono nello shop, aggiungere degli oggetti e non stringhe;
// Cosi da avere delle caratteristiche particolari:

class Utente {
    // Li passiamo il valore in maniera protected, cosi da poter vedere il valore fuori ma non modificarlo:
    protected $label;

    protected $utenteType; // Se premium o normale

    public function getLabel() {
        return $this->label;
    }

    public function getType() {
        return $this->utenteType;
    }

}

// Creo un'altra classe con una sua estensione iniziale:
// Classi che fanno parte di UTENTE, in cima abbiamo UTENTI e poi ci sono varie ramificazioni con gli utenti (Ereditarietà):
class Utente1 extends Utente {
    // Qui inserisco le proprietà relative all'utente1:

    public function __construct() {
        $this->label = 'Gino';
        $this->utenteType = 'Premium';
    }


}

class Utente2 extends Utente {
    // Qui inserisco le proprietà relative all'utente1:

    public function __construct() {
        $this->label = 'Pippo';
        $this->utenteType = 'Normal';
    }


}

