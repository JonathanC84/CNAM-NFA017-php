<?php

declare (strict_types = 1);

//inclusion d'un mécanisme d'autoloading de php
require __DIR__.'/vendor/autoload.php';

//création d'une variable aléatoire comprise entre 0 et 1, puis convertie en booléen.

$isWaterOff = (bool) random_int(0,1);

$isGasOff = (bool) random_int(0,1);

dump($isWaterOff);
dump($isGasOff);

if ($isWaterOff&&$isGasOff) {
    echo 'Vous pouvez partir en vacances l\'esprit tranquille.<br>';
}
else if (!$isGasOff&&$isWaterOff) {
    echo 'Vous avez oublié de couper le gaz !<br>';
}
else if (!$isWaterOff&&$isGasOff) {
    echo 'Vous avez oublié de couper l\'eau !<br>';
}
else {
    echo 'Vous n\'avez rien coupé du tout, espèce d\'inconscient !<br>';
}


$hasPaymentCard = (bool) random_int(0,1);
$hasCash = (bool) random_int(0,1);

dump($hasPaymentCard);
dump($hasCash);

if ($hasPaymentCard||$hasCash) {
    echo "Vous pouvez aller faire vos courses.<br>\n";
    if (!$hasPaymentCard) {
        echo "Vous n'avez pas la carte de crédit.<br>\n";
    }
    if (!$hasCash) {
        echo "Vous n'avez pas de liquide.<br>\n";
    }
} else {
    echo "Vous ne pouvez pas partir faire les courses.<br>\n";
    echo "Vous n'avez aucun moyen de paiement.<br>\n";
}

$stock = random_int(0,10);

dump($stock);
if ($stock==0) {
    echo "Rupture de stock<br>\n";
} elseif ($stock==1) {
    echo "Il ne reste qu'une seule pièce.<br>\n";
} elseif ($stock<=3) {
    echo "Il reste {$stock} pièces.<br>\n";
} else {
    echo "Stock disponible";
}

$group = random_int(0,3);
dump($group);

switch ($group) {
    case 1:
        echo "Vous êtes dans le groupe 1.<br>\n";
        break;
    case 2:
        echo "Vous êtes dans le groupe 2.<br>\n";
        break;
    case 3:
        echo "Vous êtes dans le groupe 3.<br>\n";
        break;
    default:
        echo "Vous n'êtes dans aucun groupe.<br>\n";
}

/* yoda conditions

$value=15;
if (15=$value) {
    echo "La valeur est égale à 15<br>\n";
}

retourne une erreur, car erreur de syntaxe :
= : affectation, == : égalité

*/
