<?php

require("classes/Arme.php");
require("classes/Heros.php");

$epee = new Arme("Épée de Damoclès", 15);
$lance = new Arme("Lance Ahonan", 10);


$chuck = new Heros("Chuck Noriss", $epee);
$jet = new Heros("Jet Lee", $lance);
