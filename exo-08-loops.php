<?php

require __DIR__.'/vendor/autoload.php';

/*
Créez toutes les cartes de l'as au roi dans les quatre couleurs en utilisant une boucle foreach qui parcours un tableau contenant les quatre couleurs et une boucle for qui est imbriquée.

Une carte est représentée par un tableau à clé alphanumérique, comme ci-dessous avec l'as de cœur :
[
    'value': 1,
    'color: 'cœur',
]

Le résultat final doit être un tableau contenant les éléments suivants :

[
    [
        'value': 1,
        'color: 'cœur',
    ],
    [
        'value': 2,
        'color: 'cœur',
    ],
    ...
        [
        'value': 13,
        'color: 'cœur',
    ],
    ...
    [
        'value': 1,
        'color: 'carreau',
    ],
    ...
    [
        'value': 1,
        'color: 'treffle',
    ],
    ...
    [
        'value': 1,
        'color: 'pique',
    ],
    ...
]

Ensuite, utilisez deux boucles foreach imbriquées pour afficher tous les éléments du tableau.
*/

$colors = ['cœur', 'carreau', 'trèfle', 'pique'];

foreach ($colors as $value) {
    for ($i=0; $i < 13; $i++) {
        $allCards[] = ['value' => $i+1 , 'color' => $value];
    }
}

dump($allCards);

foreach ($allCards as $oneCard) {
    dump($oneCard);
    $cardName = "{$oneCard['value']} de {$oneCard['color']}";
    $cardName=preg_replace('/^1 /', 'As ', $cardName);
    $cardName=preg_replace('/^11 /', 'Valet ', $cardName);
    $cardName=preg_replace('/^12 /', 'Dame ', $cardName);
    $cardName=preg_replace('/^13 /', 'Roi ', $cardName);
    echo "$cardName<br>\n";
}

