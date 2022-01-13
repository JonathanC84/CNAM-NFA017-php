<?php

//cette boucle for affiche les nombres de 0 à 9 (boucle avec compteur incrémenté)
for ($i = 0; $i < 10; $i++) {
    echo "$i<br>\n";
}

echo '<br>';

$fruits = ['Ananas','Banane','Cerise','Fraise','Orange',];

for ($i = 0;$i < count($fruits); $i++) {
    echo "{$fruits[$i]}<br>\n";
}

echo '<br>';

//on affiche seulement les éléments pairs
for ($i = 0; $i < count($fruits);$i+=2) {
    echo "{$fruits[$i]}<br>\n";
}

echo '<br>';

//la boucle foreach permet d'afficher toutes les valeurs du tableau
//syntaxe plus simple
foreach ($fruits as $fruit) {
    echo "$fruit<br>\n";
}

echo '<br>';

//la boucle foreach permet d'afficher aussi tous les index associés aux entrées du tableau
foreach ($fruits as $key => $value) {
    echo "$key : $value<br>\n";
}

echo '<br>';

$data = [
    'prenom' => 'Toto',
    'nom' => 'Dupont',
    'email' => 'toto.dupont@example.com'
];

foreach ($data as $value) {
    echo "$value<br>\n";
}

echo '<br>';

foreach ($data as $key => $value) {
    echo "$key : $value<br>\n";
}

echo '<br>';