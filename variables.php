<?php

//affectation d'une chaîne de caractères à une variable
$myVar = 'Je suis une chaîne de caractères.<br>';

echo $myVar;

$myVar = 123;

echo $myVar;
echo '<br>';

//affectation d'un chaîne de caractères vide
$noText = '';

echo $noText;
echo '<br>';

//affectation de valeurs booléennes à des variables
$isMorning = true;
$isSunny = false;

echo $isMorning;
echo '<br>';
echo $isSunny;
echo '<br>';

//affectation d'un nombre à virgule flottante
$pi = 3.14;
$e = 2.71;

echo $pi;
echo '<br>';
echo $e;
echo '<br>';

// affectation d'une valeur nulle
$referendum = null; //plutôt qu'initier la variable avec false ou true
                    // alors qu'aucun choix n'a été fait

echo $referendum;
echo '<br>';