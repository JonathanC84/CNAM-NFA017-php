<?php

/*
Creéz un tableau contenant 5 cartes d'un jeu de 32 cartes à jouer.

Exemple de nom de cartes : '1 pique', '3 carreau', '11 trèfle', etc.

Rappel des valeurs de certaines cartes :

- As : 1
- Valet : 11
- Dame : 12
- Roi : 13

Stockez la taille du tableau dans une variable.

Tirez deux nombres au hasard, compris entre 1 et la taille du tableau inclus, en utilisant la fonction random_int().
Stockez ces nombres dans un tableau.

Si le même nombre a été tiré deux fois, affichez message qui dit :
affichez un message qui dit que le même nombre a été tiré, puis arrêtez le programme avec la fonction exit().

À l'aide de ces nombres, retirer deux cartes de la main.

Affichez les nombres tirés au hasard et le nom des cartes qui ont été retirées.

Comparez les valeurs numériques des cartes et affichez quelle carte a une valeur supérieure.
Par convention, la carte As (valeur 1) est la plus élevée.
*/

require __DIR__.'/vendor/autoload.php';

$hand = [
        '1 de pique',
        '12 de coeur',
        '7 de trèfle',
        '10 de carreau',
        '11 de trèfle',
    ];

dump($hand);

$totalCartes = count($hand);

$tirage1=random_int(1,5);
$tirage2=random_int(1,5);

dump($tirage1);
dump($tirage2);

echo "{$tirage1} et {$tirage2} ont été tirés.<br>\n";

if ($tirage1==$tirage2) {
        echo "Le même nombre a été tiré 2 fois, le programme s'arrête.<br>\n";
        exit();
} else {
        $carte1=array_slice($hand,$tirage1-1,1);
        $carte2=array_slice($hand,$tirage2-1,1);
        dump($carte1);
        dump($carte2);
        echo "Les cartes jouées sont {$carte1[0]} et {$carte2[0]}.<br>\n";
        $valeurCarte1=(int) $carte1[0];
        $valeurCarte2=(int) $carte2[0];
        dump($valeurCarte1);
        dump($valeurCarte2);
        if ($valeurCarte1==$valeurCarte2) {
                echo "Égalité.<br>\n";
        } elseif (($valeurCarte2!=1)&&($valeurCarte1==1||$valeurCarte1>$valeurCarte2)) {
                echo "{$carte1[0]} l'emporte sur {$carte2[0]}.<br>\n";
        } else {
                echo "{$carte2[0]} l'emporte sur {$carte1[0]}.<br>\n";
        } 
}