<?php

/*
Créez un tableau contenant 5 cartes d'un jeu de 32 cartes à jouer.
Tirez un nombre "n" au hasard, compris entre 1 et 5 inclus.
À l'aide de ce nombre, retirer la "n-ième" carte de la main,
et afficher le nom de la carte qui a été retirée.
*/

require __DIR__.'/vendor/autoload.php';

$hand = [
    'As de pique',
    'Dame de coeur',
    '7 de trèfle',
    '10 de carreau',
    'Valet de trèfle',
];

dump($hand);

$tirage = random_int(1,5);

dump($tirage);

$carteJouee = array_splice ($hand, $tirage-1, 1);

dump($carteJouee);

echo "La carte jouée est la carte n°{$tirage}, {$carteJouee[0]}.<br>\n";