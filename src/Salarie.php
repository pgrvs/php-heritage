<?php

namespace App;

abstract class Salarie
{
    private string $prenom;
    private string $nom;
    private int $age;

    /**
     * @param string $prenom
     * @param string $nom
     * @param int $age
     */
    public function __construct(string $prenom, string $nom, int $age)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
    }

    // Toute les sous classe de employe devront
    // OBLIGATOIREMENT implémenter la méthode presenter()
    abstract public function prensenter() ;
    abstract public function calculerSalaire();

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getAge(): int
    {
        return $this->age;
    }

}