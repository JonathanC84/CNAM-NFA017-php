<?php

require __DIR__.'/vendor/autoload.php';

// (=, opérateur d'affectation)
$nbNum = 1;
$nbStr = '1';

//var_dump sert à inspecter une valeur
//ne doit JAMAIS servir à afficher des valeurs à l'utilisateur final !!

// égalité de valeur (==, opérateur d'égalité)
var_dump($nbNum==$nbStr);
// renvoie true

echo '<br>';

// égalité de valeur et de type (===, opérateur d'identité)
var_dump($nbNum===$nbStr);
// renvoie false

echo '<br>';

// utilisation du package var_dumper

$text = 'foo bar baz';
dump($text);

$int = 123;
dump($int);

$pi = 3.1416;
dump($pi);

$null = NULL;
dump($null);


