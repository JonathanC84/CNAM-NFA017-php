<?php

require __DIR__.'/vendor/autoload.php';

/*
Créez toutes les cartes de l'as au roi de cœur en utilisant une boucle for.
Le résultat doit être un tableau contenant les éléments suivants : ['1 cœur', '2 cœur', '3 cœur', ..., '13 cœur']

Ensuite, utilisez une boucle foreach pour afficher tous les éléments du tableau.
*/

$cartesCoeur=[];

for ($i=0; $i < 13 ; $i++) {
    $j=$i+1; 
    $cartesCoeur[] = "{$j} de coeur";  
}

dump($cartesCoeur);

foreach ($cartesCoeur as $value) {
    $nomCarte=$value;
    $nomCarte=preg_replace('/^1 /', 'As ', $nomCarte);
    $nomCarte=preg_replace('/^11 /', 'Valet ', $nomCarte);
    $nomCarte=preg_replace('/^12 /', 'Dame ', $nomCarte);
    $nomCarte=preg_replace('/^13 /', 'Roi ', $nomCarte);
    echo "$nomCarte<br>\n";
}

