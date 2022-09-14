<?php

namespace App;

class Interimaire extends Salarie
{
    private string $societeInterime;

    public function __construct(string $prenom, string $nom, int $age, string $societeInterime)
    {
        // Appel au constructeur de la classe Employe
        parent::__construct($prenom, $nom, $age);
        $this->societeInterime = $societeInterime;
    }

    public function prensenter(): void
    {
        dump ("Bonjour, je suis {$this->getPrenom()} {$this->getNom()} intérimaire, j'ai {$this->getAge()} ans et je viens de la société {$this->societeInterime}");
    }

}