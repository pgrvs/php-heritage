<?php

require_once "vendor/autoload.php";

use App\Employe;
use App\ChefService;
use App\Patron;
use App\Entreprise;
use App\Service;

$entreprise = new Entreprise("Nom", "Ville");
$entreprise->setChiffreAffaireMensuelEntreprise(135851.12);

$employe = new Employe("Tiff", "GUERIN", 19,$entreprise);
$entreprise->embaucher($employe);
$employe->setNbHeuresMensuelles(151.67);
$employe->setTauxHoraire(11.07);
$employe->setNbHeuresSup(1.5);

dump("Salaire de {$employe->getPrenom()} {$employe->getNom()} : {$employe->calculerSalaire()}€ brut");

$service = new Service("Informatique");
$service->setChiffreAffaireMensuelService(26894.37);
$chefDeService = new ChefService("Liam","GENEBRIER", 20, $entreprise, $service );
$entreprise->embaucher($chefDeService);
$chefDeService->setSalaireFixe(1450.50);

dump ("Salaire de {$chefDeService->getPrenom()} {$chefDeService->getNom()} : {$chefDeService->calculerSalaire()}€ brut");

$patron = new Patron("Paul", "GRAVINESE", 20, $entreprise, "Porsche");
$entreprise->embaucher($patron);
$patron->setPrimeDirection(2300);

dump ("Salaire de {$patron->getPrenom()} {$patron->getNom()} : {$patron->calculerSalaire()}€ brut");

dump($entreprise->getSalaires());
dump("Masse salariale : ".$entreprise->calculerMasseSalariale());
dump("Salaire moyen : ".$entreprise->calculerSalaireMoyen()."€");
