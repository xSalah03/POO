<?php

require_once 'vendor/autoload.php';

use Src\Ecole\Etudiant;
use Src\Formation\Etudiant as FormationEtudiant;

$e = new Etudiant("Toto", "Tata");
$et = new FormationEtudiant();

var_dump($e);
var_dump($et);
