<?php

/*
Afficher les nombres de 0 à 9 avec une boucle for.
Afficher le message "première itération" lors de la première itération et le message "dernière itération" lors de la dernière itération.
*/

for ($i=0; $i < 10 ; $i++) {
    if ($i==0) {
        echo "{$i} première itération<br>\n";
    }
    elseif ($i==9) {
        echo "{$i} dernière itération<br>\n";
    }
    else {
        echo "$i<br>\n";
    }
}
