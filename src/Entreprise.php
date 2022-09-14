<?php

namespace App;

class Entreprise
{
    private string $nom;
    private string $ville;
    private float $chiffreAffaireMensuelEntreprise;

    //Association avec Salarié
    /**
     * @var Salarie[]
     */
    private array $salaries = [];

    /**
     * @param string $nom
     * @param string $ville
     */
    public function __construct(string $nom, string $ville)
    {
        $this->nom = $nom;
        $this->ville = $ville;
    }

    // Méthode permetant d'embaucher un employé
    // Utiliser le polymorphisme d'objet sur le paramètre $employe
    public function embaucher(Salarie $salarie) : void {
        $this->salaries[] = $salarie;
    }

    public function presenter() : void {
        foreach ($this->salaries as $salarie) {
            $salarie->prensenter();
        };
    }

    public function getChefsService() : array {
        $chefsService = [];
        foreach ($this->salaries as $salarie) {
            if ($salarie instanceof ChefService) {
                $chefsService[] = ["Nom" => $salarie->getNom(), "Prénom" => $salarie->getPrenom()];
            }
        }
        return $chefsService;
    }

    /**
     * @return float
     */
    public function getChiffreAffaireMensuelEntreprise(): float
    {
        return $this->chiffreAffaireMensuelEntreprise;
    }

    /**
     * @param float $chiffreAffaireMensuelEntreprise
     */
    public function setChiffreAffaireMensuelEntreprise(float $chiffreAffaireMensuelEntreprise): void
    {
        $this->chiffreAffaireMensuelEntreprise = $chiffreAffaireMensuelEntreprise;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @return Salarie[]
     */
    public function getSalaries(): array
    {
        return $this->salaries;
    }


}