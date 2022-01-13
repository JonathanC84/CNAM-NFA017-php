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

//accès en lecture
//affichage avec l'index []
//attention à l'index (n-1)
//accolades obligatoires à cause des crochets (@ apparemment ce n'est plus vrai avec la nouvelle version)
echo "fruit n°1 : {$fruits[0]}<br>\n";
echo "fruit n°2 : {$fruits[1]}<br>\n";
echo "fruit n°3 : {$fruits[2]}<br>\n";

//accès en écriture
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

//ajout d'éléments à la suite
$fruits[]='Datte';
$fruits[]='Fraise';

dump($fruits);

//compteur d'éléments dans un tableau
$size = count($fruits);
echo "Il y a {$size} fruits.<br>\n";

//suppression du premier élément avec array_shift
//ici transféré dans une nouvelle variable, pas obligatoire
$fruitA = array_shift($fruits);

//array_shift($fruits);

dump($fruitA); //chaîne de charactères
dump($fruits); //tableau

//suppression du dernier élément avec array_pop
$fruitF = array_pop($fruits);

dump($fruitF);
dump($fruits);

//supression d'un élément en milieu de tableau

//méthode de suppression qui réindexation
//retire, à partir de l'élément situé à l'index 1 (cerise), 1 seul élément (cerise)
$fruitRemoved = array_splice($fruits, 1, 1);

dump($fruitRemoved); //contient l'élément supprimé de $fruits
dump($fruits);

//insérer un tableau dans un autre en décalant les index
$toInsert=['a','b'];
$fruitRemoved = array_splice($fruits, 3, 0, $toInsert);

//cette syntaxe permet de supprimer l'élément sans le conserver dans une variable
array_splice($fruits, 1, 1);


//unset permet de retirer de la mémoire n'importe quelle variable
//plus simple à utiliser
//ATTENTION : ne réindexe pas, à bannir dans une boucle for et un compteur
unset($fruits[0]);

dump($fruits);

//fusionner deux arrays
$vegetables=['Artichaut','Betterave', 'Carotte'];

$bigList=array_merge($fruits,$vegetables);

dump($bigList);

//chercher une aiguille dans une botte de foin avec in_array
//retourne un booléen
if (!in_array('Ananas',$bigList)) {
    echo "Il n'y a pas d'ananas dans la liste.<br>\n";
}
if (in_array('Datte',$bigList))  {
    echo "Il y a des dattes dans la liste.<br>\n";
}

//tableau à clé, ou index alpha-numérique
//couple 'clé' => 'valeur'
//aussi appelé dictionnaire ou hash map
$data=[
    'nom'=>'Lorem',
    'prenom'=>'Toto',
    'age'=>18,
    'email'=>'toto.lorem@example.com',
    'newletter'=>true,
];

dump($data);

//accès en lecture
echo "Email : {$data['email']}";

//accès en écriture
$data['age']=12;

dump($data);

//ajout d'un couple clé/valeur
$data['spammer']=true;

dump($data);

//suppression d'un couple clé/valeur
//array_splice ne fonctionne pas
unset($data['spammer']);

dump($data);