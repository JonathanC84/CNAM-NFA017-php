<?php

require __DIR__.'/vendor/autoload.php';

dump(__DIR__);

$emptyArray=[];

$fruits=['Ananas','Banane','Cerise'];

//alternative
$fruits=[
    'Ananas', //index 0
    'Banane',
    'Cerise',
];

dump($fruits);

//attention à l'index (n-1)
echo "fruit n°1 : {$fruits[0]}<br>\n";
echo "fruit n°2 : {$fruits[1]}<br>\n";
echo "fruit n°3 : {$fruits[2]}<br>\n";

//changement d'un élément du tableau
$fruits[0]='Abricot';

dump($fruits);

echo "fruit n°1 : {$fruits[0]}<br>\n";
echo "fruit n°2 : {$fruits[1]}<br>\n";
echo "fruit n°3 : {$fruits[2]}<br>\n";

//connaître la taille d'un tableau avec la fonction count
$size = count($fruits);

echo "Il y a {$size} fruits.<br>\n";

//on peut écrire directement :
//echo "Il y a ".count($fruits)." fruits.<br>\n";



