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


//tirage de deux entiers aléatoires
$tirage1=random_int(1,$totalCartes);
$tirage2=random_int(1,$totalCartes-1);

dump($tirage1);
dump($tirage2);

echo "Les cartes {$tirage1} et {$tirage2} ont été tirées.<br>\n";


//utilisation des entiers aléatoires pour retirer les cartes de la main
$carte1=array_splice($hand,$tirage1-1,1);
dump($carte1);
dump($hand);
$carte2=array_splice($hand,$tirage2-1,1);
dump($carte2);
dump($hand);


//remplacement du nom des cartes figures pour l'affichage
$nomCarte1=$carte1[0];
$nomCarte2=$carte2[0];
dump($nomCarte1);
dump($nomCarte2);

$nomCarte1=preg_replace('/^1 /', 'As ', $nomCarte1);
$nomCarte1=preg_replace('/11 /', 'Valet ', $nomCarte1);
$nomCarte1=preg_replace('/12 /', 'Dame ', $nomCarte1);
$nomCarte1=preg_replace('/13 /', 'Roi ', $nomCarte1);
$nomCarte2=preg_replace('/^1 /', 'As ', $nomCarte2);
$nomCarte2=preg_replace('/11 /', 'Valet ', $nomCarte2);
$nomCarte2=preg_replace('/12 /', 'Dame ', $nomCarte2);
$nomCarte2=preg_replace('/13 /', 'Roi ', $nomCarte2);

echo "Les cartes jouées sont {$nomCarte1} et {$nomCarte2}.<br>\n";


//comparaison des valeurs des deux cartes
$valeurCarte1=(int) $carte1[0];
$valeurCarte2=(int) $carte2[0];

dump($valeurCarte1);
dump($valeurCarte2);

if ($valeurCarte1==$valeurCarte2) {
        echo "Égalité.<br>\n";
} elseif (($valeurCarte2!=1)&&($valeurCarte1==1||$valeurCarte1>$valeurCarte2)) {
        echo "{$nomCarte1} l'emporte sur {$nomCarte2}.<br>\n";
} else {
        echo "{$nomCarte2} l'emporte sur {$nomCarte1}.<br>\n";
}