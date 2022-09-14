<?php

namespace App;

class ChefService extends Salarie
{
    private float $salaireFixe;
    private Service $service;

    public function __construct(string $prenom, string $nom, int $age, Entreprise $entreprise, Service $service)
    {
        // Appel au constructeur de la classe Employe
        parent::__construct($prenom, $nom, $age, $entreprise);
        $this->service = $service;
    }

    public function prensenter(): void
    {
        dump ("Bonjour, je suis {$this->getPrenom()} {$this->getNom()}, j'ai {$this->getAge()} ans et je suis le chef du service {$this->service}");
    }

    public function calculerSalaire()
    {
        return round($this->salaireFixe + $this->service->getChiffreAffaireMensuelService()/50,2);
    }

    /**
     * @param float $salaireFixe
     */
    public function setSalaireFixe(float $salaireFixe): void
    {
        $this->salaireFixe = $salaireFixe;
    }

    /**
     * @param float $chiffreAffaireMensuelService
     */
    public function setChiffreAffaireMensuelService(float $chiffreAffaireMensuelService): void
    {
        $this->chiffreAffaireMensuelService = $chiffreAffaireMensuelService;
    }

    /**
     * @return Service
     */
    public function getService(): Service
    {
        return $this->service;
    }



}