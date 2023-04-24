<?php


//Afficher le mois, le jour, l'année, le moment de la journée (AM ou PM), l'heure et les minutes

$presentTime = new DateTime;
$presentTime->setDate(2023, 4, 24);
$presentTime->setTime(16,8);

$destinationTime = new DateTime;
$destinationTime->setDate(2024, 1, 1);
$destinationTime->setTime(8,50);

?>
<div>
    <h1>Affichage des deux dates</h1>
    <p>
        <?= $presentTime->format('M j, Y, g:i a'); ?>
    </p>
    <p>
        <?= $destinationTime->format('M j, Y, g:i a'); ?>
    </p>
</div>

<?php

$diff = new DateTime;
$diff = $destinationTime->diff($presentTime);

?>
<div>
    <h1>Durée entre les deux dates</h1>
    <p>
        <?= $diff->format('%y, %m, %d, %H, %i'); ?>
    </p>
</div>
