<?php

namespace App;

class Employe extends Salarie
{
    private float $nbHeuresMensuelles;
    private float $tauxHoraire;
    private float $nbHeuresSup;

    public function __construct(string $prenom, string $nom, int $age, Entreprise $entreprise)
    {
        // Appel au constructeur de la classe Salarié
        parent::__construct($prenom, $nom, $age, $entreprise);
    }

    public function prensenter()
    {
        dump ("Bonjour, je suis {$this->getPrenom()} {$this->getNom()}, j'ai {$this->getAge()} ans.");
    }

    public function calculerSalaire()
    {
        return $this->nbHeuresMensuelles*$this->tauxHoraire+$this->nbHeuresSup*($this->tauxHoraire*1.25);
    }

    /**
     * @param float $nbHeuresMensuelles
     */
    public function setNbHeuresMensuelles(float $nbHeuresMensuelles): void
    {
        $this->nbHeuresMensuelles = $nbHeuresMensuelles;
    }

    /**
     * @param float $tauxHoraire
     */
    public function setTauxHoraire(float $tauxHoraire): void
    {
        $this->tauxHoraire = $tauxHoraire;
    }

    /**
     * @param float $nbHeuresSup
     */
    public function setNbHeuresSup(float $nbHeuresSup): void
    {
        $this->nbHeuresSup = $nbHeuresSup;
    }

    /**
     * @param float $tauxHoraireHeureSup
     */
    public function setTauxHoraireHeureSup(float $tauxHoraireHeureSup): void
    {
        $this->tauxHoraireHeureSup = $tauxHoraireHeureSup;
    }



}