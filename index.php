<?php

require("classes/Arme.php");
require("classes/Hero.php");

$epee = new Arme("Épée de Damoclès", 15);
$lance = new Arme("Lance Ahonan", 10);

$epee->setNom("");
var_dump($epee->getNom());

$hero1 = new Hero("Chuck Noriss", 100);
$hero2 = new Hero("Jet Lee", 100);
