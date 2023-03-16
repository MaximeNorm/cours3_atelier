<?php

require("classes/Arme.php");
require("classes/Heros.php");

$epee = new Arme("Épée de Damoclès", 15);
$lance = new Arme("Lance Ahonan", 10);


$chuck = new Heros("Chuck Noriss", $epee);
$jet = new Heros("Jet Lee", $lance);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combat à mort</title>
</head>

<body>
    <h1>FIGHT!</h1>

    <?php while ($chuck->estVivant() && $jet->estVivant()) : ?>
        <?= $chuck->attaquer($jet) ?><br>
        <?= $jet->attaquer($chuck) ?><br>
    <?php endwhile; ?>

    <?php if ($chuck->estVivant()) : ?>
        <p>Chuck Noriss a gagné</p>

    <?php else : ?>
        <p>Jet Lee a gagné</p>

    <?php endif; ?>
</body>

</html>