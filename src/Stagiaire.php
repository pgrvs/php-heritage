<?php

namespace App;

class Stagiaire extends Salarie
{
    public function __construct(string $prenom, string $nom, int $age)
    {
        // Appel au constructeur de la classe Salarié
        parent::__construct($prenom, $nom, $age);
    }

    public function prensenter()
    {
        dump ("Bonjour, je suis {$this->getPrenom()} {$this->getNom()}, j'ai {$this->getAge()} ans.");
    }

    public function calculerSalaire()
    {
        // TODO: Implement calculerSalaire() method.
    }
}