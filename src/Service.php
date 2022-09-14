<?php

namespace App;

class Service
{
    private string $nom;
    private float $chiffreAffaireMensuelService;

    /**
     * @param string $nom
     */
    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return float
     */
    public function getChiffreAffaireMensuelService(): float
    {
        return $this->chiffreAffaireMensuelService;
    }

    /**
     * @param float $chiffreAffaireMensuelService
     */
    public function setChiffreAffaireMensuelService(float $chiffreAffaireMensuelService): void
    {
        $this->chiffreAffaireMensuelService = $chiffreAffaireMensuelService;
    }



}