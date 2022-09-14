<?php

require_once "vendor/autoload.php";

use App\Patron;
use App\ChefService;
use App\Entreprise;
use App\Interimaire;
use App\Employe;

$paul = new Employe("Paul", "Gravinese", 20);

$paul->prensenter();

$garance = new Patron("Garance","Bourgogne",20,"Polo");

echo PHP_EOL;
$garance->prensenter();
$garance->deplacer();

$alainDurand = new ChefService("Alain", "Durand", 38, "Informatique");
echo PHP_EOL;
$alainDurand->prensenter();

$leclec = new Entreprise("Leclec", "Monbéliard");

$leclec->embaucher($paul);
$leclec->embaucher($alainDurand);
$leclec->embaucher($garance);

$interimaire = new Interimaire("Laurine", "Mahon", 20, "IntermiPro");

$leclec->embaucher($interimaire);

dump($leclec->getSalaries());

$leclec->presenter();

dump($leclec->getChefsService());