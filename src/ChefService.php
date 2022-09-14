<?php

namespace App;

class ChefService extends Salarie
{
    private string $service;

    public function __construct(string $prenom, string $nom, int $age, string $service)
    {
        // Appel au constructeur de la classe Employe
        parent::__construct($prenom, $nom, $age);
        $this->service = $service;
    }

    public function prensenter(): void
    {
        dump ("Bonjour, je suis {$this->getPrenom()} {$this->getNom()}, j'ai {$this->getAge()} ans et je suis le chef du service {$this->service}");
    }

    public function calculerSalaire()
    {
        // TODO: Implement calculerSalaire() method.
    }
}