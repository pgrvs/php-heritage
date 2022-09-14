<?php

require_once "vendor/autoload.php";

use App\Employe;

$employe = new Employe("Jean", "DUPOND", 45);
$employe->prensenter();