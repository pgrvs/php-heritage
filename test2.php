<?php

require_once "vendor/autoload.php";

use App\Employe;
use App\Patron;

$employe = new Employe("Jean", "DUPOND", 40);
$employe->prensenter();

$employe = new Patron("Pierre", "Martin", 42, "BMW");
$employe->prensenter();

