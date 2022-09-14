<?php

namespace App;

// extends signifie "hérite de"
// Tout ce qui est dans l'Employe (attributs est méthodes à
// l'exception du constructeur) est implicitement déclaré dans Patron
class Patron extends Salarie
{
    // Spécificités attributes
    private string $voiture;

    public function __construct(string $prenom, string $nom, int $age, string $voiture)
    {
        // Appel au constructeur de la classe Employe
        parent::__construct($prenom, $nom, $age);
        $this->voiture = $voiture;
    }

    // Spécificités méthodes
    public function deplacer() : void {
        dump("Je me déplace en $this->voiture.");
    }

    // Redéfinir la méthode presenter afin l'adapter à la classe Patron
    public function prensenter(): void
    {
        dump( "Je suis le patron, je me nomme {$this->getPrenom()} {$this->getNom()} et j'ai {$this->getAge()} ans");
    }

    public function calculerSalaire()
    {
        // TODO: Implement calculerSalaire() method.
    }
}