<?php

/*
Afficher tous les éléments du tableau $fruits avec une boucle foreach.
Afficher le message "première itération" lors de la première itération et le message "dernière itération" lors de la dernière itération.
*/

$fruits = ['ananas', 'banane', 'cerise'];

foreach ($fruits as $key => $value) {
    if ($key==0) {
        echo "$key : $value (première itération)<br>\n";
    }
    elseif ($key==count($fruits)-1) {
        echo "$key : $value (dernière itération)<br>\n";
    }
    else {
        echo "$key : $value<br>\n";
    }
}